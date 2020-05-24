#!/bin/sh

SCRIPT_DIR=$(cd $(dirname $0); pwd);
LOG_DIR="${SCRIPT_DIR}/logs";
APP_DIR="${SCRIPT_DIR}/src";
STORAGE_DIR="${APP_DIR}/storage";

find $LOG_DIR -type f -print0 | xargs -0 chmod 666;
find $LOG_DIR -type d -print0 | xargs -0 chmod 777;
find $APP_DIR -type f -print0 | xargs -0 chmod 644;
find $APP_DIR -type d -print0 | xargs -0 chmod 755;
find $STORAGE_DIR -type f -print0 | xargs -0 chmod 666;
find $STORAGE_DIR -type d -print0 | xargs -0 chmod 777;
chmod 755 ${APP_DIR}/artisan
