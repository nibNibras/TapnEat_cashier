<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tap n Eat - Login</title>

    <link rel="shortcut icon" href="/assets/images/main-logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body style="background: #FEF4E8; font-family: 'Poppins', sans-serif; height: 100vh; margin: 0;">
    <div style="display: flex; height: 100vh;">
        <div style="display:flex; justify-content: center; align-items: center; flex-direction: column; width: 50%;">
            @if (session('failed'))
                <div class="alert alert-danger"> {{ session('failed') }} </div>
            @endif

            <h1 style="font-size: 3rem; color: #023820; margin: 0; padding: 0 0 1.5rem 0; font-weight: 700; font-family: 'Poppins', sans-serif;">
                Login
            </h1>

            <form action="/login" method="POST" style="gap: 1.5rem; display: flex; flex-direction: column;">
                @csrf
                @error('username')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                {{-- <label for="username">Username</label> --}}
                <input class="has-validation" type="text" name="username" id="username" placeholder="Username" required style="padding: 0.5rem 1rem; background: #FEF4E8; border: 2px solid #023820; border-radius: 1.2rem; font-size: 1.2rem; width: 20rem; font-family: 'Poppins', sans-serif; font-weight: 600; color: #F03E24;">
                {{-- <br> --}}
                {{-- <label for="password">Password</label> --}}

                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
                <input class="has-validation" type="password" name="password" id="password" placeholder="Password" required style="padding: 0.5rem 1rem; background: #FEF4E8; border: 2px solid #023820; border-radius: 1.2rem; font-size: 1.2rem; width: 20rem; font-family: 'Poppins', sans-serif; font-weight: 600; color: #F03E24;">
                {{-- <br> --}}
                <button type="submit" style="background: #023820; color: #FEF4E8; padding: 0.5rem; border-radius: 0.9rem; font-size: 1.2rem; font-weight: 600; font-family: 'Poppins', sans-serif; border: none;">LOGIN</button>
            </form>
        </div>
        <div style="position: fixed; width: 100vh; height: 100vh; left: 760px; top: 0px; background: #023820; border-radius: 0px 200px 200px 0px; transform: matrix(-1, 0, 0, 1, 0, 0); display: flex; justify-content: center; align-items: center;">
            <img src="/assets/images/main-logo.png" style="z-index: 999; transform: matrix(-1, 0, 0, 1, 0, 0); height: 300px;">
        </div>
    </div>
</body>
</html>