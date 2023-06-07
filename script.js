const ramenArray = [
    {
      name: "Spicy Beef Ramen",
      image: "/images/spicy-beef-ramen.png",
      detail: "A robust dish that will awaken your senses.",
      price: "P500"
    },
    {
      name: "Hokkaido Miso Ramen",
      image: "/images/hokkaido-miso-ramen.png",
      detail: "A delectable and savory dish originating from the northernmost island of Japan, Hokkaido.",
      price: "P560"
    },
    {
      name: "Black Garlic Chicken Ramen",
      image: "/images/black-garlic-chicken-ramen.png",
      detail: "A captivating and aromatic twist on the traditional Japanese noodle dish.",
      price: "P520"
    }
];


let currentRamenIndex = 1;
const ramenImages = document.querySelectorAll(".menu-images img");
const ramenName = document.querySelector(".ramen-name");
const leftArrow = document.querySelector(".arrow-1");
const rightArrow = document.querySelector(".arrow-2");
const ramenDetail = document.querySelector("#ramen-detail");
const ramenPrice = document.querySelector("#ramen-price");

leftArrow.addEventListener("click", () => {
  currentRamenIndex = (currentRamenIndex - 1 + ramenArray.length) % ramenArray.length;
  updateRamen();
});

rightArrow.addEventListener("click", () => {
  currentRamenIndex = (currentRamenIndex + 1) % ramenArray.length;
  updateRamen();
});

function updateRamen() {
    const currentIndex = Array.from(ramenImages).findIndex(img => img.classList.contains('active'));
    const prevIndex = (currentRamenIndex - 1 + ramenArray.length) % ramenArray.length;
    const nextIndex = (currentRamenIndex + 1) % ramenArray.length;
  
    ramenImages[0].src = ramenArray[prevIndex].image;
    ramenImages[1].src = ramenArray[currentRamenIndex].image;
    ramenImages[2].src = ramenArray[nextIndex].image;
  
    ramenName.innerText = ramenArray[currentRamenIndex].name;
    ramenDetail.innerText = ramenArray[currentRamenIndex].detail;
    ramenPrice.innerText = ramenArray[currentRamenIndex].price;
  
    const menu1 = document.querySelector(".menu-1");
    const menu2 = document.querySelector(".menu-2");
    const menu3 = document.querySelector(".menu-3");
  
    if (currentRamenIndex === 0) {
      menu1.style.transform = "translateX(0)";
      menu2.style.transform = "translateX(0)";
      menu3.style.transform = "translateX(0)";
    } else if (currentRamenIndex === 1) {
        menu1.style.transform = "translateX(0)";
        menu2.style.transform = "translateX(0)";
        menu3.style.transform = "translateX(0)";
    } else {
        menu1.style.transform = "translateX(0)";
        menu2.style.transform = "translateX(0)";
        menu3.style.transform = "translateX(0)";
    }
  
    ramenImages.forEach(img => img.classList.remove('active'));
    ramenImages[1].classList.add('active');
  }
  