<section class="py-1 bg-blueGray-50">
    <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-8">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 border rounded ">
            <div class="rounded-t mb-0 px-4 py-3 bg-milkChoco border-0">
                <div class="flex flex-wrap items-center py-2">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-white">@yield('title-table')</h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        @yield('button')
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <table class="items-center w-full border-collapse bg-wheat">
                    <thead>
                        @yield('table-head')
                    </thead>

                    <tbody>
                        @yield('table-content')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>