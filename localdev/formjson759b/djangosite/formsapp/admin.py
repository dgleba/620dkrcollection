from django.contrib import admin

from .models import UserForm, FormResponse

# formsapp/admin.py
from django.contrib import admin
from .models import UserForm, FormResponse

class UserFormAdmin(admin.ModelAdmin):
    list_display = ('name', 'description')
    search_fields = ('name', 'description')
    readonly_fields = ('id',)

class FormResponseAdmin(admin.ModelAdmin):
    list_display = ('form', 'submitted_at')
    search_fields = ('form__name', 'responses')
    readonly_fields = ('form', 'responses', 'submitted_at')
    list_filter = ('form', 'submitted_at')

admin.site.register(UserForm, UserFormAdmin)
admin.site.register(FormResponse, FormResponseAdmin)


# =================================================



from django.contrib import admin
from .models import Product, ProcessStep, MachineAsset

@admin.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ('product_number', 'name', 'description')
    search_fields = ('product_number', 'name')
    list_filter = ('process_steps',)
    # filter_horizontal = ('process_steps',)  # To display the many-to-many relationship in a horizontal interface

@admin.register(MachineAsset)
class MachineAssetAdmin(admin.ModelAdmin):
    list_display = ('machine_id', 'name', 'type', 'status')
    search_fields = ('machine_id', 'name')
    list_filter = ('status', 'type')

@admin.register(ProcessStep)
class ProcessStepAdmin(admin.ModelAdmin):
    list_display = ('step_number', 'description', 'order')
    search_fields = ('step_number', 'description')
    list_filter = ('products', 'machines')
    filter_horizontal = ('products', 'machines')  # To display the many-to-many relationships in a horizontal interface

