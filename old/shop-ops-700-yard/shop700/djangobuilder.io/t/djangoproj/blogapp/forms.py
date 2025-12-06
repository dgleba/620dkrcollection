from django import forms
from . import models


class MpostForm(forms.ModelForm):
    class Meta:
        model = models.Mpost
        fields = [
            "body",
            "title",
        ]
