<?
#################################################################
## PHP Pro Bid v6.06															##
##-------------------------------------------------------------##
## Copyright 2009 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

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

<style type="text/css">
<!--



		.tooltip{
   			display: inline;
    		position: relative;
		}
		
		.tooltip:hover:after{
    		background: #333;
    		background: rgba(0,0,0,.8);
    		border-radius: 5px;
    		bottom: 26px;
    		color: #fff;
    		content: attr(title);
    		left: 20%;
    		padding: 5px 15px;
    		position: absolute;
    		z-index: 98;
    		width: 220px;
		}
		
		.tooltip:hover:before{
    		border: solid;
    		border-color: #333 transparent;
    		border-width: 6px 6px 0 6px;
    		bottom: 20px;
    		content: "";
    		left: 50%;
    		position: absolute;
    		z-index: 99;
		}
	
-->

</style>














<? if ($ad_display == 'live') { ?>

<form name="hidden_form" action="auction_details.php" method="get" style="margin:0px;">
   <input type="hidden" name="option" />
   <input type="hidden" name="auction_id" />
   <input type="hidden" name="message_content" />
   <input type="hidden" name="question_id" />
</form>
<? } ?>
 

<table width="100%" >
<tr>
<td align="center" valign="top">
<div>
<h3 class="style2"> <b> 
<?=$item_details['name'];?>
-
<?=$fees->budget_output($item_details['budget_id'], null, $item_details['currency']); ?>
</b>
</h3>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="2" bgcolor="#FF0000">
<tr>
<td ></td>
</tr>
</table>
<h3 class="style1"> 

Прием
:
<?=item::item_status($item_details['closed']); ?>

 &nbsp;&nbsp;|&nbsp;&nbsp; Выполняет 
 
<b>
<?=$user_details['username'];?>
</b>
<?=user_pics($user_details['user_id'], true, true);?>
&nbsp;&nbsp;|&nbsp;<img src="themes/<?=$setts['default_theme'];?>/map1.png" border="0" width="17" height="26" >
<?=$seller_country;?>
<?=$seller_location;?>
 

  <br />

<h3 class="style2">
<?=MSG_AUCTION_ID;?>
: 
<?=$item_details['reverse_id'];?>

<? if ($ad_display == 'live') { ?>
&nbsp;&nbsp;|&nbsp;&nbsp;

До закрытия
<?=time_left($item_details['end_time']); ?>
<? } ?>
<? if ($ad_display == 'live') { ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
<?=MSG_ITEM_VIEWED;?>
<span class="redfont">

<b><?=($item_details['nb_clicks']+1); ?></b>
</span>
<? } ?>
</h3>
<? if ($ad_display == 'live') { ?>
 </h3>


</div>
</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
   <tr valign="top">
      
<td width="100%" align="center" valign="top">

 
<div class="itemidend">
<table width="100%" border="0" cellpadding="3" cellspacing="1">
               
<tr valign="top" align="center">
                  
<? if ($session->value('user_id')) { ?>
                  
<td nowrap width="96%" >
                  	
<div style="padding-bottom: 3px;">
                  		<b>
<?=MSG_WELCOME;?>
, 
<?=$session->value('username');?>
</b>           	  </div>
<? if ($item_details['owner_id'] == $session->value('user_id')) { ?>
						      
<? if ($item_details['active']==1)	{ ?>
						      <a href="reverse_manage.php?do=edit&reverse_id=<?=$item_details['reverse_id'];?>&edit_option=new">
<?=MSG_EDIT_AUCTION;?>
</a>
						      &nbsp;|&nbsp; <a href="members_area.php?do=delete_reverse&reverse_id=<?=$item_details['reverse_id'];?>&page=reverse&section=open" onClick="return confirm('<?=MSG_DELETE_CONFIRM;?>');">
<?=MSG_DELETE;?>
</a>
					         
<? } ?>
                     
<? } ?>            </td>
<? } else { ?>
                  
<td  width="4%" >

                     <a href="<?=process_link('login');?>">
OK                     </a>
                     
<?=MSG_STATUS_BIDDER_SELLER_C;?>
</td>
<? } ?>
          </tr>
</table>
<? } ?>
<br>
<br>
      </div>
         <div><img src='themes/<?=$setts['default_theme'];?>"/img/pixel.gif' width='1' height='3'></div>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>

               
<td width="92%">
<table width="100%" border="0" cellpadding="3" cellspacing="1">
                     
<tr>
                        
