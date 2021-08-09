function horawheel() {
  const Home = document.querySelector(".home");
  const workVeiw = document.querySelector(".work-veiw");
  const workList = document.querySelector(".work-list");
  const work = document.querySelectorAll(".work-list li");
  const Info = document.querySelector(".info");
  // let scrollX = 1;
  // const workVeiwX = workVeiw.offsetWidth;
  const workX = work[1].offsetWidth;
  const HomeX = Home.offsetWidth;
  // console.log(workVeiwX);

  const workListX = work.length * (workX + 70) + 70;
  workList.style.width = workListX + "px";

  let tranX = 1;
  window.onmousewheel = function (e) {
    if (e.wheelDelta >= 120) {
      console.log("wheel up");
      tranX += 150;
    } else {
      Info.style.opacity = 0;
      Home.style.background = "#fff";
      console.log("wheel down");
      tranX -= 150;
    }

    if (tranX > 0) {
      tranX = 0;
      Info.style.opacity = 1;
      Home.style.background = "#efefef";
    } else if (workListX < Math.abs(tranX)) {
      tranX = -1 * workListX;
    }
    Home.scrollLeft = -1 * tranX;
    console.log(Home.scrollLeft);
    console.log(HomeX);
    console.log(tranX);
  };
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
