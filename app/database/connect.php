<?php
$host='localhost';
$user='prashansa';
$pass='password';
$db_name='blog';

$conn =new MySQLi($host,$user,$pass,$db_name);

if ($conn->connect_error) {
    die('Database connetion error:'.$conn->connect_error);
}