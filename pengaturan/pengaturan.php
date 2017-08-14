<?php

$hostname_conn = "host = 180.250.115.229";
$port_conn     = "port = 5432";
$database_conn = "dbname = Magz";
$credentials_conn = "user = postgres password=k10.admin";
if($database_conn)
{
	echo "database terkoneksi";

}
else
{
	echo "database belum terkoneksi";
}

global $database_conn;global $port_conn;global $credentials_conn;global $hostname_conn;
putenv('TZ=Asia/Jakarta');


?>