<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

    <link href="/css/style.css" rel="stylesheet">
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
                        <a href="/" class="nav-article_item">Home</a>
                    </li>
                    <li class="nav-article_wrapper-item">
                        <a href="/news" class="nav-article_item">Articles</a>
                    </li>
                </ul>

            </nav>

        </header>


        <main class="home-main_wrapper">

            <section class="home_page-slider">
                <div class="home_page-slider_conteiner">
                    <h1 class="home_page-title"><?= $news->title ?></h1>
                    <p class="home_page-content"><?= $news->short_news ?></p>

                </div>
            </section>

            <div class="home_conteiner">

                <section class="home_page_post-wrapper">

                    <section class="home_page_post-text">
                        <?php foreach ($news->full_news as $fullNews) { ?>
                            <p class="<?= $fullNews->class ?>">
                                <?= $fullNews->content ?>
                            </p>
                        <?php } ?>
                    </section>

                    <p class="post-date">Created <?= $news->date ?></p>

                    <section class="post-info">

                        <section class="post-author">

                            <img class="foto-author" src=<?= $news->info_autor->src; ?> alt="author">

                            <div class="info-autor-wrapper">
                                <p class="info-autor"> <?= $news->info_autor->name; ?></p>
                                <p class="info-autor_front-notBold"><?= $news->info_autor->position; ?></p>
                            </div>

                        </section>


                        <section class="post-share-icons">
                            <a href="https://www.facebook.com/" class="post-icons-link">
                                <img class="post-icons" src="/img/blok-author/Fb.png" alt="facebook">
                            </a>

                            <a href="https://twitter.com/" class="post-icons-link">
                                <img class="post-icons" src="/img/blok-author/Tw.png" alt="twitter">
                            </a>

                            <a href="https://www.pinterest.com/" class="post-icons-link">
                                <img class="post-icons" src="/img/blok-author/Pn.png" alt="pinterest">
                            </a>

                            <a href="https://www.behance.net/" class="post-icons-link">
                                <img class="post-icons" src="/img/blok-author/Be.png" alt="behance">
                            </a>


                        </section>

                    </section>

                </section>

            </div>

            <section class="block-posts_cloud-bg">

                <div class="home_conteiner">

                    <p class="related-posts">Related Posts</p>

                    <section class="posts-list">

                        <section class="post-list_block post-rectangle_1">
                            <p class="data-post">08.08.2021</p>
                            <a href="#" class="title-post">Richird Norton photorealistic <br>rendering as real photos</a>
                            <p class="content-post">Progressively incentivize cooperative systems through
                                technically sound functionalities. Credibly productivate
                                seamless data with flexible schemas.
                            </p>
                        </section>

                        <section class="post-list_block post-rectangle_2">

                            <p class="data-post">08.08.2021</p>
                            <a href="#" class="title-post">Richird Norton photorealistic <br>rendering as real photos</a>
                            <p class="content-post">Progressively incentivize cooperative systems through
                                technically sound functionalities. Credibly productivate
                                seamless data with flexible schemas.
                            </p>

                        </section>

                        <section class="post-list_block post-rectangle_3">

                            <p class="data-post">08.08.2021</p>
                            <a href="#" class="title-post">Richird Norton photorealistic <br>rendering as real photos</a>
                            <p class="content-post">Progressively incentivize cooperative systems through
                                technically sound functionalities. Credibly productivate
                                seamless data with flexible schemas.
                            </p>

                        </section>

                    </section>

                </div>

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
                            <img class="social-icons" src="/img/facebook.png" alt="facebook">
                        </a>

                        <a href="https://twitter.com/" class="social-link">
                            <img class="social-icons" src="/img/twitter.png" alt="twitter">
                        </a>

                        <a href="https://www.youtube.com/" class="social-link">
                            <img class="social-icons" src="/img/youtube.png" alt="youtube">
                        </a>

                        <a href="https://www.pinterest.com/" class="social-link">
                            <img class="social-icons" src="/img/pinterest.png" alt="pinterest">
                        </a>

                        <a href="https://www.behance.net/" class="social-link">
                            <img class="social-icons" src="/img/behance.png" alt="behance">
                        </a>

                    </div>



                </section>

            </div>

            <section class="sb-footer_conteiner">

                <div class="sb-footer">
                    <div class="sb-wrapper">
                        <p class="sb-footer_conteiner">2021 | RUNO Publisher Studio</p>
                        <p class="sb-footer_text">Subscribe Now</p>
                    </div>
                </div>



            </section>


        </footer>

    </div>

</body>

</html>