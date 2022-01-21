from django import forms
from . import models


class bookmkForm(forms.ModelForm):
    class Meta:
        model = models.bookmk
        fields = [
            "bhash",
            "body",
            "description",
            "comment",
            "url",
            "title",
        ]

