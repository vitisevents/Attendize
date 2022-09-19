chown -R www-data public/user_content
chown -R www-data storage/app
chown -R www-data storage/framework
chown -R www-data storage/logs
chown -R www-data storage/cache
chown -R www-data bootstrap/cache
chown -R www-data .env

chmod -R a+w public/user_content
chmod -R a+w storage/app
chmod -R a+w storage/framework
chmod -R a+w storage/logs
chmod -R a+w storage/cache
chmod -R a+w bootstrap/cache
chmod -R a+w .env
