<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<?=$auction_print_header;?>
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


<style>
<!--
.uparrowdiv, .downarrowdiv, .leftarrowdiv, .rightarrowdiv{
width:90%;
min-height:20px; /*min height of DIV should be set to at least 2x the width of the arrow*/
background: #ffffff;
color:#333333;
padding:3px;
position:relative;
word-wrap:break-word;
-moz-border-radius:5px; /*add some nice CSS3 round corners*/
-webkit-border-radius:5px;
border-radius:5px;
margin-bottom:2em;
}



}



.leftarrowdiv:after{ /*arrow added to leftarrowdiv DIV*/
content:'';
display:block;
position:absolute;
top:10px;
left:-20px; /*should be set to -border-width x 2 */
width:0;
height:0;
border-color: transparent white transparent transparent; /*border color should be same as div div background color*/
border-style: solid;
border-width: 10px;
}


-->
</style>

















<style type="text/css">
<!--
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; text-shadow: 0px 0px 1px #aaa;}


-->
</style>


<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif; text-shadow: 0px 0px 0px #aaa;}


-->
</style>




<? if ($ad_display == 'live') { ?>

<form name="hidden_form" action="auction_details.php" method="get" style="margin:0px;">
   <input type="hidden" name="option" />
   <input type="hidden" name="auction_id" />
   <input type="hidden" name="message_content" />
   <input type="hidden" name="question_id" />

   
   
</form>




















<? if ($print_button == 'show') { ?>
<table align="center" border="0" cellpadding="3" cellspacing="1" class="errormessage">
   <tr>
      <td class="contentfont"><a href="#" onclick="javascript:window.print(this);">
  <?=GMSG_PRINT_THIS_PAGE;?>
  </a></td>
   </tr>
</table>
<? } ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr valign="top">
      
<td align="center">
<? } ?>
<div >
<div align="center">
<table width="100%" border="0" align="center" cellspacing="0" cellpadding="0">
<tr>
<td align="center">
 
<div class="itemidend">
<div align="center"><b>
 
<?=$auction_friend_form;?>
 
 
<table width="100%" border="2" cellspacing="2" cellpadding="2">
<tr>
<td>&nbsp;</td>
<td align="center">
<div align="center"><?=$msg_changes_saved;?></div>

</td>
<td>&nbsp;</td>
</tr>
</table>
<?=$msg_changes_saved;?>
 
 
<?=$block_reason_msg;?>
<br>
</b>
<div align="center">
<div class="itemid2">
</div>
</div>
<div class="itemidend">
    <img src="themes/<?=$setts['default_theme'];?>/img/system/print.gif" align="absmiddle" border="0" hspace="3"> 
                                    <a href="javascript:popUp('<?=process_link('auction_print', array('auction_id' => $item_details['auction_id']));?>');"> 
                                    
<?=MSG_PRINT_VIEW;?>
&nbsp;&nbsp;&nbsp;
                                    </a> <a href="<?=process_link('auction_details', array('auction_id' => $item_details['auction_id'], 'option' => 'item_watch'));?>"><img src="themes/<?=$setts['default_theme'];?>/img/system/watch.gif" align="absmiddle" border="0" hspace="3"> 
                                    
<?=MSG_WATCH_ITEM;?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a> <a href="<?=process_link('auction_details', array('auction_id' => $item_details['auction_id'], 'option' => 'auction_friend'));?>"><img src="themes/<?=$setts['default_theme'];?>/img/system/tofriend.gif" align="absmiddle" border="0" hspace="3"> 
                                    
<?=MSG_SEND_TO_FRIEND;?>
&nbsp;&nbsp;
                                    </a>    
									
									
									
									
									
									
									</div>
<b><br>
 
</b> </div>
</div>
</td>
</tr>
</table>
        
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center">


<div align="center">
  
<h3 class="style2">

ID : <b> 
                  
<?=$item_details['auction_id'];?>
</b>&copy;  &nbsp;&nbsp;  
<?=$item_details['name'];?>
--<b>
<? if ($item_details['quantity']) { ?>
 
 
<?=GMSG_QUANTITY;?>
 
<? } ?>
</b>
<?=$item_details['quantity'];?>
<br />
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
 
