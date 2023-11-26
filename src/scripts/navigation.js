let card = "whoops";
let transID = "oh no";

//hell yeah it fucking works lets gooooo

function transition() {
  document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", (e) => {
      deactivate();
      const el = e.currentTarget;

      //note: not useful when going back home
      card = el.parentElement;

      const transHeader = document.getElementsByClassName("transHeader");

      //Prevent transheader from being null while reading ID
      if (transHeader.length > 0) {
        transID = document.querySelector(".transHeader").id;
      }

      //only useful when going back home

      if (card.classList.contains("cat")) {
        card.style.viewTransitionName = "active-card";
      }
    });
  });
  card = document.getElementById(transID);
  if (card != null) {
    card.style.viewTransitionName = "active-card";
  }
}

//remove active-card name when done transitioning

function deactivate() {
  if (card != null) {
    card.style.viewTransitionName = "";
  }
}

transition();
document.addEventListener("astro:after-swap", transition);
document.addEventListener("astro:page-load", deactivate);
