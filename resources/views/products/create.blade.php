<x-app-layout>
    <div class="mx-auto mt-10 p-6 max-w-lg rounded-md bg-white">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <div>
                <x-input-label for="name" value="Name" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
            </div>

            <div class="mt-4">
                <x-input-label for="price" value="Price" />
                <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" required />
            </div>

            <div class="mt-4">
                <x-input-label for="description" value="Description" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" required />
            </div>

            <div class="mt-4">
                <x-input-label for="quantity" value="Quantity" />
                <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity" required />
            </div>

            <div class="mt-4">
                <x-input-label for="image" value="Image" />
                <x-text-input id="image" class="block mt-1 w-full" type="text" name="image" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-3">
                    Create
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
