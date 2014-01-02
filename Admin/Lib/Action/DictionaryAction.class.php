<?php

class DictionaryAction extends CommonAction {

    public function index() {

        $M = M("Dictionary");

        $count = $M->count();
        import("ORG.Util.Page");       //载入分页类
        $page = new Page($count, 20);
        $showPage = $page->show();
        $this->assign("page", $showPage);
        $this->assign("list", D("Dictionary")->listDictionary($page->firstRow, $page->listRows));
        $this->display();
    }

}