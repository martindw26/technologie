<div class="sticky-top">
<div class="Commercial">
	<div class="MPU_bottom">
<?php 
if ($adinformation) {
    $adinformation = get_field('adinformation', 'option');
}
?>

<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">
    Advertisment
    <span class="px-2" style="position: absolute; top: 0; right: 0;">
  <a class="text-decoration-none text-dark" href="<?php the_field( 'adinformation','option')?>" target='_blank'>
    &#9432;
  </a>
</span>

</div>
<div class="d-flex align-items-center justify-content-center mb-2" style="height:305px; margin: 0 auto; background-color: #dee2e6;">


<?php 

$LowerLimit = get_field('mpu_bottom_min','option');
$UpperLimit = get_field('mpu_bottom_max','option');

$advert = rand($LowerLimit,$UpperLimit);

//Gets Post category name
$category = get_the_category();
$current_category = $category[0]->cat_name;

//Gets Post template name
$template_slug = get_page_template_slug();

if (have_posts()) :
  while (have_posts()) : the_post();
    $post_id = get_the_ID();

  endwhile;
endif;

//$advert = 1;

switch ($advert) {
case "1":

// Get the 'mpu_bottom_1' field from the 'option' object
$mpu_bottom_1 = get_field('mpu_bottom_1', 'option');

// Check if the banner field exists
if ($mpu_bottom_1) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_1['start_date']);
  $end_date = strtotime($mpu_bottom_1['end_date']);
  $campaign_name = $mpu_bottom_1['campaign_name'];
  $delivering = $mpu_bottom_1['delivering'];
  $CategoryTarget = $mpu_bottom_1['category'];
  $PostIDTarget = $mpu_bottom_1['postid'];
  $OrderNum = $mpu_bottom_1['campaign_order_id'];
  $Image = $mpu_bottom_1['image'];
  $Url = $mpu_bottom_1['url'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
  if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_1['mpu_bottom_script_1']) {
      echo $mpu_bottom_1['mpu_bottom_script_1'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';



  }
}


break;
case "2":
 // Get the 'mpu_bottom_2' field from the 'option' object
$mpu_bottom_2 = get_field('mpu_bottom_2', 'option');

