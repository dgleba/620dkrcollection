from django.urls import path
from . import views

urlpatterns = [
    path('survey/<int:survey_id>/', views.display_survey, name='display_survey'),
    path('survey/success/', views.survey_success, name='survey_success'),
]
