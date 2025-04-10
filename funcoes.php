<?php

function exibirItem($item) {
    echo '<div class="col">';
    echo '  <div class="card h-100 shadow-sm">';
    echo '    <img src="' . $item["imagem"] . '" class="card-img-top" alt="' . $item["titulo"] . '">';
    echo '    <div class="card-body">';
    echo '      <h5 class="card-title">' . $item["titulo"] . '</h5>';
    echo '      <p class="card-text"><strong>Categoria:</strong> ' . $item["categoria"] . '</p>';
    echo '      <a href="detalhes.php?id=' . $item["id"] . '" class="btn btn-primary w-100">Ver mais</a>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
}

