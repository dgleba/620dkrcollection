from django.db import models
from django.urls import reverse
from django.contrib.auth.models import User
from django.contrib.auth import get_user_model
from django.conf import settings

class none_to_empty(models.CharField):
    def get_prep_value(self, value):
        if value == None:
            return ''
        return value

# =================================================
# =================================================


class Post(models.Model):

    # Fields
    created = models.DateTimeField(auto_now_add=True, editable=False)
    last_updated = models.DateTimeField(auto_now=True, editable=False)
    title = models.CharField(max_length=230)
    body = models.TextField(max_length=32100, default=None, blank=True, null=True)
    user = models.ForeignKey(settings.AUTH_USER_MODEL, default=None, blank=True, null=True, on_delete=models.DO_NOTHING)  # Foreign key field for user (User, on_delete=models.CASCADE) 

    class Meta:
        pass
        ordering = ('-id',)    

    def __str__(self):
        return str(self.pk)

    def get_absolute_url(self):
        return reverse("blogapp_Post_detail", args=(self.pk,))

    def get_update_url(self):
        return reverse("blogapp_Post_update", args=(self.pk,))

    # def save(self, *args, **kwargs):
        # if not self.user_id:
            # User = get_user_model()
            # self.user = User.objects.get(pk)  # Replace 1 with the appropriate user ID or condition
        # super().save(*args, **kwargs)

    # def save_model(self, request, obj, form, change):
        # # associating the current logged in user to the client_id
        # obj.client_id = request.user
        # super().save_model(request, obj, form, change)
        
        

# =================================================
# =================================================

# class Person(models.Model):
#     name = models.CharField(max_length=128)

#     def __str__(self):
#         return  str(self.id) + "-" + self.name 


# class Group(models.Model):
#     name = models.CharField(max_length=128)
#     members = models.ManyToManyField(Person, related_name='groups')

#     def __str__(self):
#         return  str(self.id) + "-" + self.name 


# =================================================


# class Vehicle(models.Model):
#     vehicle_maker = models.CharField(max_length=252, blank=True, null=True)
#     vehicle_model = models.CharField(max_length=252, blank=True, null=True)
#     vehicle_class_si_vehicle_segment = models.CharField(max_length=252, blank=True, null=True)
#     maximum_speed_kph = models.BigIntegerField(blank=True, null=True)
#     number_of_electric_motors = models.BigIntegerField(blank=True, null=True)
#     max_motor_power_kw = models.IntegerField(db_column='max_ motor_power_kw', blank=True, null=True)  # Field renamed to remove unsuitable characters.
#     max_motor_torque_nm = models.BigIntegerField(blank=True, null=True)
#     max_motor_speed_rpm = models.BigIntegerField(blank=True, null=True)
#     source = models.CharField(max_length=252, blank=True, null=True)

#     created_at = models.DateTimeField(auto_now_add=True)
#     updated_at = models.DateTimeField(auto_now=True)
#     sort_order = models.IntegerField(blank=True, null=True)
#     active_status = models.IntegerField(blank=True, null=True)

#     def __str__(self):
#         return  str(self.id) + " - " + self.vehicle_maker +  " - " + self.vehicle_model


# class Application(models.Model):
#     # one to many.. vehicle = models.ForeignKey(Vehicle, on_delete=models.CASCADE)
#     vehicles = models.ManyToManyField(Vehicle )
#     # vehicle_id = models.IntegerField(blank=True, null=True)
#     source = models.CharField(max_length=252, blank=True,default='' )
#     application = models.CharField(max_length=252, blank=True,default='' )
#     pts_topology = models.CharField(max_length=252, blank=True,default='' )
#     num_speeds = models.CharField(max_length=252, blank=True, null=True)
#     pts_supplier = models.CharField(max_length=252, blank=True, null=True)
#     total_gear_ratio = models.CharField(max_length=252, blank=True, null=True)
#     total_center_distance_mm = models.CharField(max_length=252, blank=True, null=True)
#     differential_type = models.CharField(max_length=252, blank=True, null=True)
#     load_spectrum_id = models.CharField(max_length=252, blank=True, null=True)
#     lubrication = models.CharField(max_length=252, blank=True, null=True)

