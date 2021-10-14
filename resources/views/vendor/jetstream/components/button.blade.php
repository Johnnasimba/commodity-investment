<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-10 py-4 m-4  border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }} style="
     background-color: rgba(38, 47, 86, 1);
     font-size: 18px;
    " >
    {{ $slot }}
</button>
