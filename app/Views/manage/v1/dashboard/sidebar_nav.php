<?php
    // echo $uri2;die;
?>

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky nav-primary-sidebar">
        <ul class="nav flex-column nav-primary">
            <?php foreach ($permissions as $key => $value) { ?>
                <li class="nav-item">
                    <a class="nav-link <?= $value['name']==$uri3?'active':'' ?>" href="<?= manageURL($uri2.'/'.$value['name']) ?>">
                        <span data-feather="home"></span>
                        <?= $value['display_name'] ?> <span class="sr-only">(current)</span>
                    </a>
                </li>
            <?php } ?>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>