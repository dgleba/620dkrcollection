from django.contrib import admin
from django import forms

from . import models


class Menu0AdminForm(forms.ModelForm):

    class Meta:
        model = models.Menu0
        fields = "__all__"


class Menu0Admin(admin.ModelAdmin):
    form = Menu0AdminForm
    list_display = [
        "mgroup",
        "mapplication",
        "mdescription",
        "mlink",
        "mcomment",
        "mstatus",
        "msort",
        # "created_at",
        "updated_at",
    ]
    readonly_fields = [
        # "mapplication",
        # "mdescription",
        # "mlink",
        # "mstatus",
        # "msort",
        # "mcomment",
        "created_at",
        "updated_at",
    ]


admin.site.register(models.Menu0, Menu0Admin)
