from django.urls import path
from . import views

app_name = 'formbuilderapp'

urlpatterns = [
    path('create/', views.create_form, name='create_form'),
    path('<int:pk>/', views.form_detail, name='form_detail'),
    path('<int:pk>/submit/', views.submit_form, name='submit_form'),
]
