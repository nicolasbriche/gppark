<?php $title = "GP Park - Academy"; ?>

<?php ob_start(); ?>



<header class="header--academy">
    <a href="index.php" class="header--logo">
        <img src="img/logo-gp-park-academy.png" alt="GP Park loisir" class="header--logo">
    </a>

    <nav class="header--nav" id="header--nav">
        <ul>
            <li><a class="header--nav-item" href="#presentation">Présentation</a></li>
            <li><a class="header--nav-item" href="#prices">Tarifs</a></li>
            <li><a class="header--nav-item" href="#pictures">Photos</a></li>
            <li><a class="header--nav-item" href="#contact">Contact</a></li>
        </ul>
    </nav>

    <label class="header--burger-icon" id="header--burger-icon">
        <input type="checkbox" class="header--burger-checkbox" id="header--burger-checkbox">
        <svg viewBox="0 0 32 29">
            <path class="line line-top-bottom"
                d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22" />
            <path class="line" d="M7 16 27 16" />
        </svg>
    </label>
</header>

<main class="main--academy">
    <section class="banner">
        <img src="img/banner-academy.png" alt="gp park" class="banner--image">
        <p class="section-title banner--title">GP PARK</p>
        <p class="small-title banner--tagline">Academy</p>
        <p class="small--title banner--cta">Devenez le meilleur pilote des Hauts de France !</p>
        <a href="#presentation" class="banner--scroll-icon">
            <svg viewBox="0 0 54 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M27 26.7819C24.8194 26.7819 22.6388 25.9408 20.9878 24.2898L0.677532 3.97953C-0.225844 3.07615 -0.225844 1.58091 0.677532 0.677532C1.58091 -0.225844 3.07615 -0.225844 3.97953 0.677532L24.2898 20.9878C25.7851 22.483 28.2148 22.483 29.7101 20.9878L50.0205 0.677532C50.9239 -0.225844 52.4191 -0.225844 53.3225 0.677532C54.2258 1.58091 54.2258 3.07615 53.3225 3.97953L33.0121 24.2898C31.3611 25.9408 29.1805 26.7819 27 26.7819Z"
                    fill="var(--text-color)" />
            </svg>
        </a>
    </section>
    <section class="presentation" id="presentation">
        <div class="presentation--background">
            <div class="presentation--background-circle presentation--background-red-circle"></div>
            <div class="presentation--background-circle presentation--background-blue-circle"></div>
        </div>
        <img src="img/moto.png" alt="Mini moto YCF 88" class="presentation--bike">
        <p class="presentation--text">
            GP Park Academy vous offre la possibilité de réaliser votre rêve de devenir pilote. Nous proposons des cours
            de pilotage pour tous les niveaux, que vous soyez débutant ou pilote expérimenté cherchant à améliorer vos
            compétences. Notre équipe de formateurs professionnels et expérimentés vous accompagne tout au long de votre
            formation, en vous offrant un enseignement de qualité et une attention individuelle pour garantir votre
            succès. <br>
            Rejoignez-nous dès aujourd'hui pour commencer votre aventure dans la seule école de pilotage de France. <br>
            <span>PERMIS MOTO NON OBLIGATOIRE</span>
        </p>
    </section>
    <section class="numbers">
        <div class="numbers--icon numbers--first-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <path class="shadow" fill="none" stroke-width="20px" stroke="var(--yellow)"
                    d="m195.14,307.45c-5.4,2-10.82,3.91-16.26,5.73-15.9,5.33-32.29,10.62-48.78,13.78-14.39,2.75-28.16-7.36-37.21-17.78,0,0-7.77-9.04-13.87-25-3.79-9.94-7.54-19.87-11.02-29.93-3.86-11.16-7.49-23.26-10.57-34.99-2.61-9.94-3.23-22.93-10.53-30.81-8.09-8.72-20.72-1.81-23.83,8.03-3.55,11.25,1.31,24.12,4.65,34.93,3,9.7,5.96,19.73,10.33,28.92,4.2,8.83,13.66,38.31,32.15,67.27,18.1,28.35,19.29,28.35,48.68,59.26,1.68,1.77,2.95,3.92,3.59,6.28.97,3.61,1.49,9.08-1.66,14.52-1.58,2.73-2.49,5.82-2.21,8.97.26,2.93,1.28,6.65,3.93,10.96,6.72,10.93,17.65,9.25,17.65,9.25,10.58-1.62,21.16-3.24,31.75-4.86,18.17-2.78,34.22-6.62,52.23-1.01,13.57,4.23,30.33,12.9,44.35,6.62,8.66-3.88,11.21-10.96,17.19-17.57,3.07-3.4,7-6.2,11.49-7.13,6.31-1.31,12.93,1.26,17.93,5.32,7.74,6.29,13.18,15.41,20.26,22.49,0,0,12.82,12.33,30.68,2.66,0,0,10.5-10.5,5.47-26.67-6.7-21.52-27.1-33.46-43.23-47.3-7.32-6.28-14.38-13.99-24.11-16.3-17.42-4.14-37.21,10.48-51.63,18.55-6.87,3.84-14.31,7.17-22.18,7.36-7.87.19-16.24-3.4-19.8-10.42-3.75-7.41-1.17-16.89,4.49-22.97,8.89-9.56,26.79-14.08,38.56-19.47,13.33-6.11,26.54-12.96,40.14-18.4,9.27-3.71,18.72-2.4,27.32,2.84l60.09,50.22s16.6,13.24,20.17,23.96c3.14,9.41,8.18,18.39,12.58,27.24,6.61,13.29,11.66,34.15,28.03,38.96,21.29,6.24,29.88-21.65,21.46-37.04-8.41-15.37-16.82-30.73-25.23-46.1-6.15-11.24-11.44-21.33-20.47-30.72-10.61-11.04-22.82-17.94-35.2-26.54-10.89-7.56-16.48-18.58-22.81-29.8-7.35-13.03-21.2-22.46-36.19-23.76-18.6-1.61-36.07,8.03-52.63,16.67-24.27,12.66-49.75,24.2-75.76,33.82Z" />
                <path class="blur" fill="none" stroke-width="10px" stroke="var(--text-color)"
                    d="m195.14,307.45c-5.4,2-10.82,3.91-16.26,5.73-15.9,5.33-32.29,10.62-48.78,13.78-14.39,2.75-28.16-7.36-37.21-17.78,0,0-7.77-9.04-13.87-25-3.79-9.94-7.54-19.87-11.02-29.93-3.86-11.16-7.49-23.26-10.57-34.99-2.61-9.94-3.23-22.93-10.53-30.81-8.09-8.72-20.72-1.81-23.83,8.03-3.55,11.25,1.31,24.12,4.65,34.93,3,9.7,5.96,19.73,10.33,28.92,4.2,8.83,13.66,38.31,32.15,67.27,18.1,28.35,19.29,28.35,48.68,59.26,1.68,1.77,2.95,3.92,3.59,6.28.97,3.61,1.49,9.08-1.66,14.52-1.58,2.73-2.49,5.82-2.21,8.97.26,2.93,1.28,6.65,3.93,10.96,6.72,10.93,17.65,9.25,17.65,9.25,10.58-1.62,21.16-3.24,31.75-4.86,18.17-2.78,34.22-6.62,52.23-1.01,13.57,4.23,30.33,12.9,44.35,6.62,8.66-3.88,11.21-10.96,17.19-17.57,3.07-3.4,7-6.2,11.49-7.13,6.31-1.31,12.93,1.26,17.93,5.32,7.74,6.29,13.18,15.41,20.26,22.49,0,0,12.82,12.33,30.68,2.66,0,0,10.5-10.5,5.47-26.67-6.7-21.52-27.1-33.46-43.23-47.3-7.32-6.28-14.38-13.99-24.11-16.3-17.42-4.14-37.21,10.48-51.63,18.55-6.87,3.84-14.31,7.17-22.18,7.36-7.87.19-16.24-3.4-19.8-10.42-3.75-7.41-1.17-16.89,4.49-22.97,8.89-9.56,26.79-14.08,38.56-19.47,13.33-6.11,26.54-12.96,40.14-18.4,9.27-3.71,18.72-2.4,27.32,2.84l60.09,50.22s16.6,13.24,20.17,23.96c3.14,9.41,8.18,18.39,12.58,27.24,6.61,13.29,11.66,34.15,28.03,38.96,21.29,6.24,29.88-21.65,21.46-37.04-8.41-15.37-16.82-30.73-25.23-46.1-6.15-11.24-11.44-21.33-20.47-30.72-10.61-11.04-22.82-17.94-35.2-26.54-10.89-7.56-16.48-18.58-22.81-29.8-7.35-13.03-21.2-22.46-36.19-23.76-18.6-1.61-36.07,8.03-52.63,16.67-24.27,12.66-49.75,24.2-75.76,33.82Z" />
            </svg>
            <p>Circuit de 450m avec reliefs homologuée FFM</p>
        </div>
        <div class="numbers--icon numbers--second-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <circle class="shadow" cx="250" cy="317.63" r="143" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" />
                <circle class="blur" cx="250" cy="317.63" r="143" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" />
                <line class="shadow" x1="187.4" y1="255.03" x2="312.6" y2="380.23" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <line class="shadow" x1="312.6" y1="255.03" x2="187.4" y2="380.23" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <line class="blur" x1="187.4" y1="255.03" x2="312.6" y2="380.23" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" stroke-linecap="round" />
                <line class="blur" x1="312.6" y1="255.03" x2="187.4" y2="380.23" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" stroke-linecap="round" />
            </svg>
            <p>Permis non obligatoire</p>
        </div>
        <div class="numbers--icon numbers--third-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <circle class="shadow" cx="106.41" cy="375.31" r="68.31" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" />
                <circle class="shadow" cx="390.92" cy="375.31" r="68.31" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" />
                <line class="shadow" x1="106.41" y1="375.31" x2="163.88" y2="290.55" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <line class="shadow" x1="106.41" y1="375.31" x2="163.88" y2="290.55" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <line class="shadow" x1="390.92" y1="375.31" x2="340.39" y2="290.55" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <path class="shadow"
                    d="m70.79,261.53s145.08,2.42,136.62,122.11h81s5.54-102.76,102.51-110.02c0,0,8.72-60.45-74.7-81,0,0-8.46,60.45-48.36,67.7,0,0-120.9-61.66-197.06,1.21Z"
                    fill="none" stroke="var(--yellow)" stroke-width="20px" />
                <path class="shadow" d="m185.59,235.33s47.8-42.01,115.33,0" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" />

                <circle class="blur" cx="106.41" cy="375.31" r="68.31" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" />
                <circle class="blur" cx="390.92" cy="375.31" r="68.31" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" />
                <line class="blur" x1="106.41" y1="375.31" x2="163.88" y2="290.55" fill="none"
                    stroke="var(--text-color)" stroke-width="10px" stroke-linecap="round" />
                <line class="blur" x1="390.92" y1="375.31" x2="340.39" y2="290.55" fill="none"
                    stroke="var(--text-color)" stroke-width="10px" stroke-linecap="round" />
                <path class="blur"
                    d="m70.79,261.53s145.08,2.42,136.62,122.11h81s5.54-102.76,102.51-110.02c0,0,8.72-60.45-74.7-81,0,0-8.46,60.45-48.36,67.7,0,0-120.9-61.66-197.06,1.21Z"
                    fill="none" stroke="var(--text-color)" stroke-width="10px" />
                <path class="blur" d="m185.59,235.33s47.8-42.01,115.33,0" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" />
            </svg>
            <p>15 mini-motos 88 YCF</p>
        </div>
        <div class="numbers--icon numbers--fourth-icon">
            <svg id="Age" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
                <path class="shadow"
                    d="m391.36,300.64c.66,5.57,1.01,11.24,1.01,16.99,0,78.98-64.02,143-143,143-78.98,0-143-64.02-143-143,0-78.98,64.02-143,143-143,12.97,0,25.54,1.74,37.48,4.97"
                    fill="none" stroke="var(--yellow)" stroke-width="20px" stroke-linecap="round" />
                <line class="shadow" x1="358.62" y1="178.31" x2="358.62" y2="272.07" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <line class="shadow" x1="311.74" y1="225.19" x2="405.5" y2="225.19" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" stroke-linecap="round" />
                <ellipse class="shadow" cx="237.41" cy="345.87" rx="44.06" ry="48.37" fill="none" stroke="var(--yellow)"
                    stroke-width="20px" />
                <path class="shadow" d="m273.05,240.92s-46.89-10.57-67.37,25.1c-20.47,35.66-12.33,86.68-12.33,86.68"
                    fill="none" stroke="var(--yellow)" stroke-width="20px" stroke-linecap="round" />

                <path class="blur"
                    d="m391.36,300.64c.66,5.57,1.01,11.24,1.01,16.99,0,78.98-64.02,143-143,143-78.98,0-143-64.02-143-143,0-78.98,64.02-143,143-143,12.97,0,25.54,1.74,37.48,4.97"
                    fill="none" stroke="var(--text-color)" stroke-width="10px" stroke-linecap="round" />
                <line class="blur" x1="358.62" y1="178.31" x2="358.62" y2="272.07" fill="none"
                    stroke="var(--text-color)" stroke-width="10px" stroke-linecap="round" />
                <line class="blur" x1="311.74" y1="225.19" x2="405.5" y2="225.19" fill="none" stroke="var(--text-color)"
                    stroke-width="10px" stroke-linecap="round" />
                <ellipse class="blur" cx="237.41" cy="345.87" rx="44.06" ry="48.37" fill="none"
                    stroke="var(--text-color)" stroke-width="10px" />
                <path class="blur" d="m273.05,240.92s-46.89-10.57-67.37,25.1c-20.47,35.66-12.33,86.68-12.33,86.68"
                    fill="none" stroke="var(--text-color)" stroke-width="10px" stroke-linecap="round" />
            </svg>
            <p>À partir de 6 ans</p>
        </div>
    </section>
    <section class="prices" id="prices">
        <div class="prices--background">
            <div class="prices--background-circle prices--background-red-circle"></div>
            <div class="prices--background-circle prices--background-blue-circle"></div>
        </div>
        <h1 class="section-title">Tarifs</h1>
        <p class="section-tagline">Venez faire le plein de sensations fortes<br>sans jamais avoir à faire le plein
            d’essence !</p>
        <div class="prices--cards-row">
            <div class="prices--card">
                <p class="small-title prices--card--title">Stage moto</p>
                <p class="legend-text prices--card--bike-location">À partir de 6 ans</p>
                <div class="prices--card--price">
                    <p class="small-text">€</p>
                    <p>189</p>
                    <p class="small-text"> / journée</p>
                </div>
                <p class=" small-title prices--card--driving-licence">Permis moto non obligatoire</p>
                <button class="prices--card--button">Réserver</button>
                <table class="prices--card--table">
                    <tr>
                        <td>5 mai 2023</td>
                        <td>adultes</td>
                    </tr>
                    <tr>
                        <td>5 mai 2023</td>
                        <td>enfants</td>
                    </tr>
                    <tr>
                        <td>5 mai 2023</td>
                        <td>enfants</td>
                    </tr>
                    <tr>
                        <td>...</td>
                        <td>...</td>
                    </tr>
                </table>
                <ul class="small-text prices--card--include">
                    <li>Encadré par un moniteur diplômé</li>
                    <li>Moto et équipements fournis</li>
                    <li>Pour débutants ou confirmés</li>
                </ul>
                <p class="legend-text prices--card--stuff">Sur réservation: 06 61 61 84 75 <br> Parc d'activité des
                    Hauts
                    Monts 62650 Maninghem
                </p>
            </div>
        </div>
    </section>
    <section class="pictures" id="pictures">
        <h1 class="section-title">Photos</h1>
        <p class="section-tagline">Prenez le temps de contempler nos magnifiques photos, <br>
            Au guidon de nos mini-motos vous n’aurez plus le temps de contempler le paysage !</p>
        <div class="pictures--gallery">
            <div class="pictures--gallery-first-row pictures--gallery--row">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
            </div>
            <div class="pictures--gallery-second-row pictures--gallery--row">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
            </div>
            <div class="pictures--gallery-third-row pictures--gallery--row">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
                <img src="img/moto.png" alt="">
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <iframe class="contact--map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2534.8602677003128!2d1.933353077053729!3d50.538146971609045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ddb7bc1f81a16d%3A0xe94670c4520cbb6f!2sGpPark%20Circuit%20Mini%20motos%20Supermotard%20YCF!5e0!3m2!1sfr!2sfr!4v1684274319777!5m2!1sfr!2sfr"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="contact--details">
            <p class="contact--details--title small-title">Contactez-nous</p>
            <p class="contact--details--text">Pour tous renseignements supplémentaire ou pour prendre rendez-vous:</p>
            <p class="contact--details--phone">Tel: 06 61 61 84 75</p>
            <p class="contact--details--mail">Mail: gppark@outlook.fr</p>
            <ul>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-linecap="round" stroke-width="18"
                                d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22" />
                            <path class="blur" stroke="var(--text-color)" stroke-linecap="round" stroke-width="10"
                                d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22" />
                        </svg>
                    </a></li>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-width="18"
                                d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z" />
                            <circle class="shadow" cx="96" cy="96" r="30" stroke="var(--yellow)" stroke-width="18" />
                            <circle class="shadow" cx="135" cy="57" r="9" fill="var(--yellow)" />
                            <path class="blur" stroke="var(--text-color)" stroke-width="10"
                                d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z" />
                            <circle class="blur" cx="96" cy="96" r="30" stroke="var(--text-color)" stroke-width="10" />
                            <circle class="blur" cx="135" cy="57" r="6" fill="var(--text-color)" />
                        </svg>
                    </a></li>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-linejoin="round" stroke-width="18"
                                d="M95.918 22.002c-11.963-.087-24.145 4.54-32.031 13.717-6.995 7.405-9.636 17.901-9.284 27.868-.03 5.119.032 10.237.05 15.355-4.901-1.217-9.873-4.624-15.063-2.937-4.422 1.313-6.267 7.088-3.596 10.791 2.876 3.761 7.346 5.907 11.08 8.71 1.837 1.5 4.313 2.571 5.68 4.499-.001 4.62-2.425 8.897-4.722 12.786-5.597 8.802-14.342 15.531-23.705 20.18-2.39 1.035-4.59 4.144-2.473 6.499 3.862 3.622 9.327 4.778 14.195 6.486 2.047.64 5.078 1.34 4.886 4.084.335 2.923 2.205 6.066 5.492 6.078 7.873.91 16.289.522 23.345 4.741 6.917 4.006 14.037 8.473 22.255 8.96 8.188.767 16.623-.888 23.642-5.255 5.23-2.884 10.328-6.477 16.456-7.061 5.155-1.206 10.702-.151 15.685-2.072 3.193-1.367 2.762-5.244 4.104-7.808 2.532-1.747 5.77-1.948 8.59-3.102 3.687-1.47 8.335-2.599 10.268-6.413 1.148-3.038-2.312-4.698-4.453-5.88-11.38-5.874-21.631-14.921-26.121-27.191-.496-1.936-2.279-4.834.084-6.255 4.953-4.176 11.413-6.575 15.514-11.715 3.103-3.884.941-10.55-4.141-11.322-4.928-.78-9.525 1.893-14.152 3.127-.404-8.53.502-17.232-.776-25.746-2.429-13.808-13.514-25.157-26.813-29.124-4.521-1.401-9.266-2.037-13.996-2Z" />
                            <path class="blur" stroke="var(--text-color)" stroke-linejoin="round" stroke-width="10"
                                d="M95.918 22.002c-11.963-.087-24.145 4.54-32.031 13.717-6.995 7.405-9.636 17.901-9.284 27.868-.03 5.119.032 10.237.05 15.355-4.901-1.217-9.873-4.624-15.063-2.937-4.422 1.313-6.267 7.088-3.596 10.791 2.876 3.761 7.346 5.907 11.08 8.71 1.837 1.5 4.313 2.571 5.68 4.499-.001 4.62-2.425 8.897-4.722 12.786-5.597 8.802-14.342 15.531-23.705 20.18-2.39 1.035-4.59 4.144-2.473 6.499 3.862 3.622 9.327 4.778 14.195 6.486 2.047.64 5.078 1.34 4.886 4.084.335 2.923 2.205 6.066 5.492 6.078 7.873.91 16.289.522 23.345 4.741 6.917 4.006 14.037 8.473 22.255 8.96 8.188.767 16.623-.888 23.642-5.255 5.23-2.884 10.328-6.477 16.456-7.061 5.155-1.206 10.702-.151 15.685-2.072 3.193-1.367 2.762-5.244 4.104-7.808 2.532-1.747 5.77-1.948 8.59-3.102 3.687-1.47 8.335-2.599 10.268-6.413 1.148-3.038-2.312-4.698-4.453-5.88-11.38-5.874-21.631-14.921-26.121-27.191-.496-1.936-2.279-4.834.084-6.255 4.953-4.176 11.413-6.575 15.514-11.715 3.103-3.884.941-10.55-4.141-11.322-4.928-.78-9.525 1.893-14.152 3.127-.404-8.53.502-17.232-.776-25.746-2.429-13.808-13.514-25.157-26.813-29.124-4.521-1.401-9.266-2.037-13.996-2Z" />
                        </svg>
                    </a></li>
            </ul>
        </div>
    </section>
    <section class="partners">
        <h1 class="section-title">Partenaires</h1>
        <div class="partners--list">
            <img src="img/partners/ffm.png" alt="">
            <img src="img/partners/Croix en ternois.jpeg" alt="">
            <img src="img/partners/T1 Helios.jpeg" alt="">
        </div>
    </section>
