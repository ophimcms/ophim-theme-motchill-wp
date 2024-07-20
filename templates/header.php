<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 400px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }

    .left {
        text-align: center;
        width: 20%;
    }

    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #1f1e1e;
    }
    #result .rowsearch{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<div id="header">
    <div class="container">
        <div class="top">
            <div class="left logo" style="box-shadow: 0px 1px 3px rgba(0,0,0,0.2);">
                <a href="/" title="">
                    <?php op_the_logo('max-width:50px') ?>
                </a>
            </div>
            <div class="right-header">
                <div class="search-container relative">
                    <form id="form-filter" method="GET" action="/">
                        <input type="text" id="keyword" name="s" autocomplete="off" onkeyup="fetch()"
                               placeholder="Nhập tên phim bạn muốn tìm kiếm..." value="<?php echo "$s"; ?>" />
                        <i class="fa fa-search" onclick="$('#form_search').submit();"></i>
                    </form>
                    <div class="" id="result"></div>
                </div>
                <div id="box-user-menu" class="actions-user right">
                    <ul>
                        <li>
                            <i class="fa fa-sign-in"></i>
                            <a onclick="alert('Chức năng này đang cập nhật');return false;">Đăng nhập</a>
                        </li>
                        <li>
                            <i class="fa fa-users"></i>
                            <a onclick="alert('Chức năng này đang cập nhật');return false;">Đăng ký</a>
                        </li>
                        <li>
                            <i class="fa fa-bookmark-o"></i>
                            <a onclick="alert('Chức năng này đang cập nhật');return false;">Bookmark</a>
                        </li>
                    </ul>
                </div>
                <div class="suggest-dns">
                    <p>Công cụ tìm kiếm phim.</p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="main-menu">
        <ul class="container">
            <?php
            $menu_items = wp_get_menu_array('primary-menu');
            foreach ($menu_items as $key => $item) : ?>
            <?php if (count($item['children'])) { ?>
            <li class="menu-item ">
                <a title="<?= $item['title'] ?>">
                    <?= $item['title'] ?>
                </a>
                <ul class="sub-menu span-4 absolute">
                    <?php foreach ($item['children'] as $k => $child): ?>
                    <li class="sub-menu-item">
                        <a title="<?= $child['title'] ?>" href="<?= $child['url'] ?>"><?= $child['title'] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <?php } else { ?>
            <li class="menu-item <?php $item['url'] === '/' ? 'active' : ''?>"><a title="<?= $item['title'] ?>" href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
                <?php } ?>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



