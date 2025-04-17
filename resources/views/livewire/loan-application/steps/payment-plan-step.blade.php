<div class="mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8">
    <div class="flex items-center justify-between mb-3">
    <h2 class="text-xl font-thin"><span class="font-extrabold text-xl">Step 3</span> | Select a Payment Plan</h2>
        <span wire:click="goBack" class="text-sm text-blue-500 cursor-pointer hover:underline">Back</span>
    </div>
    <form wire:submit="submit">
        <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
        <input type="email" id="email" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
        <input type="password" id="password" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm text-gray-900 focus:ring-blue-500 focus:border-blue-500" required />
        </div>
        <div class="flex items-start mb-5">
        <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required />
        <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
        </div>
        <button type="submit" class="w-full text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
    </form>
</div>
