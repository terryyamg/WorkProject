<?php

// 動作類別
class Actions
{

    // 共用的留言版物件
    private $guestbook = NULL;

    // 使用者選擇的動作
    private $action = 'index';

    // 建構函式
    // 初始化要執行的動作以及留言板物件
    public function __construct()
    {
        $this->action = isset($_GET['act'])
                      ? strtolower($_GET['act'])
                      : 'index';
        $this->guestbook = new GuestBook;
    }

    // 執行選擇的動作
    public final function run()
    {
        $this->{$this->action}();
    }

    // 重新導向
    // 借用 header 函式來導向指定的網址
    private function redirectTo($url)
    {
        header('Location: ' . $url);
    }

    // 預設的列表功能
    // 等同於原來的 index.php
    private function index()
    {
        $output = new Output('HTML');
        $output->setVar('messages', $this->guestbook->getAllMessages());
        $output->render('index.tpl.php');
    }

    // 新增表單頁
    // 等同於原來的 add.php
    private function add()
    {
        $output = new Output('HTML');
        $output->setVar('action', 'doAdd');
        $output->render('edit.tpl.php');
    }

    // 新增留言
    // 等同於原來的 do_add.php
    private function doAdd()
    {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];

        $this->guestbook->addMessage($title, $author, $body);
        $this->redirectTo('./');
    }

    // 輸出 RSS
    // 等同於原來的 rss.php
    private function rss()
    {
        $output = new Output('RSS');
        $output->setVar('items', $this->guestbook->getAllMessages());
        $output->render();
    }

    // 解構函式
    public function __destruct()
    {
        $this->guestbook = NULL;
    }

}