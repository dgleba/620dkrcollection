from django.urls import path, include
# from rest_framework import routers

# from . import api


# formsapp/urls.py
from django.urls import path
from . import views

urlpatterns = [
    path('create/', views.create_form, name='create_form'),
    path('', views.form_list, name='form_list'),
    path('form/<int:form_id>/', views.render_form, name='render_form'),
    path('submit/<int:form_id>/', views.submit_form, name='submit_form'),
]
