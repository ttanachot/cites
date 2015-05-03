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
      textarea{
          width:50%;
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
              <li><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li class="active"><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li><a href="<? echo site_url("pages/trans6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
        </div>
        <div class="span9">
          <div class="well">
            <h2>แบบคำขอรับหนังสืออนุญาตนำเข้า ส่งออก นำผ่าน พืชอนุรักษ์หรือซากพืชอนุรักษ์ ตามพระราชบัญญัติพันธุ์พืช พ.ศ. 2518 (พ.พ.13)</h2><br><br>


              <?
              // check post if it is null value
              if(isset($form13['fplace'])) 
                $fplace = $form13['fplace'];
              else 
                $fplace = '';
              if(isset($form13['fdate'])) 
                $fdate = $form13['fdate'];
              else 
                $fdate = '';
              if(isset($form13['fname'])) 
                $fname = $form13['fname'];
              else 
                $fname = '';
              if(isset($form13['fbd'])) 
                $fbd = $form13['fbd'];
              else 
                $fbd = '';
              if(isset($form13['fnation'])) 
                $fnation = $form13['fnation'];
              else 
                $fnation = '';
              if(isset($form13['faddress'])) 
                $faddress = $form13['faddress'];
              else 
                $faddress = '';
              if(isset($form13['fname2'])) 
                $fname2 = $form13['fname2'];
              else 
                $fname2 = '';
              if(isset($form13['fname3'])) 
                $fname3 = $form13['fname3'];
              else 
                $fname3 = '';
              if(isset($form13['fnurse'])) 
                $fnurse = $form13['fnurse'];
              else 
                $fnurse = '';
              if(isset($form13['fnurseno'])) 
                $fnurseno = $form13['fnurseno'];
              else 
                $fnurseno = '';
              if(isset($form13['fvalue'])) 
                $fvalue = $form13['fvalue'];
              else 
                $fvalue = '';
              if(isset($form13['ftrans'])) 
                $ftrans = $form13['ftrans'];
              else 
                $ftrans = '';
              if(isset($form13['fentry'])) 
                $fentry = $form13['fentry'];
              else 
                $fentry = '';
              if(isset($form13['fdel'])) 
                $fdel = $form13['fdel'];
              else 
                $fdel = '';
              if(isset($form13['ffax2'])) 
                $ffax2 = $form13['ffax2'];
              else 
                $ffax2 = '';
              
              ?>
            

              <h3><b>เลขที่คำขอ: </b><span style="color:blue"><?echo $form13["form13_Id"];?></span></h3><br>
              <b>เขียนที่ (Place): </b><span style="color:red"><?echo $form13["fplace"];?></span><br>
            <b>วันที่ (Date): </b><span style="color:red"><?echo $form13["fdate"];?></span><br>
            <b>ข้าพเจ้า (Mr./Mrs./Miss): </b><span style="color:red"><?echo $form13["fname"];?></span><br>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $form13["fbd"];?></span><br>
            <b>สัญชาติ (Nationality): </b><span style="color:red"><?echo $form13["fnation"];?></span><br>
            <b>ที่อยู่ (Address): </b><span style="color:red"><?echo $form13["faddress"];?></span><br>

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

            <b>ชื่อที่อยู่ผู้ส่ง (Name & Address of Permitee): </b><span style="color:red"><?echo $form13["fname2"];?></span><br>

            <b>ชื่อที่อยู่ผู้รับ (Name & Address of Consignee): </b><span style="color:red"><?echo $form13["fname3"];?></span><br>

            <b>ชื่อสถานที่เพาะเลี้ยงอนุรักษ์ (Name of Nursery Registration):</b><span style="color:red"><?echo $form13["fnurse"];?></span><br>

            <b>เลขทะเบียน (Registration No.):</b><span style="color:red"><?echo $form13["fnurseno"];?></span><br>

            <b>มูลค่า (Values):</b><span style="color:red"><?echo $form13["fvalue"];?></span><br>

            <b>โดยพาหนะ (Means of Conveyance):</b><span style="color:red"><?echo $form13["ftrans"];?></span><br>

            <b>นำเข้าประเทศปลายทาง (Point of Entry):</b><span style="color:red"><?echo $form13["fentry"];?></span><br>

            <b>ประมาณวันที่ (Date of delivery shipment):</b><span style="color:red"><?echo $form13["fdel"];?></span><br>

             <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form13['status']!='Verified'){?>
            <?php echo form_open("form13/update3/".$request);?>
            <textarea rows="5" name="comment"><?php echo $form13['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form13_Id" value="<?echo $form13["form13_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/".$request); ?>" class="btn btn-large " >Go Back</a>
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
