<?php
$db=mysqli_connect('127.0.0.1','root','','ecommerce');
if(mysqli_connect_errno())
{
echo'mysqli connect with these eroors'. mysqli_connect_error();
die();
}
define('BASEURL', '/ecommerce/');
