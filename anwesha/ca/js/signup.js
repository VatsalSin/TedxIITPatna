// jQuery & Velocity.js

function slideUpIn() {
  $("#login").velocity("transition.slideUpIn", 1250)
};

function slideLeftIn() {
  $(".row").delay(500).velocity("transition.slideLeftIn", {stagger: 500})    
}

function shake() {
  // let content = $('form').serializeArray();
  // content.forEach(e => {
  //   if(e.value == ""){
  //     $(".username-row").velocity("callout.shake");
  //   }
  // });
  // $(".username-row").velocity("callout.shake");
}

slideUpIn();
slideLeftIn();
$("button").on("click", function () {
  shake();
});