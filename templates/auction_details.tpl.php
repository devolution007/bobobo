<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>

<SCRIPT LANGUAGE="JavaScript"><!--
myPopup = '';

function openPopup(url) {
	myPopup = window.open(url,'popupWindow','width=640,height=150,status=yes');
   if (!myPopup.opener) myPopup.opener = self;
}
//-->
</SCRIPT>
<SCRIPT LANGUAGE = "JavaScript">
	function converter_open(url) {
		output = window.open(url,"popDialog","height=220,width=700,toolbar=no,resizable=yes,scrollbars=yes,left=10,top=10");
	}
</SCRIPT>

<script>

$.fn.textToggle = function(cls, str) {
return this.each(function(i) {
$(this).click(function() {
var c = 0, el = $(cls).eq(i), arr = [str,el.text()];
return function() {
el.text(arr[c++ % arr.length]);
}}());
})};
$(function(){
$('.sh_nmr').textToggle(".sh_nmr","").click();
$('.sh_nmr').textToggle(".num_hide","ХХХХХХХ").click();
});

</script>

<script>
function showTooltip()
   {
           var myDiv = document.getElementById('tooltip');
           var myLink = document.getElementById('link');
  if(myDiv.style.display == 'none')
        {
           myDiv.style.display = 'block';
           myLink.style.display = 'none';
} 

else {
           myDiv.style.display = 'none';
}
return false;
}</script>


<script type="text/javascript">
  function openbox(id,tt) {
    var div = document.getElementById(id);
    var tt_div = document.getElementById(tt);
    if(div.style.display == 'block') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
  }
</script>
<style>
.container {
  position: relative;

}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<script>

$.fn.textToggle = function(cls, str) {
return this.each(function(i) {
$(this).click(function() {
var c = 0, el = $(cls).eq(i), arr = [str,el.text()];
return function() {
el.text(arr[c++ % arr.length]);
}}());
})};
$(function(){
$('.sh_nmr').textToggle(".sh_nmr","").click();
$('.sh_nmr').textToggle(".num_hide","ХХХХХХХ").click();
});

</script>

<script>
function showTooltip()
   {
           var myDiv = document.getElementById('tooltip');
           var myLink = document.getElementById('link');
  if(myDiv.style.display == 'none')
        {
           myDiv.style.display = 'block';
           myLink.style.display = 'none';
} 

else {
           myDiv.style.display = 'none';
}
return false;
}</script>


<script type="text/javascript">
  function openbox(id,tt) {
    var div = document.getElementById(id);
    var tt_div = document.getElementById(tt);
    if(div.style.display == 'block') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
  }
</script>
 
<? if ($ad_display == 'live') { ?>



<form name="hidden_form" action="auction_details.php" method="get" style="margin:0px;">
   <input type="hidden" name="option" />
   <input type="hidden" name="auction_id" />
   <input type="hidden" name="message_content" />
   <input type="hidden" name="question_id" />

   
   
</form>  


 
  






	Просмотров <?=($item_details['nb_clicks']+1); ?>  
	  
	  
	  
<a href="<?=process_link('auction_details', array('auction_id' => $item_details['auction_id']));?>">
         Обновить страницу</a>	  
	  
<hr class="my-4">
<?=$auction_friend_form;?>
<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>		






<? if ($session->value('user_id')) { ?>
<? if ($item_details['owner_id'] == $session->value('user_id')) { ?> 
<a class="list-group-item bg-dark text-white " href="#"> 
   <i class="icon-magic"></i> 
Редактор 
   </a> 
 
 <a class="list-group-item" href="<?=process_link('sell_item', array('option' => 'sell_similar', 'auction_id' => $item_details['auction_id']));?>"> 
   <i class="icon-magic"></i> 
<?=MSG_SELL_SIMILAR;?>
   </a> 
 
   <? if (!$item->under_time($item_details))	{ ?>
   <? if ($item_details['nb_bids']==0 && $item_details['active']==1)	{ ?> 
 <a class="list-group-item" href="edit_item.php?auction_id=<?=$item_details['auction_id'];?>&edit_option=new"> 
  <i class="icon-pencil"></i>  <?=MSG_EDIT_AUCTION;?>
   </a>   <? } ?>
   <? } ?>
 

 <a class="list-group-item"  href="members_area.php?do=delete_auction&auction_id=<?=$item_details['auction_id'];?>&page=selling&section=open" onClick="return confirm('<?=MSG_DELETE_CONFIRM;?>');">  <i class=" icon-remove-circle"></i> 
   <?=MSG_DELETE;?>
   </a> 
   
   <? } else if ($item_details['nb_bids']>0 && $item_details['active']==1) { ?> 

   <a class="list-group-item" href="edit_description.php?auction_id=<?=$item_details['auction_id'];?>"> 
 
 <i class="icon-twitter"></i> 

   <?=MSG_EDIT_DESCRIPTION;?>
   </a> 
      <? } ?>
   <? } ?>


   <? if ($item->can_close_manually($item_details, $session->value('user_id'))) { ?>
  
<a class="list-group-item" href="members_area.php?do=close_auction&auction_id=<?=$item_details['auction_id'];?>&page=selling&section=open" onClick="return confirm('<?=MSG_CLOSE_AUCTION_CONFIRM;?>');"> <i class=" icon-key"></i> 
   <?=MSG_CLOSE_AUCTION;?> 
  
   </a>    <? } ?> 
 

 
 
 <? } ?>
  
















