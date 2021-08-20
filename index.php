<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>my-p</title>
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Roboto:wght@100;300;400;500;700&display=swap"
    rel="stylesheet" />
  <link rel="apple-touch-icon" href="/zay/img/favicon.ico" />
  <!-- font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Poiret+One&display=swap"
    rel="stylesheet" />
  <!-- reset css link -->
  <link rel="stylesheet" href="/MY-P/css/reset.css" />
  <!-- animation css link -->
  <link rel="stylesheet" href="/MY-P/css/animation.css" />
  <!-- main css link -->
  <link rel="stylesheet" href="/MY-P/css/style.css" />
  <!-- media css link -->
  <link rel="stylesheet" href="/MY-P/css/media.css" />
</head>

<body>
  <!-- <script>
      location.href = "/my-p/pages/intro.html";
    </script> -->
  <div class="wrap">
    <header class="header">
      <div class="hamberger">
        <span></span>
        <span></span>
      </div>
      <div class="logo" onclick="logoclick()">
        <h3>hyekyeuong</h3>
      </div>
      <div class="email">
        <a href="mailto:heagim@gmail.com">heagim@gmail.com</a>
      </div>
    </header>
    <div class="hide-nav">
      <ul>
        <li><a href="/MY-P/pages/about_me.html">ABOUT ME</a></li>
        <li><a href="">work</a></li>
        <ui class="in-ul">
          <li><a href="">developer</a></li>
          <li><a href="">designer</a></li>
        </ui>
        <li><a href="">resume</a></li>
      </ul>
    </div>
    <div class="home">
      <section class="info">
        <h4 class="blind">자기소개</h4>
        <div class="introduction">
          <div class="faceani">

            <span class="face-hello"></span>
            <div class="face">

              <video autoplay loop muted>
                <source src="/MY-P/img/mimoji.mp4" type="video/mp4">
              </video>
              <!-- <img src="/MY-P/img/mimoji.png" alt="" /> -->
            </div>
          </div>
          <div class="hello">
            <div class="aboutme">
              <div class="about-tit">
                <h4>Kim hyekyeuong</h4>
                <span>
                  <a href="https://github.com/Haegnim"><i class="fa fa-github"></i></a>
                  <a href="https://www.instagram.com/haegnim/"><i class="fa fa-instagram"></i></a>
                  <!-- <i class="fa fa-twitter"></i> -->
                </span>
              </div>
              <div class="contack">
                <span>
                  <p>email</p>
                  <a href="mailto:heagim@gmail.com">haegnim@gmail.com</a>
                </span>
                <span>
                  <p>chat</p>
                  <a href="https://open.kakao.com/o/spSor7ud">오픈카카오톡</a>
                </span>
              </div>
              <div class="golink">
                <a href="/MY-P/pages/about_me.html" class="aboutlink">
                  About me
                  <i class="fa fa-caret-right"></i>
                </a>
                <a href="/MY-P/pages/resume.pdf" class="aboutlink">
                  resume
                  <i class="fa fa-caret-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="imymemine">
            <b>저는요</b>
            <ul>
              <li>사사부부작작사사바바사사북</li>
            </ul>
          </div> -->
        <div class="skill">
          <b>Skill</b>
          <div class="devel-skill">
            <em>developer</em>
            <ul>
              <li>
                <img src="/MY-P/icon/html.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/css.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/javascript.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/php.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/sass.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/database.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/git.svg" alt="" />
              </li>
            </ul>
          </div>
          <div class="design">
            <em>designer</em>
            <ul>
              <li>
                <img src="/MY-P/icon/Photoshop.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/Illustrator.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/InDesign.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/AfterEffects.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/Xd.svg" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/c4d.png" alt="" />
              </li>
              <li>
                <img src="/MY-P/icon/glyphs.png" alt="" />
              </li>
            </ul>
          </div>
        </div>
      </section>

      <div class="btnbox">
        <p>chess cate</p>
        <button type="button" class="btn-all active">ALL</button>
        <button type="button" class="btn-develop">Develop</button>
        <button type="button" class="btn-design">Design</button>
      </div>
      <div class="scrollani">
        <svg id="scrolldown" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <path class="cls-1" d="M35.52,17.84a34.55,34.55,0,1,0,15.37-3.6V64.81L35.12,50.11" />
        </svg>
        <p>scroll<br>down</p>
      </div>
      <section class="work-veiw">
        <ul class="work-list">
          <?php
        include $_SERVER['DOCUMENT_ROOT']."/connect/db_conn.php";
          // echo $tain;
            $sql = "SELECT * FROM popo_work ORDER BY work_idx ASC";
            $work_result = mysqli_query($dbConn, $sql);
            $work_num_result = mysqli_num_rows($work_result);

            while($work_row=mysqli_fetch_array($work_result)){
            $work_idx = $work_row['work_idx'];
            $work_num = $work_row['work_num'];
            $work_cate = $work_row['work_cate'];
            $work_subname = $work_row['work_subname'];
            $work_name = $work_row['work_name'];
            $work_img = $work_row['work_img'];
            $work_skill = $work_row['work_skill'];
            $work_link = $work_row['work_link'];
            $work_moreview = $work_row['work_moreview'];
            $work_git = $work_row['work_git'];
            $work_desc = $work_row['work_desc'];

            // echo $work_skill, $work_link, $work_moreview, $work_git, $work_desc;
        ?>
          <!-- loop start -->
          <li class="work" data-<?=$work_cate?>=<?=$work_cate?>>
            <span class="over"> </span>
            <p class="tag"><?=$work_desc?></p>
            <div class="work-subject">
              <span class="cata"> <?=$work_cate?> </span>
              <em><?=$work_num?></em>
              <b><?=$work_subname?></b>
              <h4><?=$work_name?></h4>
              <ul class="skilltoll">
                <?=$work_skill?>
              </ul>
              <div class="work-link">
                <a href="<?=$work_moreview?>"> more view </a>
                <a href="<?=$work_git?>" class="gitbtn"> git </a>
                <a href="<?=$work_link?>"> link </a>
              </div>
            </div>
            <img src="/MY-P/img/popo/<?=$work_img?>" alt="" />
          </li>

          <!-- loop end -->
          <?php }?>
          <li class="end-page"></li>
        </ul>
      </section>
    </div>
    <footer></footer>
    <div class="intro">
      <p>안녕하세요</p>
      <p>다재다능한 디발자, 김혜경입니다.</p>
      <p>다재다능한 디발자, 김혜경입니다.</p>
    </div>
  </div>
  <script src="/MY-P/js/main.js"></script>
</body>

</html>