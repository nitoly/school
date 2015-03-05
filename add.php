<?php

    
    require __DIR__ . '/models/News.php';

if (!empty($_POST)) {
$data = [];
if (!empty($_POST['title'])) {
$data['title'] = $_POST['title'];
}
if (!empty($_POST['new'])) {
$data['new'] = $_POST['new'];
}
}


if (isset($data['title']) && isset($data['new'])) {
        $b = News::putAll($data);
//        $b = new News();
//        $b->putAll($data);

header('Location: /');
die;
}

include __DIR__ . '/views/add.php';
?>