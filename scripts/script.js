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
let calcScrollValue = () => {
    let scrollProgress = document.getElementById("back_to_top");
    let mainContent = document.querySelector('.main-content'); // Seleciona o conteúdo principal
    let calcHeight = mainContent.scrollHeight - mainContent.clientHeight; // Calcula a altura total de rolagem
    let pos = mainContent.scrollTop; // Posição atual de rolagem
    let scrollValue = Math.round((pos * 100) / calcHeight); // Percentual de rolagem

    // Exibe o botão se a posição de rolagem for maior que 100
    if (pos > 100) {
        scrollProgress.style.display = "flex"; // Torna o botão visível
    } else {
        scrollProgress.style.display = "none"; // Oculta o botão
    }

    // Atualiza o fundo com um gradiente conic
    scrollProgress.style.background = `conic-gradient(#56a7b2 ${scrollValue}%, #87d1e6 ${scrollValue}%)`;
};

// Evento de rolagem
mainContent.onscroll = calcScrollValue;

// Evento de clique para voltar ao topo
document.getElementById("back_to_top").addEventListener("click", () => {
    mainContent.scrollTo({ top: 0, behavior: "smooth" }); // Rola suavemente para o topo
});

// Adiciona um efeito de círculo ao botão
const backToTopButton = document.getElementById("back_to_top");
backToTopButton.style.borderRadius = "50%"; // Garante que o botão seja circular

