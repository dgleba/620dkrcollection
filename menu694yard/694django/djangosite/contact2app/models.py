from django.db import models
from django.urls import reverse


class people2(models.Model):

    # Fields
    created = models.DateTimeField(auto_now_add=True, editable=False)
    phone = models.CharField(max_length=304)
    last_updated = models.DateTimeField(auto_now=True, editable=False)
    name = models.CharField(max_length=305)
    address = models.CharField(max_length=305)
    city = models.CharField(max_length=305)

    class Meta:
        pass

    def __str__(self):
        return str(self.name)

    def get_absolute_url(self):
        return reverse("contact2app_people2_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("contact2app_people2_update", args=(self.pk,))

    @staticmethod
    def get_htmx_create_url():
        return reverse("contact2app_people2_htmx_create")

    def get_htmx_delete_url(self):
        return reverse("contact2app_people2_htmx_delete", args=(self.pk,))
