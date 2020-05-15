from django.urls import path, include
from rest_framework import routers
from . import views


router = routers.DefaultRouter()
router.register(r'users', views.UserViewSet)
router.register(r'clients', views.ClientsViewSet)

urlpatterns = [
    path('', include(router.urls)),
    path(r'x/', views.DashboardViewSet),
]
