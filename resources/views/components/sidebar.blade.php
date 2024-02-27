<div class="flex flex-col h-screen w-60 bg-milkChoco items-center text-white">
    <div class="flex flex-col items-center justify-center py-16">
        @yield('profile')
    </div>

    <div id="line-sidebar" class="w-full bg-white h-0.5"></div>

    <div>
        @yield('menu')
    </div>
</div>