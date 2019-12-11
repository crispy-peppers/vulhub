#!/bin/bash
a2enmod rewrite
cd /etc/apache2/sites-available/
mv /etc/apache2/sites-available/000-default.conf /tmp
wget https://raw.githubusercontent.com/crispy-peppers/vulhub/master/xss_domainmod_1191518/000-default.conf
cd -
service apache2 restart
echo \$web_root = \$_SERVER[ \'HTTP_X_ORIGINAL_URI\' ]\; >> /var/www/html/domain/_includes/config.inc.php
cd /var/www/html/
wget https://raw.githubusercontent.com/crispy-peppers/vulhub/master/xss_domainmod_1191518/.htaccess
