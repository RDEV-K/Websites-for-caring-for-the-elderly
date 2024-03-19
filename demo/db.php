<?php
$link = mysql_connect('requestinfost.db.9620318.hostedresource.com', 'requestinfost', 'rose186SJM');
$db_connect=mysql_select_db('requestinfost');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
?> 