
document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.querySelector('.menu-icon');
    const options = document.querySelector('.options');

    menuIcon.addEventListener('click', () => {
        options.classList.toggle('active');
    });
});

let backToTopBtn = document.querySelector('.back-to-top')

window.onscroll = () => {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        backToTopBtn.style.display = 'flex'
    } else {
        backToTopBtn.style.display = 'none'
    }
}


let menuItems = document.getElementsByClassName('menu-item')

Array.from(menuItems).forEach((item, index) => {
    item.onclick = (e) => {
        let currMenu = document.querySelector('.menu-item.active')
        currMenu.classList.remove('active')
        item.classList.add('active')
    }
})


let foodMenuList = document.querySelector('.food-item-wrap')

let foodCategory = document.querySelector('.food-category')

let categories = foodCategory.querySelectorAll('button')

Array.from(categories).forEach((item, index) => {
    item.onclick = (e) => {
        let currCat = foodCategory.querySelector('button.active')
        currCat.classList.remove('active')
        e.target.classList.add('active')
        foodMenuList.classList ='food-item-wrap '+ e.target.getAttribute('data-food-type')
    }
})


let scroll = window.requestAnimationFrame || function(callback) {window.setTimeout(callback, 1000/60)}

let elToShow = document.querySelectorAll('.play-on-scroll')

isElInViewPort = (el) => {
    let rect = el.getBoundingClientRect()

    return (
        (rect.top <= 0 && rect.bottom >= 0)
        ||
        (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    )
}

loop = () => {
    elToShow.forEach((item, index) => {
        if (isElInViewPort(item)) {
            item.classList.add('start')
        } else {
            item.classList.remove('start')
        }
    })

    scroll(loop)
}

loop()


let bottomNavItems = document.querySelectorAll('.mb-nav-objeto')

let bottomMove = document.querySelector('.mb-mover-objeto')

bottomNavItems.forEach((item, index) => {
    item.onclick = (e) => {
        console.log('object')
        let crrItem = document.querySelector('.mb-nav-objeto.active')
        crrItem.classList.remove('active')
        item.classList.add('active')
        bottomMove.style.left = index * 25 + '%'
    }
})