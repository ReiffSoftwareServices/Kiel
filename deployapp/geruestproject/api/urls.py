from django.urls import path
from geruestproject.api import views

app_name = 'geruestproject'

urlpatterns = [
    path('xx/', views.UserViewSet, name="scaffoldinfos")
]
