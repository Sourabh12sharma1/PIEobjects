from django.db import models

# Create your models here.

class category(models.Model):
    name = models.CharField(max_length=50)

    def __str__(self):
        return self.name

class blog(models.Model):
    image = models.ImageField(upload_to='blog_image')
    blog_heading = models.CharField(max_length=100)
    category = models.ForeignKey(category, on_delete=models.CASCADE)
    blog_content = models.TextField(max_length=500)
    posted_on = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return '{} {} {} {} {}'.format(self.image, self.blog_heading, self.category, self.blog_content, self.posted_on)
