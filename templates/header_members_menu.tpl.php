<?
#################################################################
## PHP Pro Bid v6.10															##
##-------------------------------------------------------------##
## Copyright ©2007 PHP Pro Software Ldiv. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

if ( !defined('INCLUDED') ) { die("Access Denied"); }
 
?>  
 
 <a  class="btn btn-dark" href="about_me,page,profile,section,members_area">Оформите профиль </a><a  href="index.php">   </i> </a>   <br />
  Оформи <a href="about_me,page,view,section,members_area"><strong>  свою личную страницу </strong></a> и все узнают о твоей компании.
    <hr class="my-2">

 <div class="row ">

	 <? if ($member_active == 'Active') { ?> <div class="col-lg-4 "> <a class="list-group-item list-group-item-action bg-primary text-white"  href="sell_item.php"> &nbsp; <i class="fas   fa-piggy-bank " style="font-size:24px;color:#ffffff;"></i> &nbsp; Продать  </a>  </div>

 <div class="col-lg-4 "> <a  class="list-group-item bg-info text-white"  href="wanted_manage.php"> &nbsp; <i class="fas  fa-donate " style="font-size:22px;color:#fff;"></i> &nbsp; Купить  </a>  </div> <div class="col-lg-4 "> <a  class="list-group-item list-group-item-action bg-dark text-white"  href="reverse_manage.php">  <i class="fas  fa-cogs" style="font-size:24px;color:#ffffff;"></i>   Про сервис   </a>  </div> <? } else { ?>  
			  <? } ?> 	
 </div> 
 
 <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>  <hr class="my-4"><div class="alert alert-light" role="alert">

   <hr class="my-4">
<div class="bd-example bd-example-tabs">
  <div class="row">
    <div class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fas  fa-hand-holding-usd " style="font-size:20px;"></i> Я Продаю</a>
        <a class="nav-link  " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas  fa-chalkboard-teacher " style="font-size:20px;"></i> Мой профиль</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas  fa-book-reader " style="font-size:20px;"></i > Всякие Сообщения</a>
        <a class="nav-link  " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fas  fa-cash-register " style="font-size:20px;"></i>  Я покупаю</a>
		   <a class="nav-link" id="v-pills-data-tab" data-toggle="pill" href="#v-pills-data" role="tab" aria-controls="v-pills-data" aria-selected="false"><i class="fas  fa-landmark " style="font-size:20px;"></i> Склад</a>	
	      <a class="nav-link" id="v-pills-service-tab" data-toggle="pill" href="#v-pills-service" role="tab" aria-controls="v-pills-service" aria-selected="false"><i class="fas fa-cogs" style="font-size:20px;"></i> Я ремонтирую</a>	
		  
	   <a class="nav-link" id="v-pills-util-tab" data-toggle="pill" href="#v-pills-util" role="tab" aria-controls="v-pills-util" aria-selected="false"><i class="fas  fa-drafting-compass " style="font-size:20px;"></i> Инструменты сайта</a>	  
		  
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
  

        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<ul class="list-group">
  <li class="list-group-item active">товары </li>
 
    <li class="list-group-item d-flex justify-content-between align-items-center"> <a  href="<?=process_link('members_area', array('page' => 'bidding', 'section' => 'won_items'));?>"><?=MSG_MM_WON_ITEMS;?></a><strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas fa-cash-register" style="font-size:20px;color:#fff;"></i> 
			
			</strong> </li>

 
 
 
 
  <li class="list-group-item d-flex justify-content-between align-items-center"><a  href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'closed'));?>">Закрыто (  возможность  повторения по одному клику)</a><strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas fa-archive" style="font-size:20px;color:#fff;"></i> 
 </strong>  </li>
 
   <li class="list-group-item d-flex justify-content-between align-items-center"> <a  href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'sold'));?>">Продал ( Просмотр проданных позиций и ответ покупателю )</a><strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas fa-cash-register" style="font-size:20px;color:#fff;"></i> 
			
			</strong> </li>
			
			
			
			
			
			
			
			
			
			
			
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'bids_offers'));?>">Торг</a>  <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas   fa-folder-open " style="font-size:20px;color:#fff;"></i> 
			
			</strong>   </li>
   <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'drafts'));?>"><?=MSG_MM_DRAFTS;?></a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas  fa-pen-nib " style="font-size:20px;color:#fff;"></i> 
			
			</strong>  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'open'));?>">Открыто</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas   fa-folder-open " style="font-size:20px;color:#fff;"></i> 
			
			</strong>   </li>
  
