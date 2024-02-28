<div class="flex flex-col items-start mt-8 w-full">
    @yield('menu-content')

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
