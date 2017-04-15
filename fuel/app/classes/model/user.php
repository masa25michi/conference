<?php

class Model_User extends \Orm\Model{
    protected static $_table_name = 'user';
    
    protected static $_primary_key = array('tel');
    
    protected static $_properties = array(
        'tel',
        'email',
        'firstname',
        'lastname'
    );
    /**
     * Has Many
     * @var array
     */
//    protected static $_has_many = array(
//        // リレーション指定する際の関係性を示す名前を付ける
//        'use_food' => array(
//            // 紐づけるモデル  
//            'model_to'       => 'Model_Userevent',
//            // このモデル（店舗）のキー
//            // 反対側のモデルとの結合条件となる項目を示す
//            'key_from'       => 'tel',
//            // 関連するモデルでのキー
//            // 反対側のモデルで結合条件となる項目を示す
//            'key_to'         => 'UserTel',
//            // 関係するテーブルが保存されるときに同時にアップデートするか
//            'cascade_save'   => false,
//            // 親テーブルの関連レコードが削除されるときに同時に削除するか
//            'cascade_delete' => false,
//        ),
//    );
}