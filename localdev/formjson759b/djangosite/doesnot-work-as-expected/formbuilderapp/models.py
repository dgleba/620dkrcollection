from django.db import models
# from django.contrib.postgres.fields import JSONField
from django.contrib.auth.models import User

class Form(models.Model):
    title = models.CharField(max_length=255)
    description = models.TextField(blank=True, null=True)
    definition = models.JSONField()  # Store form structure as JSON
    created_by = models.ForeignKey(User, on_delete=models.CASCADE)
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return self.title

class FormResponse(models.Model):
    form = models.ForeignKey(Form, on_delete=models.CASCADE)
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    response_data = models.JSONField()  # Store responses as JSON
    submitted_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"Response by {self.user} for {self.form}"
