from django.db import models
from django.urls import reverse


class Menu0(models.Model):

    # Fields
    mgroup = models.CharField(max_length=330, null=True, blank=True)
    mapplication = models.CharField(max_length=330)
    mdescription = models.CharField(max_length=330)
    mlink = models.CharField(max_length=930)
    mcomment = models.CharField(max_length=330, null=True, blank=True)
    mstatus = models.IntegerField(default=1)
    msort = models.IntegerField(default=50)
    updated_at = models.DateTimeField(auto_now=True, editable=False)
    created_at = models.DateTimeField(auto_now_add=True, editable=False)

    class Meta:
        pass

    def __str__(self):
        return str(self.pk) + "-" +self.mapplication

    def get_absolute_url(self):
        return reverse("menuapp_Menu0_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("menuapp_Menu0_update", args=(self.pk,))

