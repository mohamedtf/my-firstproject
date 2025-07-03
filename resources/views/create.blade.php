<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>تسجيل طالب جديد - نظام الدفع</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #f0f9ff;
      font-family: 'Tajawal', sans-serif;
      margin-bottom: 80px;
      direction: rtl;
    }
    nav {
      background: linear-gradient(135deg, #0288d1, #01579b);
      border-radius: 0 0 20px 20px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
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
      padding: 8px 15px;
      border-radius: 20px;
    }
    nav a.nav-link:hover {
      background-color: rgba(255, 255, 255, 0.15);
      color: #ffe082;
    }
    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
      margin-top: 90px;
      border: 1px solid #e1f5fe;
    }
    h2 {
      color: #0288d1;
      text-align: center;
      margin-bottom: 25px;
      font-weight: 700;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
    }
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background: linear-gradient(135deg, #0288d1, #01579b);
      color: white;
      text-align: center;
      padding: 15px 0;
      font-weight: 600;
      border-radius: 20px 20px 0 0;
      box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
      z-index: 999;
    }
    .payment-card {
      background: #e3f2fd;
      border-radius: 10px;
      padding: 20px;
      margin-top: 15px;
      border-left: 4px solid #0288d1;
    }
    .payment-card h4 {
      color: #01579b;
      border-bottom: 2px solid #90caf9;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .payment-methods {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    .payment-method {
      flex: 1;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    .payment-method:hover, .payment-method.active {
      border-color: #0288d1;
      background-color: #e1f5fe;
      transform: translateY(-3px);
    }
    .payment-method i {
      font-size: 2.5rem;
      color: #0288d1;
      margin-bottom: 10px;
    }
    .price-display {
      font-size: 1.5rem;
      font-weight: bold;
      color: #d32f2f;
      text-align: center;
      padding: 10px;
      background: #ffebee;
      border-radius: 8px;
      margin: 15px 0;
    }
    .receipt-container {
      background: #f1f8e9;
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
      border: 1px dashed #7cb342;
      display: none;
    }
    .receipt-container h5 {
      color: #33691e;
      text-align: center;
      margin-bottom: 15px;
    }
    .receipt-details {
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      font-family: monospace;
    }
    .class-price {
      background: #e8f5e9;
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
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
    }
    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 10px rgba(0,0,0,0.15);
    }
    .screenshot-upload {
      background: #f5f5f5;
      border: 2px dashed #0288d1;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      cursor: pointer;
      margin-top: 15px;
    }
    .screenshot-upload:hover {
      background: #e3f2fd;
    }
    .screenshot-upload i {
      font-size: 3rem;
      color: #0288d1;
      margin-bottom: 15px;
    }
    .class-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
      padding: 10px;
      background: #f5f5f5;
      border-radius: 8px;
    }
    .class-name {
      font-weight: bold;
      color: #01579b;
    }
    .class-price {
      background: #e8f5e9;
      padding: 5px 15px;
      border-radius: 20px;
      font-weight: bold;
    }
    .form-section {
      margin-bottom: 25px;
      padding-bottom: 15px;
      border-bottom: 1px solid #e0e0e0;
    }
    .form-section h4 {
      color: #0288d1;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid #e0e0e0;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="fas fa-school"></i> مدرستي - نظام التسجيل
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{url('/index')}}"><i class="fas fa-home me-2"></i>الرئيسية</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/about')}}"><i class="fas fa-info-circle me-2"></i>عن المدرسة</a></li>
          <li class="nav-item"><a class="nav-link active" href="{{url('/store/create')}}"><i class="fas fa-user-plus me-2"></i>الإشتراك</a></li>
          <li class="nav-item"><a class="nav-link" href="{{url('/login')}}"><i class="fas fa-lock me-2"></i>الإدارة</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="form-container col-lg-10 offset-lg-1">
      <h2><i class="fas fa-user-graduate me-2"></i>تسجيل طالب جديد - نظام الدفع</h2>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="alert alert-info">
          <i class="fas fa-info-circle me-2"></i>يرجى تعبئة جميع الحقول المطلوبة وإتمام عملية الدفع
        </div>

        <div class="form-section">
          <h4><i class="fas fa-user me-2"></i>معلومات الطالب</h4>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="clientname" class="form-label">اسم ولي الأمر</label>
              <input type="text" name="clientname" id="clientname" class="form-control" required value="{{ old('clientname') }}" />
              @error('clientname') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6 mb-3">
              <label for="clientnumber" class="form-label">رقم هاتف ولي الأمر</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="tel" name="clientnumber" id="clientnumber" class="form-control" required value="{{ old('clientnumber') }}" />
              </div>
              @error('clientnumber') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="studentname" class="form-label">اسم الطالب</label>
              <input type="text" name="studentname" id="studentname" class="form-control" required value="{{ old('studentname') }}" />
              @error('studentname') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="payment_date" class="form-label">تاريخ الدفع</label>
              <input type="date" name="payment_date" id="payment_date" class="form-control" required value="{{ old('payment_date', date('Y-m-d')) }}" />
              @error('payment_date') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <h4><i class="fas fa-book me-2"></i>المستوى الدراسي والسعر</h4>
          
          <div class="class-info">
            <div class="class-name">المستوى الأول (الأساسي)</div>
            <div class="class-price">30,000 MRU</div>
          </div>
          
          <div class="class-info">
            <div class="class-name">المستوى الثاني (المتوسط)</div>
            <div class="class-price">35,000 MRU</div>
          </div>
          
          <div class="class-info">
            <div class="class-name">المستوى الثالث (المتقدم)</div>
            <div class="class-price">40,000 MRU</div>
          </div>
          
          <div class="mb-3 mt-4">
            <label for="studentlevel" class="form-label">اختر المستوى الدراسي</label>
            <select name="studentlevel" id="studentlevel" class="form-select" required>
              <option value="" disabled selected>-- اختر المستوى الدراسي --</option>
              <option value="level1" {{ old('studentlevel') == 'level1' ? 'selected' : '' }}>المستوى الأول (الأساسي) - 30,000 MRU</option>
              <option value="level2" {{ old('studentlevel') == 'level2' ? 'selected' : '' }}>المستوى الثاني (المتوسط) - 35,000 MRU</option>
              <option value="level3" {{ old('studentlevel') == 'level3' ? 'selected' : '' }}>المستوى الثالث (المتقدم) - 40,000 MRU</option>
            </select>
            @error('studentlevel') <div class="text-danger">{{ $message }}</div> @enderror
          </div>
          
          <div class="price-display">
            <i class="fas fa-money-bill-wave me-2"></i>المبلغ المطلوب: 
            <input type="text" name="amount" id="amount" class="form-control d-inline-block w-auto text-center" value="{{ old('amount', 0) }}" readonly> 
            MRU
          </div>
        </div>
        
        <div class="form-section">
          <div class="payment-card">
            <h4><i class="fas fa-credit-card me-2"></i>طريقة الدفع</h4>
            
            <div class="payment-methods">
              <div class="payment-method {{ old('payment_method') == 'cash' ? 'active' : '' }}" data-method="cash">
                <i class="fas fa-money-bill-wave"></i>
                <div>نقدي</div>
                <small>الدفع في المدرسة</small>
              </div>
              
              <div class="payment-method {{ old('payment_method') == 'bankily' ? 'active' : '' }}" data-method="bankily">
                <i class="fas fa-mobile-alt"></i>
                <div>بنكيلي (Bankily)</div>
                <small>تحويل عبر التطبيق</small>
              </div>
              
              <div class="payment-method {{ old('payment_method') == 'masrivi' ? 'active' : '' }}" data-method="masrivi">
                <i class="fas fa-university"></i>
                <div>مسرافي (Masrivi)</div>
                <small>تحويل بنكي</small>
              </div>
            </div>
            
            <input type="hidden" name="payment_method" id="payment_method" value="{{ old('payment_method') }}">
            @error('payment_method') <div class="text-danger">{{ $message }}</div> @enderror
            
            <div class="screenshot-upload" id="screenshotUpload">
              <i class="fas fa-cloud-upload-alt"></i>
              <div>إضافة إثبات الدفع (للبنكيلي أو مسرافي)</div>
              <small id="uploadText">اضغط لرفع صورة من التحويل البنكي</small>
              <input type="file" name="payment_proof" id="paymentScreenshot" accept="image/*" style="display: none;">
            </div>
            @error('payment_proof') <div class="text-danger">{{ $message }}</div> @enderror
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-lg btn-submit">
          <i class="fas fa-paper-plane me-2"></i>إتمام التسجيل والدفع
        </button>
      </form>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-md-start">
          جميع الحقوق محفوظة © 2025 مدرستي
        </div>
        <div class="col-md-6 text-md-end">
          <i class="fab fa-whatsapp me-2"></i> 12345678
          <i class="fas fa-phone ms-3 me-2"></i> 12345678
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Update price when class is selected
    document.getElementById('studentlevel').addEventListener('change', function() {
      const level = this.value;
      let price = 0;
      
      if(level === 'level1') price = 30000;
      else if(level === 'level2') price = 35000;
      else if(level === 'level3') price = 40000;
      
      document.getElementById('amount').value = price;
    });
    
    // Set payment method
    const paymentMethods = document.querySelectorAll('.payment-method');
    paymentMethods.forEach(method => {
      method.addEventListener('click', function() {
        // Remove active class from all
        paymentMethods.forEach(m => m.classList.remove('active'));
        
        // Add active class to clicked
        this.classList.add('active');
        
        // Set the value in hidden input
        const methodType = this.getAttribute('data-method');
        document.getElementById('payment_method').value = methodType;
      });
    });
    
    // Screenshot upload
    document.getElementById('screenshotUpload').addEventListener('click', function() {
      document.getElementById('paymentScreenshot').click();
    });
    
    document.getElementById('paymentScreenshot').addEventListener('change', function(e) {
      if(e.target.files.length > 0) {
        const fileName = e.target.files[0].name;
        document.getElementById('uploadText').textContent = `تم رفع: ${fileName}`;
        document.querySelector('#screenshotUpload i').className = 'fas fa-check-circle';
        document.querySelector('#screenshotUpload i').style.color = '#4CAF50';
      }
    });
    
    // Initialize form with default values
    document.addEventListener('DOMContentLoaded', function() {
      const level = document.getElementById('studentlevel').value;
      if(level) {
        document.getElementById('studentlevel').dispatchEvent(new Event('change'));
      }
    });
  </script>
</body>
</html>