<div class="relative">
    <select
        wire:model.defer="{{ $model }}"
        id="{{ $id }}"
        class="peer w-full border border-gray-300 rounded px-3 pt-5 pb-2 text-sm appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
        >
        <option value="" hidden></option>
        @foreach($options as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <label for="{{ $id }}"
            class="absolute left-3 top-2 text-blue-500 text-xs"
    >{{ $label }}</label>
    <div class="h-7">
    @error($model)
        <span class="text-red-500 text-xs float-right pt-1">{{ $message }}</span>
    @enderror
    </div>
</div>
