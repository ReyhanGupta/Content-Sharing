<?php
 session_start();
 session_destroy();
 $ch = curl_init("http://localhost/Website/def2.html");
curl_exec($ch);
?>