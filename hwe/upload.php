<?php 
/* 
 * 2018-01-30 更新程序
 *(c) Copyright 2018 Tamshen. All Rights Reserved. 
 * 
 */
include './data.php';
header("Content-Type:text/html;charset=utf-8");
$hwenr = file_get_contents($GLOBALS['hwegg']);
$hwenrdata = json_decode($hwenr, true);
if($hwenrdata["hwev"]==hwev)
{
    echo "<script>alert('更新失败！当前版本已经是最新了！');history.go(-1)</script>";
}
else{
    echo "当前版本：".hwev."</br>最新版本：".$hwenrdata["hwev"];
    echo "</br></br>正在更新...请稍后（请勿关闭此页面否则有几率出现无法逆转的错误！）</br>更新完毕后将自动跳转！";
    // 屏蔽域名不存在等访问问题的警告
    error_reporting(E_ALL ^ (E_WARNING|E_NOTICE));
    $remote_file = $hwenrdata["gx"];
    $header = get_headers($remote_file, true);
    if (empty((isset($header[0]) && (strpos($header[0], '200') || strpos($header[0], '304'))))) 
    {
        echo "<script>alert('网络错误了！等下再试试吧。');history.go(-1)</script>"; 
    }
    else
    {   
        $gxb = "./hwe.zip"; 
        $url = $remote_file;
        $fp_output = fopen($gxb, 'w');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_FILE, $fp_output);
        curl_exec($ch);
        curl_close($ch);
        exec("libreoffice $gxb", $out, $status);
        $zip = new ZipArchive; 
        $res = $zip->open($gxb); 
        if ($res === TRUE)
        {
                $zip->extractTo('./');
                $zip->close();
                rename("./index1.php","../index.php");
                unlink("index1.php");
                if (!unlink($gxb))
                { 
                echo "<script>alert('更新成功，但".$gxb."更新包删除错误！请检查服务器设置。');history.go(-1)</script>";
                }
                else
                {
                echo "<script>alert('更新成功，成功删除更新包！');history.go(-1)</script>";
                }
        }
        else
        {
            echo "<script>alert('更新失败！错误代码：".$res."');history.go(-1)</script>";
        }
    }
}

?> 