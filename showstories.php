
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1.0 />
    <title>Hacker News - Show Stories</title>
    <?php
     $Page = "Showstories";
     include_once('includes/head.php');
     include_once('includes/body_style.php');
     include_once('includes/headscripts.php');
   ?>
</head>
<body>
    <?php
      include_once('includes/nav.php');
      include_once('includes/db_con.php');
    ?>
<div id="modal-container">
  <div class="modal-background">
    <div class="modal">
      <h2>I'm a Modal</h2>
      <p>Hear me roar.</p>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>
<div class="content">
  <title>Hacker News - Show Stories</title>
</head>
    <body>
    <div class="col s12 ">
        <?php
          include_once('includes/nav_switch.php');
        ?>
        </div>
        <?php

$show_link = file_get_contents("https://hacker-news.firebaseio.com/v0/showstories.json?print=pretty");

$showstories  = array(str_replace(' ', '', $show_link));
$showstories1  = array(str_replace('[','', $show_link));
// $topstories1  = array(str_replace('[','', $top_link));
foreach($showstories as $i => $item) {
    // echo "The Item Key is:  <br>".$item;
    $period = array(explode(",",$item));
    $item1  = array(str_replace('[','', $item));
    // print_r($perid);
    // echo "The Value is:  <br>".$i;
    
    foreach($period as $Pi)
    {
        // $top_items2 = file_get_contents("https://hacker-news.firebaseio.com/v0/item/$Pi[2].json?print=pretty");
        for ($mm = 1; $mm < 15; ++$mm)
        {
            $show_items2 = file_get_contents("https://hacker-news.firebaseio.com/v0/item/$Pi[$mm].json?print=pretty");
            $show_items3 =  json_decode($show_items2);
            //  print_r($show_items3);
            $by = (string) $show_items3->by;
            // $descendants = (string) $ask_items3->descendants;
            $id = (string) $show_items3->id;
            $title = (string) $show_items3->title;
            $url = (string) $show_items3->url;
            $type = (string) $show_items3->type;
            $score = (string) $show_items3->score;
            $time = (string) $show_items3->time;
            $FormatKids = array($show_items3->kids);
            $TotalComments = 0;
            $kids = 0;
              foreach ($FormatKids as $kids) 
              {   
                  if (isset($kids)) {
                      $TotalComments = count($kids);
                    }   
              }
            // $url = str_replace(' ', '', $stringUrl);
            // $comments = (string) $ask_items3->kids;
            $CurrentTime = getdate();
            // print_r($CurrentTime['hours']);
            // $json = file_get_contents($url);
            // $json_data = json_decode($json, true);
            // var_dump($websiteLink);
            ?>
            
    <div id="container" class="container">
    
      <div class="row card-panel">
           <div class="col s12 ">
               <span class="blue-text text-darken-2" style="padding-top:2%;padding-bottom:2">
              <?php print_r($mm) ;?> .<i class="tiny material-icons">arrow_drop_up</i><a href="<?php print_r($show_items3->url); ?>"><?php print_r(ucfirst($title)); ?></a><br>
              <?php
               if (!isset($show_items3->url)) 
               {
                print "Please Click on the link above to view the story";
               }
               else
               {
                print_r($show_items3->url);
               }
              ?>
               </span>
           </div>
            <div class="col s2 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">forum</i> <?php print_r(ucfirst($show_items3->type)); ?></div>
            <div class="col s4 card cyan lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">developer_board</i><?php print_r($score); ?> points by: <strong><?php print_r(ucfirst($by)); ?></strong></div>
            <div class="col s4 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">av_timer</i><?php print_r($CurrentTime['hours']); ?> hours ago</div>
            <div class="col s2 card-panel cyan lighten-3" style="padding-top:5px!important;padding-bottom:5px!important"><div id="seven" class="button"><i class="tiny material-icons">comment</i> <?php print_r($TotalComments);?> Comments</div></div>
          </div>         
        </div>
            <?php
            echo "</pre>";
            // $mm++;
            // print_r($Pi);
        }
        $Pi++;
    }
    
    
  }

$show_link = file_get_contents("https://hacker-news.firebaseio.com/v0/showstories.json?print=pretty");
$job_link = file_get_contents("https://hacker-news.firebaseio.com/v0/jobstories.json?print=pretty");

$showstories  = str_replace(' ', '', $show_link);
$jobstories  = str_replace(' ', '', $job_link);

echo "<pre>";
   print_r("Show Stories");
   print_r($showstories );
//    print_r count((explode(",",$showstories ));

   print_r("Job Stories");
   print_r($jobstories );
//    print_r (explode(",",$jobstories ));  
echo "</pre>";



?>
</div>
  <script>
       $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
  </script>
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-adba271f-dc0e-b3b4-709c-587bcafeee4c" crossorigin></script>
</body>
<?php
     include_once('includes/footer.php');
   ?>
</html>




