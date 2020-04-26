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
from django.conf.urls import url, include
from django.urls import path, include
from django.contrib.auth.models import User
from rest_framework import routers, serializers, viewsets
from . import views


# Serializers define the API representation.
class UserSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = User
        fields = ['url', 'username', 'email', 'is_staff']


# ViewSets define the view behavior.
class UserViewSet(viewsets.ModelViewSet):
    queryset = User.objects.all()
    serializer_class = UserSerializer


# Routers provide an easy way of automatically determining the URL conf.
router = routers.DefaultRouter()
router.register(r'users', UserViewSet)

urlpatterns = [
    path('', views.index, name="index"),
    path('test', views.test, name="test"),
    path('input', views.test_form, name="test_form"),
    path(r'admin/', admin.site.urls),
    path('save_anmeldung', views.save_anmeldung, name="save_anmeldung"),
    path('save_abmeldung', views.save_abmeldung, name="save_abmeldung"),
    path('save_umbau', views.save_umbau, name="save_umbau"),
    url(r'xxx', include(router.urls)),
    url(r'^api-auth/', include('rest_framework.urls')),
    # url(r'^', include('books.urls'))
]
