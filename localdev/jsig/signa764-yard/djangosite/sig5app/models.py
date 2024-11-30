# sig5app/models.py
from django.db import models
from django.contrib.auth.models import User

class Signature(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    signature_image = models.ImageField(upload_to='signatures')
    created_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"{self.user}'s signature"
