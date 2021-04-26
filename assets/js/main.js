function changeActiveItem() {
  var menuEl1 = document.getElementById("buy-menu-1");
  var menuEl2 = document.getElementById("buy-menu-2");
  var buyWindow = document.querySelector(".buy__window");
  var buyBox = document.querySelector(".buy__bigbox");
  var findOffices = document.querySelector("#cantors-list-application");

  var h = document.querySelector("#window").offsetHeight;
  var map = document.querySelector("#map");

  window.addEventListener("resize", reportWindowSize);
  function reportWindowSize() {
    h = document.querySelector("#window").offsetHeight;
    buyWindow.style.height = `${h + 50}px`;
    map.style.height = `${h}px`;
  }

  h = document.querySelector("#window").offsetHeight;
  buyWindow.style.height = `${h + 50}px`;
  map.style.height = `${h}px`;

  menuEl1.addEventListener("click", (el) => toggle(el), true);
  menuEl2.addEventListener("click", (el) => toggle(el), true);

  function toggle(el) {
    if (!el.target.classList.contains("active")) {
      //if first element clicked
      if (el.target.id == "buy-menu-1") {
        buyBox.style.transform = "translateY(0)";
        menuEl2.classList.toggle("active");
      }
      //if second element clicked
      else {
        buyBox.style.transform = `translateY(-${h}px`;
        menuEl1.classList.toggle("active");

        h = document.querySelector("#window").offsetHeight;
        buyWindow.style.height = `${h + 50}px`;
        map.style.height = `${h}px`;
        findOffices.style.display = `block`;
      }
      el.target.classList.toggle("active");
    }
  }
}

changeActiveItem();
