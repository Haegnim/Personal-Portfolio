function horawheel() {
  const workList = document.querySelector(".work-list");
  const work = document.querySelectorAll(".work-list li");
  const workVeiw = document.querySelector(".work-veiw");
  const Home = document.querySelector(".home");
  const Info = document.querySelector(".info");
  // let scrollX = 1;
  // const workVeiwX = workVeiw.offsetWidth;
  const workX = work[0].offsetWidth;
  const HomeX = Home.offsetWidth;
  const InfoX = Info.offsetWidth;
  // console.log(workVeiwX);

  const workListX = work.length * (workX + 70) + 70;
  workList.style.width = workListX + "px";

  let offset = 0;

  window.addEventListener("wheel", e => {
    // console.log(e);
    if (Math.abs(e.deltaY) < 120) {
      // console.log("delay");
      e.deltaX = 0;
      offset += Math.sign(e.deltaY) * 25;
    } else {
      offset += Math.sign(e.deltaY) * 150;
      console.log("delay");
    }
    console.log(offset);
    if (offset >= 120) {
      Info.style.opacity = 0;
      Home.style.background = "#fff";
      workVeiw.style.background = "#fff";
      // console.log("wheel down");
    } else {
      Info.style.opacity = 1;
      Home.style.background = "#efefef";
      workVeiw.style.background = "#efefef";
    }

    if (offset < 0) {
      offset = 0;
    } else if (offset > workListX - workX) {
      offset = workListX - workX;
    }
    workList.style.transform = `translateX(-${offset}px`;
  });
}
horawheel();

function hambergerClick() {
  const hamberger = document.querySelector(".hamberger");
  const tabnav = document.querySelector("aside");

  hamberger.addEventListener("click", function () {
    tabnav.classList.toggle("on");
    hamberger.classList.toggle("on");
  });
}
hambergerClick();

function introOut() {
  const intro = document.querySelector(".intro");
  // console.log(intro);
  // intro.style.display = "none";
  setTimeout(function () {
    intro.style.display = "none";
  }, 4000);
}
introOut();

function setCookie(cname, cvalue, min) {
  const exdate = new Date();
  exdate.setMinutes(exdate.getMinutes() + min);
  // d.setTime(d.getTime() + days * 24 * 60 * 60 * 1000);
  const expires = "expires=" + exdate.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

// setCookie("open", "started", "exdays");

function getCookie(cname) {
  const name = cname + "=";
  const decodedCookie = decodeURIComponent(document.cookie);
  const ca = decodedCookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }

    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  console.log("get");
  return "";
}
getCookie(open);

function checkCookie() {
  const intro = document.querySelector(".intro");
  const workVeiw = document.querySelector(".work-veiw");
  const Home = document.querySelector(".home");
  const Info = document.querySelector(".info");
  const header = document.querySelector(".header");

  const checkIntro = getCookie("open");
  if (checkIntro != "") {
    // alert("잘 오셨어요. " + intro + " 님");
    intro.classList.toggle(checkIntro);
  } else {
    setCookie("open", "started", 3);
    workVeiw.classList.toggle("start");
    Home.classList.toggle("start");
    Info.classList.toggle("start");
    header.classList.toggle("start");
  }
}
checkCookie();
