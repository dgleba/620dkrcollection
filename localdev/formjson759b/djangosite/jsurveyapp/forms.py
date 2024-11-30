# formsapp/forms.py
from django import forms
import json

class DynamicForm(forms.Form):
    def __init__(self, *args, **kwargs):
        form_structure = kwargs.pop('form_structure')
        super(DynamicForm, self).__init__(*args, **kwargs)

        for field in form_structure:
            field_type = field.get('type')
            field_name = field.get('name')
            field_label = field.get('label', field_name)
            required = field.get('required', True)
            
            if field_type == 'text':
                self.fields[field_name] = forms.CharField(label=field_label, required=required)
            elif field_type == 'number':
                self.fields[field_name] = forms.DecimalField(label=field_label, required=required)
            elif field_type == 'choice':
                choices = field.get('choices', [])
                self.fields[field_name] = forms.ChoiceField(label=field_label, choices=[(choice, choice) for choice in choices], required=required)
