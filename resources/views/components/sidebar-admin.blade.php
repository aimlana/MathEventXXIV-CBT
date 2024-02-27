<x-sidebar>
    @section('profile')
    <h1 class="text-xl">Welcome</h1>
    <h2 class="font-bold text-2xl">ADMIN</h2>
    @endsection

    @section('menu')
    <x-sidebar-menu>
        @section('menu-content1')
            <i class="fa-solid fa-gauge text-xl pe-6"></i>
            <a href="#" class="text-lg">Dashboard</a>
        @endsection
        @section('menu-content2')
            <i class="fa-solid fa-user text-xl pe-6"></i>
            <a href="#" class="text-lg">Peserta</a>
        @endsection
        @section('menu-content3')
            <i class="fa-solid fa-list-check text-xl pe-6"></i>
            <a href="#" class="text-lg">Soal Tes</a>
        @endsection
        @section('menu-content4')
            <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
            <a href="#" class="text-lg">Informasi</a>
        @endsection
    </x-sidebar-menu> 
    @endsection
</x-sidebar>

