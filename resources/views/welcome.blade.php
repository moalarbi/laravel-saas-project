<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>اسم النظام - منصة SaaS المتكاملة</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'saas-bg-start': '#040808',
                        'saas-bg-mid': '#050A0A',
                        'saas-bg-end': '#071A19',
                        'saas-glow': '#35E6D2',
                        'saas-text-primary': 'rgba(235,255,252,0.92)',
                        'saas-text-secondary': 'rgba(235,255,252,0.68)',
                        'saas-glass': 'rgba(255,255,255,0.06)',
                        'saas-border': 'rgba(53,230,210,0.18)',
                    },
                    fontFamily: {
                        'arabic': ['IBM Plex Sans Arabic', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(180deg, #040808, #050A0A, #071A19);
            color: rgba(235,255,252,0.92);
            font-family: 'IBM Plex Sans Arabic', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
        }
        .glass-card {
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(53,230,210,0.18);
            border-radius: 16px;
        }
        .glow-effect {
            box-shadow: 0 0 20px rgba(53,230,210,0.15);
        }
        .subtle-glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(53,230,210,0.08) 0%, transparent 70%);
            pointer-events: none;
        }
        .fade-in {
            animation: fadeIn 1.5s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="antialiased">
    <div class="subtle-glow top-0 left-1/4"></div>
    <div class="subtle-glow bottom-0 right-1/4"></div>

    <!-- Navbar -->
    <nav class="container mx-auto px-6 py-6 flex justify-between items-center relative z-10">
        <div class="text-2xl font-bold text-saas-glow">اسم النظام <span class="text-xs font-normal opacity-50">v4.0</span></div>
        <div class="hidden md:flex space-x-8 space-x-reverse text-saas-text-secondary">
            <a href="#features" class="hover:text-saas-glow transition">المميزات</a>
            <a href="#pricing" class="hover:text-saas-glow transition">الأسعار</a>
            <a href="/admin" class="hover:text-saas-glow transition">لوحة المسؤول</a>
        </div>
        <div>
            <a href="/app/login" class="glass-card px-6 py-2 text-saas-text-primary hover:bg-white/10 transition">دخول</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mx-auto px-6 pt-20 pb-32 text-center relative z-10 fade-in">
        <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
            إدارة وتشغيل الأعمال <br>
            <span class="text-saas-glow">بذكاء وكفاءة</span>
        </h1>
        <p class="text-xl text-saas-text-secondary max-w-2xl mx-auto mb-10">
            منصة SaaS متكاملة توفر لك كافة الأدوات التي تحتاجها لإدارة مشروعك من مكان واحد، مع تجربة مستخدم فريدة وأداء فائق.
        </p>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="/app/register" class="bg-saas-glow text-saas-bg-start px-8 py-4 rounded-xl font-bold hover:opacity-90 transition glow-effect">ابدأ التجربة الآن</a>
            <a href="#demo" class="glass-card px-8 py-4 text-saas-text-primary hover:bg-white/10 transition">عرض توضيحي</a>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="container mx-auto px-6 py-24 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="glass-card p-8 hover:border-saas-glow/40 transition group">
                <div class="w-12 h-12 border border-saas-glow/30 rounded-lg flex items-center justify-center mb-6 group-hover:bg-saas-glow/10 transition">
                    <svg class="w-6 h-6 text-saas-glow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">أداء فائق السرعة</h3>
                <p class="text-saas-text-secondary">نظام مبني على أحدث التقنيات لضمان سرعة الاستجابة ومعالجة البيانات في أجزاء من الثانية.</p>
            </div>
            <div class="glass-card p-8 hover:border-saas-glow/40 transition group">
                <div class="w-12 h-12 border border-saas-glow/30 rounded-lg flex items-center justify-center mb-6 group-hover:bg-saas-glow/10 transition">
                    <svg class="w-6 h-6 text-saas-glow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">أمان متقدم</h3>
                <p class="text-saas-text-secondary">تشفير كامل للبيانات وحماية متطورة ضد الهجمات لضمان سلامة معلوماتك ومعلومات عملائك.</p>
            </div>
            <div class="glass-card p-8 hover:border-saas-glow/40 transition group">
                <div class="w-12 h-12 border border-saas-glow/30 rounded-lg flex items-center justify-center mb-6 group-hover:bg-saas-glow/10 transition">
                    <svg class="w-6 h-6 text-saas-glow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-4">تقارير ذكية</h3>
                <p class="text-saas-text-secondary">لوحات بيانات تفاعلية تمنحك رؤية واضحة لأداء عملك وتساعدك في اتخاذ القرارات الصحيحة.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container mx-auto px-6 py-12 border-t border-saas-border text-center text-saas-text-secondary relative z-10">
        <p>© 2026 اسم النظام. جميع الحقوق محفوظة.</p>
    </footer>
</body>
</html>
