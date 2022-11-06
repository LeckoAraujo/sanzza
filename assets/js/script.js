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

function carousel1(string){
    
    let id_element = document.querySelector('.content-carousel-1 .active').id;
    id_element = parseInt(id_element);
    document.querySelector('.content-carousel-1 .active').classList.remove('active');
    let slides = document.querySelectorAll('.content-carousel-1 .slide');

    if(string === 'next'){
        id_element = id_element <= 2 ? id_element = id_element+1 : id_element = 1;
        console.log(id_element);
        slides[id_element-1].classList.add('active');
    } else {
        id_element = id_element > 1 ? id_element = id_element-1 : id_element = 3;
        console.log(id_element);
        slides[id_element-1].classList.add('active');
        // document.querySelector('#'+id_element+'.slide').classList.add('active');
    }
    
}