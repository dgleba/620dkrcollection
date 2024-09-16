"""
URL configuration for djangoproject project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/4.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from django.views.generic import TemplateView
from django.contrib.auth import views as auth_views


urlpatterns = [
    path('', TemplateView.as_view(template_name='index1.html'), name='index1'),
    path('admin/', admin.site.urls),
    path('blogapp/', include('blogapp.urls')),
    path('forms/', include('formsapp.urls')),  # This will include the URLs defined in formsapp
    path('jsurvey1/', include('jsurveyapp.urls')),  # This will include the URLs defined in formsapp
    # path('formb/', include('formbuilderapp.urls')),
]

