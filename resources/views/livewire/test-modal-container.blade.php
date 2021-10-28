<div>
    
    <div class="text-center">
        <h2 class="text-xl font-bold">Normal button</h2>
        <button class="bg-gray-400 px-4 py-2 rounded-md text-white" wire:click='$emit("openModal", "test-modal", @json(["user" => 1]))'>Open test modal</button>
    </div>

    <div class="text-center mt-10">
        <h2 class="text-xl font-bold">Component button</h2>
        <x-button wire:click='$emit("openModal", "test-modal", @json(["user" => 1]))'>Open test modal</x-button>
    </div>

</div>
