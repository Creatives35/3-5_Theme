function toggleSideMenu(){
    const popUp = document.querySelector('.hero .pop-up');
    const popUpText = document.querySelector('.hero .pop-up .side-menu-pop-up .side-menu-text-container');
    const popUpImage = document.querySelector('.hero .pop-up .side-menu-pop-up .side-menu-image-container');
    if(popUp.classList.contains('d-show')){
        popUp.classList.remove('d-show');
        popUpText.style.opacity = '0';
        popUpImage.style.opacity = '0';
    }else{
        popUp.classList.add('d-show');
        setTimeout(()=>{
            popUpText.style.opacity = '1';
            popUpImage.style.opacity = '1';
        }, 250)
    }
}
(function(){
    const sideMenuIcon = document.getElementById('side-nav-menu-icon');
    const sideMenuOverLay = document.querySelector('.hero .pop-up .side-menu-overlay');
    sideMenuIcon.addEventListener('click', toggleSideMenu);
    sideMenuOverLay.addEventListener('click', toggleSideMenu);
})();