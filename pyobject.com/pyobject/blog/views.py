from django.shortcuts import render
from .models import blog, category
from django.db.models import Q
from django.core.paginator import Paginator, EmptyPage, InvalidPage
from django.views.decorators.gzip import gzip_page

def blog_view(request):
    if request.method == 'POST':
        category_display = category.objects.all()
        query = request.POST['search_query']
        blog_display = blog.objects.all().filter(Q(blog_heading__icontains=query) | Q(blog_content__icontains=query))
        blog_display_footer = blog.objects.all().order_by('-posted_on')[0:3]
        context = {'blog_all': blog_display, 'category': category_display, 'blog':blog_display_footer}
    else:
        try:
            blog_display = blog.objects.all().order_by('-posted_on')
            category_display = category.objects.all()
            blog_display_footer = blog.objects.all().order_by('-posted_on')[0:3]
            paginator = Paginator(blog_display, 3)
            try:
                page = int(request.GET.get('page', '1'))
            except:
                page = 1
            try:
                blog_display = paginator.page(page)
            except(EmptyPage, InvalidPage):
                blog_display = paginator.page(paginator.num_pages)
            print('blog-display : ',blog_display)
            context = {'blog_all' : blog_display, 'category': category_display, 'blog':blog_display_footer}
        except Exception as e:
            context = {}
            raise e

    return render(request, 'blog/blog.html', context)

@gzip_page
def single_blog_display(request, blog_name):
    blog_search = blog_name.replace('_', ' ')
    blog_display = blog.objects.get(blog_heading=blog_search.strip())
    blog_display_footer = blog.objects.all().order_by('-posted_on')[0:3]
    context = {'blog_all': blog_display, 'blog' : blog_display_footer}
    return render(request, 'blog/blog_single.html', context)