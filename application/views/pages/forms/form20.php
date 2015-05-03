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
              <li class ="active"><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
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
              <li class="nav-header"><a href="<? echo site_url("pages/stats_home") ?>">
              <h2><font color="green">Form Status</h2></a></font></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>คำขอใบแทนใบ สำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</h2><br><br>
            <?php echo form_open("pages/preview20");?>

            <?
              // check post if it is null value
              if(isset($_POST['fname'])) 
                $fname = $_POST['fname'];
              else 
                $fname = '';
              if(isset($_POST['fbd'])) 
                $fbd = $_POST['fbd'];
              else 
                $fbd = '';
              if(isset($_POST['fnation'])) 
                $fnation = $_POST['fnation'];
              else 
                $fnation = '';
              if(isset($_POST['fpassport'])) 
                $fpassport = $_POST['fpassport'];
              else 
                $fpassport = '';
              if(isset($_POST['fissue'])) 
                $fissue = $_POST['fissue'];
              else 
                $fissue = '';
              if(isset($_POST['faddress'])) 
                $faddress = $_POST['faddress'];
              else 
                $faddress = '';
              if(isset($_POST['fstreet'])) 
                $fstreet = $_POST['fstreet'];
              else 
                $fstreet = '';
              if(isset($_POST['fprovince'])) 
                $fprovince = $_POST['fprovince'];
              else 
                $fprovince = '';
              if(isset($_POST['fzipcode'])) 
                $fzipcode = $_POST['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($_POST['ftel'])) 
                $ftel = $_POST['ftel'];
              else 
                $ftel = '';
              if(isset($_POST['fphone'])) 
                $fphone = $_POST['fphone'];
              else 
                $fphone = '';
              if(isset($_POST['ffax'])) 
                $ffax = $_POST['ffax'];
              else 
                $ffax = '';
              if(isset($_POST['tname'])) 
                $tname = $_POST['tname'];
              else 
                $tname = '';
              if(isset($_POST['fid'])) 
                $fid = $_POST['fid'];
              else 
                $fid = '';
              if(isset($_POST['fname2'])) 
                $fname2 = $_POST['fname2'];
              else 
                $fname2 = '';
              if(isset($_POST['faddress2'])) 
                $faddress2 = $_POST['faddress2'];
              else 
                $faddress2 = '';
              if(isset($_POST['fstreet2'])) 
                $fstreet2 = $_POST['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($_POST['fprovince2'])) 
                $fprovince2 = $_POST['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($_POST['fzipcode2'])) 
                $fzipcode2 = $_POST['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($_POST['ftel2'])) 
                $ftel2 = $_POST['ftel2'];
              else 
                $ftel2 = '';
              if(isset($_POST['fphone2'])) 
                $fphone2 = $_POST['fphone2'];
              else 
                $fphone2 = '';
              if(isset($_POST['ffax2'])) 
                $ffax2 = $_POST['ffax2'];
              else 
                $ffax2 = '';
              if(isset($_POST['fname3'])) 
                $fname3 = $_POST['fname3'];
              else 
                $fname3 = '';
              if(isset($_POST['fcause'])) 
                $fcause = $_POST['fcause'];
              else 
                $fcause = '';

              
            ?>
            
            <b>ข้าพเจ้า: </b><input class="input-xlarge" type="text" name="fname" value="<?echo $fname;?>"> <br>
            <b>วันเดือนปีเกิด: </b><input type="text" name="fbd" value="<?echo $fbd;?>"><br>
            <b>สัญชาติ: </b><input type="text" name="fnation" value="<?echo $fnation;?>"><br>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b><input class="input-xlarge" type="text" name="fpassport" value="<?echo $fpassport;?>"><br>
            <b>ออกให้ ณ: </b><input type="text" name="fissue" value="<?echo $fissue;?>"><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress" value="<?echo $faddress;?>"><br>
            <b>ถนน: </b><input type="text" name="fstreet" value="<?echo $fstreet;?>"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince" value="<?echo $fprovince;?>"><br>
            <b>รหัสไปรษณีย์: </b><input type="text" name="fzipcode" value="<?echo $fzipcode;?>"><br>
            <b>โทรศัพท์: </b><input type="text" name="ftel" value="<?echo $ftel;?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><input type="text" name="fphone" value="<?echo $fphone;?>"><br>
            <b>โทรสาร: </b><input type="text" name="ffax" value="<?echo $ffax;?>"><br>
            <br>
            <b>ขอรับใบแทนใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ </b><br>
            <b>ชื่อ: </b><input type="text" name="tname" value="<?echo $tname;?>"><br>
            <b>ตามใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><input type="text" name="fid" value="<?echo $fid;?>"><br>
            <b>ในนามของ: </b><input type="text" name="fname2" value="<?echo $fname2;?>"><br>
            <b>โดยมี: </b><input type="text" name="fname3" value="<?echo $fname3;?>"> <b>เป็นผู้ดำเนินกิจการ</b><br>
            <b>ที่อยู่: </b><input class="input-xxlarge" type="text" name="faddress2" value="<?echo $faddress2;?>"><br>
            <b>ถนน: </b><input type="text" name="fstreet2" value="<?echo $fstreet2;?>"><br>
            <b>จังหวัด: </b><input type="text" name="fprovince2" value="<?echo $fprovince2;?>"><br>
            <b>รหัสไปรษณีย์: </b><input type="text" name="fzipcode2" value="<?echo $fzipcode2;?>"><br>
            <b>โทรศัพท์: </b><input type="text" name="ftel2" value="<?echo $ftel2;?>"><br>
            <b>โทรศัพท์เคลื่อนที่: </b><input type="text" name="fphone2" value="<?echo $fphone2;?>"><br>
            <b>โทรสาร: </b><input type="text" name="ffax2" value="<?echo $ffax2;?>"><br>
            <br>
            <b>เหตุผลที่ขอรับใบแทน: </b><br>
            <input type="text" name="fcause" value="<?echo $fcause;?>"><br>


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

