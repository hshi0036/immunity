from django.http import HttpResponse, JsonResponse
from django.shortcuts import render
from model.models import Vaccine
from django.core import serializers
 
def hello(request):
    return HttpResponse("Hello world ! ")

def index(request):
    return render(request, 'index.html')

def search(request):
    return render(request, 'search.html')

def vaccine(request):
    return render(request, 'vaccine.html')

def safe(request):
    return render(request, 'safe.html')

def policy(request):
    return render(request, 'policy.html')

def get_vaccine(request):
	print("get vaccine")

	age = request.GET.get('age')
	
	res = Vaccine.objects.filter(age=age)
	res = serializers.serialize("json", res)
	return HttpResponse(res)