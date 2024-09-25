<?php
// single dimensional index array
            //0      //1    //2  //3
$students = ["ali","aqsa","hamza","asad"];

        // echo $students //error ;
        print_r($students);
        ?>
               <h1>var_dump()</h1>
            
        <?php
        var_dump($students);

        ?>
     <h1>For Loop</h1>
        
                    <ul>                     
            <?php             
                                //1<4
                                //0<4 true          //0++
                    for($i=0;$i<count($students);$i++){
                            ?>
                                <li><?php echo $students[$i]?></li>
                            <?php
                    }
                    ?>    
       </ul>
       <h1>Foreach Loop</h1>


       <ul>
        <?php
                foreach($students as $std){
                        ?>
                                <li><?php echo $std?></li>
                        <?php
                }
        ?>
       </ul>