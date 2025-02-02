<?php
/**
 * /_includes/config.SAMPLE.inc.php
 *
 * This file is part of DomainMOD, an open source domain and internet asset manager.
 * Copyright (c) 2010-2018 Greg Chetcuti <greg@chetcuti.com>
 *
 * Project: http://domainmod.org   Author: http://chetcuti.com
 *
 * DomainMOD is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later
 * version.
 *
 * DomainMOD is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with DomainMOD. If not, see
 * http://www.gnu.org/licenses/.
 *
 */
?>
<?php
// Path Settings
#$web_root = '/domain'; // don't include trailing slash (if you're installing in the root just leave this blank)
$web_root = $_SERVER[ 'HTTP_X_ORIGINAL_URI' ];
$matches=[];
$str = preg_match("/^(\/.*?\/domain)/",$web_root,$matches);
$web_root = $matches[0];
#error_log(print_r($web_root,true));

// Database Settings
$dbhostname = 'localhost';
$dbname = 'domain';
$dbusername = 'username';
$dbpassword = 'password';
