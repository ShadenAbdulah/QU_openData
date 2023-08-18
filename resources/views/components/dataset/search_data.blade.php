<div class="row-span-1   mx-auto mt-5 text-white text-2xl"><h1>ابحث عن بيانات</h1></div>

<div class="row-span-2 grid grid-cols-1 mx-auto mt-0 w-full">
    <div class="w-3/4 pt-2 relative mx-auto text-gray-600">
        <button class="absolute right-5 top-4 opacity-30" type="submit">
            <svg class="text-white h-4 w-4 fill-current" height="512px" id="Capa_1"
                 viewBox="0 0 56.966 56.966" width="512px"
                 x="0px" xml:space="preserve"
                 xmlns="http://www.w3.org/2000/svg" y="0px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                                    </svg>
        </button>
        <form action="{{route('dataset.index')}}" method="post">
            @csrf
            @method('GET')
            <input
                @keyup.enter="this.form.submit()"
                class="border border-gray-300 bg-[#074871] w-full h-8 px-12 text-sm text-white   font-medium focus:outline-none"
                name="search"
                placeholder="ابحث عن بيانات.." type="search">
        </form>
    </div>
</div>
