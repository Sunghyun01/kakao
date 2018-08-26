<?php
  function user_Scissors(){
    $rands=mt_rand(1,3);
    $rands=mt_rand(1,3);
    if($rands==1){
      echo '
          {
              "message":
              {
                "text": "저도 가위 입니다 다시하죠!!!"
              },
              "keyboard":
              {
                "type": "buttons",
                "buttons": ["가위","바위","보"]
              }
            }
        ';
  }else if($rands==2){
    echo '
        {
            "message":
            {
              "text": "전 바위 입니다 제가 이겻네요"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons":["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
            }
          }
      ';
  }else{
    echo '
        {
            "message":
            {
              "text": "전 보 입니다 당신이 이겻네요"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
            }
          }
      ';
  }
}
function user_Rock(){
  $randr=mt_rand(1,3);
  if($randr==1){
    echo '
        {
            "message":
            {
              "text": "전 가위 입니다 당신이 이겻네요"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
            }
          }
      ';
}else if($randr==2){
  echo '
      {
          "message":
          {
            "text": "저도 바위 입니다 다시하죠!!!"
          },
          "keyboard":
          {
            "type": "buttons",
            "buttons": ["가위","바위","보"]
          }
        }
    ';
}else{
echo '
    {
        "message":
        {
          "text": "전 보 입니다 제가 이겻네요"
        },
        "keyboard":
        {
          "type": "buttons",
          "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
        }
      }
  ';
}
}
function user_Paper(){
  $rand=mt_rand(1,3);
  if($rand==1){
      echo '
        {
            "message":
            {
              "text": "전 가위 입니다 제가 이겻네요"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
            }
          }
        ';
  }else if($rand==2){
    echo '
        {
            "message":
            {
              "text": "전 바위 입니다 당신이 이겻네요"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
            }
          }
        ';
    }else{
      echo '
          {
            "message":
            {
                "text": "저도 보 입니다 다시하죠!!!"
            },
            "keyboard":
            {
              "type": "buttons",
              "buttons": ["가위","바위","보"]
            }
          }
        ';
      }
}
?>
