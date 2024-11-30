from django.shortcuts import render, redirect, get_object_or_404
from django.http import HttpResponse
from .models import Article

def article_list(request):
    articles = Article.objects.all()
    return render(request, 'blogapp/article_list.html', {'articles': articles})

def article_detail(request, id):
    article = get_object_or_404(Article, id=id)
    return render(request, 'blogapp/article_detail.html', {'article': article})

def article_create(request):
    if request.method == 'POST':
        title = request.POST.get('title')
        body = request.POST.get('body')
        author = request.POST.get('author')
        
        # Create and save the new article
        article = Article(title=title, body=body, author=author)
        article.save()

        return redirect('article_list')
    
    return render(request, 'blogapp/article_create.html')


def article_edit(request, id):
    article = get_object_or_404(Article, id=id)

    if request.method == 'POST':
        # Retrieve form data from POST request
        article.title = request.POST.get('title')
        article.body = request.POST.get('body')
        article.author = request.POST.get('author')
        
        # Save the updated article
        article.save()
        
        # Redirect to the article detail view
        return redirect('article_detail', id=article.id)
    
    # Render the form with the article's current data
    return render(request, 'blogapp/article_edit.html', {'article': article})

