<?php
    if(isset($html_error)){
        echo '<p style="text-align:center; color:red;">'.$html_error.'</p>';
    }
?>
<!-- Menu -->
<div class="wrapper styl3" >
    <h1>Menu</h1>
        <article id="registeration">
                <div class="container">
                    <!--<h1 style='color:#0F2856;'>Sign In</h1>-->
                        <div class="row" >
                            <?php
                                if(is_null(Cookie::get('tel'))){
                                    ?>
                                    <div style='width: 50%;clear: none;margin-left: 0; '>
                                        <a href = "signin">
                                            <article class="box style2" style = ''>
                                                <i class="fa fa-sign-in" aria-hidden="true" ></i>
                                                <p ><b>Sign In</b></p>
                                            </article>

                                        </a>
                                    </div>
                                    <div style='width: 50%;clear: none;margin-left: 0;'>
                                            <a href = "signup">
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
                                            <a href = "userpage">
                                                <article class="box style2">
                                                    <i class="icon material-icons">account_box</i>
                                                    <p ><b>My Page</b></p>
                                                </article>

                                            </a>
                                        </div>
                                        <div style='width: 50%;clear: none;margin-left: 0;'>
                                                <a href = "signout">
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
                                    <a href = "im">
                                        <article class="box style1">
                                            <i class="icon material-icons" >forum</i>
                                            <p ><b>Chat</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u " >
                                    <a href = "location" >
                                        <article class="box style1">
                                            <i class="icon material-icons" >location_on</i>
                                            <p><b> Location</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u">
                                    <a href = "programme">
                                        <article class="box style1">
                                            <i class="icon material-icons" >today</i>
                                            <p><b>Programme</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="4u 12u menuicon">
                                    <a href = "survey">
                                        <article class="box style1">
                                            <i class="icon material-icons" >assignment</i>
                                            <p><b> Survey</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            
                            <div class="4u 12u menuicon">
                                    <a href = "abstract">
                                        <article class="box style1">
                                            <i class="icon material-icons" >toc</i>
                                            <p><b>Abstracts</b></p>
                                        </article>
                                        
                                    </a>
                            </div>

                            <div class="4u 12u menuicon" style=' position:relative; ' >
                                    <a href = "acknowledgement" >
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