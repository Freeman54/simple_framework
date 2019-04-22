<?php

class UserModel{
    public function getData(){
        //通过数据库获取用户信息
        //返回数据
        return [
            'id'    => 1,
            'name'  => '小王子',
            'age'   => 18
        ];
    }
}