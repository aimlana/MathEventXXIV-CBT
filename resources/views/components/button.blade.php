<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center items-center py-3 bg-deer border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-dykeBrown focus:bg-dykeBrown active:bg-dykeBrown focus:outline-none focus:ring-2 focus:ring-dykeBrown focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
