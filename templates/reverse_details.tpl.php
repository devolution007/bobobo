<?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?><?
if ( !defined('INCLUDED') ) { die("Access Denied"); }
?>
<!doctype html>
<html lang="en">
<head>
 <title> <?=$item_details['name'];?></title>
<meta name="bobobo.ru" content="<?=$page_title;?>" />
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Russian">
<meta name="revisit-after" content="2 days">
<meta name="author" content="bobobo"> 
<meta name="Keywords" content="объявления, parts, imac parts, ibook parts, ac adaptor, battary apple, апчасть аппле, доска, объявления, аймак, айпод, ремнот, дисплей,экран. " />
<meta name="Description" content="Объявление с доски оюъявлений bobobo.ru . <?=$item_details['name'];?> . Цена на ремонт и запчасть. <?=$item_details['bold'];?>. " />
 
<meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;"/>

<style type="text/css">
<!--
.round {border:1 px solid #cccccc;   text-align: center; }
.round,.round img {
width:  145px;
height:  145px;
-webkit-border-radius:6px; /* Saf3+, Chrome */
border-radius: 6px; /* Opera 10.5, IE 9 */
/*-moz-border-radius: 35px; Disabled for FF1+ */
text-align:center; 
filter: grayscale(100%)  ;
-webkit-filter: grayscale(100%) ;
   color: #000000;
  border-radius: 50%;
 }
.round {border:1 px solid #cccccc;   text-align: center; }
.round2,.round2 img {
width:  175px;
height:  175px;
-webkit-border-radius:6px; /* Saf3+, Chrome */
border-radius: 6px; /* Opera 10.5, IE 9 */
/*-moz-border-radius: 35px; Disabled for FF1+ */
text-align:center; 
filter: grayscale(100%)  ;
-webkit-filter: grayscale(100%) ;
   color: #000000;
  border-radius: 50%;
 }
.grey {
filter: grayscale(100%)  ;
-webkit-filter: grayscale(100%) ;
   color: #000000;

}

 
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

.file-upload {
    position: relative;
    overflow: hidden;
    width: 200px;
    height: 90px;
    background-color: #008cba;
    border-radius: 1px;
    color: #fff;
    text-align: center;
}
.file-upload {
    position: relative;
    overflow: hidden;
    width: 200px;
    height: 90px;
    background-color: #008cba;
    border-radius: 1px;
    color: #fff;
    text-align: center;
}
p {
    color: #234351;
    padding: 2px;
    margin: 5px 0 5px 0;
    text-align: justify;
}
.corners3 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 180px;
  height: 180px;
 text-align: center;

 border:1 px solid #fff;
} 

.corners33 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 160px;
  height: 160px;
 text-align: center;
 border:1 px solid #fff;
} 


.corners6 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 150px;
  height: 150px;
 text-align: center;
 border:1 px solid #fff;
} 

.corners9 {
  border-radius: 50%;
  background: #343a40;
  padding: 20px; 
  width: 90px;
  height: 90px;
 text-align: center;
 border:1 px solid #ffffff;
} 

.corners99 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 90px;
  height: 90px;
 text-align: center;
 border:1 px solid #ffffff;
} 



.corners10 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 110px;
  height: 110px;
 text-align: center;
 border:1 px solid #ffffff;
} 
.corners4 {
  border-radius: 50%;
  background: #cccccc;
  padding: 20px; 
  width: 240px;
  height: 240px;
 text-align: center;
 border:1 px solid #fff;
} 

 today {
background: url(themes/<?=$setts['default_theme'];?>/news.png) top right no-repeat;

}
 day {
background: url(themes/<?=$setts['default_theme'];?>/img/day.gif) bottom left no-repeat;
}
 hour {
background: url(themes/<?=$setts['default_theme'];?>/img/hour.gif) bottom left no-repeat;
}





-->
   </style>
 <style>
