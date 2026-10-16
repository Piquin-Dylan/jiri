<x-layout.app>
    <div class="flex justify-center items-center min-h-screen">
        <form class="form" action="{{route('password.email')}}" method="post">
            @csrf
            <x-form.title_subtitle title="Modifier mon mot de passe"
                                   subtitle="Entrez votre adresse mail pour pouvoir changer votre mot de passe"></x-form.title_subtitle>
            <x-form.input label="Email" name="email" type="email" placeHolder="John@gmail.com"></x-form.input>
            <div class="grid">
                <x-button name="Envoyer le mail de rénitialisation"></x-button>

                @session('status')
                <p class="text-green-500">{{session('status')}}</p>
                @endsession
            </div>

        </form>
    </div>
</x-layout.app>
