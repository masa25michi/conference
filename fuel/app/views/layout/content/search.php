<!-- Search -->
<div class="wrapper style3" id="search">
        <article id="search">
                <header>
                    <h2>Search</h2><br>
                </header>

                <div>
                        <?php echo Form::open(array('action' => 'main/search', 'method' => 'POST')); ?>
                            <p><?php echo Form::input('keyword','',array('size'=>'40', 'placeholder'=>'Keyword')); ?></p>

                            <br><ul class='actions'>
                                <li><?php echo Form::input('submit', 'Sign In', array('type'=>'submit'));  ?></li>
                                <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                            </ul>
                        <?php echo Form::close(); ?> 
                        <br><br>
                </div>
        </article>
</div>

<?php
	if(!is_null($server)){
                $key = strtolower($keyword);
		$key_array = array();
		
		if(strpos ('survey',$key) !==false){
			array_push($key_array, 'survey');
		}
		if(strpos ('location', $key) !==false){
			array_push($key_array, 'location');
		}
		if(strpos ('programme', $key)!==false){
			array_push($key_array, 'programme');
		}
		if(strpos ('acknowledgement',$key) !==false){
			array_push($key_array, 'acknowledgement');
		}
		if(strpos ('abstract', $key)!==false){
			array_push($key_array, 'abstract');
		}
		if(strpos ('chat', $key) !==false){
			array_push($key_array, 'im');
		}
		if(count($key_array)>0){
			displayMenu($key_array);

		}

		echo "<div class='style1 ' style = 'background-color: white; text-align: center;'>";
		if(count($server)>0){

			?>
			
				<div class="table-wrapper">
					<br>
					<h4>Conference Events:</h4>
						<div class="table-menu-wrapper">
							<div class="table-menu table-menu-hidden" >
								<ul >
                                                                        <li><input type="checkbox" name="toggle-cols" id="toggle-col-1" value="co-1" checked="checked"> <label for="toggle-col-1">Conference</label></li>
									<li><input type="checkbox" name="toggle-cols" id="toggle-col-2" value="co-2" checked="checked"> <label for="toggle-col-2">Event</label></li>
									<li><input type="checkbox" name="toggle-cols" id="toggle-col-3" value="co-3" checked="checked"> <label for="toggle-col-3">Venue Name</label></li>
									<li><input type="checkbox" name="toggle-cols" id="toggle-col-4" value="co-4" checked="checked"> <label for="toggle-col-4">Date</label></li>
									<li><input type="checkbox" name="toggle-cols" id="toggle-col-5" value="co-5" checked="checked"> <label for="toggle-col-5">Begin</label></li>
									<li><input type="checkbox" name="toggle-cols" id="toggle-col-6" value="co-6" checked="checked"> <label for="toggle-col-6">End</label></li>
									</li>
								</ul>
							</div>
						</div>

						<table cellspacing="0" id="tech-companies" class="enhanced">
						<thead>
							<tr>
								<th class="essential " id="co-0">Conference</th>
								<th class="essential" id="co-1">Event</th>
								<th class="Persist essential" id="co-2">Venue</th>
								<th class="optional" id="co-3">Date</th>
								<th class="optional" id="co-4">Begin</th>
								<th class="optional" id="co-5">End</th>
							</tr>
						</thead>
						<tbody>

			<?php
                        $server_array = $server->as_array();
			foreach($server_array as $row){
				echo '<tr>';
				?>
					<td headers="co-0" class="essential" ><?= $row['ConferenceName']; ?></td>
					<td headers="co-1" class="essential" ><?= $row['Title']; ?></td>
					<th headers="co-2" class="essential"><?= $row['Venue'] ?></th>
					<td headers="co-3" class="optional"><?= $row['Date'] ?></td>
					<td headers="co-4" class="optional"><?= date_format(date_create($row['BegTime']), "H:i"); ?></td>
					<td headers="co-5" class="optional"><?= date_format(date_create($row['EndTime']), "H:i"); ?></td>
				<?php
				echo '</tr>';
			}
			echo '</tbody></table></div><br><br>';
		}else{
			echo "<br><h4>Conference Events:</h4><p>No result...</p>";
		}
		
		
	}


	function displayMenu($keys){
		$num = count($keys);
		$i = 0;
		?>
			<div class="wrapper style2">
				<header>
					<h2>Apps</h2>
				</header>
				<div class="container">
					<div class="row">


						<?php
							while($i<$num){
								if($i==3 ||$i==6){
									echo '</div><div class="row">';
								}

								echo '<div class="4u 12u">';
									displaySubmenu($keys[$i]);
								echo '</div>';
								$i++;

							}
						 ?>
					</div>
				</div>
			</div>
		<?php
		
	}

	function displaySubmenu($appName){
		switch ($appName){
			case "survey":
				echo '
					<a href = "survey.php">
						<article class="box style1" >
							<i class="icon material-icons" >assignment</i>
							<p><b>Survey</b></p>
						</article>
					</a>
				';

			break;

			case "location":
				echo '
					<a href="floorPlans.php">
						<article class="box style1">
							 <i class="icon material-icons" >location_on</i>
							<p><b>Location</b></p>
						</article>
					</a>
				';

			break;

			case "programme":
				echo '
					<a href="programme.php">
						<article class="box style1" >
							<i class="icon material-icons" >today</i>
							<p><b>Programme</b></p>
						</article>
					</a>
				';

			break;

			case "acknowledgement":
                            ?>
                            <div class="4u 12u menuicon" style=' position:relative; ' >
                                    <!--<a href = "acknowledgement" >-->
                                    <a href = '<?php echo Uri::create('/main/acknowledgement'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >thumb_up</i>
                                            <p style='font-size:95%; position:absolute; float:left; left:4px; '><b>Acknowledgements</b></p>
                                            <br><br><br>
                                        </article>
                                    </a>
                            </div>
                            <?php
			break;

			case "abstract":
				echo '
					<a href="abstract.php">
						<article class="box style1" >
							<i class="icon material-icons" >toc</i>
							<p><b>Abstract</b></p>
						</article>
					</a>
				';

			break;

			case "im":
				
                            ?>
                            <div class="4u 12u ">
                                    <!--<a href = "im">-->
                                    <a href = '<?php echo Uri::create('/main/im'); ?>'>
                                        <article class="box style1">
                                            <i class="icon material-icons" >forum</i>
                                            <p ><b>Chat</b></p>
                                        </article>
                                        
                                    </a>
                            </div>
                            <?php
			break;
		}
	}
	
?>