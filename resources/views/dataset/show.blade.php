@extends('layouts.default')
@section('search')
    <h1 class="mx-auto text-white text-3xl font-bold   mt-5">
        {{$data->ar_title}}
    </h1>
@endsection
@section('content')
    <div class="  my-10 xs:block md:block lg:flex">
        <section class="mx-auto w-full">
            <div class="bg-white p-10 border h-fit">
                <div class="flex-row space-y-10">
                    <div>
                        <h1 class="font-bold text-sm mb-3">الوصف</h1>
                        <p>{{$data->ar_description}}</p>
                    </div>
                    <div>
                        <h1 class="font-bold text-sm mb-3">بيانات اضافية</h1>
                        <table class="table-auto w-1/2">
                            <tbody class="text-xs text-right pt-3">
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3">التحديث الدوري</td>
                                <td class="text-[#04abab] py-2">
                                    @if($data->periodically_updating === 'yearly')
                                        سنوي
                                    @elseif($data->periodically_updating === 'half_yearly')
                                        نصف سنوي
                                    @else
                                        {{$data->periodically_updating}}
                                    @endif
                                </td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3">تاريخ الإنشاء</td>
                                <td class="text-[#04abab] py-2">{{$data->created_at->format('d-m-Y')}}</td>
                            </tr>
                            <tr class="odd:bg-white even:bg-slate-50">
                                <td class="px-3">تاريخ أخر تحديث</td>
                                <td class="text-[#04abab] py-2">{{$data->updated_at->format('d-m-Y')}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-fit">
                        <h1 class="font-bold text-sm mb-3">الوسوم</h1>
                        <div class="flex flex-auto gap-3 xs:block">
                            @foreach($data->tags as $tag)
                                <form action="{{route('landing.tags.index', $tag)}}" method="post">
                                    @csrf @method('get')
                                    <button type="submit" href=""
                                            class="px-5 py-1 rounded-full border border-gray-400 text-gray-400 text-xs">
                                        {{$tag->name}}
                                    </button>
                                </form>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex xs:block">
                        <div class="flex gap-1 w-1/2">
                            <div class="mb-1">
                                <svg class="w-3 fill-yellow-500"
                                     viewBox="0 0 22 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                </svg>
                            </div>
                            <h1 class="font-thin text-xs text-gray-700">{{$data->average_rating}}</h1>
                        </div>
                        <div class="flex gap-2 justify-end w-full">
                            <div class="flex gap-1 my-auto">
                                <svg class="w-3 pb-1.5 fill-none stroke-1 stroke-gray-800" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                          stroke-linejoin="round"/>
                                </svg>
                                <h1 class="font-thin text-xs text-gray-700">{{$data->number_of_downloads}}</h1>
                            </div>
                            <div class="flex gap-1 my-auto">
                                <svg class="w-3 fill-none pb-1.5 stroke-1 stroke-gray-800"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"/>
                                </svg>
                                <h1 class="font-thin text-xs text-gray-700">{{$data->number_of_downloads}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
