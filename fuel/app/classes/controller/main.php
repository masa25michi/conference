<?php

class Controller_Main extends Controller_Template
{
      
    public function before(){
        parent::before();
        
        $this->template->css = array();    
        $this->template->js  = array();   
        $this->template->set_global('title','HK Conference 2017');
        $this->template->header = View::forge('layout/header');
    }
    
    public function action_index()
    {   
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/index');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
        
    }

    public function forge_validation(){
        $val = Validation::forge();

        $val->add('tel', 'tel')
            ->add_rule('trim')
            ->add_rule('required')
            ->add_rule('max_length', 50);
        $val->add('email', 'email')
            ->add_rule('trim')
            ->add_rule('required')
            ->add_rule('max_length', 50);

        return $val;
    }
    
    public function action_signin(){
        
        $data['banner_title'] = 'Sign In';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/signin');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function action_signout(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        Cookie::delete('tel');
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/index');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function action_userpage(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $data['banner_title'] = 'HK Conference User Page';
        $this->template->footer = View::forge('layout/footer_with_sponsor');
        $this->template->banner = View::forge('layout/banner', $data, FALSE);
        
        if(is_null(Cookie::get('tel'))){
            $val = $this->forge_validation();
            if($val->run()){
                $data['input'] = $val->validated();
                $result = Model_User::find('first', array(
                    'where' =>array(
                        'tel' => $data['input']['tel'],
                        'email' => $data['input']['email']
                )));
                if(is_null($result)){
                    $this->template->content = View::forge('layout/content/index', $data, FALSE);
                    $this->template->content->set_safe('html_error', 'Sign In Failed');
                    return;
                }else{
                    Cookie::set('tel',$result['tel']);
                }
            }else{
                $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
                $this->template->content = View::forge('layout/content/index', $data, FALSE);
                $this->template->content->set_safe('html_error', 'Please Sign In');
                return;
            }
        }

        //query for user's time table program
        $query  = 'SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev ';
        $query .= 'LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId ';
        $query .= 'WHERE ue.UserTel = '.Cookie::get('tel').' ORDER BY ev.BegTime ASC;';

        $result = DB::query($query)->as_object('Model_Userevent')->execute(); //execute query3
        
        $data =array('server' => $result);
  
        $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
    }
    
    public function action_search(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $this->template->footer = View::forge('layout/footer_with_sponsor');
        $this->template->banner = View::forge('layout/banner', $data, FALSE);

//        $val = $this->forge_validation();
        $keyword = Input::post('keyword');
        
        if(!is_null($keyword)){
            $data['keyword'] = $keyword;
            
            $key = strtolower($keyword);
            if(strcmp ('survey', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/survey.php" ); 
            }
            if(strcmp ('location', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/floorPlans.php" ); 
            }
            if(strcmp ('programme', $key)==0 || strcmp('program', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/programme.php" ); 
            }
            if(strcmp ('acknowledgement', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/acknowledgement.php" ); 
            }
            if(strcmp ('abstract', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/abstract.php" ); 
            }
            if(strcmp ('chat', $key)==0){
                    Header( "HTTP/1.1 301 Moved Permanently" ); 
                    Header( "Location: http://www2.comp.polyu.edu.hk/~14116974d/test/web_v2/im.php" ); 
            }

            $sql = "SELECT * FROM `Conference` as con, `Event` as ev "
                    . "WHERE con.ConferenceId = ev.ConferenceId "
                    . "AND CONCAT (con.ConferenceId, con.ConferenceName, ev.EventId, ev.Title, ev.Venue, ev.Date) LIKE '%".$keyword."%';";
            $result  = DB::query($sql)->as_object('Model_Conference')->execute();

            if(is_null($result)){
                $this->template->content = View::forge('layout/content/index', $data, FALSE);
                $this->template->content->set_safe('html_error', 'Sign In Failed');

            }else{
                $data['server'] = $result;
                
                $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
                $this->template->content = View::forge('layout/content/search', $data, FALSE);
                $this->template->content->set_safe('html_error', 'Sign In Success');
            }

        }else{
//            $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
            $this->template->content = View::forge('layout/content/index', $data, FALSE);
            $this->template->content->set_safe('html_error', 'Please Sign In');
        }
        
    }
    
    public function action_survey(){
        $data['banner_title'] = 'Survey';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/survey');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function action_acknowledgement(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/acknowledgement');
        $this->template->footer = View::forge('layout/footer');
    }
    
    public function action_program(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        
        $query1=(self::getQuery(1));    //get query of information of conference where its id = 1
        $query2=(self::getQuery(2));    //get query of information of conference where its id = 2
        $query3=(self::getQuery(3));    //get query of information of conference where its id = 3
            
        $result1  = DB::query($query1)->as_object('Model_Conference')->execute(); //execute query1
        $result2  = DB::query($query2)->as_object('Model_Conference')->execute(); //execute query2
        $result3  = DB::query($query3)->as_object('Model_Conference')->execute(); //execute query3
        
        $data['server1'] = $result1;
        $data['server2'] = $result2;
        $data['server3'] = $result3;
        
        $program_view = View::forge('layout/content/program', $data, false);
        $program_view->banner = View::forge('layout/banner/signbanner');
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = $program_view;
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function getQuery($day){
        
        $query  = 'SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Conference AS con ';
        $query .= 'LEFT JOIN Event AS ev ON con.ConferenceId=ev.ConferenceId ';
        $query .= 'WHERE con.ConferenceId = '.$day.' ORDER BY ev.BegTime ASC;';
        
        return $query;
    }
    
    public function action_addschedule(){
        if(input::is_ajax()){
            $eventId = Input::post('addData');
            
            $sql = "SELECT * FROM UserEvent WHERE UserTel ='".Cookie::get('tel')."' AND EventId ='".$eventId."';";
            $result = DB::query($sql)->as_object('Model_Userevent')->execute(); //execute query3
            
            if($result->count()>0){
                return "Already";
            }
            
            // prepare an insert statement
            $query = DB::insert('UserEvent');

            // Set the columns
            $query->columns(array(
                'UserTel',
                'EventId',
            ));

            // Set the values

            $query->values(array(
                
                Cookie::get('tel'),
                $eventId
            ));
            
            

            $result = DB::query($query)->as_object('Model_Userevent')->execute();
           
            return "OK";
            
        }
    }
    
    public function action_removeschedule(){
        if(input::is_ajax()){
            $eventId = Input::post('removeData');

            
            $sql = "SELECT * FROM UserEvent WHERE UserTel ='".Cookie::get('tel')."' AND EventId ='".$eventId."';";
            $result = DB::query($sql)->as_object('Model_Userevent')->execute(); //execute query3
            
            if($result->count()>0){
                //$sql = "DELETE from UserEvent WHERE EventId=".$eventId;
                // prepare a delete statement
                $query = DB::delete('UserEvent');

                // Set a where statement
                $query->where('EventId',$eventId );
                $result = DB::query($query)->as_object('Model_Userevent')->execute();
                return "Deleted";
            }else{
                return "Not Found Row";
            }
            
        }
    }

}