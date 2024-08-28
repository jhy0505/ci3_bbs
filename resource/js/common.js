$(function () {
  $(".testArea").on("click", function() {
    console.log("testArea를 눌렀습니다.");
  });

  // 회원가입 form validate
  $("#signUpForm").validate({
    rules: {
      member_id: {
        required: true,
      },
      member_pw: {
        required: true,
      },
      member_name: {
        required: true,
      },
      member_nickname: {
        required: true,
      },
      member_email: {
        required: true,
      },
      member_mobile: {
        required: true,
      },
    },
    messages: {
      member_id: {
        required: "아이디를 입력하세요.",
      },
      member_pw: {
        required: "비밀번호를 입력하세요.",
      },
      member_name: {
        required: "이름을 입력하세요.",
      },
      member_nickname: {
        required: "닉네임을 입력하세요.",
      },
      member_email: {
        required: "이메일을 입력하세요.",
      },
      member_mobile: {
        required: "휴대폰 번호를 입력하세요.",
      },
    },
    submitHandler: function(form) {
      form.submit();
    },
  });
});