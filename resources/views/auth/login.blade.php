<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('login')}}" method="post">
            @csrf
            <x-form.title_subtitle title="{{__('auth.connexion')}}"
                                   subtitle="{{__('auth.subtitle')}}"></x-form.title_subtitle>
            <x-form.input label="{{__('auth.label_email')}}" name="email" type="email"
                          placeHolder="{{__('auth.placeholder_email')}}"
                          value="{{old('email')}}"></x-form.input>
            @error('email')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <x-form.input label="{{__('auth.label_password')}}" name="password" type="password"
                          placeHolder="{{__('auth.placeholder_password')}}"></x-form.input>
            @error('password')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class=" flex justify-end mt-2 mb-4">
                <a href="{{route('password.request')}}" class="mt-2">{{__('auth.mot_de_passe_oublie')}}</a>
            </div>
            <div class="grid">
                <x-button class="mb-4" name="{{__('auth.connexion')}}"></x-button>
                <a class="text-center" href="{{route('register')}}">{{__('auth.creer_un_compte')}}</a>
            </div>
        </form>
    </div>
</x-layout.app>
