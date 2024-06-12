function confirmExit() {
  var exit = confirm("Você realmente deseja sair?");
  if (exit) {
    window.location.href = 'main.html';
  }
}

function login(){
    window.location.href = 'cameras.html'

}

function openModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "block";
  }
  
  // This should be the only global code
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