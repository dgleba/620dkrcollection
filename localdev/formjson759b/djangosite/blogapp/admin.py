# blog/admin.py

from django.contrib import admin
from .models import Article, Tag

class ArticleAdmin(admin.ModelAdmin):
    list_display = ('title', 'body', 'published_at', 'updated_at')
    search_fields = ('title', 'body')
    autocomplete_fields = ('tags',)  # Make tags a searchable dropdown

class TagAdmin(admin.ModelAdmin):
    search_fields = ['name']  # Allow searching tags by name

admin.site.register(Article, ArticleAdmin)
admin.site.register(Tag, TagAdmin)