</ul>  </div>




  
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <ul class="list-group">
  <li class="list-group-item active">Настройка почты и страниц о себе</li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a  href="<?=process_link('members_area', array('page' => 'about_me', 'section' => 'profile'));?>">   Профайл</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fab fa-twitter" style="font-size:20px;color:#fff;"></i>
			
			</strong>    </li>
 
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'reputation', 'section' => 'sent'));?>"><strong>&#9679;&nbsp;Поставть оценки покупателю - </strong><span >( Можно поставить оценки покупателю и написать пожелания в его профиль  )</span></a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'about_me', 'section' => 'view'));?>">Обо мне</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
 <i class="fas fa-user-cog" style="font-size:20px;color:#fff;"></i>  
</strong> </li>

<li class="list-group-item d-flex justify-content-between align-items-center"><a  href="<?=process_link('members_area', array('page' => 'account', 'section' => 'editinfo'));?>">Редактор</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
 <i class="fas fa-drafting-compass " style="font-size:20px;color:#fff;"></i>
</strong> </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'mailprefs'));?>">Почта </a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >  
 <i class="fas fa-at " style="font-size:18px;color:#fff;"></i>  
</strong></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'editinfo'));?>"> 
              
&#9679;&nbsp;<?=MSG_MM_PERSONAL_INFO;?>
              </a></li>






</ul></div>
      
  
  
        <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
          <ul class="list-group">
  <li class="list-group-item active">можно расположить резюме или рекламу о себе - Удобно админам, фрилансерам</li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'reverse', 'section' => 'new_auction'));?>">  
        Freelance  Настройка Service </a> . СЦ </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <a href="<?=process_link('members_area', array('page' => 'reverse', 'section' => 'open'));?>"> Открытые </a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'reverse', 'section' => 'closed'));?>"> Закрытые </a></li>
 
</ul>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
         <ul class="list-group">
  <li class="list-group-item active"> Service настройка страниц вашего сервиса</li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <a   href="<?=process_link('members_area', array('page' => 'messaging', 'section' => 'received'));?>"> Входящие</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
  <i class="fas fa-envelope-open" style="font-size:22px;color:#fff;"></i>
			
			</strong>  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'messaging', 'section' => 'sent'));?>">Отправлено</a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
  <i class="fas fa-share-square" style="font-size:22px;color:#fff;"></i>
			
			</strong>   </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'reputation', 'section' => 'received'));?>"> Просмотр своей репутации после продажи</a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'reputation', 'section' => 'sent'));?>"><strong>&#9679;&nbsp;Поставь оценки покупателю </strong></a></li>
