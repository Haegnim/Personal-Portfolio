function horawheel() {
  const Home = document.querySelector(".home");
  const workVeiw = document.querySelector(".work-veiw");
  const workList = document.querySelector(".work-list");
  const work = document.querySelectorAll(".work-list li");
  const Info = document.querySelector(".info");
  // let scrollX = 1;
  // const workVeiwX = workVeiw.offsetWidth;
  const workX = work[1].offsetWidth;
  // console.log(workVeiwX);

  const workListX = work.length * (workX + 70) - 70;
  workList.style.width = workListX + "px";

  let tranX = 1;
  window.onmousewheel = function (e) {
    if (e.wheelDelta >= 120) {
      console.log("wheel up");
      tranX += 150;
    } else {
      Home.style.transform = "translateX(-35%)";
      console.log("wheel down");
      tranX -= 150;
    }

    if (tranX > 0) {
      tranX = 0;
      Home.style.transform = "translateX(0%)";
      // Home.style.transform = "translateX(0%)";
    } else if (Math.abs(tranX) > workListX / 3) {
      tranX = -(workListX / 3);
    }
    workList.style.transform = "translateX(" + tranX + "px)";
    console.log(tranX);
  };
}
horawheel();
