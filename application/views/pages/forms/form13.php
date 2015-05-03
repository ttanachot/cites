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
              <li class ="<?= ($request == 31 || $request == 32 || $request == 33) ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li class ="<?= ($request == 41) ? "active" : "nonactive" ; ?>"><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
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
            
            <?php echo form_open("pages/preview13");?>

            <?
              // check post if it is null value
              if(isset($_POST['fplace'])) 
                $fplace = $_POST['fplace'];
              else 
                $fplace = '';
              if(isset($_POST['fdate'])) 
                $fdate = $_POST['fdate'];
              else 
                $fdate = '';
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
              if(isset($_POST['faddress'])) 
                $faddress = $_POST['faddress'];
              else 
                $faddress = '';
              if(isset($_POST['fname2'])) 
                $fname2 = $_POST['fname2'];
              else 
                $fname2 = '';
              if(isset($_POST['fname3'])) 
                $fname3 = $_POST['fname3'];
              else 
                $fname3 = '';
              if(isset($_POST['fnurse'])) 
                $fnurse = $_POST['fnurse'];
              else 
                $fnurse = '';
              if(isset($_POST['fnurseno'])) 
                $fnurseno = $_POST['fnurseno'];
              else 
                $fnurseno = '';
              if(isset($_POST['fvalue'])) 
                $fvalue = $_POST['fvalue'];
              else 
                $fvalue = '';
              if(isset($_POST['ftrans'])) 
                $ftrans = $_POST['ftrans'];
              else 
                $ftrans = '';
              if(isset($_POST['fentry'])) 
                $fentry = $_POST['fentry'];
              else 
                $fentry = '';
              if(isset($_POST['fdel'])) 
                $fdel = $_POST['fdel'];
              else 
                $fdel = '';

            ?>
            <input type="hidden" name="request" value="<?echo $request;?>">
            <? if($request == 41){ ?>
            <select name="form16">
              <? foreach ($form16 as $key) {?>
                <option value="<? echo $key['form16_Id'] ?>" ><?echo $key['fname'];?></option>
              <?}?>
            </select><br>
            <?}?>
            <b>เขียนที่ (Place): </b><input class="input-xlarge" type="text" name="fplace" value="<?echo $fplace;?>"><br>
            <b>วันที่ (Date): </b><input type="text" name="fdate" value="<?echo $fdate;?>"><br>
            <b>ข้าพเจ้า (Mr./Mrs./Miss): </b><input class="input-xlarge" type="text" name="fname" value="<?echo $fname;?>"><br>
            <b>วันเดือนปีเกิด: </b><input type="text" name="fbd" value="<?echo $fbd;?>"><b>ปี</b><br> 
            <b>สัญชาติ (Nationality): </b><input type="text" name="fnation" value="<?echo $fnation;?>"><br>
            <b>ที่อยู่ (Address): </b><input class="input-xxlarge" type="text" name="faddress" value="<?echo $faddress;?>"><br>
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
            <b>ชื่อที่อยู่ผู้ส่ง (Name & Address of Permitee): </b><input type="text" name="fname2" value="<?echo $fname2;?>"><br>
            <b>ชื่อที่อยู่ผู้รับ (Name & Address of Consignee): </b><input type="text" name="fname3" value="<?echo $fname3;?>"><br>
            <b>ชื่อสถานที่เพาะเลี้ยงอนุรักษ์ (Name of Nursery Registration):<input class="input-xlarge" type="text" name="fnurse" value="<?echo $fnurse;?>"> <br>เลขทะเบียน (Registration No.):<input class="input-xlarge" type="text" name="fnurseno" value="<?echo $fnurseno;?>"></b><br>
            <b>มูลค่า (Values):<input class="input-xlarge" type="text" name="fvalue" value="<?echo $fvalue;?>"> (บาท) <br>โดยพาหนะ (Means of Conveyance):<input class="input-xlarge" type="text" name="ftrans" value="<?echo $ftrans;?>"></b><br>
            <b>นำเข้าประเทศปลายทาง (Point of Entry):<input class="input-xlarge" type="text" name="fentry" value="<?echo $fentry;?>"> <br>ประมาณวันที่ (Date of delivery shipment):<input class="input-xlarge" type="text" name="fdel" value="<?echo $fdel;?>"></b>
            <input type="hidden" name="req" value="<?echo $request;?>">
            <br>
            <button type="submit" class="btn btn-large btn-primary">Submit</button>
            <button type="cancel" class="btn btn-large">Cancel</button>
            </form>
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
