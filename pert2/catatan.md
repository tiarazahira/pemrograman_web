docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
rm -rf *
rm -rf .*
chown -R www-data:www-data storage/*
