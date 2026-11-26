const showFavoritglassButton = document.querySelector(
  '[data-js-action="show-favoritglass"]',
); //min action - button i html som läggs i den nya konstanta variabeln

const favoritglassAnswer = document.querySelector(
  '[data-js-target="favoritglass-answer"]',
); //letar upp vart min target är i html, och lägger detta i en konst-variabel

//Eventlistenern gör så att js reagerar när denna knapp (min data-js-action), används.
showFavoritglassButton.addEventListener("click", function () {
  const favoritglass = showFavoritglassButton.dataset.favoritglass;

  // TARGET - Visar nedanstående text + data där min 'target' ligger i html
  favoritglassAnswer.textContent = "Min favoritglass är " + favoritglass + "!";
});

//Submitt-knappen
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
