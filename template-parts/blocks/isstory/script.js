//Function for '99 Iedvesmas stasti' pages small container content display

let innerContainers = document.querySelectorAll('.inner-container');

innerContainers.forEach(container => {
    const photo = container.querySelector('.photo');
    const name = container.querySelector('.name');
    const surname = container.querySelector('.surname');
    const text = container.querySelector('.text');

    if (photo && photo.getAttribute('src')) {
        name.style.display = 'none';
        surname.style.display = 'none';
        text.style.display = 'none';
        container.addEventListener('mouseover', () => {
            if (name) {
                name.style.display = 'block';
            }
            if (surname) {
                surname.style.display = 'block';
            }
        });
        container.addEventListener('mouseout', () => {
            if (name) {
                name.style.display = 'none';
            }
            if (surname) {
                surname.style.display = 'none';
            }
        });
    } else if (name && name.textContent.trim() !== '') {
        if (photo) {
            photo.style.display = 'none';
        }
        if (text) {
            text.style.display = 'none';
        }
    } else if (text && text.textContent.trim() !== '') {
        if (photo) {
            photo.style.display = 'none';
        }
        if (name) {
            name.style.display = 'none';
        }
        if (surname) {
            surname.style.display = 'none';
        }
    } else {
        if (photo) {
            photo.style.display = 'none';
        }
        if (name) {
            name.style.display = 'none';
        }
        if (surname) {
            surname.style.display = 'none';
        }
        if (text) {
            text.style.display = 'none';
        }
    }
});

//To add empty containers

const totalContainers = 99;
const container = document.getElementById('story-container');
const existingContainers = container.querySelectorAll('.inner-container').length;
const additionalContainersNeeded = totalContainers - existingContainers;

for (let i = 0; i < additionalContainersNeeded; i++) {
    const newContainer = document.createElement('div');
    newContainer.className = 'inner-container';

    // For the first auto-generated container, add text
    if (i === 0) {
        newContainer.innerHTML = `
            <div class="background"></div>
            <h4 class="number">${existingContainers + i + 1}</h4>
            <p class="text">Jauns stāsts tiks pievienots drīzumā</p>
        `;
    } else {
        newContainer.innerHTML = `
            <div class="background"></div>
            <h4 class="number">${existingContainers + i + 1}</h4>
        `;
    }
    container.appendChild(newContainer);
}

//Function for hidding containers on smaller screens

innerContainers = document.querySelectorAll('.inner-container');
const button = document.querySelector('.load');
function updateVisibility() {
    const screenWidth = window.innerWidth;

    if (screenWidth >= 991) {
        innerContainers.forEach(container => {
            container.style.display = 'block';
        });
        button.textContent = 'Skatīt mazāk';
    } else {
        for (let i = 0; i < innerContainers.length; i++) {
            if (i < 20) {
                innerContainers[i].style.display = 'block';
            } else {
                innerContainers[i].style.display = 'none';
            }
        }
        button.textContent = 'Skatīt vairāk';
    }
}

button.addEventListener('click', function () {
    for (let i = 20; i < innerContainers.length; i++) {
        if (innerContainers[i].style.display === 'none' || innerContainers[i].style.display === '') {
            innerContainers[i].style.display = 'block';
            button.textContent = 'Skatīt mazāk';
        } else {
            innerContainers[i].style.display = 'none';
            button.textContent = 'Skatīt vairāk';
        }
    }
});

updateVisibility();
window.addEventListener('resize', updateVisibility);

// Function to open the YouTube video in a popup
function openPopup(videoId, name, surname) {
    const popupOverlay = document.getElementById('popupOverlay');
    const popupName = document.getElementById('popupName');
    const popupSurname = document.getElementById('popupSurname');
    const videoPlayer = document.getElementById('videoPlayer');
    const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;

    popupName.textContent = name;
    popupSurname.textContent = surname;
    videoPlayer.src = videoUrl;
    popupOverlay.style.display = 'flex';
}

function closePopup() {
    const popupOverlay = document.getElementById('popupOverlay');
    const videoPlayer = document.getElementById('videoPlayer');

    videoPlayer.src = '';
    popupOverlay.style.display = 'none';
}

innerContainers.forEach((container, index) => {
    const videoLinkElement = container.querySelector('.video-link');
    const nameElement = container.querySelector('.name');
    const surnameElement = container.querySelector('.surname');
    const videoLink = videoLinkElement ? videoLinkElement.innerText : '';
    const name = nameElement ? nameElement.innerText : '';
    const surname = surnameElement ? surnameElement.innerText : '';

    container.addEventListener('click', () => {
        const videoId = videoLinkElement ? videoLinkElement.getAttribute('data-video-id') : '';
        if (videoId) {
            openPopup(videoId, name, surname);
        }
    });
});

popupOverlay.addEventListener('click', (event) => {
    if (event.target === popupOverlay) {
        closePopup();
    }
});

