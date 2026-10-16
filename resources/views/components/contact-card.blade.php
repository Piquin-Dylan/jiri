@props([

     'name',
     'email',

])
<div class="flex justify-between p-4">

    <div class="flex gap-3 mb-6">
        <span class="m-auto">JD</span>


        <div class="grid gap-1">
            <span>{{$name}}</span>
            <span>{{$email}}</span>
        </div>
    </div>
    <div class="">
        <span class="mr-4">Supprimer</span>
        <span>Voir</span>

    </div>


</div>