</main>

<footer class="footer--academy">
    <div class=" footer--left-side">
        <div class="footer--contact">
            <p class="small-title footer--title">contact</p>
            <p class="footer--tel">Tel: 06 61 61 84 75</p>
            <p class="footer--mail">Mail: gppark@outlook.fr</p>
            <ul>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-linecap="round" stroke-width="18"
                                d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22" />
                            <path class="blur" stroke="var(--text-color)" stroke-linecap="round" stroke-width="10"
                                d="M96 170c40.869 0 74-33.131 74-74 0-40.87-33.131-74-74-74-40.87 0-74 33.13-74 74 0 40.869 33.13 74 74 74Zm0 0v-62m30-48h-10c-11.046 0-20 8.954-20 20v28m0 0H74m22 0h22" />
                        </svg>
                    </a></li>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-width="18"
                                d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z" />
                            <circle class="shadow" cx="96" cy="96" r="30" stroke="var(--yellow)" stroke-width="18" />
                            <circle class="shadow" cx="135" cy="57" r="9" fill="var(--yellow)" />
                            <path class="blur" stroke="var(--text-color)" stroke-width="10"
                                d="M96 162c-14.152 0-24.336-.007-32.276-.777-7.849-.761-12.87-2.223-16.877-4.741a36 36 0 0 1-11.33-11.329c-2.517-4.007-3.98-9.028-4.74-16.877C30.007 120.336 30 110.152 30 96c0-14.152.007-24.336.777-32.276.76-7.849 2.223-12.87 4.74-16.877a36 36 0 0 1 11.33-11.33c4.007-2.517 9.028-3.98 16.877-4.74C71.663 30.007 81.847 30 96 30c14.152 0 24.336.007 32.276.777 7.849.76 12.87 2.223 16.877 4.74a36 36 0 0 1 11.329 11.33c2.518 4.007 3.98 9.028 4.741 16.877.77 7.94.777 18.124.777 32.276 0 14.152-.007 24.336-.777 32.276-.761 7.849-2.223 12.87-4.741 16.877a36 36 0 0 1-11.329 11.329c-4.007 2.518-9.028 3.98-16.877 4.741-7.94.77-18.124.777-32.276.777Z" />
                            <circle class="blur" cx="96" cy="96" r="30" stroke="var(--text-color)" stroke-width="10" />
                            <circle class="blur" cx="135" cy="57" r="6" fill="var(--text-color)" />
                        </svg>
                    </a></li>
                <li><a href="#">
                        <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none">
                            <path class="shadow" stroke="var(--yellow)" stroke-linejoin="round" stroke-width="18"
                                d="M95.918 22.002c-11.963-.087-24.145 4.54-32.031 13.717-6.995 7.405-9.636 17.901-9.284 27.868-.03 5.119.032 10.237.05 15.355-4.901-1.217-9.873-4.624-15.063-2.937-4.422 1.313-6.267 7.088-3.596 10.791 2.876 3.761 7.346 5.907 11.08 8.71 1.837 1.5 4.313 2.571 5.68 4.499-.001 4.62-2.425 8.897-4.722 12.786-5.597 8.802-14.342 15.531-23.705 20.18-2.39 1.035-4.59 4.144-2.473 6.499 3.862 3.622 9.327 4.778 14.195 6.486 2.047.64 5.078 1.34 4.886 4.084.335 2.923 2.205 6.066 5.492 6.078 7.873.91 16.289.522 23.345 4.741 6.917 4.006 14.037 8.473 22.255 8.96 8.188.767 16.623-.888 23.642-5.255 5.23-2.884 10.328-6.477 16.456-7.061 5.155-1.206 10.702-.151 15.685-2.072 3.193-1.367 2.762-5.244 4.104-7.808 2.532-1.747 5.77-1.948 8.59-3.102 3.687-1.47 8.335-2.599 10.268-6.413 1.148-3.038-2.312-4.698-4.453-5.88-11.38-5.874-21.631-14.921-26.121-27.191-.496-1.936-2.279-4.834.084-6.255 4.953-4.176 11.413-6.575 15.514-11.715 3.103-3.884.941-10.55-4.141-11.322-4.928-.78-9.525 1.893-14.152 3.127-.404-8.53.502-17.232-.776-25.746-2.429-13.808-13.514-25.157-26.813-29.124-4.521-1.401-9.266-2.037-13.996-2Z" />
                            <path class="blur" stroke="var(--text-color)" stroke-linejoin="round" stroke-width="10"
                                d="M95.918 22.002c-11.963-.087-24.145 4.54-32.031 13.717-6.995 7.405-9.636 17.901-9.284 27.868-.03 5.119.032 10.237.05 15.355-4.901-1.217-9.873-4.624-15.063-2.937-4.422 1.313-6.267 7.088-3.596 10.791 2.876 3.761 7.346 5.907 11.08 8.71 1.837 1.5 4.313 2.571 5.68 4.499-.001 4.62-2.425 8.897-4.722 12.786-5.597 8.802-14.342 15.531-23.705 20.18-2.39 1.035-4.59 4.144-2.473 6.499 3.862 3.622 9.327 4.778 14.195 6.486 2.047.64 5.078 1.34 4.886 4.084.335 2.923 2.205 6.066 5.492 6.078 7.873.91 16.289.522 23.345 4.741 6.917 4.006 14.037 8.473 22.255 8.96 8.188.767 16.623-.888 23.642-5.255 5.23-2.884 10.328-6.477 16.456-7.061 5.155-1.206 10.702-.151 15.685-2.072 3.193-1.367 2.762-5.244 4.104-7.808 2.532-1.747 5.77-1.948 8.59-3.102 3.687-1.47 8.335-2.599 10.268-6.413 1.148-3.038-2.312-4.698-4.453-5.88-11.38-5.874-21.631-14.921-26.121-27.191-.496-1.936-2.279-4.834.084-6.255 4.953-4.176 11.413-6.575 15.514-11.715 3.103-3.884.941-10.55-4.141-11.322-4.928-.78-9.525 1.893-14.152 3.127-.404-8.53.502-17.232-.776-25.746-2.429-13.808-13.514-25.157-26.813-29.124-4.521-1.401-9.266-2.037-13.996-2Z" />
                        </svg>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="footer--right-side">
        <div class="footer--plan">
            <p class="small-title footer--title">plan</p>
            <ul>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#prices">Tarifs</a></li>
                <li><a href="#pictures">Photos</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer--ressources">
            <p class="small-title footer--title">Ressources</p>
            <ul>
                <li>Charge de non responsabilité</li>
                <li>Réglement intérieur</li>
            </ul>
        </div>
        <div class="footer--partners">
            <p class="small-title footer--title">partners</p>
            <ul>
                <li>FFM</li>
                <li>Circuit de croix en ternois</li>
                <li>T1 Helios</li>
            </ul>
        </div>
    </div>
</footer>

<?php $content = ob_get_clean(); ?>

<?php require("template/layout.php") ?>