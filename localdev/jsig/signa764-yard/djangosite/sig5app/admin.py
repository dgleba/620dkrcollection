# sig5app/admin.py
from django.contrib import admin
from .models import Signature

@admin.register(Signature)
class SignatureAdmin(admin.ModelAdmin):
    list_display = ['user', 'created_at', 'signature_image']
    readonly_fields = ['signature_image']

    def signature_image_tag(self, obj):
        if obj.signature_image:
            return f'<img src="{obj.signature_image.url}" width="150" height="100"/>'
        return "No Image"

    signature_image_tag.short_description = 'Signature'
    signature_image_tag.allow_tags = True