<tr> 
   
<? if ($ad_display == 'live') { ?>
   
<td nowrap valign="top" width="13%"> 
            
<table width="74%" border="0" cellpadding="3" cellspacing="1">
              
<tr> 
                
<td class="contentfont" nowrap style="padding-right: 10px;"><img src="themes/<?=$setts['default_theme'];?>/img/arrow.gif" align="absmiddle" border="0" hspace="5"> 
                  <a href="<?=process_link('index');?>"> 
                 На главную
                  </a></td>
</tr>
              
<? if (!empty($search_url)) { ?>
              
<tr> 
                
<td class="contentfont" nowrap style="padding-right: 10px;"><img src="themes/<?=$setts['default_theme'];?>/img/arrow.gif" align="absmiddle" border="0" hspace="5"> 
                  <a href="<?=$search_url;?>"> 
                Поиск
                  </a></td>
</tr>
              
<? } ?>
              
<? if ($user_details['shop_active']) { ?>
              
<? } ?>
            
</table>
</td>
<? } ?>
   
<td width="85%"> 
            
<? if ($item_details['addl_category_id']) { ?>

<? } ?>
<?=$main_category_display;?>
<b>:</b>
<?=$addl_category_display;?>
</td>
<td width="2%" valign="top">&nbsp;</td>
</tr>
      
</table>
<br />
Опубликовано -
<? echo ($ad_display == 'live' || $item_details['start_time_type'] == 'custom') ? show_date($item_details['start_time']) : GMSG_NOW; ?>
-- 
Продавец
<b>
<?=$user_details['username'];?>
    </b> 
    
<?=user_pics($user_details['user_id']);?>
--
<img src="themes/<?=$setts['default_theme'];?>/map1.png" border="0" >
<?=$auction_country;?>
<?=$auction_location;?>
<br />


 </h3>
<div class="itemid2">
<div align="center"></div>
</div>
<div class="itemid2"> 
     
                  
<? if ($ad_display == 'live') { ?><? } ?>
                  
				  
  
				  
		




<?											

 {

}
echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"> Цена&nbsp;   ' . $fees->display_amount($item_details['buyout_price'], $item_details['currency']) . '  </a> '.
			   	' ';
?>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				   Сегодня  : 
                  
<?=item::item_status($item_details['closed']); ?>
    
                  
<? if ($ad_display == 'live') { ?>
                  &nbsp;---&nbsp;&nbsp;|&nbsp;&nbsp;<b>
<? if ($ad_display == 'live' && $item_details['start_time'] <= CURRENT_TIME && $item_details['auction_type'] != 'first_bidder') { // dont show if the auction is not started ?>
  
<?=MSG_TIME_LEFT;?>
</b>
<?=time_left($item_details['end_time']); ?>
     
<? } ?>
&nbsp;|&nbsp;&nbsp; Просмотров <span class="redfont"> 
                  
<?=($item_details['nb_clicks']+1); ?>
                  </span> 
                  
<? } ?>
                  <br>
