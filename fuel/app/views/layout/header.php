
<div id = 'top'><nav id='nav'>
        <ul class='container'>
                <li><a href='<?php echo Uri::create('/main/index'); ?>'>Home</a></li>
                <li><a href='<?php echo Uri::create('/main/index'); ?>'>Menu</a>
                                        <ul>
                                                <li><a href='<?php echo Uri::create('/main/abstracts'); ?>'>Abstracts</a></li>
                                                <li><a href='<?php echo Uri::create('/main/acknowledgement'); ?>'>Acknowledgements</a></li>
                                                <li><a href='<?php echo Uri::create('/main/im'); ?>'>Chat</a></li>
                                                <li><a href='<?php echo Uri::create('/main/program'); ?>'>Programme</a></li>
                                                <li><a href='<?php echo Uri::create('/main/location'); ?>'>Location</a></li>
                                                <li><a href='<?php echo Uri::create('/main/survey'); ?>'>Survey</a></li>
                                                
                                        </ul>
                                </li>
                <li><a href='<?php echo Uri::create('/main/search'); ?>'>Search</a></li>
                <?php if(!is_null(Cookie::get('tel'))){?>
                    <li><a href='<?php echo Uri::create('/main/userpage'); ?>'>My Page</a></li>
                    <li class='register'><a href='<?php echo Uri::create('/main/signout'); ?>'><strong>Sign Out</strong></a></li>
                <?php }else{?>
                    <li><a href='<?php echo Uri::create('/main/signin'); ?>'>Sign In</a></li>
                    <li class='register'><a href='<?php echo Uri::create('/main/signup'); ?>'><strong>Register</strong></a></li>
                <?php } ?>
                
                

        </ul>
</nav></div>"