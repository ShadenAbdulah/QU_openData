<!DOCTYPE html>
<html lang="ar" dir="rtl" style="font-family: Tajawal">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>البيانات المفتوحة</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('../images/QU_Favicon.png')}}" rel="icon" sizes="16x16 32x32" type="image/x-icon">
    <link href="{{asset('../css/tailwind.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script async defer src="https://www.google.com/recaptcha/api.js"></script>
</head>
<body>
<header>
    <div class="bg-[#334155] h-12">
        <section class="container w-5/6 transition-all grid grid-cols-5 h-full my-auto mx-auto">
            <button
                class="col-span-1 rounded-full border border-blue-50 w-16 justify-center my-auto text-white text-sm h-7 hover:bg-[#0369a1] active:bg-[#074871] active:ring-2 transition-all">
                MyQU
            </button>
            <div class="col-span-3 mr-1 w-full grid grid-cols-4 my-auto">
                <div class="text-white   text-sm col-span-2">
                    <a class="flex hover:opacity-30" href="#">معلومات لــ...
                        <svg class="h-4 w-4 fill-stroke text-white" fill="none" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                </div>
                <div class="text-white   text-sm col-span-1 hover:opacity-30">
                    <a href="#">التقويم</a>
                </div>
                <div class="text-white   text-sm col-span-1 hover:opacity-30">
                    <a href="#">الأخبار</a>
                </div>
            </div>
            <div class="col-span-1">
                <div class="grid grid-cols-2 float-left h-full my-auto">
                    <div class="border w-7 h-7 my-auto rounded-full p-1 justify-center cursor-pointer hover:opacity-30"
                         id="searchIcon">
                        <svg class="h-4 w-4 text-white mx-auto my-auto" fill="none" stroke="currentColor"
                             stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" x2="16.65" y1="21" y2="16.65"></line>
                        </svg>
                    </div>
                    <div class="my-auto">
                        <div
                            class="border w-7 h-7 rounded-full p-1 justify-center text-center text-white   cursor-pointer hover:opacity-30"
                            id="lang">
                            EN
                        </div>
                    </div>
                </div>
                <input
                    class="hidden absolute w-52 bg-white top-10 left-24 shadow rounded-md outline-offset-0 pt-1.5 px-2   font-light border border-blue-50"
                    id="searchBar" placeholder="ابحث.."
                    type="search">
            </div>
        </section>
    </div>
    <section class="@container w-5/6 grid grid-cols-6 h-18 my-1 mx-auto bg-white" id="header_2">
        <a class="col-span-1 w-3/4 my-auto" href="#">
            <img alt="Qassim University Logo" src="{{asset('../images/QU_logo.png')}}"></a>
        <div
            class="col-span-5 float-left text-left w-full grid grid-cols-5 xs:grid-cols-6 gap-x-3 h-full mx-auto py-5   text-xs font-normal mt-1 2xs:px-3">
            <a class="hover:opacity-30" href="#">الجامعة</a>
            <a class="hover:opacity-30" href="#">الكليات</a>
            <a class="hover:opacity-30" href="#">القبول</a>
            <a class="hover:opacity-30" href="#">الأبحاث</a>
            <a class="col-span-1 hover:opacity-30" href="#">الحياة الجامعية</a>
        </div>
    </section>
</header>

<header class="hidden xs:block md:block">
    <svg class="w-6 h-6 text-gray-800 dark:text-white fill-none" xmlns="http://www.w3.org/2000/svg"
         viewBox="0 0 17 10">
        <path d="M6 1h10M6 5h10M6 9h10M1.49 1h.01m-.01 4h.01m-.01 4h.01"/>
    </svg>
</header>

<main class="bg-[#fcfcfc] w-full pb-3">
    <div class="h-60 bg-[#0369a1]">
        <section class="@container w-5/6 mx-auto grid grid-rows-5 px-3">
            <a href="{{route('dataset.index')}}"
               class="row-span-2   pt-16 text-white text-xs px-10 2xs:px-0 xs:px-0"><h1>الرئيسة> البيانات
                    المفتوحة></h1></a>
            @yield('search')
        </section>
    </div>

    <div class="@container w-5/6 mx-auto my-auto px-5 2xs:px-0 xs:px-0">

        @yield('content')

    </div>
</main>

