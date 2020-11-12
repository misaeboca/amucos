FILE=composer.lock
if test -f "$FILE"; then
    cp mw-core/application/config/site.php ./site.php
    cp mw-core/application/config/database.php ./database.php
    cp mw-core/application/config/config.php ./config.php
    
    composer update
    mv -v application/third_party/codeigniter-debugbar/  mw-core/application/third_party/codeigniter-debugbar/
    rm -rf application
    mv -v vendor/ mw-core/vendor/
    chown -R apache:apache .
    mv ./site.php mw-core/application/config/site.php
    mv ./database.php mw-core/application/config/database.php
    mv ./config.php mw-core/application/config/config.php
    cp mw-core/index.local.php mw-core/index.php
else
    echo "system installation not found..."
fi


