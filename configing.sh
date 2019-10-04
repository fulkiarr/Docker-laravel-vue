# entrypoint.sh
#!/usr/bin/env sh
cd application
php artisan optimize
php artisan config:cache
php artisan view:cache
php artisan view:clear
