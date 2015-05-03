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
            <h2>คำขอแก้ไขรายการใบสำคัญการขึ้นทะเบียน เพิ่ม/ลด สถานที่เพาะเลี้ยงพืชอนุรักษ์</h2><br><br>

            <?
            if(isset($form21['fname'])) 
                $fname = $form21['fname'];
              else 
                $fname = '';
              if(isset($form21['fbd'])) 
                $fbd = $form21['fbd'];
              else 
                $fbd = '';
              if(isset($form21['fnation'])) 
                $fnation = $form21['fnation'];
              else 
                $fnation = '';
              if(isset($form21['fpassport'])) 
                $fpassport = $form21['fpassport'];
              else 
                $fpassport = '';
              if(isset($form21['fissue'])) 
                $fissue = $form21['fissue'];
              else 
                $fissue = '';
              if(isset($form21['faddress'])) 
                $faddress = $form21['faddress'];
              else 
                $faddress = '';
              if(isset($form21['fstreet'])) 
                $fstreet = $form21['fstreet'];
              else 
                $fstreet = '';
              if(isset($form21['fprovince'])) 
                $fprovince = $form21['fprovince'];
              else 
                $fprovince = '';
              if(isset($form21['fzipcode'])) 
                $fzipcode = $form21['fzipcode'];
              else 
                $fzipcode = '';
              if(isset($form21['ftel'])) 
                $ftel = $form21['ftel'];
              else 
                $ftel = '';
              if(isset($form21['fphone'])) 
                $fphone = $form21['fphone'];
              else 
                $fphone = '';
              if(isset($form21['ffax'])) 
                $ffax = $form21['ffax'];
              else 
                $ffax = '';
              //
              if(isset($form21['fname2'])) 
                $fname2 = $form21['fname2'];
              else 
                $fname2 = '';
              if(isset($form21['faddress2'])) 
                $faddress2 = $form21['faddress2'];
              else 
                $faddress2 = '';
              if(isset($form21['fstreet2'])) 
                $fstreet2 = $form21['fstreet2'];
              else 
                $fstreet2 = '';
              if(isset($form21['fprovince2'])) 
                $fprovince2 = $form21['fprovince2'];
              else 
                $fprovince2 = '';
              if(isset($form21['fzipcode2'])) 
                $fzipcode2 = $form21['fzipcode2'];
              else 
                $fzipcode2 = '';
              if(isset($form21['ftel2'])) 
                $ftel2 = $form21['ftel2'];
              else 
                $ftel2 = '';
              if(isset($form21['fphone2'])) 
                $fphone2 = $form21['fphone2'];
              else 
                $fphone2 = '';
              if(isset($form21['ffax2'])) 
                $ffax2 = $form21['ffax2'];
              else 
                $ffax2 = '';
              //
              if(isset($form21['fregisNum'])) 
                $fregisNum = $form21['fregisNum'];
              else 
                $fregisNum = '';
              //
              if(isset($form21['fname3'])) 
                $fname3 = $form21['fname3'];
              else 
                $fname3 = '';
              if(isset($form21['faddress3'])) 
                $faddress3 = $form21['faddress3'];
              else 
                $faddress3 = '';
              if(isset($form21['fstreet3'])) 
                $fstreet3 = $form21['fstreet3'];
              else 
                $fstreet3 = '';
              if(isset($form21['fprovince3'])) 
                $fprovince3 = $form21['fprovince3'];
              else 
                $fprovince3 = '';
              if(isset($form21['fzipcode3'])) 
                $fzipcode3 = $form21['fzipcode3'];
              else 
                $fzipcode3 = '';
              if(isset($form21['ftel3'])) 
                $ftel3 = $form21['ftel3'];
              else 
                $ftel3 = '';
              if(isset($form21['fphone3'])) 
                $fphone3 = $form21['fphone3'];
              else 
                $fphone3 = '';
              if(isset($form21['ffax3'])) 
                $ffax3 = $form21['ffax3'];
              else 
                $ffax3 = '';
              //
              if(isset($form21['plantname'])) 
                $plantname = $form21['plantname'];
              else 
                $plantname = '';
              if(isset($form21['sname'])) 
                $sname = $form21['sname'];
              else 
                $sname = '';
              if(isset($form21['numberbreed'])) 
                $numberbreed = $form21['numberbreed'];
              else 
                $numberbreed = '';
              if(isset($form21['numbercom'])) 
                $numbercom = $form21['numbercom'];
              else 
                $numbercom = '';
              if(isset($form21['source'])) 
                $source = $form21['source'];
              else 
                $source = '';
              if(isset($form21['ab'])) 
                $ab = $form21['ab'];
              else 
                $ab = '';
              //
              if(isset($form21['fimnum'])) 
                $fimnum = $form21['fimnum'];
              else 
                $fimnum = '';
              if(isset($form21['fformdate'])) 
                $fformdate = $form21['fformdate'];
              else 
                $fformdate = '';
              if(isset($form21['fformdateend'])) 
                $fformdateend = $form21['fformdateend'];
              else 
                $fformdateend = '';

            ?>    



            <? $fname = $form21['fname']; ?>
            <b>ข้าพเจ้า: </b><span style="color:red"><?echo $form21["fname"];?></span><br>

            <? $fbd= $form21['fbd']; ?>
            <b>อายุ: </b><span style="color:red"><?echo $form21["fbd"];?></span><br>

            <? $fnation = $form21['fnation']; ?>
            <b>สัญชาติ: </b><span style="color:red"><?echo $form21["fnation"];?></span><br>

            <? $fpassport = $form21['fpassport']; ?>
            <b>บัตรประจำตัวประชาชน / ใบสำคัญประจำตัวคนต่างด้าว เลขที่: </b>
            <span style="color:red"><?echo $form21["fpassport"];?></span><br>

            <? $fissue = $form21['fissue']; ?>
            <b>ออกให้ ณ: </b><span style="color:red"><?echo $form21["fissue"];?></span><br>

            <? $faddress = $form21['faddress']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form21["faddress"];?></span><br>

            <? $fstreet = $form21['fstreet']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form21["fstreet"];?></span><br>

            <? $fprovince = $form21['fprovince']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form21["fprovince"];?></span><br>

            <? $fzipcode = $form21['fzipcode']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form21["fzipcode"];?></span><br>

            <? $ftel = $form21['ftel']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form21["ftel"];?></span><br>

            <? $fphone = $form21['fphone']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form21["fphone"];?></span><br>

            <? $ffax = $form21['ffax']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form21["ffax"];?></span><br>
            <br>

            <? $fname2 = $form21['fname2']; ?>
            <b>ในนามของ: </b><span style="color:red"><?echo $form21["fname2"];?></span><br>
            
            <? $faddress2 = $form21['faddress2']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form21["faddress2"];?></span><br>

            <? $fstreet2 = $form21['fstreet2']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form21["fstreet2"];?></span><br>

            <? $fprovince2 = $form21['fprovince2']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form21["fprovince2"];?></span><br>

            <? $fzipcode2 = $form21['fzipcode2']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form21["fzipcode2"];?></span><br>

            <? $ftel2 = $form21['ftel2']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form21["ftel2"];?></span><br>

            <? $fphone2 = $form21['fphone2']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form21["fphone2"];?></span><br>

            <? $ffax2 = $form21['ffax2']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form21["ffax2"];?></span><br>

            <? $fregisNum = $form21['fregisNum']; ?>
            <b>ใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์เลขทะเบียนที: </b><span style="color:red"><?echo $form21["fregisNum"];?></span><br>
            <br>
            <br>
            <input type="checkbox" name="ffix" value="fix">ขอแก้ไขรายการใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ดังกล่าวดังนี้<br>
            <input type="text" name="ffixtext"><br>
            <br><br>
            <input type="checkbox" name="fincordec" value="incordec">เพิ่ม/ลด สถานที่เพาะเลี้ยงพืชอนุรักษ์ ดังนี้<br>
            <br>
            <br>
            <? $fname3 = $form21['fname3']; ?>
            <b>สถานที่เพาะเลี้ยงอนุรักษ์ ชื่อ: </b><span style="color:red"><?echo $form21["fname3"];?></span><br>

            <? $faddress3 = $form21['faddress3']; ?>
            <b>ที่อยู่: </b><span style="color:red"><?echo $form21["faddress3"];?></span><br>

            <? $fstreet3 = $form21['fstreet3']; ?>
            <b>ถนน: </b><span style="color:red"><?echo $form21["fstreet3"];?></span><br>

            <? $fprovince3 = $form21['fprovince3']; ?>
            <b>จังหวัด: </b><span style="color:red"><?echo $form21["fprovince3"];?></span><br>

            <? $fzipcode3 = $form21['fzipcode3']; ?>
            <b>รหัสไปรษณีย์: </b><span style="color:red"><?echo $form21["fzipcode3"];?></span><br>

            <br>
            <? $ftel3 = $form21['ftel3']; ?>
            <b>โทรศัพท์: </b><span style="color:red"><?echo $form21["ftel3"];?></span><br>

            <? $fphone3 = $form21['fphone3']; ?>
            <b>โทรศัพท์เคลื่อนที่: </b><span style="color:red"><?echo $form21["fphone3"];?></span><br>

            <? $ffax3 = $form21['ffax3']; ?>
            <b>โทรสาร: </b><span style="color:red"><?echo $form21["ffax3"];?></span><br>

            <br>
            <br>

            <? $plantname = $form21['plantname']; ?>
            <b>ชื่อพืช: </b><span style="color:red"><?echo $form21["plantname"];?></span><br>

            <? $sname = $form21['sname']; ?>
            <b>ชื่อวิทยาศาสตร์: </b><span style="color:red"><?echo $form21["sname"];?></span><br>

            <? $numberbreed = $form21['numberbreed']; ?>
            <b>จำนวน พ่อ-แม่ พันธุ์: </b><span style="color:red"><?echo $form21["numberbreed"];?></span><br>

            <? $numbercom = $form21['numbercom']; ?>
            <b>จำนวนเพื่อการค้า: </b><span style="color:red"><?echo $form21["numbercom"];?></span><br>

            <? $source = $form21['source']; ?>
            <b>แหล่งที่มา(ที่ถูกต้องตามกฎหมาย): </b><span style="color:red"><?echo $form21["source"];?></span><br>

            <? $ab = $form21['ab']; ?>
            <b>วิธีการขยายพันธุ์เทียม: </b><span style="color:red"><?echo $form21["ab"];?></span><br>
            <br>
            <br>
            <? $fimnum = $form21['fimnum']; ?>
            <b>ใบสำคัญเลขที่: </b><span style="color:red"><?echo $form21["fimnum"];?></span><br>

            <? $fformdate= $form21['fformdate']; ?>
            <b>ออกให้เมื่อวันที่: </b><span style="color:red"><?echo $form21["fformdate"];?></span><br>

            <? $fformenddate = $form21['fformdateend']; ?>
            <b>สิ้นอายุในวันที่: </b><span style="color:red"><?echo $form21["fformdateend"];?></span><br>
            <br>
            <br>

            <b>หมายเหตุ</b>
            <br>
            <br>
            <?if($form21['status']!='Verified'){?>
            <?php echo form_open("form21/update21");?>
            <textarea rows="5" name="comment"><?php echo $form21['comment']; ?></textarea>
            <br>
            <br>
            <table>
            <tr>
            <td width="30%">
              <input type="hidden" name="form21_Id" value="<?echo $form21["form21_Id"];?>">
              <input type="submit" class="btn btn-large btn-success" name="stat" value="Verified">
            </td>
            <td width="30%">
              <input type="submit" class="btn btn-large btn-danger" name="stat" value="Denied">
            </form>
          </td>
          <?}?>
            <td width="30%">
              <a href="<? echo site_url("officers/status/21"); ?>" class="btn btn-large " >Go Back</a>
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




