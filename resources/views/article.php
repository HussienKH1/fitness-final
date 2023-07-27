<!DOCTYPE html>
<html>
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
    < <div class="article">
        <h1 class="article-title">Welcome to Our Blog</h1>
        <img src=" " alt="Article Image" class="article-image">
        <p class="article-content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget sem eu sapien sodales varius.
            Sed nec metus non nisi hendrerit consectetur. Integer fringilla, purus vitae facilisis accumsan,
            lectus tellus eleifend massa, ut laoreet quam nisi vitae nunc. Nullam convallis tristique nisi,
            vel scelerisque purus gravida ut. Nam ut enim sit amet est mollis facilisis non ac lacus.
            Quisque dictum odio libero, sit amet dignissim quam sodales in. Ut vel ex vel dui scelerisque
            feugiat ut quis lectus. Nunc fermentum euismod interdum. Integer ut velit quis mi consequat euismod.
            Maecenas faucibus eget eros vitae dictum. Aliquam luctus sit amet turpis sit amet tincidunt.
            Suspendisse venenatis vel elit id pellentesque. Nulla facilisi.
        </p>
        <p class="article-date">Published on July 28, 2023</p>
    </div>

    <script>
        const articleDateElement = document.getElementById('article-date');


        const currentDate = new Date();


        const formattedDate = currentDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });


        articleDateElement.textContent = `Published on ${formattedDate}`;
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</body>
</html>
