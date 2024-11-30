from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class people2ListView(generic.ListView):
    model = models.people2
    form_class = forms.people2Form


class people2CreateView(generic.CreateView):
    model = models.people2
    form_class = forms.people2Form


class people2DetailView(generic.DetailView):
    model = models.people2
    form_class = forms.people2Form


class people2UpdateView(generic.UpdateView):
    model = models.people2
    form_class = forms.people2Form
    pk_url_kwarg = "pk"


class people2DeleteView(generic.DeleteView):
    model = models.people2
    success_url = reverse_lazy("contact2app_people2_list")
