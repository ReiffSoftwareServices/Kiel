"""Geruest URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.0/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.conf.urls import  url
from django.urls import path, include
from . import views


urlpatterns = [
	path ('',views.index, name="index"),
	path ('test',views.test, name="test"),
	path ('input',views.test_form, name="test_form"),
    path(r'admin/', admin.site.urls),
	path ('save_anmeldung',views.save_anmeldung, name="save_anmeldung"),
	path ('save_abmeldung',views.save_abmeldung, name="save_abmeldung"),
	path ('save_umbau',views.save_umbau, name="save_umbau"),	
    #url(r'^', include('books.urls'))
]
