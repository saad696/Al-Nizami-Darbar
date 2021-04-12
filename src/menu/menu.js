const modalBtn = document.getElementById("modal-btn");
const msg = document.querySelector(".message");

msg.style.display = 'none'

    modalBtn.addEventListener("click", () => {
        msg.style.display = 'block'
        msg.classList.add('animate__backInLeft');
    });


document.querySelector('.delete').addEventListener('click', () => {
    msg.style.display = 'none'
})