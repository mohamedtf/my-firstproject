<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // تحقق من صحة المدخلات
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // محاولة تسجيل الدخول
        if (Auth::guard('admin')->attempt($credentials)) {
            // نجاح الدخول
            $request->session()->regenerate();
            $posts=etudiant::paginate(5);
            return view('list',compact('posts'));
        }

        // فشل الدخول
        return back()->withErrors([
            'name' => 'الإسم أو كلمة السر غير صحيحة',
        ])->onlyInput('name');
}
}
