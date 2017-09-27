<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 10:39
 * 自定义thinkPHP 关联模型
 */

class UserRelationModel extends RelationModel{
    //因为自定义了类名，所以要先指定数据库表名(主表名称,如果类名是主表名，可以省略)
    protected $tableName = 'user';

    //定义关联关系
    protected $_link = array(
        'role' => array(//副表名称
            'mapping_type'=> MANY_TO_MANY,//多对多关系
            'foreign_key'=>'user_id',//主表在中间表的字段名称
            'relation_foreign_key'=>'role_id',//副表在中间表的字段名称
            'relation_table'=>'hd_role_user',//中间表名称
            'mapping_fileds' =>'id,name,remark'//要查询的字段

        )
    );

}