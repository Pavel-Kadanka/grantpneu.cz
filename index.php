<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grant Pneu</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <div id="menu">
                <div id="logo">
                    <h1>GrantPneu</h1>
                    <img src="/public/tires.png" alt="Logo">
                </div>
                <ul>
                    <li><a href="#sluzby">Služby</a></li>
                    <li><a href="#o-nas">O nás</a></li>
                    <li><a href="#cenik">Ceník</a></li>
                    <li><a href="#testimonials">Recenze</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                </ul>
            </div>
            
            <div class="mobile-menu">
                <div class="container">
                    <input class="checkbox" type="checkbox" @change="showMenu($event)" />
                    <div class="hamburger-lines">
                        <span class="line line1"></span>
                        <span class="line line2"></span>
                        <span class="line line3"></span>
                    </div>
                    <div id="logo">
                    <span>GrantPneu</span>
                    <img src="/public/tires.png" alt="Logo">
                </div>
                </div>
                <div class="mobile-menu-items">
                    <ul>
                        <li><a href="#sluzby">Služby</a></li>
                        <li><a href="#o-nas">O nás</a></li>
                        <li><a href="#cenik">Ceník</a></li>
                        <li><a href="#testimonials">Recenze</a></li>
                        <li><a href="#kontakt">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="hero-content">
                <h1>Vítejte v GrantPneu</h1>
                <p>Investice do kvalitních pneumatik je investice do vašeho bezpečí</p>
                <a href="#sluzby" class="cta-button">Naše služby <i class="bi bi-arrow-right"></i></a>
                <div class="hero-icons">
                    <div class="icon-item">
                        <i class="bi bi-truck"></i>
                        <p>Pneumatiky</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-tools"></i>
                        <p>Servis</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-gear"></i>
                        <p>Geometrie</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="/public/grantpneu-cz_01-removebg-preview.png" alt="Hero Image" class="floating">
            </div>
        </div>
    </header>

    <section id="sluzby">
        <h2>Služby</h2>
        <div class="service-content">
            <div class="service-list">
                <div class="service-item">
                    <div class="service-item-inner">
                        <div class="service-item-front">
                            <div class="service-item-card">
                                <img src="/public/grantpneu-cz_03.jpg" alt="Pneumatiky">
                                <i class="bi bi-truck"></i>
                                <h3>Pneumatiky</h3>
                                <p>Prodej a montáž pneumatik.</p>
                                <a class="learn-more">Více informací <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service-item-back">
                            <div class="service-item-card">
                                <img src="/public/grantpneu-cz_02.jpg" alt="Pneumatiky">
                                <h3>Pneumatiky</h3>
                                <p>Nabízíme široký výběr pneumatik pro všechny typy vozidel. Provádíme také odbornou montáž a vyvážení.</p>
                                <a class="learn-more">Zpět <i class="bi bi-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <div class="service-item-front">
                            <div class="service-item-card">
                                <img src="/public/9199759.png" alt="Servis">
                                <i class="bi bi-tools"></i>
                                <h3>Servis</h3>
                                <p>Kompletní servis vozidel.</p>
                                <a class="learn-more">Více informací <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service-item-back">
                            <div class="service-item-card">
                                <h3>Servis</h3>
                                <p>Provádíme pravidelné servisní prohlídky, výměny oleje, brzdových destiček a další údržbu vozidel.</p>
                                <a class="learn-more">Zpět <i class="bi bi-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-item">
                    <div class="service-item-inner">
                        <div class="service-item-front">
                            <div class="service-item-card">
                                <img src="/public/geometrie.jpg" alt="Geometrie">
                                <i class="bi bi-gear"></i>
                                <h3>Geometrie</h3>
                                <p>Profesionální seřízení geometrie.</p>
                                <a class="learn-more">Více informací <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="service-item-back">
                            <div class="service-item-card">
                                <h3>Geometrie</h3>
                                <p>Pomocí moderních přístrojů přesně seřídíme geometrii kol, aby vaše vozidlo jezdilo rovně a bezpečně.</p>
                                <a class="learn-more">Zpět <i class="bi bi-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="o-nas">
        <h2>O nás</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Jsme rodinná firma s dlouholetou tradicí v oboru pneumatik a servisu vozidel. Naše priority jsou kvalita a spokojenost zákazníků.</p>
                <p>Naše moderně vybavená dílna a zkušený tým zajišťují, že vaše vozidlo je v těch nejlepších rukou.</p>
            </div>
            <div class="about-image">
                <img src="/public/prodejna.png" alt="Naše dílna">
            </div>
        </div>
        <div class="milestones">
            <div class="milestone-item">
                <i class="bi bi-calendar-check"></i>
                <h3>10+ let</h3>
                <p>Na trhu</p>
            </div>
            <div class="milestone-item">
                <i class="bi bi-people"></i>
                <h3>5000+</h3>
                <p>Spokojených zákazníků</p>
            </div>
            <div class="milestone-item">
                <i class="bi bi-gear"></i>
                <h3>100%</h3>
                <p>Kvalita a profesionalita</p>
            </div>
        </div>
        <div class="about-cta">
            <p>Navštivte nás a přesvědčte se sami!</p>
            <a href="#kontakt" class="cta-button">Kontaktujte nás <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>

    <section id="cenik">
        <h2>Ceník</h2>
        <div class="price-list">
            <div class="price-item">
                <i class="bi bi-cash"></i>
                <h3>Montáž pneumatik</h3>
                <p>od 500 Kč</p>
                <p class="discount">10% sleva pro nové zákazníky!</p>
            </div>
            <div class="price-item">
                <i class="bi bi-wrench"></i>
                <h3>Servisní prohlídka</h3>
                <p>od 1000 Kč</p>
            </div>
            <div class="price-item">
                <i class="bi bi-speedometer"></i>
                <h3>Geometrie kol</h3>
                <p>od 1200 Kč</p>
            </div>
        </div>
        <div class="price-cta">
            <p>Potřebujete individuální cenovou nabídku?</p>
            <a href="#kontakt" class="cta-button">Kontaktujte nás <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>

    <section id="testimonials">
        <h2>Recenze</h2>
        <div class="testimonial-list">
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Skvělý servis a příjemný personál. Doporučuji!"</p>
                <p><strong>- Jan Novák</strong></p>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Rychlá a profesionální montáž pneumatik."</p>
                <p><strong>- Petra Dvořáková</strong></p>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Skvělý servis a příjemný personál. Doporučuji!"</p>
                <p><strong>- Jan Novák</strong></p>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Skvělý servis a příjemný personál. Doporučuji!"</p>
                <p><strong>- Jan Novák</strong></p>
            </div>
        </div>
    </section>

    <section id="kontakt">
        <h2>Kontakt</h2>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Adresa</h3>
                <p>
                    <strong>Jiří Matuška</strong><br>
                    Pravlov 180<br>
                    664 64 Pravlov
                </p>
                <h3>Provozní doba</h3>
                <p>Pondělí - Pátek <strong>09:00-18:00</strong></p>
                <h3>Kontaktní údaje</h3>
                <p>
                    <strong>GSM:</strong> +420 606 123 254<br>
                    <strong>Email:</strong>
                    <a href="mailto:grantpneu@seznam.cz">grantpneu@seznam.cz</a>,
                    <a href="mailto:info@grantpneu.cz">info@grantpneu.cz</a>
                </p>
                <h3>IČ a DIČ</h3>
                <p>
                    <strong>IČ:</strong> 05684978<br>
                    <strong>DIČ:</strong> CZ7901124022 (plátce DPH)
                </p>
                <h3>Živnostenské oprávnění</h3>
                <p>
                    Vydal Městský úřad Ivančice, spisová značka: ŽÚ/17/28/MUS
                </p>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2614.7822147371385!2d16.479972175973586!3d49.052764387008786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4712b96433dc3347%3A0xd4c9bb74a2325abe!2zR3JhbnRQbmV1IC0gSmnFmcOtIE1hdHXFoWth!5e0!3m2!1scs!2scz!4v1738782860718!5m2!1scs!2scz"
                    width="100%"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <form id="contact-form">
                    <h3>Napište nám</h3>
                    <input type="text" name="name" placeholder="Vaše jméno" required>
                    <input type="email" name="email" placeholder="Váš email" required>
                    <textarea name="message" placeholder="Vaše zpráva" required></textarea>
                    <button type="submit">Odeslat <i class="bi bi-send"></i></button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="social-media">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
        <p>&copy; 2023 Grant Pneu. Všechna práva vyhrazena.</p>
    </footer>

    <script type="module" src="js/main.js"></script>
</body>

</html>