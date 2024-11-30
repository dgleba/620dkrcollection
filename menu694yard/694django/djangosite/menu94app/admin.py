from django.contrib import admin
from django import forms

from . import models


class MenuItemAdminForm(forms.ModelForm):

    class Meta:
        model = models.MenuItem
        fields = "__all__"


class MenuItemAdmin(admin.ModelAdmin):
    form = MenuItemAdminForm
    list_display = [
        "url",
        "name",
        "grouping",
        "sortorder",
        "status",
        "updated",
        "created",
    ]
    fields = [
        "parent",
        "name",
        "url",
        "grouping",
        "status",
        "sortorder",
    ]
    readonly_fields = [
        "updated",
        "created",
    ]


admin.site.register(models.MenuItem, MenuItemAdmin)