<br>


          
<? if ($member_active == 'Active') { ?>
          
4-<br>
<h3 class="style3">Цена сейчас 
<br>
<? if ($show_buyout) { ?>
                          
<?											
			   if ($ad_display == 'preview' || $session->value('user_id') == $item_details['owner_id'] || $blocked_user)
			   {
//			   	echo '<img src="themes/' . $setts['default_theme'] . '/img/buyout.gif" border="0">';
			   }
			   else
			   {
//			   	echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"><button class="thoughtbot">Цена  сейчас </button></a>';
			   }
			   echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"><button class="thoughtbot"><b>Цена&nbsp;&brvbar; </b>' . $fees->display_amount($item_details['buyout_price'], $item_details['currency']) . ' </button> </a></b>'.
			   	'<br>';
 	?>
                   
 
<? } ?>
<br>
<br>
<? if ($item_details['is_offer'] && $setts['makeoffer_process'] == 1) { ?>

<?
   	if ($ad_display == 'preview' || $session->value('user_id') == $item_details['owner_id'] || $blocked_user)
   	{
//   		echo '<img src="themes/' . $setts['default_theme'] . '/img/system/makeoffer25.gif" border="0">';
   	}
   	else
   	{
//   		echo '<a href="make_offer.php?auction_id=' . $item_details['auction_id'] . '">    <img src="themes/' . $setts['default_theme'] . '/img/system/makeoffer25.gif" border="0"></a>';
   	}
   ?>
  
 
<? if ($item_details['is_offer'] && $setts['makeoffer_process'] == 1) { ?>
 


<h3 class="style3">&copy;  &nbsp;&nbsp;  
<?=$item_details['name'];?>
 <br>
 Данный товар предполагает торг .<br />
    Вы можете предложить продавцу <b>
    
<?=$user_details['username'];?>
    </b>свою цену <br />
 
  
<?=$item->offer_range($item_details);?>
</h3>
<a href=make_offer.php?auction_id=<?=$item_details['auction_id'];?>><br>
<button class="thoughtbot888"> Предложить <br>
свою цену</button> </a> 
 



<? } ?>
 
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
        
<? 
if ($ad_display != 'live' || $setts['makeoffer_private']) { ?>
 

  
<? } ?>
   
   
   
  
<? } ?>
   
  
 
<? if ($ad_display == 'live' && $item_details['reserve_price']>0 && $item_details['auction_type'] != 'first_bidder') { ?>
  
   
        
<? } ?>
</h3>
<? if ($ad_display == 'live' && $item_details['reserve_price']>0 && $item_details['auction_type'] != 'first_bidder') { ?>
    
    
<? } ?>


<? if ($ad_display == 'live' && $item_details['reserve_price']>1 && $item_details['auction_type'] != 'first_bidder') { ?>
    
11111111111111111111111    
<? } ?>
<br>

---

  
      
<? } else { ?>


<? } ?>
	










<br>





<? if ($ad_display == 'live') { ?>
      <? if ($setts['enable_asq']) { ?>
      <div > <br>
  <table width="100%" border="0" cellpadding="6" cellspacing="0">
     <tr valign="top">
 
<td align="center">
<h3 class="style2">
<b> 
<?=MSG_ASK_SELLER_QUESTION;?>
 </b>
<br>
<div  class="te"> 
<table width="100%" border="0" cellpadding="1" cellspacing="1">
<tr>
   
</tr>
<?=$public_questions_content;?>
<? if ($session->value('adminarea') == 'Active') { ?>
<tr>
   
<td align="center" colspan="3">
<?=MSG_QUESTIONS_LOGGED_AS_ADMIN;?>
</td>
</tr>
<? } else if (!$session->value('user_id')) { ?>
<tr>
   
<td align="center" colspan="3">
<?=MSG_LOGIN_TO_ASK_QUESTIONS;?>
</td>
</tr>
<? } else if ($session->value('membersarea') != 'Active') { ?>
<tr>
   
<td align="center" colspan="3">
<?=MSG_ACC_SUSPENDED_ASK_QUESTION;?>
</td>
</tr>
<? } else if ($session->value('user_id') == $item_details['owner_id']) { ?>
<tr>
   
<td align="center" colspan="3">
<?=MSG_CANT_POST_QUESTION_OWNER;?>
</td>
</tr>
<? } else { ?>
<tr>
   
  
<td width="26%"><img src="themes/<?=$setts['default_theme'];?>/img/pixel.gif" width="1" height="1"></td>
<td colspan="2" width="74%"><img src="themes/<?=$setts['default_theme'];?>/img/pixel.gif" width="1" height="1"></td>
</tr>
<form action="auction_details.php" method="POST">
   
<input type="hidden" name="auction_id" value="<?=$item_details['auction_id'];?>">
   
<input type="hidden" name="option" value="post_question">
   
<tr>
      
    
<td nowrap width="26%"  ><b> 
      

      </b></td>
<td width="74%">
                    
<table width="99%">
                      
<tr>
                        
<td align="center" width="63%">
<br>
<textarea name="message_content" cols="40" rows="3" class="pass6"></textarea>
<br>
<br>
<br>
<div style="padding: 2px;">
<select name="message_handle"  class="pass789"  >
   
<? if ($user_details['default_public_questions']) { ?>
   
<option value="1" selected  class="pass789">
   
<?=MSG_POST_QUESTION_PUBLICLY;?>
   </option>
   
<? } ?>
   
<option value="2"   >
   
<?=MSG_POST_QUESTION_PRIVATELY;?>
   </option>
</select>
    <br>

<br>
</div>
<div style="padding: 2px;">
<input name="form_post_question" type="submit" id="form_post_question" value="<?=GMSG_SUBMIT;?>" />
    




 

</div>
</td>
<td width="37%" valign="top" > 
                          
<div style="padding: 2px;">
 
</div>
<div style="padding: 2px;">
<div class='a'> 
</div>
</div>
<ul>
<li><a href="#" class="round green"><img src="themes/<?=$setts['default_theme'];?>/tel.png" border="0"  ><span class="round">
<?=$user_details['phone'];?> </span></a></li>
</ul>
</td>
</tr>
  
</table>
</td>

</tr>
</form>
<? } ?>
    
</table>







<br>
</div>
     

     
<div > 
</div>
</h3>
 </td>
     </tr>
  </table>
      </div>
      
<? } ?>
      
<? } ?>
<h3 class="style2">
<? if ($item_details['payment_methods']) { ?>

<b>Методы оплаты и доставки товара</b>
   <img src="themes/<?=$setts['default_theme'];?>/img/pixel.gif" width="15" height="25" border="0"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<div  class="te">
<table width="100%" border="0" cellpadding="1" cellspacing="1">
        
<tr valign="top">
 
<? if ($item_details['direct_payment']) { ?>
 222222222
   
<? } ?>
 
   
<td align="center" > 
     
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>

  
<td class="title">
<div align="center"></div>
</td>
<br>
 
</tr>
<tr>
   
<td align="center">
<?=$offline_payment_methods_display;?>
</td>
</tr>
    
</table>
<? } ?>
 </td>
