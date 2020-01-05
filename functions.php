<?php


  function createCarouselItem($position, $name, $line_name, $image){
    $content = '<div class="item"><div><div class="info-centerer">';
    $content .= '<h5>'.$position.'</h5>';
    $content .= '<span>'.$name.'</span><br>';
    $content .= '<span>'.$line_name.'</span>';
    $content .= '</div>';
    $content .= '<img style="margin: auto" src='.$image.'>';
    $content .= '</div></div>';
    echo $content;
  }

  function listClasses($class_name, $class_array, $starting_number){
    $blackballed_numbers = [35, 97, 100];

    $content = '<div class="item">';
    $content .= '<ul>';
    $content .= '<h5>'.$class_name.'</h5>';

    foreach ($class_array as $value) {
      if(!in_array($starting_number, $blackballed_numbers)){
        $content .= '<li>'.strval($starting_number.'. '.$value).'</li>';
      }
      
      $starting_number += 1;
    }
    $content .= '</ul></div>';
    echo $content;
  }

  $charter = ['Thinh "E.T.L." Nguyen', 'Tuan "Ta-two" Huynh','C. Eugene "Spacely" Lee', 'Yuan "Shakira" Ren', 'Charles "Braille" Lota', 'Terry "Potato Head" Hsiung', 'John "H.O.P." Lee', 'Cheng "William Regal" Lu', 'Amit "Pinch" Goyal', 'Burita "Fez" Em', 'Vivek "Kick My Dog" Taneja'];
  $alpha = ['Kevin "Pho Foot Tall" Nguyen', 'Jack "J-Lo" Chen', 'Vinod "Hinbad" Chopra'];
  $beta = ['Frank Sungping "Joystick" Chen', 'John "Generic" Kim', 'Andrew "Revlon" Hong', 'Ga-Ram "Snüz" Han'];		
  $gamma = ['David "Shebangs" Lee', 'Kang Woon "Incomplete" Chung', 'Kun-Hee "Loading" Cho', 'Jonathan "Peeperz" Tran', 'Thomas "Voicebox" Li', 'Hayato "Desperado" Hoshino', 'Jing "SPF-Zero" Chan', 'Jin Ho "Jubilee" Kim'];
  $delta = ['Andrew Omesh "Minindian" Jagnarian', 'Calvin Shi-Hyung "A.F.K." Chun' , 'James "Peon" Liu' , 'Dan "Semolies" Phan'];      
  $epsilon = ['Oliver Gene "Boo Boo" Park', 'Ken "Bacon Sizzlin" Ohnishi', 'Bowen "mp3" Xu', 'Edward Ruoran "Dial-Up" Wang'];
  $zeta = ['Dasol "Dazzle" Kwon',	'Sean "Daddy, No!" Kim'];	
  $eta = ['Brian "Last Place" Truong', 'Nathan Min June "Admiral Jackbar" Park',	'Caleb Yo-Won "Princess Choadstool" Chen',	'Chufan "Douche Depot" Zhai',	 'Kevin Charles "N.G.A.S. Jenkins" Chung', 'Taeyoung Joshua "Wiidle" Kim',	'Michael Hyun-Suk "Cheez-Whiz" Kim'];	
  $theta = ['Daniel "Sharqueen" Chu', 'Alex "Cornutz" Brooks', 'Thomas "Thirty-Pho Rupee" Antony', 'Tyler "Ong Cok" Del Rosario',	 'Jon "Lt. Dan" Park',	'Mo "WHERE IS SHE?!" Lu', 'Doug "Zoboomafoo" Mao', 'Bryan "Hip Hop Anonymous" Cheong'];	
  $iota = ['Christian "Titty Kong" Sanchez',	'Soonhong "Tae Kwon Don’t" Choi', 'Hao "A Dell" Qiu', 'Andrew "neinGAG" Yang',	'Vincent "T-T Tourettesaurus Rex" Lam',	 'Shamal "Blah. Blahh. Blahhh." Lord', 'Alex "Yuan Crotchmon Tran', 'Elvin "Pinkin Dark" Lee',	'Louis "Kid Cooties" Hwang',	'Allen "Jabba DA Slut" Au'];
  $kappa =  ['Yutao "Ssstephen Stawking" Chen',	 'Dasith "Dark Kelly" Gunawardhana', 'Eugene "Captain Juk" Cai'];
  $mu = ['Felix "Honorable Discharge" Cao', 'Tony "Speedbump" Wu', 'Aki "Horlax" Gao', 'Kevin "Kaygol Kommander" Wu'];
  $nu = ['Glenn "Rear Admiral Lower HalF" Getty'	,'Herbert "Second Coming" Kwok','Daniel "Chad McFly" Moon'	,'Robert "SnakeS on A Train" Chan'	,'Richard "FrisbeeTeam5" Young'	,'Benjamin "TransformHER" Hyde'	,'YiJiang "wrecKING bawls" Guo'];
  $xi = ['Harrison "AutoBlocks" Yu',	'Sonny "Side Beach" Moon',	'Patrick "PinK SaBBath" Muggill',	'Jason "Private Parks" Huang',	'Jonathan "Sonic the Edgehog" Ting',	'Shaunn "Girth Vader" Warmuth',	'John "Red Wiftpzrd" Herrick II',	'Anthony "shark bait OOH HA HA" Sanworanart',	'Chris "QWOP" Chueh'];	
  $omnicron = ['Jose "Taco Tuesday" Carballo','Edmund "Netflixxx and J.I.L.L." Pan', 'Michael "Forrest Dump" Wu', 'Austin "Death by Pu-Pu" Ly', 'Salman "Dark Magician...Girl" Guliwala', 'Andrew "2FapTooFurious" Johnston'];
  $pi =  ['Peter "Twin-ki Bear" Kim','Richard "Maid In China" Li','Roman "Space Perp Queso RoBBer" Wang','Chris "unplaNNed parenthOOd" Han','Adrien "#boizwillbboyz" Bernard','Andrew "Red Head Redemption" Chen'];
  $rho = ['Steve "Ur In My Way" Hong',	'Nicholas "St. i-Patch" Landi',	'Bennett "DoppelBänger" Gilliam',	'Eric "Bongzi Scheme" Ng',	'Jonathan "Clogtimus Prime" Wen','Josef "LOréal Kidz" Shim',	'Duncan "My Limping Pony" Crooks',	'Dhaval "Discount Cub Scout" Patel',	'Eric "Senpai Style" Zhang','Min Jea "Zero Dark Curvy" Kim'];	
  $sigma = ['Jeffrey "MeAn GiRlZ" Shi','Kenn "Seaman C-Breeze" Saw','Gordon "Its Fing RAW" Lee', 'Eric "PeeNut GaLLery" Guan', 'Seth "Hide iN Sect" Miller', 'Simon "Petty Officer Mudhole" Li'];
?>