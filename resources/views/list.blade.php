<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>مدرستي</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    body {
      background-color: #e1f5fe;
      font-family: 'Cairo', sans-serif;
      animation: fadeIn 0.8s ease-in;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
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

    .sidebar {
      background-color: #b3e5fc;
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .sidebar h5 {
      color: #01579b;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .sidebar ul li {
      margin-bottom: 10px;
      font-size: 15px;
      color: #333;
    }

    .sidebar ul li i {
      margin-left: 8px;
    }

    .table-hover tbody tr:hover {
      background-color: #f1f1f1;
      transition: 0.3s;
    }

    footer {
      background-color: #0288d1;
      color: #fff;
      padding: 15px 0;
      text-align: center;
      margin-top: auto;
      border-radius: 20px 20px 0 0;
    }

    .pagination {
      justify-content: center;
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
        <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">من نحن</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/store/create')}}">الإشتراك</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">الإدارة</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Content Section -->
<div class="container" style="margin-top:90px;">

  <div class="row">
    <!-- Sidebar -->
    <div class="col-lg-3 mb-4">
      <div class="sidebar">
        <h5>معلومات سريعة</h5>
        <p>هذه الصفحة تعرض بيانات تسجيل الطلاب ويمكنك تعديل أو حذف البيانات أو إضافة تسجيلات جديدة بسهولة.</p>
        <ul class="list-unstyled">
          <li><i class="fas fa-check text-success"></i> جميع التسجيلات محدّثة</li>
          <li><i class="fas fa-user-plus text-primary"></i> إضافة طالب</li>
          <li><i class="fas fa-cog text-warning"></i> إعدادات</li>
        </ul>
      </div>
    </div>

    <!-- Table Section -->
    <div class="col-lg-9">
      <h2 class="mb-4">قائمة بيانات التسجيل</h2>

      <table class="table table-striped table-hover text-center">
        <thead class="table-primary">
          <tr>
            <th>ID</th>
            <th>اسم العميل</th>
            <th>رقم العميل</th>
            <th>اسم الطالب</th>
            <th>المستوى</th>
            <th>تعديل</th>
            <th>حذف</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->clientname }}</td>
            <td>{{ $post->clientnumber }}</td>
            <td>{{ $post->studentname }}</td>
            <td>{{ $post->studentlevel }}</td>
            <td>
              <a href="{{ route('store.edit', $post->id) }}" class="btn btn-warning btn-sm">تعديل</a>
            </td>
            <td>
              <form action="{{ route('store.destroy', $post->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من الحذف؟');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">حذف</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="mt-4 d-flex">
        {{ $posts->links() }}
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  <p>جميع الحقوق محفوظة © 2025 مدرستي</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
