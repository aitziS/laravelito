<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo e(route('pri')); ?>">Principal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('usr')); ?>">Usuarios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('blg')); ?>">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('con')); ?>">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /var/www/laravelapp/resources/views/components/layouts/nav.blade.php ENDPATH**/ ?>