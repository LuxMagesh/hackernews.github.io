<?php

switch ($Page) {
  case "TopStories":
    echo'
        <nav>
            <div class="nav-wrapper cyan lighten-2">
                <a href="#!" class="brand-logo center">Top Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li class="active"><a href="topstories.php"><strong>Top</strong></a></li>
                    <li><a href="newstories.php"><strong>New</strong></a></li>
                    <li><a href="beststories.php"><strong>Best</strong></a></li>
                    <li><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li><a href="showstories.php"><strong>Show</strong></a></li>
                    <li><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
            </div>
        </nav>';
    break;
  case "NewStories":
    echo'
        <nav>
            <div class="nav-wrapper indigo lighten-2">
                <a href="#!" class="brand-logo center">New Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="topstories.php"><strong>Top</strong></a></li>
                    <li class="active"><a href="newstories.php"><strong>New</strong></a></li>
                    <li><a href="beststories.php"><strong>Best</strong></a></li>
                    <li><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li><a href="showstories.php"><strong>Show</strong></a></li>
                    <li><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
            </div>
        </nav>';
    break;
  case "BestStories":
    echo'
        <nav>
            <div class="nav-wrapper light-green accent-4">
                <a href="#!" class="brand-logo center">Best Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="topstories.php"><strong>Top</strong></a></li>
                    <li><a href="newstories.php"><strong>New</strong></a></li>
                    <li class="active"><a href="beststories.php"><strong>Best</strong></a></li>
                    <li><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li><a href="showstories.php"><strong>Show</strong></a></li>
                    <li><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
            </div>
        </nav>';
    break;
    case "AskStories":
        echo'
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
        </nav>';
        break;
    case "ShowStories":
        echo'
        <nav>
            <div class="nav-wrapper deep-orange lighten-2">
                <a href="#!" class="brand-logo center">Show Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="topstories.php"><strong>Top</strong></a></li>
                    <li><a href="newstories.php"><strong>New</strong></a></li>
                    <li><a href="beststories.php"><strong>Best</strong></a></li>
                    <li><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li class="active"><a href="showstories.php"><strong>Show</strong></a></li>
                    <li><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
            </div>
        </nav>';
        break;
    case "JobStories":
        echo'
        <nav>
            <div class="nav-wrapper blue-grey lighten-1">
                <a href="#!" class="brand-logo center">Job Stories</a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="topstories.php"><strong>Top</strong></a></li>
                    <li><a href="newstories.php"><strong>New</strong></a></li>
                    <li><a href="beststories.php"><strong>Best</strong></a></li>
                    <li><a href="askstories.php"><strong>Ask</strong></a></li>
                    <li><a href="showstories.php"><strong>Show</strong></a></li>
                    <li class="active"><a href="jobstories.php"><strong>Job</strong></a></li>
                </ul>
            </div>
        </nav>';
            break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>