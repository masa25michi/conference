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
                                <form method='POST' action='user_page.php' style="display: inline-block;">
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