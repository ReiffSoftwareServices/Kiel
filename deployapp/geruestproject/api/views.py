from rest_framework.response import Response
from rest_framework.decorators import api_view

from geruestproject.models import Geruestbuch
from geruestproject.api.serializers import GeruestbuchSerializer
from rest_framework.renderers import JSONRenderer


@api_view(['GET', ])
def api_scaffolds(request: object, slug: object) -> object:
    scaffold_example = Geruestbuch.objects.get()
    if request.method == "GET":
        serializer = GeruestbuchSerializer(scaffold_example, many=True)
        return "jo"
