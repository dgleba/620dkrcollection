# blog/urls.py

from django.urls import path
from . import views
# from .views import home_page


urlpatterns = [
    path('', views.article_list, name='article_list'),
    path('search/', views.article_search, name='article_search'),
    path('clear-search/', views.article_clear_search, name='article_clear_search'),
    path('article/<int:article_id>/', views.article_detail, name='article_detail'),
    # path('article/<int:pk>/', views.article_detail, name='article_detail'),
    path('article/create/', views.article_create, name='article_create'),  # form for creating article
    
    path('load-cities/', views.load_cities, name='load_cities'),
]

