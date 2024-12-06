$(function () {

  // 아이디 중복 검증
  $.validator.addMethod("checkDuplicateId", function(value) {
    // Debug
    console.log("checkDuplicateId 호출", value);
  });

  // 닉네임 금지 단어 검증
  $.validator.addMethod("checkBlacklistNickname", function(value) {
    // Debug
    console.log("checkBlacklistNickname 호출", value);
  });

  // 이메일 형식 검증
  $.validator.addMethod("checkEmail", function(value) {
    // Debug
    console.log("checkEmail 호출", value);
  });

  // 휴대폰 번호 형식 검증
  $.validator.addMethod("checkMobile", function(value) {
    // Debug
    console.log("checkMobile 호출", value);

    let hyphenRegex = /(^01[0-9])-([0-9]{3,4})-([0-9]{4})$/;
    let result = hyphenRegex.test(value);

    return result;
  });

  // 회원가입 form validate
  $("#signUpForm").validate({
    rules: {
      member_id: {
        required: true,
        checkDuplicateId: true,
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
        checkEmail: true,
      },
      member_mobile: {
        required: true,
        checkMobile: true,
      },
    },
    messages: {
      member_id: {
        required: "아이디를 입력하세요.",
        checkDuplicateId: "중복된 아이디입니다.",
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
        checkEmail: "유효한 형식의 이메일을 입력하세요.",
      },
      member_mobile: {
        required: "휴대폰 번호를 입력하세요.",
        checkMobile: "유효한 형식의 휴대폰 번호를 입력하세요.",
      },
    },
    submitHandler: function(form) {
      form.submit();
    },
  });

  // TODO: 로그인 폼 validate

});