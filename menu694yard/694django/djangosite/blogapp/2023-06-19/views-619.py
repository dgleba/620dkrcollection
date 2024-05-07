
from django.shortcuts import render, get_object_or_404, redirect
from . import models
from . import forms
from django.contrib.auth.decorators import login_required, permission_required

# @login_required
def post_list(request):
    posts = models.Post.objects.all()
    return render(request, 'post_list.html', {'posts': posts})
