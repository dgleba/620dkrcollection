# import os
from pathlib import Path, os

#BASE_DIR = os.path.abspath(os.path.dirname(__file__))

# Build paths inside the project like this: BASE_DIR / 'subdir'.
BASE_DIR = Path(__file__).resolve().parent.parent



DEBUG = True

ALLOWED_HOSTS = ['*']

MANAGERS = ADMINS = ()

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': os.path.join(BASE_DIR, 'sqlite3.db'),
        'USER': '',
        'PASSWORD': '',
        'HOST': '',
        'PORT': '',
    }
}

SECRET_KEY = 'notsosecret'

MIDDLEWARE = (
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
)

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'APP_DIRS': True,
        'DIRS': ['templates'],
        'OPTIONS': {
            'context_processors': (
                "django.template.context_processors.request",
                "django.contrib.auth.context_processors.auth",
                "django.template.context_processors.debug",
                "django.template.context_processors.i18n",
                "django.template.context_processors.media",
                "django.template.context_processors.static",
                "django.template.context_processors.tz",
                "django.contrib.messages.context_processors.messages",
            ),
        },
    },
]

ROOT_URLCONF = 'djangoproject.urls'


INSTALLED_APPS = (
    'django.contrib.auth',
    'django.contrib.admin',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.staticfiles',
    'django.contrib.messages',
    'jsignature',
    'jsig',
)

STATIC_URL = '/static/'

JSIGNATURE_JQUERY = 'admin'

JSIGNATURE_WIDTH = 350
JSIGNATURE_HEIGHT = 150
# JSIGNATURE_COLOR = 
# JSIGNATURE_BACKGROUND_COLOR = '#ffcccc' # light redish
JSIGNATURE_BACKGROUND_COLOR = '#f0f0f0'
JSIGNATURE_BACKGROUND_COLOR = '#f0fff0' #   /* Very light green */

