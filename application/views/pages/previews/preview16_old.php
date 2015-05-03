<html lang="en"><head>
    <meta charset="utf-8">
    <title>TREX Corp.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<? echo base_url() ?>">TREX Corp.</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?echo $username;?></a>
              <!-- <button onclick="location.href='http://localhost/trex_cites/index.php/auth/logout'" class="btn btn-small btn-danger">Sign Out</button> -->
              <button onclick="location.href='<? echo site_url("auth/logout")?>'" class="btn btn-small btn-danger">Sign Out</button>
            </p>

            <ul class="nav">
              <li><a href="<? echo base_url() ?>">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2><font color="green">FORM STATUS</font></h2></li>
              <li class="active"><a href="<? echo site_url("pages/stats1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์ </a></li>
              <br>
              <li><a href="<? echo site_url("pages/stats2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/stats3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="<? echo site_url("pages/stats4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/stats5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/stats6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><a href="<? echo site_url("pages/status/form15") ?>">
              <h2><font>Form & request</h2></a></font></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ พพ.16</h2><br><br>

            <?
              // check post if it is null value
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
                $ab = $form16['fdates'];
              else 
                $ab = '';
              if(isset($form16['fdatee'])) 
                $ab = $form16['fdatee'];
              else 
                $ab = '';
              // if(isset($form16['comment'])) 
              //   $comment = $form16['comment'];
              // else 
              //   $comment = '';
              ?>
            <h3><b>เลขที่คำขอ: </b><span style="color:blue"><?echo $form16["req_Id"];?></span></h3><br>
            <b>ข้าพเจ้า: </b><span style="color:blue"><?echo $form16["fname"];?></span><br>
            <b>วันเดือนปีเกิด: </b><span style="color:blue"><?echo $form16["fbd"];?></span><br>
            <b>สัญชาติ: </b><span style="color:blue"><?echo $form16["fnation"];?></span><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:blue"><?echo $form16["fpassport"];?></span><br>
            <b>ออกให้ ณ: </b><span style="color:blue"><?echo $form16["fissue"];?></span><br>

            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress"];?></span><br>

            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet"];?></span><br>

            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince"];?></span><br>

            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode"];?></span><br>

            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel"];?></span><br>
            
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone"];?></span><br>

            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax"];?></span><br>

            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:blue"><?echo $form16["fmail"];?></span><br>

            <br>
            <b>มีความประสงค์จะขอขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</b>
            <br>
            <br>
            <? $fname2 = $form16['fname2']; ?>
            <b>ในนามของ(กรณีเป็นนิติบุคคล): </b><span style="color:blue"><?echo $form16["fname2"];?></span><br>

            <? $fowner = $form16['fowner']; ?>
            <b>โดยมี: </b><span style="color:blue"><?echo $form16["fowner"];?></span><br>

            <? $faddress2 = $form16['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress2"];?></span><br>

            <? $fstreet2 = $form16['fstreet2']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet2"];?></span><br>

            <? $fprovince2 = $form16['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince2"];?></span><br>

            <? $fzipcode2 = $form16['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode2"];?></span><br>

            <? $ftel2 = $form16['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel2"];?></span><br>

            <? $fphone2 = $form16['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone2"];?></span><br>

            <? $ffax2 = $form16['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax2"];?></span><br>

            <br>
            
            <? $flocation = $form16['flocation']; ?>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:blue"><?echo $form16["flocation"];?></span><br>

            <br>

            <? $faddress3 = $form16['faddress3']; ?>
            <b>ที่อยู่: </b><span style="color:blue"><?echo $form16["faddress3"];?></span><br>

            <? $fstreet3 = $form16['fstreet3']; ?>
            <b>ถนน: </b><span style="color:blue"><?echo $form16["fstreet3"];?></span><br>

            <? $fprovince3 = $form16['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:blue"><?echo $form16["fprovince3"];?></span><br>

            <? $fzipcode3 = $form16['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:blue"><?echo $form16["fzipcode3"];?></span><br>

            
            <? $ftel3 = $form16['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:blue"><?echo $form16["ftel3"];?></span><br>

            <? $fphone3 = $form16['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:blue"><?echo $form16["fphone3"];?></span><br>

            <? $ffax3 = $form16['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:blue"><?echo $form16["ffax3"];?></span><br>

            <br>
            <br>

            <? $plantname = $form16['plantname']; ?>
            <b>ชื่อพืช: </b><span style="color:blue"><?echo $form16["plantname"];?></span><br>

            <? $sname = $form16['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:blue"><?echo $form16["sname"];?></span><br>

            <? $numberbreed = $form16['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:blue"><?echo $form16["numberbreed"];?></span><br>

            <? $numbercom = $form16['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:blue"><?echo $form16["numbercom"];?></span><br>

            <? $source = $form16['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:blue"><?echo $form16["source"];?></span><br>

            <? $ab = $form16['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:blue"><?echo $form16["ab"];?></span><br>

            <br>
            <br>
            <? $fstreet2 = $form16['fdates']; ?>
            <b>ใบสำคัญฉบับนี้ออกให้เมื่อวันที่: </b><span style="color:blue"><?echo $form16["fdates"];?></span><br>
            <? $ffax3 = $form16['fdatee']; ?>
            <b>โดยให้ใช้ถึงวันที่: </b><span style="color:blue"><?echo $form16["fdatee"];?></span><br>
            <b>และให้ใช้ได้เฉพาะสถานที่ซึ่งระบุไว้ในใบสำคัญนี้เท่านั้น</b>


            <br>
            <br>
            <br>
            <!-- <b>รูปภาพสถานประกอบการ: </b> <input type="file" name="file" id="file"><br>
            <b>รูปภาพพันธุ์พืชอนุรักษ์: </b> <input type="file" name="file2" id="file">
            <br>
            <br>
            <br> -->
            <!-- <b>หมายเหตุ</b>
            <br>
            <br>
            <?php echo form_open("officers/view/update");?>
            <textarea rows="5" name="comment"><?php echo $form16['comment']; ?></textarea>
            <br>
            <br> -->
            <?php echo form_open('pages/status/11'); ?>
              <button type="cancel" class="btn btn-large">Go Back</button>
            <? echo form_close(); ?>
          </div>
          
      </div><!--/row-->
    </div>
      <hr>
            <!-- <form action="" method="post">
            <b>ใบสำคัญฉบับนี้ออกให้แก่: </b><input class="input-xlarge" type="text" name="fname"><br>
            <b>ในนามของ/ซึ่งมี: </b><input type="text" name="fbd"><B>เป็นผู้ดำเนินการ</B><br>
            
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress"><br>
            <b>ถนน: </b><input type="text" name="fstreet"><br>
            <b>หมู่ที่: </b><input type="text" name="fmoo"><br>
            <b>ตำบล/แขวง: </b><input type="text" name="ftumbon"><br>
            <b>อำเภอ/เขต: </b><input type="text" name="famphur"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince"><br>
            <br>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><input class="input-xlarge" type="text" name="fname2"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" Name="faddress2"><br>
            <b>ถนน: </b><input type="text" name="fstreet2"><br>
            <b>หมู่ที่: </b><input type="text" name="fmoo2"><br>
            <b>ตำบล/แขวง: </b><input type="text" name="ftumbon2"><br>
            <b>อำเภอ: </b><input type="text" name="famphur2"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince2"><br>
            <br>
            <b>ออกเมื่อวันที่่: </b><input type="text" name="fstart"><br>
            <b>พ.ศ.: </b><input type="text" name="fyear1"><br>
            <b>ใช้ได้จนถึงวันที่: </b><input type="text" name="fend"><br>
            <b>พ.ศ.: </b><input type="text" name="fyear2"><br>
            <br>

            <B>บัญชีพืชอนุรักษ์แนบท้ายใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</B><br>
            <b>ดาวน์โหลดเอกสาร: </b> <button type="cancel" class="btn btn-small">Download</button><br>
            <b>ส่งใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์: </b> <input type="file" name="file" id="file"><br>
            <br>
            <button type="submit" class="btn btn-large btn-primary">Submit</button>
            <button type="cancel" class="btn btn-large">Cancel</button>
            </form> -->
          </div>
          
      </div><!--/row-->
    </div>
      <hr>

      <footer>
        <p>© TREX Corp. 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  

</body></html>