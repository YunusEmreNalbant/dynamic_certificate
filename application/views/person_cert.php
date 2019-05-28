<?php



// include autoloader
require_once 'C:\xampp\htdocs\dynamic_certificate\application\libraries\dompdf\autoload.inc.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml("<!DOCTYPE html>
<html lang=\"TR\">
<head>
    <meta charset=\"UTF-8\">
  
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <META HTTP-EQUIV=\"Content-language\" CONTENT=\"tr\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"stylesheet\" href=\"../../assets/css/bootstrap.min.css\">
    <title>Title</title>
    
    <style>
   
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
 

    div{
    font-family:\"DeJaVu Sans Mono\",monospace;
    font-size: 13px;
    }
    #id1 {
        position:absolute;
        z-index: -1;
        height: 550px;
        width: 750px;
    }
    
    #img2{
       text-align: center;
    
    </style> 
</head>
<body >

<div class=\"container-fluid\" style='page-break-after;'>

   
        

    <div style=\"width:800px; height:600px; padding:20px; text-align:center;  #787878; margin-left: auto; margin-right: auto; \">

        <div  class='container-fluid' style=\"width:750px; height:550px; padding:20px; text-align:center;  #787878; margin: auto;  background-size: cover;\" >

            <span id='id1' style=\"font-size:30px; margin-top: -85px; \" ><img src=\"res/arkaplan6.jpeg\" alt=\"İKÜ LOGO\" height=\"795px\" width=\"1200px\"></span>

             <br><br>
            <span style=\"font-size:50px; font-weight:bold\">DENEME SERTİFİKASI</span>
            <br><br>
            <br><br>
            <span style=\"font-size:30px\" ><b> Sayın $person_info->name_surname</b></span><br/><br/>
            <span style=\"font-size:25px\"><i>Tebrikler!</i></span> <br/><br/>

            <span style=\"font-size:20px\" > <b>KURSU BAŞARIYLA BİTİRDİNİZ!</b></span> <br/><br/><br/><br/>
            <span style=\"font-size:25px;\"><i>BU SERTIFIKAYI ALMAYA HAK KAZANDINIZ!</i></span><br>

             <br><br><br><br> <br> 

            <span style=\"font-size:30px; margin-bottom: 30px;\" ><img src=\"res/iku3.png\" alt=\"İKÜ LOGO\" height=\"80px\" width=\"220px\"></span>
            <br><br><br><br>
            <span style=\"font-size:10px; margin-right: 599px; \"><b> Sertifika No: $person_info->id</b></span>

        </div>
        
         
    </div>
 

     <br><br>
    <h3 style='font-size: 30px; text-align: center;'>Sınav Bilgileri</h3>
    
     <br>
        <table align='center' >

        <tr  style='background-color: #f6f6f6;'>
            <td style='font-size: 15px;'> Ad-Soyad  </td>
            <td style='font-size: 15px;'> 1.Sinav  </td>
            <td style='font-size: 15px;'> 2.Sinav  </td>
            <td style='font-size: 15px;'> 3.Sinav  </td>
            <td style='font-size: 15px;'> 4.Sinav  </td>
            <td style='font-size: 15px;'> 5.Sinav  </td>
            <td style='font-size: 15px;'> 6.Sinav  </td>
            <td style='font-size: 15px;'> 7.Sinav  </td>
            <td style='font-size: 15px;'> 8.Sinav  </td>
        
            
    
        </tr>
        <tr>
            <td style='font-size: 15px;'> $person_info->name_surname</td>
            <td style='font-size: 15px;'> $person_info->exam1</td>
            <td style='font-size: 15px;'> $person_info->exam2</td>
            <td style='font-size: 15px;'> $person_info->exam3</td>
            <td style='font-size: 15px;'> $person_info->exam4</td>
            <td style='font-size: 15px;'> $person_info->exam5</td>
            <td style='font-size: 15px;'> $person_info->exam6</td>
            <td style='font-size: 15px;'> $person_info->exam7</td>
            <td style='font-size: 15px;'> $person_info->exam8</td>
           
    
        </tr>
        
    </table>

    
</div>
</body>
</html>
");


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("".$person_info->name_surname,array("Attachment"=>0));







?>



