@extends('layouts.default')
@section('search')
    <x-dataset.search_data></x-dataset.search_data>
@endsection
@section('content')
    <x-dataset.tabs></x-dataset.tabs>
    <div class=" " id="openData_lib">

        <!-- <div class="grid grid-rows-2 mt-10">
             <div class="flex flex-auto justify-end">
                 <p class="font-thin text-xs mx-5 my-auto">3 مجموعات بيانات موجودة</p>
                 <svg id="filter" onclick="filter()" class="w-6 h-6 fill-none my-auto nonActiveFilter"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                     <path stroke-linecap="round" stroke-linejoin="round"
                           d="M6 13.5V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 010 3m0-3a1.5 1.5 0 000 3m0 9.75V10.5"/>
                 </svg>
             </div>
             <div id="filter-fields" class="hidden flex gap-1 text-sm font-thin xs:flex-col xs:flex-col">
                 <select class="">
                     <option>المجموعات</option>
                     <option>المجموعة الأولى</option>
                     <option>المجموعة الثانية</option>
                     <option>المجموعة الثالثة</option>
                 </select>
                 <select>
                     <option>الوسوم</option>
                     <option>طلاب</option>
                     <option>تعليم</option>
                     <option>إحصائيات</option>
                 </select>
                 <select>
                     <option>الترتيب بحسب</option>
                     <option>أبجدي تصاعدي</option>
                     <option>أبجدي تنازلي</option>
                     <option>الأحدث</option>
                     <option>الأقدم</option>
                 </select>
             </div>
         </div> -->

        <div class="border border-gray-100 h-fit mx-auto my-5 p-10 bg-white border-b-4">
            @foreach($datasets as $data)
                <div>
                    <a class="font-bold" href="{{route('dataset.show', $data->id)}}">{{$data->ar_title}}</a>
                    <div class="w-2/6 grid grid-cols-3 font-thin py-5 opacity-60 xs:w-full xs:w-full">
                        <div class="flex items-center gap-1">
                            <div class="mb-1">
                                <svg class="w-3 fill-yellow-500"
                                     viewBox="0 0 22 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <h1 class="my-auto ml-1 text-sm text-gray-600" id="rate1">{{$data->average_rating}}</h1>
                        </div>
                        <div class="flex w-fit">
                            <svg class="w-3 pb-1.5 fill-none text-black" stroke="currentColor"
                                 stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <h1 class="text-sm mr-1.5 text-gray-600">{{$data->number_of_downloads}}</h1>
                        </div>
                        <div class="flex w-fit align-bottom">
                            <svg class="w-3 fill-none pb-1.5" stroke="currentColor" stroke-width="1.5"
                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                            <h1 class="text-sm mr-1.5 text-gray-600">{{$data->number_of_downloads}}</h1>
                        </div>
                    </div>
                    @if(($data->id !== count($datasets)) or ($data->id%5 !== 0))
                        <hr class="text-gray-200 mt-5 mb-10">
                    @endif
                </div>
            @endforeach
        </div>
        {{$datasets->links()}}
        <div class="border border-gray-100 h-fit mx-auto bg-white my-5 p-5">
            <form action="index.php" method="post" id="estimateForm">
                <div class="my-5">
                    <h1 class="font-medium mx-10 mb-5">استطلاع رأي</h1>
                    <hr class="border-gray-100">
                </div>
                <label class="font-medium" for="estimateRadio">ما مدى رضاك عن نوعية البيانات المفتوحة المقدمة من
                    جامعة
                    القصيم؟</label>
                <div class="flex gap-7 mt-3 mb-10 mx-10" id="estimateRadio">
                    <div>
                        <input checked id="excellent" name="estimateRadio" type="radio" value="excellent">
                        <label for="excellent">ممتاز</label>
                    </div>
                    <div>
                        <input id="good" name="estimateRadio" type="radio" value="good">
                        <label for="good">جيد</label>
                    </div>
                    <div>
                        <input id="fair" name="estimateRadio" type="radio" value="fair">
                        <label for="fair">مقبول</label>
                    </div>
                </div>

                <label class="font-medium" for="notes">ما هي البيانات التي ترغب بإتاحتها عبر منصة البيانات
                    المفتوحة؟</label> <br>
                <textarea class="border border-gray-300 mt-2 w-full" id="notes" name="notes" required></textarea>
                <hr class="border-gray-100">
                <div class="flex xs:flex-col xs:flex-col">
                    <div class="g-recaptcha float-right mt-5 flex-grow"
                         data-sitekey="6LfbYjknAAAAABNxXFs1r-TlXQ3u-5jEugUlTwWG"></div>
                    <button
                        class="w-fit px-7 py-px float-left border border-gray-300 bg-[#04abab] text-white mt-10"
                        type="submit">إرسال
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

