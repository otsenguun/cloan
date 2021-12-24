<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ url('confirm') }}">
            @csrf

            <div>
                <x-jet-label for="number" value="Имэйл / Утасны дугаар" />
                <x-jet-input id="number" class="block mt-1 w-full" type="number" name="number"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                   Баталгаажуулах
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
