from django.db import models
from django.urls import reverse


class MenuItem(models.Model):

    # Relationships
    # parent = models.ForeignKey("self")
    parent = models.ForeignKey('self', null=True, blank=True, related_name='children', on_delete=models.CASCADE)

    # Fields
    sortorder = models.IntegerField()
    updated = models.DateTimeField(auto_now=True, editable=False)
    url = models.CharField(max_length=2930)
    name = models.CharField(max_length=930)
    grouping = models.CharField(max_length=530)
    created = models.DateTimeField(auto_now_add=True, editable=False)
    status = models.IntegerField()

    class Meta:
        pass

    def __str__(self):
        return str(self.name)

    def get_absolute_url(self):
        return reverse("menu94app_MenuItem_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("menu94app_MenuItem_update", args=(self.pk,))

    @staticmethod
    def get_htmx_create_url():
        return reverse("menu94app_MenuItem_htmx_create")

    def get_htmx_delete_url(self):
        return reverse("menu94app_MenuItem_htmx_delete", args=(self.pk,))
