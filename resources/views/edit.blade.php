<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>تعديل بيانات الطالب</title>

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
      <!-- ... (same navbar as create) ... -->
    </div>
  </nav>

  <div class="container">
    <div class="form-container col-lg-10 offset-lg-1">
      <h2><i class="fas fa-edit me-2"></i>تعديل بيانات الطالب</h2>

      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif

      <form action="{{ url('/update', $etudiant->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-section">
          <h4><i class="fas fa-user me-2"></i>معلومات الطالب</h4>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="clientname" class="form-label">اسم ولي الأمر</label>
              <input type="text" name="clientname" id="clientname" class="form-control" required value="{{ $etudiant->clientname }}" />
            </div>

            <div class="col-md-6 mb-3">
              <label for="clientnumber" class="form-label">رقم هاتف ولي الأمر</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="tel" name="clientnumber" id="clientnumber" class="form-control" required value="{{ $etudiant->clientnumber }}" />
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="studentname" class="form-label">اسم الطالب</label>
              <input type="text" name="studentname" id="studentname" class="form-control" required value="{{ $etudiant->studentname }}" />
            </div>
            
            <div class="col-md-6 mb-3">
              <label for="payment_date" class="form-label">تاريخ الدفع</label>
              <input type="date" name="payment_date" id="payment_date" class="form-control" required value="{{ $etudiant->payment_date }}" />
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
            <label for="studentlevel" class="form-label">المستوى الدراسي</label>
            <select name="studentlevel" id="studentlevel" class="form-select" required>
              <option value="level1" {{ $etudiant->studentlevel == 'level1' ? 'selected' : '' }}>المستوى الأول (الأساسي) - 30,000 MRU</option>
              <option value="level2" {{ $etudiant->studentlevel == 'level2' ? 'selected' : '' }}>المستوى الثاني (المتوسط) - 35,000 MRU</option>
              <option value="level3" {{ $etudiant->studentlevel == 'level3' ? 'selected' : '' }}>المستوى الثالث (المتقدم) - 40,000 MRU</option>
            </select>
          </div>
          
          <div class="price-display">
            <i class="fas fa-money-bill-wave me-2"></i>المبلغ المطلوب: 
            <input type="text" name="amount" id="amount" class="form-control d-inline-block w-auto text-center" value="{{ $etudiant->amount }}" readonly> 
            MRU
          </div>
        </div>
        
        <div class="form-section">
          <div class="payment-card">
            <h4><i class="fas fa-credit-card me-2"></i>طريقة الدفع</h4>
            
            <div class="payment-methods">
              <div class="payment-method {{ $etudiant->payment_method == 'cash' ? 'active' : '' }}" data-method="cash">
                <i class="fas fa-money-bill-wave"></i>
                <div>نقدي</div>
                <small>الدفع في المدرسة</small>
              </div>
              
              <div class="payment-method {{ $etudiant->payment_method == 'bankily' ? 'active' : '' }}" data-method="bankily">
                <i class="fas fa-mobile-alt"></i>
                <div>بنكيلي (Bankily)</div>
                <small>تحويل عبر التطبيق</small>
              </div>
              
              <div class="payment-method {{ $etudiant->payment_method == 'masrivi' ? 'active' : '' }}" data-method="masrivi">
                <i class="fas fa-university"></i>
                <div>مسرافي (Masrivi)</div>
                <small>تحويل بنكي</small>
              </div>
            </div>
            
            <input type="hidden" name="payment_method" id="payment_method" value="{{ $etudiant->payment_method }}">
            
            @if($etudiant->payment_proof)
              <div class="mt-3">
                <label>إثبات الدفع الحالي:</label>
                <div class="d-flex align-items-center">
                  <a href="{{ asset('storage/' . $etudiant->payment_proof) }}" target="_blank" class="btn btn-sm btn-info me-2">
                    <i class="fas fa-eye me-1"></i> عرض الإثبات
                  </a>
                  <span>{{ basename($etudiant->payment_proof) }}</span>
                </div>
              </div>
            @endif
            
            <div class="screenshot-upload mt-3" id="screenshotUpload">
              <i class="fas fa-cloud-upload-alt"></i>
              <div>تغيير إثبات الدفع (للبنكيلي أو مسرافي)</div>
              <small id="uploadText">اضغط لرفع صورة جديدة</small>
              <input type="file" name="payment_proof" id="paymentScreenshot" accept="image/*" style="display: none;">
            </div>
          </div>
        </div>
        
        <button type="submit" class="btn btn-primary btn-lg btn-submit">
          <i class="fas fa-save me-2"></i>حفظ التعديلات
        </button>
       
      </form>
    </div>
  </div>

  <footer>
    <!-- ... (same footer as create) ... -->
  </footer>

  <script>
    // ... (same JavaScript as create) ... 
  </script>
</body>
</html>