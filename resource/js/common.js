$(function () {
  $(".testArea").on("click", function() {
    console.log("testArea를 눌렀습니다.");
  });
});

function signUpValidation(form) 
{
  // console.log("js - signUpValidation 진입");

  let memberId = $(form).find("[name=member_id]").val();
  let memberPw = $(form).find("[name=member_pw]").val();
  let memberName = $(form).find("[name=member_name]").val();
  let memberNickname = $(form).find("[name=member_nickname]").val();
  let memberEmail = $(form).find("[name=member_email]").val();
  let memberMobile = $(form).find("[name=member_mobile]").val();

  // console.log("memberId: ", memberId);
  // console.log("memberPw: ", memberPw);
  // console.log("memberName: ", memberName);
  // console.log("memberNickname: ", memberNickname);
  // console.log("memberEmail: ", memberEmail);
  // console.log("memberMobile: ", memberMobile);

  // 필수 값 체크
  if (memberId === "") {
    alert("아이디를 입력해주세요.");
    
    // console.log("아이디를 입력해주세요.");
    return false;
  }

  if (memberPw === "") {
    alert("비밀번호를 입력해주세요.");
    // console.log("비밀번호를 입력해주세요.");
    return false;
  }

  if (memberName === "") {
    alert("이름을 입력해주세요.");
    // console.log("이름을 입력해주세요.");
    return false;
  }

  if (memberNickname === "") {
    alert("닉네임을 입력해주세요.");
    // console.log("닉네임을 입력해주세요.");
    return false;
  }

  if (memberEmail === "") {
    alert("이메일을 입력해주세요.");
    // console.log("이메일을 입력해주세요.");
    return false;
  }

  if (memberMobile === "") {
    alert("휴대폰 번호를 입력해주세요.");
    // console.log("휴대폰 번호를 입력해주세요.");
    return false;
  }

  return true;
}