<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            direction: rtl;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2 class="text-center mb-4">تسجيل دخول</h2>

    <!-- رسالة نجاح -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
        </div>
    @endif

    <!-- رسائل الأخطاء -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- نموذج الدخول -->
    <form action="/login" method="POST" onsubmit="return validateForm()">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">الإسم:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="أدخل إسمك" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">كلمة السر:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="********" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">دخول</button>
    </form>
</div>

<!-- Bootstrap JS & Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript validation -->
<script>
    function validateForm() {
        let name = document.getElementById('name').value.trim();
        let password = document.getElementById('password').value.trim();

        if (name === '' || password === '') {
            alert('يرجى تعبئة جميع الحقول.');
            return false;
        }

        return true;
    }
</script>

</body>
</html>
