<?
include("lunch.php");
header('Content-type: application/json');

$code = 'B100000403';
$weatherCode = '1162010200';
if($_GET['day'] == "TL"){
    $lunch = get_lunch_today(code);
    changeType($lunch)
}elseif($_GET['day'] == "YL")){
    $lunch = get_lunch_tomorrow(code);
    changeType($lunch)
}elseif($_GET['code'] == "TW")){
   $weather = get_weather_today($weatherCode);
   changeType($weather)
}


function changeType($changeJson){
    $exp = split('\n', $$changeJson);
    $arr = array();
    $arr2 = array();
    $arr['version'] = "2.0";
    $imp = implode('', $exp);
    $str = str_replace("\\", "\n", $imp);
    $arr2['simpleText']['text'] = "[중식]".$str;
    $arr['template']['outputs'] = array($arr2);

    $res =  json_encode($arr);

    print_r($res);
}
function simpleTextFunc($text){
    $arr = array();
    $arr2 = array();
    $arr['version'] = "2.0";
    $imp = implode('', $exp);
    $str = str_replace("\\", "\n", $imp);
    $arr2['simpleText']['text'] = $text;
    $arr['template']['outputs'] = array($arr2);
    $res =  json_encode($arr);

    print_r($res);
}
?>