</tr>
  
</table>
</div>
</td>
</tr>
</table> </h3>
 <br><h3 class="style2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="75%" align="center">
<div align="center"><b>

Описание <br>
&copy;  &nbsp; 
<?=$item_details['name'];?>
<br>
 </b>
<div  class="te"> 
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
<td valign="top">
<?=database::add_special_chars($item_details['description']);?>
</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table></h3>
 
     

</div>
</div>
</td>
</tr>
</table>

<br>
</div>
</td>
      </tr>
</table>


<br />

<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
<div >

	  
	  
 
    
 
 
      <? if ($ad_display == 'live') { ?>
      <? if ($setts['enable_asq']) { ?>
 
	  
 
			 
			 
 
	  
	  
      <? } ?>
   
 
   
 
	  

	  
	  
   
      <? } ?>
 
 

<br>
<table width="100%" border="0" cellspacing="10" cellpadding="0">
     <tr>

 <td>
					   <? if (!empty($direct_payment_box)) { ?>
						<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
 
</tr>
						   <? foreach ($direct_payment_box as $dp_box) { ?>
						   <tr>
						      <td><?=$dp_box;?></td>
						   </tr>
						   <? } ?>
    </table>  
     
    <? } ?>    	  
	 

	  
	  
 
 	<table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr valign="top">
   <? if (!empty($item_details['ad_image'][0])) { ?>
  
<? } ?>
   
  <td width="84%"> 
   

    <table width="100%" border="0">
      <tr> 
 <td valign="top" width="83%" align="center"> 
   <table width="97%" border="0" cellspacing="2" cellpadding="3">
     <? if ($ad_display == 'live' && !$buyout_only) { ?>
     <tr> 
<td width="43%"><strong> 
  <?=MSG_CURRENT_BID;?> 
  </strong></td>
<td class="greenfont" width="57%"><strong> 
  <?=$fees->display_amount((($item_details['auction_type'] == 'first_bidder') ? $item_details['fb_current_bid'] : $item_details['max_bid']), $item_details['currency']); ?>
  </strong></td>
     </tr>
     <? } ?>
     <? if (!$buyout_only) { ?>
     <tr > 
<td width="43%"><strong> 
 <?=MSG_START_BID;?> 
  </strong></td>
<td class="redfont" width="57%"><strong> 
  <?=$fees->display_amount($item_details['start_price'], $item_details['currency']); ?>
  </strong> 

</td>
     </tr>
     <? if ($your_bid>0) { ?>
     <tr> 
<td width="43%"><strong> 
  <?=MSG_YOUR_BID;?>
  </strong></td>

     </tr>
     <? } ?>
     <? } ?>
     <? if ($item_details['auction_type'] == 'first_bidder' || ($ad_display == 'preview' && $item_details['is_reserve'] && !$buyout_only)) { ?>
     <tr > 
<td width="43%"><strong> 
  <?=MSG_RES_PRICE;?>
  </strong></td>
<td width="57%"><strong> 
  <?=$fees->display_amount($item_details['reserve_price'], $item_details['currency']); ?>
  </strong></td>
     </tr>
     <? } ?>

     <tr > 
 
 
     </tr>
  
     <? if ($ad_display == 'live' && !$buyout_only && $item_details['auction_type'] != 'first_bidder') { ?>
     <tr > 

<td  width="57%"> 
  <?=$item_details['nb_bids'];?>
  <? if ($item_details['nb_bids']) { ?>
  [ <a href="<?=process_link('bid_history', array('auction_id' => $item_details['auction_id']));?>"> 
  <?=MSG_VIEW_HISTORY;?>
  </a> ] 
  <? } ?>
</td>
     </tr>
     <? } ?>
   
     <tr > 
 



 

    <? if ($item_details['auction_type'] == 'first_bidder') { ?>  <?=MSG_FB_DECREMENT;?> 
<? 
   	$fb_decrement = $item->convert_fb_decrement($item_details, 'NTS');
   	
   	echo $fees->display_amount($item_details['fb_decrement_amount'], $item_details['currency']) . ' ' . $fb_decrement['display']; ?>
	
	     <? if ($ad_display == 'live' && $item_details['closed'] == 0) { ?>  <?=MSG_NEXT_DECREMENT;?>
	
	
 

 
 
     </tr>
  
 

     <tr > 
 

  <?=show_date($item_details['fb_next_decrement']); ?>   <? } ?>

     </tr>
  
     <tr > 
<td colspan="2"></td>
     </tr>
     <? } else { ?>
     <? if ($ad_display == 'live' || $item_details['end_time_type'] == 'custom') { ?>  
     <tr > 
<td width="43%"><b> 

  </b></td>
<td width="57%"> 

</td>
     </tr>
     <? } else { ?>
     <tr > 

     </tr>
     <? } ?>
     <? } ?>
     
     <tr > 

 
     </tr>
 
    
     <tr> 
