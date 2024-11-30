from django import forms
from .models import Form, FormResponse

class FormBuilderForm(forms.ModelForm):
    class Meta:
        model = Form
        fields = ['title', 'description', 'definition']

class FormResponseForm(forms.ModelForm):
    class Meta:
        model = FormResponse
        fields = ['response_data']
