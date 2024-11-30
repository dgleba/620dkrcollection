# formsapp/models.py
from django.db import models
from django.core.serializers.json import DjangoJSONEncoder
from decimal import Decimal

class Survey(models.Model):
    name = models.CharField(max_length=255)
    description = models.TextField(blank=True, null=True)
    structure = models.JSONField(help_text="Define the structure of the survey as JSON.")  # Using models.JSONField (Django 3.1+)

    def __str__(self):
        return self.name

class Answer(models.Model):
    survey = models.ForeignKey(Survey, on_delete=models.CASCADE)
    response_data = models.JSONField(encoder=DjangoJSONEncoder, help_text="Store the response data as JSON.")  # Use DjangoJSONEncoder to handle Decimal
    submitted_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"Answer to {self.survey.name} at {self.submitted_at}"

    def save(self, *args, **kwargs):
        # Convert all Decimal objects to strings
        def convert_decimal(obj):
            if isinstance(obj, Decimal):
                return str(obj)
            elif isinstance(obj, dict):
                return {k: convert_decimal(v) for k, v in obj.items()}
            elif isinstance(obj, list):
                return [convert_decimal(i) for i in obj]
            return obj

        self.response_data = convert_decimal(self.response_data)
        super(Answer, self).save(*args, **kwargs)
