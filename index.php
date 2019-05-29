<html>
<head>
    <title>Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="includes/normalise.css">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<header class="background center">
    <div>
        <img class="imga" src="images/microsoftwhite.png" alt="logo">
    </div>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
</header>
<main>
    <section class="background retract">
        <div class="wrapper height">
            <h1 class="border">
                Hello
            </h1>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 retract">
        <div class="wrapper height">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 flex">
        <div class="imgb flex3">

        </div>
        <div class="retract flex2">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 flex">
        <div class="imgb flex3">

        </div>
        <div class="retract flex2">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 flex">
        <div class="imgb flex3">

        </div>
        <div class="retract flex2">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 flex">
        <div class="imgb flex3">

        </div>
        <div class="retract flex2">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2 flex">
        <div class="imgb flex3">

        </div>
        <div class="retract flex2">
            <h2 class="border2">
                Hello
            </h2>
            <p>
                This can be a lot of text
            </p>
        </div>
    </section>
    <section class="background2">
        <form method="post" class="retract wrapper">
            <div>
                <h2 class="border2">
                    Add Employee
                </h2>
            </div>
            <label for="name">NAME:</label>
            <input class="inputconfig" type="text" id="name" name="name" placeholder="Vytenis">
            <label for="email">EMAIL:</label>
            <input class="inputconfig" type="email" id="email" name="email" placeholder="aparance@gmail.com">
            <label for="phone">PHONE:</label>
            <input class="inputconfig" type="number" id="phone" name="phone" placeholder="862020619">
            <label for="code">4 + 3</label>
            <input class="inputconfig" type="number" id="code" name="calculation">
            <button type="submit" name="submit">ADD EMPLOYEE</button>
        </form>
    </section>
    <section class="background2">
        <div class="retract wrapper">
            <table>
                <h2 class="border2">
                    Employee Table
                </h2>
                <tr>
                    <th>Vardas</th>
                    <th>El. paštas</th>
                    <th>Telefonas</th>
                </tr>
                <tr>
                    <td>Petras</td>
                    <td>petras@mozilla.lt</td>
                    <td>867574401</td>
                </tr>
                <tr>
                    <td>Petras</td>
                    <td>petras@mozilla.lt</td>
                    <td>867574401</td>
                </tr>
                <tr>
                    <td>Petras</td>
                    <td>petras@mozilla.lt</td>
                    <td>867574401</td>
                </tr>
                <tr>
                    <td>Petras</td>
                    <td>petras@mozilla.lt</td>
                    <td>867574401</td>
                </tr>
            </table>
        </div>
    </section>
    <section class="background2">
        <div class="flex4 wrapper push">
            <div class="flex5">
                <form class="retract2">
                    <label for="name2">Full name:</label>
                    <input class="inputconfig" type="text" id="name2" name="name" placeholder="Vytenis">
                    <label for="email2">Email:</label>
                    <input class="inputconfig" type="email" id="email2" name="email" placeholder="aparance@gmail.com">
                    <label for="message">Message:</label>
                    <textarea id="message" placeholder="Your message..."></textarea>
                    <input class="bottun2" type="submit" name="submit" value="send!">
                    <input class="bottun2" type="reset" name="reset" value="cleaer">
                </form>
            </div>
            <div class="retract2 flex5">
                <div class="sizing">
                    <div class="inline2 icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="inline">
                        <h3>
                            Phone
                        </h3>
                        37067574401
                    </div>
                </div>
                <div class="sizing">
                    <div class="inline2 icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="inline">
                        <h3>
                            Address
                        </h3>
                        info@info.lt
                    </div>
                </div>
                <div class="sizing">
                    <div class="inline2 icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="inline">
                        <h3>
                            Address
                        </h3>
                        Mindaugo str. 16
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    Copyright © Petras Slekys
</footer>
</body>
</html>