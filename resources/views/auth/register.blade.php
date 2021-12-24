<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

    

        <form method="POST" action="{{ url('register2') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="Утасны дугаар" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="mobilenumber" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="text" value="Нэвтрэх нэр" />
                <x-jet-input id="text" class="block mt-1 w-full" type="text" name="username" :value="old('text')" required />
            </div>

            <div>
                <x-jet-label for="name" value="Овог" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('name')" required />
            </div>

            <div>
                <x-jet-label for="name" value="Нэр" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="lastname" :value="old('name')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Нууц үг" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="Нууц үг давт" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Хэрэв бүртгэлтэй бол
                </a>

                <x-jet-button class="ml-4">
                    Бүртгүүлэх
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
