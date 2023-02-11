<!DOCTYPE html>
<html lang="en">
    <body>
        <p>Dear {{ $user->name }}</p>
            <p>Your account has been created, please activate your account by clicking this link</p>
            <p>
                <a href="{{ route('verify', ['token' => $user->password]) }}">
                {{ $user->name }}
                </a>
            </p>
        <p>Thanks</p>
    </body>
</html>
