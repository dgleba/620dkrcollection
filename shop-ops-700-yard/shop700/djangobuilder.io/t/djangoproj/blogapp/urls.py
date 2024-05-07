from django.urls import path, include
from rest_framework import routers

from . import api
from . import views
from . import htmx


router = routers.DefaultRouter()
router.register("Mpost", api.MpostViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("blogapp/Mpost/", views.MpostListView.as_view(), name="blogapp_Mpost_list"),
    path("blogapp/Mpost/create/", views.MpostCreateView.as_view(), name="blogapp_Mpost_create"),
    path("blogapp/Mpost/detail/<int:pk>/", views.MpostDetailView.as_view(), name="blogapp_Mpost_detail"),
    path("blogapp/Mpost/update/<int:pk>/", views.MpostUpdateView.as_view(), name="blogapp_Mpost_update"),
    path("blogapp/Mpost/delete/<int:pk>/", views.MpostDeleteView.as_view(), name="blogapp_Mpost_delete"),

    path("blogapp/htmx/Mpost/", htmx.HTMXMpostListView.as_view(), name="blogapp_Mpost_htmx_list"),
    path("blogapp/htmx/Mpost/create/", htmx.HTMXMpostCreateView.as_view(), name="blogapp_Mpost_htmx_create"),
    path("blogapp/htmx/Mpost/delete/<int:pk>/", htmx.HTMXMpostDeleteView.as_view(), name="blogapp_Mpost_htmx_delete"),
)
