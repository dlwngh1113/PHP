<style>
    .tb{
        min-width: 100%;
        font-size: 150%;
    }
    .tr-left{
        width: 30%;
        font-size: inherit;
        text-align: center;
        background-color: violet;
    }
    .tr-right{
        width: 70%;
        font-size: inherit;
        background-color: yellowgreen;
    }
</style>

<x-user.layout>
    <x-slot:title>
        Profile
    </x-slot:title>

@if ($message = Session::get('message'))
    <x-popup type="info" message="{{ $message }}"/>
@endif

<table class="tb">
    <tr>
        <td class="tr-left">User Name</td>
        <td class="tr-right">{{ $user->name }}</td>
    </tr>
    <tr>
        <td class="tr-left">User Email</td>
        <td class="tr-right">{{ $user->email }}</td>
    </tr>
</table>
</x-user.layout>
