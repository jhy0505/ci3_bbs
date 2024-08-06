<h1>Hello World</h1>
<a href="main/killIndex">kill index.php 테스트</a>
<button onclick="test1();">눌러보든가</button>
<p class="testArea"></p>

<script>
  function test1()
  {
    console.log("눌렸니?");
    $(".testArea").append("ㅇ 눌림");
  }
</script>