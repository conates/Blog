
    <ul>
        <?php foreach ($categorias as $category): ?>
            <li id="<?php echo $category['IDCategoria']; ?>"class="categoria"><?php echo $category['Nombre']; ?></li>
        <?php endforeach; ?>    
    </ul>
