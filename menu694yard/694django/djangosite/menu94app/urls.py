from django.urls import path, include
from rest_framework import routers

from . import api
from . import views
from . import htmx


router = routers.DefaultRouter()
router.register("MenuItem", api.MenuItemViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("menu94app/MenuItem/", views.MenuItemListView.as_view(), name="menu94app_MenuItem_list"),
    path("menu94app/MenuItem/create/", views.MenuItemCreateView.as_view(), name="menu94app_MenuItem_create"),
    path("menu94app/MenuItem/detail/<int:pk>/", views.MenuItemDetailView.as_view(), name="menu94app_MenuItem_detail"),
    path("menu94app/MenuItem/update/<int:pk>/", views.MenuItemUpdateView.as_view(), name="menu94app_MenuItem_update"),
    path("menu94app/MenuItem/delete/<int:pk>/", views.MenuItemDeleteView.as_view(), name="menu94app_MenuItem_delete"),

    path("menu94app/htmx/MenuItem/", htmx.HTMXMenuItemListView.as_view(), name="menu94app_MenuItem_htmx_list"),
    path("menu94app/htmx/MenuItem/create/", htmx.HTMXMenuItemCreateView.as_view(), name="menu94app_MenuItem_htmx_create"),
    path("menu94app/htmx/MenuItem/delete/<int:pk>/", htmx.HTMXMenuItemDeleteView.as_view(), name="menu94app_MenuItem_htmx_delete"),

    path('menu/', views.hierarchical_menu, name='hierarchical_menu'),

)
