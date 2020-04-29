from rest_framework.response import Response
from rest_framework.decorators import api_view
from django.core import serializers
from django.shortcuts import render
from django.http import HttpResponse
import json

from geruestproject.models import Geruestbuch
from geruestproject.api.serializers import GeruestbuchSerializer
from rest_framework.renderers import JSONRenderer


@api_view(['GET'])
def api_scaffolds(request: object, slug: object) -> object:
    """
    REST API TEST FUNCTION
    """
    queryset = json.loads(serializers.serialize('json', Geruestbuch.objects.all()))
    return render(json.dumps(queryset[0]))


from django.contrib.auth.models import User, Group
from rest_framework import viewsets
from rest_framework import permissions
from geruestproject.api.serializers import UserSerializer, GroupSerializer


class UserViewSet(viewsets.ModelViewSet):
    """
    API endpoint that allows users to be viewed or edited.
    """
    queryset = User.objects.all().order_by('-date_joined')
    serializer_class = UserSerializer
    permission_classes = [permissions.IsAuthenticated]


class GroupViewSet(viewsets.ModelViewSet):
    """
    API endpoint that allows groups to be viewed or edited.
    """
    queryset = Group.objects.all()
    serializer_class = GroupSerializer
    permission_classes = [permissions.IsAuthenticated]
