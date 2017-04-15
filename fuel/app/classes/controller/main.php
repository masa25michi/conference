<?php
require_once( APPPATH . 'vendor/tcpdf/config/tcpdf_config.php' );
require_once( APPPATH . 'vendor/tcpdf/tcpdf.php' );
require_once( APPPATH . 'vendor/fpdi/fpdi.php' );

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
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
        
    }

    public function forge_validation(){
        $val = Validation::forge('signin');

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
    
    public function survey_validation(){
        
        
    }
    
    public function action_signin(){
        
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        if(!is_null(Cookie::get('tel'))){
            self::action_userpage();
        }else{
            $this->template->content = View::forge('layout/content/signin');
            $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
            $this->template->banner = View::forge('layout/banner', $data, false);
        }
            
            
            
    }
    
    public function action_signout(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        Cookie::delete('tel');
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/index');
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
    }
    
    public function action_userpage(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $data['banner_title'] = 'HK Conference User Page';
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
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
                    $this->template->content = View::forge('layout/content/signin', $data, FALSE);
                    $this->template->content->set_safe('html_error', 'Sign In Failed');
                    return;
                }else{
                    Cookie::set('tel',$result['tel']);
                    $usertel = $result['tel'];
                }
            }else{
                $data['banner_title'] = Constant::CONFERENCE_NAME;
                $this->template->content = View::forge('layout/content/signin', $data, FALSE);
                $this->template->content->set_safe('html_error', 'Please Sign in');
                return;
            }
        }else{
            $usertel = Cookie::get("tel");
        }
        
        //query for user's time table program
        $query  = 'SELECT ev.EventId as eventId, ev.BegTime, ev.EndTime, ev.Title, ev.Venue, ev.Date FROM Event AS ev ';
        $query .= 'LEFT JOIN UserEvent AS ue ON ev.EventId = ue.EventId ';
        $query .= 'WHERE ue.UserTel = "'.$usertel.'" ORDER BY ev.BegTime ASC;';

        $result = DB::query($query)->as_object('Model_Userevent')->execute(); //execute query3
