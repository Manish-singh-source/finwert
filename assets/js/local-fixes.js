(function () {
  "use strict";

  function hidePreloader() {
    var preloader = document.querySelector(".preloader");
    if (!preloader) return;
    preloader.classList.add("preloader-hide");
    window.setTimeout(function () {
      preloader.style.display = "none";
    }, 350);
  }

  function showStaticSlidesWhenNeeded() {
    if (window.Swiper) return;
    document.querySelectorAll(".swiper").forEach(function (slider) {
      slider.classList.add("swiper-static");
    });
  }

  function startHeroTyping() {
    var typingText = document.querySelector(".finwert-typing-text");
    if (!typingText) return;

    var phrases = (typingText.getAttribute("data-typing-phrases") || "")
      .split("|")
      .map(function (phrase) { return phrase.trim(); })
      .filter(Boolean);
    if (!phrases.length) return;

    if (window.matchMedia && window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
      typingText.textContent = phrases[0];
      return;
    }

    var phraseIndex = 0;
    var characterIndex = phrases[0].length;
    var deleting = true;

    function typeNext() {
      var phrase = phrases[phraseIndex];

      if (deleting) {
        characterIndex -= 1;
      } else {
        characterIndex += 1;
      }

      typingText.textContent = phrase.substring(0, characterIndex);

      if (!deleting && characterIndex === phrase.length) {
        deleting = true;
        window.setTimeout(typeNext, 1800);
        return;
      }

      if (deleting && characterIndex === 0) {
        phraseIndex = (phraseIndex + 1) % phrases.length;
        deleting = false;
        window.setTimeout(typeNext, 350);
        return;
      }

      window.setTimeout(typeNext, deleting ? 55 : 85);
    }

    window.setTimeout(typeNext, 1200);
  }

  document.addEventListener("DOMContentLoaded", function () {
    window.setTimeout(hidePreloader, 1200);
    showStaticSlidesWhenNeeded();
    startHeroTyping();
  });

  window.addEventListener("load", function () {
    window.setTimeout(hidePreloader, 300);
  });
})();
