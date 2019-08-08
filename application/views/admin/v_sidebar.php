<aside class="menu-sidebar d-none d-lg-block" style="background-color: #2e2f2f">
    <div class="logo">
        <a href="<?= base_url("home") ?>">
            <img src="<?= base_url("assets/admin/images/pupu.png") ?>" alt="Cool Admin">
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <?php
                $i = 0;
                foreach ($menu as $m) :
                    ?>
                    <li class="<?php
                                echo count($m->sub_menu) ? "has-sub " : "";
                                echo $this->uri->uri_string() == $m->module_path || in_array($this->uri->uri_string(), array_map(function ($v) {
                                    return $v->module_sub_path;
                                }, $m->sub_menu)) ? "active" : "" ?> list-sidebar-item">
                        <a <?= count($m->sub_menu) ? "class='js-arrow' href='#' data-index='$i' " : "href='" . base_url($m->module_path) . "'" ?>>
                            <i class="<?= $m->module_icon ?>"></i><?= $m->module_name ?>
                        </a>
                        <?php if (count($m->sub_menu)) : ?>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <?php foreach ($m->sub_menu as $sm) : ?>
                                    <li class="list-sidebar-item">
                                        <a href="<?= base_url($sm->module_sub_path); ?>"><?= $sm->module_sub_name ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                    <?php count($m->sub_menu) && $i++;
                endforeach; ?>
            </ul>
        </nav>
    </div>
</aside>