@extends('components.admin.default')
@section('content')
    <form method="post" action="{{ route('datasets.store') }}"
          class="my-auto">
        @csrf
        @method('post')
        <div class="  my-auto w-5/6 mx-auto xs:block md:block lg:flex">
            <section class="w-full">
                <div class="p-10 border h-fit shadow-lg">
                    <div class="flex-row space-y-10">
                        <div class="flex gap-5">
                            <input
                                class="font-bold w-full border border-gray-200 rounded-lg placeholder:text-sm placeholder-gray-200"
                                name="ar_title"
                                placeholder="عنوان مجموعة البيانات"
                                required>
                            <select required name="status"
                                    class="border border-gray-200 rounded-lg text-sm font-semibold">
                                <option selected disabled>الحالة</option>
                                <option value="منشور">نشر</option>
                                <option value="مؤرشف">أرشفة</option>
                            </select>
                        </div>
                        <div>
                            <h1 class="font-bold text-sm mb-3">الوصف</h1>
                            <input name="ar_description"
                                   class="w-1/2 border border-gray-200 rounded-lg">
                        </div>
                        <div>
                            <h1 class="font-bold text-sm mb-3">بيانات اضافية</h1>
                            <table class="table-auto w-5/6">
                                <tbody class="text-xs text-right pt-3">
                                <tr class="odd:bg-white even:bg-slate-50">
                                    <td class="px-3">التحديث الدوري</td>
                                    <td class="text-[#04abab] py-2">
                                        <select name="periodically_updating" class="border border-gray-200 rounded-lg">
                                            <option>سنوي</option>
                                            <option>نصف سنوي</option>
                                            <option>شهري</option>
                                            <option>اسبوعي</option>
                                            <option>يومي</option>
                                            <option>بلا تحديث دوري</option>
                                        </select>
                                    </td>
                                </tr>
                                <td class="text-[#04abab] py-2">
                                    <input hidden disabled name="createdBy" value="{{request()->user()->id}}">
                                </td>
                                <td class="text-[#04abab] py-2">
                                    <input hidden disabled name="updatedBy" value="{{request()->user()->id}}">
                                </td>
                                </tbody>
                            </table>
                        </div>
                        <div class="w-full text-left">
                            <input type="submit" value="إضافة"
                                   class="bg-[#04abab] px-3 py-1 mx-auto rounded-lg w-1/6 text-white">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </form>
@endsection

