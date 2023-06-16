from rest_framework import viewsets, permissions

from . import serializers
from . import models


class MCpunchViewSet(viewsets.ModelViewSet):
    """ViewSet for the MCpunch class"""

    queryset = models.MCpunch.objects.all()
    serializer_class = serializers.MCpunchSerializer
    permission_classes = [permissions.IsAuthenticated]
