
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1.0 />
    <title>Hacker News - Ask Stories</title>
    <?php
     $Page = "AskStories";
     include_once('includes/head.php');
     include_once('includes/body_style.php');
     include_once('includes/headscripts.php');
   ?>
</head>

<body>
<?php
 include_once('includes/nav.php');
 include_once('includes/db_con.php');
//  print_r($Page)
?>
<div id="modal-container">
  <div class="modal-background">
    <div class="modal" style="height:800px!important;width:800px!important;">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="input_text" type="text" data-length="10">
            <label for="input_text">Name or Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Comment</label>
          </div>
        </div>
      </form>
    </div>
      <svg class="modal-svg" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none">
								<rect x="0" y="0" fill="none" width="226" height="162" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>
<div class="content">
  <title>Hacker News - Ask Stories</title>
</head>
    <body>
    <div class="col s12 ">
           <nav>
                <div class="nav-wrapper orange darken-1">
                <a href="#!" class="brand-logo center">Ask Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="topstories.php"><strong>Top</strong></a></li>
                    <li><a href="newstories.php"><strong>New</strong></a></li>
                    <li><a href="beststories.php"><strong>Best</strong></a></li>
                    <li class="active"><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li><a href="showstories.php"><strong>Show</strong></a></li>
                    <li><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
                </div>
        </nav>
        </div>
        <?php
        $ask_link = file_get_contents("https://hacker-news.firebaseio.com/v0/askstories.json?print=pretty");

        $askstories  = array(str_replace(' ', '', $ask_link));
        $askstories1  = array(str_replace('[','', $ask_link));
        // $topstories1  = array(str_replace('[','', $top_link));
        foreach($askstories as $i => $item) {
            // echo "The Item Key is:  <br>".$item;
            $perid = array(explode(",",$item));
            $item1  = array(str_replace('[','', $item));
            // print_r($perid);
            // echo "The Value is:  <br>".$i;
            
            foreach($perid as $Pi)
            {
                // $top_items2 = file_get_contents("https://hacker-news.firebaseio.com/v0/item/$Pi[2].json?print=pretty");
                for ($mm = 1; $mm < 15; ++$mm)
                {
                    $ask_items2 = file_get_contents("https://hacker-news.firebaseio.com/v0/item/$Pi[$mm].json?print=pretty");
                    $ask_items3 =  json_decode($ask_items2);
                    
                    $by = (string) $ask_items3->by;
                    // $descendants = (string) $top_items3->descendants;
                    $id = (string) $ask_items3->id;
                    $title = (string) $ask_items3->title;
                    // $url = (string) $ask_items3->url;
                    $type = (string) $ask_items3->type;
                    $score = (string) $ask_items3->score;
                    $time = (string) $ask_items3->time;
                    $FormatKids = array($ask_items3->kids);
                    if (isset($FormatKids)) 
                    {
                      foreach ($FormatKids as $kids) 
                      {   
                          if (isset($kids)) {
                              $TotalComments = count($kids);
                            }
                        
                      }
                    }

                    // $url = str_replace(' ', '', $stringUrl);
                
                    // $comments = (string) $top_items3->kids;
                    $CurrentTime = getdate();
                    // print_r($CurrentTime['hours']);
                    ?>
                    
            <div id="container" class="container">
            
            <div class="row card-panel">
                <div class="col s12 ">
                    <span class="blue-text text-darken-2" style="padding-top:5px!important;">
                    <?php print_r($mm) ;?> .<i class="tiny material-icons">arrow_drop_up</i><a href=""><?php print_r(ucfirst($title)); ?></a><br>
                    </span>
                    
                </div>
                
                <div class="col s2 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">forum</i> <?php print_r(ucfirst($type)); ?></div>
                    <div class="col s4 card cyan lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">developer_board</i><?php print_r($score); ?> points by: <strong><?php print_r(ucfirst($by)); ?></strong></div>
                    <div class="col s4 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">av_timer</i><?php print_r($CurrentTime['hours']); ?> hours ago</div>
                    <div class="col s2 card-panel cyan lighten-3" style="padding-top:5px!important;padding-bottom:5px!important"><div id="seven" class="button"><i class="tiny material-icons">comment</i><?php print_r($TotalComments)?> Comments</div></div>
                </div>         
                </div>
                    <?php

                    echo "</pre>";
            // Cycle through the array
                    
                    // $newArrRes = array($top_items2);
                    // $Markup = array("by","descendants","id","kids","score","time","title","type","url" );

                    // $newArrRes2 = array($top_items2);
                    echo "<pre>";
                    // echo "The Value is:  <br>".$mm;
                    // print_r($newArrRes);s
                    // $result = array_merge($newArrRes, $Markup);
                    // print_r($result[0]);
                    
                    // $perid2 = array($result[0]);
                    // $flipped = array_flip($Markup);
                    // $result3 = array_merge($result[0], $Markup);
                    // $result4 = array_merge($newArrRes, $flipped);
                    // print_r($flipped);
                    // print_r($result[0]);
                    // $x = $result[0].[0];
                
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
//    print_r("Top Stories Count");
// //    print_r($topstories);

//    //    print_r (explode(",",$newstories ));
// //    $ts = array_explode($topstories);
//    //slice that down to 5
//    $top_items = array_slice($topstories, 0, 5);

//    var_dump($top_items);
//    foreach ($top_items as $item) {
//        print_r($item);
//     // echo $item['by'].'<br>';
//     // echo $item['score'].'<br>';
//     // echo $item['time']." hours ago <br>";
//     }

//    print_r (explode(",",$askstories ));

   print_r("Show Stories");
   print_r($showstories );
//    print_r count((explode(",",$showstories ));

   print_r("Job Stories");
   print_r($jobstories );
//    print_r (explode(",",$jobstories ));  
echo "</pre>";
?>
</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script  src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-adba271f-dc0e-b3b4-709c-587bcafeee4c" crossorigin></script>
</body>
<?php
include_once('includes/footer.php');
?>
</html>




