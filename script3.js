function confirmExit() {
  var exit = confirm("Você realmente deseja sair?");
  if (exit) {
    window.location.href = 'login.php';
  }
}

  
  window.onclick = function(event) {
    if (event.target.classList.contains('modal')) {
      event.target.style.display = "none";
    } else if (event.target.classList.contains('close-button')) {
      var modal = event.target.closest('.modal');
      if (modal) {
        modal.style.display = "none";
      }
    }
  }

async function startWebcam() {
    const video = document.getElementById('camera1');
    try {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true });
        video.srcObject = stream;
    } catch (error) {
        console.error("Erro ao acessar a câmera:", error);
    }
}

window.onload = () => {
  console.log("Página carregada. Iniciando webcam...");
  startWebcam();
};