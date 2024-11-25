<h1>회원가입 페이지</h1>

<form action="progressSignUp" method="POST" id="signUpForm" class="signUpForm">
  
  <div class="input-div">
    <div class="input-div2">
      <label for="id" class="input-label">아이디</label>
      <div class="idInput">
        <input type="text" name="member_id" id="member_id">
      </div>
    </div>
    <label class="error" for="member_id"></label>
  </div>
  
  <br>

  <div class="input-div">
    <div class="input-div2">
      <label for="pw" class="input-label">비밀번호</label>
      <div class="pwInput">
        <input type="password" name="member_pw" id="member_pw">
      </div>
    </div>
    <label class="error" for="member_pw"></label>
  </div>
  
  <br>
  
  <div class="input-div">
    <div class="input-div2">
      <label for="name" class="input-label">이름</label>
      <div class="nameInput">
        <input type="text" name="member_name" id="member_name">
      </div>
    </div>
    <label class="error" for="member_name"></label>
  </div>
  
  <br>
  
  <div class="input-div">
    <div class="input-div2">
      <label for="nickname" class="input-label">닉네임</label>
      <div class="nicknameInput">
        <input type="text" name="member_nickname" id="member_nickname">
      </div>
    </div>
    <label class="error" for="member_nickname"></label>
  </div>
  
  <br>
  
  <div class="input-div">
    <div class="input-div2">
      <label for="email" class="input-label">이메일</label>
      <div class="emailInput">
        <input type="text" name="member_email" id="member_email">
      </div>
    </div>
    <label class="error" for="member_email"></label>
  </div>
  
  <br>
  
  <div class="input-div">
    <div class="input-div2">
      <label for="mobile" class="input-label">휴대폰 번호</label>
      <div class="mobileInput">
        <input type="text" name="member_mobile" id="member_mobile">
      </div>
    </div>
    <label class="error" for="member_mobile"></label>
  </div>
  
  <br>
  
  <button>회원가입</button>
</form>