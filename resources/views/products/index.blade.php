<x-app-layout>
    <div class="mx-auto mt-10 max-w-3xl flex justify-end">
        <a href="{{ route('products.create') }}" class="px-6 py-2 bg-blue-500 text-white">
            Create
        </a>
    </div>

    {{ $products }}
</x-app-layout>
