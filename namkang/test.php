<?
include("lunch.php");  
header('Content-type: application/json');

if($_GET['day'] == "T"){
    $lunch = get_lunch_today($_GET['code']);
}else{
    $lunch = get_lunch_tomorrow($_GET['code']);
}


$exp = split('\n', $lunch);

$arr = array();
$arr2 = array();
$arr['version'] = "2.0";
$imp = implode('', $exp);
$str = str_replace("\\", "\n", $imp);
$arr2['simpleText']['text'] = "[중식]".$str;
$arr['template']['outputs'] = array($arr2);


$res =  json_encode($arr);

print_r($res);
?>