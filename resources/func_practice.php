<?php

// [1]-1
print('1-1:');
$str = 'PHPはPHP:Hypertext Preprocessorの略です';
$targetP = mb_strrpos($str, 'PHP');
printf('"PHP"is on %d (%d) in "%s".', $targetP+1, $targetP, $str);

print("\n");
print("\n");
// -2
print('1-2:');
$place = '弘前';
$temperature = ( floor (15.156 * 10) ) / 10;
$corrects = ['弘前', 15.156];
printf('%s の気温は %.1f ℃です。', $place, $temperature);

print("\n");
print("\n");
// -3
print('1-3:');
$originStr = 'wings knowledge';
$capsStr = mb_convert_case($originStr, MB_CASE_TITLE);
print($capsStr);

print("\n");
print("\n");
// -4
print('1-4:');
$kanaStr_arr = 'ボクの名前はリオです。';
$kanjiStr = str_replace(['ボク', 'リオ'], ['私', '凛生'], $kanaStr_arr);
print($kanjiStr);

print("\n");
print("\n");
// -5
print('1-5:');
$url = 'https://wings.msn.to/';
$condition = mb_strpos($url, 'http://') === 0;
var_export($condition);

print("\n");
print("\n");
// [2]
$data = [' 高江 ', ' 青木 ', ' 片淵 '];
// -1
print('2-1:');
$addData = ['山田', '日尾'];
array_splice($data, count($data), 0, $addData);
print_r($data);

print("\n");
// -2
print('2-2:');
$addDataB = ['掛谷', '土井'];
array_splice($data, 0, 0, $addDataB);
print_r($data);

print("\n");
// -3
print('2-3:');
$threeToFive = array_slice($data, 2, 3, true);
print_r($threeToFive);

print("\n");
//[3]
print('3:');
$file = fopen('/home/aoi/zeus/resources/sample.dat', 'r') or die('ファイルを開けませんでした！');
flock($file, LOCK_SH);
while($line = fgets($file)){
    if(preg_match('|http(s)?://([\w-]+\.)+[\w-]+(/[\w. /?%&=-]*)?|i', $line, $data)){
        print $data[0].'<br/>';
    }
}
flock($file, LOCK_UN);
fclose($file);

print("\n");
print("\n");
//[4]-1
print('4-1:');
$num = 12.2;
print(floor($num));
unset($num);

print("\n");
print("\n");
// -2
print('4-2:');
$num = -12;
print(abs($num));

print("\n");
print("\n");
// -3
print('4-3:');
$x = "x";
print('this is "x":'.x."\n");
unset($x);
print('after unset(err): ');
print($x);