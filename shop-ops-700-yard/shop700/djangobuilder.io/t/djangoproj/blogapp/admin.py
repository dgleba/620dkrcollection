from django.contrib import admin
from django import forms

from . import models


class MpostAdminForm(forms.ModelForm):

    class Meta:
        model = models.Mpost
        fields = "__all__"


class MpostAdmin(admin.ModelAdmin):
    form = MpostAdminForm
    list_display = [
        "created",
        "body",
        "title",
        "last_updated",
    ]
    readonly_fields = [
        "created",
        "body",
        "title",
        "last_updated",
    ]


admin.site.register(models.Mpost, MpostAdmin)
