from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class bookmkListView(generic.ListView):
    model = models.bookmk
    form_class = forms.bookmkForm


class bookmkCreateView(generic.CreateView):
    model = models.bookmk
    form_class = forms.bookmkForm


class bookmkDetailView(generic.DetailView):
    model = models.bookmk
    form_class = forms.bookmkForm


class bookmkUpdateView(generic.UpdateView):
    model = models.bookmk
    form_class = forms.bookmkForm
    pk_url_kwarg = "pk"


class bookmkDeleteView(generic.DeleteView):
    model = models.bookmk
    success_url = reverse_lazy("mark616_bookmk_list")
