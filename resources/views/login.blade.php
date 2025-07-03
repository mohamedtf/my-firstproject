<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل دخول</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f9ff;
            font-family: 'Tajawal', sans-serif;
            direction: rtl;
            margin: 0;
            padding: 0;
        }
        
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-top: 90px;
            border: 1px solid #e1f5fe;
            max-width: 450px;
        }
        
        h2 {
            color: #0288d1;
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .form-icon {
            color: #0288d1;
            font-size: 1.2rem;
            margin-left: 10px;
        }
        
        .btn-submit {
            background: linear-gradient(135deg, #0288d1, #01579b);
            border: none;
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: block;
            margin: 30px auto 0;
            width: 50%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            color: white;
            font-weight: 600;
        }
        
        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 10px rgba(0,0,0,0.15);
        }
        
        .input-group-text {
            background-color: #e3f2fd;
            border: 1px solid #bbdefb;
        }
        
        .alert {
            border-radius: 10px;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .login-icon {
            font-size: 3rem;
            color: #0288d1;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center">
        <div class="login-container">
            <div class="login-header">
                <i class="fas fa-user-lock login-icon"></i>
                <h2>تسجيل دخول</h2>
            </div>

            <!-- رسالة نجاح -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="إغلاق"></button>
                </div>
            @endif

            <!-- رسائل الأخطاء -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- نموذج الدخول -->
            <form action="/login" method="POST" onsubmit="return validateForm()">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">الإسم:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-user form-icon"></i>
                        </span>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" 
                               class="form-control" placeholder="أدخل إسمك" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">كلمة السر:</label>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-lock form-icon"></i>
                        </span>
                        <input type="password" id="password" name="password" 
                               class="form-control" placeholder="********" required>
                    </div>
                </div>

                <button type="submit" class="btn-submit">
                    <i class="fas fa-sign-in-alt me-2"></i>دخول
                </button>
            </form>
        </div>
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