

# formsapp/views.py
from django.shortcuts import render, get_object_or_404, redirect
from .models import Survey, Answer
from .forms import DynamicForm
import json


def display_survey(request, survey_id):
    survey_instance = get_object_or_404(Survey, id=survey_id)
    form_structure = survey_instance.structure
    form = DynamicForm(form_structure=form_structure)

    if request.method == 'POST':
        form = DynamicForm(request.POST, form_structure=form_structure)
        if form.is_valid():
            # Object of type Decimal is not JSON serializable
            # response_data = json.dumps(form.cleaned_data)
            response_data = (form.cleaned_data)
            Answer.objects.create(survey=survey_instance, response_data=response_data)
            return redirect('survey_success')  # Define this URL

    return render(request, 'jsurveyapp/display_survey.html', {'form': form, 'survey_instance': survey_instance})

def survey_success(request):
    return render(request, 'jsurveyapp/survey_success.html')

