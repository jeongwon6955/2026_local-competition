const registerBtn = document.querySelector('#sign_up');
const registerBox = document.querySelector('.register_modal');

registerBtn.addEventListener('click', () => {
    registerBox.style.opacity = '1';
    registerBox.style.visibility = 'visible';
})

function removeModal() {
    registerBox.style.opacity = '0';
    registerBox.style.visibility = 'hidden';
}