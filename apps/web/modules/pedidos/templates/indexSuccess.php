<?php if ($sf_user->isAuthenticated()): ?>
    <?php if ($pdi) { ?>
        <script type="text/javascript">
            function EliminaArticulo(id_articulo,id_pedido){
                $.ajax({
                    type: "POST",
                    url: "<?php echo url_for('@deletearticulo') ?>",
                    data: "id_pedido="+id_pedido +'& id_articulo='+id_articulo
                });
                $("#pedido").load('<?php echo url_for('@pedidos') ?>');
            }
            function EnviarPedido(){
                $.ajax({
                    type: "POST",
                    url: "<?php echo url_for('@enviarpedido') ?>",
                    data: "id=<?php echo $pdi ?>"
                });

                $("#pedido").load('<?php echo url_for('@enviarpedido') ?>');
            }
        </script>
        <div id="pedido"> 
            <span>Mi Pedido</span>
            <table>
                <?php $suma_total = 0; ?>
                <?php foreach ($pedidos as $pedi): ?>
                    <tr>       
                        <td>
                            <?php echo $pedi['t_nombreweb'] ?>
                        </td>
                        <td>
                            <?php echo $pedi['t_precioventa'] ?>
                            <?php $suma_total+=$pedi['t_precioventa'] ?>
                        </td>
                        <td>
                            <?php echo $pedi['cantidad_articulos'] ?><br>
                        </td>
                        <td>

                            <?php echo link_to(image_tag('delete.png'), '@pedidos', array('onclick' => 'EliminaArticulo(' . $pedi['t_idarticulo'] . ',' . $pdi . ')')); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td>
                        <?php echo 'Total: $' . $suma_total ?>
                    </td>
                </tr>
            </table>
            <div id="mas-articulos">
                <input type="button" value="AGREGAR+PRODUCTOS" onClick="document.location = '<?php echo url_for('@homepage') ?>'"> 
            </div>
            <div id="send-pedido">
                <input type="button" value="ENVIAR PEDIDO" onClick="EnviarPedido()"> 
            </div>


        <?php }else { ?>
            <span> Usted no tiene un pedido activo</span>
            <div id="mas-articulos">
                <input type="button" value="AGREGAR+PRODUCTOS" onClick="document.location = '<?php echo url_for('@homepage') ?>'"> 
            </div>

        <?php } ?>
    <?php endif; ?>

    <?php if (!$sf_user->isAuthenticated()): ?>
        <span>Necesita ser cliente para poder ver esta información</span>
    <?php endif; ?>



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

<?php
echo link_to(image_tag('mipedido.png'), '@pedidos')?>