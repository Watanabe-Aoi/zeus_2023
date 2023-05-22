<?php
//[3]
$file = fopen('/home/aoi/zeus/resources/sample.dat', 'r') or die('ファイルを開けませんでした！');
flock($file, LOCK_SH);
while($line = fgets($file)){
    if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w. /?%&=-]*)?|i', $line, $data)){
        print implode($data).'<br/>';
    }
}
flock($file, LOCK_UN);
fclose($file);