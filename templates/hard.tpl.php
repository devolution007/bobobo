<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
 
<br /><?=$banner_position[5];?>   <h1 class="display-4">NSQ.RU!</h1>
  <p class="lead">Сервисный центр ноутбуков.</p>
  <div align="center"><img  class="img-fluid" src="themes/<?=$setts['default_theme'];?>/ww11.png">
  </div>

  
  <hr class="my-4">

 


<p>Большинство пользователей не знают, с чего начать знакомство с новой операционной системой и как её настроить под себя. <br />
Для того чтобы настроить Apple-телефон или планшет под себя, новичок должен разобраться в основных настройках системы, а также ознакомиться с её функциями и разделами.
 <!-- rev --> <table width="99%" class="table table-sm">
  

       <?=$subcategories_content;?>
    
</table> <!-- rev2 -->
 
 

  
  
  
  
    <hr class="my-4">
  
<div class="row"> <div class="col-sm-8"> <? if ($setts['enable_reverse_auctions'] && $layout['r_recent_nb']) { ?>   <div class="row"> <?=$browse_reverse_content;?>  </div>      
               <div align="right" style="padding: 5px;" class="conte"><a href="<?=process_link('reverse_auctions');?>">
              Разное из  мира ИТ  </a> </div>   

                <? if ($nb_items>0) { ?>
              
                <? } ?> <? } ?> </div>


 <div class="col-sm-4"> <h2> <i class="icon-cog "></i> NSQ  <?=$current_date;?> </h2>        
    
      <p>  <?
include_once ('includes/global.php');
$howmany = 25;
echo " <ul  class='list-group'> ";
				
 



$newuserquery = "SELECT name, nb_clicks, reverse_id from probid_reverse_auctions order by nb_clicks desc limit 0, $howmany";
$result = mysql_query($newuserquery) or die(mysql_error());
while($row=mysql_fetch_row($result)) {
$newusername = $row[0];
$newusercity = $row[1];
$newuserauctionid = $row[2];
$newuserlink = $path . "$newusername,name, ". $newuserauctionid .",reverse_id,reverse_details";

echo " <li class='list-group-item d-flex justify-content-between align-items-center'><a href=' " . $newuserlink . " '>" . $newusername . " </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $newusercity . "</span>   ";
echo "</li>";
}
echo " </ul >";
?>
</p></div>









</div>












<?
   include_once ('includes/global.php');
   $howmany = 3;
   echo " <li>";
//   echo "<tr> ";

//   echo "</tr> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "profile.php?user_id=" . $newuserid;

//  echo "<tr> ";
  echo " <a href=' " . $newuserlink . " '>" . $newusername . " " . $newuserregdt . "<br></a>";
 
//  echo "</tr>";
  }
   echo "</li>";
?>8888888888888888

<?
   include_once ('includes/global.php');
   $howmany = 3;
   echo " <li>";
//   echo "<tr> ";

//   echo "</tr> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "profile.php?user_id=" . $newuserid;

//  echo "<tr> ";
  echo " <a href=' " . $newuserlink . " '>" . $newusername . " " . $newuserregdt . "<br></a>";
 
//  echo "</tr>";
  }
   echo "</li>";
?>



<?
   include_once ('includes/global.php');
   $howmany = 3;
  echo " <table width='100%' border='0' cellpadding='1' cellspacing='3' >";
echo "<tr class='c1' >";
echo "<td width='99%'  ><b></b></td>";
echo "<td width='1%' ><b></b></td>";
echo "</tr> "; 
   

   $newtsquery = "SELECT topic_id, message_content,  message_content from probid_messaging order by message_content desc limit 0, $howmany";

   $result = mysql_query($newtsquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
      $tsuserid   = $row[0];
      $tsusername = $row[1];
      $tsitems = $row[2];

     $newuserlink = $path . "wanted_details.php?name=$newusername&wanted_ad_id=" . $newusertopicid;

      echo "<tr> ";

 echo "<td ><a href=' " . $tsnewuserlink . " '>" . $tsusername . "</a></td>";
      echo "</tr>";
      }
   echo "</table>";
?>






88888888888888888
<?
   include_once ('includes/global.php');
   $howmany = 3;
  echo " <table width='100%' border='0' cellpadding='1' cellspacing='3' >";
echo "<tr class='c1' >";
echo "<td width='99%'  ><b></b></td>";
echo "<td width='1%' ><b></b></td>";
echo "</tr> "; 
   

   $newtsquery = "SELECT topic_id, message_content,  message_content from probid_messaging order by message_content desc limit 0, $howmany";

   $result = mysql_query($newtsquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
      $tsuserid   = $row[0];
      $tsusername = $row[1];
      $tsitems = $row[2];

     $newuserlink = $path . "wanted_details.php?name=$newusername&wanted_ad_id=" . $newusertopicid;

      echo "<tr> ";

 echo "<td ><a href=' " . $tsnewuserlink . " '>" . $tsusername . "</a></td>";
      echo "</tr>";
      }
   echo "</table>";
