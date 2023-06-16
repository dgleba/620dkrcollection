from django.urls import path, include
from rest_framework import routers

from . import api
from . import views
from . import htmx


router = routers.DefaultRouter()
router.register("MCpunch", api.MCpunchViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("mcpunchapp/MCpunch/", views.MCpunchListView.as_view(), name="mcpunchapp_MCpunch_list"),
    path("mcpunchapp/MCpunch/create/", views.MCpunchCreateView.as_view(), name="mcpunchapp_MCpunch_create"),
    path("mcpunchapp/MCpunch/detail/<int:pk>/", views.MCpunchDetailView.as_view(), name="mcpunchapp_MCpunch_detail"),
    path("mcpunchapp/MCpunch/update/<int:pk>/", views.MCpunchUpdateView.as_view(), name="mcpunchapp_MCpunch_update"),
    path("mcpunchapp/MCpunch/delete/<int:pk>/", views.MCpunchDeleteView.as_view(), name="mcpunchapp_MCpunch_delete"),

    path("mcpunchapp/htmx/MCpunch/", htmx.HTMXMCpunchListView.as_view(), name="mcpunchapp_MCpunch_htmx_list"),
    path("mcpunchapp/htmx/MCpunch/create/", htmx.HTMXMCpunchCreateView.as_view(), name="mcpunchapp_MCpunch_htmx_create"),
    path("mcpunchapp/htmx/MCpunch/delete/<int:pk>/", htmx.HTMXMCpunchDeleteView.as_view(), name="mcpunchapp_MCpunch_htmx_delete"),
)
