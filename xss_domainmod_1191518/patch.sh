#!/bin/bash
cd /var/www/html/domain/_includes
mv config.inc.php /tmp
wget https://raw.githubusercontent.com/crispy-peppers/vulhub/master/xss_domainmod_1191518/_includes/config.inc.php
