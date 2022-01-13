# THIS FILE MUST BE KEPT SECRET! IT IS BLOCKED IN THE HTACCESS FILE
# HOWEVER, THIS DIRECTORY SHOULDN'T BE EXPOSED TO THE PUBLIC AT ALL
# SEE THE DOCS FOR PROPER (SECURE) INSTALLATION:
# https://docs.phpvms.net/installation/uploading
#
# This is the place to edit your configuration. To change a config that's
# not present here, you need to either edit the file/config in the config
# folder, or change it to read the value from the environment. Something like:
#
# 'some_key' = env('ENVIRONMENT_VARIABLE_KEY_ADDED_BELOW', 'default value')
#
# Various other settings in the configs also read from some environment variables
# by default. You can override those here

APP_KEY='base64:tctO+Lpz5+jhCQ8TbgKln/TZttiXiqriXY8IkHO2W4g='
APP_NAME='Airlines Airlines'
SITE_NAME='Airlines Airlines'
APP_URL='https://airlinesairlines.ml'
APP_LOCALE=pt-br

# When live, this should be "production". If testing locally, you can use "local"
APP_ENV=production
LOG_LEVEL=debug
APP_DEBUG=false
DEBUG_TOOLBAR=false

## DATABASE SETTINGS

DB_CONNECTION=mysql
DB_HOST='127.0.0.1'
DB_PORT=3306
DB_DATABASE='phpvms'
DB_USERNAME='phpvms'
DB_PASSWORD='12345678'
DB_PREFIX=''
DB_EMULATE_PREPARES=true
DB_SOCKET=

## CACHE SETTINGS
# https://docs.phpvms.net/config/optimizing#caching

CACHE_DRIVER=file
CACHE_PREFIX='phpvms_614e10766528c'

## EMAIL SETTINGS

# Look at the available mail configs in config/mail.php
# Also refer to the Laravel docs here: https://laravel.com/docs/8.x/mail
# If you're using SMTP, I recommend setting the QUEUE_DRIVER to 'database'
# https://docs.phpvms.net/config/optimizing#queue-driver

MAIL_MAILER=log
MAIL_FROM_NAME='phpVMS Admin'
MAIL_FROM_ADDRESS='no-reply@phpvms.net'
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_ENCRYPTION=tls
MAIL_USERNAME=aa819fba75e78c
MAIL_PASSWORD=9f46bfce2a77ef

## QUEUE SETTINGS

# Set this to "database" if you have slow pages due to notifications/emails
# They will then be sent out via cron
QUEUE_DRIVER=sync

# If you're using the Laravel Queue Worker, set this to true. This will stop the queue tasks
# from being run during the cron job
# https://laravel.com/docs/8.x/queues#running-the-queue-worker
QUEUE_WORKER=false
