from django.db.models import Q
from django.views import generic
from . import models
from . import forms
from django.contrib.admin import site


from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework.permissions import IsAuthenticated
from django.contrib.auth.mixins import LoginRequiredMixin, PermissionRequiredMixin

class PostListView(generic.ListView):
    model = models.Post
    form_class = forms.PostForm
    template_name = 'blogapp/post_list.html'  # Replace with your desired template name
    context_object_name = 'post_list'  # Replace with the desired context variable name

    # search box.
    def get_queryset(self):
        query = self.request.GET.get('q', '')
        if query:
            search_words = query.split()
            queryset = super().get_queryset()

            model_admin = site._registry.get(models.Post)  # Get the ModelAdmin instance
            search_fields = model_admin.search_fields
            print(search_words)
            print( search_fields)
            
            search_query = Q()

            # for word in search_words - one field:
                # search_query |= Q(title__icontains=word)  # Replace `title` with the field you want to search

            #works. searches all admin search fields like django admin search box does.
            for word in search_words:
                for field in search_fields:
                    search_query |= Q(**{field + '__icontains': word})


            # error:   idea to search all model fields. error - self.model.__name__
            # for word in search_words:
                # search_query |= Q(**{f'{self.model.__name__.lower()}__str__icontains': word})

            # Get all fields in model. works, but if foreign key may throw error.
            # field_names = [field.name for field in self.model._meta.get_fields() if field.concrete]
            # for word in search_words:
                # for field_name in field_names:
                    # search_query |= Q(**{f'{field_name}__icontains': word})

            # Get all fields in model. works, but if foreign key may throw error.
            # field_names = [field.name for field in self.model._meta.get_fields() if field.concrete]
            # Get all chr fields in model. 
            # error: AttributeError: module 'blogapp.models' has no attribute 'CharField'
            # field_names = [
                # field.name for field in self.model._meta.get_fields()
                # if field.concrete and isinstance(field, (models.CharField, models.TextField))
            # ]
            # print(field_names)
            # for word in search_words:
                # for field_name in field_names:
                    # search_query |= Q(**{f'{field_name}__icontains': word})


            queryset = queryset.filter(search_query)
            return queryset
        return super().get_queryset()


'''
class PostListView(generic.ListView):
    model = models.Post
    form_class = forms.PostForm
'''

class PostCreateView(generic.CreateView):
    model = models.Post
    form_class = forms.PostForm

    # set record owner as current user
    def form_valid(self, form):
        form.instance.user = self.request.user
        return super().form_valid(form)

class PostDetailView(generic.DetailView):
    model = models.Post
    form_class = forms.PostForm


class PostUpdateView(LoginRequiredMixin,PermissionRequiredMixin,generic.UpdateView):
    permission_required = ('blogapp.change_post',  )
    permission_classes = (IsAuthenticated,)
    model = models.Post
    form_class = forms.PostForm
    pk_url_kwarg = "pk"


class HelloView(APIView):
    permission_classes = (IsAuthenticated,)
    def get(self, request):
        content = {'message': 'Hello, World dg.'}
        return Response(content)
