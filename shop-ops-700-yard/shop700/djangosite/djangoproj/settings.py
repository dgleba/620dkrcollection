"""
Django settings for djangoproj project.

For more information on this file, see
https://docs.djangoproject.com/

"""

import os
from datetime import timedelta

# Build paths inside the project like this: os.path.join(BASE_DIR, ...)
BASE_DIR = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))


# Quick-start development settings - unsuitable for production
# See https://docs.djangoproject.com/en/2.1/howto/deployment/checklist/

# SECURITY WARNING: keep the secret key used in production secret!
SECRET_KEY =  os.getenv('SECRET_KEY')

# SECURITY WARNING: don't run with debug turned on in production!
# DEBUG = True
# DEBUG = os.getenv('DJANGO_DEVELOPMENT')
DEBUG = os.getenv('DEBUG')

ALLOWED_HOSTS = [os.getenv('ALLOWED_HOSTS')]


# Application definition

INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'rest_framework',
    'corsheaders',
    'blogapp',
    'mcpunchapp',
    # 'schedulerapp',
]

# not used..
    # 'mark616',
    # 'apscheduler',
    # 'django_crontab',

MIDDLEWARE = [
    'corsheaders.middleware.CorsMiddleware',
    'django.middleware.security.SecurityMiddleware',
    "whitenoise.middleware.WhiteNoiseMiddleware",
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
]

CORS_ALLOWED_ORIGIN_REGEXES = [
    r"^https://\w+\.jgleba\.com$",
    r"^https://.*.198.23.238.244.nip.io.*",
    r"^https://.*.198.144.183.160.nip.io.*",
    r"^http://192.168.*",
    r"^http://10.4.*",
]
CORS_ALLOWED_ORIGINS = [
    "http://localhost:8080",
    "http://127.0.0.1:9000",
    "http://192.168.88.60:8081",
]

LOGIN_REDIRECT_URL = '/'

ROOT_URLCONF = 'djangoproj.urls'

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': ['templates'],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
            ],
        },
    },
]

WSGI_APPLICATION = 'djangoproj.wsgi.application'

# Database
# https://docs.djangoproject.com/en/2.1/ref/settings/#databases

# DATABASES = {
#     'default': {
#         'ENGINE': 'django.db.backends.sqlite3',
#         'NAME': os.path.join(BASE_DIR, 'db.sqlite3'),
#     }
# }

# DATABASES = {
#     'default': {
#         'ENGINE': 'django.db.backends.mysql',
#         'OPTIONS': {
#             'read_default_file': './djangoproj/database.cnf',
#         },
#     }
# }

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql', 
        'NAME': 'shop700db',
        'USER':  os.environ['MYSQL_USER'],
        'PASSWORD': os.environ['MYSQL_PASSWORD'],
        'HOST': 'dbm',   # Or an IP Address that your DB is hosted on
        'PORT': '3306',
    }
}

# DATABASES = {
    # 'default': {
        # 'ENGINE': 'django.db.backends.postgresql',
        # 'NAME': os.environ['POSTGRES_DB'],
        # 'USER': os.environ['POSTGRES_USER'],
        # 'PASSWORD': os.environ['POSTGRES_PASSWORD'], 
        # 'HOST': os.environ['POSTGRES_HOST'],
        # 'PORT': os.environ['POSTGRES_PORT'],
    # }
# }

REST_FRAMEWORK = {
    'DEFAULT_PERMISSION_CLASSES': [
        'rest_framework.permissions.AllowAny'
        # 'rest_framework.permissions.IsAuthenticated',
        # "rest_framework.permissions.DjangoModelPermissions",
    ],
    'DEFAULT_AUTHENTICATION_CLASSES': [
        'rest_framework_simplejwt.authentication.JWTAuthentication',
        'rest_framework.authentication.SessionAuthentication',
    ],
    'DEFAULT_PAGINATION_CLASS': 'rest_framework.pagination.LimitOffsetPagination',
    'PAGE_SIZE': 6
}

# see api.py for more info.