#     created_at = models.DateTimeField(auto_now_add=True)
#     updated_at = models.DateTimeField(auto_now=True)
#     sort_order = models.IntegerField(blank=True, null=True)
#     active_status = models.IntegerField(blank=True, null=True)

#     def __str__(self):
#         # return  str(self.id) + " - " + self.source  
#         # return  str(self.id) + " - " + none_to_empty(self.source) +  " - " +none_to_empty( self.application) +  " - " +  none_to_empty(self.pts_topology)
#         return  str(self.id) + " - " + (self.source) +  " - " + ( self.application) +  " - " +  (self.pts_topology)


# =================================================
# =================================================

# def __str__(self):
#         if self.start < 0:
#             A = f'{abs(self.start)} BC'
#         elif self.start == None:
#             A = ''
#         else:
#             A = self.start
#         if self.end < 0:
#             B = f'{abs(self.end)} BC'
#         elif self.end == None:
#             B = ''
#         else:
#             B = self.end
#         return f'{self.name} ({A} - {B})'

# =================================================
# =================================================

# =================================================


# class Application2(models.Model):
#     # one to many.. vehicle = models.ForeignKey(Vehicle, on_delete=models.CASCADE)
#     # vehicles = models.ManyToManyField(Vehicle)
#     # vehicle_id = models.IntegerField(blank=True, null=True)
#     source = models.CharField(max_length=252, blank=True, default='' )
#     application = models.CharField(max_length=252, blank=True, default='' )
#     pts_topology = models.CharField(max_length=252, blank=True, default='' )
#     num_speeds = models.CharField(max_length=252, blank=True, null=True)
#     pts_supplier = models.CharField(max_length=252, blank=True, null=True)
#     total_gear_ratio = models.CharField(max_length=252, blank=True, null=True)
#     total_center_distance_mm = models.CharField(max_length=252, blank=True, null=True)
#     differential_type = models.CharField(max_length=252, blank=True, null=True)
#     load_spectrum_id = models.CharField(max_length=252, blank=True, null=True)
#     lubrication = models.CharField(max_length=252, blank=True, null=True)

#     created_at = models.DateTimeField(auto_now_add=True)
#     updated_at = models.DateTimeField(auto_now=True)
#     sort_order = models.IntegerField(blank=True, null=True)
#     active_status = models.IntegerField(blank=True, null=True)

#     def __str__(self):
#         # return  str(self.id) + " - " + self.source  
#         # i did not get none_to_empty to work.
#         # return  str(self.id) + " - " + none_to_empty(self.source) +  " - " +none_to_empty( self.application) +  " - " +  none_to_empty(self.pts_topology)
#         return  str(self.id) + " - " + (self.source) +  " - " + ( self.application) +  " - " +  (self.pts_topology)

# class Vehicle2(models.Model):
#     vehicle_maker = models.CharField(max_length=252, blank=True, default='')
#     vehicle_model = models.CharField(max_length=252, blank=True, default='')

#     application2s  =  models.ManyToManyField(Application2)

#     vehicle_class_si_vehicle_segment = models.CharField(max_length=252, blank=True, null=True)
#     maximum_speed_kph = models.BigIntegerField(blank=True, null=True)
#     number_of_electric_motors = models.BigIntegerField(blank=True, null=True)
#     max_motor_power_kw = models.IntegerField(db_column='max_ motor_power_kw', blank=True, null=True)  # Field renamed to remove unsuitable characters.
#     max_motor_torque_nm = models.BigIntegerField(blank=True, null=True)
#     max_motor_speed_rpm = models.BigIntegerField(blank=True, null=True)
#     source = models.CharField(max_length=252, blank=True, null=True)

#     created_at = models.DateTimeField(auto_now_add=True)
#     updated_at = models.DateTimeField(auto_now=True)
#     sort_order = models.IntegerField(blank=True, null=True)
#     active_status = models.IntegerField(blank=True, null=True)

#     def __str__(self):
#         return  str(self.id) + " - " + self.vehicle_maker +  " - " + self.vehicle_model



# =================================================
