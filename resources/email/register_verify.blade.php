<h2>Verify Your Email Address</h2>

<div>
    Thanks for registering.
    Please follow the link below to verify your email address
    {{ URL::to('register/verify/' . $confirmation_code) }}.<br/>
</div>