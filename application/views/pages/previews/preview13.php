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
              <li><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li class ="active"><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
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
            <h2>แบบคำขอรับหนังสืออนุญาตนำเข้า ส่งออก นำผ่าน พืชอนุรักษ์หรือซากพืชอนุรักษ์ ตามพระราชบัญญัติพันธุ์พืช พ.ศ. 2518 (พ.พ.13)</h2><br><br>
            <?php echo form_open("pages/save13");?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>

            <?
              if($request == 41){
               $form16 = $_POST['form16']; ?>
                <input type="hidden" name="form16" value="<?echo $form16;?>">
                <input type="hidden" name="req" value="<?echo $request;?>">
                <b>ยื่นพร้อมพพ. เลขที่: </b><span style="color:red"><?echo $_POST["form16"];?></span><br>
            <?}?>

            <? $fplace = $_POST['fplace']; ?>
            <b>เขียนที่ (Place): </b><span style="color:red"><?echo $_POST["fplace"];?></span><br>

            <? $fdate = $_POST['fdate']; ?>
            <b>วันที่ (Date): </b><span style="color:red"><?echo $_POST["fdate"];?></span><br>

            <? $fname = $_POST['fname']; ?>
            <b>ข้าพเจ้า (Mr./Mrs./Miss): </b><span style="color:red"><?echo $_POST["fname"];?></span><br>

            <? $fbd = $_POST['fbd']; ?>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $_POST["fbd"];?></span><br>

            <? $fnation = $_POST['fnation']; ?>
            <b>สัญชาติ (Nationality): </b><span style="color:red"><?echo $_POST["fnation"];?></span><br>

            <? $faddress = $_POST['faddress']; ?>
            <b>ที่อยู่ (Address): </b><span style="color:red"><?echo $_POST["faddress"];?></span><br>

            <b>ขอรับหนังสืออนุญาต (เขียนเครื่องหมาย / ในช่อง[ ] ตามประเภทหนังสืออนุญาตที่ขอ)</b>
            <br>
            <b>request for permit (please check at appropriate boxes)</b>
            <br><br>
            <b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option1"> หนังสืออนุญาตนำเข้า (Import permit) <input type="radio" name="option1"> หนังสืออนุญาตส่งออก (Export permit) <input type="radio" name="option1">หนังสืออนุญาตนำผ่าน (Re-export permit)</b>
            <br><br>
            <b>โดยมีวัตถุประสงค์ Purpose of the Transaction</b><br>
            <b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option2"> เพื่อการค้า (Commercial purpose)</b><br>
            <b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="option2"> อื่นๆ (โปรดระบุ) (Other please specific purpose)</b><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fother">
            <br>
            <b>สำหรับพืชอนุรักษ์หรือซากพืชอนุรักษ์ ดังรายการด้านหลัง (for live or dead conserved plants as listed overleaf)</b>
            <br>
            <br>

            <? $fname2 = $_POST['fname2']; ?>
            <b>ชื่อที่อยู่ผู้ส่ง (Name & Address of Permitee): </b><span style="color:red"><?echo $_POST["fname2"];?></span><br>

            <? $fname3 = $_POST['fname3']; ?>
            <b>ชื่อที่อยู่ผู้รับ (Name & Address of Consignee): </b><span style="color:red"><?echo $_POST["fname3"];?></span><br>

            <? $fnurse = $_POST['fnurse']; ?>
            <b>ชื่อสถานที่เพาะเลี้ยงอนุรักษ์ (Name of Nursery Registration):</b><span style="color:red"><?echo $_POST["fnurse"];?></span><br>

            <? $fnurseno = $_POST['fnurseno']; ?>
            <b>เลขทะเบียน (Registration No.):</b><span style="color:red"><?echo $_POST["fnurseno"];?></span><br>

            <? $fvalue = $_POST['fvalue']; ?>
            <b>มูลค่า (Values):</b><span style="color:red"><?echo $_POST["fvalue"];?></span><br>

            <? $ftrans = $_POST['ftrans']; ?>
            <b>โดยพาหนะ (Means of Conveyance):</b><span style="color:red"><?echo $_POST["ftrans"];?></span><br>

            <? $fentry = $_POST['fentry']; ?>
            <b>นำเข้าประเทศปลายทาง (Point of Entry):</b><span style="color:red"><?echo $_POST["fentry"];?></span><br>

            <? $fdel = $_POST['fdel']; ?>
            <b>ประมาณวันที่ (Date of delivery shipment):</b><span style="color:red"><?echo $_POST["fdel"];?></span><br>


            <input type="hidden" name="fplace" value="<?echo $fplace;?>">
            <input type="hidden" name="fdate" value="<?echo $fdate;?>">
            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fbd" value="<?echo $fbd;?>">
            <input type="hidden" name="fnation" value="<?echo $fnation;?>">
            <input type="hidden" name="faddress" value="<?echo $faddress;?>">
            <input type="hidden" name="fname2" value="<?echo $fname2;?>">
            <input type="hidden" name="fname3" value="<?echo $fname3;?>">
            <input type="hidden" name="fnurse" value="<?echo $fnurse;?>">
            <input type="hidden" name="fnurseno" value="<?echo $fnurseno;?>">
            <input type="hidden" name="fvalue" value="<?echo $fvalue;?>">
            <input type="hidden" name="ftrans" value="<?echo $ftrans;?>">
            <input type="hidden" name="fentry" value="<?echo $fentry;?>">
            <input type="hidden" name="fdel" value="<?echo $fdel;?>">
            <input type="hidden" name="request" value="<?echo $_POST['request'];?>">
            <table>
            <tr>
            <td>
            <button type="submit" class="btn btn-large btn-primary">Confirm</button>
            <?php echo form_close(); ?>
            </td>

            <td>
            <?php $segment = 'pages/form13/'.$_POST['request'];
            echo form_open($segment); ?>
            <input type="hidden" name="fplace" value="<?echo $fplace;?>">
            <input type="hidden" name="fdate" value="<?echo $fdate;?>">
            <input type="hidden" name="fname" value="<?echo $fname;?>">
            <input type="hidden" name="fbd" value="<?echo $fbd;?>">
            <input type="hidden" name="fnation" value="<?echo $fnation;?>">
            <input type="hidden" name="faddress" value="<?echo $faddress;?>">
            <input type="hidden" name="fname2" value="<?echo $fname2;?>">
            <input type="hidden" name="fname3" value="<?echo $fname3;?>">
            <input type="hidden" name="fnurse" value="<?echo $fnurse;?>">
            <input type="hidden" name="fnurseno" value="<?echo $fnurseno;?>">
            <input type="hidden" name="fvalue" value="<?echo $fvalue;?>">
            <input type="hidden" name="ftrans" value="<?echo $ftrans;?>">
            <input type="hidden" name="fentry" value="<?echo $fentry;?>">
            <input type="hidden" name="fdel" value="<?echo $fdel;?>">

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
