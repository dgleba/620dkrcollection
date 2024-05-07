import pytest
import test_helpers

from django.urls import reverse


pytestmark = [pytest.mark.django_db]


def tests_Mpost_list_view(client):
    instance1 = test_helpers.create_blogapp_Mpost()
    instance2 = test_helpers.create_blogapp_Mpost()
    url = reverse("blogapp_Mpost_list")
    response = client.get(url)
    assert response.status_code == 200
    assert str(instance1) in response.content.decode("utf-8")
    assert str(instance2) in response.content.decode("utf-8")


def tests_Mpost_create_view(client):
    url = reverse("blogapp_Mpost_create")
    data = {
        "body": "text",
        "title": "text",
    }
    response = client.post(url, data)
    assert response.status_code == 302


def tests_Mpost_detail_view(client):
    instance = test_helpers.create_blogapp_Mpost()
    url = reverse("blogapp_Mpost_detail", args=[instance.pk, ])
    response = client.get(url)
    assert response.status_code == 200
    assert str(instance) in response.content.decode("utf-8")


def tests_Mpost_update_view(client):
    instance = test_helpers.create_blogapp_Mpost()
    url = reverse("blogapp_Mpost_update", args=[instance.pk, ])
    data = {
        "body": "text",
        "title": "text",
    }
    response = client.post(url, data)
    assert response.status_code == 302
