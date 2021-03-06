# Generated by Django 2.0.4 on 2019-01-23 00:34

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('geruestproject', '0005_auto_20190123_0003'),
    ]

    operations = [
        migrations.AddField(
            model_name='geruestbuch',
            name='Abmelder',
            field=models.CharField(blank=True, max_length=50, verbose_name='Abmelder'),
        ),
        migrations.AddField(
            model_name='geruestbuch',
            name='Status',
            field=models.CharField(blank=True, max_length=50, null=True, verbose_name='Status'),
        ),
        migrations.AlterField(
            model_name='geruestbuch',
            name='Abmeldedatum',
            field=models.CharField(blank=True, max_length=10, null=True, verbose_name='Abmeldedatum'),
        ),
        migrations.AlterField(
            model_name='geruestbuch',
            name='H',
            field=models.DecimalField(blank=True, decimal_places=2, max_digits=12, null=True, verbose_name='Höhe'),
        ),
    ]
