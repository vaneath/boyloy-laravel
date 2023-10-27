<x-app-layout>
    <div class="max-w-5xl mx-auto mt-10 rou">
        <div class="flex space-x-5 bg-slate-200">
            <img class="h-96 w-80 bg-cover basis-1/3" src="{{ $product->image }}" alt="">
            <div class="flex flex-col basis-2/3 mt-10 space-y-3">
                <div class="flex space-x-3">
                    <h2 class=" font-semibold">Product name:</h2>
                    <p>{{ $product->name }}</p>
                </div>
                <div class="flex space-x-3">
                    <h2 class=" font-semibold">Price:</h2>
                    <p class="text-blue-500">{{ $product->price }} $</p>
                </div>
                <div class="flex space-x-3">
                    <h2 class=" font-semibold">Description:</h2>
                    <p>{{ $product->description }}</p>
                </div>
                <div class="flex space-x-3">
                    <h2 class=" font-semibold">Quantity:</h2>
                    <p>{{ $product->quantity }} left(s)</p>
                </div>
                @can('admin')
                    <div class="flex justify-end mr-10">
                        <a href="{{ route('products.edit', $product->id) }}"
                            class="px-6 py-2 bg-gray-700 text-white rounded-md">Edit</a>
                        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <x-primary-button class="ml-3 bg-red-500">
                                Delete
                            </x-primary-button>
                        </form>
                    </div>
                @endcan
            </div>
        </div>
    </div>
</x-app-layout>
