<div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-floating-input type="text" id="first_name" label="First Name" model="formData.first_name" />
        <x-floating-input type="text" id="last_name" label="Last Name" model="formData.last_name" />
    </div>
    <x-floating-input type="text" id="street_address" label="Street Address" model="formData.street_address" />
    <x-floating-input type="text" id="street_address_2" label="Street Address 2" model="formData.street_address_2" />
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-floating-input type="tel" id="phone" label="Phone" model="formData.phone" mask="(999) 999-9999" />
        <x-floating-input type="text" id="city" label="City" model="formData.city" />
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <x-floating-select id="state" label="State" model="formData.state" :options="$states" />
        <x-floating-input type="text" id="zip_code" label="Zip Code" model="formData.zip_code" mask="99999" />
    </div>
</div>