const TIMEOUT_NOTIFICATION = 8000

window.addEventListener('load', () => {
    const body = document.body
    const modal = document.getElementById('modal')
    const modalBody = document.getElementById('modal-body')
    const modalClose = document.getElementById('modal-close')
    const toggleModal = () => {
        modal.classList.toggle('modal-opened')
        body.classList.toggle('disable-scrolling')
    }

    modal.onclick = toggleModal
    modalBody.onclick = (e) => e.stopPropagation()
    modalClose.onclick = toggleModal
    setTimeout(toggleModal, TIMEOUT_NOTIFICATION)

})

