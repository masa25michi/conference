<?php

class Model_Conference extends \Orm\Model{
    protected static $_table_name = 'conference';
    
    protected static $_primary_key = array('ConferenceId');
    
    protected static $_properties = array(
        'ConferenceId',
        'ConferenceName',
        'Date'
    );
    /**
     * Has Many
     * @var array
     */
    protected static $_has_many = array(
        // リレーション指定する際の関係性を示す名前を付ける
        'conference_event' => array(
            // 紐づけるモデル  
            'model_to'       => 'Model_Event',
            // このモデル（店舗）のキー
            // 反対側のモデルとの結合条件となる項目を示す
            'key_from'       => 'EventId',
            // 関連するモデルでのキー
            // 反対側のモデルで結合条件となる項目を示す
            'key_to'         => 'ConferenceId',
            // 関係するテーブルが保存されるときに同時にアップデートするか
            'cascade_save'   => false,
            // 親テーブルの関連レコードが削除されるときに同時に削除するか
            'cascade_delete' => false,
        ),
    );
}