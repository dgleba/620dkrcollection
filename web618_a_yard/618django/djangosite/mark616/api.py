from rest_framework import viewsets, permissions

from . import serializers
from . import models


class bookmkViewSet(viewsets.ModelViewSet):
    """ViewSet for the bookmk class"""

    queryset = models.bookmk.objects.all()
    serializer_class = serializers.bookmkSerializer
    permission_classes = [permissions.IsAuthenticated]
