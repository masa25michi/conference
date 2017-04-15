<?php
    if(isset($html_error)){
        echo '<p style="text-align:center; color:red;">'.$html_error.'</p>';
    }
?>
<!-- Menu -->
<div class="wrapper style3" >
    <h1>Menu</h1>
        <article id="registeration">
                <div class="container">
                        <div class="row" >
                            <?php
                                if(is_null(Cookie::get('tel'))){
                                    ?>
                                    <div style='width: 50%;clear: none;margin-left: 0; '>
                                        <!--<a href = "signin">-->
                                        <a href = '<?php echo Uri::create('/main/signin'); ?>'>
                                            <article class="box style2" style = ''>
                                                <i class="fa fa-sign-in" aria-hidden="true" ></i>
                                                <p ><b>Sign In</b></p>
                                            </article>
                                        </a>
                                    </div>
                                    <div style='width: 50%;clear: none;margin-left: 0;'>
                                            <!--<a href = "signup">-->
                                            <a href = '<?php echo Uri::create('/main/signup'); ?>'>
                                                <article class="box style2">
                                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                                    <p ><b>Sign Up</b></p>
                                                </article>

                                            </a>
                                    </div>
                                    <?php
                                }else{
                                    ?>
                                        <div style='width: 50%;clear: none;margin-left: 0; '>
                                            <!--<a href = "userpage">-->
                                            <a href = '<?php echo Uri::create('/main/userpage'); ?>'>
                                                <article class="box style2">
                                                    <i class="icon material-icons">account_box</i>
                                                    <p ><b>My Page</b></p>
                                                </article>

                                            </a>
                                        </div>
                                        <div style='width: 50%;clear: none;margin-left: 0;'>
                                                <!--<a href = "signout">-->
                                                <a href = '<?php echo Uri::create('/main/signout'); ?>'>
                                                    <article class="box style2">
                                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                                        <p ><b>Sign Out</b></p>
                                                    </article>

                                                </a>
                                        </div>
                                                
                                    <?php
                                }
                            
                            ?>
                                
                            
                        </div>
                </div>
        </article>
                    
        <article id="menu" style='margin-top:-20px;'>
                <div class="container">
                        <div class="row" >
                            <div class="4u 12u ">
                                    <!--<a href = "im">-->
                                    <a href = '<?php echo Uri::create('/main/im'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >forum</i>
                                            <p ><b>Chat</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u " >
                                    <!--<a href = "location" >-->
                                    <a href = '<?php echo Uri::create('/main/location'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >location_on</i>
                                            <p><b> Location</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u">
                                    <!--<a href = "programme">-->
                                    <a href = '<?php echo Uri::create('/main/program'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >today</i>
                                            <p><b>Programme</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="4u 12u menuicon">
                                    <!--<a href = "survey">-->
                                    <a href = '<?php echo Uri::create('/main/survey'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >assignment</i>
                                            <p><b> Survey</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u menuicon">
                                    <!--<a href = "abstract">-->
                                    <a href = '<?php echo Uri::create('/main/abstracts'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >toc</i>
                                            <p><b>Abstracts</b></p>
                                        </article>
                                        
                                    </a>
                            </div>

                            <div class="4u 12u menuicon" style=' position:relative; ' >
                                    <!--<a href = "acknowledgement" >-->
                                    <a href = '<?php echo Uri::create('/main/acknowledgement'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >thumb_up</i>
                                            <p style='font-size:95%; position:absolute; float:left; left:18px; '><b>Acknowledgements</b></p>
                                            <br><br><br>
                                        </article>
                                    </a>
                            </div>
                        </div>                    
                </div>
            <br>
        </article>
    
</div>		

<!-- Search -->
<div class="wrapper style1">
        <article id="search">
                <header>
                    <h2>Search</h2><br>
                </header>

                <div>
                        <?php echo Form::open(array('action' => 'main/search', 'method' => 'POST')); ?>
                            <p><?php echo Form::input('keyword','',array('size'=>'40', 'placeholder'=>'Keyword')); ?></p>

                            <br><ul class='actions'>
                                <li><?php echo Form::input('submit', 'Search', array('type'=>'submit'));  ?></li>
                                <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                            </ul>
                        <?php echo Form::close(); ?> 
                        <br><br>
                </div>
        </article>
</div>