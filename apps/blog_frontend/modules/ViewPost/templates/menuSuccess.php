<?php use_helper(Date); ?>
<div id="seccion_a">
    <?php foreach ($pager->getResults() as $post) { ?>
        <div id="contenido_a">
            <div class="post-<?php echo $post->getId() ?>">
                <h1 class="titulo_seccion"><?php echo link_to($post->getTitle(), '@b_post?slug=' . $post->getSlug()) ?></h1>
                <p class="descripcion_foto"><?php echo substr(html_entity_decode($post->getContent()), 0, sfConfig::get('app_post_content_long')) ?>...</p>


                <?php echo link_to(image_tag('btn_seguir_17.png'), '@b_post?slug=' . $post->getSlug(), array('id' => 'btn_seguir')) ?>                 

            </div>
        </div>

    <?php } ?>
</div>

<?php if ($pager->haveToPaginate()): ?>
    <div class="pagination">
        <a href="<?php echo url_for('@homepage') ?>?page=1">
            <img src="/images/first.png" alt="First page" title="First page" />
        </a>

        <a href="<?php echo url_for('@homepage') ?>?page=<?php echo $pager->getPreviousPage() ?>">
            <img src="/images/previous.png" alt="Previous page" title="Previous page" />
        </a>

        <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
                <?php echo $page ?>
            <?php else: ?>
                <a href="<?php echo url_for('@homepage') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
            <?php endif; ?>
        <?php endforeach; ?>

        <a href="<?php echo url_for('@homepage') ?>?page=<?php echo $pager->getNextPage() ?>">
            <img src="/images/next.png" alt="Next page" title="Next page" />
        </a>

        <a href="<?php echo url_for('@homepage') ?>?page=<?php echo $pager->getLastPage() ?>">
            <img src="/images/last.png" alt="Last page" title="Last page" />
        </a>
    </div>
<?php endif; ?>

<div class="pagination_desc">
    <strong><?php echo $pager->getNbResults() ?></strong> post en el blog

    <?php if ($pager->haveToPaginate()): ?>
        - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
    <?php endif; ?>
</div>










<?php slot('post-azar') ?>

<div id="seccion_post_azar">
    <h1 class="titulo_seccion">post al azar</h1>
    <ul>
        <?php foreach ($postviajos as $viejos): ?>
            <li>
                <?php echo link_to($viejos->getSlug(), '@b_post?slug=' . $viejos->getSlug()) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<?php end_slot() ?>
<?php slot('seccion_archivos') ?>

<div id="seccion_archivos">
    <h1 class="titulo_seccion">archivos</h1>
    <ul>
        <?php foreach ($postpermes as $viejos): ?>
            <li>
                <?php echo link_to(date('F-Y',mktime(0,0,0, $viejos['mes'],0, $viejos['ano'])) , '@b_post?slug=') ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


<?php end_slot() ?>





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