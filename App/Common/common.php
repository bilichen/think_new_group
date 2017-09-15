<?php

function p($array){
    dump($array,1,'<pre>',0);
}

function replace_phiz($content){
    preg_match_all('/\[.*?\]/is',$content,$arr);

    if($arr[0]){//判断是否存在表情，如果为真表示存在数据
        $phiz = F('phiz','','./data/');
        foreach($arr[0] as $v){//遍历content中存在的表情数组，每一个数据$v=[大笑]
            foreach($phiz as $key=>$value){//遍历预先定义好的表情数组
                if($v == '['.$value.']'){//当content中的存在表情和预先定义的相同
                    $content = str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif" />',$content);//把content中的表情，替换成<img src=''>格式，用字符串拼接好
                }
            }
        }
    }
    return $content;

}