<div id='blog-content'>
    <?php
    foreach ($pager->getResults() as $post) {
        echo '<div class="post">';
        echo '<div class="post-' . $post->getId() . '">';
        echo '<h1 class="underline">' . link_to($post->getTitle(), '@b_post?slug=' . $post->getSlug()) . '</h1>';
        echo '<div class="post-content">';
        echo substr(html_entity_decode($post->getContent()), 0, sfConfig::get('app_post_content_long')) . '...';
        echo '</div>';
        echo '<br>';
        echo '<br>';
        echo '<br>';
        echo '<small>' . date('Y-m-d', strtotime($post->getDate())) . ' </small>';
        echo '<br>';
        echo '<p> <span>Número de comentarios ' . $post->getCountComment($post->getId()) . ' </span></p>';
        echo '<p>' . link_to('Seguir Leyendo...', '@b_post?slug=' . $post->getSlug()) . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
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