from rest_framework import viewsets, permissions

from . import serializers
from . import models


class MpostViewSet(viewsets.ModelViewSet):
    """ViewSet for the Mpost class"""

    queryset = models.Mpost.objects.all()
    serializer_class = serializers.MpostSerializer
    permission_classes = [permissions.IsAuthenticated]
