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
            <?php echo form_open("pages/save20");?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>
            <? $fname = $_POST['fname']; ?>
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $_POST["fname"];?></span><br>

            <? $fbd = $_POST['fbd']; ?>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $_POST["fbd"];?></span><br>

            <? $fnation = $_POST['fnation']; ?>
            <b>สัญชาติ: </b><span style="color:red"><?echo $_POST["fnation"];?></span><br>

            <? $fpassport = $_POST['fpassport']; ?>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b><span style="color:red"><?echo $_POST["fpassport"];?></span><br>

            <? $fissue = $_POST['fissue']; ?>
            <b>ออกให้ ณ: </b><span style="color:red"><?echo $_POST["fissue"];?></span><br>

            <? $faddress = $_POST['faddress']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $_POST["faddress"];?></span><br>

            <? $fstreet = $_POST['fstreet']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $_POST["fstreet"];?></span><br>

            <? $fprovince = $_POST['fprovince']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $_POST["fprovince"];?></span><br>

            <? $fzipcode = $_POST['fzipcode']; ?>
            <b>ชรหัสไปรษณีย์: </b><span style="color:red"><?echo $_POST["fzipcode"];?></span><br>

            <? $ftel = $_POST['ftel']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $_POST["ftel"];?></span><br>

            <? $fphone = $_POST['fphone']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $_POST["fphone"];?></span><br>

            <? $ffax = $_POST['ffax']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $_POST["ffax"];?></span><br>

            <b>ขอรับใบแทนใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ </b><br>

            <? $tname = $_POST['tname']; ?>
            <b>ชื่อ: </b><span style="color:red"><?echo $_POST["tname"];?></span><br>

            <? $fid = $_POST['fid']; ?>
            <b>ตามใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $_POST["fid"];?></span><br>

            <? $fname2 = $_POST['fname2']; ?>
            <b>ในนามของ: </b><span style="color:red"><?echo $_POST["fname2"];?></span><br>

            <? $fname3 = $_POST['fname3']; ?>
            <b>โดยมี: </b><span style="color:red"><?echo $_POST["fname3"];?></span><b>เป็นผู้ดำเนินกิจการ</b><br> 

            <? $faddress2 = $_POST['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $_POST["faddress2"];?></span><br>

            <? $fstreet2 = $_POST['fstreet2']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $_POST["fstreet2"];?></span><br>

            <? $fprovince2 = $_POST['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $_POST["fprovince2"];?></span><br>

            <? $fzipcode2 = $_POST['fzipcode2']; ?>
            <b>ชรหัสไปรษณีย์: </b><span style="color:red"><?echo $_POST["fzipcode2"];?></span><br>

            <? $ftel2 = $_POST['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $_POST["ftel2"];?></span><br>

            <? $fphone2 = $_POST['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $_POST["fphone2"];?></span><br>

            <? $ffax2 = $_POST['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $_POST["ffax2"];?></span><br>

            <? $fcause = $_POST['fcause']; ?>
            <b>เหตุผลที่ขอรับใบแทน: </b><span style="color:red"><?echo $_POST["fcause"];?></span><br>



            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fbd" value="<?echo $fbd;?>">
            <input type="hidden" name="fnation" value="<?echo $fnation;?>">
            <input type="hidden" name="fpassport" value="<?echo $fpassport;?>">
            <input type="hidden" name="fissue" value="<?echo $fissue;?>">
            <input type="hidden" name="faddress" value="<?echo $faddress;?>">
            <input type="hidden" name="fstreet" value="<?echo $fstreet;?>">
            <input type="hidden" name="fprovince" value="<?echo $fprovince;?>">
            <input type="hidden" name="fzipcode" value="<?echo $fzipcode;?>">
            <input type="hidden" name="ftel" value="<?echo $ftel;?>">
            <input type="hidden" name="fphone" value="<?echo $fphone;?>">
            <input type="hidden" name="ffax" value="<?echo $ffax;?>">
            <input type="hidden" name="tname" value="<?echo $tname;?>">
            <input type="hidden" name="fid" value="<?echo $fid;?>">
            <input type="hidden" name="fname2" value="<?echo $fname2;?>">
            <input type="hidden" name="fname3" value="<?echo $fname3;?>">
            <input type="hidden" name="faddress2" value="<?echo $faddress2;?>">
            <input type="hidden" name="fstreet2" value="<?echo $fstreet2;?>">
            <input type="hidden" name="fprovince2" value="<?echo $fprovince2;?>">
            <input type="hidden" name="fzipcode2" value="<?echo $fzipcode2;?>">
            <input type="hidden" name="ftel2" value="<?echo $ftel2;?>">
            <input type="hidden" name="fphone2" value="<?echo $fphone2;?>">
            <input type="hidden" name="ffax2" value="<?echo $ffax2;?>">
            <input type="hidden" name="fcause" value="<?echo $fcause;?>">

            <table>
            <tr>
            <td>
            <button type="submit" class="btn btn-large btn-primary">Confirm</button>
            <?php echo form_close(); ?>
            </td>

            <td>
            <?php echo form_open('pages/form20/23'); ?>
            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fbd" value="<?echo $fbd;?>">
            <input type="hidden" name="fnation" value="<?echo $fnation;?>">
            <input type="hidden" name="fpassport" value="<?echo $fpassport;?>">
            <input type="hidden" name="fissue" value="<?echo $fissue;?>">
            <input type="hidden" name="faddress" value="<?echo $faddress;?>">
            <input type="hidden" name="fstreet" value="<?echo $fstreet;?>">
            <input type="hidden" name="fprovince" value="<?echo $fprovince;?>">
            <input type="hidden" name="fzipcode" value="<?echo $fzipcode;?>">
            <input type="hidden" name="ftel" value="<?echo $ftel;?>">
            <input type="hidden" name="fphone" value="<?echo $fphone;?>">
            <input type="hidden" name="ffax" value="<?echo $ffax;?>">
            <input type="hidden" name="tname" value="<?echo $tname;?>">
            <input type="hidden" name="fid" value="<?echo $fid;?>">
            <input type="hidden" name="fname2" value="<?echo $fname2;?>">
            <input type="hidden" name="fname3" value="<?echo $fname3;?>">
            <input type="hidden" name="faddress2" value="<?echo $faddress2;?>">
            <input type="hidden" name="fstreet2" value="<?echo $fstreet2;?>">
            <input type="hidden" name="fprovince2" value="<?echo $fprovince2;?>">
            <input type="hidden" name="fzipcode2" value="<?echo $fzipcode2;?>">
            <input type="hidden" name="ftel2" value="<?echo $ftel2;?>">
            <input type="hidden" name="fphone2" value="<?echo $fphone2;?>">
            <input type="hidden" name="ffax2" value="<?echo $ffax2;?>">
            <input type="hidden" name="fcause" value="<?echo $fcause;?>">

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
