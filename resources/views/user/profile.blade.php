<style>
    .tb{
        min-width: 100%;
        font-size: 150%;
    }
    .tr-left{
        width: 30%;
        min-height: 20%;
        font-size: inherit;
        text-align: center;
        background-color: violet;
    }
    .tr-right{
        width: 70%;
        min-height: 20%;
        font-size: inherit;
        background-color: yellowgreen;
    }
</style>

<x-user.layout>
    <x-slot:title>
        Profile
    </x-slot:title>

@if ($message = Session::get('message'))
    <x-popup type="'info'" message="{{ $message }}"/>
@endif

<table class="tb">
    <tr>
        <td class="tr-left">User Name</td>
        <td class="tr-right">{{ $user->name }}</td>
    </tr>
    <tr>
        <td class="tr-left">Email</td>
        <td class="tr-right">
            <p>
                {{ $user->email }}
                @if ($user->email_verified_at)
                    <img src="{{ asset('image/verified.png') }}" alt="email verified img" width="20px">
                @else
                    <img src="{{ asset('image/nonVerified.png') }}" alt="email non verified img" width="20px">
                    <input type="submit" value="Send Email">
                @endif
            </p>
        </td>
    </tr>
    <tr>
    </tr>
</table>
</x-user.layout>
