<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $loginField = $request->input('login');
        
        Log::info('Login attempt started', [
            'login' => $loginField,
            'ip' => $request->ip()
        ]);

        try {
            // التحقق من صحة البيانات
            $credentials = $request->validate([
                'login' => ['required', 'string'],
                'password' => ['required'],
            ]);

            // تحديد نوع الدخول (بريد إلكتروني أم اسم مستخدم)
            $loginType = filter_var($loginField, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            
            // إعداد بيانات المصادقة
            $authCredentials = [
                $loginType => $loginField,
                'password' => $credentials['password']
            ];

            Log::info('Credentials prepared', [
                'login_type' => $loginType,
                'login' => $loginField
            ]);

            if (Auth::guard('admin')->attempt($authCredentials, $request->filled('remember'))) {
                $admin = Auth::guard('admin')->user();
                Log::info('Admin login successful', [
                    'login' => $loginField,
                    'admin_id' => $admin->id,
                    'admin_name' => $admin->name
                ]);

                $request->session()->regenerate();
                
                return redirect()->intended(route('admin-dashboard'));
            }

            // إذا فشل تسجيل الدخول، نسجل السبب
            $admin = \App\Models\Admin::where($loginType, $loginField)->first();
            if (!$admin) {
                Log::warning('Admin login failed - User not found', [
                    'login_type' => $loginType,
                    'login' => $loginField
                ]);
            } else {
                Log::warning('Admin login failed - Invalid password', [
                    'login_type' => $loginType,
                    'login' => $loginField
                ]);
            }

            return back()
                ->withErrors([
                    'login' => __('auth.failed'),
                ])
                ->withInput($request->only('login'));

        } catch (\Exception $e) {
            Log::error('Login error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return back()
                ->withErrors([
                    'login' => $e->getMessage()
                ])
                ->withInput($request->only('login'));
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
