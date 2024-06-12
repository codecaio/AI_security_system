<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Camera Page</title>
  <link rel="stylesheet" href="styles3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <script src="script3.js"></script>
    <div class="dashboard">
      <div class="sidebar">
        <button class="button" id="add">Adicionar Câmera</button>
        <button class="button" id="del">Deletar Câmera</button>
        <button class="button">Câmera 1</button>
        <button class="button">Câmera 2</button>
        <button class="button">Câmera 3</button>
        <button class="button" onclick="openModal('camera4Modal')">Câmera 4</button>
        <button class="button exit" onclick="confirmExit()">Sair</button>
      </div>
      <div class="camera-feed">
        <div class="camera">Camera 1 Feed</div>
        <div class="camera">Camera 2 Feed</div>
        <div class="camera">Camera 3 Feed</div>
        <div class="camera">Camera 4 Feed</div>
      </div>
      <div id="camera4Modal" class="modal">
        <div class="modal-content">
          <span class="close-button">&times;</span>
          <h2>Objeto detectado</h2>
          <div class="camera">Camera 4 Feed</div>
          <button class="modal-button positive">Positivo</button>
          <button class="modal-button negative">Alarme falso</button>
        </div>
      </div>
      <div onload="openModal('camera4Modal')"></div>

      
    </div>
  </body>
  </html>