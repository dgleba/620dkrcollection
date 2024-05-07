from django.db import models
from django.urls import reverse


class MCpunch(models.Model):

    # Fields
    punchtime = models.DateTimeField()
    duration = models.BigIntegerField()
    machinecell = models.CharField(max_length=303)
    punchtype = models.CharField(max_length=30)
    employee = models.CharField(max_length=303)
    durationtype = models.CharField(max_length=30)
    updated_at = models.DateTimeField(auto_now=True, editable=False)
    created_at = models.DateTimeField(auto_now_add=True, editable=False)

    class Meta:
        pass

    def __str__(self):
        return str(self.pk)

    def get_absolute_url(self):
        return reverse("mcpunchapp_MCpunch_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("mcpunchapp_MCpunch_update", args=(self.pk,))

    @staticmethod
    def get_htmx_create_url():
        return reverse("mcpunchapp_MCpunch_htmx_create")

    def get_htmx_delete_url(self):
        return reverse("mcpunchapp_MCpunch_htmx_delete", args=(self.pk,))
