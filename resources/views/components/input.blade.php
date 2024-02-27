@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' drop-shadow-md shadow-tan border-transparent focus:drop-shadow-md focus:border-deer focus:ring-deer rounded-md shadow-sm placeholder-whiteCoffee',]) !!}>
