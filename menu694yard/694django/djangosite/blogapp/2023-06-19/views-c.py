from django.views import generic
from . import models
from . import forms

from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework.permissions import IsAuthenticated

from django.contrib.auth.mixins import LoginRequiredMixin, PermissionRequiredMixin

from django.db.models import Q
# from myapp.models import Post
# from myapp.forms import PostForm

class PostListView(generic.ListView):
    model = models.Post
    form_class = forms.PostForm
    template_name = 'blogapp/post_list.html'  # Replace with your desired template name
    context_object_name = 'post_list'  # Replace with the desired context variable name

def get_queryset(self):
    query = self.request.GET.get('q', '')  # Retrieve the search query from the request's GET parameters

    if query:
        search_words = query.split()  # Split the search query into words
        queryset = super().get_queryset()

        # Create a query using Q objects to match each word in the search query
        search_query = Q()
        for word in search_words:
            search_query &= Q(title__icontains=word)  # Replace `title` with the field you want to search

        queryset = queryset.filter(search_query)  # Apply the query to the queryset

        return queryset

    return super().get_queryset()  # Return the original queryset if no search query is provided


'''
class PostListView(generic.ListView):
    model = models.Post
    form_class = forms.PostForm
'''

class PostCreateView(generic.CreateView):
    model = models.Post
    form_class = forms.PostForm


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
        

