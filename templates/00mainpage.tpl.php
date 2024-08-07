<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?><span class="col-lg-12  d-none d-lg-block"> <br /> <br /><br /></span>  
 

 <div class="d-lg-none "><br />  <br /> 
  <div align="center"> 
 <div class="d-inline p-3  bg-primary text-white"><a class="text-white" href="sell_item.php">Продать</a></div> 
 <div class="d-inline p-3  bg-primary text-white"><a class="text-white" href="wanted_ads.php">Купить</a></div>
 <div class="d-inline p-3  bg-primary text-white"><a class="text-white" href="reverse_auctions.php">Ремонт</a></div>
 <div class="d-inline p-3  bg-primary text-white"><a class="text-white" href="login.php">Вход</a></div>
  </div> <br />
<hr class="my-2"> </div>
 
 
 
 
 
 




<? if ($member_active == 'Active') { ?>   
<hr class="my-2">
<?=$menu_box_content;?><? } else { ?>
 
 
<div class="row"> 
      <div class="col-lg-10"> <div  class=""> <h2 class="display-4 d-none d-lg-block">Объявления. Продажи электроники </h2>
 <footer class="blockquote-footer">Продажа  Apple - напиши здесь что надо и найдется покупатель. Частные продажи электроники  марки Apple .   </footer></div> </div>  
 
 <a class="text-white" href="sell_item.php">   <div class="col-lg-2" >   <i class="fas  fa-paperclip " style="font-size:78px;color:#007BFF;"></i> </div> </a> </div>

<hr class="my-4"> 
 

 
 <table width="99%" class="table "  >
  
 <?=$subcategories_content;?>
    
</table>
 
   <hr class="my-2"> 
	
	

 

  
    <div class="row">
<? if ($layout['nb_recent_auct']) { ?>
      
    <br>

       
			<? 
			$columns = 1;
			$nb_recent = $db->num_rows($sql_select_recent_items);
			for($i = 0; $i < $nb_recent; $i++)
			{
				$item_details = mysql_fetch_array($sql_select_recent_items);
				$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE auction_id='" . $item_details['auction_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');
				$background = ($item_details['bold']) ? ' bold_item' : '';
				$background .= ($item_details['hl']) ? ' hl_item1' : '';

				if($i % $columns == 0) { ?>  
         
				<? } ?>

             <div class="col-lg-4 filter ">
           <br /> <div class="each-item">
		   

		   
		   
		     <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">
  <a class="text-white" href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>">  <?= $item_details['name'] ;?> 
  </a>  <span class="badge  badge-dark badge-pill" style="font-size:28px;color:#ffffff;" >    <?	if( $item_details['buyout_price']   <= 0 ) { echo "<i class='fas fa-hand-holding-heart' aria-hidden='true'></i>"; } ?>
  <?	if(CURRENT_TIME - $item_details['start_time'] >= 86400) { echo " <i class='fa   fa-folder-open ' aria-hidden='true'></i>"; } ?>
  
  <?	if(CURRENT_TIME - $item_details['start_time'] <= 86400) { echo "<i class='fa fa-folder ' aria-hidden='true'></i>"; } ?> </span>
  </li>
	 
          
             <div align="center" class="bg-dark text-white"> 
                   <a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"><img class=" grey corners4" src="<? echo ((!empty($main_image)) ? 'thumbnail.php?pic=' . $main_image . '&w=' . 300 . '&sq=Y' : 'themes/' . $setts['default_theme'] . '/noimg.png');?>" border="0" width="400" alt="<?=title_resize($item_details['name']);?>"></a>    </div> 
                         
                          
                           <div class="cap1"> <h6>  <a class="list-group-item  list-group  bg-dark text-white" href="about_me.php?user_id= <?=$item_details['owner_id'];?>"> 
			<i class="fas fa-lg fa-map-marker-alt" style="font-size:20px;color:#007BFF;"></i>			   
						   
	   
						   
						   
						   
						   
						   
						   
						    <?= $item_details['hl'] ;?> </br> <i class=" icon-user"></i>&nbsp; Aвтор<?=$item_details['seller_name'];?>&nbsp;<i class="icon-envelope-sign"></i>&nbsp;&nbsp;<i class="icon-phone-sign"></i>&nbsp; &nbsp; <i class="icon-twitter-sign"></i>&nbsp;  <i class="icon-facebook-sign"></i>&nbsp;&nbsp;<i class=" icon-map-marker"></i>&nbsp;
<i class="icon-youtube"></i>
 </a> 
	   
						   </h6>
  <p>  <a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"> <i class="fa fa-calendar" aria-hidden="true"></i> 
   <?=show_date($item_details['start_time']);?> 
                         
 <?=item_pics($item_details);?>

                          <br />
							<i class="fa fa-shopping-bag" aria-hidden="true"></i>
  <?=$item_details['zip_code'];?>
                          
                           </a> </p>
             </div>
                <div class="cap2">
                    <p class="text-center"><a class="btn btn-dark" href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>" ><i class="fa fa-flag" aria-hidden="true"></i>
  <?=$item_details['bold'];?></a><br />
 
</p>
                </div>
                  
            </div>
			
			  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
			
			
			
			
			
			
			
			 <a class="text-white"  href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>">	<i class="fas fa-lg  fa-thumbtack " style="font-size:20px;color:#007BFF;"></i> цена	 </a>  <span class="lbadge badge-primary badge-pill"> 
			 
	 <a class="text-white"  href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>">		 <?=$fees->display_amount($item_details['buyout_price'], $item_details['currency']);?> </a>
			 
			 </span>
			 
			 </li>
                   
      </div> 
				<? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_recent) { ?>
          
            <? } ?>
            <? } ?><? } ?>	   </div>
 


 
 

