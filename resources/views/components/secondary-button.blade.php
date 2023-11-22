<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-red-500 border-opacity-50 rounded-md font-semibold text-red-500 uppercase tracking-widest hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>