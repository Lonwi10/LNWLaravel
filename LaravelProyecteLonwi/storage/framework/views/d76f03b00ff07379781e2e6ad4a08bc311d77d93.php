<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <span class="glyphicon glyphicon-tower" aria-hidden="true"></span>
                 League of Legends Champions
            </a>
        </div>

        <?php if( true || Auth::check() ): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li<?php echo e(Request::is('catalogo*') && !Request::is('catalogo/create')? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalogo')); ?>">
                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Catalogo
                    </a>
                </li>
                <li<?php echo e(Request::is('catalogo/create') ? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalogo/create')); ?>">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nuevo Campeon
                    </a>
                </li>
                <li<?php echo e(Request::is('catalogo*') && !Request::is('catalogo/createTier')? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalogo/indexTier')); ?>">
                        <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                        Tier
                    </a>
                </li>
                <li<?php echo e(Request::is('catalogo/createTier') ? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/catalogo/createTier')); ?>">
                        <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        Nuevo Tier
                    </a>
                </li>

            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>

