// Code pour l'animation d'apparition au défilement

document.addEventListener("DOMContentLoaded", (event) => {
    const ratio = .05
const options = {
    root: null,
    rootMargin: '1px',
    threshold: ratio,
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('revealVisible')
            observer.unobserve(entry.target)
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);

document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
})

// Code pour curseur

const cursor = document.querySelector('.cursor')

document.addEventListener('mousemove', e => {
    cursor.setAttribute('style', 'top:' + (e.pageY - 40) + 'px; left:' + (e.pageX - 40) + 'px;')
})

// Burger Menu

var sidenav = document.getElementById("mySideNav")
var openBtn = document.getElementById("openBtn")
var closeBtn = document.getElementById("closeBtn")
var isOpen;

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

document.addEventListener('mousemove', e => {
    if (e.pageX < 10){
        openNav()
    }
})

document.addEventListener('mousemove', e => {
    if (e.pageX > 350){
        closeNav()
    }
})

function openNav() {
    sidenav.classList.add("active")
    setTimeout(() => {
        openBtn.setAttribute('style', 'display : none')
      }, 90);
    
    isOpen = true
    
}


function closeNav() {
    sidenav.classList.remove("active")
    setTimeout(() => {
        openBtn.setAttribute('style', 'display : block')
      }, 220);
    isOpen = false
}

// Gestion Cookies

let cookieModal = document.querySelector('.cookieConsentModal')
let cancelCookieBtn = document.querySelector('.cookieBtn.refuser')
let acceptCookieBtn = document.querySelector('.cookieBtn.accepter')

cancelCookieBtn.addEventListener("click", function () {
    cookieModal.classList.remove('active')
})

acceptCookieBtn.addEventListener("click", function () {
    cookieModal.classList.remove('active')
    localStorage.setItem('cookieAccepted', 'Yes')
})


setTimeout(function(){
    let cookieAccepted = localStorage.getItem('cookieAccepted')
    if (cookieAccepted != "Yes"){
        cookieModal.classList.add('active')
    }

}, 2500)

});

