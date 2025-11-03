<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galerie - Site MIMDS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include("php/navbar.php"); ?>

<div class="container py-5 text-center">
  <h2>Live YouTube</h2>
  <div id="youtube-live" class="mt-4"></div>
</div>

<script>
const apiKey = "TA_CLE_API_YOUTUBE";
const channelId = "TON_ID_DE_CHAINE";

fetch(`https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=${channelId}&eventType=live&type=video&key=${apiKey}`)
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById("youtube-live");
    if (data.items && data.items.length > 0) {
      const videoId = data.items[0].id.videoId;
      container.innerHTML = `
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/${videoId}" allowfullscreen></iframe>
        </div>
        <p class="mt-3 text-success">🎥 Live en cours !</p>
      `;
    } else {
      container.innerHTML = `<p class="text-muted">Aucun live pour le moment. Consultez nos dernières vidéos :</p>`;
    }
  })
  .catch(error => console.error("Erreur :", error));
</script>

<?php include("php/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