<td colspan="2"> 
  

  

  
  
  
  
  
  
  
  
  

   </table>
 </td>
 
<td valign="top" align="right" width="17%"> 
   
 
  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   	
<tr>
   		              
<td width="98%"> 
                        
<table width="98%" border="0" cellspacing="1" cellpadding="2">
                          
<? if ($ad_display == 'live' && !$buyout_only) { ?>
                          
<tr>
			 

<td class="greenfont"> 
									   	
<?=$fees->display_amount((($item_details['auction_type'] == 'first_bidder') ? $item_details['fb_current_bid'] : $item_details['max_bid']), $item_details['currency']); ?>
									   	</strong></td>
</tr>
			  
<? } ?>
			  
<? if (!$buyout_only) { ?>
			  

		 
<? if ($your_bid>0) { ?>			
<?=MSG_YOUR_BID;?><?=$fees->display_amount($your_bid, $item_details['currency']); ?><? } ?>
			  
<? } ?>
									
<? if ($item_details['auction_type'] == 'first_bidder' || ($ad_display == 'preview' && $item_details['is_reserve'] && !$buyout_only)) { ?>
			  

			  
<? } ?>
			  
				

			

</td>
</tr>
			  

			   
</table>
</td>
<? if ($show_buyout) { ?>
											
                      
<td nowrap width="2%" valign="top"> 
                        
 
                          
<?											
//			   if ($ad_display == 'preview' || $session->value('user_id') == $item_details['owner_id'] || $blocked_user)
			   {
//			   	echo '<img src="themes/' . $setts['default_theme'] . '/img/buyout.gif" border="0">';
			   }
//			   else
			   {
//			   	echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"><button class="thoughtbot">Цена  сейчас </button></a>';
			   }
//			   echo '<a href="buy_out.php?auction_id=' . $item_details['auction_id'] . '"><button class="thoughtbot"><b>Цена&nbsp;&brvbar; </b>' . $fees->display_amount($item_details['buyout_price'], $item_details['currency']) . ' </button> </a></b>'.
			   	'<br>';
												?>
           
</td>
<? } ?>
										</tr>
									
