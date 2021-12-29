
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{url('images/coinlend_logo.png')}}" alt="" style="width:400px;">
        </x-slot>

    

        <form method="POST" action="{{ url('register2') }}">
            @csrf
            <div class="mt-4">
           <h4 >АНХААРУУЛГА:</h4> 
                        <ul>
                            <li> 1.     “Койнлэнд” ХХК нь харилцагчдын хэтэвчрүү нэвтрэх эрхгүй бөгөөд зөвхөн харилцагч өөрөө виртуал хөрөнгөө захиран зарцуулах эрхтэй. Иймд таны хэтэвч дэх виртуал хөрөнгө алдагдсан тохиолдолд “Койнлэнд” ХХК хариуцлага хүлээхгүй болно.
                </li>
                <li>   2.     Виртуал хөрөнгө нь ханшийн өндөр хэлбэлзэлтэй мөн цахим халдлагад өртөх магадлалтай тул хөрөнгөө алдах эрсдэлтэйг анхаарна уу.
                </li>
                <li>  3.     Ханшийн хэлбэлзлээс болж барьцаанд тавигдсан виртуал хөрөнгийн үнэ зээлийн үлдэгдлээс доош унах эрсдэлтэй тэрхүү эрсдэлийг “Койнлэнд” ХХК хариуцахгүй болно.
                </li>
                <li>  4.     Виртуал хөрөнгө нь хууль ёсны мөнгөн тэмдэгтэд хамаарахгүй  Төв банк, Засгийн газраас баталгаажаагүй, виртуал хөрөнгө нь хадгаламжийн даатгал, үнэт цаасны хөрөнгө оруулагчдыг хамгаалах аливаа даатгалд хамаардаггүй хөрөнгө юм.
            </li>
                        </ul>
                        <br>
            </div>
            <div>
                <x-jet-label for="name" value="Утасны дугаар" />
                <x-jet-input id="name" class="block mt-1 w-full" minlength="8" maxlength="8" type="text" name="mobilenumber" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="text" value="И-мейл хаяг" />
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
                <x-jet-input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" class="block mt-1 w-full" type="password" name="password" required/>
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="Нууц үг давт" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>
            <div class="mt-4">
                <x-jet-label value="Laravel Google Recaptcha" />
                {!! htmlFormSnippet() !!}
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
{!! ReCaptcha::htmlScriptTagJsApi() !!}