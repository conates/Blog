<script type="text/javascript">

    $(document).ready(function() {
        $('#comment_post_id').val($('#id').val());
        $("#comment_blog").validate();

    });
</script>

<div id='blog-content'>
    <div id="slug">
        <H1 class="underline"><?php echo $post->getSlug(); ?></h1>
        <input type="hidden" id="id" name="comment[post_id]" value="<?php echo $post->getId(); ?>">
    </div>

    <div id="content-content">
        <?php echo html_entity_decode($post->getContent()); ?>
    </div>
    <div id="content-date">
        <small> <?php echo date('Y-m-d', strtotime($post->getDate())); ?> </small>
    </div>
</div>

<div id="comment-new">



    <div class="sf_form">
        <form id ="comment_blog" action="<?php echo url_for('ViewPost/new?slug=' . $post->getSlug()) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

            <table id="comment"> 
                <tr>
                    <td>
                        <p class="title">Deja tu Comentario</p>
                    </td>

                    <td>
                        <?php include_partial('form', array('form' => $form)); ?>               
                    </td>
                    <td>
                        <input type="submit" value="Comentar" class="comment" name="_guardar" /> 
                    </td>
                    <td>
                        <p class="warning">La opción de comentar está abierta, pero te pedimos por favor no publicar comentarios ofensivos o publicidad basura. Nos reservamos el derecho de eliminar cualquier comentario que no cumpla estas reglas.</p>
                    </td>
                </tr>
            </table>
        </form>
    </div>


</div>
<div id="comment">
    <?php foreach ($comments as $comment) { ?>
        <div class="comment-content">
            <div id="image-user">
                <?php echo image_tag('user_anonymous.png') ?>
            </div>
            <div class="comment-<?php echo $comment['id'] ?>">
                <div class="comment-name">
                    <?php echo $comment['name'] ?>
                </div>
                <div class="comment-comment">
                    <?php echo $comment['comment'] ?>
                </div>
                <div id="comment-date">
                    <small> <?php echo date('Y-m-d', strtotime($comment['created_at'])); ?> </small>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<div id="back-link">
    <?php echo link_to('Página principal', '@homepage') ?>
</div>




<?php slot('signIn') ?>
<form method="post" action="<?php echo url_for('@sf_guard_signin') ?>" id="loginform">

    <?php echo $formSign; ?>
    <input type="submit" class="submit-login" value="Enviar">


</form>
<?php end_slot() ?>