</table>
 
          </td>
      </tr>
    </table>
  </td>
   </tr>
    </table>

			
 			
			

    <? if (item::count_contents($item_details['ad_dd'])) { ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
   <td class="title" colspan="2"><?=MSG_DIGITAL_MEDIA;?></td>
</tr>
<tr>
   <td class="border" colspan="2"><?=$ad_dd_thumbnails; ?></td>
</tr>
    </table>
    <? } ?>
						 
						<br>
						<table width="100%" border="0" cellspacing="1" cellpadding="3">
			  	<tr>
			     	<td colspan="2" class="title"></td>
						  </tr>
						</table>
						<br>
						<? if ($ad_display == 'live') { ?>
						<table width=100% border="0" cellspacing="0" cellpadding="0">
						   <tr>
						   	
  <td width="50%" style="padding-right: 10px;" valign="top"> 
    <? } ?>
    <? if ($ad_display == 'live') { ?>
  </td>

						  </tr>
						</table>
						<? } ?>
					</td>
 </tr>

  </table>
  


<br>
      </div>
 
      <?=$custom_sections_table;?> 
	  
<div align="center"><b>

Описание <br>
&copy;  &nbsp; 
<?=$item_details['name'];?>
<br>
 </b>
 
</div>

    
 
    <? if (item::count_contents($item_details['ad_image'])) { ?>
    <table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
   
<td class="title" colspan="2">
<?=MSG_AUCTION_IMAGES;?>
</td>
</tr>
<tr>
   <td class="border" colspan="2"><table width="100%" cellpadding="3" cellspacing="0" border="0">
  <tr align="center">
     <td valign="top" class="picselect">
<table cellpadding="3" cellspacing="1" border="0" width="442">
    <tr align="center">
<td><b>
   <?=MSG_SELECT_PICTURE;?>
   </b></td>
    </tr>
    <tr align="center">
<td><?=$ad_image_thumbnails;?></td>
    </tr>
 </table></td>
     </tr>
      </table></td>
</tr>
    </table>
    
<? } ?>
        <br>
			   
			   
			   
			   
  <table width="100%" border="0" cellpadding="9" cellspacing="9">
    <tr valign="top"> 
    
    
