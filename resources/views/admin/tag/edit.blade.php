@extends('components.admin.default')
@section('content')
    <div class="w-1/3 mx-auto my-auto">
        <form method="post" action="{{route('tags.update', $tag->id)}}"
              class="grid grid-cols-3">
            @csrf
            @method('put')
            <input type="text" value="{{$tag->name}}" name="name" required
                   class="border-2 border-gray-100 col-span-2 rounded-r-lg"
            >
            <input type="submit" value="تحديث"
                   class="bg-[#04abab] px-3 py-1 rounded-l-lg w-auto text-white">
        </form>
        @error('name')
        <p class="block w-fit font-mono text-red-700/70 text-sm p-2">هذا الوسم موجود!</p>
        @enderror    </div>
@endsection
