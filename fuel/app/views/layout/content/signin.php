<?php
    if(isset($html_error)){
        echo '<p style="text-align:center; color:red;">'.$html_error.'</p>';
    }
?>

<div class="wrapper style3" id = 'register'>
        <article id = 'Sign_in' >
                    <header>
                            <h2>Sign in</h2>
                    </header>

                    <?php echo Form::open(array('action' => 'main/userpage', 'method' => 'POST')); ?>

                        <p><?php echo Form::label('Tel', 'tel'); ?></p>
                        <p><?php echo Form::input('tel','',array('size'=>'40', 'placeholder'=>'TEL')); ?></p>


                        <p><?php echo Form::label('Email', 'email'); ?></p>
                        <p><?php echo Form::password('email','',array('size'=>'40', 'placeholder'=>'Email')); ?></p>
                        <br><ul class='actions'>
                            <li><?php echo Form::input('submit', 'Sign In', array('type'=>'submit'));  ?></li>
                            <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                        </ul>
                        <?php echo Form::close();
                        
                ?>


        </article>
</div>