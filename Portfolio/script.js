const showFavoritglassButton = document.querySelector(
  '[data-js-action="visa-favoritglass"]',
); //min action - button i html som läggs i den nya konstanta variabeln

const favoritglassAnswer = document.querySelector(
  '[data-js-target="favoritglass-answer"]',
); //letar upp vart min target är i html, och lägger detta i en konst-variabel

showFavoritglassButton.addEventListener("click", function () {
  //Eventlistenern gör så att js reagerar när denna knapp (min data-js-action), används.
  const favoritglass = showFavoritglassButton.dataset.favoritglass;

  // TARGET - Visar nedanstående text + data där min 'target' ligger i html
  favoritglassAnswer.textContent = "Min favoritglass är " + favoritglass + "!";
});
