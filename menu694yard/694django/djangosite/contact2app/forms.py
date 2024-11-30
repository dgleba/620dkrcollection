from django import forms
from . import models


class people2Form(forms.ModelForm):
    class Meta:
        model = models.people2
        fields = [
            "phone",
            "name",
            "city",
        ]
