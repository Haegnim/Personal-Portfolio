function imgDefer() {
  const img = document.getElementsByTagName("img");
  for (var i = 0; i < img.length; i++) {
    if (img[i].getAttribute("data-src")) {
      img[i].setAttribute("src", img[i].getAttribute("data-src"));
    }
  }
}
window.onload = imgDefer;

//헤더 스티키 애니메이션
function headerAni() {
  const header = document.querySelector("header");
  const nav = document.querySelector(".nav-center");

  // console.log(header);

  document.addEventListener("scroll", function () {
    let winTop = document.documentElement.scrollTop;
    // console.log(winTop);
    const headerTP = 60;
    const navTP = 320;

    // console.log(headerTP);
    if (winTop >= headerTP) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
    if (winTop >= navTP) {
      nav.classList.add("sticky");
    } else {
      nav.classList.remove("sticky");
    }
  });
}
headerAni();
//햄버거 아이콘 애니메이션
function hambergerClick() {
  const hamberger = document.querySelector(".hamberger");
  const tabnav = document.querySelector(".hide-nav");

  hamberger.addEventListener("click", function () {
    tabnav.classList.toggle("on");
    hamberger.classList.toggle("on");
  });
}
hambergerClick();

//card 가로길이 대입
function cardH() {
  const card = document.querySelectorAll(".card");
  const cardX = card[0].offsetWidth;
  for (let i = 0; i < card.length; i++) {
    card[i].style.height = cardX + "px";
  }
}
cardH();
function resize() {
  window.addEventListener("resize", function () {
    cardH();
  });
}
resize();
