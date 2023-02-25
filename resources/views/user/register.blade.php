<x-user.layout>
    <x-slot:title>
        Register
    </x-slot:title>

@if ($message = Session::get('message'))
    <x-popup type="info" message="{{ $message }}"/>
@endif

<form method="POST" action="{{ route('verificate_register') }}">
    @csrf
    <div>
        <p class="input-control">Name</p>
        <input class="input-control" type="text" name="name">
        @error('name')
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @enderror
    </div>
    <div>
        <p class="input-control">Email</p>
        <input class="input-control" type="text" name="email">
        @error('email')
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @enderror
    </div>
    <div>
        <p class="input-control">Password</p>
        <input class="input-control" type="password" name="password">
        @error('password')
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @enderror
    </div>
    <div>
        <p></p>
        <button class="input-control" type="submit">Register</button>
    </div>
</form>
</x-user.layout>
