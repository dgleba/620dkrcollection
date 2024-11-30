# Generated by Django 4.1.7 on 2024-03-13 02:48

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('blogappm2m', '0002_posttbl_pic'),
    ]

    operations = [
        migrations.AlterField(
            model_name='posttbl',
            name='pic',
            field=models.ImageField(blank=True, default=None, null=True, upload_to='images/'),
        ),
        migrations.AlterField(
            model_name='posttbl',
            name='tags',
            field=models.ManyToManyField(related_name='tags', to='blogappm2m.tagtbl'),
        ),
    ]
