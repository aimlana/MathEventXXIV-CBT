<div class="flex flex-col items-start mt-8 w-full">
    <a href="{{ route('admin.dashboard') }}"  
        class="flex items-center justify-start w-full py-4
        {{ request()->routeIs('admin.dashboard') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : '' }}">
        <div class="flex items-center justify-center ps-8">
            @yield('menu-content1')
        </div>
    </a>
    <a href="{{ route('admin.peserta') }}"  
        class="flex items-center justify-start w-full py-4
        {{ request()->routeIs('admin.peserta') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : '' }}">
        <div class="flex items-center justify-center ps-8">
            @yield('menu-content2')
        </div>
    </a>
    <a href="{{ route('admin.soal-tes') }}"  
        class="flex items-center justify-start w-full py-4
        {{ request()->routeIs('admin.soal-tes') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : '' }}">
        <div class="flex items-center justify-center ps-8">
            @yield('menu-content3')
        </div>
    </a>
    <a href="{{ route('admin.informasi') }}"  
        class="flex items-center justify-start w-full py-4
        {{ request()->routeIs('admin.informasi') || (!str_contains(request()->route()->uri, 'admin') && !str_contains(request()->route()->uri, 'edit')) ? 'bg-wheat text-milkChoco' : '' }}">
        <div class="flex items-center justify-center ps-8">
            @yield('menu-content4')
        </div>
    </a>

    {{-- Logout menu --}}
    <div class="flex items-center justify-start w-full py-4 active:bg-wheat mt-44">
        <div class="flex items-center justify-center ps-8">
            <i class="fa-solid fa-arrow-right-from-bracket text-xl pe-6"></i>
    
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <a href="{{ route('logout') }}" class="text-lg" @click.prevent="$root.submit();">Logout</a>
            </form>
        </div>
    </div>

</div>
