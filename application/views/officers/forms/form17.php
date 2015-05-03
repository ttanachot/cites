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
              <li ><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
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
        </div>
        <div class="span9">
          <div class="well">
            <h2>บัญชีแสดงจำนวนพืชอนุรักษ์ที่เปลี่ยนแปลงในรอบปีปฏิทิน</h2><br><br>


              <?
              // check post if it is null value
              if(isset($form17['fname'])) 
                $fname = $form17['fname'];
              else 
                $fname = '';
              if(isset($form17['fdate'])) 
                $fdate = $form17['fdate'];
              else 
                $fdate = '';
              if(isset($form17['fdate2'])) 
                $fdate2 = $form17['fdate2'];
              else 
                $fdate2 = '';
              if(isset($form17['fyear'])) 
                $fyear = $form17['fyear'];
              else 
                $fyear = '';
              if(isset($form17['plantname'])) 
                $plantname = $form17['plantname'];
              else 
                $plantname = '';
              if(isset($form17['sname'])) 
                $sname = $form17['sname'];
              else 
                $sname = '';
              if(isset($form17['numberbreed'])) 
                $numberbreed = $form17['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form17['numbercom'])) 
                $numbercom = $form17['numbercom'];
              else 
                $numbercom = '';
              if(isset($form17['source'])) 
                $source = $form17['source'];
              else 
                $source = '';
              if(isset($form17['ab'])) 
                $ab = $form17['ab'];
              else 
                $ab = '';
              if(isset($form17['plantname2'])) 
                $plantname2 = $form17['plantname2'];
              else 
                $plantname2 = '';
              if(isset($form17['sname2'])) 
                $sname2 = $form17['sname2'];
              else 
                $sname2 = '';
              if(isset($form17['numberbreed2'])) 
                $numberbreed2 = $form17['numberbreed2'];
              else 
                $numberbreed2 = '';
              if(isset($form17['numbercom2'])) 
                $numbercom2 = $form17['numbercom2'];
              else 
                $numbercom2 = '';
              if(isset($form17['source2'])) 
                $source2 = $form17['source2'];
              else 
                $source2 = '';
              if(isset($form17['ab2'])) 
                $ab2 = $form17['ab2'];
              else 
                $ab2 = '';
              if(isset($form17['plantname3'])) 
                $plantname3 = $form17['plantname3'];
              else 
                $plantname3 = '';
              if(isset($form17['sname3'])) 
                $sname3 = $form17['sname3'];
              else 
                $sname3 = '';
              if(isset($form17['numberbreed3'])) 
                $numberbreed3 = $form17['numberbreed3'];
              else 
                $numberbreed3 = '';
              if(isset($form17['numbercom3'])) 
                $numbercom3 = $form17['numbercom3'];
              else 
                $numbercom3 = '';
              if(isset($form17['source3'])) 
                $source3 = $form17['source3'];
              else 
                $source3 = '';
              if(isset($form17['ab3'])) 
                $ab3 = $form17['ab3'];
              else 
                $ab3 = '';
              
              ?>

               



            <b>ใบสำคัญการขึ้นทะเบียนสถานทีเพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $form17["fname"];?></span><br>

            <b>ลงวันที: </b><span style="color:red"><?echo $form17["fdate"];?></span><br>

            <b>ตั้งแต่: </b><span style="color:red"><?echo $form17["fdate2"];?></span><br>

            <b>ถึง 31 ธันวาคม พ.ศ.: </b>
            <span style="color:red"><?echo $form17["fyear"];?></span><br>
            <br>
            <b>ข้อ1. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่1 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $form17["plantname"];?></span><br>

            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $form17["sname"];?></span><br>

            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $form17["numberbreed"];?></span><br>

            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $form17["numbercom"];?></span><br>

            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $form17["source"];?></span><br>

            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $form17["ab"];?></span><br>
            <br>
            <b>ข้อ2. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่2 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $form17["plantname2"];?></span><br>

            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $form17["sname2"];?></span><br>

            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $form17["numberbreed2"];?></span><br>

            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $form17["numbercom2"];?></span><br>

            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $form17["source2"];?></span><br>

            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $form17["ab2"];?></span><br>
            <br>
            <b>ข้อ3. พืชอนุรักษ์ตามวงศ์และชนิดที่ระบุไว้ในบัญชีที่3 </b><br>
            <b>ชื่อพืชอนุรักษ์: </b><span style="color:red"><?echo $form17["plantname3"];?></span><br>

            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $form17["sname3"];?></span><br>

            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $form17["numberbreed3"];?></span><br>

            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $form17["numbercom3"];?></span><br>

            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $form17["source3"];?></span><br>

            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $form17["ab3"];?></span><br>
            <br>
            <br>
            <br>

             <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form17['status']!='Verified'){?>
            <?php echo form_open("form17/update24");?>
            <textarea rows="5" name="comment"><?php echo $form17['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form17_Id" value="<?echo $form17["form17_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/24"); ?>" class="btn btn-large " >Go Back</a>
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