<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?><table width="99%" border="0" cellspacing="3" cellpadding="3">
  <tr>
    <td><div align="center"><br />
 
  <br />
  
  <?=$banner_header_content;?>  Чтобы получить максимально точную картину технического состояния ноутбука, мастер проводит тестирование всех его ключевых узлов.<br />

    По завершении диагностических мероприятий клиенту предоставляется подробное заключение с перечислением выявленных неисправностей, необходимых для их устранения работ и запасных частей.<br />

    Ремонтные работы начинаются только после согласования с клиентом.<br />


Диагностика ноутбука может (и должна) производиться не только в тех ситуациях, когда он уже отказался работать, и требуется восстановление его функциональности. Периодическая диагностика в профессиональном сервисе даст вам возможность не доводить устройство до такого состояния, определив потенциальный риск поломки на ранней стадии и своевременно его устранив.
 							
	<hr class="my-2">	Бесплатная настройка LINUXMINT 
 - системы  с свободным ПО	&nbsp; + 7 931 100 64 54&nbsp;&nbsp;
+ 7 812 961 38 38  <br /></div></td>
  </tr>
</table>

<div align="center">
  
  
</div>
<div  class="fixed-bottom   bg-dark  d-none d-lg-block">

  
   <div align="center"><a href="<?=$index_link;?>">
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
<? } ?> 
  
 




<?=GMSG_PAGE_LOADED_IN;?> 
<?=$time_passed;?> 
<?=GMSG_SECONDS;?>
<br />
 

 









   </div>
</div>
  
 
 
 
 
 


 


 
  </span>

 
 
  </body>
</html>