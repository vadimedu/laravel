<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <header>Здесь HEADER</header>
        <main>
            <div>
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
        <header>Здесь FOOTER</header>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/main.blade.php ENDPATH**/ ?>