<x-sidebar>
    @section('profile')
        <h1 class="text-xl">Welcome</h1>
        <h2 class="font-bold text-2xl">ADMIN</h2>
    @endsection

    @section('menu')
        <x-sidebar-menu>
        @section('menu-content')
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('admin.dashboard') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center px-10">
                    <i class="fa-solid fa-gauge text-xl pe-6"></i>
                    <h3 class="text-lg font-medium">Dashboard</h3>
                </div>
            </a>
            <a href="{{ route('admin.peserta') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('admin.peserta') ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center px-10">
                    <i class="fa-solid fa-user-group text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Peserta</h3>
                </div>
            </a>

            <a href="{{ route('admin.soal-tes') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('admin.soal-tes') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center px-10">
                    <i class="fa-solid fa-list-check text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Soal Tes</h3>
                </div>
            </a>
            <a href="{{ route('admin.informasi') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('admin.informasi') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center px-10">
                    <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Informasi</h3>
                </div>
            </a>
            <a href="{{ route('admin.registrasi') }}"
            class="flex items-center justify-start w-full py-4
            {{ request()->routeIs('admin.registrasi') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
            <div class="flex items-center justify-center px-10">
                <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
                <h3 href="#" class="text-lg font-medium">Registrasi Peserta</h3>
            </div>
        </a>
        @endsection
    </x-sidebar-menu>
@endsection
</x-sidebar>
