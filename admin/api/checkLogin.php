<?php
   //开启session
session_start();

if (isset($_SESSION["Info"])) {
   echo '{ "code":10000, "msg":"ok" }';
} else {
   echo '{ "code":10001, "msg":"fail" }';
}

?>