<div class="flex flex-col h-screen bg-milkChoco items-center w-60 text-white">
    <div class="flex flex-col items-center justify-center py-9">
        @yield('profile')
    </div>

    <div id="line-sidebar" class="w-full bg-white h-0.5 mt-1"></div>

    <div class="flex flex-col justify-center items-center w-full">
        @yield('menu')
    </div>
</div>