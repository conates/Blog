<div id="centro">
    <table>
        <tr>
            <td>
                <div id="central">
                    <?php echo link_to('Accesorios Bicicletas', '@bicicletas'); ?>  
                    <?php echo link_to('Accesorios Motos', '@motos'); ?>

                </div>

            </td>
            <td> 
                <div id="shimano">

                </div>
            </td>
        </tr>
    </table>
</div>

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