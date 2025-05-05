<div>
    <div class="mb-5 border-b-2 border-gray-200">
        <input type="email" id="email" wire:model="formData.email" class="form-input" placeholder="Email"/>
        <input type="password" id="password" wire:model="formData.password" class="form-input" placeholder="Password"/>
        <input type="password" id="password_confirmation" wire:model="formData.password_confirmation" class="form-input" placeholder="Confirm Password"/>
    </div>
    <div>
        <input type="text" id="name" wire:model="formData.name" class="form-input" placeholder="Name" />
        <input type="text" id="phone" wire:model="formData.phone" class="form-input" placeholder="Phone"/>
        <input type="text" id="city" wire:model="formData.city" class="form-input" placeholder="City"/>
        <input type="text" id="state" wire:model="formData.state" class="form-input" placeholder="State"/>
        <input type="text" id="zip_code" wire:model="formData.zip_code" class="form-input" placeholder="Zip Code"/>
    </div>
</div>