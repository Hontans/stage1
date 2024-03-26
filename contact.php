<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Stage macket</title>

        <link rel="stylesheet" href="style.css" />
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
            <div class="container">
                <div class="description-textuelle text-center">
                    <h4>Contactez-nous</h4>
                    <img src="/images/pin.png" class="pinsau" />
                    <h5 class="margin-bottom-700">Vous avez une question ?</h5>
                    <img src="/images/palet.png" class="palette" />
                    <p data-width="wide">
                        Nous sommes disponibles du lundi au vendredi. Notre
                        service client vous répondra dans les plus brefs délais.
                    </p>
                </div>
                <form action="index.php" class="text_field">
                    <div>
                        <label for="fullname" class="sr-only">
                            Nom complet
                        </label>
                        <input 
                            id="fullname"
                            type="text"
                            name="fullname"
                            placeholder="Name"
                            class="Name"
                            required
                        />
                    </div>
                    <div>
                        <label for="email" class="sr-only">Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Email"
                            class="Email"
                            required 
                        />
                    </div>
                    <div>
                        <label for="message" class="sr-only">
                            Message
                        </label>
                        <textarea 
                            id="message"
                            type="text"
                            name="message"
                            placeholder="Message"
                            class="Message"
                            required
                        ></textarea>
                    </div>
                    <button type="submit" class="button">Envoyer</button>
                </form>
            </div>
        </main>
    </body>
</html>
