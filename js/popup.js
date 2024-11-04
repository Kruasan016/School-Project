const modalController = ({modal, btnOpen, btnClose, time = 300}) => {
    const buttonElems = document.querySelectorAll(btnOpen);
    const modalElem = document.querySelector(modal);
    const bodyElem = document.body;

    modalElem.style.cssText = `
        display: flex;
        visibility: hidden;
        opacity: 0;
        transition: opacity ${time}ms, easy-in-out;
    `;

    bodyElem.style.cssText = `
        overflow: visible;
    `;

    const closeModal = event => {
        const target = event.target;

        if (target === modalElem || target.closest(btnClose) || event.code === "Escape") {
            modalElem.style.opacity = 0;
            bodyElem.style.overflow = 'visible';

            setTimeout(() => {
                modalElem.style.visibility = 'hidden';
            }, time);

            window.removeEventListener('keydown', closeModal);
        }
    }

    const openModal = () => {
        modalElem.style.visibility = 'visible';
        modalElem.style.opacity = 1;
        bodyElem.style.overflow = 'hidden';
        window.addEventListener('keydown', closeModal);
    };

    buttonElems.forEach(btn => {
        btn.addEventListener('click', openModal);
    })

    modalElem.addEventListener('click', closeModal);
}
modalController({
    modal: '.modal',
    btnOpen: '.section__button',
    btnClose: '.modal__close',
    time: 400
});