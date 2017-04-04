<?php

class Model_User extends \Orm\Model{
    protected static $_table_name = 'users';
    
    protected static $_primary_key = array('tel');
    
    protected static $_properties = array(
        'tel',
        'email',
        'name'
    );
}
//
//class Model_User extends Model_Crud
//{
//    protected static $_table_name = 'users';
//    protected static $_created_at = 'created_at';
//    protected static $_updated_at = 'updated_at';
//}