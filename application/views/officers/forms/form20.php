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
          
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>คำขอใบแทนใบ สำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์</h2><br><br>

            <?
              // check post if it is null value
              if(isset($form20['fname'])) 
                $fname = $form20['fname'];
              else 
                $fname = '';
              if(isset($form20['fbd'])) 
                $fbd = $form20['fbd'];
              else 
                $fbd = '';
              if(isset($form20['fnation'])) 
                $fnation = $form20['fnation'];
              else 
                $fnation = '';
              if(isset($form20['fpassport'])) 
                $fpassport = $form20['fpassport'];
              else 
                $fpassport = '';
              if(isset($form20['fissue'])) 
                $fissue = $form20['fissue'];
              else 
                $fissue = '';
              if(isset($form20['faddress'])) 
                $faddress = $form20['faddress'];
              else 
                $faddress = '';
              if(isset($form20['fstreet'])) 
                $fstreet = $form20['fstreet'];
              else 
                $fstreet = '';
              if(isset($form20['fprovince'])) 
                $fprovince = $form20['fprovince'];
              else 
                $fprovince = '';
              if(isset($form20['fzipcode'])) 
                $fzipcode = $form20['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form20['ftel'])) 
                $ftel = $form20['ftel'];
              else 
                $ftel = '';
              if(isset($form20['fphone'])) 
                $fphone = $form20['fphone'];
              else 
                $fphone = '';
              if(isset($form20['ffax'])) 
                $ffax = $form20['ffax'];
              else 
                $ffax = '';
              if(isset($form20['tname'])) 
                $tname = $form20['tname'];
              else 
                $tname = '';
              if(isset($form20['fid'])) 
                $fid = $form20['fid'];
              else 
                $fid = '';
              if(isset($form20['fname2'])) 
                $fname2 = $form20['fname2'];
              else 
                $fname2 = '';
              if(isset($form20['faddress2'])) 
                $faddress2 = $form20['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form20['fstreet2'])) 
                $fstreet2 = $form20['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form20['fprovince2'])) 
                $fprovince2 = $form20['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form20['fzipcode2'])) 
                $fzipcode2 = $form20['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form20['ftel2'])) 
                $ftel2 = $form20['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form20['fphone2'])) 
                $fphone2 = $form20['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form20['ffax2'])) 
                $ffax2 = $form20['ffax2'];
              else 
                $ffax2 = '';
              if(isset($form20['fname3'])) 
                $fname3 = $form20['fname3'];
              else 
                $fname3 = '';
              if(isset($form20['fcause'])) 
                $fcause = $form20['fcause'];
              else 
                $fcause = '';
              
            ?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>
            <? $fname = $form20['fname']; ?>
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $form20["fname"];?></span><br>

            <? $fbd = $form20['fbd']; ?>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $form20["fbd"];?></span><br>

            <? $fnation = $form20['fnation']; ?>
            <b>สัญชาติ: </b><span style="color:red"><?echo $form20["fnation"];?></span><br>

            <? $fpassport = $form20['fpassport']; ?>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b><span style="color:red"><?echo $form20["fpassport"];?></span><br>

            <? $fissue = $form20['fissue']; ?>
            <b>ออกให้ ณ: </b><span style="color:red"><?echo $form20["fissue"];?></span><br>

            <? $faddress = $form20['faddress']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form20["faddress"];?></span><br>

            <? $fstreet = $form20['fstreet']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form20["fstreet"];?></span><br>

            <? $fprovince = $form20['fprovince']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form20["fprovince"];?></span><br>

            <? $fzipcode = $form20['fzipcode']; ?>
            <b>ชรหัสไปรษณีย์: </b><span style="color:red"><?echo $form20["fzipcode"];?></span><br>

            <? $ftel = $form20['ftel']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form20["ftel"];?></span><br>

            <? $fphone = $form20['fphone']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form20["fphone"];?></span><br>

            <? $ffax = $form20['ffax']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form20["ffax"];?></span><br>

            <b>ขอรับใบแทนใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ </b><br>

            <? $tname = $form20['tname']; ?>
            <b>ชื่อ: </b><span style="color:red"><?echo $form20["fname"];?></span><br>

            <!-- <? $fid = $form20['fid']; ?> -->
            <!-- <b>ตามใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที่: </b><span style="color:red"><?echo $form20["fid"];?></span><br> -->

            <? $fname2 = $form20['fname2']; ?>
            <b>ในนามของ: </b><span style="color:red"><?echo $form20["fname2"];?></span><br>

            <? $fname3 = $form20['fname3']; ?>
            <b>โดยมี: </b><span style="color:red"><?echo $form20["fname3"];?></span><b>เป็นผู้ดำเนินกิจการ</b><br> 

            <? $faddress2 = $form20['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form20["faddress2"];?></span><br>

            <? $fstreet2 = $form20['fstreet2']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form20["fstreet2"];?></span><br>

            <? $fprovince2 = $form20['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form20["fprovince2"];?></span><br>

            <? $fzipcode2 = $form20['fzipcode2']; ?>
            <b>ชรหัสไปรษณีย์: </b><span style="color:red"><?echo $form20["fzipcode2"];?></span><br>

            <? $ftel2 = $form20['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form20["ftel2"];?></span><br>

            <? $fphone2 = $form20['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form20["fphone2"];?></span><br>

            <? $ffax2 = $form20['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form20["ffax2"];?></span><br>

            <? $fcause = $form20['fcause']; ?>
            <b>เหตุผลที่ขอรับใบแทน: </b><span style="color:red"><?echo $form20["fcause"];?></span><br>
        
            <br>
            <br>
            <br>
            <br>
            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form20['status']!='Verified'){?>
            <?php echo form_open("form20/update23");?>
            <textarea rows="5" name="comment"><?php echo $form20['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form20_Id" value="<?echo $form20["form20_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/23"); ?>" class="btn btn-large " >Go Back</a>
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
