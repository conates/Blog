
    <ul>
        <?php foreach ($accesorios as $acces): ?>
            <li id="<?php echo $acces['IDAccesorio']; ?>" class="accesorio"><?php echo utf8_encode($acces['Nombre']); ?>
                <div id="<?php echo $acces['IDCategoria']; ?>" style="display: none"></div>
            </li>
        <?php endforeach; ?>    
    </ul>
<script type="text/javascript">
   
    $(document).ready(function() {
        $('.accesorio').click(function() {
            $('#articulos').load('bicicletas/articulos?id_accesorio='+$(this).attr("id")+'&id_categoria='+$('#'+$(this).attr("id") +' > div').attr("id"));
        });
    });
</script>