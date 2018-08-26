<?php
  function manager($user){
      echo '
      {
          "message":
          {
            "text": "ID : '.$user.'환영합니다\n삭제된 명령어나 공개되지 않은 명령어를 사용할수 있습니다."
          },
          "keyboard":
          {
            "type": "buttons",
            "buttons": ["게임","텍스트","홈페이지","돌아가기"]
          }
        }
    ';
  }
  function another($user){
    echo '
    {
        "message":
        {
          "text": "ID : '.$user.'\n관리자에 등록되어있지 않은 아이디입니다"
        },
        "keyboard":
        {
          "type": "buttons",
          "buttons": ["급식", "날씨","일정","패치노트","개발자모드"]
        }
      }
  ';
  }
?>
