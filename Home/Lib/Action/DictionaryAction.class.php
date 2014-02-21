<?php

// 本类由系统自动生成，仅供测试用途
class DictionaryAction extends Action {

    public function index() {

        $this->assign('pagetitle', '在线词典 法国葡萄酒关键词');
        $this->display();
    }

    public function search() {

        $keyword = $_POST['kw2search'];
        $M = M("Dictionary");
        $map = array();
        $rst = array();

        $map['frname'] = array('like', '%' . $keyword . '%');
        $mp = 'frname LIKE "%' . $keyword . '%" OR chname LIKE "%' . $keyword . '%"';
        $arrEntry = $M->where($mp)->select();

        $this->assign('entryLists', $arrEntry);
        $this->assign('pagetitle', '查询结果 法国葡萄酒关键词');
        $this->display();

    }

    public function autocomplete() {

        $keyword = $_GET['term'];

        $M = M("Dictionary");
        $map = array();
        $rst = array();

        if (preg_match("/[\x7f-\xff]/", $keyword)) { 
            $index_flag = 'chname';
        }else{ 
            $index_flag = 'frname';
        } 
        

        $map[$index_flag] = array('like', '%' . $keyword . '%');
        $list = $M->field($index_flag)->where($map)->select();
        
        foreach ($list as $frlist) {
            $rst[] = $frlist[$index_flag];
        }

        echo json_encode($rst, TRUE);
    }


    public function testapi() {
        echo json_encode($_POST);
        
//        var_dump($_GET);
    }

}