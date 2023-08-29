<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
<title>Admin Registration</title>
</head>
<body>
    <div class="registration-form">
        <h2>Admin Registration</h2>
        <form action="{{ route('admin.register') }}" method="POST">
            @csrf

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
            @error('username')
                <span class="error">{{ $message }}</span>
            @enderror
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
            
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}" required>
            @error('full_name')
                <span class="error">{{ $message }}</span>
            @enderror
            
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required>
            @error('phone_number')
                <span class="error">{{ $message }}</span>
            @enderror
            
            <!-- Add more fields here -->

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
