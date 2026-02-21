let headerBlock = document.getElementById('header');
let toggle_btn = document.getElementById('toggler');
let navContainer = document.getElementById('navBox');
let coverScreen = document.getElementById('coverScreen');
let navlinkArr = document.querySelectorAll('navlink-li');
let card = document.querySelectorAll('card');
console.log(navlinkArr);
let navClassList = navContainer.classList;

coverScreen.addEventListener('click', function() {
    toggle_btn.classList.remove('hidden');
    navClassList.remove('block');
    navClassList.add('hidden');
    coverScreen.classList.add('hidden');
    coverScreen.classList.remove('block');
    document.querySelector('body').classList.remove('h-full');
    document.querySelector('body').classList.remove('overflow-hidden');
});

// Card Fixing the bug where click on card doesn't remove coverScreen
for (let i = 0; i < card.length; i++) {
    card[i].addEventListener('click', function() {
        toggle_btn.classList.remove('hidden');
        navClassList.remove('block');
        navClassList.add('hidden');
        coverScreen.classList.add('hidden');
        coverScreen.classList.remove('block');
        document.querySelector('body').classList.remove('h-full');
        document.querySelector('body').classList.remove('overflow-hidden');
    })
}

toggle_btn.addEventListener('click', function() {
    if (navContainer.className.match("hidden")) {
        toggle_btn.classList.add('hidden');
        navClassList.add('block');
        navClassList.remove('hidden');
        coverScreen.classList.remove('hidden');
        coverScreen.classList.add('block');
        document.querySelector('body').classList.add('h-full');
        document.querySelector('body').classList.add('overflow-hidden');
    }
});
