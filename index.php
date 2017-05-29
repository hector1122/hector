<center><font color="red" size="8"> ❤ ツ WELCOME TO AL NOURI BOT © ツ ❤ </font></center>
</h1> <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
❤ AL HECTOR BOT ❤ </title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/simple_black.css" media="all,handheld"/><link rel="shortcut icon" href="">

<?php
 error_reporting(0);
$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $cokis[]=$b.'='.$c;
}
$true='?'.implode('&',$cokis);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by MAHAL_KITA',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cokis')){
        mkdir('cokis');
}
if($bb){
$blue=fopen('cokis/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Your Written Comment Has Been Saved !! Good Luck !! Ashir")</script>';
}else{
        if($z){
if(file_exists('cokis/'.$id)){
$file=file_get_contents('cokis/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cokis/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cokis/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cokis/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Script Comment Has Been Saved !! Good Luck !! Ashir")</script>';}}
}

public function lOgbot($d){
        unlink('cokis/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cokis/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT by '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">

</h1>
<h2 class="description">
</h2></div>';
}

public function home(){
echo'
<div id="header">
<h1 class="heading"><font size="90">
<div id="content">
<div id="navigation-menu"><script language="JavaScript" src=" http://start-wap.xtgem.com/Lengkap_script/baloon.js"></script>
<div class="post">
<div class="post-meta">
<h3 align="center"><font face="Orbitron" size="7" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.9em red, 0pt 2pt 0.9em yellow"><b> MR.JUBA </b></font></h2>
<center><h2 class="title">
</font>
</h2>
By <font color="sky blue"> ❤ MR.JUBA ❤ &trade;</font>
</div>
<div class="post-content">
<a href="https://www.facebook.com/100010323466715"><img src="https://graph.www.facebook.com/100010323466715/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="danie next time" class="thumbnail"/></a>
<span>
<br>
<font color="red"> ❤ Ana Aho ❤ </font><br>
Robot Created By <font color="sky blue"> ❤ MR.JUBA ❤ &trade;</font><br>
For More Sites Bot Flowe Me ^_^ Or <a href=https://www.facebook.com/HACKER.ISsMAIl><font color="red">Click Here</font></a><br>
My Facebook : <a href="https://www.facebook.com/100010323466715"><font color="sky blue">Visit</font></a><br>

</span>
</div>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://https://www.facebook.com/harhariayoub&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<h3>AL hector BOT</h3>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<center>
<a href="https://www.facebook.com/HACKER.ISsMAIl" alt="abdallah elshabwray" target="_blank"><img
src="https://graph.facebook.com/100002774023535/picture?type=large" 
alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="300height="320
</a>
<a href="https://www.facebook.com/HACKER.ISsMAIl" alt="abdallah elshabwray" target="_blank"><img
src="https://graph.www.facebook.com/100010323466715/picture?type=large" 
alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="245height="210
</a>
<a href="https://www.facebook.com/HACKER.ISsMAIl" alt="abdallah elshabwray" target="_blank"><img
src="https://graph.www.facebook.com/100010323466715/picture?type=large" 
alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="200height="180
</a>
<a href="https://www.facebook.com/HACKER.ISsMAIl" alt="abdallah elshabwray" target="_blank"><img
src="https://graph.www.facebook.com/100010323466715/picture?type=large" 
alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="140height="110
</a>
</span>
<font size="20" color="red">(</font><a class="sec" href="https://www.facebook.com/100010323466715"><font color="sky blue" size="20"></font></a></b> <font size="20" color="red"> </font>
<b>
<a class="sec" href="http:/><font color="sky blue" size="20"></font></a></b><font size="20" color="red"></font></marquee><br />
<font size="5" color="Sky blue" AL hector &copy; 2015</font>
</span>
</div></center>
<h3><a name="navigation-name" class="no-link">Get Working Tokens Below</a></h3>
<ul>
<center>
<a href="http://tokeen-thr.tk/" target="_blank" style="text-decoration: none;"><input type="button" value=" GET TOKEN" style="border: 0;color: #fff;border-radius: 0 3px 3px 0;padding: 7px 8px 7px 9px;font-size: 12px;font-weight: bold;margin-left: -3px;box-shadow: inset 0 -2px 0px rgba(0,0,0,0.11);;margin-top: 10px;background: #5cb85c;color: white;"> </a>
<a href="https://www.facebook.com/HACKER.ISsMAIl" style="margin-left:5px" target="_blank" style="text-decoration: none;"><input type="button" value="FACEBOOK MY" style="border: 0;color: #fff;border-radius: 0 3px 3px 0;padding: 7px 8px 7px 9px;font-size: 12px;font-weight: bold;margin-left: -3px;box-shadow: inset 0 -2px 0px rgba(0,0,0,0.11);;margin-top: 10px;background: #5cb85c;color: white;"> </a>
</center>
 <br>
</center>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<font color="sky blue" size="5">Please Submit Your Access Token Here</font>
</div>
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="4"><strong><font style="text-shadow: 1px 1px white; color:GREEN;" size="6">  Bot Master: ((¯°·._.• <font style="text-shadow: 1px 1px white; color:red;" size="6">♥</font></strong></center> MR.  <font style="text-shadow: 1px 1px white; color:red;" size="6"> J  U  B  A </font></strong></center>  Bo0ot <font style="text-shadow: 1px 1px white; color: =red;" size="6">♥</font></strong></center> •._.·°¯))</font></strong></center></marquee>
<p>fb/ Ana Aho </p>
</audio>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cokis')){
        mkdir('cokis');
}
$up=opendir('cokis');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
User robot : <font color="red">'.count($user).'</font>
<br>
Script bot &copy; 2017<br>
Powered by : <font color="red">ME.HECTOR</font><br>
Script Modified By : <a href="https://www.facebook.com/harhariayoub"><font color="sky blue">AL HECTOR BOT</font></a></div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('cokis/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('cokis/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
