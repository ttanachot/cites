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
              <li><a href="<? echo site_url("pages/status") ?>">คำขอล่าสุด</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>บัญชีเพิ่มหรือลดพืชอนุรักษ์ หรือจำนวนพ่อแม่พันธุ์</h2><br><br>
            <?php echo form_open("pages/save18");?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>

            <? $numname = $_POST['numname']; ?>
            <b>ใบสำคัญการขึ้นทะเบียนสถานทีเพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $_POST["numname"];?></span><br>

            <? $datename = $_POST['datename']; ?>
            <b>ลงวันที่: </b><span style="color:red"><?echo $_POST["datename"];?></span><br>
            
            <b>เพื่อ: </b>
            <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> <b>การค้าในประเทศ</b>
            </label>
            <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox2" value="option2"> <b>การค้าต่างประเทศ</b>
            </label>
            
            <? $plantname = $_POST['plantname']; ?>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $_POST["plantname"];?></span><br>

            <? $sname = $_POST['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $_POST["sname"];?></span><br>

            <? $numberbreed = $_POST['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $_POST["numberbreed"];?></span><br>

            <? $numbercom = $_POST['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $_POST["numbercom"];?></span><br>

            <? $source = $_POST['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $_POST["source"];?></span><br>

            <? $ab = $_POST['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $_POST["ab"];?></span>
            <br>
            

            <input type="hidden" name="numname" value="<?echo $numname;?>">
            <input type="hidden" name="datename" value="<?echo $datename;?>">
            <input type="hidden" name="plantname" value="<?echo $plantname;?>">
            <input type="hidden" name="sname" value="<?echo $sname;?>">
            <input type="hidden" name="numberbreed" value="<?echo $numberbreed;?>">
            <input type="hidden" name="numbercom" value="<?echo $numbercom;?>">
            <input type="hidden" name="source" value="<?echo $source;?>">
            <input type="hidden" name="ab" value="<?echo $ab;?>">

            <table>
            <tr>
            <td>
            <button type="submit" class="btn btn-large btn-primary">Confirm</button>
            <?php echo form_close(); ?>
            </td>

            <td>
            <?php echo form_open('pages/form18/11'); ?>

            <input type="hidden" name="numname" value="<?echo $numname;?>">
            <input type="hidden" name="datename" value="<?echo $datename;?>">
            <input type="hidden" name="plantname" value="<?echo $plantname;?>">
            <input type="hidden" name="sname" value="<?echo $sname;?>">
            <input type="hidden" name="numberbreed" value="<?echo $numberbreed;?>">
            <input type="hidden" name="numbercom" value="<?echo $numbercom;?>">
            <input type="hidden" name="source" value="<?echo $source;?>">
            <input type="hidden" name="ab" value="<?echo $ab;?>">

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