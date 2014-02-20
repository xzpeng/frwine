<?php

// 本类由系统自动生成，仅供测试用途
class DictionaryAction extends Action {

    public function index() {
        $this->display();
    }

    public function search() {

        $keyword = $_POST['keyword'];
        $M = M("Dictionary");
        $map = array();
        $rst = array();

        //$map['frname'] = array('like', '%' . $keyword . '%');
        $map['frname'];
        //$list = $M->field("`id`,`frname`,`chname`,`description`,`region`,`update_time`")->order("`id` DESC")->limit("$firstRow , $listRows")->select();
        $list = $M->field('frname')->where($map)->select();
//echo $M->getLastSql();
        foreach ($list as $frlist) {
            $rst[] = $frlist['frname'];
        }


        var_dump(json_encode($rst,TRUE));
        return json_encode($rst, TRUE);
    }

}