@extends('components.admin.default')
@section('content')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow px-20 py-10 mt-20">
            <div class="bg-white">
                <form id="deleted_form" method="post" class="my-auto text-red-700">
                    @csrf
                    @method('delete')
                    <table class="w-full mx-auto table-fixed">
                        <thead>
                        <tr>
                            <th
                                width="10"
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                الرقم
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                الاسم
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                الحالة
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                الناشر
                            </th>
                            <th
                                class="py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                الأدوات
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datasets as $data)
                            <tr class="h-fit border-b">
                                <td class="px-5 py-5 border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$data->id}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$data->ar_title}}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-gray-200 bg-white text-sm">
                                <span
                                    class="px-3 py-1 w-fit text-white rounded-full {{($data->status === 'published' or $data->status === 'منشور')? 'bg-[#04abab]': 'bg-[#074871]'}} text-xs">
                            {{($data->status === 'published' or $data->status === 'منشور')? 'منشور':'مؤرشف'}}
                                </span>
                                </td>
                                <td class="px-5 py-5 border-b bg-white text-sm">
                                    <a class="text-gray-900 whitespace-no-wrap">{{($data->createdBy)?$data->createdBy->name:'null'}}</a>
                                </td>
                                <td class="flex gap-5 py-5 border-gray-200 bg-white text-sm whitespace-no-wrap font-semibold">
                                    <a href="{{route('datasets.show', $data->id)}}"
                                       class="py-1 text-[#04abab]">عرض</a>
                                    <a href="{{route('datasets.edit', $data->id)}}" class="my-auto text-[#0369a1]">
                                        @method('get')
                                        تعديل
                                    </a>
                                    <button
                                        onclick="return confirm('هل أنت متأكد؟')"
                                        type="submit"
                                        form="deleted_form"
                                        formmethod="post"
                                        formaction="{{route('datasets.destroy', $data->id)}}"
                                    >
                                        حذف
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </form>
                <div class="w-fit">
                    <a href="{{route('datasets.create')}}">
                        @method('get')
                        <x-admin.add-new></x-admin.add-new>
                    </a>
                </div>
            </div>
            {{$datasets->links()}}
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
