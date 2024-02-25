<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Reanne Aranza</title>
    </head>

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"></link>   -->
    <link rel="stylesheet" href="../styles/index.css">
    
    <body>
        <div id="container">
            <header id="nav-bar">
                <div id="nav__logo">
                    <img src="/Resources/logo.png" alt="reannearanza-logo">
                </div>
                <ul id="nav-links">
                    <li class="nav__link"><a href="#about-me">about</a></li>
                    <li class="nav__link"><a href="#works">works</a></li>
                    <li class="nav__link"><a href="#hire-me">hire me</a></li>
                </ul>
            </header>
            
            <section id="main" class="section">
                <div id="main-text">
                    <p class="green-text">Hi, <span class="red-text">$this</span> is</p>
                    <h1 class="yellow-text">Reanne Aranza;</h1>
                    <p class="green-text">
                        I am a web developer from
                        <br>the <span class="yellow-text">Philippines</span>. Just keep
                        <br>scrolling <span class="purple-text">if</span> you want to
                        <br><a href="#" class="blue-text">knowMoreAboutMe();</a>
                    </p>
                </div>
                <div id="main-logo">
                    <img id ="main-logo-img" src="/Resources/logo.png" alt="reannearanza-logo">
                </div>
            </section>

            <section id="about-me" class="section">
                <h1 class="section-header lilac-text">About Me</h1>
                <div id="window">
                    <div id="title-bar">
                        <div id="title-bar-buttons">
                            <div class="title-bar__button"></div>
                            <div class="title-bar__button"></div>
                            <div class="title-bar__button"></div>
                        </div>
                        <p class="lilac-text">/reanne-aranza</p>
                    </div>
                    <div id="workspace">
                        <div id="file-explorer">
                            <ul id="#file-items">
                                <li class="file__item">
                                    <button class="lilac-text">
                                        <i class="bi bi-person-fill"></i> about-me.php
                                    </button>
                                </li>
                                <li class="file__item">
                                    <button href="" class="lilac-text">
                                        <i class="bi bi-briefcase-fill"></i> experience.php
                                    </button>
                                </li>
                                <li class="file__item">
                                    <button class="lilac-text">
                                    <i class="bi bi-trophy-fill"></i> awards.php
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="line-editor">
                            <p class="yellow-text"><span class="blue-text">&lt;</span>about<span class="blue-text">&gt;</span></p>
                            <p class="lilac-text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tortor dolor, imperdiet quis volutpat a, hendrerit quis mi. Curabitur justo diam, bibendum convallis vehicula vulputate, vestibulum at diam. Nulla pharetra erat nec elit consequat, vel interdum metus tempor. Aenean in consectetur dolor, quis pretium lacus. Cras ultrices porttitor neque, et pharetra lacus egestas vitae. Aliquam at mollis metus. Donec elementum felis et massa commodo, nec pretium nisi euismod. Maecenas et ex ipsum. Nulla malesuada urna a turpis interdum sollicitudin. Proin ornare urna ac justo eleifend laoreet. Maecenas finibus mauris in leo scelerisque, id semper magna faucibus. Aliquam sed mi scelerisque, iaculis leo lacinia, volutpat nunc. Maecenas suscipit convallis elementum. Maecenas vitae laoreet dolor, at elementum tortor. Phasellus sit amet ligula vel eros molestie aliquet quis sit amet metus.
                            </p>
                            <p class="yellow-text"><span class="blue-text">&lt;/</span>about<span class="blue-text">&gt;</span></p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="works" class="section">
                <h1 class="section-header lilac-text">Projects</h1>
            </section>

            <section id="hire-me" class="section">
                <h1 class="section-header lilac-text">Hire Me</h1>
                <div id="contact-me">
                    <form action="" id="contact-form"> 
                        <input type="text" name="contact-form__field-id" id="contact-form__field-id" placeholder="Full Name">
                        <input type="email" name="contact-form__field-email" id="contact-form__field-email" placeholder="What's your email?">
                        <input type="text" name="contact-form__field-subject" id="contact-form__field-subject" placeholder="Subject: Software Engineer Job Opportunity">
                        <textarea name="" id="contact-form__field-message" cols="30" rows="10" placeholder="Hi, Reanne! Reaching out to you for an opportunity that you might like."></textarea>
                        <button type="submit" id="contact-form__button-submit">Send Message</button>
                    </form>
                    <div id="contact-image">
                        <img src="/Resources/reanne-img.jpg" alt="" id="reanne-img">
                    </div>
                </div>
            </section>

            <section id="socials-nav-bar">
                <ul id="socials-nav-items">
                    <li class="socials-nav__item">
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </li>
                    <li class="socials-nav__item">
                        <a href=""><i class="bi bi-github"></i></a>
                    </li>
                    <li class="socials-nav__item">
                        <a href=""><i class="bi bi-envelope-heart"></i></a>
                    </li>
                </ul>
            </section>

            <section id="email-nav-bar">
                <p id="email-nav__item" class="lilac-text">reannearanza.biz@gmail.com</p>
            </section>
        </div>
        
        

        <script></script>
    </body>
</html>