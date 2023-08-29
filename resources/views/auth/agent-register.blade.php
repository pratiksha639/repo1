<!DOCTYPE html>
<html>
<!-- resources/views/auth/register-agent.blade.php -->
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/agent.css') }}">
</head>
<body>
<div class="agent-form">
<h2>Agent Registration</h2>
<form method="POST" action="{{ route('agent.register') }}">
    @csrf

    <label for="username">Username</label>
    <input id="username" type="text" name="username" value="{{ old('username') }}" required autofocus>

    <label for="email">E-Mail Address</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required>

    <label for="password">Password</label>
    <input id="password" type="password" name="password" required>

    <label for="password_confirmation">Confirm Password</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required>

    <label for="agent_code">Agent Code</label>
    <input id="agent_code" type="text" name="agent_code" value="{{ old('agent_code') }}" required>

    <label for="address">Address</label>
    <input id="address" type="text" name="address" value="{{ old('address') }}" required>

    <button type="submit">Register Agent</button>
</form>
</div>
</body>
</html>