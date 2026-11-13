<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('register.store')}}" method="post">
            @csrf
            <x-form.title_subtitle title="{{__('auth.creer_un_compte')}}"
                                   subtitle="{{__('auth.subtitle_register')}}"></x-form.title_subtitle>

            <x-form.input label="{{__('auth.label_name')}}" name="name" type="text"
                          placeHolder="{{__('auth.placeholder_name')}}"
                          value="{{old('name')}}"></x-form.input>
            @error('name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
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

            <x-form.input label="{{__('auth.label_password_confirmation')}}" name="password_confirmation" type="password"
                          placeHolder="{{__('auth.placeholder_password')}}"></x-form.input>
            @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class="grid">
                <x-button class="mb-4 mt-4" name="{{__('auth.creer_un_compte')}}"></x-button>
                <a class="text-center" href="{{route('login')}}">{{__('auth.connexion')}}</a>
            </div>
        </form>
    </div>
</x-layout.app>
