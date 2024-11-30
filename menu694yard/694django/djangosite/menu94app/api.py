from rest_framework import viewsets, permissions

from . import serializers
from . import models


class MenuItemViewSet(viewsets.ModelViewSet):
    """ViewSet for the MenuItem class"""

    queryset = models.MenuItem.objects.all()
    serializer_class = serializers.MenuItemSerializer
    permission_classes = [permissions.IsAuthenticated]
