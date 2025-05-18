<div>
    <x-floating-select id="payment_plan_id" label="Payment Plan" model="formData.payment_plan_id" :options="$paymentPlanOptions" />
    @if ($formData['payment_plan_id'] && isset($paymentPlans[$formData['payment_plan_id']]))
        @php
            $plan = $paymentPlans[$formData['payment_plan_id']];
        @endphp

        <div class="p-4 border border-gray-300 rounded bg-gray-50">
            <h3 class="text-md font-semibold mb-2 text-blue-600">Selected Plan Details</h3>
            <ul class="text-sm space-y-1">
                <li><strong>Monthly Payment:</strong> ${{ number_format($plan['monthly_payment'], 2) }}</li>
                <li><strong>Duration:</strong> {{ $plan['duration_months'] }} months</li>
                <li><strong>Interest Rate:</strong> {{ $plan['interest_rate'] }}%</li>
                <li class="text-gray-600 italic">{{ $plan['description'] }}</li>
            </ul>
        </div>
    @endif
</div>