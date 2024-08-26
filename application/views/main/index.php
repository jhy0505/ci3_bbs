<button><a href="member/signUp">회원가입 페이지 이동 버튼</a></button>
<button onclick="test1();">jQuery 연결 테스트</button>
<p class="testArea">테스트</p>

<script>
  function test1()
  {
    console.log("눌렸니?");
    $(".testArea").append("ㅇ 눌림<br>");
  }
</script>