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
        <a href="#" class="text-lg">Logout</a>
    </div>

</div>
