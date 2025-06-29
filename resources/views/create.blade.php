<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>تسجيل طالب جديد</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <style>
    body {
      background-color: #e0f7fa;
      font-family: 'Cairo', sans-serif;
      margin-bottom: 80px;
    }
    nav {
      background-color: #0288d1;
      border-radius: 0 0 20px 20px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    nav .navbar-brand {
      color: #fff;
      font-size: 1.4rem;
      font-weight: bold;
      display: flex;
      align-items: center;
    }
    nav .navbar-brand i {
      margin-left: 8px;
      font-size: 1.6rem;
    }
    nav a.nav-link {
      color: #f9f9f9;
      margin: 0 10px;
      font-weight: 600;
      transition: 0.3s;
      text-decoration: none;
    }
    nav a.nav-link:hover {
      color: #ffe082;
    }
    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
      margin-top: 90px;
    }
    h2 {
      color: #0288d1;
      text-align: center;
      margin-bottom: 25px;
    }
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #0288d1;
      color: white;
      text-align: center;
      padding: 15px 0;
      font-weight: 600;
      border-radius: 20px 20px 0 0;
      box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
      z-index: 999;
    }
  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school"></i> مدرستي
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{url('/index')}}">الرئيسية</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">عن المدرسة</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/store/create')}}">الإشتراك</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">الإدارة</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Form -->
  <div class="container">
    <div class="form-container col-lg-8 offset-lg-2">
      <h2>تسجيل طالب جديد</h2>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <form action="{{ url('/store') }}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="clientname" class="form-label">اسم العميل</label>
          <input type="text" name="clientname" id="clientname" class="form-control" required />
        </div>

        <div class="mb-3">
          <label for="clientnumber" class="form-label">رقم العميل</label>
          <input type="text" name="clientnumber" id="clientnumber" class="form-control" required />
        </div>

        <div class="mb-3">
          <label for="studentname" class="form-label">اسم الطالب</label>
          <input type="text" name="studentname" id="studentname" class="form-control" required />
        </div>

        <div class="mb-3">
          <label for="studentlevel" class="form-label">المستوى الدراسي</label>
          <input type="text" name="studentlevel" id="studentlevel" class="form-control" required />
        </div>

        <div class="d-grid">
          <button type="submit" class="btn btn-primary">إرسال التسجيل</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    جميع الحقوق محفوظة © 2025 مدرستي
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