</ul>
        </div>
		
		
	        <div class="tab-pane fade" id="v-pills-util" role="tabpanel" aria-labelledby="v-pills-service-tab">
          <ul class="list-group">
  <li class="list-group-item active"> Util</li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'block_users'));?>">в БАН  </a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" ><i class="far fa-angry" style="font-size:20px;color:#fff;"></i>	</strong>  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a class="list-group-item list-group-item-action" href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report'));?>"><?=MSG_MM_ABUSE_REPORT;?>  </a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <a   href="<?=process_link('members_area', array('page' => 'bidding', 'section' => 'keywords_watch'));?>"><?=MSG_MM_KEYWORDS_WATCH;?></a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"><a  href="<?=process_link('members_area', array('page' => 'selling', 'section' => 'prefilled_fields'));?>">
  
  <?=MSG_MM_PREFILLED_FIELDS;?>( предварительно заполненное- шаблон)
 </a> <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas fa-cash-register" style="font-size:20px;color:#fff;"></i> 	</strong></li>
    <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'bidding', 'section' => 'keywords_watch'));?>" > 
                <b><font color="#FF0000"> ШЕРЛОК </font></b></a> - интересная  и нужно </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
	
	
	
	      	&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'editinfo'));?>"><?=MSG_MM_PERSONAL_INFO;?></a><br>
      	&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'management'));?>"><?=MSG_MM_MANAGE_ACCOUNT;?></a><br>
      	<!--&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'invoices'));?>"><?=MSG_MM_INVOICES;?></a><br>-->
      	&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'history'));?>"><?=MSG_MM_ACCOUNT_HISTORY;?></a><br>
      	&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'mailprefs'));?>"><?=MSG_MM_MAIL_PREFS;?></a><br>
      	&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'abuse_report'));?>"><?=MSG_MM_ABUSE_REPORT;?></a>
      	<? if ($setts['enable_refunds']) { ?>
      	<br>&raquo; <a href="<?=process_link('members_area', array('page' => 'account', 'section' => 'refund_requests'));?>"><?=MSG_MM_REFUND_REQUESTS;?></a>
      	<? } ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</li>
  
</ul>
        </div>	
		
		
		 <div class="tab-pane fade" id="v-pills-data" role="tabpanel" aria-labelledby="v-pills-data-tab">  <li class="list-group-item active"> DATA</li>
	 <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'bidding', 'section' => 'favorite_stores'));?>">Склад см </a>	  <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" ><i class="far fa-angry" style="font-size:20px;color:#fff;"></i>	</strong> </li>
	  <li class="list-group-item d-flex justify-content-between align-items-center"><a class=" " href="<?=process_link('members_area', array('page' => 'store', 'section' => 'subscription'));?>">666666666</a></li>
	  <li class="list-group-item d-flex justify-content-between align-items-center">	 <a class=" " href="<?=process_link('members_area', array('page' => 'store', 'section' => 'store_pages'));?>">Включить и оформить СКЛАД</a></li>
	  <li class="list-group-item d-flex justify-content-between align-items-center">	   <a class=" " href="<?=process_link('members_area', array('page' => 'store', 'section' => 'setup'));?>">88888888888888888</a></li>
		</div>	
		
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
         <ul class="list-group">
  <li class="list-group-item active bg-info"> Объявления о моих покупках</li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <a   href="<?=process_link('members_area', array('page' => 'wanted_ads', 'section' => 'closed'));?>">Купил?</a></li>
  
   <li class="list-group-item d-flex justify-content-between align-items-center"><a href="<?=process_link('members_area', array('page' => 'bidding', 'section' => 'item_watch'));?>"> Отслеживаемые товары </a>  <strong class="badge  badge-primary badge-pill" style="font-size:20px;color:#ffffff;" >
<i class="fas fa-paperclip" style="font-size:20px;color:#fff;"></i> 
			
			</strong>  </li>
 
  
  <li class="list-group-item d-flex justify-content-between align-items-center"><a   href="<?=process_link('members_area', array('page' => 'wanted_ads', 'section' => 'closed'));?>"><?=MSG_MM_CLOSED;?></a></li>
  <li class="list-group-item d-flex justify-content-between align-items-center"> <a  href="<?=process_link('members_area', array('page' => 'wanted_ads', 'section' => 'open'));?>"> Куплю сейчас</a></li>

</ul>
        </div>
      </div>
    </div>
  </div>
</div>
<br />


    This is a primary alert—check it out!
</div>

  <? } else { ?> <? } ?>


<hr class="my-2">
 <? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?>

 

<? } else {?>  <? } ?>   

 