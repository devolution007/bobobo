<?php
echo ' <title> SONY SERVICE MANUAL PDF</title> <br />';
 $dir_name = 'notebook/sony';
clearstatcache();
 $scan = scandir($dir_name);
echo ' <img src=pdf.gif>SONY  VAIO SERVICE MANUAL PDF;<br />';
 foreach($scan as $key=>$val)
if(!is_dir($dir_name.'/'.$val))

echo '  <a href="'.((isset($_SERVER['HTTPS']))?'https':'http').'://'.$_SERVER['SERVER_NAME'].'/'.$dir_name.'/'.$val.'"><img src=pdf.gif>'.$val.'</a><br />';
 ?>