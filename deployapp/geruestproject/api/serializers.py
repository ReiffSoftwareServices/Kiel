from rest_framework import serializers
from django.contrib.auth.models import User, Group
from geruestproject.models import Geruestbuch, Client, Projekt, Inventar


class ClientSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Client
        fields = ['Company_Name']


class UserSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = User
        fields = ['url', 'username', 'email', 'groups']


class GroupSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Group
        fields = ['url', 'name']



"""
# Serializers define the API representation.
class GeruestbuchSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Geruestbuch
        fields = ['Projekt', 'Geruestbezeichner', 'Positionsart', 'InterneID', 'Status', 'Anforderer', 'Firma', 'Ansprechpartner', 'AnlageEquipment', 'Ebene', 'Oertlichkeit', 'Grund', 'L', 'B', 'H', 'Anmeldedatum', 'Nutzungsbeginn', 'Abmelder', 'Abmeldedatum']
"""
