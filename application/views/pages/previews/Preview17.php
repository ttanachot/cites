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
              <li class="nav-header"><h2>Form & Request</h2></li>
              <li><a href="#">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li class="active"><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h2>Form Status</h2></li>
              <li><a href="#">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>บัญชีแสดงจำนวนพืชอนุรักษ์ที่เปลี่ยนแปลงในรอบปีปฏิทิน</h2><br><br>
            
            <?php echo form_open("pages/save17");?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>
            <? $fname = $_POST['fname']; ?>
            <b>ใบสำคัญการขึ้นทะเบียนสถานทีเพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $_POST["fname"];?></span><br>

            <? $fdate = $_POST['fdate']; ?>
            <b>ลงวันที: </b><span style="color:red"><?echo $_POST["fdate"];?></span><br>

            <? $fdate2= $_POST['fdate2']; ?>
            <b>ตั้งแต่: </b><span style="color:red"><?echo $_POST["fdate2"];?></span><br>

            <? $fyear = $_POST['fyear']; ?>
            <b>ถึง 31 ธันวาคม พ.ศ.: </b>
            <span style="color:red"><?echo $_POST["fyear"];?></span><br>
            <br>
            <b>ข้อ1. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่1 </b><br>
            <? $plantname = $_POST['plantname']; ?>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $_POST["plantname"];?></span><br>

            <? $sname= $_POST['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $_POST["sname"];?></span><br>

            <? $numberbreed = $_POST['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $_POST["numberbreed"];?></span><br>

            <? $numbercom = $_POST['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $_POST["numbercom"];?></span><br>

            <? $source = $_POST['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $_POST["source"];?></span><br>

            <? $ab= $_POST['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $_POST["ab"];?></span><br>
            <br>
            <b>ข้อ2. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่2 </b><br>
            <? $plantname2= $_POST['plantname2']; ?>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $_POST["plantname2"];?></span><br>

            <? $sname2 = $_POST['sname2']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $_POST["sname2"];?></span><br>

            <? $numberbreed2 = $_POST['numberbreed2']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $_POST["numberbreed2"];?></span><br>

            <? $numbercom2 = $_POST['numbercom2']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $_POST["numbercom2"];?></span><br>

            <? $source2 = $_POST['source2']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $_POST["source2"];?></span><br>

            <? $ab2= $_POST['ab2']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $_POST["ab2"];?></span><br>
            <br>
            <b>ข้อ3. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่3 </b><br>
            <? $plantname3 = $_POST['plantname3']; ?>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $_POST["plantname3"];?></span><br>

            <? $sname3 = $_POST['sname3']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $_POST["sname3"];?></span><br>

            <? $numberbreed3= $_POST['numberbreed3']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $_POST["numberbreed3"];?></span><br>

            <? $numbercom3= $_POST['numbercom3']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $_POST["numbercom3"];?></span><br>

            <? $source3 = $_POST['source3']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $_POST["source3"];?></span><br>

            <? $ab3 = $_POST['ab3']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $_POST["ab3"];?></span><br>
            <br>
            <br>
            <br>
            
            


            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fdate" value="<?echo $fdate;?>">
            <input type="hidden" name="fdate2" value="<?echo $fdate2;?>">
            <input type="hidden" name="fyear" value="<?echo $fyear;?>">


            <input type="hidden" name="plantname" value="<?echo $plantname;?>">
            <input type="hidden" name="sname" value="<?echo $sname;?>">
            <input type="hidden" name="numberbreed" value="<?echo $numberbreed;?>">
            <input type="hidden" name="numbercom" value="<?echo $numbercom;?>">
            <input type="hidden" name="source" value="<?echo $source;?>">
            <input type="hidden" name="ab" value="<?echo $ab;?>">


            <input type="hidden" name="plantname2" value="<?echo $plantname2;?>">
            <input type="hidden" name="sname2" value="<?echo $sname2;?>">
            <input type="hidden" name="numberbreed2" value="<?echo $numberbreed2;?>">
            <input type="hidden" name="numbercom2" value="<?echo $numbercom2;?>">
            <input type="hidden" name="source2" value="<?echo $source2;?>">
            <input type="hidden" name="ab2" value="<?echo $ab2;?>">


            <input type="hidden" name="plantname3" value="<?echo $plantname3;?>">
            <input type="hidden" name="sname3" value="<?echo $sname3;?>">
            <input type="hidden" name="numberbreed3" value="<?echo $numberbreed3;?>">
            <input type="hidden" name="numbercom3" value="<?echo $numbercom3;?>">
            <input type="hidden" name="source3" value="<?echo $source3;?>">
            <input type="hidden" name="ab3" value="<?echo $ab3;?>">



            
            
            <table>
            <tr>
            <td>
            <button type="submit" class="btn btn-large btn-primary">Confirm</button>
            <?php echo form_close(); ?>
            </td>


            <td>
            <?php echo form_open('pages/form17/24'); ?>
            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fdate" value="<?echo $fdate;?>">
            <input type="hidden" name="fdate2" value="<?echo $fdate2;?>">
            <input type="hidden" name="fyear" value="<?echo $fyear;?>">


            <input type="hidden" name="plantname" value="<?echo $plantname;?>">
            <input type="hidden" name="sname" value="<?echo $sname;?>">
            <input type="hidden" name="numberbreed" value="<?echo $numberbreed;?>">
            <input type="hidden" name="numbercom" value="<?echo $numbercom;?>">
            <input type="hidden" name="source" value="<?echo $source;?>">
            <input type="hidden" name="ab" value="<?echo $ab;?>">


            <input type="hidden" name="plantname2" value="<?echo $plantname2;?>">
            <input type="hidden" name="sname2" value="<?echo $sname2;?>">
            <input type="hidden" name="numberbreed2" value="<?echo $numberbreed2;?>">
            <input type="hidden" name="numbercom2" value="<?echo $numbercom2;?>">
            <input type="hidden" name="source2" value="<?echo $source2;?>">
            <input type="hidden" name="ab2" value="<?echo $ab2;?>">


            <input type="hidden" name="plantname3" value="<?echo $plantname3;?>">
            <input type="hidden" name="sname3" value="<?echo $sname3;?>">
            <input type="hidden" name="numberbreed3" value="<?echo $numberbreed3;?>">
            <input type="hidden" name="numbercom3" value="<?echo $numbercom3;?>">
            <input type="hidden" name="source3" value="<?echo $source3;?>">
            <input type="hidden" name="ab3" value="<?echo $ab3;?>">

            <br><button type="submit" class="btn btn-large">Go Back</button>
            <?php echo form_close(); ?>
            </td>
            </tr>
            </table>


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