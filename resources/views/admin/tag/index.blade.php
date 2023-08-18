@extends('components.admin.default')
@section('content')

    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow px-20 py-10 mt-20">
            <div class="bg-white">
                <table class="w-4/6 mx-auto">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الرقم
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الاسم
                        </th>
                        <th
                            class="py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            عدد المجاميع المتصلة
                        </th>
                        <th
                            class="py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الأدوات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <div class="flex items-center">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$tag->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="border-b border-gray-200 text-sm px-5 py-5">
                                {{$tag->name}}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm whitespace-nowrap">
                                {{count($tag->datasets)}}
                            </td>
                            <td class="flex gap-5 py-5 border-b border-gray-200 text-[#0369a1] bg-white text-sm whitespace-no-wrap font-semibold">
                                <a href="{{route('tags.edit', $tag->id)}}">
                                    @method('get')
                                    تعديل
                                </a>
                                <form method="post" action="{{route('tags.destroy', $tag->id)}}"
                                >
                                    @csrf
                                    @method('delete')
                                    <input
                                        onclick="return confirm('هل أنت متأكد؟')"
                                        class="my-auto text-red-700"
                                        type="submit"
                                        value="حذف"></form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="w-4/6 mx-auto">
                    <form method="post" action="{{route('tags.create')}}">
                        @csrf
                        @method('get')
                        <x-admin.add-new></x-admin.add-new>
                    </form>
                </div>
            </div>
            {{$tags->links()}}
        </main>
    </div>
    @if(session()->has('successes'))
        <div x-data="{show: true}"
             x-init="setTimeout(() => show = false, 2000)"
             x-show="show"
             class="fixed px-3 py-2 bottom-3 bg-[#04abab]/50 text-black transition-all ease-in-out">
            {{session('successes')}}
        </div>
    @endif
@endsection
