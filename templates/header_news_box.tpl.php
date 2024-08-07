<?
#################################################################
## PHP Pro Bid v6.00															##
##Asus Apple Acer DELL SONYAsus Apple Acer DELL SONY##
## Copyright �2007 PHP Pro Software LTD. All rights reserved.	##
##Asus Apple Acer DELL SONYAsus Apple Acer DELL SONY##
#################################################################

if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
	
			
 <li class="list-group-item d-flex justify-content-between align-items-center  bg-secondary">
 <a   class="text-white"  href="register.php"><i class="fas fa-handshake"></i>&nbsp; Администрация  сайта </a> 
    <span class="badge badge-dark badge-pill">  <i class="icon-group"></i> </span>
  </li>
<?	while ($news_details = $db->fetch_array($sql_select_news)) { ?>
			 
				<li  class="list-group-item d-flex justify-content-between align-items-center bg-dark text-white  ">
				  <a  class="text-white" href="<?=process_link('content_pages', array('page' => 'news', 'topic_id' => $news_details['topic_id']));?>">   <i class=" icon-tag"></i> 
      <?=$news_details['topic_name'];?>
        </a></li>
			 
			 <? } ?>
 