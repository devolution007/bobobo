<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?> <br />
<br /><div class="row">   <div class="row col-md-8">88888888 </div>
     <div class="col-md-4">  <div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action nav-link active" href="wanted_ads.php">  <?=($nb_items == 1) ? MSG_ITEM_FOUND : MSG_ITEMS_FOUND;?>&nbsp;<?=$nb_items;?> </a>
<?=$subcategories_content;?>
</div></div>  </div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

9999999999999999999
  <? if ($setts['enable_reverse_auctions'] && $layout['r_recent_nb']) { ?>   <div class="row"> <?=$browse_reverse_content;?>  </div>      
               <div align="right" style="padding: 5px;" class="conte"><a href="<?=process_link('reverse_auctions');?>">
              Разное из  мира ИТ  </a> </div>   

                <? if ($nb_items>0) { ?>
              
                <? } ?> <? } ?> 
 
<br />
  <div class="row col-md-12">
    <div class="col-md-8"><a href="<?=process_link('reverse_auctions');?>">
              Разное из  мира ИТ  </a>  <? if ($setts['enable_header_counter']) { ?>   <?=$nb_site_users;?>    <?=$nb_live_auctions;?> <?=$nb_live_wanted_ads;?>     <?=$nb_online_users;?>  <? if ($is_news && $layout['d_news_box']) { ?>
   <?=$news_box_header;?>
   <?=$news_box_content;?>
   <? } ?> <? } ?>	 <span class="d-block p-2 bg-primary text-white s "> <i class="icon-tags"></i> &nbsp;Сервисная книга  </span>		
<span class="d-block p-2 alert     "> </span>	    
	
    </div> </div>  
	
	  <? if ($setts['enable_reverse_auctions']) { ?>
      <td nowrap class="top" width="<?=$header_cell_width;?>"><a href="<?=process_link('reverse_auctions');?>"><img src="themes/<?=$setts['default_theme'];?>/img/i_reverse.gif" border="0"></a></td>
      <? } ?>
      <? if ($setts['enable_wanted_ads']) { ?>
      <td nowrap class="top" width="<?=$header_cell_width;?>"><a href="<?=process_link('wanted_ads');?>"><img src="themes/<?=$setts['default_theme'];?>/img/i_ads.gif" border="0"></a></td>
      <? } ?>
	  
	  
   
 <br />

 
 <br />
	 </div> 
	 <div class="col-md-4">fgdfg 
  

  <hr class="my-4">
  
  <div class="row">   <div class="col-md-4">  </div>   </div> 
 
 

   <?
	$counter = 0;
	for ($i=0; $i<$featured_ra_columns; $i++) { ?>

      <?
      for ($j=0; $j<$layout['r_hpfeat_nb']; $j++) {
			$width = 100/$layout['r_hpfeat_nb'] . '%'; ?>     
      <?
      	if (!empty($ra_details[$counter]['name'])) {
      		$auction_link = process_link('reverse_details', array('name' => $ra_details[$counter]['name'], 'reverse_id' => $ra_details[$counter]['reverse_id']));?>
  <div class="card bg-light mb-3" "><div class="card-header">  <a href="<?=$auction_link;?>"><?=title_resize($ra_details[$counter]['name']);?></a></div><div class="card-body">      
                     
                        <b><?=MSG_BUDGET;?>:</b> <? echo $feat_fees->budget_output($ra_details[$counter]['budget_id'], null, $ra_details[$counter]['currency']);?>   
                 
      
 
 
    <h5 class="card-title"> <? echo show_date($ra_details[$counter]['start_time']); ?> </h5>
    <p class="card-text"> <? echo $ra_details[$counter]['bold'];?>   <? echo $ra_details[$counter]['hl'];?>Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
 </div>  </div>
         <? $counter++;
      	} ?> 
      <? } ?>

   <? } ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 99999999999999999999999999999999999
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

<br />
 
99999999999999999999999999999999999
   <?
	$counter = 0;
	for ($i=0; $i<$featured_ra_columns; $i++) { ?>

      <?
      for ($j=0; $j<$layout['r_hpfeat_nb']; $j++) {
			$width = 100/$layout['r_hpfeat_nb'] . '%'; ?>     
      <?
      	if (!empty($ra_details[$counter]['name'])) {
      		$auction_link = process_link('reverse_details', array('name' => $ra_details[$counter]['name'], 'reverse_id' => $ra_details[$counter]['reverse_id']));?>
  <div class="card bg-light mb-3" "><div class="card-header">Header</div><div class="card-body">       <a href="<?=$auction_link;?>"><?=title_resize($ra_details[$counter]['name']);?></a> 
                     
                        <b><?=MSG_BUDGET;?>:</b> <? echo $feat_fees->budget_output($ra_details[$counter]['budget_id'], null, $ra_details[$counter]['currency']);?>  <br> <b><?=MSG_NR_BIDS;?>:</b> <? echo $ra_details[$counter]['bold'];?> <br>
                           <b><?=MSG_NR_BIDS;?>:</b> <? echo $ra_details[$counter]['hl'];?> <br>
                           <b><?=MSG_ENDS;?>:</b> <? echo show_date($ra_details[$counter]['start_time']); ?>  
                 
      
 
 
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
 </div>  </div>
         <? $counter++;
      	} ?> 
      <? } ?>

   <? } ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 