# https://www.django-rest-framework.org/api-guide/pagination/

# https://levelup.gitconnected.com/django-user-groups-with-django-rest-framework-f6f2bab43499
# REST_FRAMEWORK = {
#     "DEFAULT_AUTHENTICATION_CLASSES": [
#         "rest_framework.authentication.TokenAuthentication",
#         "rest_framework.authentication.SessionAuthentication",
#     ],
#     "DEFAULT_PERMISSION_CLASSES": [
#         "rest_framework.permissions.IsAuthenticated",
#         "rest_framework.permissions.DjangoModelPermissions",
#     ],
# }

SIMPLE_JWT = {
    'ACCESS_TOKEN_LIFETIME': timedelta(minutes=1500),
    'REFRESH_TOKEN_LIFETIME': timedelta(days=2),
    'ROTATE_REFRESH_TOKENS': False,
    'BLACKLIST_AFTER_ROTATION': True,
    'UPDATE_LAST_LOGIN': False,

    'ALGORITHM': 'HS256',
    # 'SIGNING_KEY': this.SECRET_KEY,
    'VERIFYING_KEY': None,
    'AUDIENCE': None,
    'ISSUER': None,

    # 'AUTH_HEADER_TYPES': ('Bearer',),
    # 'AUTH_HEADER_NAME': 'HTTP_AUTHORIZATION',
    # 'USER_ID_FIELD': 'id',
    # 'USER_ID_CLAIM': 'user_id',

    # 'AUTH_TOKEN_CLASSES': ('rest_framework_simplejwt.tokens.AccessToken',),
    # 'TOKEN_TYPE_CLAIM': 'token_type',

    # 'JTI_CLAIM': 'jti',

    # 'SLIDING_TOKEN_REFRESH_EXP_CLAIM': 'refresh_exp',
    # 'SLIDING_TOKEN_LIFETIME': timedelta(minutes=5),
    # 'SLIDING_TOKEN_REFRESH_LIFETIME': timedelta(days=1),
}


# Password validation
# https://docs.djangoproject.com/en/2.1/ref/settings/#auth-password-validators

AUTH_PASSWORD_VALIDATORS = [
    # {        'NAME': 'django.contrib.auth.password_validation.UserAttributeSimilarityValidator',    },
    {        'NAME': 'django.contrib.auth.password_validation.MinimumLengthValidator', 'OPTIONS': { 'min_length': 2, } },
    # {        'NAME': 'django.contrib.auth.password_validation.CommonPasswordValidator',    },
    # {        'NAME': 'django.contrib.auth.password_validation.NumericPasswordValidator',    },
]



# email 

# EMAIL_BACKEND = "django.core.mail.backends.filebased.EmailBackend"
EMAIL_FILE_PATH = os.path.join(BASE_DIR, 'email_sent')
#
EMAIL_BACKEND = 'django.core.mail.backends.smtp.EmailBackend'
EMAIL_HOST = '10.4.131.76'
DEFAULT_FROM_EMAIL = 'pmdm-apps@stackpole.com'
# EMAIL_PORT = 587
# EMAIL_USE_TLS = True
# EMAIL_HOST_USER = ''
# EMAIL_HOST_PASSWORD = ''
fail_silently=False


# django-crontab is installed, but not being used. linux cron not fully setup. 
# CRONJOBS = [
#     ('* * * * *', 'blogapp.cron.scheduled_job0')
# ]

# Internationalization
# https://docs.djangoproject.com/en/2.1/topics/i18n/

LANGUAGE_CODE = 'en-us'

TIME_ZONE = 'US/Eastern'

USE_I18N = True

USE_L10N = True

USE_TZ = True


# Static files (CSS, JavaScript, Images)
# https://docs.djangoproject.com/en/2.1/howto/static-files/

STATIC_URL = '/static/'

STATIC_ROOT = os.path.join(BASE_DIR, 'static')
# STATIC_ROOT = ''
# STATIC_ROOT = BASE_DIR / "static"

# STATICFILES_DIRS = ('static',)

