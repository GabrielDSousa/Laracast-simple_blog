<x-dropdown>
    <x-slot name="trigger">
        <div class="flex items-center">
            <button
                    class="appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold"
            >
                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
            </button>

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" width="22"
                    height="22"></x-icon>
        </div>
    </x-slot>


    <div>
        <x-dropdown-item href="/" :active="$currentCategory === null">All</x-dropdown-item>

        @foreach($categories as $category)
            <x-dropdown-item
                    href="/?category={{ $category->slug }}"
                    :active="$currentCategory->name === $category->slug"
            >
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
    </div>
</x-dropdown>