?>

<style type="text/css">
<!--
 .newspaper {
  -webkit-column-count: 3; /* Chrome, Safari, Opera */
  -moz-column-count: 3; /* Firefox */
  column-count: 3;
  
 text-align:center;
   
  
}

 .newspaper a{

 display: inline-block;
  padding: 4px 3px;
  margin: 0 3px 5px 0;
  
  text-decoration: none;
  color: #000;
  border: solid 1px #dfdfdf;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
    background-color: #f7f7f7;
	
  
    width: 99%;
 
	  padding: 3px;
	
	 margin-left: 11px;
   
  
}

.tags a {
  display: inline-block;
  padding: 4px 10px;
  margin: 0 3px 5px 0;
  text-decoration: none;
  color: #4c5d62;
  border: solid 1px #dfdfdf;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;

  
}
.tags a:hover {
  color: #ffffff;
  border-color: #2ab6d6;
  background-color: #2ab6d6;
}


.tags2 a {
  display: inline-block;
 
  
  text-decoration: none;
  color: #000;
  border: solid 1px #dfdfdf;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
    background-color: #f7f7f7;
	
    float: left;
    width: 23%;
 
	  padding: 11px;
	
	 margin-left: 22px;
	
}
.tags2 a:hover {
  color: #ffffff;
  border-color: #2ab6d6;
  background-color: #2ab6d6;
  
  
}




-->
</style>
 


 

 
  
<hr class="my-4">  


  <hr class="my-4">
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <br />


  
  
  
  
  <h1 class="display-4">NSQ.RU!</h1>
  <p class="lead">
Восстановление удаленных данных ...</p>
  <div align="center"><img  class="img-fluid" src="themes/<?=$setts['default_theme'];?>/ww13.png">
  </div>
  
  <hr class="my-4">

  
  <hr class="my-4">
<div class="container">
  <div class="row justify-content ">
    <div class="col-sm-4">
       <h1>  <i class="material-icons" style="font-size:50px;color:black;">developer_mode live_help comment feedback</i></h1> 



      <p>Всегда ли можно вернуть..</p>
      <p>    после очистки Корзины,
    безвозвратно стертые с жесткого диска,
    после форматирования. Случайное удаление файлов, очистка «Корзины» Windows,   удаление или создание новых разделов, вирусная атака?
</p><div class="p-2 mb-2 bg-dark text-white">  <i class="icon-upload"></i>&nbsp;! можно вернуть </div>
    </div>
    <div class="col-sm-4">


	
	
      <h1><i class="material-icons" style="font-size:50px;color:black;">usb sd_storage devices_other laptop_windows</i> </h1>
	  
  <p>Восстановление удаленных данных ...</p>
      <p> 
с карт памяти SD, MicroSD, Compact Flash, внешних и встроенных жестких дисков компьютеров, ноутбуков и USB-флеш-дисков.
 восстановления данных, утерянных после форматирования, удаления или пересоздания логических разделов.</p>
      <div class="p-2 mb-2 bg-dark text-white">  <i class="icon-upload"></i>&nbsp;Восстановление удаленных </div>
    </div>
    <div class="col-sm-4">
      <h1><i class="material-icons" style="font-size:50px;color:black;">local_movies camera_alt library_music event_note </i></h1>        
      <p>Реанимация  удаленных  ...</p>
      <p> Аудио Видео Документы с 
    Microsoft Windows: ExFAT, FAT/FAT32, NTFS.
    Apple Mac OS: HFS, HFS+, APFS.
    Linux: Ext2, Ext3, Ext4, ReiserFS, JFS, XFS, Btrfs.
    Unix, BSD, Sun Solaris: UFS/UFS2, Adaptec UFS, Open ZFS, Sun ZFS.
    Novell Netware: NWFS, NSS.</p> 
	<div class="p-2 mb-2 bg-dark text-white">  <i class="icon-upload"></i>&nbsp;Реанимация  удаленных  . </div>
	
	
  
    </div>
  </div>
 
<br /> 

 

<hr class="my-4">
  
  
   <h1 class="display-4">NSQ.RU!</h1>
  <p class="lead">
Системы хранения данных и серверы.</p>
  <div align="center"><img  class="img-fluid" src="themes/<?=$setts['default_theme'];?>/ww14.png">
  </div>
  
  <hr class="my-4">
  
  Сервер под линукс - что это зачем он нужен...

