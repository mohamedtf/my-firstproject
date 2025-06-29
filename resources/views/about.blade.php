<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>عن مدرستي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body {
      background-color: #e0f7fa;
      font-family: 'Cairo', sans-serif;
      overflow-x: hidden;
    }

    nav {
      background-color: #0288d1;
    }

    nav .navbar-brand {
      color: #fff;
      font-weight: bold;
      font-size: 1.5rem;
    }

    nav a.nav-link {
      color: #fff;
      font-weight: 600;
    }

    section {
      padding: 60px 0;
    }

    .section-title {
      margin-bottom: 40px;
      text-align: center;
      color: #01579b;
    }

    .icon-box {
      text-align: center;
      padding: 30px;
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.1);
      transition: 0.3s;
    }

    .icon-box i {
      font-size: 40px;
      color: #0288d1;
      margin-bottom: 15px;
    }

    .icon-box:hover {
      transform: translateY(-5px);
    }

    footer {
      background-color: #0288d1;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
    }

    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: 0.8s ease;
    }

    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#"><i class="fas fa-school"></i> مدرستي</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{url('/index')}}">الرئيسية</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{url('/about')}}">من نحن</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/store/create')}}">الإشتراك</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">الإدارة</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- About Section -->
<section class="container" style="margin-top:100px;">
  <h2 class="section-title fade-in">من نحن</h2>
  <div class="row text-center">
    <div class="col-md-4 mb-4 fade-in">
      <div class="icon-box">
        <i class="fas fa-book-reader"></i>
        <h5 class="mt-3">تعليم متميز</h5>
        <p>نقدم برامج تعليمية حديثة ومبتكرة تهدف إلى تنمية مهارات الطلاب ومساعدتهم على النجاح.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 fade-in">
      <div class="icon-box">
        <i class="fas fa-chalkboard-teacher"></i>
        <h5 class="mt-3">فريق مؤهل</h5>
        <p>طاقم تدريسي بخبرة واسعة في مجالات التعليم الحديث وأساليب التدريس التفاعلية.</p>
      </div>
    </div>
    <div class="col-md-4 mb-4 fade-in">
      <div class="icon-box">
        <i class="fas fa-laptop-code"></i>
        <h5 class="mt-3">بيئة رقمية</h5>
        <p>أنظمة إدارة طلابية رقمية متكاملة لتسهيل عملية التسجيل والمتابعة من أولياء الأمور.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>© 2025 مدرستي | جميع الحقوق محفوظة</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Animation on Scroll
  const fadeEls = document.querySelectorAll('.fade-in');
  const onScroll = () => {
    fadeEls.forEach(el => {
      const top = el.getBoundingClientRect().top;
      if (top < window.innerHeight - 50) {
        el.classList.add('show');
      }
    });
  }
  window.addEventListener('scroll', onScroll);
  window.addEventListener('load', onScroll);
</script>

</body>
</html>