<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 1 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:99%;height:90px"
     data-ad-client="ca-pub-9257250722436872"
     data-ad-slot="1915615159"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


 <div class="row">
      <div class="col-lg-9">  <h1 class="display-6 d-none d-lg-block">  <?=$item_details['name'];?></h1>
	  
	  
	

	 
<hr class="my-2">	 

	  

	  
	  
	  <!-- AddThis Button BEGIN -->
	  
	  
	  
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fede8084cda3055"></script>
<!-- AddThis Button END -->  
	
<hr class="my-4">
 </div>
	    <div class="col-lg-3"> 
 
 <a class=" btn  btn-dark display-4 d-none d-lg-block" href="https://www.google.com/search?client=firefox-b-d&amp;q=<?=$item_details['name'];?>"><i class="fab fa-google"></i> Найти в  google </a> <br />

 <a class=" btn  btn-dark display-4 d-none d-lg-block"
 href="https://yandex.ru/search/?text=<?=$item_details['name'];?>&lr=2"><i class="fab fa-yandex"></i> Искать в yandex </a> 
	                       
	                         
<hr class="my-2">		<a  class="list-group-item list-group-item-action active" href="profile.php?user_id= <?=$item_details['owner_id'];?>"><i class="fas  fa-phone " style="font-size:20px;color:#fff;"></i><i class="fas  fa-user-alt " style="font-size:20px;color:#fff;"></i>  <?=$user_details['username'];?></a> 	 <? if ($member_active == 'Active') { ?> <? } else { ?>  
 
    <? } ?> 
	</div>	
 
		
	 
		
	 </div>
	  
	




<div class="row"> 
 
<div class="col-sm-2"><? if ($item_details['enable_swap'] && !$item_details['closed']) { ?> 
		   <? echo ($ad_display == 'live' && !$blocked_user) ? $swap_offer_link : '';?>  <? } ?> </div>
<div class="col-sm-2"><? if ($show_buyout) { ?> 
		 
		 

 <?											
			   if ($ad_display == 'preview' || $session->value('user_id') == $item_details['owner_id'] || $blocked_user)
			   {
 //			   	echo '<img src="themes/' . $setts['default_theme'] . '/out.png" border="0">';
			   }
			   else
			   {
// 			   	echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"><button class="thoughtbot">Зарезервировать</button></a>';
			   }
			   echo '<a class="btn btn-dark" href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"> <i class="fas   fa-briefcase  " style="font-size:22px;color:#ffffff;"></i>' . $item_details['buyout_price'] . '</br>Зарезервировать    </a>  '.
			   	'<br>';
												?>  

<? } ?></div>
<div class="col-sm-4">

 <? if ($member_active == 'Active') { ?>
			<a  class="text-dark align-items-center" href="<?=process_link('members_area', array('page' => 'about_me', 'section' => 'view'));?>">  
	                     <?=MSG_MM_ABOUT_ME;?>   <i class="fas  fa-user " style="font-size:32px;color:#007BFF;"></i>
                     <?=MSG_WELCOME_BACK;?>, <b> <?=$member_username; ?> </b> </a>
                 
                     <? } else { ?><? } ?> 


	
 <? if ($ad_display == 'live' && !empty($winners_content)) { ?>
                              
 
                                    
<?=MSG_WINNER_S; ?>
                             
<?=$winners_content;?>
 
                              
<? } ?> 
</div></div>
  




<? if ($ad_display == 'live') { ?>
 
 <a href="<?=process_link('index');?>"><?=MSG_BACK_TO_HP;?></a> 
 <? if (!empty($search_url)) { ?>
  <a href="<?=$search_url;?>"><?=MSG_BACK_TO_SEARCH_PAGE;?></a> 
 <? } ?>
 <? } ?>
