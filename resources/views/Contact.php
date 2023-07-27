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
        <a href="/home" class="logo">
            <img src="./Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="/home">Home</a>
                <a href="/home#classes">Classes</a>
                <a href="/home#trainers">Trainers</a>
                <a href="/home#nutrition">Nutrition</a>
                <a href="{{ route ('plan')}}">Plan</a> 
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

        <section class="Contact" id="Contact">
                <h1 class="heading">Contact Us</h1>
                <form action="">
                    <div class="textbox">
                        <input type="text" placeholder="Full Name">
                        <input type="email" placeholder="Email">
                    </div>

                    <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                    <button class="btn">Send</button>
                </form>
            </section>

            <section class="about" id="about">
                
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>