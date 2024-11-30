# formsapp/models.py
from django.db import models

'''
# from django.contrib.postgres.fields import JSONField

# class UserForm(models.Model):
#     name = models.CharField(max_length=255)
#     description = models.TextField(blank=True, null=True)
#     fields = JSONField()  # to store form fields configuration

#     def __str__(self):
#         return self.name

# class FormResponse(models.Model):
#     form = models.ForeignKey(UserForm, on_delete=models.CASCADE)
#     responses = JSONField()  # to store form responses
#     submitted_at = models.DateTimeField(auto_now_add=True)

#     def __str__(self):
#         return f"Response to {self.form.name} at {self.submitted_at}"
'''




# formsapp/models.py
from django.db import models

class UserForm(models.Model):
    name = models.CharField(max_length=255)
    description = models.TextField(blank=True, null=True)
    fields = models.JSONField()  # to store form fields configuration

    def __str__(self):
        return self.name

class FormResponse(models.Model):
    form = models.ForeignKey(UserForm, on_delete=models.CASCADE)
    responses = models.JSONField()  # to store form responses
    submitted_at = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return f"Response to {self.form.name} at {self.submitted_at}"


# =================================================


class Product(models.Model):
    product_number = models.CharField(max_length=20, unique=True)
    name = models.CharField(max_length=100)
    description = models.TextField()

    def __str__(self):
        return self.name

class MachineAsset(models.Model):
    machine_id = models.CharField(max_length=20, unique=True)
    name = models.CharField(max_length=100)
    type = models.CharField(max_length=50)
    status = models.CharField(max_length=50)

    def __str__(self):
        return self.name

class ProcessStep(models.Model):
    step_number = models.PositiveIntegerField()
    description = models.TextField()
    order = models.PositiveIntegerField()

    # Many-to-Many relationships
    products = models.ManyToManyField(Product, related_name='process_steps')
    machines = models.ManyToManyField(MachineAsset, related_name='process_steps')

    def __str__(self):
        return f"Step {self.step_number}"
