let menuIcon = document.querySelector('#menu-icon')
let navbar = document.querySelector('.navbar')

menuIcon.onclick = () =>{
    menuIcon.classList.toggle('bx-x')
    navbar.classList.toggle('active')
}

let sections = document.querySelectorAll('section')
let navLinks = document.querySelectorAll('header nav a')

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY
        let offset = sec.offsetTop - 150
        let height = sec.offsetHeight
        let id = sec.getAttribute('id')

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active')
                document.querySelector('header nav a[href *= ' + id + ']').classList.add('active')
            })
        }
    })

    let header = document.querySelector('header')

    header.classList.toggle('sticky', window.scrollY > 100)

    menuIcon.classList.remove('bx-x')
    navbar.classList.remove('active')
}

ScrollReveal({ 
    reset: true,
    distance: '80px',
    duration: 1500,
    delay: 150
});
ScrollReveal().reveal('.home-content, .heading', { origin: 'top'});
ScrollReveal().reveal('.home-img, .video-container, .projects-box, .contact form', { origin: 'bottom'});
ScrollReveal().reveal('.home-content h1, .about-img', { origin: 'left'});
ScrollReveal().reveal('.home-content p, .about-content', { origin: 'right'});

let btns = document.querySelectorAll('button')
let vid = document.querySelector('iframe')
let text = document.getElementById('filmabout')

let v1 = document.getElementById('1').id
let v2 = document.getElementById('2').id
let v3 = document.getElementById('3').id
let v4 = document.getElementById('4').id
let v5 = document.getElementById('5').id

btns.forEach(btn =>{
    btn.onclick = () =>{
        btn.classList.add('active')
        btns.forEach(btnn =>{
            if(btnn != btn){
                btnn.classList.remove('active')
            }
        })
        if(btn.id == v1){
            vid.src = 'https://www.youtube-nocookie.com/embed/qKoe69-xy4M?start=1'
            
            text.innerHTML = 'This is a movie that would have benefitted from being a whole lot stupider. The big-budget sci-fi flick—which reportedly cost $91 million to make and was featured in a Super Bowl ad—should have embraced its inherent B-movie roots. Instead, it tries to juggle a wild survival story with a poignant family drama, but both elements feel so rushed and underdeveloped that neither ends up registering. There’s nothing to these characters, and the action sequences quickly grow repetitive and wearisome. There’s a jump scare, insistent notes from an overbearing score, some running and screaming, the gnashing of teeth, and maybe an injury before a narrow escape. Over and over and over again..'

        }else if(btn.id == v2){
            vid.src = 'https://www.youtube-nocookie.com/embed/eu0rExO_C3A'

            text.innerHTML = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem ex aliquam vero atque nemo autem enim corporis sint!'
        
        }else if(btn.id == v3){
            vid.src = 'https://www.youtube-nocookie.com/embed/rsPckUENEaA'
            
            text.innerHTML = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque dolor iusto id accusantium! Impedit laborum unde vitae nihil, illo debitis?'
        
        }else if(btn.id == v4){
            vid.src = 'https://www.youtube-nocookie.com/embed/0bAYmtkSOfQ'
            
            text.innerHTML = 'bla bla bla bla bla bla bla'
        
        }else if(btn.id == v5){
            vid.src = 'https://www.youtube-nocookie.com/embed/1d0Q7XRnJdQ'
            
            text.innerHTML = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem ex aliquam vero atque nemo autem enim corporis sint!'
        }
    }
})

