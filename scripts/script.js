const video = document.getElementById('video');
const photoButton = document.getElementById('photoButton');
const galleryButton = document.getElementById('galleryButton');
const fileInput = document.getElementById('fileInput');
const canvas = document.getElementById('canvas');
const context = canvas.getContext('2d');

// Acesso à câmera
navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
        video.srcObject = stream;
    })
    .catch(err => {
        console.error("Erro ao acessar a câmera: " + err);
    });

// Captura de foto
photoButton.addEventListener('click', () => {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    const imageData = canvas.toDataURL('image/png');
    console.log(imageData); // Aqui você pode fazer algo com a imagem
});

// Botão de procurar na galeria
galleryButton.addEventListener('click', () => {
    fileInput.click();
});

// Quando uma imagem é selecionada
fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            const img = new Image();
            img.onload = () => {
                context.drawImage(img, 0, 0, canvas.width, canvas.height);
            };
            img.src = e.target.result;
        };
        reader.readAsDataURL(file);
    }
});
// Mostrar ou esconder o botão de voltar ao topo
window.onscroll = function() {
    const button = document.getElementById('back_to_top');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        button.classList.add('show'); // Adiciona classe para mostrar o botão
    } else {
        button.classList.remove('show'); // Remove classe para esconder o botão
    }
};

// Voltar ao topo ao clicar no botão
document.getElementById('back_to_top').onclick = function() {
    window.scrollTo({top: 0, behavior: 'smooth'}); // Rolagem suave
};
//
document.querySelectorAll('.curso').forEach(button => {
    button.addEventListener('mouseenter', () => {
        document.getElementById('icon_curse').classList.add('icon-hover');
    });
    
    button.addEventListener('mouseleave', () => {
        document.getElementById('icon_curse').classList.remove('icon-hover');
    });
});






