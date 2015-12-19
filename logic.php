




<html>
<body>    
    <form action="" method="post" autocomplete="off">
    <label>Height</label> <input  type="text" value=""  name="height"/><br/><br>
    <label>Width</label> <input type="text"  value="" name="width"/><br/><br>
    <label>Distance</label> <input type="text" value="" name="dis"/><br/><br>
  <input type="submit" name="SubmitButton"/>
  &nbsp; &nbsp;
   <input type="submit" name="clear" value="Clear Output"/>
</form>   
    
    
    
    <br>
   
    
    <br>
    <br>
    
    
    
    <?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
    echo ' ======Output====<br>';
$height=(int)$_POST['height']; //get input text
$width=(int)$_POST['width']; //get input text
$dis=(int)$_POST['dis']; //get input text

                   for($i=0;$i<$height;$i++){ 
                       if($i==0)
                           echo '<div>';
                       else?> 
                        <div style="margin-bottom:<?php echo $dis?>px">
                      <?php for($j=0;$j<$width;$j++){
                           if($j==0)
                               echo '<span>*</span>';
                           else?>
                            <span style="margin-left:<?php echo $dis?>px">*</span>
                           
                     <?php  }
                       echo '</div>';
                   }

}

?>
    
    
</body>
</html>