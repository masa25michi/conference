<?php

class Model_Userevent extends \Orm\Model{
    protected static $_table_name = 'userEvent';
    
//    protected static $_primary_key = array('tel');
    
    protected static $_properties = array(
        'UserTel',
        'EventId'
    );
    /**
     * Has One
     * @var array
     */
    protected static $_has_one = array(
        // リレーション指定する際の関係性を示す名前を付ける
        'userevent_user' => array(
            // 紐づけるモデル  
            'model_to'       => 'Model_User',
            // このモデル（店舗）のキー
            // 反対側のモデルとの結合条件となる項目を示す
            'key_from'       => 'UserTel',
            // 関連するモデルでのキー
            // 反対側のモデルで結合条件となる項目を示す
            'key_to'         => 'tel',
            // 関係するテーブルが保存されるときに同時にアップデートするか
            'cascade_save'   => false,
            // 親テーブルの関連レコードが削除されるときに同時に削除するか
            'cascade_delete' => false,
        ),
        // リレーション指定する際の関係性を示す名前を付ける
        'userevent_event' => array(
            // 紐づけるモデル  
            'model_to'       => 'Model_Event',
            // このモデル（店舗）のキー
            // 反対側のモデルとの結合条件となる項目を示す
            'key_from'       => 'EventId',
            // 関連するモデルでのキー
            // 反対側のモデルで結合条件となる項目を示す
            'key_to'         => 'EventId',
            // 関係するテーブルが保存されるときに同時にアップデートするか
            'cascade_save'   => false,
            // 親テーブルの関連レコードが削除されるときに同時に削除するか
            'cascade_delete' => false,
        ),
        
    );
    
}