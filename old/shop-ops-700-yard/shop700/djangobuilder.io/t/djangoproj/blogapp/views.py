from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class MpostListView(generic.ListView):
    model = models.Mpost
    form_class = forms.MpostForm


class MpostCreateView(generic.CreateView):
    model = models.Mpost
    form_class = forms.MpostForm


class MpostDetailView(generic.DetailView):
    model = models.Mpost
    form_class = forms.MpostForm


class MpostUpdateView(generic.UpdateView):
    model = models.Mpost
    form_class = forms.MpostForm
    pk_url_kwarg = "pk"


class MpostDeleteView(generic.DeleteView):
    model = models.Mpost
    success_url = reverse_lazy("blogapp_Mpost_list")
