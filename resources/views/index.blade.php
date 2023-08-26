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
        <a href="/index" class="logo">
            <img src="./Images/WhatsApp Image 2023-04-30 at 10.12.24 PM.png" width="15%" height="15%" alt=""></a>
        <nav>
            <div class="navbar">
                <a href="#home">Home</a>
                <a href="#classes">Classes</a>
                <a href="#trainers">Trainers</a>
                <a href="#nutrition">Nutrition</a>
                <a href="{{ route ('plan')}}">Plan</a>   
                <span>|</span>  
                <a href="{{route ('auth.login')}}"><i class="icon"><ion-icon name="person-outline"></ion-icon></i></a>   
            </div>
        </nav>
     
    </header>

    <section class="home">
        <div class ="max-width">
            <div class="hom-content">
                <h3>help for ideal <br> body fitness </h3>
                <p> Choose different workouts with different trainers,
                    healthy recipes, for a whole body and mind
                    approach to feeling great.</p>
                <a href="{{ route ('plan')}}" class="btn">Get started</a>
            </div>
            <div class="home-image">
               <img src="./Images/handsome-man-is-engaged-gym.png" width="100%" height="90%" alt="">
            </div>
        </div>
    </section>

    <section class="classes" id="classes">
        <h1 class="heading">Our classes</h1>
        <div class="box-container">
            <div class="box">
                <img src="./Images/female-legs-running-track-gym.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Treadmill</h3>
                    <p>treadmill classes are 45-minute workouts, divided into two training styles: running and strength training. Half the class is on the treadmills, where you'll be mixing up running, sprinting and walking. The other half of the class is all about strength and conditioning training using weights and bodyweight exercises.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="./Images/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Weight Lifting</h3>
                    <p>Weightlifting is a weight class sport so athletes strive to balance maximum power and strength development with the maintenance of an ideal body composition. Weightlifting as a fitness protocol produces athletic, strong and powerful bodies capable of incredible athletic feats.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>

        <div class="box-container">
            <div class="box">
                <img src="./Images/two-professional-boxer-boxing-black-smoky.jpg" width="50%" height="50%" alt="">
                <div class="info">
                    <h3>Boxing</h3>
                    <p>Boxing classes are 60 minutes long and are usually structured in three “rounds” that include an intense cardio warmup, boxing with intervals of bodyweight exercises, and of course, core work.
                        All three rounds are extremely challenging . In fact, a boxing class can burn anywhere from 500 to 1,000 calories per hour.</p>
                    <a href="#trainers"><button class="btn">Start</button></a>
                </div>
            </div>

        </div>
    </section>


    <section class="trainers" id="trainers">
       <div class="container">
       <h1 class="heading">Trainers</h1>
        <div class="card-wrapper">
            @foreach($trainers as $trainer)
            <div class="card">
                @if($trainer['job'] === 'Weighlifting')
                <img src="./Images/low-angle-view-unrecognizable-muscular-build-man-preparing-lifting-barbell-health-club.jpg" alt="card background" class="card-img">
                @elseif($trainer['job'] === 'Boxing')
                <img src="./Images/two-professional-boxer-boxing-black-smoky.jpg" alt="card background" class="card-img">
                @else
                <img src="./Images/female-legs-running-track-gym.jpg" alt="card background" class="card-img">
                @endif
                <img src="{{asset($trainer->picture)}}" alt="{{$trainer -> name}}" class="profile-img">
                <h1>{{$trainer -> name}}</h1>
                <p class="trainer-job">{{$trainer -> job}}</p>
                <p class="about">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Aliquam, perferendis magni, corrupti doloremque laboriosam
                    reiciendis molestias doloribus consectetur facilis sit odio 
                    blanditiis ipsum adipisci ab et. Placeat tenetur debitis iure.
                </p>
                <a href="{{ route ('contact', ['trainerId' => $trainer->id])}}" class="btn">Contact</a>
                <ul class="social-media">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            @endforeach
        </div>
        </div>
    </section>

    <section class="nutrition" id="nutrition">
        <h1 class="heading">Nutrition</h1>
        <div class="box-container">
            @foreach($articles as $article)
            <div class="box">
                <img src="{{asset($article->image)}}" alt="" width="25%" height="25%">
                <div class="info">
                    <h3>{{$article->title}}</h3>
                    <a href="{{route('article' , ['id' => $article->id])}}">Read this article</a>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>