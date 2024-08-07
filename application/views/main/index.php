<button><a href="member/login">로그인 페이지 이동 버튼</a></button>
<button onclick="test1();">jQuery 연결 테스트</button>
<p class="testArea"></p>

<script>
  function test1()
  {
    console.log("눌렸니?");
    $(".testArea").append("ㅇ 눌림<br>");
  }
</script>