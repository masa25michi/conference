<?php echo $banner;?>



<!-- Programme Table -->
	<div class="style2" style="box-shadow: inset 0px 1px 0px 0px rgba(0, 0, 0, 0.05), inset 0px 2px 3px 0px rgba(0, 0, 0, 0.1);">

            <div class="table-wrapper">
                <div class="table-menu-wrapper">
                        
                        <div class="table-menu table-menu-hidden" >
                                <ul >
                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-1" value="co-1" checked="checked"> <label for="toggle-col-1">Begin Time</label></li>
                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-2" value="co-2" checked="checked"> <label for="toggle-col-2">End Time</label></li>
                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-3" value="co-3" checked="checked"> <label for="toggle-col-3">Event Name</label></li>
                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-4" value="co-4" checked="checked"> <label for="toggle-col-4">Venue</label></li>
                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-5" value="co-5" checked="checked"> <label for="toggle-col-5">Abstract</label></li>
                                        <?php
                                            if(!is_null(Cookie::get('tel'))){
                                                    echo '<li><input type="checkbox" name="toggle-cols" id="toggle-col-6" value="co-6" checked="checked"> <label for="toggle-col-6">Add</label></li>';

                                            }
                                        ?>
                                        </li>
                                </ul>
                        </div>
                </div>
            
                    <br><br>
                    
                    <article id = "firstday">
                        <?php getData($server1,"Conference First Day:  June 5th");?>
                    </article>
                    
                    <br><br><br>
                    
                    <article id = "secondday">
                        <?php getData($server2, "Conference Second Day:  June 6th");?>
                    </article>
                    
                    <br><br><br>
                    
                    <article id = "thirdday">
                        <?php getData($server3, "Conference Third Day:  June 7th");?>
                    </article>
            

            </div>
            <br><br><br>
	</div>

	<?php
	function getData($server, $conferenceName){

            if(!is_null($server)){
                    echo '<h1>'.$conferenceName.'</h1>';
                    ?>
                            <table cellspacing="0" id="tech-companies" class="enhanced">
                                    <thead>
                                            <tr>
                                                    <th class="essential " id="co-0">Begin</th>
                                                    <th class="essential" id="co-1">End</th>
                                                    <th class="Persist essential" id="co-2">Event Name</th>
                                                    <th class="optional" id="co-3">Venue</th>
                                                    <!-- <th class="optional" id="co-4">Abstract</th> -->
                                                    <?php
                                                            //if user is signed, add column called, "add"
                                                            if(!is_null(Cookie::get('tel'))){
                                                                    echo '<th class="essential" id="co-4">Add</th>';
                                                            }
                                                    ?>

                                            </tr>
                                    </thead>
                                    <tbody>


                    <?php

                        $server_array = $server->as_array();
			foreach($server_array as $row){
                            echo '<tr id ="'.$row['eventId'].'">';
                            ?>

                                    <td id = "begin" headers="co-0" class="essential" ><?= date_format(date_create($row['BegTime']), "H:i"); ?></td>
                                    <td id = "end" headers="co-1" class="essential" ><?= date_format(date_create($row['EndTime']), "H:i"); ?></td>
                                    <th id = "title" headers="co-2" class="essential"><?= $row['Title']; ?></th>
                                    <td id = "venue" headers="co-3" class="optional"><?= $row['Venue']; ?></td>
                                    <!-- <td id = "abstract" headers="co-4" class="optional"><?= $row['Abstract']; ?></td> -->

                                    <?php
                                            //if user is signed, add row, "+"
                                            // if($user->getIsSigned()){
                                            if(!is_null(Cookie::get('tel'))){
                                                    echo '<td headers="co-4" class="essential"><button class = "addschedule">+</button></td>';
                                            }
                            echo '</tr>';
                    }
                    echo '</tbody></table>';
            }else{
                    echo "<p>No result...</p>";
            }
            $db = null;
	}
	
	?>

        <!-- Scripts -->
	<script type="text/javascript">
		$(".addschedule").click(function() {
			
		    var $row = $(this).closest("tr");    // Find the row
		    var $eventId = $row.attr('id'); // Find the id

		    $.ajax({
			    type: 'POST',
			    url: '<?php echo Uri::create('/main/addSchedule'); ?>',
			    data: { 
			        'addData': $eventId
			    },
			    success: function(msg){
			        console.log(msg);
			        if(msg == 'Already'){
			        	$(".notice_already").show().delay(2000).fadeOut();
			        }else{
			        	$(".notice").show().delay(2000).fadeOut();
			        }
			        
			        // location.reload();
			    }
			});
		});

	</script>