from django.http import HttpResponse
from django.shortcuts import render
 
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