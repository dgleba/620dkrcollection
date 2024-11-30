from rest_framework import viewsets, permissions

from . import serializers
from . import models


class people2ViewSet(viewsets.ModelViewSet):
    """ViewSet for the people2 class"""

    queryset = models.people2.objects.all()
    serializer_class = serializers.people2Serializer
    permission_classes = [permissions.IsAuthenticated]
