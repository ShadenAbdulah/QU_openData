@extends('layouts.default')
@section('search')
    <x-dataset.search_data></x-dataset.search_data>
@endsection
@section('content')
    <x-dataset.tabs></x-dataset.tabs>
    <div class="border border-gray-100 h-fit mx-auto my-10 py-5 px-10 bg-white w-full xs:w-5/6"
         id="about_openData">
        <h1 class="  font-bold text-lg w-full">عن البيانات المفتوحة</h1>
        <p class="  mt-8 text-justify">البيانات المفتوحة متاحة لجميع مستخدمي البوابة الإلكترونية لجامعة
            القصيم ،
            وهي تهدف إلى تعزيز المشاركة المجتمعية ورفع مستوى نشر المعرفة وعلى زائري البوابة والمستفيدين من خدماتها
            الاطلاع على سياسة استخدام تلك البيانات لمعرفة أي تحديثات يتم عليها.</p>
    </div>
    @if(session()->has('successes'))
        <div x-data="{show: true}"
             x-init="setTimeout(() => show = false, 2000)"
             x-show="show"
             class="fixed px-3 py-2 bottom-3 bg-[#04abab] text-white transition-all ease-in-out">
            {{session('successes')}}
        </div>
    @endif
@endsection

