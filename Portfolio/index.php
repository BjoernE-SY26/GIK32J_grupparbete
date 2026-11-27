
<?php
// Standardvärden för formulär och felmeddelanden
$name = $name ?? "";
$telefon = $telefon ?? "";
$email = $email ?? "";
$languages = $languages ?? [];
$subject = $subject ?? "Välj ett område";
$info = $info ?? "";
$contactMethod = $contactMethod ?? "";

$nameError = $nameError ?? "";
$telefonError = $telefonError ?? "";
$emailError = $emailError ?? "";
$languagesError = $languagesError ?? "";
$contactMethodError = $contactMethodError ?? "";

$hasErrors = $hasErrors ?? false;

// Kontrollera att languages är en array
if (!is_array($languages)) {
    $languages = [];
}

// Skydda informationen innan den skrivs ut
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$telefon = htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$info = htmlspecialchars($info, ENT_QUOTES, 'UTF-8');
$contactMethod = htmlspecialchars($contactMethod, ENT_QUOTES, 'UTF-8');

// Kontrollera vilka checkboxar som ska vara markerade
$javascriptChecked = in_array("JavaScript", $languages, true);
$pythonChecked = in_array("Python", $languages, true);
$phpChecked = in_array("PHP", $languages, true);
?>

<!doctype html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio – Mr. B</title>
    <meta
        name="description"
        content="Här finner du den samlade portfolion av arbeten som skrivits av Mr.B. under hans studietid i Borlänge."
    />
    <link rel="stylesheet" href="CSS/style.css" />
    <script src="JS/script.js" defer></script>
</head>

