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
