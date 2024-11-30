from rest_framework import serializers

from . import models


class people2Serializer(serializers.ModelSerializer):

    class Meta:
        model = models.people2
        fields = [
            "created",
            "phone",
            "last_updated",
            "name",
            "city",
        ]
