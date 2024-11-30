from django.shortcuts import render

# formsapp/views.py
from django.shortcuts import render, redirect, get_object_or_404
from django.http import JsonResponse
from .models import UserForm, FormResponse
import json

def create_form(request):
    if request.method == 'POST':
        name = request.POST.get('name')
        description = request.POST.get('description')
        fields = request.POST.get('fields')
        fields = json.loads(fields)
        user_form = UserForm.objects.create(name=name, description=description, fields=fields)
        return redirect('form_list')
    return render(request, 'formsapp/create_form.html')

def form_list(request):
    forms = UserForm.objects.all()
    return render(request, 'formsapp/form_list.html', {'forms': forms})

def render_form(request, form_id):
    user_form = get_object_or_404(UserForm, id=form_id)
    return render(request, 'formsapp/render_form.html', {'form': user_form})

def submit_form(request, form_id):
    user_form = get_object_or_404(UserForm, id=form_id)
    if request.method == 'POST':
        responses = {}
        for field in user_form.fields:
            responses[field['name']] = request.POST.get(field['name'])
        FormResponse.objects.create(form=user_form, responses=responses)
        return JsonResponse({'status': 'success'})
    return redirect('form_list')
