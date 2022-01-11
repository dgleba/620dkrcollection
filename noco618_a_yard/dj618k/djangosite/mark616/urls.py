from django.urls import path, include
from rest_framework import routers

from . import api
from . import views


router = routers.DefaultRouter()
router.register("bookmk", api.bookmkViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("mark616/bookmk/", views.bookmkListView.as_view(), name="mark616_bookmk_list"),
    path("mark616/bookmk/create/", views.bookmkCreateView.as_view(), name="mark616_bookmk_create"),
    path("mark616/bookmk/detail/<int:pk>/", views.bookmkDetailView.as_view(), name="mark616_bookmk_detail"),
    path("mark616/bookmk/update/<int:pk>/", views.bookmkUpdateView.as_view(), name="mark616_bookmk_update"),
    path("mark616/bookmk/delete/<int:pk>/", views.bookmkDeleteView.as_view(), name="mark616_bookmk_delete"),
)