/*the container must be positioned relative:*/
.select {
  position: relative;
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
}

.select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 2px;
  right: 10px;
  width: 0;
  height: 0;
  border: 1px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 5px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #000;
  padding: 11px -2px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

.port-image
{
    width: 100%;
}

.col-md-3
{
    margin-bottom:20px;
}

.each-item
{
    position:relative;
    overflow:hidden;
}

.each-item:hover .cap2, .each-item:hover .cap1
{
    left:0px;
}

.cap1
{
    position:absolute;
    width:100%;
    height:70%;
    background:rgba(255, 255, 255, 0.5);
    top:0px;
    left:-100%;
    padding:10px;
    
    transition: all .5s;
}

.cap2
{
    position:absolute;
    width:100%;
    height:30%;
    background:rgba(0, 178, 255, 0.5);
    bottom:0px;
    left:100%;
    padding:10px;
    
    transition: all .5s;
}






.cap3 {
  color: #000;
  padding: 11px -2px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}


select {
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
        background-size: auto auto;
    background-size: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}


for2 {
  padding: 4px 6px;
  margin: 3px 0;

 
  outline: none;

  border: none;
  border-radius: 1px;
  background-color: #f1f1f1;
}

.input2[type=text] {
  padding: 4px 6px;
  margin: 3px 0;

   width: auto;
  outline: none;

  border: none;
  border-radius: 1px;
  background-color: #f1f1f1;
}

.input2[type=text]:focus {
  background-color: lightblue;
}

.membmenu {
 
  padding: 4px 6px;
  margin: 3px 0;

   width: auto;
  outline: none;

  border: none;
 
  background-color: #f1f1f1;
}




