from django.conf.urls import url, include
from . import views

urlpatterns = [
    url(r'^$', views.index),
    url(r'terms_conditions/', views.terms),
    url(r'privacy/', views.privacy),
]
