<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-5 py-2.5 bg-espresso-950 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-espresso-900 focus:bg-espresso-900 active:bg-black focus:outline-none focus:ring-2 focus:ring-golden-chestnut-500 focus:ring-offset-2 transition ease-in-out duration-150 cursor-pointer']) }}>
    {{ $slot }}
</button>