<footer class="bg-[#334155] px-5 py-5">
    <div class="@container w-5/6 grid grid-cols-5 gap-2 xs:grid-cols-4 mx-auto">

        <div class="col-span-1 group">
            <h1 class="mb-5   font-bold text-[10px] text-white xs:text-[7px]">معلومات تخص</h1>
            <div
                class="grid grid-rows-7 gap-4   font-normal text-[10px] text-white xs:gap-2 xs:text-[6px] group-hover:text-[#579CD8]">
                <a class="hover:text-[#0369a1]" href="#" target="_blank">الطلاب</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">أعضاء هيئة التدريس</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">الموظفين</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">الخريجين</a>
            </div>
        </div>

        <div class="col-span-1 group">
            <h1 class="mb-5   font-bold text-[10px] text-white xs:text-[7px]">الخدمات الإلكترونية</h1>
            <div
                class="grid grid-rows-7 gap-4   font-normal text-[10px] text-white xs:gap-2 xs:text-[6px] group-hover:text-[#579CD8]">
                <a class="hover:text-[#0369a1]" href="https://myqu.qu.edu.sa/login" target="_blank">MyQU</a>
                <a class="hover:text-[#0369a1]" href="https://guest.qu.edu.sa/login" target="_blank">بوابة
                    الزوار</a>
                <a class="hover:text-[#0369a1]" href="https://outlook.com/qu.edu.sa" target="_blank">البريد
                    الإلكتروني</a>
                <a class="hover:text-[#0369a1]" href="https://lms.qu.edu.sa/">BlackBoard</a>
                <a class="hover:text-[#0369a1]" href="https://library.qu.edu.sa/" target="_blank">المكتبة</a>
                <a class="hover:text-[#0369a1]" href="https://qu.edu.sa/dms" target="_blank">نظام إنجاز</a>
                <a class="hover:text-[#0369a1]" href="https://scatalog.qu.edu.sa/" target="_blank">دليل الخدمات
                    الإلكترونية</a>
            </div>
        </div>

        <div class="col-span-1 group">
            <h1 class="mb-5   font-bold text-[10px] text-white xs:text-[7px]">أخرى</h1>
            <div
                class="grid grid-rows-7 gap-4   font-normal text-[10px] text-white xs:gap-2 xs:text-[6px] group-hover:text-[#579CD8]">
                <a class="hover:text-[#0369a1]" href="#" target="_blank">التقويم</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">منصة الفعاليات</a>
                <a class="hover:text-[#0369a1]" href="https://data.qu.edu.sa/" target="_blank">البيانات
                    المفتوحة</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">منصة التطوع</a>
                <a class="hover:text-[#0369a1]" href="#" target="_blank">منصة نماء</a>
                <a class="hover:text-[#0369a1]" href="https://www.qu.edu.sa/content/news/9" target="_blank">الخرائط
                    والإتجاهات</a>
            </div>
        </div>

        <div class="col-span-1 group">
            <h1 class="mb-5   font-bold text-[10px] text-white xs:text-[7px]">تواصل معنا</h1>
            <div
                class="grid grid-rows-7 gap-4   font-normal text-[10px] text-white xs:gap-2 xs:text-[6px] group-hover:text-[#579CD8]">
                <a class="hover:text-[#0369a1]" href="#">دليل التواصل</a>
                <a class="hover:text-[#0369a1]" href="#">خدمة المستفيدين</a>
                <a class="hover:text-[#0369a1]" href="#">ساعد التقني</a>
            </div>
        </div>

        <div class="col-span-1 grid grid-rows-3 xs:mt-5 xs:grid-cols-0 xs:col-span-full xs:w-1/2 xs:mx-auto">
            <a href="https://qu.edu.sa/" target="_blank"> <img alt="Qassim University Logo"
                                                               src="{{asset('../images//QU_logo.svg')}}">
            </a>

            <div class="hidden xs:grid grid-cols-3 gap-1 mx-auto mt-5">
                <svg class="w-6 fill-white border border-white rounded-full p-[6px]" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                </svg>
                <div class="p-[5px] h-6 w-6 border border-white rounded-full">
                    <svg class="w-3 fill-white"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </div>
                <svg class="w-6 fill-white border border-white rounded-full p-[6px]" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.829 4.533c-.6 1.344-.363 3.752-.267 5.436-.648.359-1.48-.271-1.951-.271-.49 0-1.075.322-1.167.802-.066.346.089.85 1.201 1.289.43.17 1.453.37 1.69.928.333.784-1.71 4.403-4.918 4.931-.251.041-.43.265-.416.519.056.975 2.242 1.357 3.211 1.507.099.134.179.7.306 1.131.057.193.204.424.582.424.493 0 1.312-.38 2.738-.144 1.398.233 2.712 2.215 5.235 2.215 2.345 0 3.744-1.991 5.09-2.215.779-.129 1.448-.088 2.196.058.515.101.977.157 1.124-.349.129-.437.208-.992.305-1.123.96-.149 3.156-.53 3.211-1.505.014-.254-.165-.477-.416-.519-3.154-.52-5.259-4.128-4.918-4.931.236-.557 1.252-.755 1.69-.928.814-.321 1.222-.716 1.213-1.173-.011-.585-.715-.934-1.233-.934-.527 0-1.284.624-1.897.286.096-1.698.332-4.095-.267-5.438-1.135-2.543-3.66-3.829-6.184-3.829-2.508 0-5.014 1.268-6.158 3.833z"/>
                </svg>
            </div>

            <div class="grid grid-row-3 xs:mt-3 mt-5 xs:mx-auto xs:text-center xs:tracking-wider">
                <div class="  font-normal text-[10px] text-white">المملكة العربية السعودية</div>
                <div class="  font-normal text-[10px] text-white">القصيم - بريدة</div>
                <div class="  font-normal text-[10px] text-white">ص.ب: 960 - الرمز البريدي: 61421</div>
            </div>

            <div class="xs:hidden row-span-2 grid grid-cols-3 gap-1 mx-auto mt-5">
                <a class="w-6 h-6 fill-white border border-white rounded-full p-1 hover:opacity-30 " href="#">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a class="h-6 w-6 border border-white rounded-full p-1 hover:opacity-30" href="#">
                    <svg class="fill-white w-fit"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a class="w-6 h-6 fill-white border border-white rounded-full p-1 hover:opacity-30" href="#">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.829 4.533c-.6 1.344-.363 3.752-.267 5.436-.648.359-1.48-.271-1.951-.271-.49 0-1.075.322-1.167.802-.066.346.089.85 1.201 1.289.43.17 1.453.37 1.69.928.333.784-1.71 4.403-4.918 4.931-.251.041-.43.265-.416.519.056.975 2.242 1.357 3.211 1.507.099.134.179.7.306 1.131.057.193.204.424.582.424.493 0 1.312-.38 2.738-.144 1.398.233 2.712 2.215 5.235 2.215 2.345 0 3.744-1.991 5.09-2.215.779-.129 1.448-.088 2.196.058.515.101.977.157 1.124-.349.129-.437.208-.992.305-1.123.96-.149 3.156-.53 3.211-1.505.014-.254-.165-.477-.416-.519-3.154-.52-5.259-4.128-4.918-4.931.236-.557 1.252-.755 1.69-.928.814-.321 1.222-.716 1.213-1.173-.011-.585-.715-.934-1.233-.934-.527 0-1.284.624-1.897.286.096-1.698.332-4.095-.267-5.438-1.135-2.543-3.66-3.829-6.184-3.829-2.508 0-5.014 1.268-6.158 3.833z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="@container w-5/6 mx-auto   font-light text-[10px] text-white xs:gap-2">
        <hr class="my-5 border-gray-400">
        <div class="grid grid-cols-3">
            <div class="xs:col-span-full xs:mx-auto">جميع الحقوق محفوظة لجامعة القصيم 2022 ©</div>
            <div class="xs:col-span-full xs:mx-auto text-center">
                <a class="hover:text-[#0369a1]" href="#">سياسة الخصوصية</a> ●
                <a class="hover:text-[#0369a1]" href="#">شروط الاستخدام</a>
            </div>
            <div class="xs:col-span-full xs:mx-auto text-left">تطوير عمادة تقنية المعلومات</div>
        </div>
    </div>
</footer>

<div class="hidden fill-amber-500 activeFilter nonActiveFilter"></div>
{{--<script src="{{asset('js/app.js')}}" type="module"></script>--}}
</body>
</html>
