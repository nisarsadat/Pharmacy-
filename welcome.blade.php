<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستم مدیریت فارمسی</title>

    <!-- فونت وزیر برای زبان دری/فارسی -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #0f766e 0%, #134e4a 100%);
        }
        .card-hover {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -10px rgba(0,0,0,0.25);
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- هدر -->
    <header class="gradient-bg text-white">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-6 py-5">
            <div class="flex items-center gap-3">
                <div class="bg-white/15 p-2 rounded-xl">
                    <!-- آیکون داروخانه (SVG ساده) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v8m-4-4h8M5 21h14a2 2 0 002-2V8.414a2 2 0 00-.586-1.414l-4.414-4.414A2 2 0 0014.586 2H5a2 2 0 00-2 2v15a2 2 0 002 2z" />
                    </svg>
                </div>
                <span class="text-xl font-bold">فارمسی من</span>
            </div>

            <div class="flex items-center gap-3">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                           class="bg-white text-teal-800 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                            رفتن به داشبورد
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                           class="px-5 py-2 rounded-lg font-medium text-white hover:bg-white/10 transition">
                            ورود
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="bg-white text-teal-800 px-5 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                                ثبت‌نام
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </header>

    <!-- بخش اصلی معرفی -->
    <section class="gradient-bg text-white">
        <div class="max-w-6xl mx-auto px-6 pt-16 pb-24 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-5">
                سیستم مدیریت فارمسی
            </h1>
            <p class="text-teal-100 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                مدیریت آسان و دقیق ادویه، فروش، قرض‌ها و راپورهای داروخانه شما —
                همه‌چیز در یک سیستم مدرن و ساده
            </p>

            <div class="mt-10 flex flex-wrap justify-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="bg-white text-teal-800 px-8 py-3 rounded-xl font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                        شروع کار
                    </a>
                @else
                    <a href="{{ route('login') }}"
                       class="bg-white text-teal-800 px-8 py-3 rounded-xl font-bold text-lg hover:bg-gray-100 transition shadow-lg">
                        ورود به سیستم
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <!-- کارت‌های معرفی امکانات -->
    <section class="max-w-6xl mx-auto px-6 -mt-14 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl p-7 shadow-lg card-hover border border-gray-100">
                <div class="bg-teal-50 w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">مدیریت ادویه</h3>
                <p class="text-gray-500 leading-relaxed">
                    ثبت، ویرایش و کنترل موجودی ادویه به همراه تاریخ انقضا و هشدارهای کمبود.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg card-hover border border-gray-100">
                <div class="bg-teal-50 w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 7h6m-6 4h6m-7 8h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">فروش و راپورها</h3>
                <p class="text-gray-500 leading-relaxed">
                    ثبت فروش روزانه و تهیه راپورهای دقیق برای تصمیم‌گیری بهتر.
                </p>
            </div>

            <div class="bg-white rounded-2xl p-7 shadow-lg card-hover border border-gray-100">
                <div class="bg-teal-50 w-14 h-14 rounded-xl flex items-center justify-center mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-teal-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a4 4 0 00-8 0v2M5 9h14l-1 11H6L5 9z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-800 mb-2">مدیریت قرض‌ها</h3>
                <p class="text-gray-500 leading-relaxed">
                    پیگیری قرض‌های مشتریان و تأمین‌کنندگان با محاسبه خودکار مانده حساب.
                </p>
            </div>

        </div>
    </section>

    <!-- فوتر -->
    <footer class="bg-gray-800 text-gray-300 py-6">
        <div class="max-w-6xl mx-auto px-6 text-center text-sm">
            © {{ date('Y') }} سیستم مدیریت فارمسی — تمام حقوق محفوظ است
        </div>
    </footer>

</body>
</html>