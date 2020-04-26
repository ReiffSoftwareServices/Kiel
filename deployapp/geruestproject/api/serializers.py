from rest_framework import serializers
from geruestproject.models import Geruestbuch


# Serializers define the API representation.
class GeruestbuchSerializer(serializers.ModelSerializer):
    class Meta:
        model = Geruestbuch
        fields = ['Projekt', 'Geruestbezeichner', 'Positionsart', 'InterneID', 'Status', 'Anforderer', 'Firma', 'Ansprechpartner', 'AnlageEquipment', 'Ebene', 'Oertlichkeit', 'Grund', 'L', 'B', 'H', 'Anmeldedatum', 'Nutzungsbeginn', 'Abmelder', 'Abmeldedatum']
