from rest_framework import viewsets, permissions, filters


from . import serializers
from . import models


class Menu0ViewSet(viewsets.ModelViewSet):
    """ViewSet for the Menu0 class"""
    
    search_fields = [
            "mapplication",
            "mstatus",
            "mdescription",
            "mcomment",
            "mlink",
        ]
    filter_backends = (filters.SearchFilter,)

            # "created_at",
            # "updated_at",
            # "msort",
    
    
    queryset = models.Menu0.objects.all()
    serializer_class = serializers.Menu0Serializer
    
    # permission_classes = [permissions.IsAuthenticated]


