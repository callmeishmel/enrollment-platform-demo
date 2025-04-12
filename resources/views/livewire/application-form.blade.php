<div class="max-w-xl mx-auto p-6 bg-white shadow rounded-lg">
    @if (session()->has('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 roudned mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="bg-red-100 text-red-800 px-4 py-2 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-4">
        <div>
            <div class="flex justify-between items-center mb-1">
                <label for="phone" class="text-sm font-medium text-gray-700">Program</label>
                <div class="text-sm text-red-600">
                    @error('program_id') {{ $message }} @enderror
                </div>
            </div>
            <select id="program_id" wire:model="program_id" class="w-full border rounded px-3 py-2">'
                <option value="">-- Select a Program --</option>
                @foreach($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>

        </div>

        <div>
            <div class="flex justify-between items-center mb-1">
                <label for="phone" class="text-sm font-medium text-gray-700">Phone</label>
                <div class="text-sm text-red-600">
                    @error('phone') {{ $message }} @enderror
                </div>
            </div>
            <input id="phone" type="text" wire:model="phone" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <div class="flex justify-between items-center mb-1">
                <label for="phone" class="text-sm font-medium text-gray-700">City</label>
                <div class="text-sm text-red-600">
                    @error('city') {{ $message }} @enderror
                </div>
            </div>
            <input id="city" type="text" wire:model="city" class="w-full border rounded px-3 py-2">
        </div>

        <div>
            <div class="flex justify-between items-center mb-1">
                <label for="phone" class="text-sm font-medium text-gray-700">Preferred Start Date</label>
                <div class="text-sm text-red-600">
                    @error('start_date') {{ $message }} @enderror
                </div>
            </div>
            <input id="start_date" type="date" wire:model="start_date" class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Submit Application
        </button>
    </form>
</div>
