<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>مدرستي</title>

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    rel="stylesheet"
  />
  <!-- FontAwesome Icons -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
  />

  <style>
    body {
      background: linear-gradient(135deg, #87ceeb 0%, #b0e0e6 100%);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: #212529;
      margin: 0;
      min-height: 100vh;
    }

    /* Navbar (نسخة سابقة وأنيقة) */
    nav {
      background-color: #87ceeb; /* skyblue */
      border-radius: 0 0 15px 15px;
      box-shadow: 0 4px 12px rgba(135, 206, 235, 0.6);
      padding: 0.5rem 1rem;
    }

    nav a {
      color: #0b3d91 !important;
      margin: 0 10px;
      font-weight: 600;
      transition: color 0.3s ease;
      text-decoration: none !important;
    }

    nav a:hover {
      color: #064273 !important;
      text-decoration: none !important;
    }

    .navbar-brand {
      font-weight: 900;
      color: #0b3d91 !important;
      font-size: 1.8rem;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .navbar-brand i {
      font-size: 2.2rem;
      color: #0b3d91;
    }

    /* Footer */
    footer {
      background-color: #87ceeb;
      color: #0b3d91;
      padding: 20px 0;
      box-shadow: 0 -4px 12px rgba(135, 206, 235, 0.6);
    }

    footer a {
      color: #0b3d91;
      margin: 0 15px;
      font-size: 22px;
      transition: color 0.3s ease;
      text-decoration: none;
    }

    footer a:hover {
      color: #064273;
    }

    /* Cards */
    .card {
      border-radius: 15px;
      box-shadow: 0 8px 15px rgba(135, 206, 235, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 16px 30px rgba(135, 206, 235, 0.6);
    }

    /* Sidebar images */
    aside img {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      margin-bottom: 1rem;
      cursor: pointer;
      transition: transform 0.3s ease;
      width: 100%;
      height: auto;
      object-fit: cover;
    }

    aside img:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
    }

    /* Sidebar text */
    aside .sidebar-text {
      background: rgba(255 255 255 / 0.8);
      border-radius: 15px;
      padding: 1rem;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      font-size: 1rem;
      line-height: 1.5;
      color: #0b3d91;
      margin-bottom: 1.5rem;
    }

    /* Fade-in animation */
    .fade-in {
      opacity: 0;
      transform: translateY(40px);
      animation: fadeInUp 1s forwards;
    }

    .fade-in.delay-1 {
      animation-delay: 0.3s;
    }

    .fade-in.delay-2 {
      animation-delay: 0.6s;
    }

    .fade-in.delay-3 {
      animation-delay: 0.9s;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Lightbox overlay */
    .lightbox-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.85);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 1050;
    }

    .lightbox-overlay.active {
      display: flex;
    }

    .lightbox-close {
      position: absolute;
      top: 15px;
      right: 20px;
      color: #fff;
      font-size: 3rem;
      font-weight: 900;
      cursor: pointer;
      user-select: none;
      transition: color 0.3s ease;
      z-index: 1100;
    }

    .lightbox-close:hover {
      color: #87ceeb;
    }

    .lightbox-overlay img {
      max-width: 90%;
      max-height: 90%;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(135, 206, 235, 0.8);
    }
  </style>
</head>
<body>
  <!-- Navbar (النسخة المحببة) -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school"></i> مدرستي
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#mainNav"
        aria-controls="mainNav"
        aria-expanded="false"
        aria-label="تبديل التنقل"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#">الرئيسية</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">من نحن</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/store/create')}}">إشتراك</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">الإدارة</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Section Cards -->
  <section class="container-fluid px-4 my-5">
    <div class="row text-center">
      <div class="col-md-4 mb-4 fade-in delay-1">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=400&q=80"
            class="card-img-top"
            alt="صورة مدرسة"
          />
          <div class="card-body">
            <p class="card-text">مدرسة مجهزة بأحدث التقنيات.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 fade-in delay-2">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1508214751196-bcfd4ca60f91?auto=format&fit=crop&w=400&q=80"
            class="card-img-top"
            alt="طلاب"
          />
          <div class="card-body">
            <p class="card-text">طلاب في بيئة تعليمية محفزة.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 fade-in delay-3">
        <div class="card">
          <img
            src="https://images.unsplash.com/photo-1512820790803-83ca734da794?auto=format&fit=crop&w=400&q=80"
            class="card-img-top"
            alt="مكتبة"
          />
          <div class="card-body">
            <p class="card-text">مكتبة شاملة تضم أفضل الكتب والمراجع.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section Content & Aside -->
  <section class="container-fluid px-4 my-5">
    <div class="row">
      <div class="col-md-8 fade-in">
        <p>
          مدرستنا تقدم أفضل البرامج التعليمية الحديثة والمتطورة بإشراف
          طاقم تدريسي متخصص. نحن نؤمن بأن التعليم هو أساس بناء المستقبل.
        </p>
        <p>
          نسعى لتهيئة بيئة تعلم آمنة وداعمة لجميع الطلاب، مع توفير أنشطة
          إثرائية وورش عمل لتعزيز المهارات الحياتية.
        </p>
        <p>
          نحرص على دمج التكنولوجيا في العملية التعليمية لضمان مواكبة التطورات
          الحديثة وتحفيز الطلاب على التفكير النقدي والإبداعي.
        </p>
      </div>
      <aside class="col-md-4">
        <div class="sidebar-text fade-in delay-1">
          <h5>لماذا تختار مدرستنا؟</h5>
          <ul>
            <li>تعليم متميز يواكب العصر.</li>
            <li>طاقم تدريسي ذو خبرة عالية.</li>
            <li>بيئة تعليمية محفزة وآمنة.</li>
            <li>أنشطة رياضية وثقافية متنوعة.</li>
            <li>دعم مستمر للطلاب وأولياء الأمور.</li>
          </ul>
        </div>

        <img
          src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=300&q=80"
          alt="معلم"
          class="img-fluid mb-3"
        />
        <img
          src="https://images.unsplash.com/photo-1517816428104-975d06e55f2c?auto=format&fit=crop&w=300&q=80"
          alt="نشاط مدرسي"
          class="img-fluid mb-3"
        />
        <img
          src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?auto=format&fit=crop&w=300&q=80"
          alt="إمتحان"
          class="img-fluid mb-3"
        />
        <video
          src="https://www.w3schools.com/html/mov_bbb.mp4"
          class="w-100"
          controls
          style="border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);"
        >
          فيديو المدرسة
        </video>
      </aside>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container-fluid px-4">
      <p>تابعنا على :</p>
      <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
      <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>

  <!-- Lightbox Overlay -->
  <div class="lightbox-overlay" id="lightbox">
    <span class="lightbox-close" id="lightboxClose">&times;</span>
    <img src="" alt="صورة مكبرة" id="lightboxImg" />
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Lightbox script for sidebar images
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightboxImg");
    const lightboxClose = document.getElementById("lightboxClose");

    document.querySelectorAll("aside img").forEach((img) => {
      img.addEventListener("click", () => {
        lightboxImg.src = img.src;
        lightbox.classList.add("active");
        document.body.style.overflow = "hidden";
      });
    });

    lightboxClose.addEventListener("click", () => {
      lightbox.classList.remove("active");
      document.body.style.overflow = "";
    });

    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) {
        lightbox.classList.remove("active");
        document.body.style.overflow = "";
      }
    });
  </script>
</body>
</html>
