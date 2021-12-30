<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
        <img src="{{url('images/coinlend_logo.png')}}" alt="" style="width:400px;">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            @if($msj != "")
                <div class="alert alert-warning">
                    {{$msj}} 
                   
                     <a href="{{url('login')}}" class="btn btn-info" >  Энд дарж нэвтэрнэ үү </a>
                </div>
            @endif
        </div>


    </x-jet-authentication-card>
</x-guest-layout>
