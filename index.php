<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  /* border: 1px solid black; */
  text-align: left;
  color: #2d2a26;
  background-color: #E4DAD3;
  background-blend-mode: lighten;
}
@media all and (max-width: 768px) {
    #table {
        width:100% !important;
    }
  }

</style>

<?php
      if (($open = fopen("data/Shorelines2.csv", "r")) !== FALSE) 
      {    
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
        {        
          $array[] = $data; 
        }      
        fclose($open);
      }
for($i =1; $i<=26;$i++){
  echo '<div id="myModal'.$i.'" class="modal">
  <!-- Modal content -->
  <div class ="modal-overlay">
  <div class="modal-content">
    <span id = "closed'.$i.'" class="close">&times;</span>
    <br>
    <p>'.$array[$i][6].'</p>
  </div>
  </div>
  </div>';
}
?>

<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color:#FFFFFF;">
<script src="js/slr.js"></script>
<?php
      if (($open = fopen("data/Shorelines2.csv", "r")) !== FALSE) 
      {    
        while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
        {        
          $array[] = $data; 
        }      
        fclose($open);
      }
      echo '<table class = "table-responsive" id = "table1" style="width:100%;" ><tr><td>';
  for($i =1; $i<=26;$i++){
    if($i==1){    
  echo '<table id="trr'.$i.'"  style="width:100%;">
  <tr>
  <td style=" border: 1px solid black; width:100%;" colspan="4">
  <header role="banner" id="theHeader" style="background-size: cover;background-image: url('."images/shoreline_high_res.jpg".');background-repeat: no-repeat;">
    <h1 >Living Shoreline Site Suitability Decision Tool</h1>
  </header>
      
  <div class = header2 style="background-color:#a3b4e4";>
    <p><strong>Answer the following questions to arrive at a recommended shoreline erosion control strategy.</strong></p>
  </div>
  </td>
  </tr>
  <tr >
          <td bgcolor = "#aaa"  style=" border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;" >
          <p style="color:black;font-size:22px; padding-left: 50px">'.$array[$i][1].'</p>
          </td> 
          <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
          <img id = "icon2" src="images/icon2.png"  style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
          </td>   
          <td bgcolor = "#eee" style=" border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:10%;">
          <div id = "question'.$i.'" class="button " style="position:center;">
            <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="functionAlert_yes('.$i.'); " >Yes</button>    
            </div>
          </td>
          <td bgcolor = "#eee"  style=" border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black; width:10%;">
          <div id = "question'.$i.'" class="button" style="position:center;">
          <button  id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no(2,1);">No</button>
          </div>
          </td>
      </tr>
      </table>';
    }
    else if($i == 17){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style=" border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;" >'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black; width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>  
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
      <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="functionAlert_yes('.$i.')">Moderate to high</button>
      </div>
      </td>
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
      <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no(23,17);">Low</button>
        </div>
      </td>
  </tr>
  </table>';
    }      
    else if($i == 18){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style=" border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>     
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
     <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="next_yes1(25,18,21);">Moderate to high</button>
     </div>
     </td>
     <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
     <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no1(21,18,25);">Low</button>
        </div>
      </td>
  </tr>
  </table>';
    }
    else if($i == 19){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black; width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>    
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
     <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="next_yes1(25,19,21);">Moderate to high</button>
     </div>
     </td>
     <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
     <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no1(21,19,25);">Low</button>
        </div>
      </td>
  </tr>
  </table>';
    }  
    else if($i == 20){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td> 
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td> 
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
     <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="next_yes1(25,20,21);">Moderate to high</button>
     </div>
     </td>
     <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
     <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no1(21,20,25);">Low</button>
        </div>
      </td>
  </tr>
  </table>';
    }   
    else if($i == 21){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style=" border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>    
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
      <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="functionAlert_yes('.$i.')">Deep</button>
      </div>
      </td>
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
      <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no(24,21);">Shallow</button>
        </div>
      </td>
  </tr>
  </table>';
    } 
    else if($i == 22){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>     
      <td bgcolor = "#eee" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
      <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="functionAlert_yes('.$i.')">Deep</button>
      </div>
      </td>
      <td bgcolor = "#eee"  style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
      <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="next_no(24,21);">Shallow</button>
        </div>
      </td>
  </tr>
  </table>';
    }
    else if($i == 26){
      echo '<table id="trr'.$i.'" width = "100%" hidden>
      <tr>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;">
      <p style="color:black;font-size:22px;padding-left: 50px;">'.$array[$i][1].'</p>
      </td>
      <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
      <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
      </td>     
      <td bgcolor = "#eee"  style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;">
      <div id = "question'.$i.'" class="button"  style="position:center">
     <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes" onclick="functionAlert_yes('.$i.');">Deep</button>
     </div>
     </td>
     <td bgcolor = "#eee"  style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;">
     <div id = "question'.$i.'" class="button" style="position:center">
        <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No" onclick="functionAlert_no('.$i.');">Shallow</button>
        </div>
      </td>

  </tr>
  </table>';
    } 
    else{
      echo '<table id="trr'.$i.'" width = 100% hidden>
      <tr>
              <td bgcolor = "#aaa"   style="border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black; width:70%; min-width:400px;" >
              <p style="color:black;font-size:22px;padding-left: 50px; " >'.$array[$i][1].'</p>
              </td> 
              <td bgcolor = "#aaa"  style="border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;width:10%;text-align: center;" >
              <img src="images/icon2.png" alt="displaying information" style ="min-width:40px;width:30%;height:auto;" onClick = "popup('.$i.')">
              </td>     
              <td bgcolor = "#eee"  style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-left:1px solid black;>
              <div id = "button_question'.$i.'" class="button"  style="position:center">
               <button id="valider_yes'.$i.'" name="Yes" type="Yes" class = "b1" value="Yes"';
                if($array[$i][2] == '*')
                {
                  echo 'onclick="functionAlert_yes('.$i.')"';
                }
                else if($array[$i][3] != '*')
                {
                  echo 'onclick="next_yes1('.$array[$i][2].','.$i.','.$array[$i][3].');"';
                }
                else{
                  // echo 'onClick = alert('.$array[$i][2].')';
                  echo 'onclick="next_yes('.$array[$i][2].','.$i.');"';
                }
                echo '>Yes</button>
                </div>
                </td>
                <td bgcolor = "#eee" width="25%" style="width:10%;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;>
                <div id = "question'.$i.'" class="button" style="position:center">
                <button id="valider_no'.$i.'" name="No" type="No" class = "b2" value="No"';
                if($array[$i][3] == '*')
                {
                  echo 'onclick="functionAlert_no('.$i.')"';
                }
                else if($array[$i][2] != '*')
                {
                  echo 'onclick="next_no1('.$array[$i][3].','.$i.','.$array[$i][2].');"';
                }
                else{
                  // echo 'onClick = alert('.$array[$i][2].')';
                  echo 'onclick="next_no('.$array[$i][3].','.$i.');"';
                }
                echo '>No</button>
                </div>
    
              </td>
              </tr>
              </table>';
    }
  }


    for($i=1;$i<=9;$i++)
    {
      echo '  <div class="box" id="trr_yes'.$i.'" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[$i][4].'</span></p>
      </div>';
    }
      echo '  <div class="box" id="trr_yes10" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[10][4].'</span></p>
      </div>';
    for($i=11;$i<=14;$i++){
      echo '  <div class="box" id="trr_yes'.$i.'" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[$i][4].'</span></p>
      </div>';
    }
      echo '  <div class="box" id="trr_yes15" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[15][4].'</span></p>
      </div>';
      echo '  <div class="box" id="trr_yes16" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[16][4].'</span></p>
      </div>';
      echo '  <div class="box" id="trr_yes17" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[17][4].'</span></p>
      </div>';
      for($i=18;$i<=22;$i++){
      echo '  <div class="box" id="trr_yes'.$i.'" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[$i][4].'</span></p>
      </div>';
    }
      echo '  <div class="box" id="trr_yes23" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[23][4].'</span></p>
      </div>';
      echo '  <div class="box" id="trr_yes24" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[24][4].'</span></p>
      </div>';
    for($i=25;$i<=26;$i++){
      echo '  <div class="box" id="trr_yes'.$i.'" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[$i][4].'</span></p>
      </div>';
    } 
  
    for($i=1;$i<=24;$i++){
      echo '<div class="box" id="trr_no'.$i.'" style="color:red;font-size:33px" >
      <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[$i][5].'</span></p>
      </div>';
  }
    echo '<div class="box" id="trr_no25" style="color:red;font-size:33px" >
      <p><span class="special-word">Stop! </span><span class="special-word2">'.$array[25][5].'</span></p>
      </div>';
    echo '<div class="box" id="trr_no26" style="color:red;font-size:33px" >
    <p><span class="special-word3">Recommended: </span><span class="special-word2">'.$array[26][5].'</span></p>
    </div>';


