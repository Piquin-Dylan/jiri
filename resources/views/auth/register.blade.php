<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('register.store')}}" method="post">
            @csrf
            <x-form.title_subtitle title="Créer un compte"
                                   subtitle="Créer un compte pour accédez à votre espace pour gérer vos jiri et vos contacts"></x-form.title_subtitle>

            <x-form.input label="Nom" name="name" type="text" placeHolder="John Dupont" value="{{old('name')}}"></x-form.input>
            @error('name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <x-form.input label="Email" name="email" type="email" placeHolder="John@gmail.com" value="{{old('email')}}"></x-form.input>
            @error('email')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <x-form.input label="Mot de passe" name="password" type="password"
                          placeHolder="Saisissez votre mot de passe" value="{{old('password')}}"></x-form.input>
            @error('password')
            <p class="text-red-500">{{$message}}</p>
            @enderror

            <x-form.input label="Confirmer votre mot de passe" name="password_confirmation" type="password"
                          placeHolder="Saisissez votre mot de passe" value="{{old('password_confirmation')}})}}"></x-form.input>
            @error('password_confirmation')
            <p class="text-red-500">{{$message}}</p>
            @enderror
            <div class="grid">
                <x-button class="mb-4 mt-4" name="Créer un compte"></x-button>
                <a class="text-center" href="{{route('login')}}">Se connecter</a>
            </div>
        </form>
    </div>
</x-layout.app>
