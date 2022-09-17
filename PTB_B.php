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
</script>
</head>
<body>
<?php
include "commons/functions.php";

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
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='Badweather' > Bad weather </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }  

   if ($pq == "B1Q2")
   {
    $q = "What are the signs and symtoms of PTB*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Cough' > Cough </li>";
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
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntno'> Don't know </li>";
    // ADD if no gto que no-5
    $a .= "</ul>";
   } 
   
   if ($pq == "B1Q4")
   {
    $q = "How person can get PTB*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='handshake' > Through handshakes </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='badair' > Through bad air </li>";
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
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='NO' > NO </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='Dnknw' > Don't know </li>";
    // ADD if NO go to que no-7
    $a .= "</ul>";
   }  

   if ($pq == "B1Q6")
   {
    $q = "How can a person prevent getting PTB?*"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='avoidshaking' > Avoiding shaking hands </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='covering' > Covering mouth and nose when coughing or sneezing </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_3 name=" . $pq . " value='avoidsharing' > Avoid sharing of dishes </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_4 name=" . $pq . " value='washhands' > Washing hands after touching items in public places </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='goodnutrition' > Through good nutrition  </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='vaccinatechildren' > Vaccination of children </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_5 name=" . $pq . " value='medicines' > Take tablets and medicines </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_6 name=" . $pq . " value='avooidcrowed' > Avoid going to crowed places </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_7 name=" . $pq . " value='keepdistance' > Keeping distance with others </li>";
    $a .= "<li> <input type=checkbox id=" . $pq . "_8 name=" . $pq . " value='Dntknown' > Don't known </li>";

   
    $a .= "</ul>";
   }

   if ($pq == "B1Q7")
   {
    $q = "Can PTB transmitted from one person to another"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=radio id=" . $pq . "_1 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_2 name=" . $pq . " value='No'> No </li>";
    $a .= "<li>  <input type=radio id=" . $pq . "_3 name=" . $pq . " value='Dntno'> Don't know </li>";
    // ADD if NO gto que no-9
    $a .= "</ul>";
   } 

   if ($pq == "B1Q8")
   {
    $q = "How can PTB be cured?*"; 
    $a = "<ul  style='list-style-type:none;' >";
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
    $a .= "<li> <input  type=text i d=" . $pq . "_8 name=" . $pq . " value='' ></li>";

   
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
    $a .= "<li> <input type=radio id=" . $pq . "_5name=" . $pq . " value='Dntknw' >  Don't known  </li>";
    $a .= "</ul>";
   }  

   if ($pq == "B1Q13")
   {
    $q = "Have you got Nikshaya ID?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='NO' > NO </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='Yes' > Yes </li>";
    $a .= "<li>Nikshaya ID Number <input type=text id=" . $pq . "_3 name=" . $pq . " value='' >  </li>";
    // ADD ID value
    $a .= "</ul>";
   } 
   
   if ($pq == "B1Q14")
   {
    $q = "What do you think how did you get PTB"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='bycode' > Analysis by coding </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='dntknw' >  Don't known </li>";
    $a .= "</ul>";
   }
   
   if ($pq == "B1Q15")
   {
    $q = "What are the facilities given to the TB patients by the Government?"; 
    $a = "<ul  style='list-style-type:none;' >";
    $a .= "<li> <input type=checkbox id=" . $pq . "_1 name=" . $pq . " value='bycode' > Analysis by coding </li>";
    $a .= "<li>  <input type=checkbox id=" . $pq . "_2 name=" . $pq . " value='dntknw' >  Don't known </li>";
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

   return "<tr><th>". substr($pq, 3, 10) . "</th><th>" . $q ."</th><td>" . $a . "</td></tr>".PHP_EOL;
}

?>

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

   

   ?>
</table>

<input type=submit name=action value='Prev' style="float: left;">
<input type=submit name=action value='Next' style="float:right;">
<input type=submit name=action value='Refresh' style="margin-left: 229px;">

<?php
   echo "<input type=hidden name=curPage value=" . $curPage ." >";
?>
</div>
</body>
