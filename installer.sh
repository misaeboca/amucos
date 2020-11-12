FILE=composer.lock
if test -f "$FILE"; then
    echo "System already installed...updating"    
else
    composer install
    mv -v application/third_party/codeigniter-debugbar/  mw-core/application/third_party/codeigniter-debugbar/
    rm -rf application
    mv -v vendor/ mw-core/vendor/
    rm -rf mw-core/application/config/config.php
    rm -rf mw-core/application/config/database.php
    rm -rf mw-core/application/routes
    rm -rf mw-core/application/cache
    rm -rf mw-core/uploads
    cp /var/www/vhost/amuco/shared/mw-core/index.php mw-core/index.php
fi


