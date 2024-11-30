from django import forms
from . import models


class MCpunchForm(forms.ModelForm):
    class Meta:
        model = models.MCpunch
        fields = [
            "punchtime",
            "duration",
            "machinecell",
            "punchtype",
            "employee",
            "durationtype",
        ]
