function iniciaModal(modalID) {
    if (localStorage.fechamodal !== modalID) {
        const conteudolanding = document.getElementById(modalID);
        if (conteudolanding) {
            conteudolanding.classList.add('mostrar');
            conteudolanding.addEventListener('click', (e) => {
                if (e.target.id == modalID || e.target.className == 'fecharlanding') {
                    conteudolanding.classList.remove('mostrar');
                    localStorage.fechamodal = modalID;
                }
            });
        }
    }
}

const logonav = document.querySelector('.logonav');
logonav.addEventListener('click', () => iniciaModal('modal-promocao'))

document.addEventListener('scroll', () => {
    if (window.pageYOffset > 100) {
        iniciaModal('modal-promocao')
    }
})