<br />		<span class="d-block p-2 bg-primary text-white style1"> <i class="icon-tag"></i> &nbsp;<?=$item_details['zip_code'];?> &nbsp;<?=$main_category_display;?>&nbsp; </span>	
<span class="d-block p-2 bg-dark text-white"> <i class="icon-tags"></i>  &nbsp;  <?=$addl_category_display;?>  </span>
 
<br /><div class="row">
 <div class="col-lg-8"> 
<div class="pos-f-t ">
  <div class="collapse" id="navbarToggleExternalContent2">
    <div class="bg-light p-4">  <h4 ><i class="fas fa-book-reader"></i> Описание</h4>
 
	  
	
      <span class="text-muted">
	  
	  <p class="lead" >  <?=database::add_special_chars($item_details['description']);?>  </p> </span>
    <li   class="list-group-item list-group-item-action">
 <?=$offline_payment_methods_display;?>    
 </li>  </div>
  </div>
  <nav class="navbar navbar-dark bg-dark text-white"><h4> <i class="fas fa-book-reader"></i> Описание </h4>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div> <br />

 <div class="pos-f-t ">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4 style="background-color: #ffffff;" >
      <h4 class="text-white"><i class="fas fa-camera"></i> фото</h4>
      <span class="text-muted">
	  
 
	  <? if (item::count_contents($item_details['ad_image'])) { ?>
               <?=MSG_AUCTION_IMAGES;?>    <?=$ad_image_thumbnails;?> 
 
                                    
                                  
                                 <img name="main_ad_image" src="<?=SITE_PATH;?>thumbnail.php?pic=<?=$item_details['ad_image'][0];?>&w=500&sq=N&b=N" border="0" alt="<?=$item_details['name'];?>"> 
                  <? } ?> 
 
  </span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark text-white"><h4> <i class="fas fa-camera"></i> Фотографии </h4>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-camera"></i>
      <span class="navbar-toggler-icon text-white"></span>
    </button>
  </nav>
</div>

 
 
 
 
 <br />

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
  <ul class="list-group">
  <? if ($ad_display == 'live' && !empty($winners_content)) { ?>
 <li   class="list-group-item list-group-item-action">         <?=MSG_WINNER_S; ?>   <?=$winners_content;?> </li> <? } ?>          
                         
                          
                             
                             

  <li class="list-group-item active"> <?=GMSG_START_TIME;?> <?=show_date($item_details['start_time']); ?></li>
  <li class="list-group-item"> <i class="fas   fa-map-marker-alt " style="font-size:24px;color:#007BFF;"></i>  Место отгрузки <?=$item_details['hl'];?></li>
  <li class="list-group-item"> <i class="fas   fa-recycle " style="font-size:24px;color:#007BFF;"></i>  Вариант продажи <?=$item_details['bold'];?></li>
  <li class="list-group-item"> <i class="fas   fa-divide " style="font-size:24px;color:#007BFF;"></i>  Торги <?=$item_details['shipping_details'];?></li>
  <li class="list-group-item"> <i class="fas   fa-award " style="font-size:24px;color:#007BFF;"></i>  Состояние <?=$item_details['zip_code'];?></li>
  <li class="list-group-item"> <i class="fas   fa-dolly " style="font-size:24px;color:#007BFF;"></i>  Варианты доставки <?=$item_details['reserve_price'];?></li>
   <li class="list-group-item"><a class="myButton2 " href='javascript:;' onClick=showTooltip() id="link"> <i class="fas  fa-phone " style="font-size:22px;color:#007BFF;"></i>  +7xxx-xxx-xx-xx  </a>
            <div id=tooltip style='display: none'>
              <?=$user_details['phone'];?>
    </div></a> </li>
	  <li class="list-group-item"> <i class="fas   fa-dolly " style="font-size:24px;color:#007BFF;"></i> Продавец соц сети  <?=$item_details['reserve_price'];?></li>
	
</ul>


<br />
 
 <footer class="blockquote-footer"> <cite title="Source Title">Часто владельцы компьютеров не подают объявления продаж, а с удовольствием читают объявления о скупке. Так удобнее   ознакамливаться с  тематикой продажи . Нужен комп Apple - напиши здесь что надо и найдется продавец. </cite></footer>
 </div>    <div class="col-lg-4"> 	 
 
                
					
					
					
					
					
					
					   <a class="list-group-item  list-group  bg-primary text-white" href=" ">     Цена  &nbsp;руб <?											

 {

}

echo '  &nbsp;   ' . $fees->display_amount($item_details['buyout_price'], $item_details['currency']) . '    '. 
			   	'  ';