<body>
    <!-- En dold länk till main-content för navigering WCAG -->
    <a href="#main-content" id="skip-link">Hoppa till huvudinnehåll</a>

    <header class="header">
        <h1 class="header__title">Min portfolio</h1>

        <p class="header__intro">
            Välkommen! På denna samt länkande sidor, finner du mer information om
            mig samt mina framtida projekt.
        </p>

        <!-- Navigationsmenyn -->
        <nav class="nav" aria-label="Huvudnavigering">
            <ul class="nav__list">
                <li class="nav__item">
                    <a class="nav__link" href="#about-me">Om mig</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#contact">Kontakt</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="projekt.html">Projekt</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="kompetenser.html">Kompetenser</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="glass.html">glass</a>
                </li>
            </ul>
        </nav>
    </header>

    <main id="main-content">
        <section class="about-me" id="about-me">
            <h2 class="about-me__title">Om mig</h2>

            <p class="about-me__text">
                Jag (Mr.B), lär mig att skapa webbsidor med HTML och CSS. Här kan jag
                berätta lite om mig själv eller använda en påhittad presentation.
            </p>

            <p class="about-me__text">
                Mr.B går för närvarande första året på systemvetenskapliga programmet
                hos Högskolan Dalarna i Borlänge.
            </p>

            <p class="about-me__text">
                Mr.B Har för tillfället inget mer att tillägga i ärendet, återkom
                gärna efter en viss tid så ska du se att det finns mer material på
                sidan då!
            </p>

            <figure class="about-me__figure">
                <img
                    src="Bilder/Gemini_Generated_Image_Mr.B.jpeg"
                    alt="Bild: AI-genererad illustration av en mystisk man, skapad med Google Gemini (2026)."
                    width="400"
                    height="300"
                />

                <figcaption id="about-me__caption">
                    Siluett av en mystisk man, AI-genererad bild.
                </figcaption>
            </figure>
        </section>

        <section class="contact" id="contact">
            <h2 class="contact__title">Kontakt</h2>

            <p class="contact__text">
                För att få mer information om mig och mina tidigare arbeten, vänligen
                fyll i nedanstående så återkommer jag inom kort.
            </p>

            <form class="contact-form" action="controller.php" method="post">

                <?php if ($hasErrors): ?>
                    <!-- Generella felmeddelanden -->
                    <section class="contact-form__error-summary" aria-live="polite">
                        <h3>Något gick fel</h3>
                        <p>Kontrollera dessa punkter:</p>

                        <ul>
                            <?php if (!empty($nameError)): ?>
                                <li><?= htmlspecialchars($nameError, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endif; ?>

                            <?php if (!empty($telefonError)): ?>
                                <li><?= htmlspecialchars($telefonError, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endif; ?>

                            <?php if (!empty($emailError)): ?>
                                <li><?= htmlspecialchars($emailError, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endif; ?>

                            <?php if (!empty($languagesError)): ?>
                                <li><?= htmlspecialchars($languagesError, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endif; ?>

                            <?php if (!empty($contactMethodError)): ?>
                                <li><?= htmlspecialchars($contactMethodError, ENT_QUOTES, 'UTF-8') ?></li>
                            <?php endif; ?>
                        </ul>
                    </section>
                <?php endif; ?>

                <fieldset class="contact-form__fieldset">
                    <legend class="contact-form__legend">Fyll i nedanstående</legend>

                    <!-- Namn -->
                    <label class="contact-form__label" for="contact-name">
                        Namn:
                        <?php if (!empty($nameError)): ?>
                            <span class="contact-form__error">*</span>
                        <?php endif; ?>
                    </label>

                    <input
                        class="contact-form__input <?= !empty($nameError) ? 'contact-form__input--error' : '' ?>"
                        type="text"
                        id="contact-name"
                        name="name"
                        autocomplete="name"
                        value="<?= $name ?>"
                    />

                    <?php if (!empty($nameError)): ?>
                        <span class="contact-form__error">
                            <?= htmlspecialchars($nameError, ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>

                    <!-- Telefon -->
                    <label class="contact-form__label" for="contact-telefon">
                        Telefon:
                        <?php if (!empty($telefonError)): ?>
                            <span class="contact-form__error">*</span>
                        <?php endif; ?>
                    </label>

                    <input
                        class="contact-form__input <?= !empty($telefonError) ? 'contact-form__input--error' : '' ?>"
                        type="tel"
                        id="contact-telefon"
                        name="telefon"
                        autocomplete="tel"
                        value="<?= $telefon ?>"
                    />

                    <?php if (!empty($telefonError)): ?>
                        <span class="contact-form__error">
                            <?= htmlspecialchars($telefonError, ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>

                    <!-- E-post -->
                    <label class="contact-form__label" for="contact-email">
                        E-postadress:
                        <?php if (!empty($emailError)): ?>
                            <span class="contact-form__error">*</span>
                        <?php endif; ?>
                    </label>

                    <input
                        class="contact-form__input <?= !empty($emailError) ? 'contact-form__input--error' : '' ?>"
                        type="email"
                        id="contact-email"
                        name="email"
                        autocomplete="email"
                        value="<?= $email ?>"
                    />

                    <?php if (!empty($emailError)): ?>
                        <span class="contact-form__error">
                            <?= htmlspecialchars($emailError, ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>

                    <!-- Programmeringsspråk -->
                    <h3 class="contact-form__title">
                        Välj inom vilket/vilka kodspråk du vill få fler projekt-exempel
                        från:
                    </h3>

                    <?php if (!empty($languagesError)): ?>
                        <span class="contact-form__error">*</span>
                        <span class="contact-form__error">
                            <?= htmlspecialchars($languagesError, ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>

                    <label class="contact-form__label" for="contact-checkbox__js">
                        JavaScript:
                    </label>

                    <input
                        class="contact-form__checkbox <?= !empty($languagesError) ? 'contact-form__checkbox--error' : '' ?>"
                        type="checkbox"
                        id="contact-checkbox__js"
                        name="languages[]"
                        value="JavaScript"
                        <?= $javascriptChecked ? "checked" : "" ?>
                    />

                    <label class="contact-form__label" for="contact-checkbox__py">
                        Python:
                    </label>

                    <input
                        class="contact-form__checkbox <?= !empty($languagesError) ? 'contact-form__checkbox--error' : '' ?>"
                        type="checkbox"
                        id="contact-checkbox__py"
                        name="languages[]"
                        value="Python"
                        <?= $pythonChecked ? "checked" : "" ?>
                    />

                    <label class="contact-form__label" for="contact-checkbox__php">
                        PHP:
                    </label>

                    <input
                        class="contact-form__checkbox <?= !empty($languagesError) ? 'contact-form__checkbox--error' : '' ?>"
                        type="checkbox"
                        id="contact-checkbox__php"
                        name="languages[]"
                        value="PHP"
                        <?= $phpChecked ? "checked" : "" ?>
                    />

                    <!-- Ämnesområde -->
                    <h3 class="contact-form__title">
                        Vilken information är du intresserad av?
                    </h3>

                    <label for="contact-subject">Välj ett område</label>

                    <select id="contact-subject" name="subject">
                        <option value="Välj ett område"
                            <?= $subject === "Välj ett område" ? "selected" : "" ?>>
                            Välj ett område
                        </option>

                        <option value="Syntax"
                            <?= $subject === "Syntax" ? "selected" : "" ?>>
                            Syntax
                        </option>

                        <option value="Loopar"
                            <?= $subject === "Loopar" ? "selected" : "" ?>>
                            Loopar
                        </option>

                        <option value="Debugging"
                            <?= $subject === "Debugging" ? "selected" : "" ?>>
                            Debugging
                        </option>
                    </select>

                    <!-- Information -->
                    <h3 class="contact-form__title">
                        Beskriv vad du mer skulle vilja veta:
                    </h3>

                    <label class="contact-form__label--hide" for="contact-info">
                        Fyll i textrutan:
                    </label>

                    <textarea
                        rows="5"
                        cols="50"
                        class="contact-form__input"
                        id="contact-info"
                        name="info"
                    ><?= $info ?></textarea>

                    <!-- Kontaktmetod -->
                    <h3 class="contact-form__title">Hur vill du bli kontaktad?</h3>

                    <?php if (!empty($contactMethodError)): ?>
                        <span class="contact-form__error">*</span>
                        <span class="contact-form__error">
                            <?= htmlspecialchars($contactMethodError, ENT_QUOTES, 'UTF-8') ?>
                        </span>
                    <?php endif; ?>

                    <input
                        type="radio"
                        class="contact-form__radio <?= !empty($contactMethodError) ? 'contact-form__radio--error' : '' ?>"
                        id="contact-method-email"
                        name="contact-method"
                        value="E-post"
                        <?= $contactMethod === "E-post" ? "checked" : "" ?>
                    />

                    <label for="contact-method-email">E-post</label>

                    <input
                        type="radio"
                        class="contact-form__radio <?= !empty($contactMethodError) ? 'contact-form__radio--error' : '' ?>"
                        id="contact-method-phone"
                        name="contact-method"
                        value="Telefon"
                        <?= $contactMethod === "Telefon" ? "checked" : "" ?>
                    />

                    <label for="contact-method-phone">telefon</label>

                    <!-- Skicka formuläret -->
                    <button
                        class="contact-form__submit"
                        type="submit"
                        data-js-action="submitted-form"
                        data-information-after-submit="Tack för visat intresse"
                    >
                        Skicka
                    </button>
                </fieldset>

                <p
                    class="contact-form__answer"
                    data-js-target="submit-answer"
                    aria-live="polite"
                ></p>
            </form>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__text">Min portfolio – en övning i HTML och CSS.</p>

        <address class="footer__mailto">
            <a
                class="footer__mailto-link"
                href="mailto:h26isago@du.se?subject=reader feedback"
            >Mejla vid frågor:h26isago@<!--minmejl-->du.se</a>
        </address>
    </footer>
</body>
</html>
