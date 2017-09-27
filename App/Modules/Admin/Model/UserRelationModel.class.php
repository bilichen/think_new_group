<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/27
 * Time: 10:39
 * 自定义thinkPHP 关联模型
 */

class UserRelationModel extends RelationModel{
    //因为自定义了类名，所以要先指定数据库表名
    protected $tableName = 'user';

    protected $_link = array(
        'role' => array(
            'mapping_type'=> MANY_TO_MANY,
            'foreign_key'=>'user_id',
            'relation_foreign_key'=>'role_id',
            'relation_table'=>'hd_role_user',
            'mapping_fileds' =>'id,name,remark'

        )
    );

}