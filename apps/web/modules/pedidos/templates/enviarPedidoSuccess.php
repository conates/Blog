<?php if ($sf_user->hasFlash('notice')): ?>
    <div class="notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('error')): ?>
    <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif; ?>

<span> Usted no tiene un pedido activo</span>
<div id="mas-articulos">
    <input type="button" value="AGREGAR+PRODUCTOS" onClick="document.location = '<?php echo url_for('@homepage') ?>'"> 
</div>
