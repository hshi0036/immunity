"""
WSGI config for immunity project.

It exposes the WSGI callable as a module-level variable named ``application``.

For more information on this file, see
https://docs.djangoproject.com/en/1.11/howto/deployment/wsgi/
"""

import os
#import sys
from django.core.wsgi import get_wsgi_application
#sys.path.append("/home/ubuntu/immunity/immunity")
#os.environ.setdefault("PYTHON_EGG_CACHE", "/home/ubuntu/immunity/immunity/egg_cache")
os.environ.setdefault("DJANGO_SETTINGS_MODULE", "immunity.settings")

application = get_wsgi_application()
