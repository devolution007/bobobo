<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- boboboru -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9257250722436872"
     data-ad-slot="8420648481"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
 
<div class="d-lg-none"><br />
<br />
<br />
</div> 

  
  
 
<br /><?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
 
     <? if ($item_details['owner_id'] == $session->value('user_id')) { ?><h6> <footer class="blockquote-footer"> Оформи <a href="about_me,page,view,section,members_area"><strong>  свою личную страницу </strong></a> и все узнают о твоей компании.</h3>  </footer> </h6><? } else { ?> <? } ?>
	 
<span class="col-lg-12  d-none d-lg-block">
<div class="row">  
      <div class="col-lg-10"> 
	
 
<h2 class="tit1"><?=$user_details['username'];?> </h2>  <h1 class="display-4 d-none d-lg-block">  <?=$item_details['name'];?></h1>  
 <h6> <h3 class="tit2">  Бюджет покупки &nbsp; <span class="badge  badge-primary badge-pill" style="font-size:18px;color:#ffffff;" ><?=$item_details['zip_code'];?>&nbsp;   <i class="fa fa-rub" aria-hidden="true"></i></span>   </h6> </div>  
 
   <div class="col-lg-2" > 
   
   
      <h6 class="display-6 d-none d-lg-block corners10"> 
<span class="fa-stack fa-2x">
<i class="fas  fa fa-rub  fa-stack-2x" style="color:#ffffff;"></i>  <i class="  fa-stack-1x" style="font-size:18px;color:#000;"><?=$item_details['zip_code'];?></i>
</span> </h6> 
   
   
     </div> </div></span>  	 
	 
 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 





 <hr class="my-2">
 <span class="d-block p-2 bg-info text-white style1"> <i class="icon-tags"></i>  &nbsp;<?=$main_category_display;?>&nbsp; <?=$addl_category_display;?></span>	
<span class="d-block p-2 bg-dark text-white">  user &nbsp;<a href="#" data-panel="right" class="open-panel"><strong><?=$user_details['username'];?></strong></a> &nbsp;    <i class="icon-date"></i><i class="icon-calendar"></i>&nbsp;<?=GMSG_START_TIME;?><?=show_date($item_details['start_time']); ?>&nbsp; <?=item::item_status($item_details['closed']); ?> &nbsp;<i class="icon-tags"></i>  &nbsp;
            <?=($item_details['nb_clicks']+1); ?>    </span>      <br />

 














 

 <div class="row">
        <div class="col-lg-8  "> 
		<ul class="list-group">
  <li class="list-group-item  "> <!-- AddThis Button BEGIN -->
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
<!-- AddThis Button END -->	</li>
  <li class="list-group-item">
 
    <hr class="my-2"> 
  
  
   <?=database::add_special_chars($item_details['description']);?><br />  <hr class="my-4">
    <div class="container">
	
<img name="main_ad_image" src="<?=SITE_PATH;?>thumbnail.php?pic=<?=$item_details['ad_image'][0];?>&w=650&sq=N&b=N" border="0" alt="<?=$item_details['name'];?>"     style="width:100%;"> 	
	
 
  <div class="text-block">
    <h4><?=$item_details['name'];?></h4>
    <p><?=$item_details['zip_code'];?></p>
  </div>
</div> 
   
      </li>
		
</ul>
 
 	</div>  
   
   
  		 
   <div class="d-none d-lg-block d-md-block col-lg-4">
   <? if ($item_details['owner_id'] == $session->value('user_id')) { ?>  for own <? } else { ?><ul class="list-group">
  <li class="list-group-item  bg-info"> Покупатель <?=$user_details['username'];?><br /><?=MSG_REGISTERED_SINCE;?>  <?=show_date($user_details['reg_date'], false);?> 
 </li>
  <li class="list-group-item"><?=user_pics($user_details['user_id']);?> </li>
  <li class="list-group-item "> <i class="fas fa-subway"></i>   Метро   
               	<? echo M . ' <b>' . $seller_country . '</b>'; ?> </li>   
  <li class="list-group-item"><a class="myButton2 " href='javascript:;' onClick=showTooltip() id="link"> <i class="fas  fa-phone " style="font-size:22px;color:#007BFF;"></i>  +7xxx-xxx-xx-xx  </a>
            <div id=tooltip style='display: none'>
              <?=$user_details['phone'];?>
    </div></a> </li>
 
</ul> <? } ?>
 <? if ($item_details['owner_id'] == $session->value('user_id')) { ?>
 <ul class="list-group">
  <li class="list-group-item bg-info"><?=$user_details['username'];?> <i class=" icon-key"></i> </li>
   <li class="list-group-item">
   
           <? if ($member_active == 'Active') { ?>
		  <i class="fas  fa-user " style="font-size:32px;color:#007BFF;"></i>
                     <?=MSG_WELCOME_BACK;?>, <b> <?=$member_username; ?> </b>  
                 
                     <? } else { ?>


 <? } ?>
 </li>
   <li class="list-group-item">  <?=MSG_WANTED_AD_ID;?>:  <?=$item_details['wanted_ad_id'];?> </li>  
  
  <li class="list-group-item">  <a href="members_area.php?do=delete_wanted_ad&amp;wanted_ad_id=<?=$item_details['wanted_ad_id'];?>&amp;page=wanted_ads&amp;section=open&amp;start=0&amp;limit=20&amp;order_field=w.wanted_ad_id&amp;order_type=DESC" onclick="return confirm('Вы уверены, что желаете удалить эту запись?');"> 
                          <button class="btn  btn-danger">&nbsp; <i class=" icon-trash"></i>&nbsp;   Удалить           </button>
                          </a>  </li>
  <li class="list-group-item">  <a href="edit,do,<?=$item_details['wanted_ad_id'];?>,wanted_ad_id,new,edit_option,wanted_manage">  
   <?=MSG_EDIT_AUCTION;?>     </a>  </li>  
   
    <li class="list-group-item">  <?=user_pics($user_details['user_id']);?> </li> 
                                
      <li class="list-group-item "> <i class="fas fa-subway"></i>   Метро   
               	<? echo M . ' <b>' . $seller_country . '</b>'; ?> </li>  <? } else { ?>
				
		<li class="list-group-item">  <? if ($member_active == 'Active') { ?> Если вы не согласны с покупателем пишите админу <? } else { ?> <form action="<?=($setts['enable_enhanced_ssl']) ? $setts['site_path_ssl'] : SITE_PATH;?>login.php" method="post">
 <input type="hidden" name="operation" value="submit">
 <input type="hidden" name="redirect" value="<?=$redirect;?>">
 	
<table width="100%" border="0" cellpadding="3" cellspacing="3" align="center">
   <tr>
   <td  ><input name="username" type="text" id="username" class="form-control"></td>
   </tr>
   <tr>
 
  <td><input name="password" type="password" id="password"  class="form-control"></td>
   </tr>
   <tr>
  <td align="center" colspan="2"><input type="checkbox" name="remember_username" value="1"> <?=MSG_REMEMBER_ME;?></td>
   </tr>
   <tr>
  <td colspan="2" align="center"><button class="btn btn-info "> <?=MSG_LOGIN_TO_MEMBERS_AREA;?>
  </button>  </td>
   </tr>
</table>
 </form>    <? } ?>  </li>		
			<li class="list-group-item">             			                  
  <? if ($session->value('user_id')) { ?>

	 <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report', 'auction_id' => $item_details['auction_id']));?>"> 
   
     <font color="#FF0000">Продавец нарушает ?  </font>  
  </a>  <a class="btn btn-danger" href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report', 'auction_id' => $item_details['auction_id']));?>">&nbsp;<i class="icon-comments-alt"></i>&nbsp;майл админу&nbsp;</a>  
	
	
 <? } else if (!$session->value('user_id')) { ?>     <a class="btn" href="selling,page,block_users,section,members_area"><i class="icon-thumbs-down"></i>&nbsp;Внести в черный список</a> <h4 class="alert-heading"><?=$session->value('username');?></h4> 
      	

            
   <? } ?>   <? } ?>     

       </li>	
