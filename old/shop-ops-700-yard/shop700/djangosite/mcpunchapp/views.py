from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class MCpunchListView(generic.ListView):
    model = models.MCpunch
    form_class = forms.MCpunchForm


class MCpunchCreateView(generic.CreateView):
    model = models.MCpunch
    form_class = forms.MCpunchForm


class MCpunchDetailView(generic.DetailView):
    model = models.MCpunch
    form_class = forms.MCpunchForm


class MCpunchUpdateView(generic.UpdateView):
    model = models.MCpunch
    form_class = forms.MCpunchForm
    pk_url_kwarg = "pk"


class MCpunchDeleteView(generic.DeleteView):
    model = models.MCpunch
    success_url = reverse_lazy("mcpunchapp_MCpunch_list")
