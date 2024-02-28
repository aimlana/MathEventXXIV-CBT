<x-sidebar>
    @section('profile')
    <h1 class="text-xl">Welcome</h1>
    <h2 class="font-bold text-2xl">ADMIN</h2>
    @endsection

    @section('menu')
    <x-sidebar-menu>
        @section('menu-content1')
            <i class="fa-solid fa-gauge text-xl pe-6"></i>
            <h3 class="text-lg font-medium">Dashboard</h3>
        @endsection
        @section('menu-content2')
            <i class="fa-solid fa-user text-xl pe-6"></i>
            <h3 href="#" class="text-lg font-medium">Peserta</h3>
        @endsection
        @section('menu-content3')
            <i class="fa-solid fa-list-check text-xl pe-6"></i>
            <h3 href="#" class="text-lg font-medium">Soal Tes</h3>
        @endsection
        @section('menu-content4')
            <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
            <h3 href="#" class="text-lg font-medium">Informasi</h3>
        @endsection
    </x-sidebar-menu> 
    @endsection
</x-sidebar>

