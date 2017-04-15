
<div class='wrapper style3'>
    <article class='container'>
        
        <div class='row'>
            <p style='color:#0F2856;'>This questionnaire aims to evaluate overall performance of HONG KONG 2017 
                which helps to improve the content and program of future activities. 
                We value your comments. Please take around 3 minutes to complete this survey. 
                This questionnaire is recorded anonymous.
            </p> 
        </div>
        
    </article>
</div>
                          
<div class='wrapper style1'>
    <article class='container'>
      
        <div class='row'>
          <div class='12u' style = 'text-align:left;'>
            <?php echo Form::open(array('action' => 'main/aftersurvey', 'method' => 'POST')); 
                
                $server_array = $server->as_array();
                $index = 1;
                echo Form::hidden('num_rows',count($server_array));
                
                foreach($server_array as $row){//radio question
                    if($row['Type']=='radio'){

                    ?>
                        <div class='row'>
                          <div class='12u'>
                            <p style='font-size:120%;'><?= $index.') '.$row['Contents'];?></p>
                            <p>
                                <?php   
                                    $choices = explode(",",$row['Choices']);
                                    foreach ( $choices as $choice){
                                        $label = 'q'.$index;
                                        $value = $choice;

                                        echo Form::radio($label, $value, false, array('style' => 'display:inline-block;'));
                                        echo Form::label($value,$label,array('style' => 'display:inline-block;'));
                                        
                                        if(strpos($value, 'please spec') !== false){
                                            echo Form::input($label.'_input', 'Please specify here');
                                        }
                                        echo '<br>';
                                        
                                    }
                                ?>
                            </p>
                          </div>
                        </div>
              
              
                    <?php 
                    
                    }else if($row['Type']=='check'){?>
                        <div class='row'>
                          <div class='12u'>
                            <p style='font-size:120%;'><?= $index.') '.$row['Contents'];?></p>
                            <p>
                                <?php   
                                    $choices = explode(",",$row['Choices']);
                                    foreach ( $choices as $choice){
                                        $label = 'q'.$index;
                                        $value = $choice;

                                        echo Form::checkbox($label, $value, false, array('style' => 'display:inline-block;'));
                                        echo Form::label($value,$label,array('style' => 'display:inline-block;'));
                                        
                                        if(strpos($value, 'please spec') !== false){
                                            echo Form::input($label.'_input', 'Please specify here');
                                        }
                                        echo '<br>';
                                        
                                    }
                                ?>
                            </p>
                          </div>
                        </div>
                        
                    <?php }
                    else if($row['Type']=='table_radio')//radio table questions
                    { 
                        $contents = explode(",",$row['Contents']); //rows
                        $choices = explode(",",$row['Choices']); //columns
                        $question = $contents[0];
                        $contents = array_slice($contents,1);
                        ?>
                        <div class='row'>
                            <div class='12u' >
                                <p style='font-size:120%;' ><?= $index.') '.$question;?></p>
                                    
                                    <div class="table-wrapper" >
                                        <table cellspacing="0" class='survey_table' >
                                            <thead>
                                                <tr >
                                                    <th></th>
                                                    <?php
                                                    
                                                    foreach($choices as $choice){
                                                        echo '<th>'.$choice.'</th>';
                                                    }
                                                    
                                                    ?>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php     
                                                    $j = 1;
                                                    foreach($contents as $content){?>
                                                    <tr>
                                                    <?php
                                                        echo '<td>'.$content.'</td>';
                                                        $label = 'q'.$index.'_'.$j;
                                                        foreach($choices as $choice){
                                                            echo "<td>".Form::radio($label, $choice)."</td>";
                                                        }
                                                        $j++;
                                                    ?>
                                                    </tr>
                                                    <?php } ?>
                                            </tbody>
                                        </table><br><br>
                                </div>
                            </div>
                        </div>
              
                    <?php 
                    
                    }else if($row['Type']=='input'){
                        $label = 'q'.$index;?>
                        <div class='row'>
                          <div class='12u'>
                            <p style='font-size:120%;'><?= $index.') '.$row['Contents'];?></p>
                            <p>
                                <?php   
                                    echo Form::textarea($label, 'enter here', array('rows' => 5, 'cols' => 5)).'<br>';
                                ?>
                            </p>
                          </div>
                        </div>
                        
                    <?php }
                    $index++;}?>

              <!--submission-->
                <div class='row 200%'>
                  <div class='12u'>
                    <ul class='actions'>
                        <li><?php echo Form::input('submit', 'Submit', array('type'=>'submit'));  ?></li>
                        <li><?php echo Form::input('reset','Reset', array('type'=>'reset','class'=>'alt')); ?></li>
                    </ul>
                  </div>
                </div>
              
            <?php echo Form::close(); ?> 
          </div>
        </div>
    </article>
</div>