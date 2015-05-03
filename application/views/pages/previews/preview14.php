<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
  </head>

  <body>
            <?
              // check post if it is null value
              if(isset($form14['fname'])) 
                $fname = $form14['fname'];
              else 
                $fname = '';
              if(isset($form14['faddress'])) 
                $faddress = $form14['faddress'];
              else 
                $faddress = '';
              if(isset($form14['fcountry'])) 
                $fcountry = $form14['fcountry'];
              else 
                $ffcountry = '';
              if(isset($form14['fname2'])) 
                $fname2 = $form14['fname2'];
              else 
                $fname2 = '';
              if(isset($form14['faddress2'])) 
                $faddress2 = $form14['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form14['fcountry2'])) 
                $fcountry2 = $form14['fcountry2'];
              else 
                $fcountry2= '';

              if(isset($form14['fcon'])) 
                $fcon = $form14['fcon'];
              else 
                $fcon = '';
              if(isset($form14['ftran'])) 
                $ftran = $form14['ftran'];
              else 
                $ftran = '';
              ?>

              <?php
                  require('fpdf.php');

                  define('FPDF_FONTPATH','font/');

                  $pdf=new FPDF();
                  $pdf->AddPage();
                  $pdf->Image('assets/img/logo.gif',90,10,-160);
                  $pdf->AddFont('angsa','','angsa.php');
                  $pdf->AddFont('angsana','B','angsab.php');
                  $pdf->SetFont('angsana','B',14);
                  
                  $pdf->Cell(0,20,'',0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','PLANT ACT B.E. 2518 (1975)'),0,1,'C');
                  $pdf->Cell(20,15,iconv( 'UTF-8','TIS-620','                PERMIT/CERTIFICATE NO. '.$freq),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','CONVENTION ON INTERNATIONAL TRADE IN ENDANGERED SPECIES OF WILD FAUNA AND FLORA'),0,1,'R');
                  $pdf->SetFont('angsana','B',16);
                  $pdf->Cell(50,10,iconv( 'UTF-8','TIS-620','              Consigee information '),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,0,iconv( 'UTF-8','TIS-620','                                      Name: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fname),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,10,iconv( 'UTF-8','TIS-620','                                     Address: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$faddress),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,0,iconv( 'UTF-8','TIS-620','                                     Country: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fcountry),0,1,'');
                  $pdf->Cell(0,10,iconv( 'UTF-8',''),0,1,'');
                  $pdf->SetFont('angsana','B',16);
                  $pdf->Cell(50,0,iconv( 'UTF-8','TIS-620','                Permitee information '),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,10,iconv( 'UTF-8','TIS-620','                                      Name: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$name2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,0,iconv( 'UTF-8','TIS-620','                                      Address: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fzipcode),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,10,iconv( 'UTF-8','TIS-620','                                      Country: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fcountry2),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8',''),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(50,0,iconv( 'UTF-8','TIS-620','                Management Authority: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620','DEPARTMENT OF AGRICULTURE CHATUCHAK,BANGKOK 10900 THAILAND. TEL 66-2940-5687'),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                Special conditions: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fcon),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                Purpose of the transaction: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$ftran),0,1,'');
                  $pdf->Cell(0,10,iconv( 'UTF-8',''),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(0,15,iconv( 'UTF-8','TIS-620','                * according to database 7-12 is to be discuss later hot to implement'),0,1,'');
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620','                ** Note that according to the standard form number 13+14 should be fill by the officer'),0,1,'');
                  $pdf->Cell(0,20,iconv( 'UTF-8',''),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                (Signature).........................................(Authorized Officer)'),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                                  (.........................................)'),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                      Position..........................................'),0,1,'');
                  $pdf->Output("assets/pdf/form14.pdf","F");
                  
                  ?>  
                  <?header('Location: '.base_url("assets/pdf/form14.pdf"))?>
                   
  

</body></html>
             


           