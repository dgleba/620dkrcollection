# blog/models.py

from django.db import models

class TimeStampedModel(models.Model):
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        abstract = True

class Tag(TimeStampedModel):
    name = models.CharField(max_length=50)

    def __str__(self):
        # return self.name
        updated_date = self.updated_at.date()
        return f"{self.name}({updated_date})"


class Article(TimeStampedModel):
    title = models.CharField(max_length=200)
    body = models.TextField()
    published_at = models.DateTimeField(auto_now_add=True)
    tags = models.ManyToManyField(Tag, related_name='articles')

    def __str__(self):
        # return self.title
        return f"{self.title}(at: {self.published_at})"
