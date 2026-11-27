```php
<?php
// Skydda informationen innan den skrivs ut
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$telefon = htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$info = htmlspecialchars($info, ENT_QUOTES, 'UTF-8');
$contactMethod = htmlspecialchars($contactMethod, ENT_QUOTES, 'UTF-8');

// Hantera programmeringsspråken
$languagesDisplay = "";

if (is_array($languages) && !empty($languages)) {
    $languagesDisplay = htmlspecialchars(
        implode(", ", $languages),
        ENT_QUOTES,
        'UTF-8'
    );
} else {
    $languagesDisplay = "Inga språk valda";
}
?>

<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack för ditt meddelande</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <section class="thank-you">
            <h1 class="thank-you__title">Tack för ditt meddelande!</h1>

            <p class="thank-you__text">
                Dina uppgifter har skickats in.
            </p>

            <h2 class="thank-you__subtitle">
                Sammanfattning av dina uppgifter
            </h2>

            <ul class="thank-you__list">
                <li>Namn: <?= $name ?></li>
                <li>Telefon: <?= $telefon ?></li>
                <li>E-post: <?= $email ?></li>
                <li>Programmeringsspråk: <?= $languagesDisplay ?></li>
                <li>Ämne: <?= $subject ?></li>
                <li>Önskad kontaktmetod: <?= $contactMethod ?></li>
                <li>Övrig information: <?= $info ?></li>
            </ul>

            <a class="thank-you__link" href="index.php">
                Tillbaka till startsidan
            </a>
        </section>
    </main>
</body>
</html>