// Check if the banner field exists
if ($mpu_bottom_2) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_2['start_date2']);
  $end_date = strtotime($mpu_bottom_2['end_date2']);
  $campaign_name = $mpu_bottom_2['campaign_name2'];
  $delivering = $mpu_bottom_2['delivering2'];
  $CategoryTarget = $mpu_bottom_2['category2'];
  $PostIDTarget = $mpu_bottom_2['postid2'];
  $OrderNum = $mpu_bottom_2['campaign_order_id2'];
  $Image = $mpu_bottom_2['image2'];
  $Url = $mpu_bottom_2['url2'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
  if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_2['mpu_bottom_script_2']) {
      echo $mpu_bottom_2['mpu_bottom_script_2'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "3":
   // Get the 'mpu_bottom_3' field from the 'option' object
$mpu_bottom_3 = get_field('mpu_bottom_3', 'option');

// Check if the banner field exists
if ($mpu_bottom_3) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_3['start_date3']);
  $end_date = strtotime($mpu_bottom_3['end_date3']);
  $campaign_name = $mpu_bottom_3['campaign_name3'];
  $delivering = $mpu_bottom_3['delivering3'];
  $CategoryTarget = $mpu_bottom_3['category3'];
  $PostIDTarget = $mpu_bottom_3['postid3'];
  $OrderNum = $mpu_bottom_3['campaign_order_id3'];
  $Image = $mpu_bottom_3['image3'];
  $Url = $mpu_bottom_3['url3'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_3['mpu_bottom_script_3']) {
      echo $mpu_bottom_3['mpu_bottom_script_3'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "4":
   // Get the 'mpu_bottom_4' field from the 'option' object
$mpu_bottom_4 = get_field('mpu_bottom_4', 'option');

// Check if the banner field exists
if ($mpu_bottom_4) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_4['start_date4']);
  $end_date = strtotime($mpu_bottom_4['end_date4']);
  $campaign_name = $mpu_bottom_4['campaign_name4'];
  $delivering = $mpu_bottom_4['delivering4'];
  $CategoryTarget = $mpu_bottom_4['category4'];
  $PostIDTarget = $mpu_bottom_4['postid4'];
  $OrderNum = $mpu_bottom_4['campaign_order_id4'];
  $Image = $mpu_bottom_4['image4'];
  $Url = $mpu_bottom_4['url4'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_4['mpu_bottom_script_4']) {
      echo $mpu_bottom_4['mpu_bottom_script_4'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "5":
  // Get the 'mpu_bottom_5' field from the 'option' object
$mpu_bottom_5 = get_field('mpu_bottom_5', 'option');

// Check if the banner field exists
if ($mpu_bottom_5) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_5['start_date5']);
  $end_date = strtotime($mpu_bottom_5['end_date5']);
  $campaign_name = $mpu_bottom_5['campaign_name5'];
  $delivering = $mpu_bottom_5['delivering5'];
  $CategoryTarget = $mpu_bottom_5['category5'];
  $PostIDTarget = $mpu_bottom_5['postid5'];
  $OrderNum = $mpu_bottom_5['campaign_order_id5'];
  $Image = $mpu_bottom_5['image5'];
  $Url = $mpu_bottom_5['url5'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_5['mpu_bottom_script_5']) {
      echo $mpu_bottom_5['mpu_bottom_script_5'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "6":
  // Get the 'mpu_bottom_6' field from the 'option' object
$mpu_bottom_6 = get_field('mpu_bottom_6', 'option');

// Check if the banner field exists
if ($mpu_bottom_6) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_6['start_date6']);
  $end_date = strtotime($mpu_bottom_6['end_date6']);
  $campaign_name = $mpu_bottom_6['campaign_name6'];
  $delivering = $mpu_bottom_6['delivering6'];
  $CategoryTarget = $mpu_bottom_6['category6'];
  $PostIDTarget = $mpu_bottom_6['postid6'];
  $OrderNum = $mpu_bottom_6['campaign_order_id6'];
  $Image = $mpu_bottom_6['image6'];
  $Url = $mpu_bottom_6['url6'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_6['mpu_bottom_script_6']) {
      echo $mpu_bottom_6['mpu_bottom_script_6'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "7":
  // Get the 'mpu_bottom_7' field from the 'option' object
$mpu_bottom_7 = get_field('mpu_bottom_7', 'option');

// Check if the banner field exists
if ($mpu_bottom_7) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_7['start_date7']);
  $end_date = strtotime($mpu_bottom_7['end_date7']);
  $campaign_name = $mpu_bottom_7['campaign_name7'];
  $delivering = $mpu_bottom_7['delivering7'];
  $CategoryTarget = $mpu_bottom_7['category7'];
  $PostIDTarget = $mpu_bottom_7['postid7'];
  $OrderNum = $mpu_bottom_7['campaign_order_id7'];
  $Image = $mpu_bottom_7['image7'];
  $Url = $mpu_bottom_7['url7'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_7['mpu_bottom_script_7']) {
      echo $mpu_bottom_7['mpu_bottom_script_7'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "8":
  // Get the 'mpu_bottom_8' field from the 'option' object
$mpu_bottom_8 = get_field('mpu_bottom_8', 'option');

// Check if the banner field exists
if ($mpu_bottom_8) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_8['start_date8']);
  $end_date = strtotime($mpu_bottom_8['end_date8']);
  $campaign_name = $mpu_bottom_8['campaign_name8'];
  $delivering = $mpu_bottom_8['delivering8'];
  $CategoryTarget = $mpu_bottom_8['category8'];
  $PostIDTarget = $mpu_bottom_8['postid8'];
  $OrderNum = $mpu_bottom_8['campaign_order_id8'];
  $Image = $mpu_bottom_8['image8'];
  $Url = $mpu_bottom_8['url8'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_8['mpu_bottom_script_8']) {
      echo $mpu_bottom_8['mpu_bottom_script_8'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "9":
   // Get the 'mpu_bottom_9' field from the 'option' object
$mpu_bottom_9 = get_field('mpu_bottom_9', 'option');

// Check if the banner field exists
if ($mpu_bottom_9) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_9['start_date9']);
  $end_date = strtotime($mpu_bottom_9['end_date9']);
  $campaign_name = $mpu_bottom_9['campaign_name9'];
  $delivering = $mpu_bottom_9['delivering9'];
  $CategoryTarget = $mpu_bottom_9['category9'];
  $PostIDTarget = $mpu_bottom_9['postid9'];
  $OrderNum = $mpu_bottom_9['campaign_order_id9'];
  $Image = $mpu_bottom_9['image9'];
  $Url = $mpu_bottom_9['url9'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_9['mpu_bottom_script_9']) {
      echo $mpu_bottom_9['mpu_bottom_script_9'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "10":
   // Get the 'mpu_bottom_10' field from the 'option' object
$mpu_bottom_10 = get_field('mpu_bottom_10', 'option');

// Check if the banner field exists
if ($mpu_bottom_10) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_10['start_date10']);
  $end_date = strtotime($mpu_bottom_10['end_date10']);
  $campaign_name = $mpu_bottom_10['campaign_name10'];
  $delivering = $mpu_bottom_10['delivering10'];
  $CategoryTarget = $mpu_bottom_10['category10'];
  $PostIDTarget = $mpu_bottom_10['postid10'];
  $OrderNum = $mpu_bottom_10['campaign_order_id10'];
  $Image = $mpu_bottom_10['image10'];
  $Url = $mpu_bottom_10['url10'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_10['mpu_bottom_script_10']) {
      echo $mpu_bottom_10['mpu_bottom_script_10'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"11":
   // Get the 'mpu_bottom_11' field from the 'option' object
$mpu_bottom_11 = get_field('mpu_bottom_11', 'option');

// Check if the banner field exists
if ($mpu_bottom_11) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_11['start_date11']);
  $end_date = strtotime($mpu_bottom_11['end_date11']);
  $campaign_name = $mpu_bottom_11['campaign_name11'];
  $delivering = $mpu_bottom_11['delivering11'];
  $CategoryTarget = $mpu_bottom_11['category11'];
  $PostIDTarget = $mpu_bottom_11['postid11'];
  $OrderNum = $mpu_bottom_11['campaign_order_id11'];
  $Image = $mpu_bottom_11['image11'];
  $Url = $mpu_bottom_11['url11'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_11['mpu_bottom_script_11']) {
      echo $mpu_bottom_11['mpu_bottom_script_11'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"12":
  // Get the 'mpu_bottom_12' field from the 'option' object
$mpu_bottom_12 = get_field('mpu_bottom_12', 'option');

// Check if the banner field exists
if ($mpu_bottom_12) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_12['start_date12']);
  $end_date = strtotime($mpu_bottom_12['end_date12']);
  $campaign_name = $mpu_bottom_12['campaign_name12'];
  $delivering = $mpu_bottom_12['delivering12'];
  $CategoryTarget = $mpu_bottom_12['category12'];
  $PostIDTarget = $mpu_bottom_12['postid12'];
  $OrderNum = $mpu_bottom_12['campaign_order_id12'];
  $Image = $mpu_bottom_12['image12'];
  $Url = $mpu_bottom_12['url12'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_12['mpu_bottom_script_12']) {
      echo $mpu_bottom_12['mpu_bottom_script_12'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"13":
  // Get the 'mpu_bottom_13' field from the 'option' object
$mpu_bottom_13 = get_field('mpu_bottom_13', 'option');

// Check if the banner field exists
if ($mpu_bottom_13) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_13['start_date13']);
  $end_date = strtotime($mpu_bottom_13['end_date13']);
  $campaign_name = $mpu_bottom_13['campaign_name13'];
  $delivering = $mpu_bottom_13['delivering13'];
  $CategoryTarget = $mpu_bottom_13['category13'];
  $PostIDTarget = $mpu_bottom_13['postid13'];
  $OrderNum = $mpu_bottom_13['campaign_order_id13'];
  $Image = $mpu_bottom_13['image13'];
  $Url = $mpu_bottom_13['url13'];


  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_13['mpu_bottom_script_13']) {
      echo $mpu_bottom_13['mpu_bottom_script_13'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"14":
  // Get the 'mpu_bottom_14' field from the 'option' object
$mpu_bottom_14 = get_field('mpu_bottom_14', 'option');

// Check if the banner field exists
if ($mpu_bottom_14) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_14['start_date14']);
  $end_date = strtotime($mpu_bottom_14['end_date14']);
  $campaign_name = $mpu_bottom_14['campaign_name14'];
  $delivering = $mpu_bottom_14['delivering14'];
  $CategoryTarget = $mpu_bottom_14['category14'];
  $PostIDTarget = $mpu_bottom_14['postid14'];
  $OrderNum = $mpu_bottom_14['campaign_order_id14'];
  $Image = $mpu_bottom_14['image14'];
  $Url = $mpu_bottom_14['url14'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_14['mpu_bottom_script_14']) {
      echo $mpu_bottom_14['mpu_bottom_script_14'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"15":
  // Get the 'mpu_bottom_15' field from the 'option' object
$mpu_bottom_15 = get_field('mpu_bottom_15', 'option');

// Check if the banner field exists
if ($mpu_bottom_15) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_15['start_date15']);
  $end_date = strtotime($mpu_bottom_15['end_date15']);
  $campaign_name = $mpu_bottom_15['campaign_name15'];
  $delivering = $mpu_bottom_15['delivering15'];
  $CategoryTarget = $mpu_bottom_15['category15'];
  $PostIDTarget = $mpu_bottom_15['postid15'];
  $OrderNum = $mpu_bottom_15['campaign_order_id15'];
  $Image = $mpu_bottom_15['image15'];
  $Url = $mpu_bottom_15['url15'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_15['mpu_bottom_script_15']) {
      echo $mpu_bottom_15['mpu_bottom_script_15'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"16":
  // Get the 'mpu_bottom_16' field from the 'option' object
$mpu_bottom_16 = get_field('mpu_bottom_16', 'option');

// Check if the banner field exists
if ($mpu_bottom_16) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_16['start_date16']);
  $end_date = strtotime($mpu_bottom_16['end_date16']);
  $campaign_name = $mpu_bottom_16['campaign_name16'];
  $delivering = $mpu_bottom_16['delivering16'];
  $CategoryTarget = $mpu_bottom_16['category16'];
  $PostIDTarget = $mpu_bottom_16['postid16'];
  $OrderNum = $mpu_bottom_16['campaign_order_id16'];
  $Image = $mpu_bottom_16['image16'];
  $Url = $mpu_bottom_16['url16'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_16['mpu_bottom_script_16']) {
      echo $mpu_bottom_16['mpu_bottom_script_16'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"17":
  // Get the 'mpu_bottom_17' field from the 'option' object
$mpu_bottom_17 = get_field('mpu_bottom_17', 'option');

// Check if the banner field exists
if ($mpu_bottom_17) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_17['start_date17']);
  $end_date = strtotime($mpu_bottom_17['end_date17']);
  $campaign_name = $mpu_bottom_17['campaign_name17'];
  $delivering = $mpu_bottom_17['delivering17'];
  $CategoryTarget = $mpu_bottom_17['category17'];
  $PostIDTarget = $mpu_bottom_17['postid17'];
  $OrderNum = $mpu_bottom_17['campaign_order_id17'];
  $Image = $mpu_bottom_17['image17'];
  $Url = $mpu_bottom_17['url17'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_17['mpu_bottom_script_17']) {
      echo $mpu_bottom_17['mpu_bottom_script_17'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"18":
  // Get the 'mpu_bottom_18' field from the 'option' object
$mpu_bottom_18 = get_field('mpu_bottom_18', 'option');

// Check if the banner field exists
if ($mpu_bottom_18) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_18['start_date18']);
  $end_date = strtotime($mpu_bottom_18['end_date18']);
  $campaign_name = $mpu_bottom_18['campaign_name18'];
  $delivering = $mpu_bottom_18['delivering18'];
  $CategoryTarget = $mpu_bottom_18['category18'];
  $PostIDTarget = $mpu_bottom_18['postid18'];
  $OrderNum = $mpu_bottom_18['campaign_order_id18'];
  $Image = $mpu_bottom_18['image18'];
  $Url = $mpu_bottom_18['url18'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_18['mpu_bottom_script_18']) {
      echo $mpu_bottom_18['mpu_bottom_script_18'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"19":
  // Get the 'mpu_bottom_19' field from the 'option' object
$mpu_bottom_19 = get_field('mpu_bottom_19', 'option');

// Check if the banner field exists
if ($mpu_bottom_19) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_19['start_date19']);
  $end_date = strtotime($mpu_bottom_19['end_date19']);
  $campaign_name = $mpu_bottom_19['campaign_name19'];
  $delivering = $mpu_bottom_19['delivering19'];
  $CategoryTarget = $mpu_bottom_19['category19'];
  $PostIDTarget = $mpu_bottom_19['postid19'];
  $OrderNum = $mpu_bottom_19['campaign_order_id19'];
  $Image = $mpu_bottom_19['image19'];
  $Url = $mpu_bottom_19['url19'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_19['mpu_bottom_script_19']) {
      echo $mpu_bottom_19['mpu_bottom_script_19'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"20":
  // Get the 'mpu_bottom_20' field from the 'option' object
$mpu_bottom_20 = get_field('mpu_bottom_20', 'option');

// Check if the banner field exists
if ($mpu_bottom_20) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($mpu_bottom_20['start_date20']);
  $end_date = strtotime($mpu_bottom_20['end_date20']);
  $campaign_name = $mpu_bottom_20['campaign_name20'];
  $delivering = $mpu_bottom_20['delivering20'];
  $CategoryTarget = $mpu_bottom_20['category20'];
  $PostIDTarget = $mpu_bottom_20['postid20'];
  $OrderNum = $mpu_bottom_20['campaign_order_id20'];
  $Image = $mpu_bottom_20['image20'];
  $Url = $mpu_bottom_20['url20'];

  // Get the desktop header backup image and URL from the 'option' object
  $mpu_subs_ad_image = get_field('mpu_image', 'option');
  $mpu_subs_ad_url = get_field('mpu_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($mpu_bottom_20['mpu_bottom_script_20']) {
      echo $mpu_bottom_20['mpu_bottom_script_20'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mpu_subs_ad_url . '" target="_blank"><img src="' . $mpu_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
default:
echo "No advert selected";
}
?>

</div>
</div>
</div>
</div>