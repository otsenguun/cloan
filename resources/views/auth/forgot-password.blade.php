<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{url('images/coinlend_logo.png')}}" alt="" style="width:400px;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
           Та нууц үгээ мартсан бол өөрийн бүртгэлтэй email-ээр сэргээх боломжтой
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

       

        <form method="POST" action="#">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                   Нууц үг сэргээх холбоос авах
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
