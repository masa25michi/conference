<!-- Menu -->
<div class="wrapper style3">
        <article id="menu">
                <header>
                        <h2>Menu</h2>
                        <!-- <p>Please select one of our services</p> -->
                </header>
                <div class="container">
                        <div class="row">
                                <div class="4u 12u">
                                        <a href = "survey.php">
                                                <article class="box style1" >
                                                        <i class="icon material-icons" >assignment</i>
                                                        <p><b>Survey</b></p>
                                                </article>
                                        </a>
                                </div>
                                <div class="4u 12u">
                                        <a href="floorPlans.php">
                                                <article class="box style1">
                                                         <i class="icon material-icons" >location_on</i>
                                                        <p><b>Location</b></p>
                                                </article>
                                        </a>
                                </div>

                                <div class="4u 12u">
                                        <a href="programme.php">
                                                <article class="box style1" >
                                                        <i class="icon material-icons" >today</i>
                                                        <p><b>Programme</b></p>
                                                </article>
                                        </a>
                                </div>
                        </div>
                        <div class="row">
                                <div class="4u 12u">
                                        <a href="timetable.php">
                                                <article class="box style1" >
                                                         <i class="icon material-icons" >schedule</i>
                                                        <p><b>Timetable</b></p>
                                                </article>
                                        </a>
                                </div>
                                <div class="4u 12u">
                                        <a href="acknowledgement.php">
                                                <article class="box style1" >
                                                         <i class="icon material-icons" style = "font-size: 48px;">thumb_up</i>
                                                        <p><b>Acknowledg<br style="content:' '; display: block; margin:0.1px;">ement</b></p>
                                                </article>
                                        </a>
                                </div>

                                <div class="4u 12u">
                                        <a href="abstract.php">
                                                <article class="box style1" >
                                                        <i class="icon material-icons" >toc</i>
                                                        <p><b>Abstract</b></p>
                                                </article>
                                        </a>
                                </div>
                        </div>


                        <div class="row">
                                <div class="4u 12u">
                                        <a href="im.php">
                                                <article class="box style1">
                                                        <i class="icon material-icons">forum</i>
                                                        <p><b>Chat</b></p>
                                                </article>
                                        </a>
                                </div>
                                <div class="4u 12u">
                                        <a href="about.php">
                                        <article class="box style1">
                                                <i class="icon material-icons">info_outline</i>
                                                <p><b>About</b></p>
                                        </article>
                                        </a>
                                </div>
                        </div>
                </div>
        </article>
</div>
<!-- Sign in -->			
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
                                <?php echo Form::open(); ?>
                                        <p>TEL</p>
                                        <input type='text' name='tel' id='tel' placeholder='TEL' size = "40"/> <br>

                                        <p>Password</p>
                                        <input type='text' name='pass' id='pass' placeholder='Password' size = "40"/>
                                        <br>
                                        <br>
                                        <br>

                                        <ul class='actions'>
                                        <li><input type='submit' name = 'signIn' value='Sign in' /></li>
                                        <li><input type='reset' value='Clear' class='alt' /></li>
                                        </ul>
                                </form>
                                <?php
                        }
                ?>


        </article>
</div>