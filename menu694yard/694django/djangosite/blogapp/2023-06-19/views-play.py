


from django.shortcuts import render, get_object_or_404, redirect
from . import models
from . import forms
from django.contrib.auth.decorators import login_required, permission_required

@login_required
def post_list(request):
    posts = models.Post.objects.all()
    return render(request, 'post_list.html', {'posts': posts})

@login_required
@permission_required('blogapp.change_post')
def post_update(request, pk):
    post = get_object_or_404(models.Post, pk=pk)
    if request.method == 'POST':
        form = forms.PostForm(request.POST, instance=post)
        if form.is_valid():
            form.save()
            return redirect('post_detail', pk=pk)
    else:
        form = forms.PostForm(instance=post)
    return render(request, 'post_form.html', {'form': form})

@login_required
def post_create(request):
    if request.method == 'POST':
        form = forms.PostForm(request.POST)
        if form.is_valid():
            form.save()
            return redirect('post_list')
    else:
        form = forms.PostForm()
    return render(request, 'post_form.html', {'form': form})

@login_required
def post_detail(request, pk):
    post = get_object_or_404(models.Post, pk=pk)
    return render(request, 'post_detail.html', {'post': post})


from django.views import generic
from . import models
from . import forms

from rest_framework.views import APIView
from rest_framework.response import Response
from rest_framework.permissions import IsAuthenticated

from django.contrib.auth.mixins import LoginRequiredMixin, PermissionRequiredMixin

class HelloView(APIView):
    permission_classes = (IsAuthenticated,)
    def get(self, request):
        content = {'message': 'Hello, World dg.'}
        return Response(content)
        
        
'''

class PostListView(generic.ListView):
    model = models.Post
    form_class = forms.PostForm


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


'''
