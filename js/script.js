const input = document.getElementById('input');
const grid = document.getElementsByClassName('grid')[0];

window.addEventListener('load', dayNightMode)
window.addEventListener('load', landingPageImage)
input.addEventListener('keydown', (event) => {
    if (event.key == 'Enter') {
        loadImg();
    }
})

function loadImg() {
    removeImages();

    const url = 'https://api.unsplash.com/search/photos/?query=' + input.value + '&per_page=9&client_id=SouHY7Uul-OxoMl3LL3c0NkxUtjIrKwf3tsGk1JaiVo';

    fetch(url).then(res => {
        if (res.ok) {
            return res.json();
        } else {
            alert(res.status);
        }
    }).then(data => {
        const imageNodes = [];
        for (let i = 0; i < data.results.length; i++) {
            imageNodes[i] = document.createElement('div');
            imageNodes[i].className = 'img';
            imageNodes[i].style.backgroundImage = 'url(' + data.results[i].urls.raw + ')';
            imageNodes[i].addEventListener('dblclick', () => {
                window.open(data.results[i].links.download, '_blank', 'noopener noreferer');
            })
            grid.appendChild(imageNodes[i]);
        }
    })
}

function landingPageImage() {
    const url = 'https://api.unsplash.com/photos?page=1&per_page=9&client_id=SouHY7Uul-OxoMl3LL3c0NkxUtjIrKwf3tsGk1JaiVo';

    fetch(url).then(res => {
        if (res.ok) {
            return res.json();
        } else {
            alert(res.status);
        }
    }).then(data => {
        const imageNodes = [];
        for (let i = 0; i < data.length; i++) {
            imageNodes[i] = document.createElement('div');
            imageNodes[i].className = 'img';
            imageNodes[i].style.backgroundImage = 'url(' + data[i].urls.raw + ')';
            imageNodes[i].addEventListener('dblclick', () => {
                window.open(data[i].links.download, '_blank', 'noopener noreferer');
            })
            grid.appendChild(imageNodes[i]);
        }
    })
}

function removeImages() {
    grid.innerHTML = '';
}

function dayNightMode() {
    const date = new Date();
    const hour = date.getHours();

    if (hour >= 7 && hour <= 19) {
        document.body.style.backgroundColor = 'whitesmoke';
        document.body.style.color = 'black';
    } else {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'white';
    }
}