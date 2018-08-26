<?php
  date_default_timezone_set("Asia/Seoul");
  function scadule(){
    //$url = "https://stu.sen.go.kr/sts_sci_sf01_001.do?schulCode=B100000403&schulCrseScCode=4&schulKndScCode=04";
    //$sc = "10(일) : \n11(월) : \n12(화) : \n13(수) : \n14(목) : \n15(금) : \n16(토) : 토요휴업일";
  }
  function sixMonth_week5(){
    echo '
              {
                  "message":
                  {
                      "text": "★남강고등학교 학사일정★"
                  },
                  "keyboard":
                  {
                      "type": "buttons",
                      "buttons": ["급식", "날씨","일정","패치노트","개발자모드"]
                  }
              }
          ';
  }
  function errerCode(){
    echo '
              {
                  "message":
                  {
                      "text": "ErrorCode : date[sixMonth_week]==null"
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
