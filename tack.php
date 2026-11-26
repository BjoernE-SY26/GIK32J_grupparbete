<!doctype html>
<html lang="sv">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tack för din förfrågan</title>
    <meta
      name="description"
      content="Tack för att du kontaktade mig."
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

    <header class="header">
      <h1 class="header__title">Tack för din förfrågan!</h1>
      <p class="header__intro">
        Tack för att du tog dig tid att kontakta mig.
      </p>
    </header>

    <main>
      <section class="thank-you">
        <h2 class="thank-you__title">Dina uppgifter</h2>

        <p class="thank-you__text">
          Tack, <?php echo htmlspecialchars($name); ?>!
          Jag har tagit emot din förfrågan.
        </p>

        <p>
          Jag återkommer till dig via
          <?php echo htmlspecialchars($contactMethod); ?>.
        </p>

        <a href="index.php">Tillbaka till startsidan</a>
      </section>
    </main>

    <footer class="footer">
      <p class="footer__text">
        Min portfolio – en övning i HTML och CSS.
      </p>
    </footer>

  </body>
</html>