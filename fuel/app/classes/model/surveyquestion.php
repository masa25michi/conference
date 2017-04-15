<?php

class Model_Surveyquestion extends \Orm\Model{
    protected static $_table_name = 'surveyquestion';
    
    protected static $_primary_key = array('QuestionId');
    
    protected static $_properties = array(
        'QuestionId',
        'Type',
        'Contents',
        'Choices'
    );
}