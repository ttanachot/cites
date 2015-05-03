<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
  </head>

  <body>
            <?
              // check post if it is null value
            if(isset($form16['req_Id'])) 
                $freq = $form16['req_Id'];
              else 
                $freq = '';
              if(isset($form16['fname'])) 
                $fname = $form16['fname'];
              else 
                $fname = '';
              if(isset($form16['fbd'])) 
                $fbd = $form16['fbd'];
              else 
                $fbd = '';
              if(isset($form16['fnation'])) 
                $fnation = $form16['fnation'];
              else 
                $fnation = '';
              if(isset($form16['fpassport'])) 
                $fpassport = $form16['fpassport'];
              else 
                $fpassport = '';
              if(isset($form16['fissue'])) 
                $fissue = $form16['fissue'];
              else 
                $fissue = '';
              if(isset($form16['faddress'])) 
                $faddress = $form16['faddress'];
              else 
                $faddress = '';
              if(isset($form16['fstreet'])) 
                $fstreet = $form16['fstreet'];
              else 
                $fstreet = '';
              if(isset($form16['fprovince'])) 
                $fprovince = $form16['fprovince'];
              else 
                $fprovince = '';
              if(isset($form16['fzipcode'])) 
                $fzipcode = $form16['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form16['ftel'])) 
                $ftel = $form16['ftel'];
              else 
                $ftel = '';
              if(isset($form16['fphone'])) 
                $fphone = $form16['fphone'];
              else 
                $fphone = '';
              if(isset($form16['ffax'])) 
                $ffax = $form16['ffax'];
              else 
                $ffax = '';
              if(isset($form16['fmail'])) 
                $fmail = $form16['fmail'];
              else 
                $fmail = '';
              if(isset($form16['fname2'])) 
                $fname2 = $form16['fname2'];
              else 
                $fname2 = '';
              if(isset($form16['fowner'])) 
                $fowner = $form16['fowner'];
              else 
                $fowner = '';
              if(isset($form16['faddress2'])) 
                $faddress2 = $form16['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form16['fstreet2'])) 
                $fstreet2 = $form16['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form16['fprovince2'])) 
                $fprovince2 = $form16['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form16['fzipcode2'])) 
                $fzipcode2 = $form16['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form16['ftel2'])) 
                $ftel2 = $form16['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form16['fphone2'])) 
                $fphone2 = $form16['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form16['ffax2'])) 
                $ffax2 = $form16['ffax2'];
              else 
                $ffax2 = '';
              if(isset($form16['flocation'])) 
                $flocation = $form16['flocation'];
              else 
                $flocation = '';
              if(isset($form16['faddress3'])) 
                $faddress3 = $form16['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form16['fstreet3'])) 
                $fstreet3 = $form16['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form16['fprovince3'])) 
                $fprovince3 = $form16['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form16['fzipcode3'])) 
                $fzipcode3 = $form16['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form16['ftel3'])) 
                $ftel3 = $form16['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form16['fphone3'])) 
                $fphone3 = $form16['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form16['ffax3'])) 
                $ffax3 = $form16['ffax3'];
              else 
                $ffax3 = '';
              if(isset($form16['plantname'])) 
                $plantname = $form16['plantname'];
              else 
                $plantname = '';
              if(isset($form16['sname'])) 
                $sname = $form16['sname'];
              else 
                $sname = '';
              if(isset($form16['numberbreed'])) 
                $numberbreed = $form16['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form16['numbercom'])) 
                $numbercom = $form16['numbercom'];
              else 
                $numbercom = '';
              if(isset($form16['source'])) 
                $source = $form16['source'];
              else 
                $source = '';
              if(isset($form16['ab'])) 
                $ab = $form16['ab'];
              else 
                $ab = '';
              if(isset($form16['fdates'])) 
                $fdates = $form16['fdates'];
              else 
                $fdates = '';
              if(isset($form16['fdatee'])) 
                $fdatee = $form16['fdatee'];
              else 
                $fdatee = '';
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
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ พพ.16'),0,1,'C');
                  $pdf->Cell(20,15,iconv( 'UTF-8','TIS-620','                เลขที่คำขอ: '.$freq),0,0,'');
                  $pdf->Cell(0,15,iconv( 'UTF-8','TIS-620','กรมวิชาการเกษตร'),0,1,'R');
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ข้าพเจ้า: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fname),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                วันเดือนปีเกิด: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fbd),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                สัญชาติ: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fnation),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fpassport),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ออกให้ ณ: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fissue),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                ที่อยู่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$faddress),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ถนน: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fstreet),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                จังหวัด: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fprovince),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                รหัสไปรษณีย์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fzipcode),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรศัพท์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ftel),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                โทรศัพท์เคลื่อนที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fphone),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรสาร: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ffax),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                อีเลคทรอนิคเมล์ Email: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fmail),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620','                มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์'),0,1,'');
                  
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ในนามของ(กรณีเป็นนิติบุคคล): '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fname2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โดยมี: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fowner),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ที่อยู่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$faddress2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                ถนน: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fstreet2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                จังหวัด: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fprovince2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรศัพท์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ftel2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                โทรศัพท์เคลื่อนที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fphone2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรสาร: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ffax2),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$flocation),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                ที่อยู่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$faddress3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ถนน: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fstreet3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                จังหวัด: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fprovince3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                รหัสไปรษณีย์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fzipcode3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรศัพท์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ftel3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                โทรศัพท์เคลื่อนที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fphone3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โทรสาร: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ffax3),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ชื่อพืช: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$plantname),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                ชื่อวิทยาศาสตร์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$sname),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                จำนวน พ่อ-แม่ พันธุ์: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$numberbreed),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                จำนวนเพื่อการค้า: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$numbercom),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$source),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                วิธีการขยายพันธุ์เทียม: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$ab),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,0,iconv( 'UTF-8','TIS-620','                ใบสำคัญฉบับนี้ออกให้เมื่อวันที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620',$fdates),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(100,10,iconv( 'UTF-8','TIS-620','                โดยให้ใช้ถึงวันที่: '),0,0,'');
                  $pdf->SetFont('angsa','',14);
                  $pdf->Cell(0,10,iconv( 'UTF-8','TIS-620',$fdatee),0,1,'');
                  $pdf->SetFont('angsana','B',14);
                  $pdf->Cell(0,0,iconv( 'UTF-8','TIS-620','                และให้ใช้ได้เฉพาะสถานที่ซึ่งระบุไว้ในใบสำคัญนี้เท่านั้น'),0,1,'');
                  $pdf->Cell(0,10,'',0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                (ลายมือชื่อ).........................................(พนักงานเจ้าหน้าที่ผู้อนุญาติ)'),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                                  (.........................................)'),0,1,'');
                  $pdf->Cell(0,5,iconv( 'UTF-8','TIS-620','                                                                                      ตำแหน่ง..........................................'),0,1,'');
                  $pdf->Output("assets/pdf/form16.pdf","F");
                  
                  ?>  
                  <?header('Location: '.base_url("assets/pdf/form16.pdf"))?>
                   
  

</body></html>