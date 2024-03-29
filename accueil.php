<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="Your name" />
    <meta name="description" content="Brief description" />

    <meta property="og:title" content="Your Page Title" />
    <meta property="og:description" content="Brief description" />
    <meta property="og:image" content="/some-image.png" />
    <meta property="og:url" content="/this-page.html" />
    <meta property="og:site_name" content="Your Site Name" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image:alt" content="image description" />

    <title>Stage maquette - Home</title>

    <link href="style.css" rel="stylesheet" />

    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
</head>
<body>
<header class="primary-header" data-visible>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#">
                <img src="images/123.webp" class="logo" />
            </a>
            <button
                    class="mobile-nav-toggle"
                    aria-controls="primary-navigation"
            >
                <img
                        class="icon-hamburger"
                        src="images/icon-hamburger.svg"
                        alt=""
                        aria-hidden="true"
                />
                <img
                        class="icon-close"
                        src="images/icon-close.svg"
                        alt=""
                        aria-hidden="true"
                />
                <span class="sr-only">Menu</span>
            </button>
            <nav class="primary-navigation">
                <ul
                        aria-label="Primary"
                        class="nav-list"
                        role="list"
                        id="primary-navigation"
                >
                    <li><a href="/accueil.php">Accueil</a></li>
                    <li><a href="#">Suivi de commande</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                </ul>
            </nav>
            <button
                    class="button | display-md-inline-flex display-sm-none"
            >
                Commander en Ligne
            </button>
        </div>
    </div>
</header>

<main>
    <section class="hero | padding-block-900">
        <div class="container">
            <div class="hero__title | margin-bottom-700">
                <h1 class="text-center fs-primary-heading">
                    How to Prepare your files to Print?
                </h1>
                <img
                        class="icon-pen display-sm-none display-md-inline-flex animate-cube"
                        src="images/pin.png"
                        alt="pen"
                />
                <img
                        class="icon-palette display-sm-none display-md-inline-flex animate-cube"
                        src="images/palet.png"
                        alt="palette"
                />
            </div>

            <div class="even-columns" style="--flow-spacer: 0.875rem">
                <div class="card">
                    <div class="card_info flow">
                        <h3>Suivi de commande</h3>
                        <p>
                            Choisissez le format de vos transferts et
                            importez vos fichiers prêts pour
                            l'impression.
                        </p>
                        <a
                                href="#"
                                class="button"
                                data-type="inverted"
                                data-glow="none"
                        >
                            Order now
                        </a>
                    </div>
                </div>

                <div class="card" data-inverse="true">
                    <div class="card_info | flow text-center">
                        <h3>Suivi de commande</h3>
                        <p>
                            Choisissez le format de vos transferts et
                            importez vos fichiers prêts pour
                            l'impression.
                        </p>
                        <a
                                href="#"
                                class="button"
                                data-type="inverted"
                                data-glow="none"
                        >
                            Order now
                        </a>
                    </div>
                </div>

                <div class="card">
                    <div class="card_info | flow text-center">
                        <h3>Suivi de commande</h3>
                        <p>
                            Choisissez le format de vos transferts et
                            importez vos fichiers prêts pour
                            l'impression.
                        </p>
                        <a
                                href="#"
                                class="button"
                                data-type="inverted"
                                data-glow="none"
                        >
                            Order now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-block-900">
        <div class="container">
            <h2 class="text-center fs-primary-heading fw-bold">
                Comment espace d'impression travail ?
            </h2>
            <div class="even-columns">
                <div class="card2_info">
                    <div class="logo_1">
                        <img src="images/Frame.svg" alt="logo" />
                    </div>
                    <h3>Choisissez</h3>
                    <p>
                        Choisissez le format de vos transferts et
                        importez vos fichiers prêts pour l'impression.
                    </p>
                </div>

                <div class="card2_info">
                    <div class="logo_2">
                        <img src="images/Frame1.svg" alt="logo" />
                    </div>
                    <h3>Commandez</h3>
                    <p>
                        Commandez vos impressions DTF personnalisées en
                        fonction de vos délais et de vos besoins
                        quantitatifs.
                    </p>
                </div>

                <div class="card2_info">
                    <div class="logo_3">
                        <img src="images/Frame3.svg" alt="logo" />
                    </div>
                    <h3>Customizable Templates</h3>
                    <p>
                        Helps business owners worldwide make beautiful
                        invoices, look professional ona get solo roster
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<footer
        class="primary-footer | padding-block-700 bg-neutral-900 text-neutral-100"
>
    <div class="container">
        <div class="primary-footer-wrapper">
            <a href="#" aria-label="home">
                <img class="logo" src="/images/123.webp" alt="" />
            </a>
            <ul
                    class="social-list"
                    role="list"
                    aria-label="social links"
            >
                <li>
                    <a aria-label="facebook" href="#">
                        <svg class="social-icon">
                            <use
                                    xlink:href="images/social-icons.svg#icon-facebook"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a aria-label="twitter" href="#">
                        <svg class="social-icon">
                            <use
                                    xlink:href="images/social-icons.svg#icon-twitter"
                            />
                        </svg>
                    </a>
                </li>
                <li>
                    <a aria-label="instagram" href="#">
                        <svg class="social-icon">
                            <use
                                    xlink:href="images/social-icons.svg#icon-instagram"
                            />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <hr />

        <div class="even-columns padding-block-600">
            <div class="primary-footer-form">
                <form action="" method="">
                    <label for="email">
                        Subscribe now to get latest updates
                    </label>
                    <input
                            id="email"
                            name="email"
                            type="email"
                            placeholder="enter your email"
                    />
                    <button class="button" data-glow="none">
                        subscribe now
                    </button>
                </form>
            </div>

            <div class="primary-footer-nav">
                <nav class="footer-nav">
                    <ul
                            class="flow"
                            style="--flow-spacer: 1rem"
                            data-spacing="tight"
                            aria-label="Footer"
                            role="list"
                    >
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Suivi de commande</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Mon compte</a></li>
                        <li><a href="#">Mes commandes</a></li>
                        <li><a href="#">Mes adresses</a></li>
                        <li><a href="#">Mes factures</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <hr />

        <p class="padding-block-300">
            Copyright 2022. All Rights Reserved
        </p>
    </div>
</footer>
</body>
</html>