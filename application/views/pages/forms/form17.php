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
              <li><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
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

            <?php echo form_open("pages/preview17");?>

            <?
              if(isset($_POST['fname'])) 
                $fname = $_POST['fname'];
              else 
                $fname = '';
              if(isset($_POST['fdate'])) 
                $fdate = $_POST['fdate'];
              else 
                $fdate = '';
              if(isset($_POST['fdate2'])) 
                $fdate2 = $_POST['fdate2'];
              else 
                $fdate2 = '';
              if(isset($_POST['fyear'])) 
                $fyear = $_POST['fyear'];
              else 
                $fyear = '';
              if(isset($_POST['plantname'])) 
                $plantname = $_POST['plantname'];
              else 
                $plantname = '';
              if(isset($_POST['sname'])) 
                $sname = $_POST['sname'];
              else 
                $sname = '';
              if(isset($_POST['numberbreed'])) 
                $numberbreed = $_POST['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($_POST['numbercom'])) 
                $numbercom = $_POST['numbercom'];
              else 
                $numbercom = '';
              if(isset($_POST['source'])) 
                $source = $_POST['source'];
              else 
                $source = '';
              if(isset($_POST['ab'])) 
                $ab = $_POST['ab'];
              else 
                $ab = '';
              if(isset($_POST['sname2'])) 
                $sname2 = $_POST['sname2'];
              else 
                $sname2 = '';
              if(isset($_POST['plantname2'])) 
                $plantname2 = $_POST['plantname2'];
              else 
                $plantname2 = '';
              if(isset($_POST['numberbreed2'])) 
                $numberbreed2 = $_POST['numberbreed2'];
              else 
                $numberbreed2 = '';
              if(isset($_POST['numbercom2'])) 
                $numbercom2 = $_POST['numbercom2'];
              else 
                $numbercom2 = '';
              if(isset($_POST['source2'])) 
                $source2 = $_POST['source2'];
              else 
                $source2 = '';
              if(isset($_POST['ab2'])) 
                $ab2 = $_POST['ab2'];
              else 
                $ab2 = '';
              if(isset($_POST['sname3'])) 
                $sname3 = $_POST['sname3'];
              else 
                $sname3 = '';
              if(isset($_POST['plantname3'])) 
                $plantname3 = $_POST['plantname3'];
              else 
                $plantname3 = '';
              if(isset($_POST['numberbreed3'])) 
                $numberbreed3 = $_POST['numberbreed3'];
              else 
                $numberbreed3 = '';
              if(isset($_POST['numbercom3'])) 
                $numbercom3 = $_POST['numbercom3'];
              else 
                $numbercom3 = '';
              if(isset($_POST['source3'])) 
                $source3 = $_POST['source3'];
              else 
                $source3 = '';
              if(isset($_POST['ab3'])) 
                $ab3 = $_POST['ab3'];
              else 
                $ab3 = '';
            ?>
            
            <b>ใบสำคัญการขึ้นทะเบียนสถานทีเพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><input class="input-xlarge" type="text" name="fname" value="<?echo $fname;?>"><br>
            <b>ลงวันที่: </b><input class="input-xlarge" type="text" name="fdate" value="<?echo $fdate;?>"><br>

            <b>ตั้งแต่: </b><input class="input-xlarge" type="text" name="fdate2" value="<?echo $fdate2;?>">
            <b>ถึง 31 ธันวาคม พ.ศ.: </b><input class="input-xlarge" type="text" name="fyear" value="<?echo $fyear;?>"><br>
            <br>
            <b>ข้อ1. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่1 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><input class="input-xlarge" type="text" name="plantname" value="<?echo $plantname;?>"><br>
            <b>ชื่อวิทยาศาสตร์: </b><input class="input-xlarge" type="text" name="sname" value="<?echo $sname;?>"><br>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><input type="text" name="numberbreed" value="<?echo $numberbreed;?>"><br>
            <b>จำนวนเพื่อการค้า: </b><input type="text" name="numbercom" value="<?echo $numbercom;?>"><br>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><input type="text" name="source" value="<?echo $source;?>"><br>
            <b>วิธีการขยายพันธุ์เทียม: </b><input type="text" name="ab" value="<?echo $ab;?>">
            <br>
            <br>
            <b>ข้อ2. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่2 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><input class="input-xlarge" type="text" name="plantname2" value="<?echo $plantname2;?>"><br>
            <b>ชื่อวิทยาศาสตร์: </b><input class="input-xlarge" type="text" name="sname2" value="<?echo $sname2;?>"><br>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><input type="text" name="numberbreed2" value="<?echo $numberbreed2;?>"><br>
            <b>จำนวนเพื่อการค้า: </b><input type="text" name="numbercom2" value="<?echo $numbercom2;?>"><br>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><input type="text" name="source2" value="<?echo $source2;?>"><br>
            <b>วิธีการขยายพันธุ์เทียม: </b><input type="text" name="ab2" value="<?echo $ab2;?>">
            <br>
            <br>
            <b>ข้อ3. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่3 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><input class="input-xlarge" type="text" name="plantname3" value="<?echo $plantname3;?>"><br>
            <b>ชื่อวิทยาศาสตร์: </b><input class="input-xlarge" type="text" name="sname3" value="<?echo $sname3;?>"><br>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><input type="text" name="numberbreed3" value="<?echo $numberbreed3;?>"><br>
            <b>จำนวนเพื่อการค้า: </b><input type="text" name="numbercom3" value="<?echo $numbercom3;?>"><br>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><input type="text" name="source3" value="<?echo $source3;?>"><br>
            <b>วิธีการขยายพันธุ์เทียม: </b><input type="text" name="ab3" value="<?echo $ab3;?>">
            <br>
            <br>
            <br>
            <table>
            <tr>
              <td>
            <button type="submit" class="btn btn-large btn-primary" >Submit</button>
            <?php echo form_close(); ?>
              </td>
              <td>
            <?php echo form_open("pages");?><br>
            <button type="cancel" class="btn btn-large">Cancel</button>
            <?php echo form_close(); ?>
              </td>
            </tr>
            <table>
              

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
