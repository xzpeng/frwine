<?php

// 本类由系统自动生成，仅供测试用途
class DictionaryAction extends Action {

    public function index() {
        $this->display();
    }

    public function search() {

        $keyword = $_GET['keyword'];
        $M = M("Dictionary");
        $map = array();

        $map['frname'] = array('like', '%' . $keyword . '%');
        //$list = $M->field("`id`,`frname`,`chname`,`description`,`region`,`update_time`")->order("`id` DESC")->limit("$firstRow , $listRows")->select();
        $list = $M->where($map)->select();
//echo $M->getLastSql();
        var_dump($list);
    }

}