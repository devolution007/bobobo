<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<br /><?=$banner_position[5];?>   <h1 class="display-4">bobobo.ru</h1>
  <p class="lead">Доска объявлений.</p>
  <div align="center"> 
  </div>
 <hr class="my-4"> <?
include_once ('includes/global.php');
$howmany = 25;
echo " <ul  class='list-group'> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "about_me.php?user_id=" . $newuserid;

echo " <li class='list-group-item d-flex justify-content-between align-items-center'><a href=' " . $newuserlink . " '>" . $newusername . " </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $newuserregdt . "</span>   ";
echo "</li>";
}
echo " </ul >";
?>
<br />
 