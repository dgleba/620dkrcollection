# blog/views.py

from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from django.db.models import Q
from .models import Article


def home_page(request):
    return render(request, 'blog/home_page.html')
    

def article_list(request):
    query = request.GET.get('search', '')

    if query:
        articles = Article.objects.filter(Q(title__icontains=query) | Q(body__icontains=query))
    else:
        # Get the search query from the cookie if the search box is empty
        query = request.COOKIES.get('article_search', '')
        articles = Article.objects.filter(Q(title__icontains=query) | Q(body__icontains=query)) if query else Article.objects.all()

    return render(request, 'blog/article_list.html', {'articles': articles, 'search_query': query})


def article_detail(request, article_id):
    article = get_object_or_404(Article, id=article_id)
    return render(request, 'blog/article_detail.html', {'article': article})


def article_search(request):
    query = request.GET.get('search', '')

    if query:
        articles = Article.objects.filter(Q(title__icontains=query) | Q(body__icontains=query))
    else:
        articles = Article.objects.all()

    response = render(request, 'blog/article_table_rows.html', {'articles': articles})

    # Set the search query in a cookie if there is a search term
    if query:
        response.set_cookie('article_search', query, max_age=123123123)  
    else:
        response.delete_cookie('article_search')  # Remove the cookie if search is cleared

    return response

def article_clear_search(request):
    articles = Article.objects.all()  # Clear search, show all articles
    response = render(request, 'blog/article_table_rows.html', {'articles': articles})

    # Remove the search cookie
    response.delete_cookie('article_search')

    return response