<td ><a href="<?=process_link('index');?>"><img src="themes/<?=$setts['default_theme'];?>/img/arrow.gif" align="absmiddle" border="0" hspace="5"></a> 
                  <a href="<?=process_link('index');?>"> 
               Home
                  </a></td><td  width="20%" align="center"><a href="<?=process_link('reverse_auctions');?>">
</a>
               <a href="<?=$search_url;?>">
</a></td>
<td  width="71%" align="center"><a href="<?=$search_url;?>">
<? if (!empty($search_url)) { ?>
<?=MSG_BACK_TO_SEARCH_PAGE;?>
</a> 
               
<? } ?>
<?=$main_category_display;?>
<b>:
<?=$addl_category_display;?>
</b></td>
</tr>
                     

</table>
</td>
            </tr>
         </table></td>
      
<td  width="0%">
      	
<div  >            </div>		</td>
   </tr>
</table>
 

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><h3 class="style2">
<td align="center">
<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>

                           <? if (!empty($item_can_bid['display'])) { ?>
                           
<div > 
                              
<?=$item_can_bid['display'];?>
                           </div>
                           

                           
<? } ?>
					

</td></h3>
</tr>
</table>
<div >

   <div   >
      <div >
         <table width="100%" border="0" cellspacing="10" cellpadding="0">
            <tr>
               
<td align="center">
               	
<? if (!empty($direct_payment_box)) { ?>
						<table width="100%" border="0" cellspacing="1" cellpadding="3">
                     <tr>
                        <td ><?=MSG_DIRECT_PAYMENT;?></td>
                     </tr>
						   <? foreach ($direct_payment_box as $dp_box) { ?>
						   <tr>
						      <td><?=$dp_box;?></td>
						   </tr>
						   <? } ?>
                  </table>  
                  <br>
                  <? } ?>     
               	<table width="100%" border="0" cellspacing="1" cellpadding="3">
                     <tr valign="top">
                        <? if (!empty($item_details['ad_image'][0])) { ?>
                        

                        <? } ?>
                        
<td width="100%" align="center">
<!-- Start Table for item details -->
                           
<? if ($item_can_bid['result']) { ?>
                           <br>
                           <table width="100%" border="0" cellpadding="1" cellspacing="8" class="border c1">
                              <form action="reverse_bid.php" method="post">
                                 <input type="hidden" name="reverse_id" value="<?=$item_details['reverse_id'];?>">
                                 <input type="hidden" name="action" value="bid_confirm">
                                 <tr>
                                    
<td width="38%">
     
	 
 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	                                	
<? if ($item_can_bid['show_box']) { ?>
                                       

                                       <b>                                        </b>
<td width="62%">
<input class="placebid" name="form_place_bid" type="submit" id="form_place_bid" value="Написать предложение" <? echo (!$item_can_bid['result'] || $blocked_user) ? 'disabled' : ''; ?>>
                                       <? } ?>
                                   </td>
                                 </tr>
                              </form>
                           </table>
                           <br>
                           <? } ?>
   
						   

</td>
                        
<td width="0%">
</td>
                     </tr>
                 </table>
				 
<? if ($item_details['nb_bids']) { ?>
			         <br>
	<h3 class="style2">		         
<table width="100%" border="0" cellpadding="3" cellspacing="2" >
			            
<tr align="center">
			               

</tr>
			            
<tr>
			               
</tr>
			            

				         
<tr class="c5">
					         
<td width="100%" align="center"><font color="#FFFFFF"><img src="themes/<?=$setts['default_theme'];?>/img/pixel.gif" width="100%" height="4">Предложение пользователей -
<?=$item_details['nb_bids'];?>
</font></td>
<td align="center"><img src="themes/<?=$setts['default_theme'];?>/img/pixel.gif" width="444" height="4">
<font color="#FFFFFF">
<?=MSG_LOCATION;?>
</font></td>
</tr>
				         
<?=$bids_placed_table;?>
			         
</table></h3>
			       
			         
<? } ?>
 
				 
				 
				 
				 
				 
				 
<br>
<h3 class="style2"> 
                  <table width="100%" border="0" cellspacing="1" cellpadding="3">
                     <tr>
                        
<td colspan="2"   align="center"><b> 
<?=GMSG_DESCRIPTION;?>
 </b>

  <div class="wite" > 
 
  
<?=database::add_special_chars($item_details['description']);?> </div> 
 
  
<? if ($item_details['addl_category_id']) { ?>
<?=$addl_category_display;?>
                   
<? } ?>
  </td>
                    </tr>
                     <tr>
                        
<td colspan="2">


</td>
                     </tr>
                  </table></h3> 
    
  
                  </td>
            </tr>
         </table>
      </div>

   </div>
</div>

	    