<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/blocks.css">
    <link rel="icon" type="image/x-icon" href="asset/img/m-logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <title>Miyabi Travel</title>
</head>
<style>
    /* div.content-row{
    float: left;
    width: 33.33%;
    background-color: #f5f5f5;
} */
</style>
<body>
    <!-- START NAVBER -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
            <div class="container">
                <a class="navbar-brand" href="#">ROAM</a>
                <button type="button" class="navbar-toggler" data-bs-target="#navBarger" data-bs-toggle="collapse" aria-controls="navBarger" aria-expanded="false" aria-label="Toggle Navbar"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navBarger">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Destinations</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Tours</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Elements</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- END NAVBER -->

    <!-- STRAT BANNER -->   
        <div class="section-01">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="//roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-image-1.jpg" alt="">
                        <div class="img-tick">
                             <img src="https://roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-graphic-2.png" alt="" width="500px" height="40px">
                        </div>
                        <div class="text-wrapper">
                            <h1 class="title">The New Frontier</h1>
                            <button class="btn style-01">GET ROAM</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="//roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-image-2.jpg" alt="">
                        <div class="img-tick">
                             <img src="https://roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-graphic-2.png" alt="" width="500px" height="40px">
                        </div>
                        <div class="text-wrapper">
                            <h1 class="title">Spirit of Exploration</h1>
                            <button class="btn style-01">GET ROAM</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="//roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-image-3.jpg" alt="">
                        <div class="img-tick">
                             <img src="https://roam.qodeinteractive.com/wp-content/uploads/2017/08/home-4-slider-graphic-2.png" alt="" width="500px" height="40px">
                        </div>
                        <div class="text-wrapper">
                            <h1 class="title">The Mountaintops</h1>
                            <button class="btn style-01">GET ROAM</button>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    <!-- END BANNER -->

   <!-- START CONTENT -->
        <div class="content-row">
            <div class="content-col-4">
                <h3 style="font-weight: bold;">Thai Island Jungle</h3>
                <div class="section-02">
                    <p class="text-design">Filmpy Khoranis</p>
                </div>
                <p style="margin-bottom: 2rem;">Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum nulla ac tincidunt. Sed volutpat semper elit quis.</p>
                <a href="#" class="viewmore">VIEW MORE</a>
            </div>
            <div class="content-col-4 tbg-white">
                <h3 style="font-weight: bold;">Kayaking Thailand</h3>
                <div class="section-02">
                    <p class="text-design">Wasin Sealor</p>
                </div>
                <p style="margin-bottom: 2rem;">Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum nulla ac tincidunt. Sed volutpat semper elit quis.</p>
                <a href="#" class="viewmore">VIEW MORE</a>
            </div>
            <div class="content-col-4">
                <h3 style="font-weight: bold;">Niagara Falls</h3>
                <div class="section-02">
                    <p class="text-design">Filmpy</p>
                </div>
                <p style="margin-bottom: 2rem;">Lorem ipsum dolor sit amet, consectetur iscing elit. Etiam fermentum nulla ac tincidunt. Sed volutpat semper elit quis.</p>
                <a href="#" class="viewmore">VIEW MORE</a>
            </div>
        </div>
   <!-- END CONTENT -->


  
    






   




    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script>
        var nav = document.querySelector('nav');
        window.addEventListener('scroll',function(){
            if(window.pageYOffset > 100){
                // nav.classList.add('bg-dark', 'shadow');
                nav.style['background-color'] = '#000';
            }else{
                nav.style['background-color'] = '#00000000';
            }
        })
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>
</html>