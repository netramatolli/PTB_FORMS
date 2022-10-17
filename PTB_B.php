<?php 
session_start();
?>
<!doctype HTML>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<H1><center>10 Questionarie-2(English)(Part B)</center></H1>
<h1><center>Knowledge, attitide and practice related to PTB</h1></center>
<script>
function setVisibility(elem, v)
{
   let e = document.getElementById(elem);
   e.style.visibility = v;
   
}

function getLatLon()
{
   let elem = document.getElementById("latlon");
   elem.innerText = geoLocation.getLatLon();
}
</script>
</head>
<body>
<?php
include "commons/functions.php";
include "commons/dbconnect.php";

if (isset($_POST['submit']))
{
   @$B1Q1 =$_POST['B1Q1']; 
   @$B1Q2 =$_POST['B1Q2']; 
   @$B1Q3 =$_POST['B1Q3']; 
   @$B1Q4 =$_POST['B1Q4']; 
   @$B1Q5 =$_POST['B1Q5']; 
   @$B1Q6 =$_POST['B1Q6']; 
   @$B1Q7 =$_POST['B1Q7']; 
   @$B1Q8 =$_POST['B1Q8']; 
   @$B1Q9 =$_POST['B1Q9']; 
   @$B1Q10=$_POST['B1Q10']; 
   @$B1Q11=$_POST['B1Q11']; 
   @$B1Q12=$_POST['B1Q12']; 
   @$B1Q13=$_POST['B1Q13']; 
   @$B1Q14=$_POST['B1Q14']; 
   @$B1Q15=$_POST['B1Q15']; 
   @$B1Q16 =$_POST['B1Q16'];
   @$B1Q1 =$_POST['B1Q1'];
   @$B1Q2 =$_POST['B1Q2'];
   @$B1Q3 =$_POST['B1Q3'];
   @$B1Q4 =$_POST['B1Q4'];
   @$B1Q5 =$_POST['B1Q5'];
   @$B1Q6 =$_POST['B1Q6'];
   @$B1Q7 =$_POST['B1Q7'];
   @$B1Q8 =$_POST['B1Q8'];
   @$B1Q9 =$_POST['B1Q9'];
   @$B1Q10=$_POST['B1Q10'];
   @$B1Q11=$_POST['B1Q11'];
   @$B1Q12=$_POST['B1Q12'];
   @$B1Q13=$_POST['B1Q13'];
   @$B1Q14=$_POST['B1Q14'];
   @$B1Q15=$_POST['B1Q15'];
   @$B1Q16=$_POST['B1Q16'];
   @$B2Q1 =$_POST['B2Q1'];
   @$B2Q2=$_POST['B2Q2']; 
   @$B2Q3 =$_POST['B2Q3'];
   @$B2Q4 =$_POST['B2Q4'];
   @$B2Q5 =$_POST['B2Q5'];
   @$B2Q6 =$_POST['B2Q6'];
   @$B2Q7 =$_POST['B2Q7'];     
   @$B3Q1=$_POST['B3Q1'];
   @$B3Q2=$_POST['B3Q2']; 
   @$B3Q3 =$_POST['B3Q3'];
   @$B3Q4 =$_POST['B3Q4'];
   @$B3Q5 =$_POST['B3Q5'];
   @$B4Q1 =$_POST['B4Q1'];
   @$B4Q2 =$_POST['B4Q2'];
   @$B4Q3 =$_POST['B4Q3'];
   @$B4Q4 =$_POST['B4Q4'];
   @$B4Q5 =$_POST['B4Q5'];
   @$B4Q6 =$_POST['B4Q6'];
   @$B4Q7 =$_POST['B4Q7'];
   @$B4Q8 =$_POST['B4Q8'];
   @$B4Q9 =$_POST['B4Q9'];
   @$B5Q1=$_POST['B5Q1']; 
   @$B5Q2=$_POST['B5Q2']; 
   @$B5Q3=$_POST['B5Q3']; 
   @$B5Q4 =$_POST['B5Q4'];
   @$B5Q5 =$_POST['B5Q5'];
   @$B5Q6 =$_POST['B5Q6'];
   @$B5Q7 =$_POST['B5Q7'];
   @$B5Q8 =$_POST['B5Q8'];
  
     
      

      $sql="INSERT INTO `part_b`(`B1Q1`, `B1Q2`, `B1Q3`, `B1Q4`, `B1Q5`, `B1Q6`, `B1Q7`, `B1Q8`,
      `B1Q9`, `B1Q10`, `B1Q11`, `B1Q12`, `B1Q13`, `B1Q14`, `B1Q15`, `B1Q16`,`B2Q1`, `B2Q2`, `B2Q3`,
       `B2Q4`, `B2Q5`, `B2Q6`, `B2Q7`, `B3Q1`, `B3Q2`, `B3Q3`, `B3Q4`, `B3Q5`, `B4Q1`, `B4Q2`, `B4Q3`,
        `B4Q4`, `B4Q5`, `B4Q6`, `B4Q7`, `B4Q8`, `B4Q9`, `B5Q1`, `B5Q2`, `B5Q3`, `B5Q4`, `B5Q5`,
         `B5Q6`, `B5Q7`, `B5Q8`)
      values('$B1Q1','$B1Q2','$B1Q3','$B1Q4','$B1Q5','$B1Q6','$B1Q7','$B1Q8',
      '$B1Q9','$B1Q10','$B1Q11','$B1Q12','$B1Q13','$B1Q14','$B1Q15','$B1Q16','$B2Q1','$B2Q2','$B2Q3',
      '$B2Q4','$B2Q5','$B2Q6','$B2Q7','$B3Q1','$B3Q2','$B3Q3','$B3Q4','$B3Q5','$B4Q1','$B4Q2','$B4Q3',
      '$B4Q4','$B4Q5','$B4Q6','$B4Q7','$B4Q8','$B4Q9','$B5Q1','$B5Q2','$B5Q3','$B5Q4','$B5Q5',
      '$B5Q6','$B5Q7','$B5Q8')";
      $result=mysqli_query($conn,$sql);
      if ($result)
      {
         echo "Data inserted successfully";
         // echo $sql;
         
      }
      else{
         die(mysqli_error($conn));
      }


}
//print_r($_REQUEST);

   $action = getRequest("action", "");
   $curPage = getRequest("curPage", "B1");

   if ($action == "Next")
   {
      if ($curPage == "B1")
         $curPage = "B2"; 
      else if($curPage == "B2" )
         $curPage = "B3";
      else if($curPage == "B3" )
         $curPage = "B4";
      else if($curPage == "B4" )
         $curPage = "B5";
        
   }
   if ($action == "Prev")
   {
      if ($curPage == "B2")
         $curPage = "B1";
      else if($curPage == "B3" )
         $curPage = "B2";

      else if($curPage == "B4" )
         $curPage = "B3";

         else if($curPage == "B5" )
         $curPage = "B4";
   }


   $B1Q1 = getRequest('B1Q1', "");
   $B1Q2 = getRequest('B1Q2', "");
   $B1Q3 = getRequest('B1Q3', "");
   $B1Q4 = getRequest('B1Q4', "");
   $B1Q5 = getRequest('B1Q5', "");
   $B1Q6 = getRequest('B1Q6', "");
   $B1Q7 = getRequest('B1Q7', "");
   $B1Q8 = getRequest('B1Q8', "");
   $B1Q9 = getRequest('B1Q9', "");
   $B1Q10 = getRequest('B1Q10', "");
   $B1Q11 = getRequest('B1Q11', "");
   $B1Q12 = getRequest('B1Q12', "");
   $B1Q13 = getRequest('B1Q13', "");
   $B1Q14 = getRequest('B1Q14', "");
   $B1Q15 = getRequest('B1Q15', "");
   $B1Q16 = getRequest('B1Q16', "");

   //$B2Q0 = getRequest('B2Q0', "");
   $B2Q1 = getRequest('B2Q1', "");
   $B2Q2 = getRequest('B2Q2', "");
   $B2Q3 = getRequest('B2Q3', "");
   $B2Q4 = getRequest('B2Q4', "");
   $B2Q5 = getRequest('B2Q5', "");
   $B2Q6 = getRequest('B2Q6', "");
   $B2Q7 = getRequest('B2Q7', "");
   
   
   $B3Q1 = getRequest('B3Q1', "");
   $B3Q2 = getRequest('B3Q2', "");
   $B3Q3 = getRequest('B3Q3', "");
   $B3Q4 = getRequest('B3Q4', "");
   $B3Q5 = getRequest('B3Q5', "");


   $B4Q1 = getRequest('B4Q1', "");
   $B4Q2 = getRequest('B4Q2', "");
   $B4Q3 = getRequest('B4Q3', "");
   $B4Q4 = getRequest('B4Q4', "");
   $B4Q5 = getRequest('B4Q5', "");
   $B4Q6 = getRequest('B4Q6', "");
   $B4Q7 = getRequest('B4Q7', "");
   $B4Q8 = getRequest('B4Q8', "");
   $B4Q9 = getRequest('B4Q9', "");


   $B5Q1 = getRequest('B5Q1', "");
   $B5Q2 = getRequest('B5Q2', "");
   $B5Q3 = getRequest('B5Q3', "");
   $B5Q4 = getRequest('B5Q4', "");
   $B5Q5 = getRequest('B5Q5', "");
   $B5Q6 = getRequest('B5Q6', "");
   $B5Q7 = getRequest('B5Q7', "");
   $B5Q8 = getRequest('B5Q8', "");
  









   function getQuestion($pq, $inp="")
{
  $q = "undef";
  $a = "undef";
  
  if ($pq == "B1Q1")
   {
    $q = "Any life style changes you intend to bring?*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Bacteria' > Bacteria </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Smokingortobbacco' > Smokingortobbacco </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Malnutrition' > Malnutrition </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Superstions' > Superstions </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Hereditary' > Hereditary </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Airpollution' > Air pollution </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Badweather' > Bad weather </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }  

   if ($pq == "B1Q2")
   {
    $q = "What are the signs and symtoms of PTB*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Cough' > Cough>2weeks </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Weightloss' > Weight loss </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Lossofappetite' > Loss of appetite </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Fever' > Fever </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Diarrhea' > Diarrhea </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Rashes' > Rashes </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Breathlessness' > Breathlessness </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }  


   if ($pq == "B1Q3")
   {
    $q = "Can PTB transmitted from one person to another"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' onclick='setVisibility(\"B1Q4_0\", \"visible\");' " ;
      if ($inp == "Yes" )
         $a .= " checked ";
      $a .= "> Yes </li>"; 
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' onclick='setVisibility(\"B1Q4_0\", \"hidden\");'" ;
      if ($inp == "No" )
         $a .= " checked ";      
      $a .= "> No </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='NA'" ;
      if ($inp == "NA" )
         $a .= " checked ";
      $a .= "> Don't know </li>";
      $a .= "</ul>";
   } 
   
   if ($pq == "B1Q4")
   {
    
    $q = "How person can get PTB"; 
    $a = "<ul  style='list-style-type:none;' id=" . $pq . "_0 name=" . $pq . ">";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='handshake' > Through handshakes </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='badair' > Through bad air </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='sneezes' > Through air when a person with TB cough/sneezes </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='sharingdish' > Through sharing dishes </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='sharingclothings' >Through sharing clothings </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Rashes' > Through eating from the same plate </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Breathlessness' >Through touching items in public places  </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Dntknown' > Don't known </li>";
    $a .= "<li><input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='others' >Others</li>";
    $a .= "<li>Specify<input type=text id=" . $pq . "_8 name=" . $pq . " value='' ></li>";


   
    $a .= "</ul>";
   }
   
   if ($pq == "B1Q5")
   {
    $q = "Is transmission of PTB preventable?"; 
    $a = "<ul style='list-style-type:none;' >";
    $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' onclick='setVisibility(\"B1Q6_0\", \"visible\");' " ;
      if ($inp == "Yes" )
         $a .= " checked ";
      $a .= "> Yes </li>"; 
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' onclick='setVisibility(\"B1Q6_0\", \"hidden\");'" ;
      if ($inp == "No" )
         $a .= " checked ";      
      $a .= "> No </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='NA'" ;
      if ($inp == "NA" )
         $a .= " checked ";
      $a .= "> Don't know </li>";
      $a .= "</ul>";
   } 

   if ($pq == "B1Q6")
   {
    $q = "How can a person prevent getting PTB?*"; 
    $a = "<ul  style='list-style-type:none;'id=" . $pq . "_0 name=" . $pq . ">";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='avoidshaking' > Avoiding shaking hands </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='covering' > Covering mouth and nose when coughing or sneezing </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='avoidsharing' > Avoid sharing of dishes </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='washhands' > Washing hands after touching items in public places </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='goodnutrition' > Through good nutrition  </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='vaccinatechildren' > Vaccination of children </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='medicines' > Take tablets and medicines </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='avooidcrowed' > Avoid going to crowed places </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_9 name=" . $pq . " value='keepdistance' > Keeping distance with others </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_10 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }

   if ($pq == "B1Q7")
   {
    $q = "Can PTB transmitted from one person to another"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' onclick='setVisibility(\"B1Q8_0\", \"visible\");' " ;
      if ($inp == "Yes" )
         $a .= " checked ";
      $a .= "> Yes </li>"; 
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' onclick='setVisibility(\"B1Q8_0\", \"hidden\");'" ;
      if ($inp == "No" )
         $a .= " checked ";      
      $a .= "> No </li>";
      $a .= "<li><input type=radio id=" . $pq . "_1 name=" . $pq . " value='NA'" ;
      if ($inp == "NA" )
         $a .= " checked ";
      $a .= "> Don't know </li>";
      $a .= "</ul>";
   } 



   if ($pq == "B1Q8")
   {
    $q = "How can PTB be cured?* "; 
    $a = "<ul  style='list-style-type:none;'id=" . $pq . "_0 name=" . $pq . " >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='homerest' > Home rest without medecine </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='praying' > Praying </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='medecinesbyhspital' > Medecines given in hospital or dispensary </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='selftreatment' > Self treatment </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='goodfood' > Eat good food </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='herbal' > Herbal remedies:Specify </li>";
    $a .= "<input type=text id=" . $pq . "_7 name=" . $pq . " value='' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }  

   if ($pq == "B1Q9")
   {
    $q = "How PTB diagnosed?*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='ChestXray' > Chest X-ray </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Sptmexamination' > Sputum examination </li>";
    $a .= "<li>  <input type=checkbox  id=" . $pq . "_3 name=" . $pq . " value='Phyexamination' > Physical examination </li>";
    $a .= "<li>  <input type=checkbox  id=" . $pq . "_4 name=" . $pq . " value='Bloodtest' > Blood test </li>";
    $a .= "<li>  <input type=checkbox  id=" . $pq . "_5 name=" . $pq . " value='Urinetest' > Urine test </li>";
    $a .= "<li>  <input type=checkbox  id=" . $pq . "_6 name=" . $pq . " value='Dntknw' >  Don't known  </li>";
    $a .= "<li>  <input type=checkbox  id=" . $pq . "_7 name=" . $pq . " value='Others' > Others </li>";
    $a .= "<li> <input  type=text id=" . $pq . "_8 name=" . $pq . " value='' ></li>";
    
   
    $a .= "</ul>";
   }  

   
   if ($pq == "B1Q10")
   {
    $q = "How expensive do you think PTB diagnosis is?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='free' > It is free of charge </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='reasonable' > It is reasonably priced </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='moderate' > It is some what or moderatly expensive </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='expensive' > It is very expensive</li>";
    $a .= "<li> <input type=radio id=" . $pq . "_5name=" . $pq . " value='Dntknw' >  Don't known  </li>";
    $a .= "</ul>";
   }  


   if ($pq == "B1Q11")
   {
    $q = "How expensive do you think PTB treatment is?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='free' > It is free of charge </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='reasonable' > It is reasonably priced </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='moderate' > It is some what or moderatly expensive </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='expensive' > It is very expensive</li>";
    $a .= "<li> <input type=radio id=" . $pq . "_5name=" . $pq . " value='Dntknw' >  Don't known  </li>";
    $a .= "</ul>";
   }  


   if ($pq == "B1Q12")
   {
    $q = "When can PTB treatment be stopped?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='feversubsides' > Once fever subsides </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='prescribedbydr' > As prescribed by doctor </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='coughsubsides' > Once cough subsides </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='after7months' > After 6-7 months of treatment</li>";
    $a .= "<li> <input type=radio id=" . $pq . "_5 name=" . $pq . " value='Dntknw' >  Don't known  </li>";
    $a .= "</ul>";
   }  

   if ($pq == "B1Q13")
   {
    $q = "Have you got Nikshaya ID?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='NO' > NO </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>Nikshaya ID Number <input type=text id=" . $pq . "_3 name=" . $pq . " value='' >  </li>";
    // ADD ID value
    $a .= "</ul>";
   } 
   
   if ($pq == "B1Q14")
   {
    $q = "What do you think how did you get PTB"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='bycode' > Analysis by coding </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='dntknw' >  Don't known </li>";
    $a .= "</ul>";
   }
   
   if ($pq == "B1Q15")
   {
    $q = "What are the facilities given to the TB patients by the Government?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='bycode' > Analysis by coding </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='dntknw' >  Don't known </li>";
    $a .= "</ul>";
   }
   
   if ($pq == "B1Q16")
   {
    $q = "Do you know about the national programme for the TB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntno'> Don't know </li>";
    // ADD if NO gto que no-9
    $a .= "</ul>";
   } 

// PAGE B2

   //  if ($pq == "B2Q0")
   //  {
   //   $q = "In your opinion, how serious a disease is PTB?"; 
   //   }  
   
    if ($pq == "B2Q1")
   {
    $q = "In your opinion, how serious a disease is PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Deadly' > Deadly </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='cancured'> Can't cured with treatment </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='cantcured' > Can cures with treatment </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }  

   if ($pq == "B2Q2")
   {
    $q = "In your opinion, Who can be infected with PTB?*(Please check all that are mentioned.)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='oldppl' > Only old people </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='youngppl'> Only young people </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='females' > Only females </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='males' > Only Males </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='children' > Only Children </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='anybody' > Anybody </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Dntknown' > Don't known </li>";
   
    $a .= "</ul>";
   }  

   if ($pq == "B2Q3")
   {
    $q = "In your opinion, Who is more likely to get infected with PTB?*(Please check all that are mentioned.)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='anybody' > Anybody </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='poorppl' > Only poor people </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='homelessppl'> Only homeless people </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='alcoholic' > Only alcoholic </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='drugusers' > Only drug users </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='withhiv' > Only people living with HIV/ADIS </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='inprison' > Only people who have been in prison </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Dntknown' > Don't known </li>";
   
    $a .= "</ul>";
   } 
   
   if ($pq == "B2Q4")
   {
    $q = "What was your reaction when you found that you have PTB?*(Check all mentioned)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Fear' > Fear </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Surprise'> Surprise</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Copywithit' > Copy with it </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Sadness' > Sadness or hopelessness </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Embarassment' > Embarassment </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Anger' > Anger </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Dntknown' > Don't known </li>";
    $a .= "</ul>";
   }  
   if ($pq == "B2Q5")
   {
    $q = "What are the reasons do you think why people do not go to a doctor or heakth facility, when they have health issues?*(Please check all that apply.)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='notsurewheretogo' > People are not sure where to go </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='healthcarecost' > Health care cost </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='difficultiesintransport'> Difficulties with transportation or distance to clinic </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='notrustonmedicalworkers' > Do not trust medical workers </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='badattitudeofworkers' >  Do not like attitude of medical workers </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='cantleavework' > Cannot leave work(Overlapping work hours with medical facility working hours) </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='theygotodr' > They do go to doctor</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Others' > Others </li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_9 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }
   
   if ($pq == "B2Q6")
   {
    $q = "Whom do you think you need to talk to, about your illness (PTB)?*(Check all that mentioned."; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Doctor/medicalworkers' > Doctor or other medical worker </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Spouse'> Spouse</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Parent' > Parent</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Children' > Children </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='closefrnd' > Close friend </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='familymembers' > Other family members</li>";
    $a .= "<li>Specify <input type=text id=" . $pq . "_7 name=" . $pq . " value='' ></li>";
    $a .= "<li><input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='None' >No one</li>";
    $a .= "</ul>";
   } 
   
   
   if ($pq == "B2Q7")
   {
    $q = "Are you Conserned about your other family members contracting PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntno'> Don't know </li>";
    $a .= "</ul>";
   } 


   // PAGE B3
   if ($pq == "B3Q1")
   {
    $q = "What do others feel towords you when they know that you have got PTB?(Check one)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='compassionatetohelp' > They feel compassionate and desire to help </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_2 name=" . $pq . " value='endtostayaway'> They feel compassionate, but tend to stay away from me </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_3 name=" . $pq . " value='cantgettb'> They feel it's my problem,they can't get TB </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='fearme'> They fear me because they may get infetcted by me </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_5 name=" . $pq . " value='nofeeling'> They have no particular feeling </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_6 name=" . $pq . " value='Dntknown'> Don't known </li>";
    
    $a .= "</ul>";
   }  


   if ($pq == "B3Q2")
   {
    $q = "In your community howa person who has PTB usually regarded or treated?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='pplereject' > Most people reject him/her </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='friendlybuttrytoavoid'> Most people are friendly,but they generally try to avoid him/her </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='helps'> The community mostly supports and helps him/her </li>";
    $a .= "<li> <input type=radio id=" . $pq . "_4 name=" . $pq . " value='Dntknown'> Don't known </li>";
    $a .= "</ul>";
   } 

   if ($pq == "B3Q3")
   {
    $q = "Do you think that HIV positive people should concerned about PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntno'> Don't know </li>";
    // ADD if no gto que no-5  if yes go no=4
    $a .= "</ul>";
   } 


   if ($pq == "B3Q4")
   {
    $q = "Why?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='withhivmorelikelyptb' > Person with HIV is more likely to develop PTB</li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Dntno'> Don't know </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='other'> Other </li>";
    $a .= "<li>Specify  <input type=text id=" . $pq . "_4 name=" . $pq . " value=''></li>";
    // ADD if no gto que no-5  if yes go no=4
    $a .= "</ul>";
   } 

   if ($pq == "B3Q5")
   {
    $q = "Why not?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='' > Person with HIV is not more likely than person without HIV to develop PTB</li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Dntno'> Don't know </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='other'> Other </li>";
    $a .= "<li>Specify  <input type=text id=" . $pq . "_4 name=" . $pq . " value=''></li>";
    // ADD if no gto que no-5  if yes go no=4
    $a .= "</ul>";
   } 

   // PAGE B4:

   if ($pq == "B4Q1")
   {
    $q = "Whom did you talk to, about your illness(PTB)?*(Check all that are mentioned.)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='doctor' > Doctor or other medical worker </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Spouse' > Spouse </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Parent'> Parent </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Childern' > Childern </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Closefriend' >  Close friend </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='NOone' > NO one</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Otherfamilymembers'>Other family members</li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_8 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B4Q2")
   {
    $q = "What did you do when you had cough and fever?*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='doctor' > Self tretment options(herbs,etc) </li>";
    $a .= "<li>Specify <input type=text id=" . $pq . "_2 name=" . $pq . " value='' ></li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Parent'> Go to health facility </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Childern' > Go to pharmacy </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Closefriend' > Go to traditional healers</li>";
    $a .= "<li>Specify <input type=text id=" . $pq . "_6 name=" . $pq . " value='' ></li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='dntknw'</li>Don't know";
    $a .= "Specify <li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='others' >Others</li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B4Q3")
   {
    $q = ""; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='owntreatment' > When treatment on my own does not work </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='symtomsmorethantwoweeks' > When cough or fever,symptoms last for>2 weeks </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='whensuspectedptb'> As soon as suspected that i have PTB </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='hadnotgonetodr' > I had not gone to the doctor or health fcility </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Closefriend' >  Don't know </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Others'></li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_7 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }


   if ($pq == "B4Q4")
   { 
   
    $q = "Did you pay for the diagnosis of PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' > No  </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Yes'> Yes </li>";
    $a .= "<li>How much<input type= id=" . $pq . "_3 name=" . $pq . " value=''></li>";
   
    $a .= "</ul>";
   }
   
   if ($pq == "B4Q5")
   {
      $q .= "id=" .$q . "_0 name=" . $q . "";     
    $q = "Did you pay for the treatment of PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' > No  </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Yes'> Yes </li>";
    $a .= "<li>How much<input type= id=" . $pq . "_3 name=" . $pq . " value=''></li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B4Q6")
   {
    $q = "What do you do to prvent spread of PTB to  others?*(Check all that apply)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='wearmask' > Wear mask when going to public </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='avoidcough' >Avoid cough in front of others</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='covermounth'> Covering mouth and nose coughing or sneezing </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='avoidclose' > Avoid close contact with others </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='safedisposesputum' > Safe disposal of sputum</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='ventilatedroom' >Ventilation of living rooms</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='regularmedication'</li> Taking regular medications";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='keepdistance'</li> Keep distance with others";
    $a .= "<li> <input type=checkbox id=" . $pq . "_9 name=" . $pq . " value='dntknw'</li> Don't know";
    $a .= "<li> <input type=checkbox id=" . $pq . "_10 name=" . $pq . " value='others' >Others</li>";
    $a .= "<li>Specify<input type= id=" . $pq . "_11 name=" . $pq . " value=''></li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B4Q7")
   {
    $q = "How are you helping other members in your community in PTB prevention and control?*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Referfamily' > Refer family or community member to health facility when they have symptoms suggestive of PTB </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='InvolveingPTBscreening' > Involve in PTB screening at community level</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Involveinptbtreatmenttrace'> Invove in tracing PTB treatment defaulters </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='advicetakedrugs' > Advice PTB patients to take their drugs properly </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='serveptbsupporter' > Serve as PTB treatment supporter</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='providecounsellingotherptb' >Providing counselling to other PTB patients</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='dntknw'</li> Don't know";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='others' >Others</li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_9 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B4Q8")
   {
    $q = "How do you take care of your health during the due course of treatment?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Excercise' > Excercise </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Goodnutrition' > Good nutrition</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Takingmedicationsregularl'> Taking medications regularly </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Yoga' > Yoga </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Regular followupwithhealthworkers' > Regular follow up with health workers</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='dntknw'</li> Don't know";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='others' >Others</li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_8 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B4Q9")
   {
    $q = "What are the practies do you follow to aviod to prevent your other family members contracting PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='No' > (Analysis by coding)  </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='Dntknw'> Don't know </li>";
    $a .= "<li>How much<input type= id=" . $pq . "_3 name=" . $pq . " value=''></li>";
    
    $a .= "</ul>";
   } 
   


   if ($pq == "B5Q1")
   {
    $q = "Where did you first learn about pulmonary tuberculosis or PTB?*(Check all that are mentioned)"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Newspapers/magazines' > Newspapers and magazines </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Radio' > Radio</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='TV'> TV </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='Billboards' > Billboards</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Brochuresposters'> Brochures,posters and printed materials</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Healthworkers'</li> Health workers";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='Familyfriendsneighbours' >Family, friends, neighbours and collegues</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Religiousleaders' >Religious leaders</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_9 name=" . $pq . " value='Teachers' >Teachers</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_10 name=" . $pq . " value='Don'tknow' >Don't know</li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_11 name=" . $pq . " value='Others' >Others</li>";
    $a .= "Specify <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
   
    $a .= "</ul>";
   }

   if ($pq == "B5Q2")
   {
    $q = "Do you feel well informed about how PTB spreads?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B5Q3")
   {
    $q = "Do you feel well informed about how PTB treatment?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B5Q4")
   {
    $q = "Do you feel well informed about availability of free drugs for PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 
   if ($pq == "B5Q5")
   {
    $q = "Do you feel well informed about availability of free diagnostics for PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B5Q6")
   {
    $q = "Do you feel well informed about availability of social security schemes for PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B5Q7")
   {
    $q = "Do you wish you could get more information about PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
   //  $a .= "If yes who has provided the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 

   if ($pq == "B5Q8")
   {
    $q = "Do you know about PTB before yor were diagnosed for PTB?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes  </li>";
    $a .= "If yes who has provided the information or from where did you get the information: <li> <input type=text id=" . $pq . "_12 name=" . $pq . " value='' ></li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li><input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntknw'>Don't know</li>";
    
    $a .= "</ul>";
   } 





   return "<tr><th>". substr($pq, 3, 10) . "</th><th>" . $q ."</th><td>" . $a . "</td></tr>".PHP_EOL;
}

?>
<div>
   LOCATION<p id=latlon></p> <button id=btn_latlon onclick='getLatLon();' >Read</button>
</div>
<form action=PTB_B.php method=post>
   <div style="width:600px;border:1px solid black;padding:5px;background-color:aliceblue; margin:auto;" >
         <p><strong>1. knowledge of the participants on cause, symtoms,transission, treatement and prevention of PTB.</p></strong>


   <table rules=all style="background-color:lightyellow;color:brown;border:1px solid green;margin:auto;" >

      <?php 
      if ($curPage == "" || $curPage == "B1")
       {
            echo getQuestion ("B1Q1", $B1Q1); 
            echo getQuestion ("B1Q2", $B1Q2 ); 
            echo getQuestion ("B1Q3", $B1Q3 );
            echo getQuestion ("B1Q4", $B1Q4 ); 
            echo getQuestion ("B1Q5", $B1Q5 ); 
            echo getQuestion ("B1Q6", $B1Q6); 
            echo getQuestion ("B1Q7", $B1Q7 ); 
            echo getQuestion ("B1Q8", $B1Q8 );
            echo getQuestion ("B1Q9", $B1Q9 ); 
            echo getQuestion ("B1Q10", $B1Q10 ); 
            echo getQuestion ("B1Q11", $B1Q11); 
            echo getQuestion ("B1Q12", $B1Q12); 
            echo getQuestion ("B1Q13", $B1Q13);
            echo getQuestion ("B1Q14", $B1Q14);
            echo getQuestion ("B1Q15", $B1Q15);
            echo getQuestion ("B1Q16", $B1Q16);
         
            $curPage = "B1";
       }

       

         else if ($curPage == "B2")
         {  
            // echo getQuestion ("B2Q0",$B2Q0); 
            echo getQuestion ("B2Q1",$B2Q1); 
            echo getQuestion ("B2Q2",$B2Q2); 
            echo getQuestion ("B2Q3",$B2Q3);
            echo getQuestion ("B2Q4",$B2Q4);
            echo getQuestion ("B2Q5",$B2Q5);
            echo getQuestion ("B2Q6",$B2Q6);
            echo getQuestion ("B2Q7",$B2Q7);     
            $curPage = "B2";
         }

         else if ($curPage == "B3")
         {  
            // echo getQuestion ("B2Q0",$B2Q0); 
            echo getQuestion ("B3Q1",$B3Q1);
            echo getQuestion ("B3Q2",$B3Q2); 
            echo getQuestion ("B3Q3",$B3Q3);
            echo getQuestion ("B3Q4",$B3Q4);
            echo getQuestion ("B3Q5",$B3Q5);
            

            $curPage = "B3";
         }


         else if ($curPage == "B4")
         {  
            // echo getQuestion ("B2Q0",$B2Q0); 
            echo getQuestion ("B4Q1",$B4Q1);
            echo getQuestion ("B4Q2",$B4Q2); 
            echo getQuestion ("B4Q3",$B4Q3);
            echo getQuestion ("B4Q4",$B4Q4);
            echo getQuestion ("B4Q5",$B4Q5);
            echo getQuestion ("B4Q6",$B4Q6);
            echo getQuestion ("B4Q7",$B4Q7);
            echo getQuestion ("B4Q8",$B4Q8);
            echo getQuestion ("B4Q9",$B4Q9);
            $curPage = "B4";
         }

         else if ($curPage == "B5")
         {  
            // echo getQuestion ("B2Q0",$B2Q0); 
            echo getQuestion ("B5Q1",$B5Q1);
            echo getQuestion ("B5Q2",$B5Q2); 
            echo getQuestion ("B5Q3",$B5Q3);
            echo getQuestion ("B5Q4",$B5Q4);
            echo getQuestion ("B5Q5",$B5Q5);
            echo getQuestion ("B5Q6",$B5Q6);
            echo getQuestion ("B5Q7",$B5Q7);
            echo getQuestion ("B5Q8",$B5Q8);
            
            $curPage = "B5";
         }
      ?>
   </table>

<input type=submit name=action value='Prev' style="float: left;">
<input type=submit name=action value='Next' style="float:inherit;">
<input type=submit name=submit value='add' style="float:right;">
<input type=submit name=action value='Refresh' style="float:inherit;">

<?php
   echo "<input type=hidden name=curPage value=" . $curPage ." >";
?>
</div>
</body>
