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
              <li class="nav-header"><font color="green"><h2>Form Status</h2></font></li>
              <li class='<?=($activer == 1) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats1") ?>">การขึ้นทะเบียนสถานที่เพาะเลี้ยงพืชอนุรักษ์ และ ยื่นบัญชีแสดงจำนวนพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 2) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats2") ?>">การยื่นคำขอต่างๆ ที่เกี่ยวข้องกับใบสำคัญการขึ้นทะเบียนสถานที่เพาะเลี้ยง และ บัญชีพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 3) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats3") ?>">การขออนุญาตนำเข้า และนำเข้าล่วงหน้าพืชอนุรักษ์และซากพืชของพืชอนุรักษ์
              ตามวงศ์และชนิดที่ระบุในบัญชี</a></li>
              <br>
              <li class='<?=($activer == 4) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats4") ?>">การขอใบอนุญาตส่งออก และส่งออกล่วงหน้าพืชอนุรักษ์หรือซากพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 5) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats5") ?>">การขออนุญาตนำผ่านพืชอนุรักษ์</a></li>
              <br>
              <li class='<?=($activer == 6) ? "active" : "nonactive" ;?>'><a href="<? echo site_url("pages/stats6") ?>">การออกหนังสือรับรองการส่งออกพืชลูกผสม</a></li>
            </ul>
          </div><!--/.well -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><a href="<? echo base_url() ?>">
              <h2>Form & Request</h2></a></li>
            </ul>
          </div><!--/.well -->
         
          
        </div><!--/span-->
        <div class="span9">
          <div class="well">
            <h2>คำขอล่าสุด</h2>
            <br>
            <table class="table table-bordered" width="0%">
            <tr> 
            <td width="20%"><h4>เลขที่คำขอ</h4></td>
            <td><h4>ชื่อผู้ยื่นคำร้อง</h4></td> 
            <td><h4>สถานะ</h4></td>
            <td><h4>หมายเหตุ</h4></td>
            <!-- <td><h4>หนังสือรับรอง</h4></td> -->
            </tr>

            <?
            foreach ($checks as $check){
            ?>
                  <tr class="warning">
                  <td width="10%">
                  <? echo $check[$formNameId]; ?>
                  </td>
                  <td>
                  <?echo $check['fname'];?>
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
                      <span style="color:red">
                      <?echo $check['comment'];?>
                      </span>
                    </td>
                    <!-- <td>
                      <? 
                        if($check['request'] == 11){
                          if($check['status'] == 'Verified'){ 
                            $segments = array('form16', 'view', $check['form15_Id'], '11' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'">พ.พ. 16</a>';
                          } 
                        } else if($check['request'] == 21){
                          if($check['status'] == 'Verified'){
                            $segments = array('form16', 'view', $check['form21_Id'], '21' ); 
                            echo '<a class="btn" style="width:70px" href="'.site_url($segments).'">พ.พ. 16</a>';
                          }
                        } else if($check['request'] == 22){
                          if($check['status'] == 'Verified'){
                            echo "Completed";
                        }
                        } elseif ($check['request'] == 23) {
                          $segments = array('form16', 'view', $check['form20_Id'], '23' ); 
                          echo '<a class="btn" style="width:70px" href="'.site_url($segments).'">พ.พ. 16</a>';
                        }
                      ?>
                      
                    </td> -->

                    </tr>
              <?}
            ?>

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