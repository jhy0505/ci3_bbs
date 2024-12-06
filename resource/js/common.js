$(function () {
  $(".testArea").on("click", function() {
    console.log("testArea를 눌렀습니다.");
  });
});

function addHyphen(obj) 
{
  // Debug
  // console.log("addHyphen 호출", obj.value);

  let noString = obj.value.replace(/[^0-9]/g, "");

  let addHyphen = noString.replace(/(^01[0-9])([0-9]{3,4})([0-9]{4})$/, "$1-$2-$3");

  // Debug
  // console.log(addHyphen);

  obj.value = addHyphen;
}