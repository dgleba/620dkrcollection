from django import forms
from . import models


class Menu0Form(forms.ModelForm):
    class Meta:
        model = models.Menu0
        fields = [
            "mapplication",
            "mstatus",
            "mdescription",
            "mcomment",
            "msort",
            "mlink",
        ]
