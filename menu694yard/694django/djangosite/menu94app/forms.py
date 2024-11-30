from django import forms
# from . models import self
from . import models


class MenuItemForm(forms.ModelForm):
    class Meta:
        model = models.MenuItem
        fields = [
            "sortorder",
            "url",
            "name",
            "grouping",
            "status",
            "parent",
        ]

    def __init__(self, *args, **kwargs):
        super(MenuItemForm, self).__init__(*args, **kwargs)
        self.fields["parent"].queryset = self.objects.all()