?>

<footer style="width:100%; border-top: 1px groove black; border-bottom: 1px groove black;background-color: #ffffff;margin-top:auto;">
  <div  class="footerContainer" >
    <!-- <li> <img  class="center" src="images/harte_logo.png" width = auto height= "60" onclick="window.location='https://storymaps.arcgis.com/stories/d233a382741a4201bea12299ed6c4633'"/>
    </li> -->
    <!-- <a  href="https://storymaps.arcgis.com/stories/d233a382741a4201bea12299ed6c4633" target="_blank"></a> -->
    <table colspan="4" width =100% style="background-color:#ffffff;">
      <tr>
      <td width =20% style="background-color:#ffffff;text-align: center;">
          <img src="images/harte_logo.png" width = "60%" height= "60%" >
</td>
        <td width =20% style="position:center;background-color:#ffffff;text-align: center;">
          <img src="images/NOAA_logo.png" width = "27%" height= "27%">
</td >
        <td width =20% style="position:center;background-color:#ffffff;text-align: center;">
          <img src="images/GLO_Logo.png" width = "27%" height= "27%">
</td>
        <td width =20% style="position:center;background-color:#ffffff;text-align: center;">
          <img src="images/CMP_logo.png" width = "27%" height= "27%">
</td>
        <td width =20% style="position:center;background-color:#ffffff;text-align: center;">
          <img src="images/GBF_Logo.jpg" width = "70%" height= "70%">
</td>
</tr>
  </table>
  </div>
</footer>

<div class="reset" style="float:right; position: absolute;bottom:0; right:0;color:white" onclick="myfunction()">Restart</div>
  <!-- <div class = "reset" style="position:fixed; right:5px;" onclick="myfunction()">Restart</div> -->
  
</body>



</html>
