const navLinks = document.querySelectorAll(".nav a");
const navBar = document.querySelector(".header .nav");
let observer;
const slogan = document.querySelector('.slogan');
const heroBtn = document.querySelector('.hero-btn');
const aboutH1 = document.querySelector(".about h1");
const aboutContent = document.querySelector(".about .contents");
const services = document.querySelectorAll(".services .container .card");
window.onscroll=() => { 
    navBar.classList.remove("active");
    // remove active class from all anchor element
    navLinks.forEach((link) => {
        link.classList.remove("active");
    });
    const sections = document.querySelectorAll("section");
    sections.forEach((section) => {
        // iterate over all sections and attach active class with anchor element
        // whose contents are displayed in the browser currently
        let scrollPosition = window.scrollY;
        let secTotalHeight = section.offsetHeight - 100;
        let secDistFromParent = section.offsetTop - 100;
        let id = section.getAttribute("id");
        // secDistanceFromParent - scrollPosition - secTotalHeight + secDistanceFromParent
        if(scrollPosition >= secDistFromParent && scrollPosition < secTotalHeight + secDistFromParent
        ) {
            document.querySelector("header .nav a[href*=" + id + "]").classList.add("active");
        }
    });
};
window.onload = () => {
    // console.log(window.location.hash);
    switch (window.location.hash){
        case "#home":
            case "":
                selectNav('home');
                break;
        case "#about":
            selectNav('about');
            break;
        case "#services":
            selectNav('services');
            break;
        case "projects":
            selectNav('projects');
            break;
        case "contact":
            selectNav('contact');
            break; 
    }
    observer.observe(slogan);
    observer.observe(heroBtn);
    observer.observe(aboutContent);
    observer.observe(aboutH1);
    services.forEach((card) => {
        observer.observe(card);
    })
};

const hamBurger = document.querySelector(".header .hamburger");
hamBurger.onclick = () => {
    navBar.classList.toggle("active");

}

function selectNav(section){
    document.querySelector(`.header .nav a[href*=${section}`).classList.add("active");
    document.querySelector(`.${section}`).scrollIntoView();
}

observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        entry.target.classList.toggle("show", entry.isIntersecting);
    })
})
