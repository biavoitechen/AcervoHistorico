<?php

function exibirItem($item) {
    echo '<div class="item">';
    echo '<img src="' . $item['imagem'] . '" alt="' . $item['titulo'] . '" style="width:200px;height:auto;">';
    echo '<h3>' . $item['titulo'] . '</h3>';
    echo '<p><strong>Categoria:</strong> ' . $item['categoria'] . '</p>';
    echo '<a href="detalhes.php?id=' . $item['id'] . '">Ver mais</a>';
    echo '</div>';
}
