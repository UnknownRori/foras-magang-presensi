<a class="{{ request()->fullUrl() == $href ? 'text-gray-950 underline font-medium' : '' }} text-gray-600 duration-200 hover:text-gray-900"
    href="{{ $href }}">{{ $slot }}</a>
