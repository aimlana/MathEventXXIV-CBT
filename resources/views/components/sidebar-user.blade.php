<x-sidebar>
    @section('profile')
    <div class="rounded-full w-28 h-28">
        <img src="{{ asset('images/profile-pict.jpg') }}" alt="profile-picture" class="object-cover rounded-full w-full h-full">
    </div>
    <h1 class="font-medium text-xl mt-6">Go Youn Jung</h1>    
    @endsection

    @section('menu')
    <x-sidebar-menu>
        @section('menu-content1')
            <i class="fa-solid fa-gauge text-xl pe-6"></i>
            <a href="#" class="text-lg">Profile</a>
        @endsection
        @section('menu-content2')
            <i class="fa-solid fa-user text-xl pe-6"></i>
            <a href="#" class="text-lg">Ujian</a>
        @endsection
        @section('menu-content3')
            <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
            <a href="#" class="text-lg">Informasi</a>
        @endsection
    </x-sidebar-menu> 
    @endsection
</x-sidebar>

