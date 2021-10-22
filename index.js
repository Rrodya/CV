const button = document.getElementById('submit');

button.addEventListener('mouseover', () => {
    button.style.boxShadow = '10px 10px 0 #B981FF';
});
button.addEventListener('mouseout', () => {
    button.style.boxShadow = 'none';
})