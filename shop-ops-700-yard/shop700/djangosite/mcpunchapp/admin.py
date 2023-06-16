from django.contrib import admin
from django import forms

from . import models


class MCpunchAdminForm(forms.ModelForm):

    class Meta:
        model = models.MCpunch
        fields = "__all__"


class MCpunchAdmin(admin.ModelAdmin):
    form = MCpunchAdminForm
    list_display = [
        "punchtime",
        "duration",
        "machinecell",
        "punchtype",
        "employee",
        "durationtype",
        "updated_at",
        "created_at",
    ]
    readonly_fields = [
        "punchtime",
        "duration",
        "machinecell",
        "punchtype",
        "employee",
        "durationtype",
        "updated_at",
        "created_at",
    ]


admin.site.register(models.MCpunch, MCpunchAdmin)
