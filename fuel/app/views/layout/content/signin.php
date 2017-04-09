<div class="wrapper style3" id = 'register'>
        <article id = 'Sign_in' >
                <?php
                        if(!empty($_SESSION['isSigned']) && $_SESSION['isSigned']==true){
                                echo 
                                '
                                <div class = "row"><div class="4u 12u(mobile)">
                                <h1>Hi! Welcome back</h1>
                                <a href="user_page.php" class="button big scrolly">My Schedule</a>
                                <a href="user_page.php?signOut=1;" class="button big scrolly">Log Out</a>

                                </div>';
                        }else{
                                ?>
                                <header>
                                        <h2>Sign in</h2>
                                </header>
                                <!--<form method='POST' action='' style="display: inline-block;">-->
                                <?php echo Form::open(array('action' => 'main/userpage', 'method' => 'POST')); ?>
<!--                                        <p>TEL</p>
                                        <input type='text' name='tel' id='tel' placeholder='TEL' size = "40"/> <br>

                                        <p>Password</p>
                                        <input type='text' name='pass' id='pass' placeholder='Password' size = "40"/>
                                        <br>
                                        <br>
                                        <br>

                                        <ul class='actions'>
                                        <li><input type='submit' name = 'signIn' value='Sign in' /></li>
                                        <li><input type='reset' value='Clear' class='alt' /></li>
                                        </ul>-->
                                    
                                    <p><?php echo Form::label('Tel', 'tel'); ?></p>
                                    <p><?php echo Form::input('tel','',array('size'=>'40', 'placeholder'=>'TEL')); ?></p>
                                    
                                    
                                    <p><?php echo Form::label('Email', 'email'); ?></p>
                                    <p><?php echo Form::password('email','',array('size'=>'40', 'placeholder'=>'Email')); ?></p>
                                    <br><ul class='actions'>
                                        <li><?php echo Form::input('submit', 'Sign In', array('type'=>'submit'));  ?></li>
                                        <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                                    </ul>
                                    <?php echo Form::close();
                        }
                ?>


        </article>
</div>