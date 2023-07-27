<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <title>K Fitness</title>
    <style>
        body{background-image:url({{ asset ('Images/young-healthy-man-athlete-doing-exercise-with-ropes-gym-single-male-model-practicing-hard-training-his-upper-body-concept-healthy-lifestyle-sport-fitness-bodybuilding-wellbeing.jpg')}});}
        body{background-size: cover;
        background-repeat: no-repeat;} 
    </style>
</head>
<body>
<header class="header">
        <a href="/index" class="logo">
            <img src="{{ asset('Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png')}}" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="/index">Home</a>
                <a href="/index#classes">Classes</a>
                <a href="/index#trainers">Trainers</a>
                <a href="/index#nutrition">Nutrition</a>
                <a href="{{route ('plan')}}">Plan</a> 
                <span>|</span>
                <a href="{{route ('auth.login')}}"><i class="icon"><ion-icon name="person-outline"></ion-icon></i></a>
            </div>
        </nav>
    </header>
    <style>
        .header{background-color: transparent;}
    </style>
    <div class="lform">
        <div class="register-form">
            <h2>Registration</h2>
            <form action="{{ route ('signup.store') }}" method="POST">
             @csrf   
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle"></ion-icon></span>
                    <input type="text" id="name" name="name"  required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="email" name="email" required >
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="key"></ion-icon></span>
                    <input type="password" id="password" name="password" required >
                    <label>Password</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="key"></ion-icon></span>
                    <input type="password" id="password_confirmation" name="password_confirmation" required >
                    <label>Confirm your Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?<a href="{{ route('auth.login') }}" class="login-link">Click Here</a></p>
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>