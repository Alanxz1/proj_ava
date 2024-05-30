function menuShow() {
        let menuMobile = document.querySelector('.mobile-menu');
        let iconImage = document.querySelector('.mobile-menu-icon img');
        let logoImage = document.querySelector('.logo img');
        if (menuMobile.classList.contains('open')) {
            menuMobile.classList.remove('open');
            iconImage.src = "assets/img/menu_white_36dp.svg";
            // Mostra a imagem do logo quando o menu é fechado
            logoImage.style.display = "block";
        } else {
            menuMobile.classList.add('open');
            iconImage.src = "assets/img/close_white_36dp.svg";
            // Oculta a imagem do logo quando o menu é aberto
            logoImage.style.display = "none";
        }
}
