from django.urls import path
from geruestproject.api.views import api_scaffolds

app_name = 'geruestproject'

urlpatterns = [
    path('<slug>/', api_scaffolds, name="scaffoldinfos")
]
