<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aka First Blog</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="blog-header">
            <a href="#!"><img src="./images/BLOG.png" alt="headline" class="blog-header__logo"></a>
            <ul class="blog-header__item-list">
                <li class="blog-header__item"><a href="#!" class="blog-header__item-link">Главная</a></li>
                <li class="blog-header__item"><a href="#!" class="blog-header__item-link">Статьи</a></li>
                <li class="blog-header__item"><a href="#!" class="blog-header__item-link">Портфолио</a></li>
                <li class="blog-header__item"><a href="#!" class="blog-header__item-link">Обратная связь</a></li>
            </ul>
            <a href="#!" class="blog-header__login"><p>ВОЙТИ</p></a>
        </header>

        <!-- About me -->
        <section class="blog-greeting">
            <div class="blog-greeting__content" style="padding-left: 25px">
                <h1 class="blog-greeting__content-title">Делюсь полезной информацией, помогающей стать Full-Stack разработчиком</h1>
                <p class="blog-greeting__content-about">Привет, меня зовут Кирилл Акшенцев. Я начинающий разработчик. В этом блоге я буду делиться интересными статьями, курсами и видеороликами.</p>
            </div>

            <div class="blog-greeting__img">
                <picture>
                    <source media="(max-width: 799px)" srcset="./images/hero.png">
                    <div class="blog-greeting__img-art">
                        <img src="./images/hero.png" alt="art-in-art" class="blog-greeting__img-art">
                    </div>
                </picture>
            </div>
        </section>

        <!-- Portfolio -->
        <section class="blog-portfolio">
                <h3 class="blog-portfolio__title">Портфолио</h3>
                <p class="blog-portfolio__description">Здесь вы можете видеть мои недавние работы</p>
                <div class="blog-portfolio__work">
                    <img src="./images/portfolio/01.png" alt="">
                    <h4 class="blog-portfolio__work-title"><a href="#!">Designer's Portfolio - Concept</a></h4>
                </div>

        </section>

        <!-- Articles -->
        <section class="blog-article">
            <h2 class="blog-article__title">Последние публикации</h2>
            <p class="blog-article__title-description">Раз в неделю выкладываю полезную статью. Обычно это PHP</p>

            <div class="blog-article_rows">

                <article class="blog-article1 blog-article-form">
                    <div class="blog-article1__metadata blog-article__metadata">
                        <span class="blog-article1__metadata-views">Views</span>
                        <span class="blog-article1__metadata-date">Date</span>
                    </div>
                    <a href="#!" class="blog-article__title-link"><h2 class="blog-article1__title blog-article__title">Настройка PHPStorm</h2></a>
                    <p class="blog-article__content">Этот урок поможет вам настроить вашу IDE PHPStorm для более удобной работы. Вы научитесь настраивать шрифты, иконки, редактор и другие параметры, которые позволят вам увеличить производительность и работать более эффективно. Также, благодаря этому уроку, вы сможете лучше понимать, как использовать различные функции и инструменты, доступные в PHPStorm.</p>
                    <div class="blog-article1__other ">
                        <div class="blog-article__other">
                            <div class="blog-article__other-autor">
                                <img src="./images/author.jpg" alt="autor-rahim">
                                <span style="padding-left: 10px">Рахим Муратов</span>
                            </div>
                            <a href="#!" class="blog-article__link">Подробнее</a>
                        </div>
                    </div>
                </article>

                <article class="blog-article2 blog-article-form">
                    <div class="blog-article2__metadata blog-article__metadata">
                        <span class="blog-article2__metadata-views">Views</span>
                        <span class="blog-article2__metadata-date">Date</span>
                    </div>
                    <a href="#!" class="blog-article__title-link"><h2 class="blog-article2__title blog-article__title">Настройка PHPStorm</h2></a>
                    <p class="blog-article__content">Этот урок поможет вам настроить вашу IDE PHPStorm для более удобной работы. Вы научитесь настраивать шрифты, иконки, редактор и другие параметры, которые позволят вам увеличить производительность и работать более эффективно. Также, благодаря этому уроку, вы сможете лучше понимать, как использовать различные функции и инструменты, доступные в PHPStorm.</p>
                    <div class="blog-article__other">
                        <div class="blog-article__other-autor">
                            <img src="./images/author.jpg" alt="autor-rahim">
                            <span style="padding-left: 10px">Рахим Муратов</span>
                        </div>
                        <a href="#!" class="blog-article__link">Подробнее</a>
                    </div>
                </article>

                <article class="blog-article2 blog-article-form">
                    <div class="blog-article2__metadata blog-article__metadata">
                        <span class="blog-article2__metadata-views">Views</span>
                        <span class="blog-article2__metadata-date">Date</span>
                    </div>
                    <a href="#!" class="blog-article__title-link"><h2 class="blog-article2__title blog-article__title">Настройка PHPStorm</h2></a>
                    <p class="blog-article__content">Этот урок поможет вам настроить вашу IDE PHPStorm для более удобной работы. Вы научитесь настраивать шрифты, иконки, редактор и другие параметры, которые позволят вам увеличить производительность и работать более эффективно. Также, благодаря этому уроку, вы сможете лучше понимать, как использовать различные функции и инструменты, доступные в PHPStorm.</p>
                    <div class="blog-article__other">
                        <div class="blog-article__other-autor">
                            <img src="./images/author.jpg" alt="autor-rahim">
                            <span style="padding-left: 10px">Рахим Муратов</span>
                        </div>
                        <a href="#!" class="blog-article__link">Подробнее</a>
                    </div>
                </article>

                <article class="blog-article2 blog-article-form">
                    <div class="blog-article2__metadata blog-article__metadata">
                        <span class="blog-article2__metadata-views">Views</span>
                        <span class="blog-article2__metadata-date">Date</span>
                    </div>
                    <a href="#!" class="blog-article__title-link"><h2 class="blog-article2__title blog-article__title">Настройка PHPStorm</h2></a>
                    <p class="blog-article__content">Этот урок поможет вам настроить вашу IDE PHPStorm для более удобной работы. Вы научитесь настраивать шрифты, иконки, редактор и другие параметры, которые позволят вам увеличить производительность и работать более эффективно. Также, благодаря этому уроку, вы сможете лучше понимать, как использовать различные функции и инструменты, доступные в PHPStorm.</p>
                    <div class="blog-article__other">
                        <div class="blog-article__other-autor">
                            <img src="./images/author.jpg" alt="autor-rahim">
                            <span style="padding-left: 10px">Рахим Муратов</span>
                        </div>
                        <a href="#!" class="blog-article__link">Подробнее</a>
                    </div>
                </article>

            </div>

        </section>

        <footer class="blog-footer">
            <h3 class="blog-footer__title">Contacts</h3>
            <p class="blog-footer__description">Want to know more or just chat?<br>
                You are welcome!</p>
            <a href="#!" class="blog-footer__btn">Send Message</a>
        </footer>

    </div>
</body>
</html>