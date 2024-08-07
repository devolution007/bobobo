<?
#################################################################
## PHP Pro Bid v6.07															##
##-------------------------------------------------------------##
## Copyright ©2007 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<br />
<br />
<br />


	
 <!-- time -->   <div class="row">
		<? if ($layout['nb_ending_auct']) { ?>
    
        
			<? 
		   $columns = 3;
		   $nb_ending = $db->num_rows($sql_select_ending_items);
		   
			for($i = 0; $i < $nb_ending; $i++) 
			{
				$item_details = mysql_fetch_array($sql_select_ending_items);
				$main_image = $db->get_sql_field("SELECT media_url FROM " . DB_PREFIX . "auction_media WHERE auction_id='" . $item_details['auction_id'] . "' AND media_type=1 AND upload_in_progress=0 ORDER BY media_id ASC LIMIT 0,1", 'media_url');

				$item_details['max_bid'] = ($item_details['max_bid'] > 0) ? $item_details['max_bid'] : $item_details['start_price'];
		
				$background = ($item_details['bold']) ? ' bold_item' : '';
				$background .= ($item_details['hl']) ? ' hl_item1' : '';
				
				if($i % $columns == 0) { ?>
          
            <? } ?>
                 <div class="col-md-4 filter  <?=$item_details['zip_code'];?>"  <?	if((($item_details['end_time'] - CURRENT_TIME) <= 86400) && $item_details['auction_type'] != 'first_bidder') /* 1day = 86400 sec */ { echo "day"; }?> 
						<?	if((($item_details['end_time'] - CURRENT_TIME) <= 3600) && $item_details['auction_type'] != 'first_bidder') /* 1hour = 3600 sec */ { echo "hour"; }?>' >
           <br /> <div class="each-item">
						
                                
                  <a class="list-group-item  list-group  bg-primary text-white" href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"><?=title_resize($item_details['name']);?></a>
        
		    <div align="center" class="bg-dark text-white"> 
                   <a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"><img class=" grey corners4" src="<? echo ((!empty($main_image)) ? 'thumbnail.php?pic=' . $main_image . '&w=' . 400 . '&sq=Y' : 'themes/' . $setts['default_theme'] . '/noimg.png');?>" border="0" width="400" alt="<?=title_resize($item_details['name']);?>"></a>    </div> 
                           
                        
				    <div class="cap1"> <h6>  <a class="list-group-item  list-group  bg-dark text-white" href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"> <?= $item_details['hl'] ;?> </a></h6>
                  
                    <p>  <a href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>"> <i class="fa fa-calendar" aria-hidden="true"></i> 
   <?=show_date($item_details['start_time']);?> <br />
                         
 <?=item_pics($item_details);?>

                          <br />
							<i class="fa fa-shopping-bag" aria-hidden="true"></i>
  <?=$item_details['zip_code'];?>
                          
                           </a> </p>
             </div>
                <div class="cap2">
                    <p class="text-center"><a class="btn btn-dark" href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>" ><i class="fa fa-flag" aria-hidden="true"></i>
  <?=$item_details['bold'];?></a>   <?=MSG_TIME_LEFT;?>: <?=time_left($item_details['end_time']);?>
                    
                           <?=MSG_CURRENTLY;?>: <?=$fees->display_amount($item_details['max_bid'], $item_details['currency']);?>
                
                           <?=item_pics1($item_details);?></p>
                </div>
                  
            </div> <a class="list-group-item list-group-item-action p-3 mb-2 bg-light text-dark"  href="<?=process_link('auction_details', array('name' => $item_details['name'], 'auction_id' => $item_details['auction_id']));?>">  <?=MSG_START_BID;?>: <?=$fees->display_amount($item_details['start_price'], $item_details['currency']);?></a>
                   
      </div> 		
						
						
						
						
						
						
						
             
            <? if(($i % $columns) == ($columns - 1) || ($i + 1) == $nb_ending) { ?>
            </tr>
            <? } ?>
            <? } ?>
        </div>
      
		<? } ?>
		<hr class="my-2"> 
<!-- time2 -->
		