80% всех интрнет магазинов и устройств хранящих наши данные работают по управлением операционной системы Линукс. Хотите свой магазин в отнлайн - тогда надо представление иметь что такое ИТ магазин по сервером Линукс и что он умеет .
  
  Сервер под линукс - что это  зачем он нужен.
  
  
 <div class="row">
    <div class="col-sm-3">
      <h1><i class="icon-android"></i> Servers</h1>
      <p>Список обслуживаемого оборудования:</p>
      <li> 54634<i class="icon-laptop"></i>5634563456 .</li> 
 <li> 546345634563456 .</li>
  <li> 546345634563456 .</li>
    </div>
    <div class="col-sm-3">
      <h1><i class="icon-windows"></i> laptop</h1>
      <p>компьютеры и рабочие станции;
ноутбуки и нетбуки;
планшетные компьютеры;

источники бесперебойного питания;
сетевые устройства;</p>
      <p> ryrtyrtyrty..</p>
    </div>
    <div class="col-sm-3">
      <h1><i class="icon-apple"></i> PC</h1>        
      <p>серверы и системы хранения данных;
мониторы и моноблоки;</p>
      <p> dfhdfggg .</p>
    </div>
	  <div class="col-sm-3">
      <h1><i class="icon-linux"></i>


linux</h1>        
     <p>Сервер под линукс - что это  зачем он нужен...</p>
      <p>80% всех интрнет магазинов и устройств хранящих наши данные работают по управлением операционной системы Линукс. Как настроить Линукс  и что он умеет  .</p>
    </div>
	
	
  </div>
</div>
<br /> 

 
<p>Большинство пользователей не знают, с чего начать знакомство с новой операционной системой и как её настроить под себя. <br />
Для того чтобы настроить Apple-телефон или планшет под себя, новичок должен разобраться в основных настройках системы, а также ознакомиться с её функциями и разделами.
  
  
  
<hr class="my-4">


 

<p>Большинство пользователей не знают, с чего начать знакомство с новой операционной системой и как её настроить под себя. <br />
Для того чтобы настроить Apple-телефон или планшет под себя, новичок должен разобраться в основных настройках системы, а также ознакомиться с её функциями и разделами.
 
<br /><i class="icon-map-marker"></i> 
 
м.  Восстания, Невский 134 офис 16Н

 <br />

<hr class="my-4">











0000000000000000000000000000000000000000000000000000

  <h1 class="display-4">NSQ.RU!</h1>
  <p class="lead">
Система охлаждения компьютера.</p>
  <div align="center"><img  class="img-fluid" src="themes/<?=$setts['default_theme'];?>/ww8.png">
  </div>
  
  <hr class="my-4">
 — набор средств для отвода тепла от нагревающихся в процессе работы компьютерных компонентов. Тепло в конечном итоге может утилизироваться: ... Активное охлаждение (отвод тепла от радиатора осуществляется излучением [радиацией] тепла и принудительной конвекцией [обдув вентиляторами])
  
  <hr class="my-4">
<div class="container">
  <div class="row">
    <div class="col-sm-4">
   <h1><i class="material-icons" style="font-size:50px;color:black;"> event_note </i></h1>    
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p> 546345634563456 .</p>
    </div>
    <div class="col-sm-4">
     <h1><i class="material-icons" style="font-size:50px;color:black;">local_movies </i></h1>    
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p> ryrtyrtyrty..</p>
    </div>
    <div class="col-sm-4">
     <h1><i class="material-icons" style="font-size:50px;color:black;">camera_alt</i></h1>          
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p> dfhdfggg .</p>
    </div>
  </div>
</div>
<br /> 

 
<p>Большинство пользователей не знают, с чего начать знакомство с новой операционной системой и как её настроить под себя. <br />
Для того чтобы настроить Apple-телефон или планшет под себя, новичок должен разобраться в основных настройках системы, а также ознакомиться с её функциями и разделами.
  
  
  
<hr class="my-4">


 

<p>Большинство пользователей не знают, с чего начать знакомство с новой операционной системой и как её настроить под себя. <br />
Для того чтобы настроить Apple-телефон или планшет под себя, новичок должен разобраться в основных настройках системы, а также ознакомиться с её функциями и разделами.
 
<br /><i class="icon-map-marker"></i> 
 
м.  Восстания, Невский 134 офис 16Н

 <br />

<br />
  
 



















  <h1 class="display-4">NSQ.RU!</h1>
  <p class="lead">Восстановление утерянной информации.</p>
  <div align="center"><img  class="img-fluid" src="themes/<?=$setts['default_theme'];?>/ww12.png">
  </div>
  
  <hr class="my-4">

  
 
