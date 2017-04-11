<!-- MENU -->
<div class="wrapper style3">
        <article id="menu">
                <header>
                        <h2>Menu</h2>
                </header>
                <div class="container">
                        <div class="row">
                                <div class="4u 12u">
                                        <a href = "index.php">
                                                <article class="box style1" >
                                                        <i class="icon material-icons" >home</i>
                                                        <p><b>Home</b></p>
                                                </article>
                                        </a>
                                </div>
                                <div class="4u 12u">
                                        <a href="program.php">
                                                <article class="box style1">
                                                         <i class="icon material-icons" >today</i>
                                                        <p><b>Program</b></p>
                                                </article>
                                        </a>
                                </div>

                                <div class="4u 12u">
                                        <a href="signout">
                                                <article class="box style1" >
                                                        <i class="icon material-icons" >exit_to_app</i>
                                                        <p><b>Log Out</b></p>
                                                </article>
                                        </a>
                                </div>
                        </div>
                </div>
        </article>
</div>


<!-- MY SCHEDULE -->
<div id = 'myschedule' class="style2" style="text-align:center;box-shadow: inset 0px 1px 0px 0px rgba(0, 0, 0, 0.05), inset 0px 2px 3px 0px rgba(0, 0, 0, 0.1);">

    <div class="table-wrapper">
            <div class="table-menu-wrapper">
                    <!-- <a href="#" class="table-menu-btn">Filter</a> -->
                    <div class="table-menu table-menu-hidden" >
                            <ul >
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-1" value="co-1" checked="checked"> <label for="toggle-col-1">Begin Time</label></li>
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-2" value="co-2" checked="checked"> <label for="toggle-col-2">End Time</label></li>
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-3" value="co-3" checked="checked"> <label for="toggle-col-3">Event Name</label></li>
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-4" value="co-4" checked="checked"> <label for="toggle-col-4">Venue</label></li>
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-6" value="co-5" checked="checked"> <label for="toggle-col-6">Date</label></li>
                                    <li><input type="checkbox" name="toggle-cols" id="toggle-col-7" value="co-6" checked="checked"> <label for="toggle-col-7">Remove</label></li>
                            </ul>
                    </div>
            </div>
        
        <article>
                <?php

			if(count($server)>0){
				?>
					<header>
						<br>
						<h2>My Schedule</h2>
					</header>
					<table cellspacing="0" id="tech-companies" class="enhanced">
						<thead>
							<tr>
								<th class="essential " id="co-0">Begin</th>
								<th class="essential" id="co-1">End</th>
								<th class="Persist essential" id="co-2">Event Name</th>
								<th class="optional" id="co-3">Venue</th>
								<!-- <th class="optional" id="co-4">Abstract</th> -->
								<th class="optional" id="co-4">Date</th>
								<th class="essential" id="co-5">Remove</th>
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
						<td id = "date" headers="co-4" class="optional"><?= $row['Date']; ?></td>
						<td headers="co-5" class="essential" ><button class = "removeschedule" style='background-color: red;'><span style = 'font-size: 100%;'>-</span></button></td>
					<?php
					echo '</tr>';
				}
				echo '</tbody></table>';
                    }?>
        </article>
    </div><br><br>
    
<!-- Scripts -->
<script type="text/javascript">

        $(".removeschedule").click(function() {
                $(".notice_removed").show().delay(1000).fadeOut();
            var $row = $(this).closest("tr");    // Find the row
            var $eventId = $row.attr('id'); // Find the id

            $.ajax({
                    type: 'POST',
                    url: '<?php echo Uri::create('/main/removeSchedule'); ?>',
                    data: { 
                        'removeData': $eventId
                    },
                    success: function(msg){
                        // alert('wow' + msg);
                        console.log(msg);
                        location.reload();
//                        $('#myschedule').load('<?php // echo Uri::base(); ?> '+  'userpage/ #myschedule');
                    }
                });
        });

</script>

