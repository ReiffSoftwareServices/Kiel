from rest_framework import viewsets, permissions
from django.contrib.auth.models import User, Group
from geruestproject.models import Geruestbuch, Client, Projekt, Inventar
from .serializers import UserSerializer, GroupSerializer, ClientSerializer
from django.views.decorators.csrf import csrf_exempt
from django.http import JsonResponse
import json
import os.path
BASE = os.path.dirname(os.path.abspath(__file__))


class UserViewSet(viewsets.ModelViewSet):
    """
    API endpoint that allows users to be viewed or edited.
    """
    queryset = User.objects.all().order_by('-date_joined')
    serializer_class = UserSerializer
    permission_classes = [permissions.IsAuthenticated]


class ClientsViewSet(viewsets.ModelViewSet):
    """
    API endpoint that allows users to be viewed or edited.
    """
    queryset = Client.objects.all()
    serializer_class = ClientSerializer
    permission_classes = [permissions.IsAuthenticated]


@csrf_exempt
def DashboardViewSet(request):
    if request.method == 'GET':
        f = open(os.path.join(BASE, "recordSetExample.json"))
        data = json.load(f)
        f.close()
        jsonOutput = JsonResponse(data, safe=False)
        return jsonOutput
