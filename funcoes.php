<?php
function exibirItem($item) {
    echo '<div class="col">';
    echo '  <div class="card h-100 shadow-sm">';
    echo '    <img src="' . $item["imagem"] . '" class="card-img-top imagem-card" alt="' . $item["titulo"] . '">';
    echo '    <div class="card-body d-flex flex-column">';
    echo '      <h5 class="card-title">' . $item["titulo"] . '</h5>';
    echo '      <p class="mb-2">';
    echo '        <span class="badge bg-info text-dark">Categoria: ' . $item["categoria"] . '</span>';
    echo '      </p>';
    echo '      <a href="detalhes.php?id=' . $item["id"] . '" class="btn btn-primary w-100 mt-auto">Ver mais</a>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}
?>
