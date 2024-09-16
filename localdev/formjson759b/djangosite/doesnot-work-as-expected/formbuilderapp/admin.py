from django.contrib import admin
from .models import Form, FormResponse

class FormAdmin(admin.ModelAdmin):
    list_display = ('title', 'created_by', 'created_at')
    search_fields = ('title', 'description')
    list_filter = ('created_by', 'created_at')
    readonly_fields = ('created_at',)

class FormResponseAdmin(admin.ModelAdmin):
    list_display = ('form', 'user', 'submitted_at')
    search_fields = ('form__title', 'user__username')
    list_filter = ('form', 'user', 'submitted_at')
    readonly_fields = ('submitted_at',)

admin.site.register(Form, FormAdmin)
admin.site.register(FormResponse, FormResponseAdmin)
