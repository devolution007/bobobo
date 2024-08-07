function genRandom(num) {
var tempString = ""
tempString += (Math.random() * num) + 1
rstring = parseInt(tempString)
return rstring }
function addNol(num){
temp=String(num)
if (num<10) {temp="0"+String(num)}
return temp}
var cat  = new Array ("Дисплей","Lenovo");
ab=0;
document.write('<center><table width=99%>');
for (a=0; a < 5; a++){document.write('<tr>');
for (b=0; b < 4; b++){document.write('<td width=25% align=center>');
document.write('<font face="Arial" size=3><b>'+cat[ab].toUpperCase()+'<br>Ремонт</b></font><br>');
for (c=0; c < 20; c++){
document.write('<font color="#ffffff" face="Arial" size="2"><b>'+addNol(genRandom(10)+10)+' </b><a href=');
if (genRandom(100)>0) {document.write('http://nsq.ru/search.php?');}
else {document.write('http://nsq.ru');}
document.write(' onMouseOver=\"window.status=\'http://nsq.ru/search.php?'apple '; return true;\" onMouseOut=\"window.status=\'\';\">'+cat[ab].toUpperCase()+' notebook</a></font><br>');}
document.write('<font face="Arial" size="3"><b><a href=search.php?'+cat[ab]+'>>>ARCHIVE</a></b></font><br>');
document.write('<br>');
document.write('</td>');ab++}
document.write('</tr>');}
document.write('</table></center>');