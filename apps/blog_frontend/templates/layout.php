<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
            </div>

            <div id="content">
                <?php echo $sf_content ?>          
            </div>
            <div id="navigation">
                <div id="menu">
                    <ul>
                        <li><?php echo link_to('Administración', '/adminBlog') ?></li>
                        <?php if (!$sf_user->isAuthenticated()): ?>
                            <li><?php echo link_to('Registrate', '@register') ?></li>

<?php if (has_slot('signIn')): ?>
  <?php include_slot('signIn') ?>
<?php endif; ?>

                        <?php endif ?>
                        <?php if ($sf_user->isAuthenticated()): ?>
                            <li><a class="last logout" href="<?php echo url_for('@sf_guard_signout') ?>">Logout</a></li>
                        <?php endif ?>
                    </ul>

                </div>
            </div>
            <div id="footer">

            </div>
        </div>
    </body>
</html>
