# blog/admin.py

from django.contrib import admin
from .models import Article, Tag
from .models import Province, City, Article

from django.db import models  # Import models from django.db

class ArticleAdmin(admin.ModelAdmin):
    list_display = [field.name for field in Article._meta.fields]
    # list_display = ('title', 'body', 'published_date', 'updated_at')
    search_fields = ('title', 'body')
    autocomplete_fields = ('tags',)  # Make tags a searchable dropdown
    
    # Make all text fields clickable links to the edit page
    # list_display_links = [field.name for field in Article._meta.fields if isinstance(field, (models.CharField, models.TextField))]
    list_display_links = [field.name for field in Article._meta.fields ]


class TagAdmin(admin.ModelAdmin):
    search_fields = ['name']  # Allow searching tags by name


admin.site.register(Article, ArticleAdmin)
admin.site.register(Tag, TagAdmin)
admin.site.register(Province)
admin.site.register(City)


