from django.db import models
from django.urls import reverse
from django.template.defaultfilters import truncatechars  # or truncatewords

def xstr(s):
    if s is None:
        return str('')
    else:
        return str(s)
        
class bookmk(models.Model):

    # Fields
    title = models.CharField(max_length=6430, blank=True, null=True)
    body = models.TextField(max_length=32100, blank=True, null=True)
    url = models.TextField(max_length=30100, blank=True, null=True)
    bhash = models.CharField(max_length=1930, blank=True, null=True)
    comment = models.TextField(max_length=31200, blank=True, null=True)
    description = models.TextField(max_length=32100, blank=True, null=True)
    created_at = models.DateTimeField(auto_now_add=True, editable=False)
    updated_at = models.DateTimeField(auto_now=True, editable=False)

    class Meta:
        pass
        ordering = ('-id',)    

    @property
    def model_short_url(self):
        return truncatechars(self.url, 70)


    def __str__(self):
        # return str(self.pk)
        return  str(self.id) + " - " + xstr(self.title) +  " - " + xstr(self.url) + " - "   + xstr(self.created_at)


    def get_absolute_url(self):
        return reverse("mark616_bookmk_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("mark616_bookmk_update", args=(self.pk,))
