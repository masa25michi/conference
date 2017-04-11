
    <div class="wrapper style3" >
        

        <article id="registeration">
            <div class="container">
                <!--<h1 style='color:#0F2856;'>Sign In</h1>-->
                <?php if(is_null(Cookie::get('tel'))){ ?>
                        <header>
                            <h1>Sign In</h1>
                        </header>
                    <div class="row" >
                        
                        
                        <div style='width: 50%;clear: none;margin-left: 0; '>

                            <a href = '<?php echo Uri::create('/main/signin'); ?>'>
                                <article class="box style2" style = ''>
                                    <i class="fa fa-sign-in" aria-hidden="true" ></i>
                                    <p ><b>Sign In</b></p>
                                </article>
                            </a>
                        </div>
                        <div style='width: 50%;clear: none;margin-left: 0;'>

                                <a href = '<?php echo Uri::create('/main/signup'); ?>'>
                                    <article class="box style2">
                                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        <p ><b>Sign Up</b></p>
                                    </article>

                                </a>
                        </div>
                        <?php }else{ ?>
                        <header>
                            <!--<h1></h1>-->
                        </header>
                        <div class="row" >
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
    </div>