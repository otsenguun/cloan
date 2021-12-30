<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{url('images/coinlend_logo.png')}}" alt="" style="width:400px;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
           Шинээр нууц үгээ оруулна уу
        </div>

        @if (isset($msj))
            <div class="mb-4 font-medium text-sm text-red-600">
                {{ $msj }}
            </div>
        @endif

       

        <form method="POST" action="{{url('UpdateForgotPassword')}}">
            @csrf
            <input type="hidden" name="token" value="{{$token}}">
            <div class="block">
                <x-jet-label for="email" value="Нууц үг" />
                <x-jet-input id="email" class="block mt-1 w-full" type="password" name="password_new" :value="old('email')" required autofocus />
            </div>
            <div class="block">
                <x-jet-label for="email" value="Нууц үг давт" />
                <x-jet-input id="email" class="block mt-1 w-full" type="password" name="password_new_repeat" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                   Хадгалах
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
