<?
define('ROOT' , $_SERVER['DOCUMENT_ROOT']);

$lenta = mysql_fetch_assoc(mysql_query("SELECT * FROM `settings` WHERE `id` = '1'  LIMIT 1"));
echo $lenta['zamorozen'];

?>
