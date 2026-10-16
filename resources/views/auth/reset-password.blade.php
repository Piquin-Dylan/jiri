<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('password.update')}}" method="post">
            @csrf
            <input type="hidden" name="token" value="{{request()->route('token')}}">
            <x-form.title_subtitle title="Modifier mon mot de passe"
                                   subtitle="Entrez votre adresse mail et modifier votre mot de passe"></x-form.title_subtitle>

            <x-form.input label="Email" name="email" type="email" placeHolder="John@gmail.com"></x-form.input>
            <x-form.input label="Mot de passe" name="password" type="password"
                          placeHolder="Saisissez votre mot de passe"></x-form.input>

            <x-form.input label="Confirmer votre mot de passe" name="password_confirmation" type="password"
                          placeHolder="Saisissez votre mot de passe"></x-form.input>
            <div class="grid">
                <x-button name="Rénitialiser mon mot de passe"></x-button>
            </div>

        </form>
    </div>
</x-layout.app>
