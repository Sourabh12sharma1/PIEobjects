from django.contrib import admin
from .models import subscriber
# Register your models here.

class subscriberAdmin(admin.ModelAdmin):
    list_display = ['subscriber_email', 'created']
    list_display_links = ['subscriber_email']

admin.site.register(subscriber,subscriberAdmin)