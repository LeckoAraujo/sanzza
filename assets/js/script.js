function openMenu(){
    document.querySelector('.menu-expanded').style.display = 'flex';
}

function closeMenu(){
    document.querySelector('.menu-expanded').style.display = 'none';
}

function changeLanguage(id){
    document.querySelector('.language ul li.active').classList.remove('active');
    document.querySelector('#'+id).classList.add('active');
}