<hr class="my-4">	
 
              





















 



 
 
 
<div class="row"> 
      <div class="col-lg-10"> <div  class=""> <h2 class="display-4 d-none d-lg-block">Скупка компьютеров и запчастей  </h2>
 <footer class="blockquote-footer"> Нужен  Apple - напиши здесь что надо и найдется продавец.Часто владельцы компьютеров не подают объявления продаж, а с удовольствием читают объявления о скупке. Так удобнее   ознакамливаться с  тематикой продажи  </footer></div> </div>  
 
   <div class="col-lg-2" >  
  <h2 class="display-6 d-none d-lg-block"> 
   
   <span class="fa-stack fa-2x">
  <i class="fas fa-ruble-sign fa-stack-1x"></i>
  <i class="fas    fa-tablet-alt  fa-stack-2x" style="color:#007BFF;"></i>
</span>
   </h2>
   
   
   
   
   
  </div> </div>

<hr class="my-2"> 
 

 
 

 <div class="" >
     <div class="row">
<? if ($setts['enable_wanted_ads'] && $layout['nb_want_ads']) { ?>
      
    <br>

       
				<? 
		   $columns = 1;
		   $nb_wanted = $db->num_rows($sql_select_recent_wa);
		   
			for($i = 0; $i < $nb_wanted; $i++) 
			{
				$item_details = mysql_fetch_array($sql_select_recent_wa);
				$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE wanted_ad_id='" . $item_details['wanted_ad_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');
				
				if($i % $columns == 0) { ?>
         
				<? } ?>

             <div class="col-lg-4 filter  <?=$item_details['zip_code'];?>" >
           <br /> <div class="each-item">
  		     <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white"><?	if(CURRENT_TIME - $item_details['start_time'] <= 86400)  { echo " <i class='fas  fas  fa-tag ' style='font-size:22px;color:#ffffff;'></i>"; } ?>  <?	if(CURRENT_TIME - $item_details['start_time'] >= 86400) { echo " <i class='fas  fas  fa-tag ' style='font-size:22px;color:#ffcc00;'></i>"; } ?>
  <a class="text-white" href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>">  <?= $item_details['name'] ;?> 
  </a>  <span class="badge  badge-dark badge-pill" style="font-size:28px;color:#ffffff;" > 
   <?	if( $item_details['country']   == MSG_AAA_BOOK ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_MAC ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>

 <?	if( $item_details['country']   == MSG_AAA_NEW ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_BU ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_AAA_SLOMAN ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_A_REF ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_A_OPEN ) { echo " <i class='fas   fa-box-open  ' style='font-size:33px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_A_SLR ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>
<?	if( $item_details['country']   == MSG_AAA_NK ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_AAA_KOROBKA ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_ZAKAZ ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:33px;color:#007BFF;'></i>"; } ?>

<?	if( $item_details['country']   == MSG_AAA_FORREM ) { echo " <i class='fas   fa-drafting-compass ' style='font-size:33px;color:#007BFF;'></i>"; } ?>
  
  
  
  
  
  
  
  
  
  
   <?	if( $item_details['country']   == MSG_AAA_BOOK ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:32px;color:#ffffff;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_MAC ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:32px;color:#ffffff;'></i>"; } ?>

<?	if( $item_details['country']   == MSG_AAA_PAD ) { echo " <i class='fas  fa-tablet-alt ' style='font-size:32px;color:#ffffff;'></i>"; } ?>



</span>
  </li>
                         

             <div align="center" class="bg-dark text-white">
			 
			
			 
 

	<br />
<br /><div class=" grey corners3">
  
 
 <?	if( $item_details['country']   == MSG_AAA_BOOK ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_MAC ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>

 <?	if( $item_details['country']   == MSG_AAA_NEW ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_BU ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_AAA_SLOMAN ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_A_REF ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_A_OPEN ) { echo " <i class='fas   fa-box-open  ' style='font-size:99px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_A_SLR ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>
<?	if( $item_details['country']   == MSG_AAA_NK ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>
 <?	if( $item_details['country']   == MSG_AAA_KOROBKA ) { echo " <i class='fas  fas  fa-laptop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>		 
<?	if( $item_details['country']   == MSG_AAA_ZAKAZ ) { echo " <i class='fas  fas  fa-desktop ' style='font-size:99px;color:#007BFF;'></i>"; } ?>

<?	if( $item_details['country']   == MSG_AAA_FORREM ) { echo " <i class='fas   fa-drafting-compass ' style='font-size:99px;color:#007BFF;'></i>"; } ?>

























  </div>
  

<br />
			 
  </div> 
                         
                          
                           <div class="cap1"> <h6>  <a class="list-group-item  list-group  bg-dark text-white" href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>"> <?=$item_details['state'];?> </a></h6>
                  
                    <p>  <a href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>"> <i class="fa fa-calendar" aria-hidden="true"></i> 
   <?=show_date($item_details['start_time']);?> <br /><a class="myButton" href="about_me.php?user_id= <?=$item_details['owner_id'];?>"> <i class=" icon-user"></i>&nbsp; Aвтор<?=$item_details['seller_name'];?>&nbsp;<i class="icon-envelope-sign"></i>&nbsp;&nbsp;<i class="icon-phone-sign"></i>&nbsp; &nbsp; <i class="icon-twitter-sign"></i>&nbsp;  <i class="icon-facebook-sign"></i>&nbsp;&nbsp;<i class=" icon-map-marker"></i>&nbsp;
<i class="icon-youtube"></i>
 </a>
                         
 <?=item_pics($item_details);?>

                          <br />
						
                          
                        </p>
             </div>
                <div class="cap2">
                    <p class="text-center"><a class="btn btn-dark" href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>"><i class="fa fa-flag" aria-hidden="true"></i>
 <?=$item_details['country'];?></a></p>
                </div>
                 
            </div> <a class="list-group-item list-group-item-action p-3 mb-2 bg-dark text-white" href="<?=process_link('wanted_details', array('name' => $item_details['name'], 'wanted_ad_id' => $item_details['wanted_ad_id']));?>">
	 
 <?	if($item_details['start_time'] <= 86400) { echo "today"; } ?> 
			Бюджет покупки   <?=$item_details['zip_code'];?>    <i class="fa fa-ruble-sign" aria-hidden="true"></i> </a>
                   
      </div> 
				<? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_wanted) { ?>
          
            <? } ?>
            <? } ?><? } ?>	   </div>
 


</div> 

 
 
 
 

 
 
 
 
 
 
 
 

 

 
 
 <hr class="my-4">

 

 
	
	
	
 <div class="row"> 
      <div class="col-lg-10">   <h2 class="display-4 d-none d-lg-block">Продажа запчастей с установкой  </h2>
 <footer class="blockquote-footer d-none d-lg-block">Установка комплектующих или ремонт электроники Apple. Предлагайте свой сервис и варианту продажи запчастей с установкой в вашем сервисе.  </footer></div>  
 
   <div class="col-lg-2   d-none d-lg-block" >  
   
   <span class="fa-stack fa-4x">
<i class="fas   fa-file     fa-stack-2x"  style=" color:#007BFF;"></i>
<i class="fas    fa-tools   fa-stack-1x" style="color:#ffffff;"></i>
</span>
   
   
   
   
   
   
   
   
   
   </div> </div>

 

<hr class="my-2">  
      
     






 
 

  <div class="row">
        
			<? 
		   $columns = 1;
		   $nb_reverse = $db->num_rows($sql_select_recent_reverse);
		   
			for($i = 0; $i < $nb_reverse; $i++) 
			{
				$item_details = mysql_fetch_array($sql_select_recent_reverse);
				
				if($i % $columns == 0) { ?>
     
				<? } ?>
				
			          <div class="col-lg-4 filter  <?=$item_details['zip_code'];?>" <?	if(CURRENT_TIME - $item_details['start_time'] <= 86400) { echo "today"; } ?>>
           <br /> <div class="each-item">
  		     <li class="list-group-item d-flex justify-content-between align-items-center bg-primary text-white">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>">  <?= $item_details['name'] ;?> 
  </a>  <span class="badge  badge-dark badge-pill" style="font-size:28px;color:#ffffff;" >  <i class="fas   fa-drafting-compass " style="font-size:31px;color:#007BFF;"></i>
</span>
  </li>	     <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>"> &nbsp; <?=$item_details['bold'];?> </a> 
    <span class="lbadge badge-light badge-pill">&nbsp;<i class="fas  fa-recycle "></i>&nbsp;  </span>
  </li>
				     <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>">
 

 <?=$item_details['budget_id'];?> </a>   <span class="lbadge badge-warning badge-pill"><i class="fas   fa-exclamation-triangle "></i></span>
  
  </li>
  
 
       <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>"><?=$item_details['currency'];?> </a> 
    <span class="lbadge badge-danger badge-pill"> <?=$item_details['hidden_bidding'];?> <i class="fas fa-ruble-sign"></i>  </span>
  </li>
  
    <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>"><?=$item_details['hl'];?> </a> <span class="lbadge badge-light badge-pill"> <i class="fas  fa-user-cog "></i>  </span>
    
  </li>
  
 
        <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="<?=process_link('reverse_details', array('name' => $item_details['name'], 'reverse_id' => $item_details['reverse_id']));?>">

  
 <?=$item_details['hpfeat'];?> </a> 
    <span class="lbadge badge-light badge-pill "> <i class="fas  fa-map-marked  "></i>  </span>
  </li>
  
  
  
  
                  
                  </div>
				<? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_reverse) { ?>
            </div>
            <? } ?>
            <? } ?>
 
 
 </div>
 
 <br />
<br />
 
 
 
 
 <hr class="my-4">
 
 <br />
<br />
<br />

 
 
<div class="row">
<div class="col-sm-4  d-none d-lg-block  "> 

 <li class="list-group-item d-flex justify-content-between align-items-center bg-primary">
   <a class="  text-white" href="index_users.php"><i class="icon-sitemap"></i>  &nbsp; <i class="icon-cog "></i> <?=$current_date;?> </a>
  </li>	 
	  
 
 
 



  <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a  class="text-white" href="<?=process_link('wanted_ads');?>"><i class="fas fa-laptop"></i> &nbsp;Заявок на покупку</a> 
    <span class="lbadge badge-primary badge-pill"> <i class="icon-cogs"></i>&nbsp; &nbsp;<?=$nb_live_wanted_ads;?></span>
  </li>
     <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="stores.php"><i class="fas fa-satellite-dish"></i>&nbsp;Складов</a> 
    <span class="lbadge badge-primary badge-pill"><i class="fas fa-box"></i>&nbsp;&nbsp;<?=$nb_live_stores;?> </span>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="faq,page,content_pages"><i class="fas fa-satellite-dish"></i>&nbsp; Объявлений о продаже</a> 
    <span class="lbadge badge-primary badge-pill"><i class="fas fa-plug"></i>&nbsp;&nbsp;<?=$nb_live_auctions;?> </span>
  </li>
  
  
    <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
  <a class="text-white" href="faq,page,content_pages"><i class="fas fa-satellite-dish"></i>&nbsp; Сервис. Ремонт. Услуги</a> 
    <span class="lbadge badge-primary badge-pill"><i class="fas fa-plug"></i> <?=$nb_live_reverse_auctions;?> </span>
  </li>
  


</div><div class="col-sm-4  d-none d-lg-block  "> <div class="" >


<a class="list-group-item   list-group  bg-dark text-white " href="index_users.php"> <i class="fas fa-desktop"></i>&nbsp;<i class="fas fa-plug"></i> &nbsp;<i class="fas fa-memory"></i>&nbsp;<i class="fas fa-keyboard"></i>&nbsp;<i class="fas fa-sd-card"></i>
 

 5  HARD  </a>
     
  <?
include_once ('includes/global.php');
$howmany = 5;
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




	</div></div>
 
<div class="col-sm-4  d-none d-lg-block  "  > 
 <li class="list-group-item d-flex justify-content-between align-items-center bg-primary ">
 <a   class="text-white"  href="register.php"><i class="fas fa-handshake"></i>&nbsp; Регистрация на сайте </a> 
    <span class="badge badge-primary badge-pill"> &nbsp;+&nbsp;<i class="icon-group"></i>&nbsp; </span>
  </li>

<?
include_once ('includes/global.php');
$howmany = 2;
echo " <ul  class='list-group'> ";

   $newuserquery = "SELECT user_id, username, city, DATE_FORMAT(from_unixtime(reg_date), GET_FORMAT(DATE,'EUR')) from probid_users order by user_id desc limit 0, $howmany";

   $result = mysql_query($newuserquery) or die(mysql_error());
   while($row=mysql_fetch_row($result)) {
  $newuserid   = $row[0];
  $newusername = $row[1];
  $newusercity = $row[2];
  $newuserregdt = $row[3];

  $newuserlink = $path . "about_me.php?user_id=" . $newuserid;

echo " <li class='list-group-item d-flex justify-content-between align-items-center  bg-dark text-white'><i class='fas  fas  fa-user'></i><a href=' " . $newuserlink . " '>" . $newusername . " </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $newuserregdt . "</span>   ";
echo "</li>";
}   
echo " <li class='list-group-item d-flex justify-content-between align-items-center  bg-dark text-white'><a class='text-white' href='index_users.php'><i class='fas  fas  fa-users'></i> На сайте </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $nb_site_users . "</span>   ";
echo "</li>";

echo " <li class='list-group-item d-flex justify-content-between align-items-center  bg-dark text-white'><a class='text-white' href='1.php'><i class='fas  fas  fa-donate'></i>



Сейчас </a>";
 echo "  <span class='lbadge badge-primary badge-pill'>" . $nb_online_users . "</span>   ";
echo "</li>";



echo " </ul >";
?>

 

	
	
	 
 	<? } ?>
	
	
 



