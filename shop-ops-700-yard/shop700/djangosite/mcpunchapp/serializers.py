from rest_framework import serializers

from . import models


class MCpunchSerializer(serializers.ModelSerializer):

    class Meta:
        model = models.MCpunch
        fields = [
            "punchtime",
            "duration",
            "machinecell",
            "punchtype",
            "employee",
            "durationtype",
            "updated_at",
            "created_at",
        ]
