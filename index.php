<?php
define('db_admin','root');
define('db_pass','');
define('db_ip','127.0.0.1');
define('db','euu');

require_once('class.db.php');

use Db\Engine as Vb;
// kullanımda \ yada /

$Vb = new Vb;

$Vb->insert_into('ss',
				'firstname,lastname,email ',
				'\'emre\',\'del\',\'ben\''
				);

$sorgum = $Vb->return_query_ass('select * from myguests');
