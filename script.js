function scrollToSection(sectionId) {
    document.getElementById(sectionId).scrollIntoView({
        behavior: 'smooth'
    });
}

document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Message sent!');
});

function toggle(){
    let T =document.getElementById('navigation')
    if(T.style.display == 'block'){
        T.style.display = 'none'
        
    }else{
        T.style.display = 'block'
    }
}
