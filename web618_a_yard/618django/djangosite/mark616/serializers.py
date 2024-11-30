from rest_framework import serializers

from . import models


class bookmkSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.bookmk
        fields = [
            "title",
            "url",
            "body",
            "created_at",
            "comment",
            "description",
            "bhash",
            "updated_at",
        ]
