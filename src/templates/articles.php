<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700&family=Lora:ital,wght@0,400;1,600&display=swap" rel="stylesheet">

    <link href="./css/style.css" rel="stylesheet">
</head>


<body>

    <div class="wrapper-article">

        <header class="header-article">
            <nav class="nav-article">

                <div class="nav-article_wrapper-logo">
                    <a href="./home.html" class="nav-article_logo">RUNO</a>
                </div>

                <ul class="nav-article_wrapper-list">
                    <li class="nav-article_wrapper-item">
                        <a href="./news_all.html" class="nav-article_item">Articles</a>
                    </li>
                    <li class="nav-article_wrapper-item">
                        <a href="" class="nav-article_item">Logout</a>
                    </li>
                </ul>

            </nav>

        </header>

        <main class="article-main_conteiner">

            <div class="article-main_wrapper-home">
                <a href="./home.html" class="article-main_link-home">Home</a>
            </div>

            <h3 class="article-main_title">Article List</h3>


            <div class="article-main_wrapper-home">

                <div class="article-main_search">

                    <svg class="article_icon-search" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.0625 15.625C12.6869 15.625 15.625 12.6869 15.625 9.0625C15.625 5.43813 12.6869 2.5 9.0625 2.5C5.43813 2.5 2.5 5.43813 2.5 9.0625C2.5 12.6869 5.43813 15.625 9.0625 15.625Z" stroke="#6C757D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.7031 13.7031L17.5 17.5" stroke="#6C757D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <label for="search" class="search-text"></label>
                    <input type="search" id="search" class="article_search-input" placeholder="Search Articles" maxlength="256" autocomplete="off">
                </div>


                <a href="" class="article-main_link-add">+ Add New Article</a>
            </div>



            <section class="wrapper-table">

                <table class="article-table" cellspacing="20">

                    <thead class="article-table_thead">

                        <tr class="article-table_th-list">

                            <th class="">
                                <input class="card-input" type="checkbox" id="card1" name="cards">
                                <label for="card1" class="card-label"></label>
                            </th>

                            <th>
                                <span class="article-table_th-text">image</span>
                            </th>

                            <th>
                                <span class="article-table_th-text">title</span>
                            </th>

                            <th>
                                <span class="article-table_th-text">author</span>
                            </th>

                            <th>
                                <span class="article-table_th-text">last modified</span>
                            </th>

                            <th>
                                <span class="article-table_th-text">status</span>
                            </th>

                            <th>
                                <span class="article-table_th-text">actions</span>
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>

                                <input class="card-input" type="checkbox" id="card1" name="cards">
                                <label for="card1" class="card-label"></label>

                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card2" name="cards">
                                <label for="card2" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card3" name="cards">
                                <label for="card3" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card4" name="cards">
                                <label for="card4" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card5" name="cards">
                                <label for="card5" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card6" name="cards">
                                <label for="card6" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                        <tr>
                            <td>
                                <input class="card-input" type="checkbox" id="card7" name="cards">
                                <label for="card7" class="card-label"></label>
                            </td>

                            <td>
                                <img class="article_img" src="./img/article_img.png" alt="article_img">
                            </td>

                            <td>
                                <span class="article_content">Dream destinations to visit this year in Paris</span>
                            </td>

                            <td>
                                <span class="article_name">John Smith</span>
                            </td>

                            <td>
                                <span class="article_date">28/12/2021</span>
                            </td>

                            <td>
                                <span class="article_un-published">Published</span>
                            </td>

                            <td>
                                <svg class="article_correct-svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.69063 20.25H4.5C4.30109 20.25 4.11033 20.171 3.96967 20.0303C3.82902 19.8897 3.75 19.6989 3.75 19.5V15.3094C3.74966 15.212 3.76853 15.1155 3.80553 15.0254C3.84253 14.9353 3.89694 14.8534 3.96563 14.7844L15.2156 3.53438C15.2854 3.46351 15.3686 3.40724 15.4603 3.36883C15.5521 3.33041 15.6505 3.31063 15.75 3.31063C15.8495 3.31063 15.9479 3.33041 16.0397 3.36883C16.1314 3.40724 16.2146 3.46351 16.2844 3.53438L20.4656 7.71563C20.5365 7.78541 20.5928 7.8686 20.6312 7.96034C20.6696 8.05208 20.6894 8.15054 20.6894 8.25C20.6894 8.34946 20.6696 8.44792 20.6312 8.53966C20.5928 8.6314 20.5365 8.71459 20.4656 8.78438L9.21563 20.0344C9.14659 20.1031 9.06469 20.1575 8.9746 20.1945C8.88452 20.2315 8.78802 20.2503 8.69063 20.25V20.25Z" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.75 6L18 11.25" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.375 8.625L6.375 17.625" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.95312 20.2031L3.79688 15.0469" stroke="black" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <svg class="article_svg article_svg-hover" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.25 5.25H3.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.75 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M14.25 9.75V15.75" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18.75 5.25V19.5C18.75 19.6989 18.671 19.8897 18.5303 20.0303C18.3897 20.171 18.1989 20.25 18 20.25H6C5.80109 20.25 5.61032 20.171 5.46967 20.0303C5.32902 19.8897 5.25 19.6989 5.25 19.5V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.75 5.25V3.75C15.75 3.35218 15.592 2.97064 15.3107 2.68934C15.0294 2.40804 14.6478 2.25 14.25 2.25H9.75C9.35218 2.25 8.97064 2.40804 8.68934 2.68934C8.40804 2.97064 8.25 3.35218 8.25 3.75V5.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </section>

        </main>

    </div>

</body>

</html>