</ul>    
             
 
	 
	 
	 
	 
	 

<br />
 

<span class="d-block p-2 bg-info text-white "> <i class="icon-tags"></i>   </span>		
 <?=$subcategories_content;?> 
  
	  
	  
	  
	  
	  
	  
  
   </div> 


  </div>
 
 
                 
                          
                   
  

                   
       
     
 
					
			
			
			
			
			
			
			
			
			
			</p>    </b>
    
 <?=$public_questions_content;?>
 
				
  <form name="hidden_form" action="wanted_details.php" method="get">
   <input type="hidden" name="option" />
   <input type="hidden" name="wanted_ad_id" />
   <input type="hidden" name="message_content" />
   <input type="hidden" name="question_id" />
</form>
 

    </section>



         
 
                <? if ($setts['enable_asq']) { ?>
  <b><?=MSG_ASK_SELLER_QUESTION;?></b> 

	
	<? if ($session->value('adminarea') == 'Active') { ?>
 <?=MSG_QUESTIONS_LOGGED_AS_ADMIN;?>
	<? } else if (!$session->value('user_id')) { ?>
  <?=MSG_LOGIN_TO_ASK_QUESTIONS;?>
	<? } else if ($session->value('user_id') == $item_details['owner_id']) { ?>
  <?=MSG_CANT_POST_QUESTION_OWNER;?>
	<? } else { ?>
 
   <form action="wanted_details.php" method="POST" class="af-form" id="af-form">
  

                          	<input type="hidden" name="wanted_ad_id" value="<?=$item_details['wanted_ad_id'];?>">
   	<input type="hidden" name="option" value="post_question">   

          
                           
                        <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text">Ваши воросы для<br /><?=$user_details['username'];?>
 </span>
  </div>
    <textarea name="message_content" class="form-control" cols="40" rows="3"  ></textarea>  
 
</div>  

                              
                                      
                                        
                          
  
 
                                        <select name="message_handle" >
                                           <? if ($user_details['default_public_questions']) { ?>
                                                        <option value="4" selected>
                                                        <?=MSG_POST_QUESTION_PUBLICLY;?>
                                          </option>
                                           <? } ?>
                                                        <option value="5">
                                                        <?=MSG_POST_QUESTION_PRIVATELY;?>
                                          </option>
                                                         </select>
                                                          </div>
                                  </div>
                  <div >
                     <div align="center">
                       <input class="btn btn-success" name="form_post_question" type="submit" id="form_post_question"  value="<?=GMSG_SUBMIT;?>" />
                        </div>
                  </div>
                                </div>

                            </div>
                      </form>
                    </div>
               
        
             
    
<?=MSG_WELCOME;?>
    
<?=$session->value('username');?>   
 

    
<? if ($ad_display == 'live') { ?> <? } ?>	
            
   <? } ?>
   <? } ?>


<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
 

<br>


 
  
 




<? if ($ad_display == 'live') { ?>



 
<?=MSG_THE_POSTER;?>
 
  
<?=$user_details['username'];?>
 
  
<?=MSG_ASSUMES_RESP_EXPL;?>
 
  <? } ?>.

		
		

		



<!-- Modal -->
 <?=MSG_POSTER_INFORMATION;?> <?=$user_details['username'];?> 
  
 

	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 

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
<br />
 
   
 