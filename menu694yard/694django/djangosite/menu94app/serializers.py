from rest_framework import serializers

from . import models


class MenuItemSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.MenuItem
        fields = [
            "sortorder",
            "updated",
            "url",
            "name",
            "grouping",
            "created",
            "status",
            "parent",
        ]
