<x-filament-panels::page>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($this->getViewData()['plans'] as $plan)
            <x-filament::section>
                <x-slot name="heading">
                    {{ $plan->name }}
                </x-slot>
                
                <div class="text-3xl font-bold mb-4">
                    ${{ $plan->price }} <span class="text-sm font-normal text-gray-500">/ month</span>
                </div>
                
                <p class="text-gray-600 mb-6">
                    {{ $plan->description }}
                </p>

                @if($this->getViewData()['currentSubscription'] && $this->getViewData()['currentSubscription']->stripe_price === $plan->stripe_plan)
                    <x-filament::button disabled color="success" class="w-full">
                        Current Plan
                    </x-filament::button>
                @else
                    <form action="{{ route('checkout', $plan->stripe_plan) }}" method="POST">
                        @csrf
                        <x-filament::button type="submit" class="w-full">
                            Subscribe Now
                        </x-filament::button>
                    </form>
                @endif
            </x-filament::section>
        @endforeach
    </div>
</x-filament-panels::page>
