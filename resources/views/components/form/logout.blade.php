<form action="{{route('logout')}}" method="post">
    @csrf
    <x-button type="submit" name="Déconnexion"></x-button>
</form>
