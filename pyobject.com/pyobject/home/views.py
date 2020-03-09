from django.shortcuts import render

from django.shortcuts import render
import blog
from blog.models import blog

from .models import subscriber
from django.views.decorators.gzip import gzip_page

def index(request):
    blog_display = blog.objects.all().order_by('-posted_on')[0:3]
    if request.method == "POST":
        subscriber_email = request.POST['email']
        print(subscriber_email)
        if subscriber.objects.filter(subscriber_email=subscriber_email).first():
            context = {'blog': blog_display, 'msg': 'You are already registered.'}
            return render(request, 'home/index.html', context)
        else:
            subscriber_model = subscriber(subscriber_email=subscriber_email)
            subscriber_model.save()
            context = {'blog': blog_display, 'msg':'You are registered as subscriber sucessfully.'}
            return render(request, 'home/index.html', context)
    context = {'blog': blog_display}
    return render(request, 'home/index.html', context)
# Create your views here.
def terms(request):
    blog_display = blog.objects.all().order_by('-posted_on')[0:3]
    context = {'blog': blog_display}
    return render(request, 'home/terms_conditions.html', context)


def privacy(request):
    blog_display = blog.objects.all().order_by('-posted_on')[0:3]
    context = {'blog': blog_display}
    return render(request, 'home/privacy_policy.html', context)

