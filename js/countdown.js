    
const comingdate = new Date("Mar 20, 2019 10:00:00");

const d = document.getElementById("d");
const h = document.getElementById("h");
const m = document.getElementById("m");
const s = document.getElementById("s");

let countdown = setInterval(() => {
  const now   = new Date();
  const des   = comingdate.getTime() - now.getTime();
  const days  = Math.floor(des / (1000 * 60 * 60 * 24));
  const hours = Math.floor((des % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const mins  = Math.floor((des % (1000 * 60 * 60)) / (1000 * 60));
  const secs  = Math.floor((des % (1000 * 60)) / 1000);

  d.innerHTML = getTrueNumber(days);
  h.innerHTML = getTrueNumber(hours);
  m.innerHTML = getTrueNumber(mins);
  s.innerHTML = getTrueNumber(secs);

  if (countdown <= 0) clearInterval(countdown);
}, 1000);

const getTrueNumber = x => (x < 10 ? "0" + x : x);
