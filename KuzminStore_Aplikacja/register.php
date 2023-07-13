<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UACompatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KuzminStore</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>    

<body>

    <section id="header">
        <a href="#"><img src="img/logo.png" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="active" href="cart.html">Cart</a></li>
                <li><a href="#" id="cart-icon">@</a></li>
                <a href="#" id="close">x</i></a>
            </ul>

            <div class="cart">
                <h3 class="cart-title">Twoja karta</h3>
                <div class="cart-content">
                </div>

                <div class="total">
                    <div class="total-title">calość</div>
                    <div class="total-price">$0</div>
                </div>
                <button type="button" class="btn-buy">kup</button>
                <div class="x" id="close-cart">x</div>
            </div>
        </div>
        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>

    </section>

    <section id="page-header">
        <h2>#Logowanie</h2>
        <p>Szybkie logowanie</p>
    </section>

    <section class="register">

        <input type="text" placeholder="wpisz maila">
        <a href="">login</a>

        
    </section>

    <section id="newsletter" class="section-p1 section-m1" >
        <div class="newstext">
            <h4>Wpisz E-maila po kolejną dawkę nowości</h4>
            <p>w przypadku nowej kolecji dostaniesz <span>specjalną ofertę</span> </p>
        </div>

        <div class="form">
            <input type="text" placeholder="E-mail">
            <button class="normal">Wpisz się</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" class="logo" alt="">
            <h4>Kontakt</h4>
            <p><strong>Adres: </strong>Dziewicza 86, Szczecin, 70-574, Polska</p>
            <p><strong>Telefon: </strong>+48546678987</p>
            <p><strong>Godziny: </strong>9:00-17:00, Pn-pt</p>
        </div>

        <div class="col">
            <h4>O firmie</h4>
            <a href="#">Coś o nas</a>
            <a href="#">Dostawa</a>
            <a href="#">Polityka prywatności</a>
            <a href="#">Kontakt</a>
        </div>

        <div class="col">
            <h4>Moje konto</h4>
            <a href="#">Zaloguj się</a>
            <a href="#">Koszyk</a>
            <a href="#">Pomoc</a>
        </div>

        <div class="copyright">
            <p>@ 2023, KuzminStore Praca Iżynierska 2023</p>
        </div>

    </footer>

    <script src="script.js"></script>  
    <script src="script1.js"></script>    
    </body>
</html>


