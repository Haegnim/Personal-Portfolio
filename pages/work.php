<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title> Hyekyeuong | PORTFOLIO | WORK </title>

  <!-- font awesome link -->
  <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700&family=Roboto:wght@100;300;400;500;700&family=Poiret+One&display=swap"
    rel="stylesheet" />
  <!-- favicon link -->
  <link rel="apple-touch-icon" sizes="57x57" href="/MY-P/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/MY-P/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/MY-P/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/MY-P/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/MY-P/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/MY-P/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/MY-P/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/MY-P/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/MY-P/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/MY-P/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/MY-P/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/MY-P/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/MY-P/favicon/favicon-16x16.png">
  <link rel="manifest" href="/MY-P/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/MY-P/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- reset css link -->
  <link rel="stylesheet" href="/MY-P/css/reset.css" />
  <!-- animation css link -->
  <link rel="stylesheet" href="/MY-P/css/animation.css" />
  <!-- main css link -->
  <link rel="stylesheet" href="/MY-P/css/style.css" />
  <!-- media css link -->
  <link rel="stylesheet" href="/MY-P/css/media.css" />
  <style>
  body {
    overflow: auto;
  }
  </style>
</head>

<body>
  <!-- <script>
      location.href = "/my-p/pages/intro.html";
    </script> -->
  <div class="wrap-work">
    <header class="header">
      <div class="hamberger">
        <span></span>
        <span></span>
      </div>
      <div class="logo">
        <a href="/MY-P/index.php">
          <h3>hyekyeuong</h3>
          <img src="/MY-P/favicon/apple-icon-57x57.png" alt="">
        </a>
      </div>
      <div class="email">
        <a href="mailto:heagim@gmail.com">heagim@gmail.com</a>
      </div>
    </header>
    <div class="hide-nav">
      <ul>
        <li><a href="/MY-P/index.php">HOME</a></li>
        <li><a href="https://pitch-booklet-498.notion.site/278b9419a19b45aea9541bf8f2c9f35d" target="_blank">ABOUT
            ME</a></li>
        <li><a href="/MY-P/pages/work.php?cate=all">work</a></li>
        <li class="in-ul"><a href="/MY-P/pages/work.php?cate=develop">code</a></li>
        <li class="in-ul"><a href="/MY-P/pages/work.php?cate=design">Visual</a></li>
        <li><a href="/MY-P/pages/resume.pdf" target="_blank">resume</a></li>
      </ul>
    </div>
    <main>
      <h3>Work gallery</h3>
      <div class="nav-center">

        <nav>
          <a href="/MY-P/pages/work.php?cate=develop">code</a>
          <a href="/MY-P/pages/work.php?cate=all">All</a>
          <a href="/MY-P/pages/work.php?cate=design">Visual</a>
        </nav>
      </div>
      <section class="gallery">
        <h4></h4>
        <div class="center">
          <ul class="artwork">
            <?php

          $popowork = $_GET['cate'];
        include $_SERVER['DOCUMENT_ROOT']."/connect/db_conn.php";
          if($popowork == 'all'){
            $sql = "SELECT * FROM popo_work ORDER BY work_idx ASC";
          }else{
            $sql = "SELECT * FROM popo_work WHERE work_cate='{$popowork}' ORDER BY work_idx ASC";
          }

          // echo $tain;
            $work_result = mysqli_query($dbConn, $sql);
            $work_num_result = mysqli_num_rows($work_result);
            // $work_row=mysqli_fetch_array($work_result);
            // echo $work_cate;
            while($work_row=mysqli_fetch_array($work_result)){
            $work_img = $work_row['work_img'];
            $work_moreview = $work_row['work_moreview'];
            // echo $work_skill, $work_link, $work_moreview, $work_git, $work_desc;
        ?>
            <li class="card">
              <a href="<?=$work_moreview?>" target="_blank">
                <img src="/MY-P/img/popo/<?=$work_img?>" alt="">
              </a>
            </li>
            <?php }?>

          </ul>
        </div>

      </section>
    </main>

    <footer></footer>
  </div>
  </script>
  <script src="/MY-P/js/workpage.js">
  //이미지지로로드 지지연연
  </script>
</body>

</html>