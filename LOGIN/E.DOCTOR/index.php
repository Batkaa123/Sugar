<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }
?>

<!DOCTYPE html>


<html lang="">


<head>
<title>E.Doctor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top"> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +976 954-460-28</li>
        <li><i class="fa fa-envelope-o"></i> batb73979@gmail.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="https://www.facebook.com/battsooj.amartvwstin"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li><a href="https://www.google.com/maps/@47.9166464,106.9088768,12z"><i class="fa fa-lg fa-map-marker"></i></a></li>
        <li><a href="../E.DOCTOR/pages/feedback/index.php">Судалгаа өгөх</a></li>
        <li><a href="../logout.php">Гарах</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">E.Doctor</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a class="drop" href="#">Зөвлгөө</a>
          <ul>
            <li><a href="pages/index1.php">Эрүүл хооллолт</a></li>
            <li><a href="pages/index2.php">Шинж тэмдэгүүд илэрсэн үед</a></li>
            <li><a href="pages/index3.php">Сахарыг хэрхэн таних вэ?</a></li>
            <li><a href="pages/index4.php">Эмнэлэг</a></li>
          </ul>
        </li>
          <li><a class="drop" href="#">Мэдээ мэдээлэл</a>
          <ul>
            <li><a href="pages/gallery.php">Зураг</a></li>
            <li><a href="pages/full-width.php">Сахар гэж юу вэ?</a></li>
            <li><a href="pages/sidebar-left.php">Сахарын Хэмжээ</a></li>
            <li><a href="pages/sidebar-right.php">Урьдчилан Сэргийлэх</a></li>
          </ul>
          </li>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/purple.jfif');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
        <li>
          <article>
            <p></p>
            <h3 class="heading">Чихрийн шижин</h3>
            <p>Өнөөдөр дэлхий дээр энэ өвчнөөр өвдсөн хүний тоо 347 саяд хүрээд байгаагаас Монголд 7000 нь байдаг гэсэн тоо баримт байдаг.</p>
            <footer><a class="btn" href="pages/full-width.php">Дэлгэрэнгүй</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p></p>
            <h3 class="heading">Цусан дахь сахарын хэмжээ</h3>
            <p>Цусан дахь сахарын багасалт (Гипогликеми) нь таны цусан дахь сахар (глюкоз) хэвийн хэмжээнээс буурах үед тохиолддог нөхцөл байдал юм.</p>
            <footer><a class="btn inverse" href="pages/sidebar-left.php"> Дэлгэрэнгүй</a></footer>
          </article>
        </li>
        <li>
          <article>
            <p></p>
            <h3 class="heading">Урьдчилан сэргийлэх</h3>
            <p>Эрүүл зөв хооллох, Идэвхитэй дасгал хөдөлгөөн хийх, Илүүдэл жингүй байх, илүүдэл жинтэй бол түүнийгээ хасах, Хорт зуршлаас татгалзах</p>
            <footer><a class="btn" href="pages/sidebar-right.php">Дэлгэрэнгүй</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Чихрийн шижин</h3>
      <p>Диабет | 糖尿病 | 당뇨병 | Diyabet | 糖尿病</p>
    </div>
    <p class="btmspace-50 justified">Чихрийн шижин (лат. Diabetes mellitus) нь хүний биеийн нойр булчирхай хангалттай хэмжээний инсулин боловсруулж чадахгүй, эсвэл боловсорсон инсулин нь бие эсүүдэд нөлөөлж чадахгүй болсон үед үүсдэг бодисын солилцооны бүлэг өвчин. Чихрийн шижингийн үед хүний цусан дахь сахарын хэмжээ өндөр болдог. Цусан дахь сахарын төвшин их байхын сонгодог шинж тэмдэгүүд нь, их шээх (полиури), их уух (полидипси) ба идэмхий (полифаги) болдог.</p>
    <ul class="nospace group center">
      <li class="one_quarter first">
        <article><a href="#"><i class="icon btmspace-30 fa fa-flask"></i></a>
          <h6 class="heading">Өвчин</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="icon btmspace-30 fa fa-adjust"></i></a>
          <h6 class="heading">Хамрах хэлбэр</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="icon btmspace-30 fa fa-bank"></i></a>
          <h6 class="heading">Өвчлөл</h6>
        </article>
      </li>
      <li class="one_quarter">
        <article><a href="#"><i class="icon btmspace-30 fa fa-500px"></i></a>
          <h6 class="heading">Нийт</h6>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/images(1).jfif');">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="three_quarter first">
      <h6 class="nospace">СУДАЛГАА ӨГӨХ</h6>
      <p class="nospace">хэрэв таньд  шинж тэмдэгүүд илэрч байвал</p>
    </div>
    <footer class="one_quarter"><a class="btn" href="../E.DOCTOR/pages/feedback/index.php">Энд дарнуу &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay light" style="background-image:url('images/demo/backgrounds/sigar.jpg');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Цусан дахь сахарын хэмжээ түүнээс урьдчилан сэргийлэх</h3>
      <p>Цусан дахь сахарын хэмжээ түүнээс урьдчилан сэргийлэх.</p>
    </div>
    <ul class="nospace group services">
      <li class="one_third first">
        <article><a href="pages/gallery.html"><i class="icon fa fa-chevron-up"></i></a>
          <h6 class="heading">Hendrerit bibendum</h6>
          <p>Id erat etiam molestie mi et tincidunt facilisis nulla urna viverra nibh in ullamcorper&hellip;</p>
        <!-- ################################################################################################ -->
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-calendar-o"></i></a>
          <h6 class="heading">Vestibulum suscipit</h6>
          <p>Enim nullam tincidunt tortor eget amet dui duis sed vestibulum velit praesent blandit lorem viverra&hellip;</p>
         <!-- ################################################################################################ -->
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-coffee"></i></a>
          <h6 class="heading">Velit eu maximus massa</h6>
          <p>Turpis vel egestas ante etiam maximus placerat placerat aliquam in lectus ut lectus&hellip;</p>
         <!-- ################################################################################################ -->
        </article>
      </li>
      <li class="one_third first">
        <article><a href="#"><i class="icon fa fa-dribbble"></i></a>
          <h6 class="heading">Dignissim id maecenas</h6>
          <p>Scelerisque sollicitudin aenean efficitur magna non aliquet convallis phasellus ut rutrum&hellip;</p>
          <!-- ################################################################################################ -->
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-phone"></i></a>
          <h6 class="heading">Tempus odio a ipsum</h6>
          <p>Neque vivamus eu arcu enim phasellus efficitur euismod augue sed bibendum ipsum sodales&hellip;</p>
          <!-- ################################################################################################ -->
        </article>
      </li>
      <li class="one_third">
        <article><a href="#"><i class="icon fa fa-envelope-o"></i></a>
          <h6 class="heading">Consequat scelerisque</h6>
          <p>Eget aenean tellus leo consequat sit amet quam ut interdum commodo nunc nunc ipsum lacus&hellip;</p>
          <!-- ################################################################################################ --> 
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Чихрийн шижингийн хор уршиг</h3>
      <p>Цусны сахарын хэмжээ 15 ммол/л-ээс их бол “маш их” гэж үзээд, анхаарал хандуулах хэрэгтэй.</p>
    </div>
    <figure>
      <ul class="nospace group logos">
        <li class="one_quarter first"><a href="#"><img src="images/demo/320x220.png" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/demo/320x220.png" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/demo/320x220.png" alt=""></a></li>
        <li class="one_quarter"><a href="#"><img src="images/demo/320x220.png" alt=""></a></li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/et.webp');">
  <article class="hoc container"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Чихрийн шижин</h3>
      <p>Чихрийн шижингийн тухай бид юу мэддэг вэ?</p>
    </div>
    <ul class="nospace group">
      <li class="one_half first borderedbox inspace-15">
        <blockquote>-Инсулины туйлын дутагдал (нойр булчирхайн үйл ажиллагаа алдагдсанаас үүснэ). Үүний улмаас цусан дахь сахарын хэмжээг зохицуулдаг инсулин нэртэй дааврыг ялгаруулахаа больдог.</blockquote>
        <p class="right bold">Нэгдүгээр хэлбэрийн чихрийн шижин: /</p>
      </li>
      <li class="one_half borderedbox inspace-15">
        <blockquote>-Инсулины харьцангуй дутагдал (инсулины ялгаралт хэвийн ч биеийн эсүүд түүнийг мэдрэхээ болихыг хэлнэ). Чихрийн шижин өвчтэй гэж оношлогдсон хүмүүсийн 90-95 хувьд энэ хэв шинжийн чихрийн шижин тохиолддог.</blockquote>
        <p class="right bold">Хоёрдугаар хэлбэрийн чихрийн шижин: /</p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Чихрийн шижин өвчнөөр өвчлөх магадлал</h3>
      <p>Судалгаанаас үзэхэд Монгол Улсад 20-79 насны 1000 хүний 99.3 тохиолдол буюу насанд хүрсэн 20 хүний нэг нь чихрийн шижин өвчнтэй байна.</p>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/320x220.png" alt=""></a>
          <div class="excerpttxt">
            <ul>
              <li><i class="fa fa-calendar-o"></i> 06/01/2010</li>
            </ul>
            <h6 class="heading font-x1">Нийт 1000 хүн тутамын 71.3 хувь&hellip;</h6>
            <p><a class="btn" href="#">Цааш нь &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/320x220.png" alt=""></a>
          <div class="excerpttxt">
            <ul>
              <li><i class="fa fa-calendar-o"></i> 05/01/2015</li>
            </ul>
            <h6 class="heading font-x1">Нийт 1000 хүн тутамын 84.6 хувь&hellip;</h6>
            <p><a class="btn" href="#">Цааш нь &raquo;</a></p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="excerpt"><a href="#"><img class="inspace-10 borderedbox" src="images/demo/320x220.png" alt=""></a>
          <div class="excerpttxt">
            <ul>
              <li><i class="fa fa-calendar-o"></i> 04/01/2020</li>
            </ul>
            <h6 class="heading font-x1">Нийт 1000 хүн тутамын 99.3 хувь&hellip;</h6>
            <p><a class="btn" href="#">Цааш нь &raquo;</a></p>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/images.jpg');">
  <article class="hoc container center"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h3 class="heading">Бидний тухай илүү их мэдээлэл</h3>
      <p>Та доорх линкээр орж илүү дэлгэрэнгүй мэдээлэл аваарай.</p>
    </div>
    <footer><a class="btn inverse" href="#">access</a></footer>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">Холбогдох</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Улаанбаатар &amp; Сүхбаатар дүүрэг, 6-р хороо/Сани 34-р байр
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +976 86800928</li>
        <li><i class="fa fa-envelope-o"></i> batb73979@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Дэлхийн хэмжээнд</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Судалгаа хийгдсэн хэлбэр</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Дөрөвдүгээр сарын 1,<sup>th</sup> Баасан гараг 2022</time>
            <p class="nospace">Шинжлэх ухаанч мэдлэгийг хамгийн энгийн байдлаар тайлбарлан танд хүргэж байна. [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Сайт хийгдсэн хэлбэр</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Дөрөвдүгээр сарын 10,<sup>th</sup>Пүрэв гараг 2022</time>
            <p class="nospace">Шинжлэх ухаанч мэдлэгийг хамгийн энгийн байдлаар тайлбарлан танд хүргэж байна. [&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Нэмэлт мэдээлэл</h6>
      <p class="nospace btmspace-30"> Бид таны ирүүлсэн мэдээллийг чандлан нууцлах бөгөөд E.DOCTOR Website-ийн Ёс зүйн Хороо хянаж, асуудлыг шийдвэрлэнэ..</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Зохиогчийн эрх & хуулбар; 2022 онд - Бүх эрх хуулиар хамгаалагдсан - <a href="#">e.doctor.mn</a></p>
    <p class="fl_right">Загвар хийсэн<a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates"> E.DT</a> Клуб</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>