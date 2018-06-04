<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {
    protected $_validate = array(
                /*
                 * catename就是需要验证的，第二个require自带的，
                 *regex	正则验证，定义的验证规则是一个正则表达式（默认）
                 * */
        array('catename','require','添加栏目不能为空',1,'regex',3), // 在新增的时候验证name字段是否唯一

    );

}