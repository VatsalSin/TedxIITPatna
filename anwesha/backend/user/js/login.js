var playing = false;

document.getElementById("card").addEventListener('click',function() {
  if(playing)
    return;
  playing = true;
  anime({
    targets: cards,
    scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
    rotateY: {value: '+=180', delay: 200},
    easing: 'easeInOutSine',
    duration: 400,
    complete: function(anim){
       playing = false;
    }
  });
});
document.getElementById("carded").addEventListener('click',function() {
  if(playing)
    return;
  playing = true;
  anime({
    targets: cards,
    scale: [{value: 1}, {value: 1.4}, {value: 1, delay: 250}],
    rotateY: {value: '+=180', delay: 200},
    easing: 'easeInOutSine',
    duration: 400,
    complete: function(anim){
       playing = false;
    }
  });
});