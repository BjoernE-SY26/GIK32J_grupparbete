const showFavoritglassButton = document.querySelector(
  '[data-js-action="show-favoritglass"]',
); //min action - button i html som läggs i den nya konstanta variabeln

const favoritglassAnswer = document.querySelector(
  '[data-js-target="favoritglass-answer"]',
); //letar upp vart min target är i html, och lägger detta i en konst-variabel

//if-sektionen gör så detta endast sker ifall glassknappen finns på sidan.
if (showFavoritglassButton && favoritglassAnswer) {
  //Eventlistenern gör så att js reagerar när denna knapp (min data-js-action), används.
  showFavoritglassButton.addEventListener("click", function () {
    const favoritglass = showFavoritglassButton.dataset.favoritglass;

    // TARGET - Visar nedanstående text + data där min 'target' ligger i html
    favoritglassAnswer.textContent =
      "Min favoritglass är " + favoritglass + "!";
  });
}

const showDinFavoritglassButton = document.querySelector(
  '[data-js-action="show-din-favoritglass"]',
); //min action - button i html som läggs i den nya konstanta variabeln

const dinFavoritglassAnswer = document.querySelector(
  '[data-js-target="din-favoritglass-answer"]',
); //letar upp vart min target är i html, och lägger detta i en konst-variabel

//if-sektionen gör så detta endast sker ifall glassknappen finns på sidan.
if (showDinFavoritglassButton && dinFavoritglassAnswer) {
  //Eventlistenern gör så att js reagerar när denna knapp (min data-js-action), används.
  showDinFavoritglassButton.addEventListener("click", function () {
    const dinFavoritglass = showDinFavoritglassButton.dataset.dinFavoritglass;

    // TARGET - Visar nedanstående text + data där min 'target' ligger i html
    dinFavoritglassAnswer.textContent =
      "Det är ju självklart att din favoritglass också är " +
      dinFavoritglass +
      "! Det finns ingen annan som kan vara favoriten!";
  });
}

//Submitt-knappen i index.html
/*
const showSubmitButton = document.querySelector(
  '[data-js-action="submitted-form"]',
);

const submittedAwnser = document.querySelector(
  '[data-js-target="submit-answer"]',
);

showSubmitButton.addEventListener("click", function () {
  const informationAfterSubmit =
    showSubmitButton.dataset.informationAfterSubmit;

  submittedAwnser.textContent = informationAfterSubmit;
}); */
