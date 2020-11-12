FILE=composer.lock
if test -f "$FILE"; then
    echo "System already installed...updating"
    sh updater.sh
else
    composer install
    mv -v application/third_party/codeigniter-debugbar/  mw-core/application/third_party/codeigniter-debugbar/
    rm -rf application
    mv -v vendor/ mw-core/vendor/
    chown -R apache:apache ./
fi


