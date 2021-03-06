<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet">
</head>


<body>

    <div class="wrapper-home">

        <header class="header-article">
            <nav class="nav-article nav-article-home">

                <div class="nav-article_wrapper-logo">
                    <a href="/" class="nav-article_logo">RUNO</a>
                </div>

                <ul class="nav-article_wrapper-list">
                    <li class="nav-article_wrapper-item">
                        <a href="#" class="nav-article_item">Home</a>
                    </li>
                    <li class="nav-article_wrapper-item">
                        <a href="./news" class="nav-article_item">Articles</a>
                    </li>
                </ul>

            </nav>

        </header>


        <main class="home-main_wrapper">

            <section class="slider single-item">
                <div class="home-slider slider_1">
                    <div class="home-slider_conteiner">
                        <h1 class="home-title">Richird Norton photorealistic rendering as real photos</h1>
                    </div>
                </div>

                <div class="home-slider slider_2">
                    <div class="home-slider_conteiner">
                        <h1 class="home-title">Rendered by Richard Norton, real photos.</h1>
                    </div>
                </div>

                <div class="home-slider slider_3">
                    <div class="home-slider_conteiner">
                        <h1 class="home-title">Like real photos photorealistic
                            rendering by Richard Norton</h1>
                    </div>
                </div>
            </section>


            <div class="home_conteiner">

                <section class="header-news">
                    <h3 class="title-news">News</h3>
                    <a href="./news" class="link-all-news">View All</a>
                </section>



                <section class="news-list">

                    <?php foreach ($listNews as $news) { ?>

                        <section class="block-news">

                            <img src="<?= $news->src ?>" alt="image_<?= $news->id ?>" class="img-news">
                            <p class="data-news"><?= $news->date ?></p>
                            <a href="/news/<?= $news->id ?>" class="title-news"><?= $news->title ?></a>
                            <p class="content-news"><?= $news->short_news ?></p>

                        </section>

                    <?php } ?>

                </section>

            </div>

            <section class="big-post-home">

                <h3 class="big-post_title">Richird Norton photorealistic rendering as real photos</h3>
                <p class="big-post_content">Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</p>

            </section>

        </main>


        <footer class="home-footer_wrapper">

            <div class="home-footer_conteiner">

                <section class="contacts">
                    <h5 class="contacts-title">Contact the Publisher</h5>
                    <a class="contacts-text" href="mailto:mike@runo.com">mike@runo.com</a>
                    <a class="contacts-text" href="tel:+944450904505">+944 450 904 505</a>

                </section>

                <section class="contacts">
                    <h5 class="contacts-title">Explorate</h5>
                    <a class="contacts-text" href="#">About</a>
                    <a class="contacts-text" href="#">Partners</a>
                    <a class="contacts-text" href="#">Job Opportunities</a>
                    <a class="contacts-text" href="#">Advertise</a>
                    <a class="contacts-text" href="#">Membership</a>
                </section>

                <section class="contacts">
                    <h5 class="contacts-title">Headquarter</h5>
                    <p class="contacts-text contacts-adress">191 Middleville Road,
                        NY 1001, Sydney
                        Australia</p>
                </section>

                <section class="contacts">
                    <h5 class="contacts-title">Connections</h5>
                    <div class="contact-wrapper">

                        <a href="https://www.facebook.com/" class="social-link">
                            <img class="social-icons" src="./img/facebook.png" alt="facebook">
                        </a>

                        <a href="https://twitter.com/" class="social-link">
                            <img class="social-icons" src="./img/twitter.png" alt="twitter">
                        </a>

                        <a href="https://www.youtube.com/" class="social-link">
                            <img class="social-icons" src="./img/youtube.png" alt="youtube">
                        </a>

                        <a href="https://www.pinterest.com/" class="social-link">
                            <img class="social-icons" src="./img/pinterest.png" alt="pinterest">
                        </a>

                        <a href="https://www.behance.net/" class="social-link">
                            <img class="social-icons" src="./img/behance.png" alt="behance">
                        </a>

                    </div>



                </section>

            </div>

            <section class="sb-footer_conteiner">

                <div class="sb-footer">
                    <div class="sb-wrapper">
                        <p class="sb-footer_conteiner">2021 | RUNO Publisher Studio</p>
                    </div>
                </div>

            </section>


        </footer>

    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>