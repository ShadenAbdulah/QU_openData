@extends('components.admin.default')
@section('content')
    <div class="  my-auto w-5/6 mx-auto xs:block md:block lg:flex">
        <section class="w-full">
            <div class="p-10 border h-fit shadow-lg">
                <div class="flex-row space-y-5">
                    <form method="post" action="{{route('datasets.update', $dataset->id)}}"
                          class="my-auto">
                        @csrf
                        @method('put')
                        <div class="flex flex-auto mb-10">
                            <input class="col-span-2 w-3/4 font-bold border border-gray-200 rounded-lg ml-2"
                                   value="{{$dataset->ar_title}}"
                                   name="ar_title"
                                   required>
                            <select name="status" class="border border-gray-200 rounded-lg text-sm font-semibold">
                                <option value="مؤرشف">أرشفة</option>
                                <option value="منشور">نشر</option>
                            </select>
                            <div class="text-left w-36 mr-5">
                                <input type="submit" value="تحديث"
                                       class="bg-[#04abab] px-3 py-1 mx-auto rounded-lg w-full h-full text-white">
                            </div>
                        </div>
                        <div class="mb-10">
                            <h1 class="font-bold text-sm mb-3">الوصف</h1>
                            <input value="{{$dataset->ar_description}}" name="ar_description"
                                   class="w-5/6 h-20 border border-gray-200 rounded-lg">
                        </div>
                        <div>
                            <h1 class="font-bold text-sm mb-3">بيانات اضافية</h1>
                            <table class="table-auto w-5/6">
                                <tbody class="text-xs text-right pt-3">
                                <tr class="odd:bg-white even:bg-slate-50">
                                    <td class="px-3">التحديث الدوري</td>
                                    <td class="text-[#04abab] py-2">
                                        <select class="border border-gray-200 rounded-lg" name="periodically_updating">
                                            <option value="{{$dataset->periodically_updating}}"
                                                    selected>{{$dataset->periodically_updating}}</option>
                                            <option value="سنوي">سنوي</option>
                                            <option value="نصف سنوي">نصف سنوي</option>
                                            <option value="شهري">شهري</option>
                                            <option value="اسبوعي">اسبوعي</option>
                                            <option value="يومي">يومي</option>
                                            <option value="بلا تحديث دوري">بلا تحديث دوري</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="odd:bg-white even:bg-slate-50">
                                    <td class="px-3">تاريخ الإنشاء</td>
                                    <td class="text-[#04abab] py-2">{{$dataset->created_at->format('d-m-Y')}}</td>
                                    <td class="px-3">بواسطة</td>
                                    <td class="text-[#04abab] py-2">{{($dataset->createdBy !== null)?$dataset->createdBy->name:'null'}}</td>
                                </tr>
                                <tr class="odd:bg-white even:bg-slate-50">
                                    <td class="px-3">تاريخ أخر تحديث</td>
                                    <td class="text-[#04abab] py-2">{{$dataset->updated_at->format('d-m-Y')}}</td>
                                    <td class="px-3">بواسطة</td>
                                    <td class="text-[#04abab] py-2">{{($dataset->updatedBy !== null)?$dataset->updatedBy->name:'null'}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="w-fit">
                        <h1 class="font-bold text-sm mb-3">الوسوم</h1>
                        <div class="flex flex-auto gap-3 mb-10">
                            @foreach($dataset->tags as $tag)
                                <div
                                    class="flex flex-auto px-3 py-1 w-fit rounded-full border border-gray-400 text-gray-400 text-xs my-auto">
                                    <form action="{{route('datasets.tags.destroy', [$dataset, $tag])}}" method="post">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="h-full">
                                            <svg class="w-2 ml-3 text-[#0369a1] my-auto" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"
                                                      d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                        </button>
                                    </form>
                                    {{$tag->name}}
                                </div>
                            @endforeach
                            <div x-data="{show: false}">
                                <div class="my-1.5">
                                    <svg x-show="!show" x-on:click="show = ! show" class="w-3 text-[#04abab]"
                                         aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M9 1v16M1 9h16"/>
                                    </svg>
                                </div>
                                <form method="post" action="{{route('datasets.tags.store', $dataset)}}" x-show="show">
                                    @csrf @method('post')
                                    <input hidden value="{{$dataset->id}}" name="dataset">
                                    <select name="tag" onchange="this.form.submit()"
                                            class="w-fit rounded-full border border-gray-400 text-gray-400 text-xs my-auto">
                                        <option disabled selected></option>
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="flex xs:block">
                        <div class="flex w-1/2">
                            <h1 class="font-light text-xs flex-shrink-0">متوسط التقييم</h1>
                            <div class="flex h-fit mx-3 gap-1">
                                @for($count = 0; $count < 5; $count++)
                                    <svg class="w-3 stroke-yellow-500 fill-none"
                                         viewBox="0 0 22 20"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                @endfor
                            </div>
                            <h1 class="font-thin text-xs text-gray-700">{{$dataset->average_rating}}</h1>
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
                                <h1 class="font-thin text-xs text-gray-700">{{$dataset->number_of_downloads}}</h1>
                            </div>
                            <div class="flex gap-1 my-auto">
                                <svg class="w-3 fill-none pb-1.5 stroke-1 stroke-gray-800"
                                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"/>
                                </svg>
                                <h1 class="font-thin text-xs text-gray-700">{{$dataset->number_of_downloads}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
