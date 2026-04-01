// Change hero background image when arrow is clicked
let images = [
    "assets/Hero1.jpg",
    "assets/Hero2.jpg"
];

let currentIndex = 0;

function nextImage() {
    currentIndex++;

    if (currentIndex >= images.length) {
        currentIndex = 0;
    }

    document.getElementById("home").style.backgroundImage =
        "url('" + images[currentIndex] + "')";

    playSound(); 
}

function addItem(item) {
    alert(item + " added to your order!");
    playSound();
}

// Shows membership form
// Returns to contact view
let showingFullMenu = false;

function toggleMenu() {
    let img = document.getElementById("menuImage");

    if (!showingFullMenu) {
        img.src = "assets/FullMenu.png"; 
    } else {
        img.src = "assets/SmallBites.jpg";
    }

    showingFullMenu = !showingFullMenu;

    playSound();
}

// Toggles between small bites image and full menu image
function showMemberForm() {
    document.getElementById("contactView").style.display = "none";
    document.getElementById("memberForm").style.display = "block";

    playSound();
}

function goBack() {
    document.getElementById("memberForm").style.display = "none";
    document.getElementById("contactView").style.display = "block";

    playSound();
}

function submitForm() {
    alert("Welcome to Kaya Café community!");
    playSound();
}
function playSound() {
    document.getElementById("clickSound").play();
}

document.getElementById("changeTextBtn").addEventListener("click", function () {
    document.getElementById("aboutText").textContent =
        "Kaya Café is a warm, community-driven space inspired by culture and connection.";
});

document.getElementById("addItemBtn").addEventListener("click", function () {

// Simulates adding a menu item (user feedback)
    let newItem = document.createElement("div");
    newItem.classList.add("card");

    newItem.innerHTML = `
        <h3>Special Brew</h3>
        <p>Limited edition coffee.</p>
    `;

    document.querySelector(".menu-container").appendChild(newItem);
});

// Toggles dark mode and saves preference
let btn = document.getElementById("darkModeBtn");

btn.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");

    
    localStorage.setItem("theme", document.body.classList.contains("dark-mode"));
});

window.onload = function () {
    if (localStorage.getItem("theme") === "true") {
        document.body.classList.add("dark-mode");
    }
};

// Loads saved theme on page load
let hero = document.getElementById("heroImage");

hero.addEventListener("mouseover", function () {
    hero.style.opacity = "0.7";
});

hero.addEventListener("mouseleave", function () {
    hero.style.opacity = "1";
});

document.getElementById("contactForm").addEventListener("submit", function (e) {

    let email = document.getElementById("email").value;

    if (!email.includes("@")) {
        alert("Please enter a valid email!");
        e.preventDefault();
    }
});
    