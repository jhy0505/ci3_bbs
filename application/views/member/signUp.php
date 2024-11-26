<div id="signUpBox">
  <h1>회원가입</h1>

  <form action="progressSignUp" class="signUpForm" id="signUpForm" method="POST">
    
    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="id">아이디</label>
        <div class="idInput">
          <input 
            id="member_id"
            name="member_id"
            placeholder="아이디를 입력해주세요."
            type="text">
        </div>
      </div>
      <label class="error" for="member_id"></label>
    </div>
    
    <br>

    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="pw">비밀번호</label>
        <div class="pwInput">
          <input 
            id="member_pw"
            name="member_pw"
            placeholder="비밀번호를 입력해주세요."
            type="password">
        </div>
      </div>
      <label class="error" for="member_pw"></label>
    </div>
    
    <br>
    
    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="name">이름</label>
        <div class="nameInput">
          <input 
            id="member_name"
            name="member_name"
            placeholder="이름을 입력해주세요."
            type="text">
        </div>
      </div>
      <label class="error" for="member_name"></label>
    </div>
    
    <br>
    
    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="nickname">닉네임</label>
        <div class="nicknameInput">
          <input
            id="member_nickname"
            name="member_nickname"
            placeholder="닉네임을 입력해주세요."
            type="text">
        </div>
      </div>
      <label class="error" for="member_nickname"></label>
    </div>
    
    <br>
    
    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="email">이메일</label>
        <div class="emailInput">
          <input 
            id="member_email"
            name="member_email"
            placeholder="이메일을 입력해주세요."
            type="text">
        </div>
      </div>
      <label class="error" for="member_email"></label>
    </div>
    
    <br>
    
    <div class="input-div">
      <div class="input-div2">
        <label class="input-label" for="mobile">휴대폰 번호</label>
        <div class="mobileInput">
          <input 
            id="member_mobile"
            name="member_mobile"
            placeholder="휴대폰 번호를 입력해주세요."
            type="text">
        </div>
      </div>
      <label class="error" for="member_mobile"></label>
    </div>
    
    <br>
    
    <div class="btn-area">
      <button>회원가입</button>
    </div>

  </form>
</div>