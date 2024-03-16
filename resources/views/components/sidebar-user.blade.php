<x-sidebar>
    @section('profile')
        <a href="#" class="rounded-full w-28 h-28 hover:drop-shadow-xl">
            <x-user-profile-picture />
        </a>
        <h1 class="font-medium text-xl mt-6">Go Youn Jung</h1>
    @endsection

    @section('menu')
        <x-sidebar-menu>
        @section('menu-content')
            <a href="{{ route('user.profile') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('user.profile') || (!str_contains(request()->route()->uri, 'user') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center ps-8">
                    <i class="fa-solid fa-circle-user text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Profile</h3>
                </div>
            </a>
            <a href="{{ route('user.ujian') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('user.ujian') || (!str_contains(request()->route()->uri, 'user') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center ps-8">
                    <i class="fa-solid fa-file-lines text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Ujian</h3>
                </div>
            </a>
            <a href="{{ route('user.informasi') }}"
                class="flex items-center justify-start w-full py-4
                {{ request()->routeIs('user.informasi') || (!str_contains(request()->route()->uri, 'user') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : ' hover:text-wheat' }}">
                <div class="flex items-center justify-center ps-8">
                    <i class="fa-solid fa-circle-exclamation text-xl pe-6"></i>
                    <h3 href="#" class="text-lg font-medium">Informasi</h3>
                </div>
            </a>
        @endsection
    </x-sidebar-menu>
@endsection
</x-sidebar>
