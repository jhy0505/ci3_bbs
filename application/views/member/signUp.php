<h1>회원가입 페이지</h1>

<form action="progressSignUp" method="POST" id="signUpForm" class="signUpForm">
  <div class="idInput">
    <label for="id">아이디</label>
    <input type="text" name="member_id" id="member_id">
  </div>
  <br>
  <div class="pwInput">
    <label for="pw">비밀번호</label>
    <input type="password" name="member_pw" id="member_pw">
  </div>
  <br>
  <div class="nameInput">
    <label for="name">이름</label>
    <input type="text" name="member_name" id="member_name">
  </div>
  <br>
  <div class="nicknameInput">
    <label for="nickname">닉네임</label>
    <input type="text" name="member_nickname" id="member_nickname">
  </div>
  <br>
  <div class="emailInput">
    <label for="email">이메일</label>
    <input type="text" name="member_email" id="member_email">
  </div>
  <br>
  <div class="mobileInput">
    <label for="mobile">휴대폰 번호</label>
    <input type="text" name="member_mobile" id="member_mobile">
  </div>
  <br>
  <button>회원가입</button>
</form>