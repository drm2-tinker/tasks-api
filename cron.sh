app_root=${1}
app_cron="* * * * * php ${app_root}/artisan schedule:run >> /dev/null 2>&1"

# check for App CRON, and add it if it doesn't exist
crontab -l 2>/dev/null | grep -F -q "${app_cron}" || (crontab -l 2>/dev/null; echo "${app_cron}") | crontab -
