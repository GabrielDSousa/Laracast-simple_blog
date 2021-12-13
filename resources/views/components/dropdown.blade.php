@props(['trigger'])
<div class="relative text-left lg:inline-flex bg-gray-100 rounded-xl lg:w-32" x-data="{ show: false }"
     @click="show= ! show" @click.away="show= false">
    {{ $trigger }}
    <div
            x-show="show"
            class="py-2 lg:absolute bg-gray-100 w-full rounded-xl z-50 lg:mt-10 z-50 overflow-auto max-h-52"
            style="display: none">
        {{ $slot }}
    </div>
</div>