<td class=border>
	
	      
<? if ($ad_display == 'live') { ?>
    
<?=MSG_WELCOME;?>
    
<?=$session->value('username');?>
    
<? if ($session->value('user_id')) { ?>

    
<? } ?>
  
 
<? if ($session->value('user_id')) { ?>
 
<div align="center"><img src="themes/<?=$setts['default_theme'];?>/img/system/status1.gif" vspace="5" align="absmiddle"> <br>
 
   
<? if ($item_details['owner_id'] == $session->value('user_id')) { ?>
 
   - <b>Вы можете редактировать  прямо сейчас</b> 
   <br>   </div>
   <img src="themes/ultra/img/notebook.gif" ><a href="<?=process_link('sell_item', array('option' => 'sell_similar', 'auction_id' => $item_details['auction_id']));?>"> 
   
<?=MSG_SELL_SIMILAR;?>
   </a> 

<hr color=#224488 size=1 width=98% noshade>
   <? if (!$item->under_time($item_details))	{ ?>
   <? if ($item_details['nb_bids']==0 && $item_details['active']==1)	{ ?>
   <img src="themes/ultra/img/tools.gif" ><a href="edit_item.php?auction_id=<?=$item_details['auction_id'];?>&edit_option=new"> 
   <?=MSG_EDIT_AUCTION;?>
   </a> 
   <hr color=#224488 size=1 width=98% noshade>
   <img src="themes/ultra/img/delet.gif" ><a href="members_area.php?do=delete_auction&auction_id=<?=$item_details['auction_id'];?>&page=selling&section=open" onClick="return confirm('<?=MSG_DELETE_CONFIRM;?>');"> 
   <?=MSG_DELETE;?>
   </a> 
   <hr color=#224488 size=1 width=98% noshade>
   <? } else if ($item_details['nb_bids']>0 && $item_details['active']==1) { ?>
   <a href="edit_description.php?auction_id=<?=$item_details['auction_id'];?>"> 
   <img src="themes/ultra/img/lock.png"  border="0"> 
   <?=MSG_EDIT_DESCRIPTION;?>
   </a> 
   <hr color=#224488 size=1 width=98% noshade>
   <? } ?>
   <? } ?>
   <? if ($item->can_close_manually($item_details, $session->value('user_id'))) { ?>
   <img src="themes/ultra/img/closs.gif" ><a href="members_area.php?do=close_auction&auction_id=<?=$item_details['auction_id'];?>&page=selling&section=open" onClick="return confirm('<?=MSG_CLOSE_AUCTION_CONFIRM;?>');"> 
   <?=MSG_CLOSE_AUCTION;?>
   </a> 
   <hr color=#224488 size=1 width=98% noshade>
   <div align="center"><br>
     <? } ?>
     <? } else if ($session->value('user_id')) { ?>
     <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report', 'auction_id' => $item_details['auction_id']));?>"> 
     Если Вы считаете что <b><font color="#FF0000">продавец 
     нарушает условия торгов</font></b> то Вы можете <br>
     нажать на ссылку и написать администратору о нарушении 
     --- 
     <?=MSG_REPORT_AUCTION;?>
     </a> 
     <? } ?>

     <? } ?>
</div>
	  
	  
	
 
	    
	  
   </div>
   

</div>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</td>
    
  </tr>
</table>


 
<div >
<table width="100%" border="0" cellspacing="3" cellpadding="3">
    <? if (!empty($item_details['ad_image'][0])) { ?>
    <tr> 
<td align="center" width="7%"><img src="<?=SITE_PATH;?>thumbnail.php?pic=<?=$item_details['ad_image'][0];?>&w=50&sq=Y&b=Y" border="0" alt="<?=$item_details['name'];?>"></td>
<td width="93%"> 
  <?=$item_details['name'];?>
</td></tr>
  <? } ?>
  
  <? if ($item_can_bid['show_box']) { ?>
  <tr> 
<td align="center" colspan="2"> 
  
</td></tr>
  <? } ?>
  <? if (!empty($item_can_bid['display'])) { ?>
  <tr> 
<td align="center" colspan="2"> 
  <table width="100%" border="0" cellspacing="1" cellpadding="1" class="errormessage">
<tr align="center"> 
  <td width="100%"> 
<?=$item_can_bid['display'];?>
  </td></tr>
  </table>
</td></tr>
  <? } ?>
</table>
 
<br>
<br>
<br>
<br>
<? if ($ad_display == 'live') { ?>
<br>
<br />
</div>
<div class="addthis_inline_share_toolbox">
</div>
<table width=100% border=0 cellspacing=0 cellpadding=0>
   <tr>
      
<td align='center' class='topitempage alertfont'>
<?=MSG_THE_POSTER;?>
  , <b>
  
<?=$user_details['username'];?>
  </b>,
  
<?=MSG_ASSUMES_RESP_EXPL;?>
</td>
   </tr>
</table>
<br />
<? } ?>
<? } ?>
 


<br>
 