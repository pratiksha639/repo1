<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
<header>
    <h1>Welcome to our Registration Page</h1>
</header>
<div class="links">
    <a href="{{ route('admin.register') }}" class="admin">Register as Admin</a>
    <a href="{{ route('agent.register') }}" class="agent">Register as Agent</a>
</div>
</body>
</html>