<!DOCTYPE html>
<html lang="en">
    <body>
        <p>Dear <strong>{{ $user->name }}</strong></p>
            <p>Your account has been created, please activate your account by clicking this link</p>
            <p>
                <a href="{{ route('verify', ['token' => $user->email_verification_token]) }}">
                Go to the page.
                </a>
            </p>
        <p>Thanks</p>
    </body>
</html>
