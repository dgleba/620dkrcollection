from django.contrib import admin
from django import forms

from . import models


class people2AdminForm(forms.ModelForm):

    class Meta:
        model = models.people2
        fields = "__all__"


class people2Admin(admin.ModelAdmin):
    form = people2AdminForm
    list_display = [
        "created",
        "phone",
        "last_updated",
        "name",
        "city",
    ]
    fields = [
        "phone",
        "name",
        "city",
    ]    
    readonly_fields = [
        "created",
        "last_updated",
    ]


admin.site.register(models.people2, people2Admin)
