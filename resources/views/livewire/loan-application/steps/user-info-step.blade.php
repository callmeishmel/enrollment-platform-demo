<div class="mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8">
    <div class="flex items-center justify-between mb-3">
        <h2 class="text-xl font-thin"><span class="font-extrabold text-xl">Step 1</span> | Personal Information</h2>
    </div>
    <form wire:submit="submit">
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your name</label>
            <input type="text" wire:model="formData.name" id="name" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="First and last" />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="email" wire:model="formData.email" id="email" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="name@flowbite.com" />
        </div>
        <div class="mb-5">
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900">Your state</label>
            <input type="text" wire:model="formData.state" id="state" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="CA" />
        </div>
        <div class="mb-5">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900">Your city</label>
            <input type="text" wire:model="formData.city" id="city" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="City of residence" />
        </div>
        <div class="mb-5">
            <label for="zip_code" class="block mb-2 text-sm font-medium text-gray-900">Your zip</label>
            <input type="text" wire:model="formData.zip_code" id="zip_code" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="94103" />
        </div>
        <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Select a Program ＞</button>
    </form>
</div>
