class MobileMenu {
    constructor() {
        this.mobileMenu = document.querySelector(".cliowp-mobile-menu-container");
        this.toggleButton = document.querySelector(".cliowp-mobile-menu-trigger");

        this.toggleButton.addEventListener("click", () => this.toggleMobileMenu());
    }

    toggleMobileMenu() {
        this.toggleButton.classList.toggle("bi-list");
        this.toggleButton.classList.toggle("bi-x-square-fill");
        this.mobileMenu.classList.toggle("cliowp-mobile-menu-active");
    }
}

export default MobileMenu;
