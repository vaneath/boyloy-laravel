<x-app-layout>
    @can('admin')
        <div class="mx-auto mt-10 max-w-3xl flex justify-end">
            <a href="{{ route('products.create') }}" class="px-6 py-2 bg-blue-500 text-white">
                Create
            </a>
        </div>
    @endcan

    <div class="grid grid-cols-4 max-w-7xl mx-auto space-x-10">
        @foreach ($products as $product)
            <div class=" w-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-96 w-80 bg-cover" src="{{ $product->image }}" alt="{{ $product->name }}" />
                    <div class="p-5">
                        <div class="mb-2 flex">
                            <a class="flex-1" href="#">
                                <h5 class="text-2xl font-bold text-gray-900 dark:text-white">
                                    {{ $product->name }}
                                </h5>
                            </a>
                            <p class="text-white">${{ $product->price }}</p>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            {{ $product->description }}
                        </p>
                        <a href="{{ route('products.show', $product->id) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
