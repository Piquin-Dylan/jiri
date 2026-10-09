<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="flex justify-center items-center min-h-screen">
        <form class=" bg-white rounded-2xl w-full p-4 lg:p-8 m-4 lg:max-w-2xl" action="#" method="post">
            <h2 class="font-bold text-xl mb-2">Connexion</h2>
            <span class="text-l font-light">Accédez à votre espace pour gérer vos jiri et vos contacts</span>
            <x-form.input label="Email" name="email" type="email" placeHolder="John@gmail.com"></x-form.input>
            <x-form.input label="Mot de passe" name="password" type="password"
                          placeHolder="Saisissez votre mot de passe"></x-form.input>

            <div class=" flex justify-end">
                <a href="#" class="mt-2">Mot de passe oublié ?</a>
            </div>
            <div class="grid">
                <button
                    class=" mt-6 mb-2 bg-[#385A87] p-4 text-white rounded-[8px] cursor-pointer hover:bg-white hover:text-[#385A87] hover:border-1 hover:border-[#385A87]"
                    type="submit">
                    Se connecter
                </button>
                <a class="text-center" href="{{route('register')}}">Créer un compte</a>
            </div>
        </form>
    </div>
</div>
