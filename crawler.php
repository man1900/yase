<?
 require_once("app/template.php"); 
 require_once("app/login.php"); //this page requires a login 
 require_once("app/views/grid.php");

 head("Yet another search engine");
 leftbar();
 ?>

 <H1>Crawler filter</H1>
 
 <br><br>
 
 Edit this list with regular expressions that identifies
 pages to be skipped.

 <br><br>

 <div id="setting">
  <div id="crawler"></div>
 </div>

<?php
 grid("crawlerfilter", "crawler", "{}");
 ?>

<?php
 bottom();
?>
