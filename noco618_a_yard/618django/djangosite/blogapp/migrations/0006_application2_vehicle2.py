# Generated by Django 3.2 on 2021-09-26 15:16

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogapp', '0005_auto_20210925_2317'),
    ]

    operations = [
        migrations.CreateModel(
            name='Application2',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('source', models.CharField(blank=True, default='', max_length=252)),
                ('application', models.CharField(blank=True, default='', max_length=252)),
                ('pts_topology', models.CharField(blank=True, default='', max_length=252)),
                ('num_speeds', models.CharField(blank=True, max_length=252, null=True)),
                ('pts_supplier', models.CharField(blank=True, max_length=252, null=True)),
                ('total_gear_ratio', models.CharField(blank=True, max_length=252, null=True)),
                ('total_center_distance_mm', models.CharField(blank=True, max_length=252, null=True)),
                ('differential_type', models.CharField(blank=True, max_length=252, null=True)),
                ('load_spectrum_id', models.CharField(blank=True, max_length=252, null=True)),
                ('lubrication', models.CharField(blank=True, max_length=252, null=True)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('sort_order', models.IntegerField(blank=True, null=True)),
                ('active_status', models.IntegerField(blank=True, null=True)),
            ],
        ),
        migrations.CreateModel(
            name='Vehicle2',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('vehicle_maker', models.CharField(blank=True, default='', max_length=252)),
                ('vehicle_model', models.CharField(blank=True, default='', max_length=252)),
                ('vehicle_class_si_vehicle_segment', models.CharField(blank=True, max_length=252, null=True)),
                ('maximum_speed_kph', models.BigIntegerField(blank=True, null=True)),
                ('number_of_electric_motors', models.BigIntegerField(blank=True, null=True)),
                ('max_motor_power_kw', models.IntegerField(blank=True, db_column='max_ motor_power_kw', null=True)),
                ('max_motor_torque_nm', models.BigIntegerField(blank=True, null=True)),
                ('max_motor_speed_rpm', models.BigIntegerField(blank=True, null=True)),
                ('source', models.CharField(blank=True, max_length=252, null=True)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('sort_order', models.IntegerField(blank=True, null=True)),
                ('active_status', models.IntegerField(blank=True, null=True)),
                ('Application2s', models.ManyToManyField(to='blogapp.Application2')),
            ],
        ),
    ]
