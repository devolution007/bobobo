<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>  <div class="d-none d-lg-block">   <? if ($member_active == 'Active') { ?>   <? } else { ?>      <? if ($layout['is_terms']) { ?>
            <a href="<?=process_link('content_pages', array('page' => 'terms'));?>"><?=MSG_BTN_TERMS;?></a>
            <? } ?>
            <? if ($layout['is_pp']) { ?> 
            and <a href="<?=process_link('content_pages', array('page' => 'privacy'));?>"><?=MSG_BTN_PRIVACY;?></a>
            <? } ?>  
<br />

   <hr class="my-4">
  <div class="row">
    <div class="col-sm-6">  <a class="list-group-item   list-group  bg-dark text-white " href="index_users.php"> <i class="fas fa-desktop"></i>&nbsp;<i class="fas fa-plug"></i> &nbsp;<i class="fas fa-memory"></i>&nbsp;<i class="fas fa-keyboard"></i>&nbsp;<i class="fas fa-sd-card"></i>
 

 10  HARD  </a>
     
  <?
include_once ('includes/global.php');
$howmany = 10;
echo " <ul  class='list-group'> ";
				
 



$newuserquery = "SELECT name, nb_clicks, reverse_id from probid_reverse_auctions order by nb_clicks desc limit 0, $howmany";
$result = mysql_query($newuserquery) or die(mysql_error());
while($row=mysql_fetch_row($result)) {
$newusername = $row[0];
$newusercity = $row[1];
$newuserauctionid = $row[2];
$newuserlink = $path . "$newusername,name, ". $newuserauctionid .",reverse_id,reverse_details";

echo " <li class='list-group-item d-flex justify-content-between align-items-center'><a href=' " . $newuserlink . " '>" . $newusername . " </a>";
 echo "  <span class='lbadge badge-dark badge-pill'>" . $newusercity . "</span>   ";
echo "</li>";
}
echo " </ul >";
?>
    </div>
    <div class="col-sm-6">
    <a class="list-group-item list-group  bg-dark text-white" href="wanted_ads.php">      <i class="fab fa-windows"></i> 
	  
	&nbsp;<i class="fab fa-android"></i> &nbsp; <i class="fab fa-linux"></i>&nbsp; <i class="fab fa-apple"></i>&nbsp;
 

10 SOFT   
	  
	 </a>
  <?
include_once ('includes/global.php');
$howmany = 10;
echo " <ul  class='list-group'> ";
				
 



$newuserquery = "SELECT name, nb_clicks, wanted_ad_id from probid_wanted_ads order by nb_clicks desc limit 0, $howmany";
$result = mysql_query($newuserquery) or die(mysql_error());
while($row=mysql_fetch_row($result)) {
$newusername = $row[0];
$newusercity = $row[1];
$newuserauctionid = $row[2];
$newuserlink = $path . "$newusername,name, ". $newuserauctionid .",wanted_ad_id,wanted_details";

echo " <li class='list-group-item d-flex justify-content-between align-items-center'><a href=' " . $newuserlink . " '>" . $newusername . " </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $newusercity . "</span>   ";
echo "</li>";
}
echo " </ul >";
?>
    </div>

	 
	
	
  </div>









<br />














<? if (eregi("wanted_details.php",$_SERVER['PHP_SELF'])) { ?>    <? } ?>            
   
 <hr class="my-4">
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <h2><i class="fas fa-map-marked-alt"></i>
NSQ RU</h2>
     <div class="bd-example">
  <address>
 
    191024 СПб, Россия<br>
    Невский пр, 134  16Н<br>
    <abbr title="Phone"><i class="fa fa-phone" aria-hidden="true"></i>
:</abbr> (812) 694-9092<br>
  <abbr title="Phone"><i class="fa fa-phone" aria-hidden="true"></i>
:</abbr> +7 (996) 78-45-747
</address>
 <address> 
<strong>
  <h5> <a href="https://twitter.com/wwwnsqru"> <i class="icon-twitter-sign"></i> </i> 
</a></h5></strong>
  </address>
</div>
    </div>
    <div class="col-sm-3">
      <h2><i class="fas fa-laptop"></i> Железо</h2>
      <p>Серверы. Компьютеры и станции;
ноутбуки ; планшеты и 
пром компьютеры; моноблоки ;
ACDC устройства; Авто оборудование. Диагностика</p>


  
 
  <h5> <a href="https://www.reddit.com/user/nsqru"><i class="fab fa-reddit"></i> reddit NSQRU
</a></h5>   
  
  
  
  
    </div>
    <div class="col-sm-3">
      <h2><i class="icon-github-sign"></i> Сеть </h2>        
      <p>Программы .Cерверы и хранения данных; Сайты и интернет сеть. Проблемы и  их решения
; PHP CSS SQL HTML Bootstrap IT </p>
	  
	 <h5> <a href=" https://github.com/NSQRU"> <i class="icon-github-sign">  </i>Githud NSQ.RU
</a></h5>
	  
    </div>
	  <div class="col-sm-3">
      <h2> <i class="fas fa-file-code"></i>
Системы</h2>        
      <p>Помощь в настройке операционных систем Linux  Windows Apple Android BSD в сфере промышленого обеспечения  ;</p>
    
  
	 

 
    <h5> <a href="https://codepen.io/nsqru/"><i class="fab fa-codepen"></i> codepen NSQ
</a></h5>   
    </div>
	
	
  </div>
</div>
 
 
 
 
 
 
 
 </div>
 
 
 
 
 
  <hr class="my-4">

<br /> 



<nav class="navbar fixed-bottom navbar-dark bg-dark "><?=GMSG_PAGE_LOADED_IN;?> <?=$time_passed;?> <?=GMSG_SECONDS;?>
  <a class="navbar-brand" href="https://twitter.com/wwwnsqru"> <i class="icon-twitter-sign"></i> </i> <i class="icon-map-marker"></i> 
 
м.  Восстания, Невский 134 офис 16Н <!-- Rating@Mail.ru logo -->
<a href="https://top.mail.ru/jump?from=607902">
<img src="https://top-fwz1.mail.ru/counter?id=607902;t=318;l=1" style="border:0;" height="15" width="88" alt="Top.Mail.Ru" /></a>
<!-- //Rating@Mail.ru logo -->
</a>
  
 
 
  
  
  
  
</nav>
 


 
<div align="center" style="padding: 5px;" >
  		<div align="center"><a href="<?=$index_link;?>">
        <?=MSG_BTN_HOME;?>
        </a>
				
          <? if (!$setts['enable_private_site'] || $is_seller) { ?>
				| <a href="<?=$place_ad_link;?>">
                <?=$place_ad_btn_msg;?>
                </a>
				
          <? } ?>
				| <a href="<?=$register_link;?>">
                <?=$register_btn_msg;?>
                </a>
				| <a href="<?=$login_link;?>">
                <?=$login_btn_msg;?>
                </a>
				| <a href="<?=process_link('content_pages', array('page' => 'help'));?>">
                <?=MSG_BTN_HELP;?>
                </a>
				| <a href="<?=process_link('content_pages', array('page' => 'faq'));?>">
                <?=MSG_BTN_FAQ;?>
                </a>
			|<a href="<?=process_link('site_fees');?>">Доски </a>
          <? if ($layout['is_about']) { ?>
| <a href="<?=process_link('content_pages', array('page' => 'about_us'));?>">
 о проекте
</a>
<? } ?>  
    | <a href="<?=process_link('site_fees');?>"> 
 Профиль NSQ
    </a> 
 
    <? if ($layout['is_contact']) { ?>
| <a href="<?=process_link('content_pages', array('page' => 'contact_us'));?>">
<?=MSG_BTN_CONTACT_US;?>
</a>
<? } ?>



        </div>
 <br />

   <hr class="my-8"> 
 
 <? } ?>
 
  </body>
</html>