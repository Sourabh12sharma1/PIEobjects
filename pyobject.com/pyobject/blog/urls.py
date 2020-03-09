from django.conf.urls import url, include
from . import views

urlpatterns = [
    url(r'^$', views.blog_view),
    url(r'(?P<blog_name>\w+)/$', views.single_blog_display),
]
