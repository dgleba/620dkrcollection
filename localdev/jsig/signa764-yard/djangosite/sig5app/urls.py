# sig5app/urls.py

from django.urls import path
from . import views


urlpatterns = [
    path('capture/', views.capture_signature, name='capture_signature'),
    path('success/', views.signature_success, name='signature_success'),  # Add this line
]


# Optionally, serve media files during development if not already included
from django.conf import settings
from django.conf.urls.static import static

if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
    