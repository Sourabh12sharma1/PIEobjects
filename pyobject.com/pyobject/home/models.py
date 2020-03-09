from django.db import models

# Create your models here.
from django.db import models

# Create your models here.
class subscriber(models.Model):

    subscriber_email = models.EmailField(max_length=70, blank=True, null=True)
    created = models.DateTimeField(auto_now_add=True)

    def __str__(self):
        return '{} {}'.format(self.subscriber_email, self.created)