from django.urls import path, include
from rest_framework import routers

from . import api
from . import views
from . import htmx


router = routers.DefaultRouter()
router.register("people2", api.people2ViewSet)

urlpatterns = (
    path("api/v1/", include(router.urls)),
    path("contact2app/people2/", views.people2ListView.as_view(), name="contact2app_people2_list"),
    path("contact2app/people2/create/", views.people2CreateView.as_view(), name="contact2app_people2_create"),
    path("contact2app/people2/detail/<int:pk>/", views.people2DetailView.as_view(), name="contact2app_people2_detail"),
    path("contact2app/people2/update/<int:pk>/", views.people2UpdateView.as_view(), name="contact2app_people2_update"),
    path("contact2app/people2/delete/<int:pk>/", views.people2DeleteView.as_view(), name="contact2app_people2_delete"),

    path("contact2app/htmx/people2/", htmx.HTMXpeople2ListView.as_view(), name="contact2app_people2_htmx_list"),
    path("contact2app/htmx/people2/create/", htmx.HTMXpeople2CreateView.as_view(), name="contact2app_people2_htmx_create"),
    path("contact2app/htmx/people2/delete/<int:pk>/", htmx.HTMXpeople2DeleteView.as_view(), name="contact2app_people2_htmx_delete"),
)
