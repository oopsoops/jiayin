<?php

class UserinfoModel extends Model {

    // 自动验证设置
    protected $_validate = array(
        array('username', 'require', '用户名必须填写！', 0),//1为必须验证
		array('nickname', 'require', '公司名称必须填写！', 0),//1为必须验证
		array('userpass', 'require', '密码必须填写！', 0),//1为必须验证
		array('userpass','repass','两次密码输入不一致！',0,'confirm', self::MODEL_BOTH),
		array('email', 'require', '邮箱必须填写！', 0),
        array('email', 'email', '邮箱格式错误！', 0),//2为不为空时验证
		array('email', '', '该邮箱已被注册！', 0, 'unique', self::MODEL_BOTH),
        array('username', '', '用户名已被注册！', 0, 'unique', self::MODEL_BOTH),
		array('nickname', '', '此公司名称已经被使用！', 0, 'unique', self::MODEL_BOTH),
		
        //0为存在字段就验证（默认）
        /* 'unique' 第五个参数为附加规则
          附加规则： 配合验证规则使用（可选），包括：
            regex 使用正则进行验证，表示前面定义的验证规则是一个正则表达式（默认）
            function 使用函数验证，前面定义的验证规则是一个函数名
            callback 使用方法验证，前面定义的验证规则是当前Model类的一个方法
            confirm 验证表单中的两个字段是否相同，前面定义的验证规则是一个字段名
            equal 验证是否等于某个值，该值由前面的验证规则定义
            in 验证是否在某个范围内，前面定义的验证规则必须是一个数组
            unique 验证是否唯一，系统会根据字段目前的值查询数据库来判断是否存在相同的值
            系统还内置了一些常用正则验证的规则，可以直接使用，包括：require 字段必须、email 邮箱、url URL地址、currency 货币、number 数字，这些验证规则可以直接使用。
        * 
        */
        
        /* self::MODEL_INSERT
            验证时间：（可选）
            Model:: MODEL_INSERT 或者1新增数据时候验证
            Model:: MODEL_UPDATE 或者2编辑数据时候验证
            Model:: MODEL_BOTH 或者3 全部情况下验证（默认）
        */

    );
    // 自动填充设置
    protected $_auto = array(
        //array('register_time', 'time', self::MODEL_INSERT, 'function'),
		array('loginpass','md5', self::MODEL_INSERT,'function'),
		array('repass','md5', self::MODEL_INSERT,'function'),
    );
    /*
     * $_auto =array(填充字段,填充内容,填充条件,附加规则)
        填充字段就是需要进行处理的表单字段，这个字段不一定是数据库字段，
        也可以是表单的一些辅助字段，例如确认密码和验证码等等。
        填充条件包括：
        Model:: MODEL_INSERT 或者1 新增数据的时候处理（默认）
        Model:: MODEL_UPDATE 或者2更新数据的时候处理
        Model:: MODEL_BOTH 或者3所有情况都进行处理
        附加规则包括：
        function ：使用函数，表示填充的内容是一个函数名 
        callback ：回调方法 ，表示填充的内容是一个当前模型的方法
        field ：用其它字段填充，表示填充的内容是一个其他字段的值
        string ：字符串（默认方式）
     * 
     */
	 
}

?>