.select:not(:first-child), .input-group > .form-control:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.input-group > .custom-file, .input-group > .select, .input-group > .form-control {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0;
}
.select {
    display: inline-block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: .375rem 1.75rem .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    vertical-align: middle;
    background: #fff url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") no-repeat right .75rem center;
        background-size: auto auto;
    background-size: 8px 10px;
    border: 1px solid #ced4da;
    border-radius: .25rem;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
button, select {
    text-transform: none;
}
button, input, optgroup, select, textarea {
    margin: 0;
        margin-bottom: 0px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}

 .tit1 {
 
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;

    display: block;
    font-size: 80%;
    color: #6c757d; position:absolute;
}
  
  .t1 {
 
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
  
font-size: 1.15rem;
font-weight: 200;
}
  .th4 {
 
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
  
font-size: 1.05rem;
font-weight: 150;
}
 .tit2 {
 
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
  
font-size: 1.25rem;
font-weight: 300;
}
 .tit3 {
 
  font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif ;
  
font-size: 1.45rem;
font-weight: 400;
}
 h2.b {
  visibility: hidden;
}
</style>
 <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Libre Barcode 39 Text|Libre Barcode 39 Extended Text|Marcellus SC|Fontdiner Swanky|Allerta Stencil|Ubuntu Mono" media="screen">
  	 <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lora|Oswald|Libre Barcode 39 Text|Fontdiner Swanky|Allerta Stencil|Ubuntu Mono" media="screen"> 

    <script src="themes/<?=$setts['default_theme'];?>/ckeditor.js"></script>
	<link type="text/css" rel="stylesheet" href="themes/<?=$setts['default_theme'];?>/a.css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="themes/<?=$setts['default_theme'];?>/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
 background-color: gray;
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































 
 

</head>
 


  <body  id="mobile_wrap bg-secondary" >  
  
  <header  class="bg-dark fixed-top">  
	<div class="container d-none d-lg-block">
 <br>
 <div class="row  ">
 
 <div class="col-lg-auto">
<? if (eregi("index.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="index.php"><i class="fas fa-home"></i> HOME</a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="index.php"> <i class="fas fa-home"></i> HOME</a></a> <? } ?>   
    </div>
	
	  <div class="col-lg-2 d-none d-lg-block">
 <? if (eregi("categories.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="categories.php"><i class="fas fa-sitemap"></i> &nbsp;Продажи </a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="categories.php"><i class="fas fa-sitemap"></i>&nbsp;Продажи</a> <? } ?>   
    </div>
		 
	 <? if ($member_active == 'Active') { ?> <? } else { ?>  	  <div class="col-lg-2">
 <? if (eregi("login.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="login.php">
 <i class="fas   fa-pen-nib   " style="font-size:20px;color:#ffffff;"></i>
  &nbsp;Вход/Рег</a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="login.php"><i class="fas  fa-piggy-bank  " style="font-size:20px;color:#ffffff;"></i>&nbsp;Продать</a> <? } ?>   
    </div><? } ?> 
	
	 <? if ($member_active == 'Active') { ?> <? } else { ?>  	  <div class="col-lg-2 d-none d-lg-block">
 <? if (eregi("stores.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="<?=process_link('stores');?>"><i class="fas f fa-archive "></i> &nbsp;Склад</a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="<?=process_link('stores');?>"><i class="fas  fa-archive "></i>&nbsp;Склад </a> <? } ?>   
    </div><? } ?> 
	

	
		
	
			  <div class="col-lg-2">
 <? if (eregi("wanted_ads.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="wanted_ads.php"> <i class="fas fa-money-check-alt"></i> Куплю </a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="wanted_ads.php"> <i class="fas fa-money-check-alt"></i> Куплю </a> <? } ?>   
    </div> 
	


 	
				  <div class="col-lg-2">
 <? if (eregi("reverse_auctions.php",$_SERVER['PHP_SELF'])) { ?> <a class="btn btn-primary  btn-block" href="reverse_manage.php"> 
 <i class="fas  fa-cog  fa-spin" style="font-size:20px;color:#ffffff;"></i>В сервис</a>                     
<? } else {?><a class="btn btn-secondary  btn-block" href="reverse_auctions.php"> <i class="fas  fa-cog " style="font-size:20px;color:#ffffff;"></i> Сервис</a> <? } ?>   
    </div> 
	

 	
 	
	
	
		  
	   
  </div>
</div>

  <br>

<div class="collapse " id="navbarHeader">  <div align="center">    <button class="navbar-toggler btn btn-sm  btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">&nbsp; 	<i class="fas fa-compress-arrows-alt " style="font-size:24px;color:#007BFF;"></i>&nbsp;
  ЗАКРЫТЬ
<span class="navbar-toggler-icon"></span>
          </button> &nbsp;
		  <div class="d-lg-none"> 
 
		 <a class="btn btn-info" href="wanted_ads.php"><i class="fas  fa-piggy-bank  " style="font-size:20px;color:#ffffff;"></i> &nbsp;Куплю</a> 
		  &nbsp;<a class="btn btn-secondary " href="login.php"><i class="fas  fa-piggy-bank  " style="font-size:20px;color:#ffffff;"></i>&nbsp;Продать</a></div></div>
     <br> <div class="container">
	 


		<form action="auction_search.php" method="post"   >
 
 <ul class="list-group"> 
  <li class="list-group-item"> 
 <div class="row">
<div class="col-lg-6  "><hr class="my-2"> <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="">Выбор цены</span>
  </div>
  <input type="text"   type="text" name="min_price" class="form-control" id="min_price" size="6" value="<?=$src_details['min_price'];?>" placeholder="цена от"  />
  <input type="text"   name="max_price" id="max_price" size="6" class="form-control" value="<?=$src_details['max_price'];?>"  placeholder="цена до" /><hr class="my-2">
</div></div>
 <div class="col-lg-6  "> <hr class="my-2">
 
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Выберите состояние товара </label>
  </div>
   <select name="zip_code" class="custom-select" id="inputGroupSelect01"   value="<?=$item_details['zip_code'];?>" >
  <option>  </option>
 
   <option>Новый</option>
  <option>Подержанный Хорошее</option>
  <option>В ремонте</option>
  <option>Заказ</option>
  <option>Open Box</option>
  <option>Сломан</option>
    <option>По запчастям</option><option>Аккуратное обращение</option>
  <option>Подержанный Гарантия</option> <option>Подержанный средне</option>
  <option>Refurbished</option>
  <option>Коробка Гарантия</option>
  </select> 
</div>
 
 

 
 
 
 
 
 
 
 
 
 
</div></div>
 

    <div class="row">
<div class="col-lg-6  "> <hr class="my-2"> <?=$country_dropdown;?></div>
 <div class="col-lg-6  "><hr class="my-2"><?=$categories_browse_box;?>  </div></div>
 
 
 
 
 
 
 
 
 
 

 


<li class="list-group-item  bg-heavy "> 

 <div >
 
 
   <div class="row">
<div class="col-lg-2  ">  <input type="checkbox"  id="inlineCheckbox1" name="photos_only" value="1" <? echo ($item_details['photos_only'] == 1) ? 'checked' : '';?>>  
 <i class="icon-camera"></i>&nbsp;С фото  </div>
 <div class="col-lg-2  ">  <input type="checkbox"   id="inlineCheckbox3"   name="enable_swap" value="1" <? echo ($item_details['enable_swap'] == 1) ? 'checked' : '';?> >
              <i class="icon-exchange"></i>&nbsp;Бартер   </div>
 <div class="col-lg-4  "> <select  class="select" name="results_view">
<option value="all" <? echo ($item_details['results_view'] == 'all') ? 'selected' : '';?>>
               <?=GMSG_ALL;?>
               </option>
               <option value="open" selected>
               <?=GMSG_OPEN_AUCTIONS_ONLY;?>
               </option>
               <option value="closed" <? echo ($item_details['results_view'] == 'closed') ? 'selected' : '';?>>
               <?=GMSG_CLOSED_AUCTIONS_ONLY;?>
               </option>
            </select></div>
 <div class="col-lg-4  "> 
  <select  class="select" name="ordering">
               
<option value="end_time_asc" selected>
               
<?=MSG_ITEMS_ENDING_FIRST;?>
</option>
            
<option value="end_time_desc" <? echo ($item_details['ordering'] == 'end_time_desc') ? 'selected' : '';?>>
               
<?=MSG_NEWEST_ITEMS_FIRST;?>
     </option>
              
<option value="start_price_asc" <? echo ($item_details['ordering'] == 'start_price_asc') ? 'selected' : '';?>>
            
<?=MSG_LOWEST_PRICES_FIRST;?>
</option>
</select> </div> 
 </div>
 
  
</div>
 <hr class="my-2">
<div class="input-group mb-3"> <input type="hidden" name="option" value="basic_search"> 
<input type="text" class="form-control" placeholder="Поиск в категории продаж электроники Apple" name="basic_search" aria-label="категории продаж электроники Apple" aria-describedby="basic-addon2">
<div class="input-group-append">
 <a  href="<?=process_link('search');?>">  <button  class="btn btn-primary"  type="button submit"> 
   <i class="fas   fa-search  " style="font-size:15px;color:#fff;"></i>
    Поиск</button>    </a>  
 </div>
</div> </li>

</ul>
 </form> 
 </div> </div>    

 
 <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between"> <div class=" d-none d-lg-block  "> 
          <a href="index.php" class="navbar-brand d-flex align-items-center  ">
      <i class="fas   fa-cog  fa-spin" style="font-size:42px;color:#007BFF;"></i>
            <strong style="font-size:24px;color:#fff;">&nbsp;bobobo.ru  </strong>   
		  
          </a></div>
 
 	  
		  
		    <li class="nav-item dropdown  ">
        <a class="nav-link dropdown-toggle btn btn-primary  text-white href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> &nbsp;<i class="icon-sort"></i> МЕНЮ</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01 ">
     <a class="dropdown-item" href="index.php">  HOME </a> 
 <a class="dropdown-item" href="<?=$register_link;?>"><?=$register_btn_msg;?></a> 
<a class="dropdown-item" href="<?=process_link('content_pages', array('page' => 'about_us'));?>"><?=MSG_BTN_ABOUT_US;?></a>
        <a class="dropdown-item" href="login.php"> Login </a>  
		  
		<a class="dropdown-item" href="<?=process_link('site_fees');?>"> О сайте</a>  
		  
		  
          <a class="dropdown-item" href="<?=process_link('content_pages', array('page' => 'contact_us'));?>"> <?=MSG_BTN_CONTACT_US;?></a> 
		  
 <a class="dropdown-item" href="wanted_ads.php"> Куплю</a> 
 <a class="dropdown-item"  href="categories.php"> Продам</a> 
 <a class="dropdown-item"  href="reverse_auctions.php">Service</a> 
		  
		  
        </div>
      </li> 
	    <? if ($member_active == 'Active') { ?>    <a class="btn btn-outline-success" href="<?=$login_link;?>"><b> ВЫХОД</b> <?=$member_username; ?></a>  <? } else { ?>  <? } ?>  
	         <? if ($member_active == 'Active') { ?>
			<a  class="text-white align-items-center" href="<?=process_link('members_area', array('page' => 'about_me', 'section' => 'view'));?>">  
	                     <i class="fas  fa-user " style="font-size:32px;color:#007BFF;"></i>
                     <b> <?=$member_username; ?> </b> </a>
                 
                     <? } else { ?>
	                    
			 
			 
			 
			 
			 
			 
			
                    
                  
	  
	 <div class="d-lg-none ">  <a  href="index.php">   <i class="fas  fa-home" style="font-size:34px;color:#007BFF;"></i></a> </div>  <footer class="blockquote-footer d-none d-lg-block text-white"><cite title="Source Title">		Бесплатное размещение. Ссылки на сервисные центры . ПК ноутбуки и серверы. <br>
	
 объявления   по продаже электроники марки Apple.<h1 class="tit1">  Комплектующие </h1>  и аксессуары. </cite>

 </footer>    <? } ?>
		  
	   
		 
		  
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas  fa-search" style="font-size:24px;color:#007BFF;"></i>   Поиск
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
	
  </header> 
 
 <div class="jumbotron jumbotron-fluid">  <div class="container">  
<span class="col-lg-12  d-none d-lg-block"> <br /> <br /><br>
<br>
<br>
 </span>  

 
<div class="d-lg-none"><br />
<br />
<br />
</div> 

 
<br /><?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
 
     <? if ($item_details['owner_id'] == $session->value('user_id')) { ?><h6> <footer class="blockquote-footer"> Оформи <a href="about_me,page,view,section,members_area"><strong>  свою личную страницу </strong></a> и все узнают о твоей компании.</h3>  </footer> </h6><? } else { ?> <? } ?>
	 
<span class="col-lg-12  d-none d-lg-block">
<div class="row">  
      <div class="col-lg-9"> 
	
 
<h2 class="tit1"><?=$user_details['username'];?> </h2>  <h1 class="display-4 d-none d-lg-block">  <?=$item_details['name'];?></h1>  
 <h6> <h3 class="tit2">  Бюджет услуги &nbsp; <span class="badge  badge-primary badge-pill" style="font-size:22px;color:#ffffff;" > <?=$item_details['hidden_bidding'];?> &nbsp;   <i class="fa fa-rub" aria-hidden="true"></i></span>   </h6> </div>  
 
   <div class="col-lg-3" > 
   
    
 <a class=" btn  btn-info display-4 d-none d-lg-block" href="https://www.google.com/search?client=firefox-b-d&amp;q=<?=$item_details['name'];?>"><i class="fab fa-google"></i> Найти в  google </a>  
<hr class="my-2">
 <a class=" btn  btn-warning display-4 d-none d-lg-block"
 href="https://yandex.ru/search/?text=<?=$item_details['name'];?>&lr=2"><i class="fab fa-yandex"></i> Искать в yandex </a> 
	                       
	                         

    
   
   
  </div> </div></span>  	 
	 
 
	 
<hr class="my-2">	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 





 <hr class="my-2"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- loginadmin -->
<ins class="adsbygoogle"
     style="display:inline-block;width:99%;height:70px"
     data-ad-client="ca-pub-6364311065253135"
     data-ad-slot="5254431302"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
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
 
 
 <? if (item::count_contents($item_details['ad_image'])) { ?>
                  <table width="100%" border="0" cellspacing="1" cellpadding="3">
                     <tr>
                        <td class="title" colspan="2"><?=MSG_AUCTION_IMAGES;?></td>
                     </tr>
                     <tr>
                        <td class="border" colspan="2"><table width="100%" cellpadding="3" cellspacing="0" border="0">
                              <tr align="center">
                                 <td valign="top" class="picselect"><table cellpadding="3" cellspacing="1" border="0">
                                       <tr align="center">
                                          <td><b><?=MSG_SELECT_PICTURE;?></b></td>
                                       </tr>
                                       <tr align="center">
                                          <td><?=$ad_image_thumbnails;?></td>
                                       </tr>
                                    </table></td>
                                 <td width="100%" class="picselectmain" align="center"><img name="main_ad_image" src="<?=SITE_PATH;?>thumbnail.php?pic=<?=$item_details['ad_image'][0];?>&w=500&sq=N&b=N" border="0" alt="<?=$item_details['name'];?>"></td>
                              </tr>
                           </table></td>
                     </tr>
                  </table>
                  <? } ?>
 
 
 
     <hr class="my-2"> 
   <?=database::add_special_chars($item_details['description']);?>  
  
    <hr class="my-4"
 
 
 
 
 
 
 
 
 
 
>
  
  
  
  

  
   
      </li>
		
</ul>
 
 	</div>  
   
   
  		 
   <div class="d-none d-lg-block d-md-block col-lg-4">
   <? if ($item_details['owner_id'] == $session->value('user_id')) { ?>  for own <? } else { ?><ul class="list-group">
  <li class="list-group-item  bg-info"> user   <?=$user_details['username'];?> </li>
  <li class="list-group-item"><?=user_pics($user_details['user_id']);?> </li>
  <li class="list-group-item "> <i class="fas fa-subway"></i>   Метро   
               	<? echo M . ' <b>' . $seller_country . '</b>'; ?> <br><?=MSG_REGISTERED_SINCE;?>  <?=show_date($user_details['reg_date'], false);?> <br>
</li>   
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
  
  <li class="list-group-item">  
  
  
  	<b><?=MSG_WELCOME;?>, <?=$session->value('username');?></b>
                  
                     <? if ($item_details['owner_id'] == $session->value('user_id')) { ?>
						      <? if ($item_details['active']==1)	{ ?>
						      <a href="reverse_manage.php?do=edit&reverse_id=<?=$item_details['reverse_id'];?>&edit_option=new"><?=MSG_EDIT_AUCTION;?></a>
						      &nbsp;|&nbsp; <a href="members_area.php?do=delete_reverse&reverse_id=<?=$item_details['reverse_id'];?>&page=reverse&section=open" onClick="return confirm('<?=MSG_DELETE_CONFIRM;?>');"><?=MSG_DELETE;?></a>
					         <? } ?>
  
  
    <? } ?>
  
  
  
  
  
  
  
  
   </li>  
   
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



         
 
             


<?=$msg_changes_saved;?>
<?=$block_reason_msg;?>
 

<br>


 
  
 




 		
		

		



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
 
   
 