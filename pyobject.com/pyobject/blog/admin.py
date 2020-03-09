from django.contrib import admin
from .models import category, blog
# Register your models here.

class categoryAdmin(admin.ModelAdmin):
    list_display = ['name']

class blogAdmin(admin.ModelAdmin):
    list_display = ['image', 'blog_heading','category','blog_content', 'posted_on']
    list_display_links = ['blog_heading']

admin.site.register(category,categoryAdmin)
admin.site.register(blog,blogAdmin)

