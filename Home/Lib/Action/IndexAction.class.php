<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index() {
        /*
        import('QRCode');
        $QRCode = new QRCode('',150);
        $img_url = $QRCode->getUrl("http://blog.51edm.org");
        echo '<img src="' . $img_url . '" />';
        */
        $this->display();
    }

    public function mail() {
        send_mail("281978297@qq.com", "李欧", "测试邮箱", "测试邮件是否能正常发送");
    }

    public function article() {
        $Region = M("News");
        $map['id'] = $_REQUEST["id"];
        $article = $Region->where($map)->find();
        
        $this->assign('article', $article);

        $this->display();
    }

}