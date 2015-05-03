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
            <h2>ใบคำขอต่ออายุใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลียงพืชอนุรักษ์</h2><br><br>

            <?
              // check post if it is null value
              if(isset($form19['fname'])) 
                $fname = $form19['fname'];
              else 
                $fname = '';
              if(isset($form19['fbd'])) 
                $fbd = $form19['fbd'];
              else 
                $fbd = '';
              if(isset($form19['fnation'])) 
                $fnation = $form19['fnation'];
              else 
                $fnation = '';
              if(isset($form19['fpassport'])) 
                $fpassport = $form19['fpassport'];
              else 
                $fpassport = '';
              if(isset($form19['fissue'])) 
                $fissue = $form19['fissue'];
              else 
                $fissue = '';
              if(isset($form19['faddress'])) 
                $faddress = $form19['faddress'];
              else 
                $faddress = '';
              if(isset($form19['fstreet'])) 
                $fstreet = $form19['fstreet'];
              else 
                $fstreet = '';
              if(isset($form19['fprovince'])) 
                $fprovince = $form19['fprovince'];
              else 
                $fprovince = '';
              if(isset($form19['fzipcode'])) 
                $fzipcode = $form19['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form19['ftel'])) 
                $ftel = $form19['ftel'];
              else 
                $ftel = '';
              if(isset($form19['fphone'])) 
                $fphone = $form19['fphone'];
              else 
                $fphone = '';
              if(isset($form19['ffax'])) 
                $ffax = $form19['ffax'];
              else 
                $ffax = '';
              if(isset($form19['fmail'])) 
                $fmail = $form19['fmail'];
              else 
                $fmail = '';
              if(isset($form19['fnumber'])) 
                $fnumber = $form19['fnumber'];
              else 
                $fnumber = '';
              if(isset($form19['fname2'])) 
                $fname2 = $form19['fname2'];
              else 
                $fname2 = '';
              if(isset($form19['frname'])) 
                $frname = $form19['frname'];
              else 
                $frname = '';
              if(isset($form19['faddress2'])) 
                $faddress2 = $form19['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form19['fstreet2'])) 
                $fstreet2 = $form19['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form19['fprovince2'])) 
                $fprovince2 = $form19['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form19['fzipcode2'])) 
                $fzipcode2 = $form19['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form19['ftel2'])) 
                $ftel2 = $form19['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form19['fphone2'])) 
                $fphone2 = $form19['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form19['ffax2'])) 
                $ffax2 = $form19['ffax2'];
              else 
                $ffax2 = '';
              if(isset($form19['fname3'])) 
                $fname3 = $form19['fname3'];
              else 
                $fname3 = '';
              if(isset($form19['faddress3'])) 
                $faddress3 = $form19['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form19['fstreet3'])) 
                $fstreet3 = $form19['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form19['fprovince3'])) 
                $fprovince3 = $form19['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form19['fzipcode3'])) 
                $fzipcode3 = $form19['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form19['ftel3'])) 
                $ftel3 = $form19['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form19['fphone3'])) 
                $fphone3 = $form19['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form19['ffax3'])) 
                $ffax3 = $form19['ffax3'];
              else 
                $ffax3 = '';
            ?>

            <div style="color:red"><h1>โปรดตรวจสอบความถูกต้องอีกครั้ง</h1></div>

            <? $fname = $form19['fname']; ?>
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $form19["fname"];?></span><br>

            <? $fbd = $form19['fbd']; ?>
            <b>วันเดือนปีเกิด: </b><span style="color:red"><?echo $form19["fbd"];?></span><br>

            <? $fnation = $form19['fnation']; ?>
            <b>สัญชาติ: </b><span style="color:red"><?echo $form19["fnation"];?></span><br>

            <? $fpassport = $form19['fpassport']; ?>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b><span style="color:red"><?echo $form19["fpassport"];?></span><br>

            <? $fissue = $form19['fissue']; ?>
            <b>ออกให้ ณ: </b><span style="color:red"><?echo $form19["fissue"];?></span><br>

            <? $faddress = $form19['faddress']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form19["faddress"];?></span><br>

            <? $fstreet = $form19['fstreet']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form19["fstreet"];?></span><br>

            <? $fprovince = $form19['fprovince']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form19["fprovince"];?></span><br>

            <? $fzipcode = $form19['fzipcode']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form19["fzipcode"];?></span><br>

            <? $ftel = $form19['ftel']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form19["ftel"];?></span><br>

            <? $fphone = $form19['fphone']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form19["fphone"];?></span><br>

            <? $ffax = $form19['ffax']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form19["ffax"];?></span><br>

            <? $fmail = $form19['fmail']; ?>
            <b>อีเลคทรอนิคเมล์ Email: </b><span style="color:red"><?echo $form19["fmail"];?></span>

            <br><br>
            <br>

            <? $fnumber = $form19['fnumber']; ?>
            <b>ขอต่ออายุใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ ทะเบียนเลขที่: </b><span style="color:red"><?echo $form19["fnumber"];?></span><br>

            <? $fname2 = $form19['fname2']; ?>
            <b>ในนามของ: </b><span style="color:red"><?echo $form19["fname2"];?></span><br>

            <? $frname = $form19['frname']; ?>
            <b>โดยมี: </b><span style="color:red"><?echo $form19["frname"];?></span> เป็นผู้ดำเนินกิจการ<br>

            <? $faddress2 = $form19['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form19["faddress2"];?></span><br>

            <? $fstreet2 = $form19['fstreet2']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form19["fstreet2"];?></span><br>

            <? $fprovince2 = $form19['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form19["fprovince2"];?></span><br>

            <? $fzipcode2 = $form19['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form19["fzipcode2"];?></span><br>

            <? $ftel2 = $form19['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form19["ftel2"];?></span><br>

            <? $fphone2 = $form19['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form19["fphone2"];?></span>

            <? $ffax2 = $form19['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form19["ffax2"];?></span><br>

            <br>

            <? $fname3 = $form19['fname3']; ?>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:red"><?echo $form19["fname3"];?></span><br>

            <? $faddress3 = $form19['faddress3']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form19["faddress3"];?></span><br>

            <? $fstreet3 = $form19['fstreet3']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form19["fstreet3"];?></span><br>

            <? $fprovince3 = $form19['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form19["fprovince3"];?></span><br>

            <? $fzipcode3 = $form19['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form19["fzipcode3"];?></span><br>

            <br>

            <? $ftel3 = $form19['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form19["ftel3"];?></span><br>

            <? $fphone3 = $form19['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form19["fphone3"];?></span><br>

            <? $ffax3 = $form19['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form19["ffax3"];?></span><br>
            <br>

            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form19['status']!='Verified'){?>
            <?php echo form_open("form19/update22");?>
            <textarea rows="5" name="comment"><?php echo $form19['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form19_Id" value="<?echo $form19["form19_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/22"); ?>" class="btn btn-large " >Go Back</a>
          </td>
          </tr>
          </table>
          </div>


            <br>
            <br>
            <br>
            <br>
            
          
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
