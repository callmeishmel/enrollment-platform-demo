<div>
    <x-floating-select id="program_id" label="Program" model="formData.program_id" :options="$programs" />
    <x-floating-input type="date" id="preferred_start_date" label="Start Date" model="formData.preferred_start_date" />
</div>