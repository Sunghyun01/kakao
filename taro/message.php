<?php
  header("content-type: application/json; charset=utf-8");
  $data = json_decode(file_get_contents('php://input'), true);
  $content = $data["content"];

  switch($content){
    case "타로":
        $rand=mt_rand(1,6);
        if($rand==1){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 매달린 남자\n시련의 시기이며 움직일 수 없는 입장을 나타냅니다.\n하지만 괴로운 체험으로 교훈을 얻을 수 있으며 과도기를 나타내며\n눈 앞의 이익을 바랄 수 없습니다.\n무슨일이든지 수행이다 생각하고 받아들이셔야 합니다.\n힘든 고통의 시기이긴 하지만거꾸로 매달려 있는 사람처럼 새로운 시각으로 볼 것을 의미하기도 합니다.\n현재의 아픔과 힘듬, 괴로움을 과감히 받아들임으로서\n한단계 더 나아갈 발판을 마련한다 생각하세요.\n새로운 관점이 새로운 이해를 가져옵니다.\n즉 빠져 나올 수 없는 곤경과 도리 없는 상황이 숙고하고 새로운 시각으로 바라본다면\n우리의 관점이 바뀌고 무엇이 잘못되었는지를 알 수 있게 됩니다.\n중요한 일들 사이에서의 휴식기로 받아들이세요.",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/ko/thumb/2/2b/RWS_Tarot_12_Hanged_Man.jpg/220px-RWS_Tarot_12_Hanged_Man.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                }
              }
          ';
        }elseif($rand==2){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 죽음\n실패와 계속되는 손해, 실업, 정지상태를 나타내고 병이나 사고를 암시합니다.\n불행한 사랑과 이별을 맞이하게 되지만\n죽음과 같은 새로운 변화를 맞이하게 된다는 의미도 내포하고 있습니다.\n끝을 기점으로 한 새로운 일의 시작을 나타냅니다.\n변화라기보다는 종결, 그리고 종결후의 새로운 시작을 나타냅니다.\n오랜된 생명이 쇠퇴하여 사라짐으로서 새로운 생명이 나타나서 자라게 됩니다.",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/ko/thumb/d/d7/RWS_Tarot_13_Death.jpg/220px-RWS_Tarot_13_Death.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                  }
              }
          ';
        }elseif($rand==3){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 운명의 수레바퀴\n기회가 찾아왔으며 전환기를 맞이하게 됩니다.\n생각지도 않았던 승진이나 행운, 유리한 인사이동을 나타내고\n운명적인 만남과 행운의 시기임을 말해줍니다.\n행동하려던 것을 적극적으로 추진하면 좋을 결과를 얻을 수 있습니다.\n운명의 수레바퀴가 당신에게 유리하게 돌아가고 있으며 새로운 순환의 시작을 말합니다. 나쁜 상황을 좋게 이끌어주며 문제의 끝으로 다가가고 있습니다.\n여행이나 해외에 나갈 기회가 생깁니다.",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/ko/thumb/3/3c/RWS_Tarot_10_Wheel_of_Fortune.jpg/220px-RWS_Tarot_10_Wheel_of_Fortune.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                  }
              }
          ';
        }elseif($rand==4){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 은자\n많은 것을 말하지는 않지만 핵심을 찌르는 조언을 하고\n정신적이며 조용한 사람을 말합니다.\n차분하고 노련한 빛을 가지며 내면의 소리를 따라야 합니다.\n꾸준한 활동에 성과를 나타냅니다.\n홀로 있는 시기이지만 주변 사람들과 계속 관계를 가지도록 노력해야 하며\n철수하는 편이 공격하는 편보다 낫습니다.\n누군가나 어떤 상황을 재촉하지 마세요.",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/ko/thumb/4/4d/RWS_Tarot_09_Hermit.jpg/220px-RWS_Tarot_09_Hermit.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                  }
              }
          ';
        }elseif($rand==5){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 연인\n행운의 결합, 협력자나 파트너 복이 있음, 공동작업이나 그룹활동에 좋음,\n낙천주의, 진로를 결정할 절호의 기회가 찾아옴, 낭만적인 사랑,\n새로운 동반자 관계 탄생, 사랑의 기회, 성과 관련되 카드이며\n강렬한 육체적 매력과 욕망, 열정, 사랑이 강하게 연결,",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/commons/7/70/Jean_Dodal_Tarot_trump_06.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                  }
              }
          ';
        }elseif($rand==6){
          echo '
            {
                  "message":
                  {
                      "text": "오늘의 카드 : 정의\n공정, 균형, 중립, 조정역할을 하며 성실하고 공명정대하며 이성적이고 논리적입니다.\n주변상황에 휩쓸리기보다는 자신의 주관에 따라 공정한 판단을 합니다.\n보다 정직하고 진실된 모습이 필요하며\n한발 뒤로 물러서서 이해득실을 저울질하고 상황을 살필 것을 조언합니다.\n바로 결론 내는 대신에 검토하기 바랍니다.\n감정보다는 치밀한 논리의 필요성을 지지하며\n감정을 객관적으로 조절하기를 요구합니다.\n자신의 자아에 대해 정직해질 것을 요구합니다.\n즉 자신의 상황을 평가하고 자신의 처지를 이해한 다음\n이후의 행보를 결정할 필요가 있습니다.",
                      "photo":{
                          "url": "https://upload.wikimedia.org/wikipedia/ko/thumb/e/e0/RWS_Tarot_11_Justice.jpg/220px-RWS_Tarot_11_Justice.jpg",
                          "width": 640,
                          "height": 480
                          },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                  }
              },
        "keyboard":
        {
            "type": "buttons",
            "buttons":  ["타로","도움말"]
        }
          ';
        }
        break;
          case "도움말":
            echo '
             {
               "message":
               {
                   "text": "현재 카드 수 : 6\n"
               },
                "keyboard":
                {
                    "type": "buttons",
                    "buttons":  ["타로","도움말"]
                }
             }
           ';
            break;
            case "새소식":
              echo '
               {
                 "message":
                 {
                     "text": "안녕하세요\n타로봇 개발자 입니다.\n제가 학교생활과 회사생활을 병행하면서 하다보니 타로봇 관리를 소홀히한점 죄송합니다.\n앞으로는 못해도 1달에 1번 이상의 업데이트가 있을예정입니다\n추가사항으로는 관리자 채팅을 통한 개인 상담도 운영됩니다.\n현재 상담일을 많이 경험해본 사람을 구하고 있습니다.\n현재도 상담을 받습니다만 저는 상담쪽으로 경험이 많지않아 능숙하지 않은 답변이 올 수 있다는 점 양해부탁드립니다.\n\n앞으로 많은 관심 부탁드리겠습니다.\n개발자올림"
                 },
                  "keyboard":
                  {
                      "type": "buttons",
                      "buttons":  ["타로","도움말"]
                  }
               }
             ';
              break;
            default:
                echo '
                    {
                        "message":
                        {
                            "text": "잘못된 명령어 입니다."
                        },
                    "keyboard":
                    {
                        "type": "buttons",
                        "buttons":  ["타로","도움말"]
                    }
                    }';
                break;
    }
?>
