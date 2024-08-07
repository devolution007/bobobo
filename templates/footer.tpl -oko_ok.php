<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>  
<hr class="my-4">

<br /> 
<script language="JavaScript" type="text/javascript">
function genRandom(num) {
var tempString = ""
tempString += (Math.random() * num) + 1
rstring = parseInt(tempString)
return rstring }
function addNol(num){
temp=String(num)
if (num<10) {temp="0"+String(num)}
return temp}
var cat  = new Array ("эффекты при наведении","Админки","шрифтовые иконки","Плагины","Изображения","Google Map","AJAX Bootstrap","шаблоны","Галерея","Иконки","Меню","Кнопки","Премиум","формы","Интернет-магазин","Веб-дизайн","Комментарии","Анимация","QR код SEO","Рейтинг");
ab=0;
document.write('<footer class="blockquote-footer">	<cite title="Source Title"> ');
for (a=0; a < 5; a++){document.write('<div>');
for (b=0; b < 4; b++){document.write('<div >');
//document.write('<font face="Arial" size=3><b>'+cat[ab].toUpperCase()+'<br>Блог</b></font><br>');
for (c=0; c < 1; c++){
document.write('<a href=');
if (genRandom(100)>0) {document.write('auction_search.php?keywords_search='+cat[ab]+'');}
else {document.write('auction_search.php?keywords_search');}
document.write(' onMouseOver=\"window.status=\'auction_search.php/'+cat[ab]+'/'+(c+1)+'.html\'; return true;\" onMouseOut=\"window.status=\'\';\">'+cat[ab].toUpperCase()+' CSS PHP </a> ');}
document.write('');
document.write('');
document.write('</div>');ab++}
document.write('</div>');}
document.write('</cite></footer> ');
</script>
<nav class=" fixed-bottom navbar-dark bg-dark text-white">

<div class="row"> 
      <div class="col-lg-4">333333</div> 
      <div class="col-lg-4"><a href="<?=$index_link;?>">
        <?=MSG_BTN_HOME;?>
        </a>
				
          <? if (!$setts['enable_private_site'] || $is_seller) { ?>
				| <a href="<?=$place_ad_link;?>">
                <?=$place_ad_btn_msg;?>
                </a>
				
          <? } ?>
				| <a href="<?=$register_link;?>">
                <?=$register_btn_msg;?>
                </a>
				| <a href="<?=$login_link;?>">
                <?=$login_btn_msg;?>
                </a>
				| <a href="<?=process_link('content_pages', array('page' => 'help'));?>">
                <?=MSG_BTN_HELP;?>
                </a>
				| <a href="<?=process_link('content_pages', array('page' => 'faq'));?>">
                <?=MSG_BTN_FAQ;?>
                </a>
			|<a href="<?=process_link('site_fees');?>">Доски </a>
          <? if ($layout['is_about']) { ?>
| <a href="<?=process_link('content_pages', array('page' => 'about_us'));?>">
 о проекте
</a>
<? } ?>  
    | <a href="<?=process_link('site_fees');?>"> 
 Профиль NSQ
    </a> 
 
    <? if ($layout['is_contact']) { ?>
| <a href="<?=process_link('content_pages', array('page' => 'contact_us'));?>">
<?=MSG_BTN_CONTACT_US;?>
</a> 
<? } ?></div>
      <div class="col-lg-4">gggggggggggggg </div></div>

 
  
</nav>
























  <br />

 
  
 
 
  
  
  

 





   <hr class="my-8"> 
 
789789

<div class="bg-info clearfix">
  <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
  <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
</div>
    AJAX Bootstrap BuddyPress Css Css3 E-mail E-mail шаблоны Google Map Html HTML5 Iphone JavaScript Jquery Landing Page Material Design Parallax PHP PSD QR код SEO webmail Wiki Woocommece Wordpress Адаптивность Админки Анимация Безопасность Бизнес Блог Веб-дизайн Видео Галерея Изображения Иконки Интернет-магазин Кнопки Комментарии Маркетинг Меню минимализм Мода Мокап Оптимизация Плагины Плеер Плоский стиль Полноэкранные изображения Порталы Портфолио Премиум Редактор Рейтинг Сервисы Скрипты Скроллинг Слайдер Социальные сети Спорт Фидбэк фоновое видео формы Форум Фреймворк Цвет Чат Шаблоны шрифтовые иконки эффекты при наведении 404 


 
  </body>
</html>