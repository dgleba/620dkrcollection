from rest_framework import serializers

from . import models


class MpostSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.Mpost
        fields = [
            "created",
            "body",
            "title",
            "last_updated",
        ]