//        print_r($result);
//        die($result->count());
//        die(DB::error_info());
        
        $data =array('server' => $result);
  
        $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
    }
    
    public function action_search(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
        $this->template->banner = View::forge('layout/banner', $data, FALSE);

//        $val = $this->forge_validation();
        $keyword = Input::post('keyword');
        
        if(!empty($keyword)){
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
            
            $data['server'] = $result;
            
            if($result->count()<1){
                
                $this->template->content = View::forge('layout/content/search', $data, FALSE);
                $this->template->content->set_safe('html_error', 'No result found');

            }else{
                
                
                $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
                $this->template->content = View::forge('layout/content/search', $data, FALSE);
                
            }

        }else{
//            $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
            $data['server'] = null;
            $this->template->content = View::forge('layout/content/search', $data, FALSE);
//            $this->template->content->set_safe('html_error', 'Sign In Failed');
        }
        
    }
    
    public function action_survey(){
        $data['banner_title'] = '<h1>Conference Feedback Survey</h1>';
        
        //get survey question 
        $sql = "SELECT * FROM `Surveyquestion` order by QuestionId ASC;";
        $result  = DB::query($sql)->as_object('Model_Surveyquestion')->execute();

        $data['server'] = $result;
            
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/survey',$data, false);
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
       
    }
    
    
    
    
    public function action_acknowledgement(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/acknowledgement');
        $this->template->footer = View::forge('layout/footer/footer');
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
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
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
    
    public function action_abstracts(){
        $data['banner_title'] = Constant::CONFERENCE_NAME.'<br>Abstracts';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/abstracts');
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
    }
    
    public function action_pdfviewer($filename){
        $pdf = new FPDI();
        $pdf->setPrintHeader( false );
        $pdf->setPrintFooter( false );
        $pageCount = $pdf->setSourceFile( DOCROOT .'abstracts/test.pdf' );

        for($i=1;$i<=$pageCount;$i++){//add viewer page until EOF
            $pdf->AddPage();
            $index = $pdf->importPage( $i );
            $pdf->useTemplate( $index );
        }

        //write contents in to pdf viewer before output
        $pdf->Write( 0, 'TEST' );

        $pdf->Output( $filename.'.pdf', 'I');
    }
    
    public function action_location(){
        
    }
    
    public function action_aftersurvey(){
        
        $val = $this->forge_ValidateSurvey();
        if($val->run()){
            $data['input'] = $val->validated();
            
            $query = DB::insert('Survey');
            
            //Create columns array
            $columns[0] = 'SurveyId';
//            die($data['input']['num_rows']);
            for($i=1;$i<=$data['input']['num_rows'];$i++){
                if($i==7){
                    for($j=1;$j<=17;$j++){
                        $columns[($i + $j -1)] = 'Q'.$i.'_'.$j;
                    }
                    
                }else if($i>7){
                    $columns[$i+17] = 'Q'.$i;
                }else{
                    $columns[$i] = 'Q'.$i;
                }
            }
            
            //Create Values array depends on above column array
            $values[0]=((!is_null(Cookie::get('tel')))?(Cookie::get('tel').time()):time());
            for($i=1;$i<=$data['input']['num_rows'];$i++){
                $index = 'q'.$i;
                if($i==7){
                    for($j=1;$j<=17;$j++){
                        $index = 'q'.$i.'_'.$j;
                        $values[($i + $j -1)] = $data['input'][$index];
                    }
                    
                }else if($i>7){
                    $values[$i+17] = $data['input'][$index];
                }else{
                    $values[$i] = $data['input'][$index];
                }
                
            }

            // Set the columns
            $query->columns($columns);

            // Set the values
            $query->values($values);

            DB::query($query)->as_object('Model_Survey')->execute();
            
//            print_r($data['input']);
            $data['banner_title'] = Constant::CONFERENCE_NAME;
            $this->template->banner = View::forge('layout/banner', $data, false);
            $this->template->content = View::forge('layout/content/aftersurvey');
            $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
        }
        else
        {
//            $form->repopulate();
//            self::action_survey($val->show_errors());
//            $this->template->title = 'コンタクトフォーム: エラー';
//            $this->template->content = View::forge('form/index');
//            $this->template->content->set_safe('html_error', $val->show_errors());
//            $this->template->content->set_safe('html_form', $form->build('/form/confirm'));
            $data['banner_title'] = Constant::CONFERENCE_NAME;
            $this->template->banner = View::forge('layout/banner', $data, false);
            $this->template->content = View::forge('layout/content/error');
            $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
            $this->template->content->set_safe('html_error', $val->show_errors());

        }

    }
    
    public function forge_ValidateSurvey(){
        $val = Validation::forge("survey");
        
        $val->add('num_rows', '');
//             ->add_rule('required');
        
        $val->add('q1', 'Question 1')
             ->add_rule('required');
        
        $val->add('q2', 'Question 2')
             ->add_rule('required');
        
        $val->add('q3', 'Question 3')
             ->add_rule('required');
        
        $val->add('q4', 'Question 4')
             ->add_rule('required');
        
        $val->add('q5', 'Question 5')
             ->add_rule('required');
        
        $val->add('q6', 'Question 6')
             ->add_rule('required');
        
        for($i=1;$i<=17;$i++){
            $val->add('q7_'.$i, 'Question 7 part '.$i)
             ->add_rule('required');
        }
        
//        
        $val->add('q8', 'Question 8')
             ->add_rule('required');
        
        $val->add('q9', 'Question 9')
             ->add_rule('required');
        
        $val->add('q10', 'Question 10');
//             ->add_rule('required');
        
        return $val;
    }
    
    public function forge_ValidateSignup(){
        $val = Validation::forge("signup");
        
         $val->add('title', 'Title')
             ->add_rule('required')
             ->add_rule('match_collection', array("mr",'ms','mss','mrs'));
        
        $val->add('firstname', 'First Name')
             ->add_rule('required');
        
        $val->add('lastname', 'Last Name')
             ->add_rule('required');
        
        $val->add('email', 'Email')
             ->add_rule('required')
             ->add_rule('valid_email');
        
        $val->add('tel', 'Phone')
             ->add_rule('required')
             ->add_rule('min_length',5)
             ->add_rule('valid_string',array('numeric'));
        
        $val->set_message('required', 'The field ":label" is required.');
        $val->set_message('valid_email', 'Please set valid email address');
        $val->set_message('min_length', 'Please set valid telphone number');
        $val->set_message('match_collection', 'The field ":label" should be selected.');
        $val->set_message('valid_string', 'Please set valid telphone number');

        
        return $val;
    }
    
    public function action_signup(){
        $data['banner_title'] = Constant::CONFERENCE_NAME;
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/signup');
        $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
//        $this->template->content->set_safe('html_error', $val->show_errors());
    }
    public function action_aftersignup(){
        $error_msg = '';
        $signup_result = false;
        $val = $this->forge_ValidateSignup();
        if($val->run()){
            
            $data['input'] = $val->validated();
            
            //check if user exists already
            $result = Model_User::find('first', array(
                'where' =>array(
                    'tel' => $data['input']['tel']
            )));
            if(!is_null($result)){
                $signup_result = false;
                $error_msg = 'You have already signed up';
            }else{
                $signup_result = true;
                // prepare an insert statement
                $query = DB::insert('user');

                // Set the columns
                $query->columns(array(
                    'firstname',
                    'lastname',
                    'email',
                    'tel',
                    'title'
                ));

                // Set the values
                $query->values(array(
                    $data['input']['firstname'],
                    $data['input']['lastname'],
                    $data['input']['email'],
                    $data['input']['tel'],
                    $data['input']['title']
                ));

                DB::query($query)->as_object('Model_Userevent')->execute();
                Cookie::set('tel', $data['input']['tel']);
                Response::redirect('/main/userpage');
                
            }   
        }else{
            $signup_result = false;
        }
        
        if(!$signup_result){
            
//            $error_msg = 'You have already signed up';
            foreach ($val->error_message() as $field => $message)
            {
                $error_msg .= $message;
                $error_msg .= "<br>";
            }
            
            $data['banner_title'] = Constant::CONFERENCE_NAME;
            $this->template->banner = View::forge('layout/banner', $data, false);
            $this->template->content = View::forge('layout/content/error');
            $this->template->footer = View::forge('layout/footer/footer_with_sponsor');
            $this->template->content->set_safe('html_error', $error_msg);
        }
    }
    

}