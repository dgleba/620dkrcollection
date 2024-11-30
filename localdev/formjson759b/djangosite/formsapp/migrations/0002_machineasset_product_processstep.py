# Generated by Django 4.2.15 on 2024-09-03 01:20

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('formsapp', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='MachineAsset',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('machine_id', models.CharField(max_length=20, unique=True)),
                ('name', models.CharField(max_length=100)),
                ('type', models.CharField(max_length=50)),
                ('status', models.CharField(max_length=50)),
            ],
        ),
        migrations.CreateModel(
            name='Product',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('product_number', models.CharField(max_length=20, unique=True)),
                ('name', models.CharField(max_length=100)),
                ('description', models.TextField()),
            ],
        ),
        migrations.CreateModel(
            name='ProcessStep',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('step_number', models.PositiveIntegerField()),
                ('description', models.TextField()),
                ('order', models.PositiveIntegerField()),
                ('machines', models.ManyToManyField(related_name='process_steps', to='formsapp.machineasset')),
                ('products', models.ManyToManyField(related_name='process_steps', to='formsapp.product')),
            ],
        ),
    ]