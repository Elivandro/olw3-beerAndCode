@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full border-gray-300 rounded-md shadow-sm text-primary-200 bg-tertiary-800 focus:border-primary-200 focus:ring-primary-200 sm:text-sm']) !!}>
