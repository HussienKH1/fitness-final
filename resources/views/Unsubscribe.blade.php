<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" >
    <title>K Fitness</title>
</head>
<body>
    <header class="header">
        <a href="{{ route ('home')}}" class="logo">
            <img src="./Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="{{ route ('home')}}">Home</a>
                <a href="/home#classes">Classes</a>
                <a href="/home#trainers">Trainers</a>
                <a href="/home#nutrition">Nutrition</a>
                <a href="{{ route ('plan')}}">Plan</a> 
                @foreach($users as $user)
                    @if($user->active === 1)
                        <a href="#">Unsubscribe</a>
                    @endif
                @endforeach
                <span>|</span>  
                <a href="#" onclick="event.preventDefault(); logout()"><ion-icon name="log-out-outline"></ion-icon></i></a>   
            </div>
        </nav>
        <script>
            function logout() {
            fetch("{{ route('logout') }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            }).then(response => {
                if (response.redirected) {
                    window.location.href = response.url;
                }
            });
            }
        </script>
     
    </header>

    <section class="plan" id="plan">
        <h1 class="heading">Unsubscribe</h1> 
        <div class="box-container">
            <div class="box">
                <h3 class="title">Do you <br> want to Unsubscribe?</h3>
                <ul>
                    <li><i class="fas fa-times"></i>Weightlifting</li>
                    <li><i class="fas fa-times"></i>Protien Powder</li>
                    <li><i class="fas fa-times"></i>Creatine</li>
                    <li><i class="fas fa-times"></i>cardio</li>     
                    <li><i class="fas fa-times"></i>boxing</li>         
                </ul>
                <a href="#"><button id="open-popup" class="btn">Unsubscribe</button></a>
            </div> 
            <div class="popup" id="popup">
                <form action="{{route('unsubscribe')}}" class="popup-content" method="POST">
                    @csrf
                    <p>Are You Sure To Unsubscribe?</p>
                    <a href=""><button type="button" class="btn">No</button></a>
                    <a href="#"><button type="submit" class="btn">Yes</button></a>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.getElementById('open-popup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });
    </script>
</body>
</html>

<style>
    .plan .box-container .box ul li i{
        color: red;
    }
</style>
