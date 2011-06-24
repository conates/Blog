<?php if (count($articulos) > 0) { ?>
    <table class="articulo" border="1" width="200px">
        <?php foreach ($articulos as $art): ?>
            <?php if (isset($art['computed1']) && $art['computed1'] == 'ER'): ?>
                <span> La Búsqueda no entrego resultados.</span>
            <?php endif; ?>
            <?php if (!isset($art['computed1'])): ?>
                <tr>
                    <td id="<?php echo $art['IDArticulo1']; ?>">
                        <?php echo $art['NombreWeb1']; ?>
                    </td>
                    <td id="<?php echo $art['IDArticulo2']; ?>">
                        <?php echo $art['NombreWeb2']; ?>
                    </td>
                    <td id="<?php echo $art['IDArticulo3']; ?>">
                        <?php echo $art['NombreWeb3']; ?>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>    
    </table>      
<?php }else { ?>
    <span> No ha seleccionado ningun criterio de búsqueda</span>
<?php } ?>

