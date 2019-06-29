<?php
  header("Content-Type: text/html; charset=UTF-8");
    $data = json_decode(file_get_contents('php://input'), true);
    $content = $data["content"];
    $user = $data["user_key"];
    include("lunch.php");      // 급식
    include("weather.php");    // 날씨
    include("scadule.php");    // 학사일정
    include("game.php");       // 게임
    include("Manager.php");    // 개발자 관리
    switch($content){
        case "기말고사 일정":
              scadule();
              break;
        case "1학년":
              grade_one();
              break;

        case "2학년":
              grade_two();
              break;
        case "3학년(이과)":
              grade_three_A();
              break;
        case "3학년(문과)":
              grade_three_B();
              break;

        case "급식":
            echo '
                {
                    "message":
                    {
                        "text": "조회를 원하시는 급식을 선택해주세요!"
                    },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons": ["오늘 급식", "내일 급식","돌아가기"]
                    }
                }
            ';
        break;
        case "오늘 급식":
    			$lunch = get_lunch_today("B100000403");
              echo '
                {
                  "message":
                  {
                      "text": "오늘 급식\\n'.$lunch.'"
                  },
                  "keyboard":
                  {
                      "type": "buttons",
                      "buttons": ["급식", "날씨","기말고사 일정","개발자모드"]
                  }
                }
            ';
        break;
    		case "내일 급식":
    			$lunch = get_lunch_tomorrow("B100000403");
              echo '
                  {
                      "message":
                      {
                          "text": "내일 급식\\n'.$lunch.'"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["급식", "날씨","기말고사 일정","개발자모드"]
                      }
                  }
              ';
        break;
    		case "날씨":
              echo '
                  {
                      "message":
                      {
                          "text": "조회를 원하시는 날씨를 선택해주세요!\n날씨정보는 제작자가 살고있는 관악구 대학동을 기준으로 합니다"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["오늘 날씨", "내일 날씨", "돌아가기"]
                      }
                  }
              ';
        break;
    		case "오늘 날씨":
    			$weather = get_weather_today('1162010200');
              echo '
                  {
                      "message":
                      {
                          "text": "'.$weather.'"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons":["급식", "날씨","기말고사 일정","개발자모드"]
                      }
                  }
              ';
        break;
    		case "내일 날씨":
    			$weather = get_weather_tomorrow('1162010200');
              echo '
                  {
                      "message":
                      {
                          "text": "'.$weather.'"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["급식", "날씨","기말고사 일정","개발자모드"]
                      }
                  }
              ';
        break;
    		case "돌아가기":
              echo '
                  {
                      "message":
                      {
                          "text": "메인화면으로 돌아갑니다."
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["급식", "날씨","기말고사 일정","개발자모드"]
                      }
                  }
              ';
        break;
        case "패치노트":
              echo '
                  {
                      "message":
                      {
                          "text": "★2018.08.02패치★\n홈페이지 개설중\nhttp:/\/namkang.dothome.co.kr"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["급식", "날씨","기말고사 일정","개발자모드"]
                      }
                  }
              ';
        break;
        case "개발자모드":
              if($user=="FpLCb2Wg1iD_"){
                manager($user);
              }else{
                another($user);
              }
        break;
        case "홈페이지":
              echo '
                  {
                      "message":
                      {
                          "text": "http:/\/namkang.dothome.co.kr"
                      },
                      "keyboard":
                      {
                          "type": "buttons",
                          "buttons": ["게임","텍스트","홈페이지","돌아가기"]
                      }
                  }
              ';
        break;
        case "텍스트":
            echo '
                {
                    "message":
                    {
                      "text": "text"
                    }
                  }
              ';
        break;
        case "게임":
            echo '
                {
                    "message":
                    {
                      "text": "제가 할 수 있는 게임 목록입니다"
                    },
                    "keyboard":
                    {
                      "type": "buttons",
                      "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
                    }
                  }
              ';
        break;
        case "사다리게임(미완)":
            echo '
                {
                    "message":
                    {
                      "text": "개발이 중지된 게임입니다"
                    },
                    "keyboard":
                    {
                      "type": "buttons",
                      "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
                    }
                  }
              ';
        break;
        case "숫자야구게임(미완)":
            echo '
                {
                    "message":
                    {
                      "text": "개발이 중지된 게임입니다"
                    },
                    "keyboard":
                    {
                      "type": "buttons",
                      "buttons": ["가위바위보","사다리게임(미완)","숫자야구게임(미완)","돌아가기"]
                    }
                  }
              ';
        break;
        case "가위바위보":
          //1 = 가위 2 = 바위 3 = 보
            echo '
                {
                    "message":
                    {
                      "text": "원하는걸 내주세요 확률은 랜덤입니다"
                    },
                    "keyboard":
                    {
                      "type": "buttons",
                      "buttons": ["가위","바위","보"]
                    }
                  }
              ';
        break;
        case "가위":
          user_Scissors();
        break;
        case "바위":
          user_Rock();
        break;
        case "보":
          user_Paper();
        break;
        default:
        break;
        break;
	}
?>
