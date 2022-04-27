<section class="home" id="home">
    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <!--========== ISLANDS 1 ==========-->
            <section class="islands swiper-slide">
                <img src="<?= base_url("img/borabora.jpg");?>" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Islands</h2>
                        <h1 class="islands__title">Bora Bora</h1>
                        <p class="islands__description">Small South Pacific island northwest of Tahiti in French Polynesia, surrounded by motus.</p>
                        <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div>
                </div>
            </section>

            <!--========== ISLANDS 2 ==========-->
            <section class="islands swiper-slide">
                <img src="<?= base_url("img/bali.jpg");?>" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Islands</h2>
                        <h1 class="islands__title">Bali</h1>
                        <p class="islands__description">It is an Indonesian island known and beautiful for its lush active volcanic mountains.</p>
                        <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div>
                </div>
            </section>
            
            <!--========== ISLANDS 3 ==========-->
            <section class="islands swiper-slide">
                <img src="<?= base_url("img/palawan.jpg");?>" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Islands</h2>
                        <h1 class="islands__title">Palawan</h1>
                        <p class="islands__description">Also known as La Paragua, it is the largest island in the province of Palawan.</p>
                        <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div> 
                </div>
            </section>
            
            <!--========== ISLANDS 4 ==========-->
            <section class="islands swiper-slide">
                <img src="<?= base_url("img/lombok.jpg");?>" alt="" class="islands__bg">

                <div class="islands__container bd-container">
                    <div class="islands__data">
                        <h2 class="islands__subtitle">Islands</h2>
                        <h1 class="islands__title">Lombok</h1>
                        <p class="islands__description">It is another island from Indonesia</p>
                        <a href="#" class="islands__button">Explore <i class='bx bx-right-arrow-alt islands__button-icon'></i></a>
                    </div>
                </div>
            </section>

            <!--========== ISLANDS POPUP ==========-->
            <div class="islands__popup" id="popup">
                <div>
                    <div class="islands__popup-close" id="popup-close">
                        <i class='bx bx-x'></i>
                    </div>
    
                    <iframe class="islands__popup-video" src="https://www.youtube.com/embed/JrU6bsuNU7Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    
    <div class="controls gallery-thumbs">
        <div class="controls__container swiper-wrapper">
            <img src="<?= base_url("img/borabora.jpg");?>" alt="" class="controls__img swiper-slide">
            <img src="<?= base_url("img/bali.jpg");?>" alt="" class="controls__img swiper-slide">
            <img src="<?= base_url("img/palawan.jpg");?>" alt="" class="controls__img swiper-slide">
            <img src="<?= base_url("img/lombok.jpg");?>" alt="" class="controls__img swiper-slide">
        </div>
    </div>
</section>