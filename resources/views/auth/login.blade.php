<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <!-- <x-jet-authentication-card-logo /> -->
            <img src="{{url('images/coinlend_logo.png')}}" alt="" style="width:400px;">
        </x-slot>

  


        <form method="POST" action="{{ url('login2') }}">
         
            @if(isset($exec))
            <i>{{$exec}}</i>
            @endif
            <div>
                <x-jet-label for="email" value="Имэйл / Утасны дугаар" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="username" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="Нууц үг" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Намайг сана</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
               
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                       Нууц үг мартсан
                    </a>
                
                <x-jet-button class="ml-4">
                   <a href="{{url('register')}}"> Бүртгүүлэх </a>
                </x-jet-button>

                <x-jet-button class="ml-4">
                   Нэвтрэх
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
