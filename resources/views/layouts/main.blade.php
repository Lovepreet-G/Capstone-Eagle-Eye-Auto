<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eagle Eye Auto</title>
   
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS links -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    {{-- footawsome --}}
    {{-- <script src="https://kit.fontawesome.com/624437a27c.js" crossorigin="anonymous"></script> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}


</head>
<body>
    
    <Header>
        <div id="top">
            <div id="top-left">                
                    <img class="small-icon" src="{{ asset('images/phone-call.png') }}" alt="call logo" srcset="">&nbsp; (604) 897-6495&nbsp;
                    
                    <img class="small-icon" src="{{ asset('images/location.png') }}" alt="call logo" srcset="">&nbsp; #103 13483 78 Ave Surrey, BC V3W 0A8, Canada 
            </div>
            <div id="top-right">
                We Opened Daily 8:00am-9:00pm
            </div>
        </div>
        <nav>
            <ul class="horizontal-list">
                <li id="brand-name"><img src="{{ asset('images/logo.jpg') }}" alt="Logo"> </li>
                <li><a href="#">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#reviews">Review</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
    </Header>
    <!-- Main Content -->
    <div class="content main">
        @yield('content')
    </div>

    <footer>
        <div id="footer-logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
        </div>
        <div id="contact">
            <div id="contact-info">
                <ul>
                    <li>
                        {{-- <i class="fa-phone"></i> --}}
                        <img class="small-icon" src="{{ asset('images/phone-call.png') }}" alt="call logo" srcset="">&nbsp; Call Us 24/7 <span class="gray display-block">(604) 897-6495</span>
                    </li>
                    <li>
                        {{-- <i class="fa-solid fa-mobile"></i> --}}
                        <img class="small-icon" src="{{ asset('images/location.png') }}" alt="call logo" srcset="">&nbsp;We Are Here <span class="gray display-block">#103 13483 78 Ave Surrey, BC V3W 0A8, Canada</span> 
                    </li>
                </ul>
            </div>
            <div id="contact-working-hours">
                Open Hours
                <ul class="gray">
                    <li>Mon-Fri :- 8:00am-9:00pm </li>
                    <li>Saturday :- 9:00am-6:00pm</li>
                    <li>Sunday :- 9:00am-5:00pm</li>
                </ul>
            </div>
        </div>

    </footer>

    <!-- JavaScript links -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://kit.fontawesome.com/624437a27c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