?> </a>

 

 <? if ($member_active == 'Active') { ?> <? } else { ?>  
 <li class=" bg-dark text-white">

<form action="<?=($setts['enable_enhanced_ssl']) ? $setts['site_path_ssl'] : SITE_PATH;?>login.php" method="post">
 <input type="hidden" name="operation" value="submit">
 <input type="hidden" name="redirect" value="<?=$redirect;?>">
 	
<table width="100%" border="0" cellpadding="6" cellspacing="6" align="center">
   <tr>
   <td width="63%"><input name="username" type="text" id="username" class="form-control"></td>
   </tr>
   <tr>
 
  <td><input name="password" type="password" id="password"  class="form-control"></td>
   </tr>
   <tr>
  <td align="center" colspan="2"><input type="checkbox" name="remember_username" value="1"> <?=MSG_REMEMBER_ME;?></td>
   </tr>
   <tr>
  <td colspan="2" align="center"><button class="btn btn-primary "> <?=MSG_LOGIN_TO_MEMBERS_AREA;?>
  </button>  </td>
   </tr>
</table>
 </form>
 
 </li>

    <? } ?>





					     <a class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white" href="<?=process_link('auction_details', array('auction_id' => $item_details['auction_id'], 'option' => 'item_watch'));?>">    
                      Отслеживать объявление <span class="badge badge-light badge-pill">  
  &nbsp; <i class="fas fa-male"></i>  &nbsp; <i class="fas fa-user-secret"></i> &nbsp; </span>     </a>   
					   
					   
                               <a class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white" href="<?=process_link('auction_details', array('auction_id' => $item_details['auction_id'], 'option' => 'auction_friend'));?>">    
                      Отправить майл другу  <span class="badge badge-light badge-pill">  
 <i class="fas fa-at"></i>  <i class="fas fa-male"></i></i> <i class="fas fa-bullhorn"></i> </span>     </a>
                          <a class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white" href="">    
                        Сегодня <span class="badge badge-light badge-pill">  
  <?=item::item_status($item_details['closed']); ?> </span>     </a>
 
         
			
			       <a class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white" href="">    
                      <?=$auction_country;?>  <span class="badge badge-light badge-pill">      <i class="fas fa-subway"> </i>  </span>     </a>
			
			   
                        <a class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white" href="">    
                       Просмотров    <span class="badge badge-light badge-pill">    <?=($item_details['nb_clicks']+1); ?> </span></a> 
					   
  <header>
      <div class="collapse " id="navbarHeader3">
        <div>
		
	<ul class="list-group">
  <li class="list-group-item ">     <i class="fas fa-user"></i>автор &nbsp;<a href="about_me.php?user_id= <?=$item_details['owner_id'];?>"> <?=$user_details['username'];?></a>  </li> <li class="list-group-item "> <i class="fas fa-subway"></i> 
               	<? echo M . ' <b>' . $seller_country . '</b>'; ?> </li>
  <li class="list-group-item">  <? if ($ad_display == 'live') { ?>
      
   <a href="<?=process_link('other_items', array('owner_id' => $item_details['owner_id']));?>"> <?=MSG_OTHER_ITEMS_FROM_SELLER;?> </a></li>
  <li class="list-group-item"> <? if ($user_details['shop_active']) { ?> <a href="<?=process_link('shop', array('user_id' => $item_details['owner_id']));?>">Прайс ЛИСТ</a>  <? } ?></li>
   
  <li class="list-group-item"> <?=$user_details['username'];?>  <?=user_pics($user_details['user_id']);?><br /><?=MSG_REGISTERED_SINCE;?> <?=show_date($user_details['reg_date'], false);?>
<br />
 </li>
 
</ul>	
	     <? } ?>	
		
		
		
		
		
		
		
		
		
		
		
		
 
 
</div> 

 
 
</div>
<div class="navbar navbar-dark bg-dark  text-white">
 <div class="container d-flex justify-content-between">
          <p class="navbar-brand d-flex align-items-center">      
     
            </p> 
          <button class="navbar-toggler  text-white" type="button" data-toggle="collapse" data-target="#navbarHeader3" aria-controls="navbarHeader3" aria-expanded="false" aria-label="Toggle navigation"><i class="icon-user"></i>    автор&nbsp; <?=$user_details['username'];?> &nbsp;контакты
<span class="navbar-toggler-icon text-white"></span>
          </button>
    </div>
    </div>
  </header> 				   
					   
					   
					   
					   
					   
					   
  
</div> </div>



 
  <?=$public_questions_content;?>
 
 
