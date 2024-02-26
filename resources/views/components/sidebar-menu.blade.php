<div class="flex flex-col items-start mt-16">
    <div class="flex items-center active:bg-wheat">
        @yield('menu-content1')
    </div>
    <div class="flex items-center mt-10">
        @yield('menu-content2')
    </div>
    <div class="flex items-center mt-10">
        @yield('menu-content3')
    </div>

    {{-- Logout menu --}}
    <div class="flex items-start mt-72">
        <i class="fa-solid fa-arrow-right-from-bracket text-xl pe-6"></i>

        <form method="POST" action="{{ route('logout') }}" x-data>
            @csrf
            <a href="{{ route('logout') }}" class="text-lg" @click.prevent="$root.submit();">Logout</a>
        </form>
    </div>

</div>
