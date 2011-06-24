<?php use_helper('I18N', 'Date', 'Url') ?>
<div id="menu-categorias">
    <?php include_partial('bicicletas/menu_categorias', array('categorias' => $categorias)) ?>
</div>
<div id="menu-accesorios">
    <?php include_partial('bicicletas/menu_accesorios', array('accesorios' => $accesorios)) ?>
</div>
<div id="articulos">
    <?php include_partial('bicicletas/articulos', array('articulos' => $articulos)) ?>
</div>
<script type="text/javascript">
   
    $(document).ready(function() {


        $('.categoria').click(function() {
            $('#menu-accesorios').load('bicicletas/menu?id='+$(this).attr("id"));
        });
    });
</script>
<?php slot('signIn') ?>
<?php if ($formSign->hasGlobalErrors()): ?>
    <?php echo $formSign->renderGlobalErrors() ?>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice')): ?>
    <div class="notice"><?php echo $sf_user->getFlash('notice') ?></div>
<?php endif; ?>

<?php if ($sf_user->hasFlash('error')): ?>
    <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif; ?>

<form method="post" action="<?php echo url_for('@sf_guard_signin') ?>" id="loginform">

    <?php echo $formSign; ?>
    <input type="submit" class="submit-login" value="Enviar">


</form>
<?php end_slot() ?>