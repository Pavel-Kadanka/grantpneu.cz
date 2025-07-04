<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grantpneu.cz</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet">
    <meta name="description" content="Profesionální pneuservis v Pravlově. Nabízíme kompletní služby pneuservisu, přezutí pneumatik a opravy. Kvalitní služby za rozumné ceny.">
    <meta name="keywords" content="pneuservis Pravlov, přezutí pneumatik, oprava pneumatik, zimní pneumatiky, letní pneumatiky, pneubazar, pneuhotel">
    <meta name="author" content="Grant Pneu">
    <meta name="robots" content="index, follow">

    <link rel="icon" type="icon" href="public/tires_black.webp">

    <!-- Open Graph tags for social media -->
    <meta property="og:title" content="Grant Pneu - Profesionální pneuservis Pravlov">
    <meta property="og:description" content="Kompletní služby pneuservisu včetně přezutí a oprav pneumatik. Kvalitní služby za rozumné ceny.">
    <meta property="og:image" content="/public/prodejna.webp">
    <meta property="og:url" content="https://grantpneu.cz">

    <!-- Canonical URL to prevent duplicate content -->
    <link rel="canonical" href="https://grantpneu.cz">
</head>

<body>
    <header>
        <nav>
            <div id="menu">
                <div id="logo">
                    <h1><a href="/">Grantpneu.cz</a></h1>
                    <img class="white-logo" src="/public/tires_white.webp" alt="Logo">
                    <img class="black-logo" src="/public/tires_black.webp" alt="Logo">
                </div>
                <ul>
                    <li><a href="#sluzby">Služby</a></li>
                    <li><a href="#o-nas">O nás</a></li>
                    <li><a href="#cenik">Ceník</a></li>
                    <li><a href="#testimonials">Recenze</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                    <li>
                        <div id="theme-pc">
                            <button id="theme-toggle" aria-label="Toggle light mode">
                                <i class="bi bi-sun-fill"></i>
                            </button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="mobile-menu">
                <div class="container">
                    <div class="checkbox-container">
                        <input class="checkbox" type="checkbox" @change="showMenu($event)" />
                        <div class="hamburger-lines">
                            <span class="line line1"></span>
                            <span class="line line2"></span>
                            <span class="line line3"></span>
                        </div>
                    </div>
                    <div id="logo">
                        <span>GrantPneu</span>
                        <img class="white-logo" src="/public/tires_white.webp" alt="Logo">
                        <img class="black-logo" src="/public/tires_black.webp" alt="Logo">
                    </div>
                    <div id="theme-mobile">
                        <button id="theme-toggle" aria-label="Toggle light mode">
                            <i class="bi bi-sun-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="mobile-menu-items">
            <ul>
                <li><a href="#sluzby">Služby</a></li>
                <li><a href="#o-nas">O nás</a></li>
                <li><a href="#cenik">Ceník</a></li>
                <li><a href="#testimonials">Recenze</a></li>
                <li><a href="#kontakt">Kontakt</a></li>
            </ul>
        </div>
        <div class="hero">
            <div class="hero-content">
                <h1>Vítejte v Grantpneu.cz</h1>
                <p>Investice do kvalitních pneumatik je investice do vašeho bezpečí</p>
                <a href="#sluzby" class="cta-button">Naše služby <i class="bi bi-arrow-right"></i></a>
                <div class="hero-icons">
                    <div class="icon-item">
                        <i><img src"public/tire.webp" alt=""></i>
                        <p>Pneuservis</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-tools"></i>
                        <p>Oprava pneumatik</p>
                    </div>
                    <div class="icon-item">
                        <i class="bi bi-car-front"></i>
                        <p>Přezutí pneumatik</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="/public/car.webp" alt="Ilustrační auto" class="floating">
            </div>
        </div>
    </header>

    <section id="sluzby">
        <h2>Služby</h2>
        <div class="service-groups">
            <div class="service-group">
                <h3>Pneuservis</h3>
                <div class="service-grid">
                    <div class="service-card">
                        <img src="/public/grantpneu-cz_03.webp" alt="Pneumatiky">
                        <div class="service-content">
                            <h3><i class="bi bi-truck"></i> Pneuservis</h3>
                            <p class="service-preview">Kompletní pneuservis pro osobní, suv i offroad vozidla. Rychle a profesionálně.</p>
                            <p class="service-detail">Nabízíme širokou škálu služeb v oblasti pneuservisu, včetně výměny pneumatik. Věnujeme se jak osobním, SUV, offroad, dodávkám. Přijďte a přesvědčte se sami!</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="/public/flat-tire.webp" alt="Píchlá guma">
                        <div class="service-content">
                            <h3><i class="bi bi-tools"></i> Oprava pneumatik</h3>
                            <p class="service-preview">Opravy pneumatik všech typů. Spolehněte se na naši profesionalitu.</p>
                            <p class="service-detail">Provádíme opravy pneumatik pro všechny druhy vozidel. Naše služby zahrnují opravy běhounu, bočnic a dalších částí pneumatik. Používáme kvalitní materiály a moderní techniky, které zaručují dlouhou životnost oprav.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="/public/tire-change.webp" alt="Přezutí">
                        <div class="service-content">
                            <h3><i class="bi bi-gear"></i> Přezutí pneumatik</h3>
                            <p class="service-preview">Sezónní přezutí pneumatik s precizním provedením.</p>
                            <p class="service-detail">Nabízíme kompletní služby přezutí pneumatik zahrnující: demontáž z vozu, montáž na vůz, přezutí a vyvážení včetně závaží. Přezouváme osobní vozy, SUV, offroad i dodávky. Dbáme na bezpečnost a komfort vaší jízdy.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-group">
                <h3>Autoservis</h3>
                <div class="service-grid">
                    <div class="service-card">
                        <img src="/public/car-service.jpg" alt="Opravy motorových vozidel">
                        <div class="service-content">
                            <h3><i class="bi bi-wrench"></i> Opravy motor. vozidel</h3>
                            <p class="service-preview">Kompletní opravy a servis motorových vozidel.</p>
                            <p class="service-detail">Provádíme opravy motorů, brzd, podvozků a dalších částí vozidel. Zajišťujeme profesionální přístup a kvalitní práci.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="/public/car-diagnostic.jpg" alt="Diagnostika">
                        <div class="service-content">
                            <h3><i class="bi bi-cpu"></i> Diagnostika</h3>
                            <p class="service-preview">Moderní diagnostika vozidel.</p>
                            <p class="service-detail">Provádíme diagnostiku elektronických systémů vozidel pomocí moderních přístrojů. Rychle odhalíme a vyřešíme závady.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="/public/car-stk.jpeg" alt="Zřízení STK a příprava na STK">
                        <div class="service-content">
                            <h3><i class="bi bi-clipboard-check"></i> Zřízení a příprava na STK</h3>
                            <p class="service-preview">Zajistíme STK a připravíme vaše vozidlo na kontrolu.</p>
                            <p class="service-detail">Připravíme vaše vozidlo na technickou kontrolu a zajistíme její provedení. Postaráme se o vše potřebné pro úspěšné absolvování STK.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-group">
                <h3>Ostatní služby</h3>
                <div class="service-grid">
                    <div class="service-card">
                        <img src="/public/car-wash.jpg" alt="Úklid vozidel">
                        <div class="service-content">
                            <h3><i class="bi bi-droplet"></i> Úklid vozidel</h3>
                            <p class="service-preview">Profesionální úklid a čištění vozidel.</p>
                            <p class="service-detail">Nabízíme kompletní úklid interiéru i exteriéru vozidel. Používáme šetrné a účinné prostředky pro dokonalý výsledek.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="/public/pneuhotel.jpg" alt="Pneuhotel">
                        <div class="service-content">
                            <h3><i class="bi bi-house"></i> Pneuhotel</h3>
                            <p class="service-preview">Bezpečné uskladnění vašich pneumatik.</p>
                            <p class="service-detail">Nabízíme službu pneuhotel – bezpečné a profesionální uskladnění vašich pneumatik mimo sezónu. Pneumatiky jsou u nás v suchu, chladu a bezpečí.</p>
                            <button class="service-toggle">
                                <span class="show-more">Více informací <i class="bi bi-chevron-down"></i></span>
                                <span class="show-less">Méně informací <i class="bi bi-chevron-up"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="additional-service">Nabízíme také <strong>pneubazar</strong>, kde najdete široký výběr kvalitních pneumatik za výhodné ceny.</p>
        <p class="additional-service">Dále provozujeme <strong>pneuhotel</strong>, kde vám bezpečně uskladníme vaše pneumatiky, když je zrovna nepotřebujete.</p>
    </section>

    <section id="o-nas">
        <h2>O nás</h2>
        <div class="about-content">
            <div class="about-text">
                <p>Jsme rodinná firma s dlouholetou tradicí v oboru pneumatik a servisu vozidel. Naše priority jsou kvalita a spokojenost zákazníků.</p>
                <p>Naše moderně vybavená dílna a zkušený tým zajišťují, že vaše vozidlo je v těch nejlepších rukou.</p>
            </div>
            <div class="about-image">
                <img src="/public/prodejna.webp" alt="Naše dílna">
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
        <h2>Ceník služeb</h2>
        <div class="price-header">
            <p>Platný od 1.1.2025 | Ceny včetně DPH</p>
        </div>
        
        <div class="price-grid">
            <div class="price-category">
                <h3>Přezutí komplet (4 ks)</h3>
                <div class="price-row">
                    <span>Osobní, SUV - ocelový disk</span>
                    <span>800 Kč</span>
                </div>
                <div class="price-row">
                    <span>Osobní, SUV - elektron do 17"</span>
                    <span>1 000 Kč</span>
                </div>
                <div class="price-row">
                    <span>Osobní, SUV - elektron 18"+</span>
                    <span>1 200 Kč</span>
                </div>
                <div class="price-row">
                    <span>Terénní SUV a offroad</span>
                    <span>1 200 Kč</span>
                </div>
                <div class="price-row">
                    <span>Dodávka, VAN</span>
                    <span>1 200 Kč</span>
                </div>
            </div>

            <div class="price-category">
                <h3>Další služby</h3>
                <div class="price-row">
                    <span>Přehození 4 ks plechový disk<br class="mobile"> – vyvážení včetně závaží</span>
                    <span>500 Kč</span>
                </div>
                <div class="price-row">
                    <span>Přehození 4 ks ALU kol<br class="mobile"> – vyvážení včetně závaží</span>
                    <span>700 Kč</span>
                </div>
                <div class="price-row">
                    <span>Oprava pneu</span>
                    <span>300 Kč</span>
                </div>
                <div class="price-row">
                    <span>Hodinová sazba autoservis vozidla</span>
                    <span>700 Kč</span>
                </div>
            </div>
        </div>

        <div class="additional-services">
            <div class="service-item">
                <i class="bi bi-clock"></i>
                <h4>Otevírací doba</h4>
                <div class="price-hours">
                    <div class="price-hours-row">
                        <span>Pondělí – Pátek</span>
                        <span>9:00 – 17:00</span>
                    </div>
                    <div class="price-hours-row">
                        <span>Sobota</span>
                        <span>9:00 – 13:00</span>
                    </div>
                </div>
            </div>
            <div class="service-item">
                <i class="bi bi-house"></i>
                <h4>Pneuhotel</h4>
                <p>100 Kč/měsíc</p>
                <p class="small-text">(sada 4 pneumatik)</p>
            </div>
        </div>

        <div class="phone-order-cta">
            <p class="phone-order-text">Objednávky přijímáme <strong>pouze telefonicky</strong></p>
            <a href="tel:+420606123254" class="cta-button">
                +420 606 123 254 <i class="bi bi-telephone phone-icon"></i>
            </a>
        </div>
    </section>

    <section id="testimonials">
        <h2>Recenze</h2>
        <div class="testimonial-list">
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"V pneuservisu pana Matušky jsem vždy zcela spokojen. Kvalita a rychlost služeb je zde na profesionální úrovni, ceny jsou také velmi příznivé. Vřele doporučuji."</p>
                <div class="testimonial-footer">
                    <div class="star-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p><strong>- Michal Osička</strong></p>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"V nouzi nenechal a pomohl. Ochotný člověk který Vám vyjde vstříc když potřebujete a nemůžete sehnat pneuservis jinde. Tady vás nikdy neodmitne. Za mne 100% spokojenost"</p>
                <div class="testimonial-footer">
                    <div class="star-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p><strong>- Miroslav Sedlacek</strong></p>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Jezdím sem už 4 roky pravidelně přezouvat auto a maximální spokojenost."</p>
                <div class="testimonial-footer">
                    <div class="star-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p><strong>- Lukáš Grobarčík</strong></p>
                </div>
            </div>
            <div class="testimonial-item">
                <i class="bi bi-chat-quote"></i>
                <p>"Pneumatiky super, skvělý přístup, pokaždé dobře odvedená práce, všem vřele doporučuji!!!!"</p>
                <div class="testimonial-footer">
                    <div class="star-rating">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p><strong>- Nikola Bazantova</strong></p>
                </div>
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
                <p>
                    Jsme plátci daně
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
                <form id="contact-form" method="POST" action="send_email.php">
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
        <p>&copy; 2025 Grant Pneu. Všechna práva vyhrazena.</p>
        <p class="developer-credit">Vytvořil <a href="https://kadanka.vercel.app" target="_blank" rel="noopener noreferrer">Pavel Kadaňka</a></p>
    </footer>

    <script type="module" src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "AutoRepair",
            "name": "Grant Pneu",
            "image": "/public/prodejna.webp",
            "description": "Profesionální pneuservis v Pravlově nabízející kompletní služby pneuservisu, přezutí a opravy pneumatik.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pravlov 180",
                "addressLocality": "Pravlov",
                "postalCode": "664 64",
                "addressCountry": "CZ"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 49.052764387008786,
                "longitude": 16.479972175973586
            },
            "openingHours": "Mo-Fr 09:00-18:00",
            "telephone": "+420606123254",
            "priceRange": "$$",
            "email": ["grantpneu@seznam.cz", "info@grantpneu.cz"],
            "url": "https://grantpneu.cz",
            "sameAs": [
                "https://www.facebook.com/grantpneu",
                "https://www.instagram.com/grantpneu"
            ],
            "hasOfferCatalog": {
                "@type": "OfferCatalog",
                "name": "Pneuservisní služby",
                "itemListElement": [{
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Montáž pneumatik",
                            "description": "Kompletní pneuservis pro osobní i nákladní vozidla",
                            "price": "500",
                            "priceCurrency": "CZK"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Oprava pneumatik",
                            "description": "Opravy pneumatik všech typů",
                            "price": "1000",
                            "priceCurrency": "CZK"
                        }
                    },
                    {
                        "@type": "Offer",
                        "itemOffered": {
                            "@type": "Service",
                            "name": "Kompletní pneuservis",
                            "description": "Kompletní servisní služby pro vaše pneumatiky",
                            "price": "1200",
                            "priceCurrency": "CZK"
                        }
                    }
                ]
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "reviewCount": "5000"
            },
            "review": [{
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Jan Novák"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "5"
                    },
                    "reviewBody": "Skvělý servis a příjemný personál. Doporučuji!"
                },
                {
                    "@type": "Review",
                    "author": {
                        "@type": "Person",
                        "name": "Petra Dvořáková"
                    },
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": "5"
                    },
                    "reviewBody": "Rychlá a profesionální montáž pneumatik."
                }
            ],
            "areaServed": {
                "@type": "City",
                "name": "Pravlov",
                "containedInPlace": {
                    "@type": "AdministrativeArea",
                    "name": "Jihomoravský kraj"
                }
            },
            "paymentAccepted": ["cash", "credit card"],
            "currenciesAccepted": "CZK"
        }
    </script>
</body>

</html>