
# sig5app/forms.py

from django import forms
from .models import Signature

class SignatureForm(forms.ModelForm):
    class Meta:
        model = Signature
        fields = ['signature_image']


#################################################################


# # sig5app/views.py
# from django.shortcuts import render, redirect
# # from .forms import SignatureForm
# from .models import Signature
# import base64
# from django.core.files.base import ContentFile

# def capture_signature(request):
#     if request.method == 'POST':
#         signature_data = request.POST.get('signature_image')
#         if signature_data:
#             format, imgstr = signature_data.split(';base64,')
#             ext = format.split('/')[-1]
#             signature_file = ContentFile(base64.b64decode(imgstr), name=f'signature_{request.user.id}.{ext}')
            
#             signature = Signature(user=request.user)
#             signature.signature_image.save(f'signature_{request.user.id}.{ext}', signature_file)
#             signature.save()

#             return redirect('signature_success')  # Redirect after saving
#     return render(request, 'sig5app/capture_signature.html')


# sig5app/views.py
from django.shortcuts import render, redirect
#from .forms import SignatureForm
from .models import Signature
import base64
from django.core.files.base import ContentFile

def capture_signature(request):
    if request.method == 'POST':
        signature_data = request.POST.get('signature_image')
        if signature_data:
            format, imgstr = signature_data.split(';base64,')
            ext = format.split('/')[-1]
            signature_file = ContentFile(base64.b64decode(imgstr), name=f'signature_{request.user.id}.{ext}')
            
            signature = Signature(user=request.user)
            signature.signature_image.save(f'signature_{request.user.id}.{ext}', signature_file)
            signature.save()

            return redirect('signature_success')  # Redirect after saving
    return render(request, 'sig5app/capture_signature.html')

def signature_success(request):
    return render(request, 'sig5app/signature_success.html')

