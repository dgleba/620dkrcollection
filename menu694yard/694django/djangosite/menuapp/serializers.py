from rest_framework import serializers

from . import models


class Menu0Serializer(serializers.ModelSerializer):

    class Meta:
        model = models.Menu0
        fields = [
            "mapplication",
            "mstatus",
            "created_at",
            "mdescription",
            "mcomment",
            "updated_at",
            "msort",
            "mlink",
        ]
