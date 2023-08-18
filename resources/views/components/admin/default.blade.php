<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth" style="font-family: Tajawal">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة تحكم المسؤول</title>
    <meta name="description" content="">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Style -->
    <link href="{{asset('../images/QU_Favicon.png')}}" rel="icon" sizes="16x16 32x32" type="image/x-icon">
    <link href="{{asset('../css/tailwind.css')}}" rel="stylesheet">

    <!-- Script -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white font-family-karla flex  ">
<aside class="relative bg-[#334155] h-screen w-64 hidden sm:block shadow-2xl">
    <nav class="text-white text-base font-semibold">
        <a href="/"
           class="flex items-center text-white nav-item">
            <img src="{{asset('../images/QU_logo.svg')}}" class="w-36 mx-auto my-14">
        </a>
        <a href="{{route('datasets.index')}}"
           class="flex items-center py-4 nav-item   font-medium
           {{str_contains(Route::getCurrentRoute()->uri , 'admin/datasets')? 'bg-white text-black font-semibold shadow-lg': 'text-white opacity-75 group hover:opacity-100 hover:font-semibold'}}">
            <div class="mx-7">
                <svg
                    class="w-5 text-white {{str_contains(Route::getCurrentRoute()->uri , 'admin/datasets')? 'fill-[#334155]':'group-hover:stroke-none group-hover:w-7'}}"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 16 20">
                    <path
                        d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z"/>
                </svg>
            </div>
            مجاميع البيانات
        </a>
        <a href="{{route('tags.index')}}"
           class="flex items-center py-4 nav-item   font-medium
           {{Route::getCurrentRoute()->uri === 'admin/tags'? 'bg-white text-black font-semibold shadow-lg': 'text-white opacity-75 group hover:opacity-100 hover:font-semibold'}}">
            <div class="mx-7">
                <svg
                    class="w-5 text-white {{Route::getCurrentRoute()->uri === 'admin/tags'? 'fill-[#334155]':'group-hover:stroke-none group-hover:w-7'}}"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 18 18">
                    <path
                        d="M15.045.007 9.31 0a1.965 1.965 0 0 0-1.4.585L.58 7.979a2 2 0 0 0 0 2.805l6.573 6.631a1.956 1.956 0 0 0 1.4.585 1.965 1.965 0 0 0 1.4-.585l7.409-7.477A2 2 0 0 0 18 8.479v-5.5A2.972 2.972 0 0 0 15.045.007Zm-2.452 6.438a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
                </svg>
            </div>
            الوســوم
        </a>
        <a href="{{route('users.index')}}"
           class="flex items-center py-4 nav-item   font-medium
           {{Route::getCurrentRoute()->uri === 'admin/users'? 'bg-white text-black font-semibold shadow-lg': 'text-white opacity-75 group hover:opacity-100 hover:font-semibold'}}">
            <div class="mx-7">
                <svg
                    class="w-5 text-white {{Route::getCurrentRoute()->uri === 'admin/users'? 'fill-[#334155]':'fill-none group-hover:stroke-none group-hover:w-7'}}"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                </svg>
            </div>
            المستخدمون
        </a>
    </nav>
</aside>

<div class="w-full flex flex-col h-screen overflow-y-hidden bg-none">
    <header class="w-full items-center py-2 px-6 hidden sm:flex justify-end border-b bg-gray-100">
        <h1 class="relative text-xl font-bold w-full my-3">لوحة التحكم</h1>
        <div x-data="{ isOpen: false }" class="relative w-1/4 flex justify-end">
            <button @click="isOpen = !isOpen"
                    class="relative z-10 font-semibold my-2">
                مرحبـــــــــــًا
                <h1 class="font-medium inline-block">{{request()->user()->name}}</h1>
            </button>
            <form x-show="isOpen" method="post" action="{{route('logout')}}"
                  class="absolute bg-white rounded-lg shadow-lg py-1 mt-16 w-1/2">
                @csrf
                @method('post')
                <button type="submit" class="block account-link p-1 text-center hover:text-white">
                    Sign Out
                </button>
            </form>
        </div>
    </header>

    @yield('content')

</div>
</body>
</html>
