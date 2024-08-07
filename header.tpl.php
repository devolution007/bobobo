<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Бесплатные объявления <?=$page_title;?> </title>
<?=$page_meta_tags;?>

<link href="themes/<?=$setts['default_theme'];?>/buttons.css" rel="stylesheet" type="text/css">
<link href="themes/<?=$setts['default_theme'];?>/tabs.css" rel="stylesheet" type="text/css">
<link href="themes/<?=$setts['default_theme'];?>/style.css" rel="stylesheet" type="text/css">
<script src="themes/<?=$setts['default_theme'];?>/SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="themes/<?=$setts['default_theme'];?>/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="themes/<?=$setts['default_theme'];?>/SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script><script src="themes/<?=$setts['default_theme'];?>/tabs.js" type="text/javascript"></script>
<link href="themes/<?=$setts['default_theme'];?>/SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script src="themes/<?=$setts['default_theme'];?>/SpryAssets/tabs.js" type="text/javascript"></script>
<style type="text/css">
<!--

body {
	background: #f7f7f7;
	margin: 11; padding: 11;
	font: normal 13px Verdana, Arial, Helvetica, sans-serif;
	line-height: 1.8em;
	min-width: 1111px;
}
img {border: none;}
a {color: #0052af;}
h1 {
	font: 3.5em normal Georgia, 'Times New Roman', Times, serif;
	padding: 20px;
	margin: 0;
}
h1 small{
	font: 0.3em normal Verdana, Arial, Helvetica, sans-serif;
	text-transform:uppercase;
	display: block;
}
.container {width: 900px; margin: 0 auto; font-size: 1.2em;  color: #555;}
#content {	background: #f0f0f0; float: left; width: 100%;}
.post {
	margin: 0; padding: 10px 20px;
	float: left;
	width: 560px;
}





/*------------------POPUPS------------------------*/
#fade {
	display: none;
	background: #000; 
	position: fixed; left: 0; top: 0; 
	z-index: 10;
	width: 100%; height: 100%;
	opacity: .80;
	z-index: 9999;
}
.popup_block{
	display: none;
	background: #fff;
	padding: 20px; 	
	border: 20px solid #ddd;
	float: left;
	font-size: 1.2em;
	position: fixed;
	top: 50%; left: 50%;
	z-index: 99999;
	-webkit-box-shadow: 0px 0px 20px #000;
	-moz-box-shadow: 0px 0px 20px #000;
	box-shadow: 0px 0px 20px #000;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}
img.btn_close {
	float: right; 
	margin: -55px -55px 0 0;
}
.popup p {
	padding: 5px 10px;
	margin: 5px 0;
}
/*--Making IE6 Understand Fixed Positioning--*/
*html #fade {
	position: absolute;
}
*html .popup_block {
	position: absolute;
}

-->

</style>

<style type="text/css">
<!--

.TabbedPanelsTab {



  font: normal 14px "arial,ProximaNovaRegular;
	font-family:ProximaNovaRegular, Helvetica, sans-serif;
 
	color: #333333;
	padding: 10px 17px;
	background: -moz-linear-gradient(
		top,
		#ffffff 5%,
		#f2f2f2);
	background: -webkit-gradient(
		linear, left top, left bottom,
		from(#ffffff),
		to(#f2f2f2));
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 4px;
	border: 1px solid #d2d2d2;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	text-shadow:
		1px 0px 0px rgba(000,000,000,0),
		1px 0px 0px rgba(255,255,255,0);
		  width: 20%; 
	
		 word-spacing: -0.1ex;	  
    cursor: pointer;	














}

.TabbedPanelsTabSelected {


font: normal 14px "ProximaNovaRegular;
	font-family: ProximaNovaRegular;
 
	color: #ffffff;
	padding: 10px 17px;
	background: -moz-linear-gradient(
		top,
		#ff0000 5%,
		#ff0000);
	background: -webkit-gradient(
		linear, left top, left bottom,
		from(#ff0000),
		to(#ff0000));
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 4px;
	border: 1px solid #000000;
	-moz-box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	-webkit-box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	box-shadow:
		0px 1px 3px rgba(000,000,000,0),
		inset 0px 0px 2px rgba(255,255,255,1);
	text-shadow:
		0px 0px 0px rgba(000,000,000,0),
		0px 0px 0px rgba(255,255,255,0);
		  width: 20%; 
	
		 word-spacing: -0.1ex;	  
    cursor: pointer;		
 
 
}

.placebid {
	font-size: 18px;
	font-weight: normal;
	height: 38px;
}
.lb {

}
.lb a {
	color: #ffffff;
	text-decoration: none;
}
.lb a:hover {
	color: #ffffff;
	text-decoration: none;
}
.db {
	font-size: 11px;
	font-weight: normal;


}
.db a {
	color: #ffffff;
	text-decoration: none;
}
.db a:hover {
	color: #ffffff;
	text-decoration: none;
}
.today {
background: #ffffff url(themes/<?=$setts['default_theme'];?>/img/listedtoday.gif) top right no-repeat;
}
.day {
background: #ffffff url(themes/<?=$setts['default_theme'];?>/img/day.gif) bottom left no-repeat;
}
.hour {
background: #ffffff url(themes/<?=$setts['default_theme'];?>/img/hour.gif) bottom left no-repeat;
}
.hl_item1 {
	border: 2px solid #ffa500;
}
-->
</style>

</head>
<body ><div class="main">



 <? if ($member_active == 'Active') { ?>
<? } else { ?>  







<div align="center">
  <table width="99%" border="0" cellspacing="0" cellpadding="0">
    <tr>
       <td   width="4%" height="84" align="center"> 
            <div align="center"><a href="index.php"> <img src="images/probidlogo.gif" border="0"></a> 
              
            </div>
          </td>
      <td width="98%"> 
        <div align="center"></div>
      
	  
	  
	  


<br>
<? if ($member_active == 'Active') { ?>
<? } else { ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
  <tr> 
    
    <td width="100%"> 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr valign="top"> 
<td> 
   <!--3--> <div class="wite"> 



    <? if ($layout['nb_recent_auct']) { ?>
 <table width="98%" border="0" cellspacing="1" cellpadding="1" align="center">
      <? 
			$columns = 11;
			$nb_recent = $db->num_rows($sql_select_recent_items);
			for($i = 0; $i < $nb_recent; $i++)
			{
				$item_details = mysql_fetch_array($sql_select_recent_items);
				$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE auction_id='" . $item_details['auction_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');
				$background = ($item_details['normal']) ? ' normal_item' : '';
				$background .= ($item_details['hl']) ? ' hl_item1' : '';

				if($i % $columns == 0) { ?>
      <tr height="15" valign="top">
				<? } ?>
               
          
    <td width="11%"  >
    <table width="100%" border="0" cellpadding="1" cellspacing="1"<?	if(CURRENT_TIME - $item_details['start_time'] <= 86400) { echo "today"; } ?>" height="100%" >
        <tr >
                        
              <td align="center"><a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"> 
                    <img  class="avatar-frame"  src="<? echo ((!empty($main_image)) ? 'thumbnail.php?pic=' . $main_image . '&w=' . $layout['hpfeat_width'] . '&sq=Y' : 'themes/' . $setts['default_theme'] . '/img/system/noimg.gif');?>" border="0"  alt="<?=title_resize($item_details['name']);?>"> 
                    </a> <br><div> 
                           
                  
                
          <a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"> 
          <?=MSG_START_BID;?> : <?=$fees->display_amount($item_details['start_price'], $item_details['currency']);?>
              </a></div>
                           </td>
                     </tr>
                  </table>  
  </td>
				<? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_recent) { ?>
            </tr>
            <? } ?>
            <? } ?>
         </table>
         <div align="right" style="padding: 2px;" class="contentfont"><a href="<?=process_link('auctions_show', array('option' => 'recent'));?>"><?=MSG_VIEW_ALL;?></a></div>
      </div>
<? } ?> 
 </div><!--4-->
 <br><br>
 
 <div class="wite"> 
        
        <table width="100%" border="0" cellspacing="0" cellpadding="0" >
          <tr> 
              
          <td   width="4%" height="84" align="center"> 
            <div align="center"><a href="index.php"> <img src="images/probidlogo.gif" border="0"></a> 
              
            </div>
          </td>
              
            
          <td width="79%" valign="top" height="84"> 
            <table width="98%" cellspacing="1" align="center">
              <tr> 
                <td height="19" width="42%"> 
                  <div align="center"><a href="#?w=920" rel="popup1" class="poplight"  id="link"  ><button class="cupid-blue3"> 
                    почта по запросу<br>
                    <div align="center"><img src="themes/ultra2/img/mailik.png" border="0"></div>
                    </button></a> </div>
                </td>
                <td height="19" width="29%"> 
                  <div align="center"><a href="#?w=1000" rel="popup55" class="poplight"   title=" Как делать  победителем торгов?"  ><button class="cupid-blue3">Как 
                    продать?<br>
                    <div align="center"><img src="themes/ultra2/img/sale.png" border="0"></div>
                    </button></a> </div>
                </td>
                <td height="19" width="3%"> </td>
                <td height="19" width="21%"> 
                    <div align="center"><img src="themes/ultra2111/img/reg2.png" border="0"></div>
                    <?
   include_once ('includes/global.php');
   $howmany = 3;
   echo " <table width='100%' border='0' cellpadding='1' cellspacing='3'>";
   echo "<tr> ";

   echo "</tr> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "user_reputation.php?user_id=" . $newuserid;

  echo "<tr> ";
  echo "<td width='50%'  ><a href=' " . $newuserlink . " '>" . $newusername . "</a></td>";
  echo "<td width='50%'  ><i>" . $newuserregdt . "</i></td>";
  echo "</tr>";
  }
   echo "</table>";
?>
                    <br>
         
                </td>
              </tr>
            </table>
          </td>
              
            
          </tr>
      </table></div></div>
      </div>   
 
 
 
 
 
 
 
 
 
 
 
 </td>
   </tr>
 </table>
    </td>

  </tr>
</table>
<? } ?>

















































	  
	  
  
<table width="100%" border="0" cellspacing="4" cellpadding="4" >
  <tr> 
              
    
              
            
          
    <td width="79%" valign="top"> 
      <? if ($setts['enable_wanted_ads'] && $layout['nb_want_ads']) { ?>
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <? 
		   $columns = 1;
		   $nb_wanted = $db->num_rows($sql_select_recent_wa);
		   
			for($i = 0; $i < $nb_wanted; $i++) 
			{
				$item_details = mysql_fetch_array($sql_select_recent_wa);
				$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE wanted_ad_id='" . $item_details['wanted_ad_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');
				
				if($i % $columns == 0) { ?>
              <tr valign="top"> 
                <? } ?>
                <td width="33%"> 
                  <table width="100%" border="0" cellpadding="1" cellspacing="1" >
                    <tr > 
                          
                        <td width="92%"><font color="#FF0000"><b>* Требуется </b></font> 
                          <b><a href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>"> 
                          <?=title_resize($item_details['name']);?>
                          </a></b></td>
                    </tr>
                  </table>
                </td>
                <? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_wanted) { ?>
              </tr>
              <? } ?>
              <? } ?>
            </table>
                
              <div align="left"><a href="<?=process_link('wanted_ads');?>"> 
                <?=MSG_VIEW_ALL;?>
                </a> 
                <? } ?>
                </div>
          </td>
              
            
          
    <td valign="middle" align="center" width="17%"> 
      <div align="center"><img src="themes/ultra2111/img/reg2.png" border="0"></div>
                    <?
   include_once ('includes/global.php');
   $howmany = 3;
   echo " <table width='100%' border='0' cellpadding='1' cellspacing='3'>";
   echo "<tr> ";

   echo "</tr> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "user_reputation.php?user_id=" . $newuserid;

  echo "<tr> ";
  echo "<td width='50%'  ><a href=' " . $newuserlink . " '>" . $newusername . "</a></td>";
  echo "<td width='50%'  ><i>" . $newuserregdt . "</i></td>";
  echo "</tr>";
  }
   echo "</table>";
?>
 
       
        </tr>
      </table>  
  
  

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  </td>
    </tr>
  </table>
  
</div>
<div align="center"></div>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" height="27">
  <tr valign="top">
      <td colspan="2" class="footerfont"><div align="center" style="padding: 5px;">
      		<a href="<?=$index_link;?>"><?=MSG_BTN_HOME;?></a>
				<? if (!$setts['enable_private_site'] || $is_seller) { ?>
				| <a href="<?=$place_ad_link;?>"><?=$place_ad_btn_msg;?></a>
				<? } ?>
				| <a href="<?=$register_link;?>"><?=$register_btn_msg;?></a>
				| <a href="<?=$login_link;?>"><?=$login_btn_msg;?></a>
				| <a href="<?=process_link('content_pages', array('page' => 'help'));?>"><?=MSG_BTN_HELP;?></a>
				| <a href="<?=process_link('content_pages', array('page' => 'faq'));?>"><?=MSG_BTN_FAQ;?></a>

            <? if ($layout['is_about']) { ?>
            | <a href="<?=process_link('content_pages', array('page' => 'about_us'));?>"><?=MSG_BTN_ABOUT_US;?></a>
            <? } ?>
            <? if ($layout['is_contact']) { ?>
            | <a href="<?=process_link('content_pages', array('page' => 'contact_us'));?>"><?=MSG_BTN_CONTACT_US;?></a>
            <? } ?>
            <? if ($layout['is_terms']) { ?>
            | <a href="<?=process_link('content_pages', array('page' => 'terms'));?>"><?=MSG_BTN_TERMS;?></a>
            <? } ?>
            <? if ($layout['is_pp']) { ?>
            | <a href="<?=process_link('content_pages', array('page' => 'privacy'));?>"><?=MSG_BTN_PRIVACY;?></a>
            <? } ?>
            <?=$custom_pages_links;?>          <?=$member_username; ?>
			</div></td>
   </tr>
</table>


   <? } ?>  
  

<? if ($member_active == 'Active') { ?>
<b>сайт.RU</b> 
<? } ?>
<? if ($member_active == 'Active') { ?>
<?=$menu_box_content;?><table border="0" cellpadding="2" cellspacing="1" width="100%" class="contentfont"> 
<? if ($setts['enable_wanted_ads']) { ?>
<tr> </tr>
<tr> 
  <td> </td>
</tr>
<? } ?>			<? } ?>
  <table width="100%" border="0">
 <tr> 
        <td  > 
          <? if ($member_active == 'Active') { ?>
          <? echo ($setts['default_theme'] == 'ultra') ? $menu_box_content : '';?>
          <div align="center"><b>Кабинет 
            <?=$member_username; ?>
            </b> </div>
          

  
<table border="0" cellpadding="2" cellspacing="1" width="100%" >
  <? if ($setts['enable_stores'] && $is_seller) { ?>
  <? } ?>
  <? if ($setts['enable_wanted_ads']) { ?>
  <tr> 
    <td></td>
  </tr>
  <tr> 
            <td height="65"> 
              
            <table width="99%" border="0" cellspacing="2" cellpadding="2">
              <tr> 
                    
                <td width="25%"> 
                  <table border="0" cellspacing="0" cellpadding="0">
                        <tr height="38" align="center"> 
                          <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else {?>
                          <? } 
						 if (!$setts['enable_private_site'] || $is_seller)  { 
								if (eregi("sell_item.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } 
							} 
	 		if (eregi("members_area.php",$_SERVER['PHP_SELF'])||eregi("register.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } if (eregi("login.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <td ><a href="<?=$index_link;?>"> <button class="thoughtbot888"> 
                         В начало<br>
                            <?=MSG_BTN_HOME;?>
                            </button> </a></td>
                          <? }  if ($setts['enable_stores']) {
								if (eregi("stores.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } } 
							if ($setts['enable_wanted_ads']) { 
								if (eregi("wanted_ads.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? }  
							} 
							if ($_REQUEST['page']=='help') { ?>
                          <? } else { ?>
                          <? if (eregi("forum.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                          <? } 
 			if (eregi("site_fees.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                        </tr>
                      </table>
                    </td>
                    
                <td width="25%"> 
                  <table border="0" cellspacing="0" cellpadding="0">
                        <tr height="38" > 
                          <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else {?>
                          <? } 
						 if (!$setts['enable_private_site'] || $is_seller)  { 
								if (eregi("sell_item.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <td > 
                            
                        <div align="center"><a href="<?=$place_ad_link;?>"> <button class="thoughtbotgreen"> 
                          Дать объявление о продаже </button></a> </div>
                          </td>
                          <? } 
							} 
	 		if (eregi("members_area.php",$_SERVER['PHP_SELF'])||eregi("register.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } if (eregi("login.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? }  if ($setts['enable_stores']) {
								if (eregi("stores.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } } 
							if ($setts['enable_wanted_ads']) { 
								if (eregi("wanted_ads.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? }  
							} 
							if ($_REQUEST['page']=='help') { ?>
                          <? } else { ?>
                          <? if (eregi("forum.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                          <? } 
 			if (eregi("site_fees.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                        </tr>
                      </table>
                    </td>
                    
                <td width="28%"> <a href="wanted_manage.php"> <button class="thoughtbot"> 
                  Дать объявление <br>
                            о покупке</button> </a></td>
                    
  
                    
                <td width="22%"> 
                  <table border="0" cellspacing="0" cellpadding="0" width="227" align="center" >
                    <tr > 
                          <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else {?>
                          <? } 
						 if (!$setts['enable_private_site'] || $is_seller)  { 
								if (eregi("sell_item.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } 
							} 
	 		if (eregi("members_area.php",$_SERVER['PHP_SELF'])||eregi("register.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } if (eregi("login.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <td valign="top"  > 
                            
                          
                        <div align="center"><a href="<?=$login_link;?>"> <button class="orange"> 
                          Выход </button></a></div>
                          </td>
                          <? }  if ($setts['enable_stores']) {
								if (eregi("stores.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } } 
							if ($setts['enable_wanted_ads']) { 
								if (eregi("wanted_ads.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? }  
							} 
							if ($_REQUEST['page']=='help') { ?>
                          <? } else { ?>
                          <? if (eregi("forum.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                          <? } 
 			if (eregi("site_fees.php",$_SERVER['PHP_SELF'])) { ?>
                          <? } else { ?>
                          <? } ?>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
    </td>
  </tr>
  <? } ?>
</table>
      <? } else { ?>
      <br>
      <table border="0" height="51" width="1196" align="center">
        <tr height="38"> 
    <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="<?=$index_link;?>"> 
              <button class="thoughtbot888"> 
              <?=MSG_BTN_HOME;?>
              </button> </a></td>
    <? } else {?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="<?=$index_link;?>"> 
              <button class="thoughtbot"> 
              <?=MSG_BTN_HOME;?>
              </button> </a></td>
    <? } 
						 if (!$setts['enable_private_site'] || $is_seller)  { 
								if (eregi("sell_item.php",$_SERVER['PHP_SELF'])) { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="<?=$place_ad_link;?>"> 
              <button class="thoughtbot"> Продам </button> </a></td>
    <? } else { ?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="<?=$place_ad_link;?>"> 
              <button class="thoughtbot"> 
              <?=$place_ad_btn_msg;?>
              </button> </a></td>
    <? } 
							} 
	 		if (eregi("members_area.php",$_SERVER['PHP_SELF'])||eregi("register.php",$_SERVER['PHP_SELF'])) { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="<?=$register_link;?>"> 
              <button class="thoughtbot888"> 
              <?=$register_btn_msg;?>
              </button> </a> </td>
    <? } else { ?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="<?=$register_link;?>"> 
              <button class="thoughtbot"> 
              <?=$register_btn_msg;?>
              </button> </a></td>
    <? } if (eregi("login.php",$_SERVER['PHP_SELF'])) { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="#?w=800" rel="popup12" class="poplight"   title=" Вход на доску объявлений "  > 
              <button class="thoughtbot888"> Вход </button> </a></td>
    <? } else { ?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="#?w=800" rel="popup12" class="poplight"   title="Вход на доску объявлений "  > 
              <button class="thoughtbot"> Вход </button> </a></td>
    <? }  if ($setts['enable_stores']) {
								if (eregi("stores.php",$_SERVER['PHP_SELF'])) { ?>
    <? } else { ?>
    <? } } 
							if ($setts['enable_wanted_ads']) { 
								if (eregi("wanted_ads.php",$_SERVER['PHP_SELF'])) { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="<?=process_link('wanted_ads');?>"> 
              <button class="thoughtbot888"> Куплю </button> </a></td>
    <? } else { ?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="<?=process_link('wanted_ads');?>"> 
              <button class="thoughtbot"> Куплю </button> </a> </td>
    <? }  
							} 
							if ($_REQUEST['page']=='help') { ?>
              
            <td class="db mainmenu" width="17%" height="48" > <a href="<?=process_link('content_pages', array('page' => 'help'));?>"> 
              <button class="thoughtbot888"> 
              <?=MSG_BTN_HELP;?>
              </button> </a> </td>
    <? } else { ?>
              
            <td class="lb mainmenu" width="17%" height="48" > <a href="<?=process_link('content_pages', array('page' => 'help'));?>"> 
              <button class="thoughtbot"> 
              <?=MSG_BTN_HELP;?>
              </button> </a> </td>
    <? if (eregi("forum.php",$_SERVER['PHP_SELF'])) { ?>
    <? } else { ?>
    <? } ?>
    <? } 
 			if (eregi("site_fees.php",$_SERVER['PHP_SELF'])) { ?>
    <? } else { ?>
    <? } ?>
  </tr>
</table>
      <br>
      <? } ?>
  </table>
<tr> <td>
  <form name="cat_browse_form" method="get" action="categories.php"   >
    <div class="wite"> 
            
        <table width="99%" border="0" cellspacing="1" cellpadding="1" align="center" height="29">
          <tr> <td height="19" width="145"> <a href="#?w=555" rel="popup999" class="poplight"   title=" Поиск на сайте <?=$page_title;?>"  ><button class="cupid-blue3"> 
              Поиск по сайту</button></a> </td>
            
            <td width="898" align="center"> 
              <?=$categories_browse_box;?>
          
            </td>
            <td height="19" width="135"> <a href="#?w=1000" rel="popup55" class="poplight"   title=" куплю компьютер"  ><button class="cupid-blue3">Срочно 
              купят</button></a> </td>
            <td width="55"> 
              <div align="right"><a href="rss.php"><img src="themes/<?=$setts['default_theme'];?>/img/system/rss.gif" border="0" align="absmiddle" hspace="10"></a> 
              </div>
            </td>
          </tr>
        </table>
    </div>
  </form>

	  
	  

	  
	  
	  
	  
	  
	  
	  
	  
	  
</div>	  </div>
	  
	  
	  
	  
	  

<table  border="0" align="center"  cellspacing="0">
<tr>
 <td> 

<div class="main">    <table width="100%"   border="0" cellspacing="0" cellpadding="0" >
   <tr>
 
   </tr>
   <tr>

 <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr valign="top">
  <td width="100%">
