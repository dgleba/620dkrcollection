import pytest
import test_helpers

from django.urls import reverse


pytestmark = [pytest.mark.django_db]


def tests_MCpunch_list_view(client):
    instance1 = test_helpers.create_mcpunchapp_MCpunch()
    instance2 = test_helpers.create_mcpunchapp_MCpunch()
    url = reverse("mcpunchapp_MCpunch_list")
    response = client.get(url)
    assert response.status_code == 200
    assert str(instance1) in response.content.decode("utf-8")
    assert str(instance2) in response.content.decode("utf-8")


def tests_MCpunch_create_view(client):
    url = reverse("mcpunchapp_MCpunch_create")
    data = {
        "punchtime": datetime.now(),
        "duration": 1,
        "machinecell": "text",
        "punchtype": "text",
        "employee": "text",
        "durationtype": "text",
    }
    response = client.post(url, data)
    assert response.status_code == 302


def tests_MCpunch_detail_view(client):
    instance = test_helpers.create_mcpunchapp_MCpunch()
    url = reverse("mcpunchapp_MCpunch_detail", args=[instance.pk, ])
    response = client.get(url)
    assert response.status_code == 200
    assert str(instance) in response.content.decode("utf-8")


def tests_MCpunch_update_view(client):
    instance = test_helpers.create_mcpunchapp_MCpunch()
    url = reverse("mcpunchapp_MCpunch_update", args=[instance.pk, ])
    data = {
        "punchtime": datetime.now(),
        "duration": 1,
        "machinecell": "text",
        "punchtype": "text",
        "employee": "text",
        "durationtype": "text",
    }
    response = client.post(url, data)
    assert response.status_code == 302
