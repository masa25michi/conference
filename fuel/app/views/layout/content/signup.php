<?php
    if(isset($html_error)){
        echo '<p style="text-align:center; color:red;">'.$html_error.'</p>';
    }
?>

<div class="wrapper style3" id = 'register'>
        <article id = 'Sign_in' >
                    <header>
                            <h2>Registration</h2>
                    </header>

                    <?php echo Form::open(array('action' => 'main/aftersignup', 'method' => 'POST')); ?>
                        <div class='row'>
                            <div class='4 12u'>
                                
                                <!--<p style='font-size:120%;'>Title</p>-->
                                <?php 
                                echo Form::select('title', '', array(
                                    'title' =>'Title',
                                    'mr' =>'Mr.',
                                    'ms' => 'Ms.',
                                    'mss' => 'Mss.',
                                    'mrs' => 'Mrs.'
                                ), array('placeholder'=>'Title'));?>

                            </div>
                            
                            <div class='4 12u'>
                                <?php echo Form::input('firstname','',array('size'=>'40', 'placeholder'=>'First name')); ?>
                            </div>
                            <div class='4 12u'>
                                <?php echo Form::input('lastname','',array('size'=>'40', 'placeholder'=>'Last name')); ?>
                            </div>
                            <div class='4 12u'>
                                <?php echo Form::input('email','',array('size'=>'40','placeholder'=>'Email')); ?>
                            </div>
                            
                            <div class='4 12u'>
                                <?php echo Form::input('tel','',array('size'=>'40','placeholder'=>'Country Code + Phone Number')); ?>
                                
                                <p style = 'font-size:80%; text-align:left;margin-left:8px;'>Example: 85234002200</p>
                            </div>
                            
                        </div>

                        <br><ul class='actions'>
                            <li><?php echo Form::input('submit', 'Sign Up', array('type'=>'submit'));  ?></li>
                            <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                        </ul>
                        <?php echo Form::close();
                        
                ?>


        </article>
</div>