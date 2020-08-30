from django.db import models


# Create your models here.
class Vaccine(models.Model):
    type = models.CharField(max_length=50)
    age = models.CharField(max_length=50)
    brand = models.CharField(max_length=50)