<br /> 
 
  
 
 
 
 
 
 
 
  
 
 <div >
 
 
 
 
 <? if ($ad_display == 'live') { ?>
      <? if ($setts['enable_asq']) { ?>
 
 

  
Вопросы 
<br />
 
 
<? if ($session->value('adminarea') == 'Active') { ?>
 
 

 
<?=MSG_QUESTIONS_LOGGED_AS_ADMIN;?>
 

<? } else if (!$session->value('user_id')) { ?>
 
 <br>

<?=MSG_LOGIN_TO_ASK_QUESTIONS;?>

 

<? } else if ($session->value('membersarea') != 'Active') { ?>
 
<br>
<?=MSG_ACC_SUSPENDED_ASK_QUESTION;?>

 

<? } else if ($session->value('user_id') == $item_details['owner_id']) { ?>
<br>
 

<?=MSG_CANT_POST_QUESTION_OWNER;?>
<br>
 

<? } else { ?>
 

<form action="auction_details.php" method="POST">
 
<input type="hidden" name="auction_id" value="<?=$item_details['auction_id'];?>">
 
 
<input type="hidden" name="option" value="post_question">
   
 
<br />
 <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fas   fa-donate  " style="font-size:20px;color:#007BFF;"></i> Ваши вопросы</span>
  </div>
 <textarea aria-label="Ваши вопросы" name="message_content" class="form-control" cols="40" rows="2" placeholder="Ваши вопросы и пожелания автору "  ></textarea>
 
</div>

 <br />

 
<select name="message_handle" clas="span4">
 <br />
  
<? if ($user_details['default_public_questions']) { ?>
<br />
   
<option value="1" selected >
   
<?=MSG_POST_QUESTION_PUBLICLY;?>
   </option>
   
<? } ?>
   
<option value="2"   >
   
<?=MSG_POST_QUESTION_PRIVATELY;?>
   </option><br />

</select>
    <br>

<br>
 
 <br />

<input class="click" name="form_post_question" type="submit" id="form_post_question" value="<?=GMSG_SUBMIT;?>" />
    
 

<br>
<br>

</form>
<? } ?>
 


      
   
  <? } ?>
        
  <? } ?>
        
 



 <div align="center">





<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
</div> 

<br>












   <? if ($ad_display == 'live') { ?>



<? if ($session->value('user_id')) { ?>
 

     <? } else if ($session->value('user_id')) { ?>
     <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report', 'auction_id' => $item_details['auction_id']));?>"> 
     Если  продавец 
    <font color="#FF0000">  нарушает условия  </font> - написать админу 
    
     --- 
     <?=MSG_REPORT_AUCTION;?>
     </a> 
     <? } ?>

 

    <? } ?>

 
  <? if ($ad_display == 'live') { ?>



 
<?=MSG_THE_POSTER;?>
 
  
<?=$user_details['username'];?>
 
  
<?=MSG_ASSUMES_RESP_EXPL;?>
 
  <? } ?>.
    </div>
		
 
 
	

	 <div align="center">
	&nbsp; <i class="icon-share-alt"></i>&nbsp; <?=$user_details['username'];?> <div   >
            

	


 

 

 <? if ($ad_display == 'live') { ?>
      <? if ($setts['enable_other_items_adp'] && $item->count_contents($other_items)) { ?>
       
         <div align="right"  style="padding-right: 10px;" > <a href="<?=process_link('other_items', array('owner_id' => $item_details['owner_id']));?>">
       <i class="fas  fas  fa-donate" style="font-size:26px;color:#007BFF;"></i>     Все объявления от <?=$user_details['username'];?>
            </a> </div>
         <div class="alert alert-dark">
            <div>
               <?
			      for ($counter=0; $counter<$layout['hpfeat_nb']; $counter++) {
						$width = 100/$layout['hpfeat_nb'] . '%'; ?>
			               <li align="center" valign="top"><?
			      	if (!empty($other_items[$counter]['name'])) {
			      		$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE
			      			auction_id='" . $other_items[$counter]['auction_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');
			
			      		$auction_link = process_link('auction_details', array('name' => $other_items[$counter]['name'], 'auction_id' => $other_items[$counter]['auction_id']));?>
                  <div width="100%" border="0" cellspacing="1" cellpadding="3"  >
                     
                     <div>
                        <li ><a href="<?=$auction_link;?>">
                           <?=title_resize($other_items[$counter]['name']);?>
                           </a></li>
                     </div>
                     <div>
                        <li > 
                         Цена-
                          <? echo $fees->display_amount($other_items[$counter]['start_price'], $other_items[$counter]['currency']);?>  
                           
                           </li>
                     </div>
                  </div>
                  <? } ?></li>
               <? } ?>
            </div>
         </div>
         <br>

</div>    <? } ?>
    <? } ?>
 







