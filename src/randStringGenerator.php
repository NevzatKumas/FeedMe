<?php
$allowedChars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
echo substr(str_shuffle($allowedChars), 10, 10);
?>