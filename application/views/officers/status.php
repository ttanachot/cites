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
              <li><a href="pages/about">About</a></li>
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
              <li class="nav-header"><font ><h2>FORM & REQUEST</h2></font></li>
              <li class='<?=($activer == 1) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 2) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 3) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li class='<?=($activer == 4) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 5) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 6) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/trans6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
       
         
          
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>คำขอล่าสุด</h2>
            <br>
            <table class="table table-striped table-bordered">
              <tr class = "warning">
                <th>
                  เลขที่คำขอ
                </th>
                <th>
                  ผู้ยื่นคำร้อง
                </th>
                <th>
                  สถานะ
                </th>
                <th>
                ตรวจสอบคำร้องขอ
                </th>
                <th>
                เอกสารรับรอง
                </th>
              </tr>
              <?php
              foreach ($checks as $check) :
              ?>
              <tr class="info">
                <td>
                  <?php echo $check[$formNameId] ?>
                </td>
                <td>
                  <?php echo $check['fname'] ?>
                </td>
                <td>
                    <?if($check['status'] == 'Verified'){
                      echo '<span style="color:green">'.$check['status'].'</span>';
                    }
                    elseif ($check['status'] == 'Denied') {
                      echo '<span style="color:red">'.$check['status'].'</span>';
                    }
                    else{
                      echo '<span style="color:orange">'.$check['status'].'</span>';
                    }
                    ?>
                </td>
                <td>
                  <?
                    if($check['request'] == 11){
                      $segment = array('form15', 'show15', $check['form15_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    } elseif ($check['request'] == 21) {
                      $segment = array('form21', 'show21', $check['form21_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    } elseif ($check['request'] == 22)  {
                      $segment = array('form19', 'show19', $check['form19_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    } elseif ($check['request'] == 23)  {
                      $segment = array('form20', 'show20', $check['form20_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    } elseif ($check['request'] == 24)  {
                      $segment = array('form17', 'show17', $check['form17_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    } elseif ($check['request'] == 31 || $check['request'] == 32 || $check['request'] == 33)  {
                      $segment = array('form13', 'show13', $check['form13_Id']);
                      echo '<a class="btn" href="'.site_url($segment).'"> ดูแบบฟอร์ม </a>';
                    }

                  ?>
                </td>
                <td>
                      <? 
                        if($check['request'] == 11){
                          if($check['status'] == 'Verified'){ 
                            $segments = array('form16', 'view', $check['form15_Id'], '11' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'" target="_blank">พ.พ. 16</a>';
                          } 
                        } else if($check['request'] == 21){
                          if($check['status'] == 'Verified'){
                            $segments = array('form16', 'view', $check['form21_Id'], '21' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'" target="_blank">พ.พ. 16</a>';
                          }
                        } else if($check['request'] == 22){
                          if($check['status'] == 'Verified'){
                            echo "Completed";
                          }
                        } elseif ($check['request'] == 23) {
                          if($check['status'] == 'Verified'){
                            $segments = array('form16', 'view', $check['form20_Id'], '23' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'" target="_blank">พ.พ. 16</a>';
                          }
                        } elseif ($check['request'] == 24) {
                          if($check['status'] == 'Verified'){
                            $segments = array('form16', 'view', $check['form17_Id'], '24' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'" target="_blank">พ.พ. 16</a>';
                          }
                        } elseif ($check['request'] == 31 || $check['request'] == 32 || $check['request'] == 33) {
                          if($check['status'] == 'Verified'){
                            $segments = array('form14', 'view', $check['form13_Id'], $check['request'] ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'" target="_blank">พ.พ. 14</a>';
                          }
                        }
                      ?>
                      
                    </td>
              </tr>
            <?php endforeach ?>
            </table>

          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>© TREX Corp. 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-statsition.js"></script>
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