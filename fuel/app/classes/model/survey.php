<?php

class Model_Survey extends \Orm\Model{
    protected static $_table_name = 'survey';
    
    protected static $_primary_key = array('SurveyId');
    
    protected static $_properties = array(
        'SurveyId',
        'Q1',
        'Q2',
        'Q3',
        'Q4',
        'Q5',
        'Q6',
        'Q7',
        'Q8',
        'Q9'
    );
}