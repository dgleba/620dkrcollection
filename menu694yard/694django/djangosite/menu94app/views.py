from django.views import generic
from django.urls import reverse_lazy
from . import models
from . import forms


class MenuItemListView(generic.ListView):
    model = models.MenuItem
    form_class = forms.MenuItemForm


class MenuItemCreateView(generic.CreateView):
    model = models.MenuItem
    form_class = forms.MenuItemForm


class MenuItemDetailView(generic.DetailView):
    model = models.MenuItem
    form_class = forms.MenuItemForm


class MenuItemUpdateView(generic.UpdateView):
    model = models.MenuItem
    form_class = forms.MenuItemForm
    pk_url_kwarg = "pk"


class MenuItemDeleteView(generic.DeleteView):
    model = models.MenuItem
    success_url = reverse_lazy("menu94app_MenuItem_list")

# views.py
from django.shortcuts import render
from .models import MenuItem

def hierarchical_menu(request):
    # Fetch all root-level menu items (items without a parent)
    root_menu_items = MenuItem.objects.filter(parent__isnull=True)

    return render(request, 'menu_template.html', {'root_menu_items': root_menu_items})


