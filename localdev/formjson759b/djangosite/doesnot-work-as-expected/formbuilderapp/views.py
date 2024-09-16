from django.shortcuts import render, redirect, get_object_or_404
from django.contrib.auth.decorators import login_required
from .models import Form, FormResponse
from .forms import FormBuilderForm, FormResponseForm

@login_required
def create_form(request):
    if request.method == "POST":
        form = FormBuilderForm(request.POST)
        if form.is_valid():
            form_instance = form.save(commit=False)
            form_instance.created_by = request.user
            form_instance.save()
            return redirect('formbuilderapp:form_detail', pk=form_instance.pk)
    else:
        form =FormBuilderForm()
    return render(request, 'formbuilderapp/create_form.html', {'form': form})

@login_required
def submit_form(request, pk):
    form_instance = get_object_or_404(Form, pk=pk)
    if request.method == "POST":
        response_form = FormResponseForm(request.POST)
        if response_form.is_valid():
            response_instance = response_form.save(commit=False)
            response_instance.form = form_instance
            response_instance.user = request.user
            response_instance.save()
            return redirect('formbuilderapp:form_detail', pk=form_instance.pk)
    else:
        response_form = FormResponseForm()
    return render(request, 'formbuilderapp/submit_form.html', {'form_instance': form_instance, 'response_form': response_form})

@login_required
def form_detail(request, pk):
    form_instance = get_object_or_404(Form, pk=pk)
    responses = FormResponse.objects.filter(form=form_instance)
    return render(request, 'formbuilderapp/form_detail.html', {'form_instance': form_instance, 'responses': responses})
