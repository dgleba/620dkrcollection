from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class Menu0ListView(generic.ListView):
    model = models.Menu0
    form_class = forms.Menu0Form


class Menu0CreateView(generic.CreateView):
    model = models.Menu0
    form_class = forms.Menu0Form


class Menu0DetailView(generic.DetailView):
    model = models.Menu0
    form_class = forms.Menu0Form


class Menu0UpdateView(generic.UpdateView):
    model = models.Menu0
    form_class = forms.Menu0Form
    pk_url_kwarg = "pk"


class Menu0DeleteView(generic.DeleteView):
    model = models.Menu0
    success_url = reverse_lazy("menuapp_Menu0_list")
