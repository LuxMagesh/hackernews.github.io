
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width", initial-scale=1.0 />
    <title>Hacker News - New Stories</title>
    <?php
     $Page = "NewStories";
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
    <div class="modal" style="height:400px!important;width:800px!important;">
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
								<rect x="0" y="0" fill="none" width="800" height="400" rx="3" ry="3"></rect>
							</svg>
    </div>
  </div>
</div>
<div class="content">
    <title>Hacker News - New Stories</title>
</head>
    <body>
    <div class="col s12 ">
        <?php
          include_once('includes/nav_switch.php');
        ?>
        </div>
        <?php

$top_link = file_get_contents("https://hacker-news.firebaseio.com/v0/topstories.json?print=pretty");
$new_link = file_get_contents("https://hacker-news.firebaseio.com/v0/newstories.json?print=pretty");
$best_link = file_get_contents("https://hacker-news.firebaseio.com/v0/beststories.json?print=pretty");

$newstories  = array(str_replace(' ', '', $new_link));
$newstories1  = array(str_replace(' ', '', $new_link));


// $topstories1  = array(str_replace('[','', $top_link));
foreach($newstories as $i => $item) {
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
            $new_items2 = file_get_contents("https://hacker-news.firebaseio.com/v0/item/$Pi[$mm].json?print=pretty");
            $new_items3 =  json_decode($new_items2);
            // echo "<pre>";
            //         print_r($top_items2);
            // echo "</pre>";
            $by = (string) $new_items3->by;
            // $descendants = (string) $top_items3->descendants;
            $id = (string) $new_items3->id;
            $title = (string) $new_items3->title;
            $url = (string) $new_items3->url;
            $type = (string) $new_items3->type;
            $score = (string) $new_items3->score;
            $time = (string) $new_items3->time;
            // $NewKid = array($new_items3->kids);
            // foreach ($NewKid as $newkids) 
            //         {
            //           $TotalComms = count($newkids);
            //         }
            // $url = str_replace(' ', '', $stringUrl);
            // $comments = (string) $top_items3->kids;
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
              <?php print_r($mm) ;?> .<i class="tiny material-icons">arrow_drop_up</i><a href="<?php print_r($new_items3->url); ?>"><?php print_r(ucfirst($title)); ?></a><br>
               <?php
               if (!isset($new_items3->url)) 
               {
                print "Please Click on the link above to view the story";
               }
               else
               {
                print_r($new_items3->url);
                
                // $stringPre = preg_replace('/\s+/','',$url);
                ?>
                <div id="seven" class="button">Read More</div>
                <?php

                // print_r($json);
               }
                    ?>
               </span>
            
           </div>
           <div class="col s2 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">forum</i> <?php print_r(ucfirst($type)); ?></div>
            <div class="col s4 card cyan lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">developer_board</i><?php print_r($score); ?> points by: <strong><?php print_r(ucfirst($by)); ?></strong></div>
            <div class="col s4 card-panel teal lighten-4" style="padding-top:5px!important;padding-bottom:5px!important"><i class="tiny material-icons">av_timer</i><?php print_r($CurrentTime['minutes']); ?>  mins ago</div>
            <div class="col s2 card-panel cyan lighten-3" style="padding-top:5px!important;padding-bottom:5px!important"><div id="six" class="button"><i class="tiny material-icons">chat</i> Discuss</div></div>
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


$beststories  = str_replace(' ', '', $best_link);

$ask_link = file_get_contents("https://hacker-news.firebaseio.com/v0/askstories.json?print=pretty");
$show_link = file_get_contents("https://hacker-news.firebaseio.com/v0/showstories.json?print=pretty");
$job_link = file_get_contents("https://hacker-news.firebaseio.com/v0/jobstories.json?print=pretty");

$askstories  = str_replace(' ', '', $ask_link);
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

   print_r("New Stories");
   print_r($newstories );
//    print_r (explode(",",$newstories ));

   print_r("Best Stories");
   print_r($beststories );
//    print_r (explode(",",$beststories ));

   print_r("Ask Stories");
   print_r($askstories );
//    print_r (explode(",",$askstories ));

   print_r("Show Stories");
   print_r($showstories );
//    print_r count((explode(",",$showstories ));

   print_r("Job Stories");
   print_r($jobstories );
//    print_r (explode(",",$jobstories ));  
echo "</pre>";



?>
 
  <!-- <div class="buttons">
    <div id="one" class="button">Unfolding</div>
    <div id="two" class="button">Revealing</div>
    <div id="three" class="button">Uncovering</div>
    <div id="four" class="button">Blow Up</div><br>
    <div id="five" class="button">Meep Meep</div>
    <div id="six" class="button">Sketch</div>
    <div id="seven" class="button">Bond</div>
  </div> -->
</div>
<script>
       $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
  </script>  
  <script type="text/javascript">
         document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function(){
            $('.tooltipped').tooltip();
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




