from django.urls import path, include
from rest_framework import routers

from . import api
from . import views


router = routers.DefaultRouter()
router.register("Menu0", api.Menu0ViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("menuapp/Menu0/", views.Menu0ListView.as_view(), name="menuapp_Menu0_list"),
    path("menuapp/Menu0/create/", views.Menu0CreateView.as_view(), name="menuapp_Menu0_create"),
    path("menuapp/Menu0/detail/<int:pk>/", views.Menu0DetailView.as_view(), name="menuapp_Menu0_detail"),
    path("menuapp/Menu0/update/<int:pk>/", views.Menu0UpdateView.as_view(), name="menuapp_Menu0_update"),
    path("menuapp/Menu0/delete/<int:pk>/", views.Menu0DeleteView.as_view(), name="menuapp_Menu0_delete"),

)
