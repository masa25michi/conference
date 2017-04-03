<!-- Search -->
        <div class="wrapper style2" id="search">
                <article id="search">
                        <header>
                                <h2>Search</h2>
                                <p>Please search what you are looking for</p>
                        </header>

                        <div>
                                <form action="search.php" method="GET" style="display: inline-block;">
                                        <?php
                                                foreach($_GET as $key=>$value){
                                                if($key != "keyword")
                                                        echo '<input type="hidden" name="'.$key.'" value="'.$value.'" />'; 
                                                }
                                        ?>
                                        <input type="text" name="keyword" placeholder="Please type Keyword" size = "40"/><br>
                                        <ul class='actions'>
                                        <li><input type="submit" value="Search" /></li>
                                        <li><input type='reset' value = "Reset" /></li>
                                        </ul>
                                </form>
                                <br><br>
                        </div>


                        <div class="container" >
                                <div class="row">
                                        <div class="4u 12u">
                                                <section class="box style1" style = "height:130px;">
                                                        <span class="icon featured fa fa-calendar" style="font-size:8px;"></span>
                                                        <p>Schedule</p>
                                                        <!-- <p>(describe what it is)</p> -->
                                                </section>
                                        </div>
                                        <div class="4u 12u">
                                                <section class="box style1" style = "height:130px;">
                                                        <span class="icon featured fa-info-circle" style="font-size:8px;"></span>
                                                        <p>Events</p>
                                                        <!-- <p>(describe what it is)</p> -->
                                                </section>
                                        </div>
                                        <div class="4u 12u">
                                                <section class="box style1" style = "height:130px;">
                                                        <i class="icon featured fa fa-user" style="font-size:8px;"></i>
                                                        <p>Speakers</p>
                                                        <!-- <p>(describe what it is)</p> -->
                                                </section>
                                        </div>
                                </div>
                        </div>
                        <!-- <footer> -->
                                <!-- <p>Go General Search</p> -->
                                <!-- <a href="#search" class="button big scrolly">Search</a> -->
                        <!-- </footer> -->
                </article>
        </div>