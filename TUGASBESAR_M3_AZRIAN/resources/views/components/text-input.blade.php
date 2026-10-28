@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full mt-1.5 p-2.5 border border-linen-300 rounded-md shadow-sm focus:border-golden-chestnut-400 focus:ring focus:ring-golden-chestnut-200 focus:ring-opacity-50 text-sm']) }}>
