<div class="border border-gray-100 mt-10 bg-white w-full xs:w-5/6 mx-auto grid grid-cols-4 xs:grid-cols-2">
    <a
        class="border-l xs:border-b border-gray-100 grid grid-cols-5 px-2 py-2 group {{Route::getCurrentRoute()->uri === '/' ? 'text-white bg-[#0369a1]': 'hover:bg-[#0369a1] hover:bg-opacity-10 hover:text-[#0369a1]'}}"
        id="about_openData_tap"
        href="/"
    >
        <div class="col-span-1 mx-auto my-auto">
            <svg
                class="h-4 stroke-1 stroke-[#0369a1] fill-white {{Route::getCurrentRoute()->uri === '/' ? '': 'group-hover:fill-[#0369a1] group-hover:stroke-white'}}"
                viewBox="0 0 24 24">
                <path d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="col-span-4 my-auto   font-medium mx-2 text-[90%]">
            عن البيانات المفتوحة
        </div>
    </a>
    <a
        class="border-l xs:border-b border-gray-100 grid grid-cols-5 px-2 py-2 group {{Route::getCurrentRoute()->uri === 'dataset' ? 'text-white bg-[#0369a1]': 'hover:bg-[#0369a1] hover:bg-opacity-10 hover:text-[#0369a1]'}}"
        id="openData_lib_tap"
        href="{{route('dataset.index')}}"
    >
        <div class="col-span-1 mx-auto my-auto">
            <svg
                class="h-4 stroke-1 stroke-[#0369a1] fill-white {{Route::getCurrentRoute()->uri === 'dataset' ? '': 'group-hover:fill-[#0369a1] group-hover:stroke-white'}}"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
        </div>
        <div
            class="col-span-4 my-auto   font-medium mx-2 text-[90%]"
        >مكتبة البيانات المفتوحة
        </div>
    </a>
    <a
        class="border-l xs:border-b border-gray-100 grid grid-cols-5 px-2 py-2 group {{Request::is('//') ? 'text-white bg-[#0369a1]': 'hover:bg-[#0369a1] hover:bg-opacity-10 hover:text-[#0369a1]'}}"
        href="/licens"
    >
        <div class="col-span-1 mx-auto my-auto">
            <svg
                class="h-4 stroke-1 stroke-[#0369a1] fill-white {{Request::is('//') ? '': 'group-hover:fill-[#0369a1] group-hover:stroke-white'}}"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 01-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 011.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 00-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 01-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 00-3.375-3.375h-1.5a1.125 1.125 0 01-1.125-1.125v-1.5a3.375 3.375 0 00-3.375-3.375H9.75"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="col-span-4 my-auto   font-medium mx-2 text-[90%]">سياسة البيانات المفتوحة</div>
    </a>
    <a
        class="border-l xs:border-b border-gray-100 grid grid-cols-5 px-2 py-2 group {{Request::is('//') ? 'text-white bg-[#0369a1]': 'hover:bg-[#0369a1] hover:bg-opacity-10 hover:text-[#0369a1]'}}"
        href="#"
    >
        <div class="col-span-1 mx-auto my-auto">
            <svg
                class="h-4 stroke-1 stroke-[#0369a1] fill-white {{Request::is('//') ? '': 'group-hover:fill-[#0369a1]'}}"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18"
                    stroke-linecap="round"
                    stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="col-span-4 my-auto   font-medium mx-2 text-[90%]">إرشادات الإستخدام</div>
    </a>
</div>
