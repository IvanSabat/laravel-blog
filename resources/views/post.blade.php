
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Page</title>

{{--    <link rel="stylesheet" href="css/style.css">--}}

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        *{
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            scroll-padding-top: 2rem;
            box-sizing: border-box;
        }

        :root{
            --container-color: #1a1e21;
            --second-color: #fd8f44;
            --text-color: #172317;
            --bg-color: #fff;
        }

        ::selection{
            color: var(--bg-color);
            background: var(--second-color);
        }

        a{
            text-decoration: none;
        }

        li{
            list-style: none;
        }

        img{
            width: 100%;
        }

        section{
            padding: 3rem 0 2rem;
        }

        .container{
            max-width: 1068px;
            margin: auto;
            width: 100%;
        }

        /*===== HEADER ===== */
        header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 200;
        }

        header.shadow{
            background: var(--bg-color);
            box-shadow: 0 1px 4px hsl(0 4% 14% / 10%);
            transition: 0.4s;
        }

        header.shadow .logo{
            color: var(--text-color);
        }

        .nav{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 0;
        }

        .logo{
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--bg-color);
        }

        .logo span{
            color: var(--second-color);
        }

        .login{
            padding: 8px 14px;
            text-transform: uppercase;
            font-weight: 500;
            border-radius: 4px;
            background: var(--second-color);
            color: var(--bg-color);
        }

        .login:hover{
            background: hsl(24, 98%, 58%);
            transition: 0.3s;
        }

        /*===== HOME ===== */
        .home{
            width: 100%;
            min-height: 440px;
            background: var(--container-color);
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .home-text{
            color: var(--bg-color);
            text-align: center;
        }

        .home-title{
            font-size: 3.5rem;
        }

        .home-subtitle{
            font-size: 1rem;
            font-weight: 400;
        }

        /*===== POST FILTER ===== */
        .post-filter{
            display: flex;
            justify-content: center;
            align-items: center;
            column-gap: 1.5rem;
            margin-top: 2rem !important;
        }

        .filter-item{
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
        }

        .active-filter{
            background: var(--second-color);
            color: var(--bg-color);
            padding: 4px 10px;
            border-radius: 4px;
        }

        /*===== POSTS ===== */
        .post{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, auto));
            justify-content: center;
            gap: 1.5rem;
        }

        .post-box{
            background: var(--bg-color);
            box-shadow: 0 4px 14px hsl(355deg 25% 15% / 10%);
            padding: 15px;
            border-radius: 0.5rem;
        }

        .post-img{
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
            border-radius: 0.5rem;
        }

        .category{
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            color: var(--second-color);
        }

        .post-title{
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--text-color);
            display: -webkit-box;
            --webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .post-date{
            display: flex;
            font-size: 0.875rem;
            text-transform: uppercase;
            font-weight: 400;
            margin-top: 4px;
        }

        .post-description{
            font-size: 0.9rem;
            line-height: 1.5rem;
            margin: 5px 0 10px;
            display: -webkit-box;
            --webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .profile{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-img{
            width: 35px;
            height: 35px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
            border: 2px solid var(--second-color);
        }

        .profile-name{
            font-size: 0.82rem;
            font-weight: 500;
        }

        /*===== FOOTER ===== */
        .footer{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px;
        }

        .footer p{
            font-size: 0.938rem;
        }

        .social{
            display: flex;
            align-items: center;
            column-gap: 1rem;
        }

        .social .bx{
            font-size: 1.4rem;
            color: var(--text-color);
        }

        .social .bx:hover{
            color: var(--second-color);
            transition: 0.3s all linear;
        }

        /*===== POST CONTENT ===== */
        .post-header{
            width: 100%;
            height: 500px;
            background: var(--container-color);
        }

        .post-container{
            max-width: 800px;
            margin: auto;
            width: 100%;
        }

        .header-content{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 4rem !important;
        }

        .back-home{
            color: var(--second-color);
            font-size: 0.9rem;
        }

        .header-title{
            width: 90%;
            font-size: 2.6rem;
            color: var(--bg-color);
            text-align: center;
            margin-bottom: 1rem;
        }

        .header-img{
            width: 100%;
            height: 420px;
            object-fit: cover;
            object-position: center;
        }

        .post-content{
            margin-top: 10rem !important;
        }

        .sub-heading{
            font-size: 1.2rem;
        }

        .post-text{
            font-size: 1rem;
            line-height: 1.7rem;
            margin: 1rem 0;
            text-align: justify;
        }

        /*===== SHARE ===== */
        .share{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .share-title{
            font-size: 1.1rem;
        }

        /*===== RESPONSIVE ===== */
        @media (max-width: 1060px) {
            .container{
                margin: 0 auto;
                width: 95%;
            }

            .home-text{
                width: 100%;
            }
        }

        @media (max-width: 800px) {
            .nav{
                padding: 14px 0;
            }

            .post-container{
                margin: 0 auto;
                width: 95%;
            }
        }

        @media (max-width: 768px) {
            .nav{
                padding: 10px 0;
            }

            section{
                padding: 2rem 0;
            }

            .header-content{
                margin-top: 3rem !important;
            }

            .home{
                min-height: 380px;
            }

            .home-title{
                font-size: 3rem;
            }

            .header-title{
                font-size: 2rem;
            }

            .header-img{
                height: 370px;
            }

            .post-header{
                height: 435px;
            }

            .post-content{
                margin-top: 9rem !important;
            }
        }

        @media (max-width: 570px){
            .post-header{
                height: 390px;
            }

            .header-title{
                width: 100%;
            }

            .header-img{
                height: 340px;
            }

            .footer{
                flex-direction: column;
                row-gap: 1rem;
                padding: 20px 0;
                text-align: center;
            }
        }

        @media (max-width: 396px){
            .home-title{
                font-size: 2rem;
            }

            .home-subtitle{
                font-size: 0.9rem;
            }

            .home{
                min-height: 300px;
            }

            .post-box{
                padding: 10px;
            }

            .header-title{
                font-size: 1.4rem;
            }

            .header-img{
                height: 240px;
            }

            .post-header{
                height: 335px;
            }

            .post-content{
                margin-top: 5rem !important;
            }

            .post-text{
                font-size: 0.875rem;
                line-height: 1.5rem;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="nav container">

        <a href="{{ url('/blog') }}" class="logo">Ivan's <span>blog</span></a>

        <a href="#" class="login">Login</a>
    </div>

</header>

<section class="post-header">
    <div class="header-content post-container">
        <a href="{{ url('/blog') }}" class="back-home">Back To Home</a>

        <h1 class="header-title">How To Create Best UX Design With Adobe Xd</h1>

        <img src="{{ asset('images/post-1.jpg') }}" alt="" class="header-img">
    </div>
</section>

<section class="post-content post-container">
    <h2 class="sub-heading">Create Best UX Design</h2>
    <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas itaque id suscipit repellat ex labore! Nesciunt cumque doloribus porro voluptate fugiat officiis et, at fugit repellat. Incidunt fugiat cumque pariatur consequuntur, maiores nam exercitationem perferendis reprehenderit recusandae, quis ut inventore modi voluptatibus ad, laudantium voluptate.</p>
    <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas itaque id suscipit repellat ex labore! Nesciunt cumque doloribus porro voluptate fugiat officiis et, at fugit repellat. Incidunt fugiat cumque pariatur consequuntur, maiores nam exercitationem perferendis reprehenderit recusandae, quis ut inventore modi voluptatibus ad, laudantium voluptate.</p>
    <h2 class="sub-heading">Create Best UX Design</h2>
    <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas itaque id suscipit repellat ex labore! Nesciunt cumque doloribus porro voluptate fugiat officiis et, at fugit repellat. Incidunt fugiat cumque pariatur consequuntur, maiores nam exercitationem perferendis reprehenderit recusandae, quis ut inventore modi voluptatibus ad, laudantium voluptate.</p>
    <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas itaque id suscipit repellat ex labore! Nesciunt cumque doloribus porro voluptate fugiat officiis et, at fugit repellat. Incidunt fugiat cumque pariatur consequuntur, maiores nam exercitationem perferendis reprehenderit recusandae, quis ut inventore modi voluptatibus ad, laudantium voluptate.</p>
    <p class="post-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas itaque id suscipit repellat ex labore! Nesciunt cumque doloribus porro voluptate fugiat officiis et, at fugit repellat. Incidunt fugiat cumque pariatur consequuntur, maiores nam exercitationem perferendis reprehenderit recusandae, quis ut inventore modi voluptatibus ad, laudantium voluptate.</p>
</section>

<div class="share post-container">
    <span class="share-title">Share this article</span>
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
    </div>
</div>

<div class="footer container">
    <p>&#169; Ivan Sabat All Right Reserved</p>
    <div class="social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous">
</script>

{{--<script src="js/main.js"></script>--}}
<script>
    // Filter js
    $(document).ready(function(){
        $('.filter-item').click(function(){
            const value = $(this).attr('data-filter')
            if(value === 'all'){
                $('.post-box').show('1000')
            }
            else{
                $('.post-box').not('.' + value).hide('1000')
                $('.post-box').filter('.' + value).show('1000')
            }
        });
        // Add active to btn
        $('.filter-item').click(function(){
            $(this).addClass("active-filter").siblings().removeClass("active-filter");
        });
    });

    // Header BackGround Change On Scroll
    let header = document.querySelector("header");

    window.addEventListener("scroll", () =>{
        header.classList.toggle("shadow", window.scrollY > 0);
    });
</script>
</body>
</html>
