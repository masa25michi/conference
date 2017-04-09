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
        $data = array();
        $data['banner_title'] = '3rd Global Tourism and Hospitality Conference';
        
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
        $data = array();
        $data['banner_title'] = 'Sign In';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/signin');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function action_signout(){
        $data = array();
        $data['banner_title'] = '3rd Global Tourism and Hospitality Conference';
        
        Cookie::delete('tel');
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/index');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }
    
    public function action_userpage(){
        $data['banner_title'] = 'HK Conference User Page';
        $this->template->footer = View::forge('layout/footer_with_sponsor');
        $this->template->banner = View::forge('layout/banner', $data, FALSE);
        
        if(!is_null(Cookie::get('tel'))){
            $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
        }else{
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

                }else{
                    $data =array('server' => $result);
                    Cookie::set('tel',$result['tel']);
                    $this->template->content = View::forge('layout/content/userpage', $data, FALSE);
                }

            }else{
                $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
                $this->template->content = View::forge('layout/content/index', $data, FALSE);
                $this->template->content->set_safe('html_error', 'Please Sign In');
            }
        }   
    }
    
    public function action_survey(){
        $data = array();
        $data['banner_title'] = 'Survey';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/content/survey');
        $this->template->footer = View::forge('layout/footer_with_sponsor');
    }

}