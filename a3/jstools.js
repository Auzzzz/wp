var div = document.getElementById('newpost');

document.getElementById('button').addEventListener('click', showhide);

function showhide() {
    div.classList.toggle('visible');
}