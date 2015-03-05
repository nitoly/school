<?php
require_once __DIR__ . '/../autoload.php';

class NewsController
{

    public function actionAll()
    {

        $items = News::getAll();

        $view = new view();

        $view->assign('items', $items);
        $view->$items = $news;

        $view->display('index.php');

    }

    public static function actionOne()
    {

        $id = $_GET['id'];
        $item = News::getOne($id);

        $view = new view();
        $view->assign('item', $item);
        $view->display('one.php');

    }
}


