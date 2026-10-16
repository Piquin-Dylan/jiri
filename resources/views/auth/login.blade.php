<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('login')}}" method="post">
            @csrf
            <x-form.title_subtitle title="Connexion"
                                   subtitle="Accédez à votre espace pour gérer vos jiri et vos contacts"></x-form.title_subtitle>
            <x-form.input label="Email" name="email" type="email" placeHolder="John@gmail.com"></x-form.input>
            <x-form.input label="Mot de passe" name="password" type="password"
                          placeHolder="Saisissez votre mot de passe"></x-form.input>

            <div class=" flex justify-end">
                <a href="#" class="mt-2">Mot de passe oublié ?</a>
            </div>
            <div class="grid">
                <x-button name="Se connecter"></x-button>
                <a class="text-center" href="{{route('register')}}">Créer un compte</a>
            </div>
        </form>
    </div>
</x-layout.app>
