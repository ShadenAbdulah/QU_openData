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
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الدور
                        </th>
                        <th
                            class="py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            عدد المجاميع المنشورة
                        </th>
                        <th
                            class="py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            الأدوات
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="border-b">
                            <td class="px-5 py-5 text-sm">
                                <div class="flex items-center">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{$user->id}}
                                    </p>
                                </div>
                            </td>
                            <td class="border-b border-gray-200 text-sm">
                                {{$user->name}}
                            </td>
                            <td class="px-5 py-5 text-sm">
                                <span class="px-3 py-1 w-fit text-white rounded-full
                                 @if($user->admin === 1)
                                    bg-[#04abab]
                                    @else
                                    bg-[#074871]
                                  @endif
                                 text-xs">
                            @if($user->admin === 1)
                                        مسؤول
                                    @else
                                        عضو
                                    @endif
                                </span>
                            </td>
                            <td class="px-5 py-5 text-sm whitespace-nowrap">
                                {{count($user->createdDataset)}}
                            </td>
                            @if($user->id !== request()->user()->id)
                                <td class="flex gap-5 py-5 text-sm whitespace-no-wrap font-semibold">
                                    @if(!$user->admin)
                                        <form action="{{route('users.update', $user->id)}}" method="post">
                                            @csrf @method('put')
                                            <button type="submit" class="text-[#0369a1]">
                                                ترقية
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{route('users.update', $user->id)}}" method="post">
                                            @csrf @method('put')
                                            <button type="submit">
                                                <svg class="w-4 fill-[#0369a1]" aria-hidden="true"
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 18">
                                                    <path
                                                        d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-6a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                    <form method="post" action="{{route('users.destroy', $user->id)}}"
                                    >
                                        @csrf
                                        @method('delete')
                                        <input
                                            onclick="return confirm('هل أنت متأكد؟')"
                                            class="my-auto text-red-700"
                                            type="submit"
                                            value="حذف"></form>

                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$users->links()}}
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
