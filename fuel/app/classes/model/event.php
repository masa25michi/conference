<?php

class Model_Event extends \Orm\Model{
    protected static $_table_name = 'Event';
    
    protected static $_primary_key = array('EventId');
    
    protected static $_properties = array(
        'EventId',
        'Date',
        'BegTime',
        'EndTime',
        'Title',
        'Venue',
        'ConferenceId'
    );
    
    /**
     * Belongs To.
     *
     * @var array
     */
    protected static $_belongs_to = array(
        // リレーションの関係性を示す名前を指定
        'use_food' => array(
            // 紐付けられるモデル  :店舗
            'model_to' => 'Model_Conference',
            // このモデルのキー  :店舗id
            'key_from' => 'ConferenceId',
            // 関連するモデルでのキー  :店舗モデルのid
            'key_to' => 'ConferenceId',
            // 関係するテーブルが保存されるときに同時にアップデートするか
            'cascade_save' => false,
            // 親テーブルの関連レコードが削除されるときに同時に削除するか
            'cascade_delete' => false,
        ),
    );
    
}