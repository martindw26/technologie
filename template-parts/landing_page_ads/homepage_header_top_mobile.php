<div class="commerce_hp_mobile">
<div class="commerce_mobile">
<div class="py-2">
<?php
if ($adinformation) {
    $adinformation = get_field('adinformation', 'option');
}
?>

<div class="d-flex justify-content-center p-2 text-dark position-relative" style="width:980px; margin: 0 auto; background-color: #dee2e6;">
    Advertisment
    <span class="px-2" style="position: absolute; top: 0; right: 0;">
  <a class="text-decoration-none text-dark" href="<?php the_field( 'adinformation','option')?>" target='_blank'>
    &#9432;
  </a>
</span>

</div>
<div class="d-flex align-items-center justify-content-center" style="height:270px; width:980px; margin: 0 auto; background-color: #dee2e6;">


<?php

//$LowerLimit = get_field('mobile_banner_top_min','option');
//$UpperLimit = get_field('mobile_banner_top_max','option');

$LowerLimit = 1;
$UpperLimit = 10;

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

// Get the 'banner_mobile_1' field from the 'option' object
$banner_mobile_1 = get_field('banner_mobile_1', 'option');

// Check if the banner field exists
if ($banner_mobile_1) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_1['start_date']);
  $end_date = strtotime($banner_mobile_1['end_date']);
  $campaign_name = $banner_mobile_1['campaign_name'];
  $delivering = $banner_mobile_1['delivering'];
  $CategoryTarget = $banner_mobile_1['category'];
  $PostIDTarget = $banner_mobile_1['postid'];
  $OrderNum = $banner_mobile_1['campaign_order_id'];
  $Image = $banner_mobile_1['image'];
  $Url = $banner_mobile_1['url'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_1['banner_mobile_script_1']) {
      echo $banner_mobile_1['banner_mobile_script_1'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';



  }
}


break;
case "2":
 // Get the 'banner_mobile_2' field from the 'option' object
$banner_mobile_2 = get_field('banner_mobile_2', 'option');

// Check if the banner field exists
if ($banner_mobile_2) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_2['start_date2']);
  $end_date = strtotime($banner_mobile_2['end_date2']);
  $campaign_name = $banner_mobile_2['campaign_name2'];
  $delivering = $banner_mobile_2['delivering2'];
  $CategoryTarget = $banner_mobile_2['category2'];
  $PostIDTarget = $banner_mobile_2['postid2'];
  $OrderNum = $banner_mobile_2['campaign_order_id2'];
  $Image = $banner_mobile_2['image2'];
  $Url = $banner_mobile_2['url2'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_2['banner_mobile_script_2']) {
      echo $banner_mobile_2['banner_mobile_script_2'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "3":
   // Get the 'banner_mobile_3' field from the 'option' object
$banner_mobile_3 = get_field('banner_mobile_3', 'option');

// Check if the banner field exists
if ($banner_mobile_3) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_3['start_date3']);
  $end_date = strtotime($banner_mobile_3['end_date3']);
  $campaign_name = $banner_mobile_3['campaign_name3'];
  $delivering = $banner_mobile_3['delivering3'];
  $CategoryTarget = $banner_mobile_3['category3'];
  $PostIDTarget = $banner_mobile_3['postid3'];
  $OrderNum = $banner_mobile_3['campaign_order_id3'];
  $Image = $banner_mobile_3['image3'];
  $Url = $banner_mobile_3['url3'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_3['banner_mobile_script_3']) {
      echo $banner_mobile_3['banner_mobile_script_3'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "4":
   // Get the 'banner_mobile_4' field from the 'option' object
$banner_mobile_4 = get_field('banner_mobile_4', 'option');

// Check if the banner field exists
if ($banner_mobile_4) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_4['start_date4']);
  $end_date = strtotime($banner_mobile_4['end_date4']);
  $campaign_name = $banner_mobile_4['campaign_name4'];
  $delivering = $banner_mobile_4['delivering4'];
  $CategoryTarget = $banner_mobile_4['category4'];
  $PostIDTarget = $banner_mobile_4['postid4'];
  $OrderNum = $banner_mobile_4['campaign_order_id4'];
  $Image = $banner_mobile_4['image4'];
  $Url = $banner_mobile_4['url4'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_4['banner_mobile_script_4']) {
      echo $banner_mobile_4['banner_mobile_script_4'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "5":
  // Get the 'banner_mobile_5' field from the 'option' object
$banner_mobile_5 = get_field('banner_mobile_5', 'option');

// Check if the banner field exists
if ($banner_mobile_5) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_5['start_date5']);
  $end_date = strtotime($banner_mobile_5['end_date5']);
  $campaign_name = $banner_mobile_5['campaign_name5'];
  $delivering = $banner_mobile_5['delivering5'];
  $CategoryTarget = $banner_mobile_5['category5'];
  $PostIDTarget = $banner_mobile_5['postid5'];
  $OrderNum = $banner_mobile_5['campaign_order_id5'];
  $Image = $banner_mobile_5['image5'];
  $Url = $banner_mobile_5['url5'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_5['banner_mobile_script_5']) {
      echo $banner_mobile_5['banner_mobile_script_5'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "6":
  // Get the 'banner_mobile_6' field from the 'option' object
$banner_mobile_6 = get_field('banner_mobile_6', 'option');

// Check if the banner field exists
if ($banner_mobile_6) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_6['start_date6']);
  $end_date = strtotime($banner_mobile_6['end_date6']);
  $campaign_name = $banner_mobile_6['campaign_name6'];
  $delivering = $banner_mobile_6['delivering6'];
  $CategoryTarget = $banner_mobile_6['category6'];
  $PostIDTarget = $banner_mobile_6['postid6'];
  $OrderNum = $banner_mobile_6['campaign_order_id6'];
  $Image = $banner_mobile_6['image6'];
  $Url = $banner_mobile_6['url6'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_6['banner_mobile_script_6']) {
      echo $banner_mobile_6['banner_mobile_script_6'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "7":
  // Get the 'banner_mobile_7' field from the 'option' object
$banner_mobile_7 = get_field('banner_mobile_7', 'option');

// Check if the banner field exists
if ($banner_mobile_7) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_7['start_date7']);
  $end_date = strtotime($banner_mobile_7['end_date7']);
  $campaign_name = $banner_mobile_7['campaign_name7'];
  $delivering = $banner_mobile_7['delivering7'];
  $CategoryTarget = $banner_mobile_7['category7'];
  $PostIDTarget = $banner_mobile_7['postid7'];
  $OrderNum = $banner_mobile_7['campaign_order_id7'];
  $Image = $banner_mobile_7['image7'];
  $Url = $banner_mobile_7['url7'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_7['banner_mobile_script_7']) {
      echo $banner_mobile_7['banner_mobile_script_7'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "8":
  // Get the 'banner_mobile_8' field from the 'option' object
$banner_mobile_8 = get_field('banner_mobile_8', 'option');

// Check if the banner field exists
if ($banner_mobile_8) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_8['start_date8']);
  $end_date = strtotime($banner_mobile_8['end_date8']);
  $campaign_name = $banner_mobile_8['campaign_name8'];
  $delivering = $banner_mobile_8['delivering8'];
  $CategoryTarget = $banner_mobile_8['category8'];
  $PostIDTarget = $banner_mobile_8['postid8'];
  $OrderNum = $banner_mobile_8['campaign_order_id8'];
  $Image = $banner_mobile_8['image8'];
  $Url = $banner_mobile_8['url8'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_8['banner_mobile_script_8']) {
      echo $banner_mobile_8['banner_mobile_script_8'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "9":
   // Get the 'banner_mobile_9' field from the 'option' object
$banner_mobile_9 = get_field('banner_mobile_9', 'option');

// Check if the banner field exists
if ($banner_mobile_9) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_9['start_date9']);
  $end_date = strtotime($banner_mobile_9['end_date9']);
  $campaign_name = $banner_mobile_9['campaign_name9'];
  $delivering = $banner_mobile_9['delivering9'];
  $CategoryTarget = $banner_mobile_9['category9'];
  $PostIDTarget = $banner_mobile_9['postid9'];
  $OrderNum = $banner_mobile_9['campaign_order_id9'];
  $Image = $banner_mobile_9['image9'];
  $Url = $banner_mobile_9['url9'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_9['banner_mobile_script_9']) {
      echo $banner_mobile_9['banner_mobile_script_9'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "10":
   // Get the 'banner_mobile_10' field from the 'option' object
$banner_mobile_10 = get_field('banner_mobile_10', 'option');

// Check if the banner field exists
if ($banner_mobile_10) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_10['start_date10']);
  $end_date = strtotime($banner_mobile_10['end_date10']);
  $campaign_name = $banner_mobile_10['campaign_name10'];
  $delivering = $banner_mobile_10['delivering10'];
  $CategoryTarget = $banner_mobile_10['category10'];
  $PostIDTarget = $banner_mobile_10['postid10'];
  $OrderNum = $banner_mobile_10['campaign_order_id10'];
  $Image = $banner_mobile_10['image10'];
  $Url = $banner_mobile_10['url10'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_10['banner_mobile_script_10']) {
      echo $banner_mobile_10['banner_mobile_script_10'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"11":
   // Get the 'banner_mobile_11' field from the 'option' object
$banner_mobile_11 = get_field('banner_mobile_11', 'option');

// Check if the banner field exists
if ($banner_mobile_11) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_11['start_date11']);
  $end_date = strtotime($banner_mobile_11['end_date11']);
  $campaign_name = $banner_mobile_11['campaign_name11'];
  $delivering = $banner_mobile_11['delivering11'];
  $CategoryTarget = $banner_mobile_11['category11'];
  $PostIDTarget = $banner_mobile_11['postid11'];
  $OrderNum = $banner_mobile_11['campaign_order_id11'];
  $Image = $banner_mobile_11['image11'];
  $Url = $banner_mobile_11['url11'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_11['banner_mobile_script_11']) {
      echo $banner_mobile_11['banner_mobile_script_11'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"12":
  // Get the 'banner_mobile_12' field from the 'option' object
$banner_mobile_12 = get_field('banner_mobile_12', 'option');

// Check if the banner field exists
if ($banner_mobile_12) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_12['start_date12']);
  $end_date = strtotime($banner_mobile_12['end_date12']);
  $campaign_name = $banner_mobile_12['campaign_name12'];
  $delivering = $banner_mobile_12['delivering12'];
  $CategoryTarget = $banner_mobile_12['category12'];
  $PostIDTarget = $banner_mobile_12['postid12'];
  $OrderNum = $banner_mobile_12['campaign_order_id12'];
  $Image = $banner_mobile_12['image12'];
  $Url = $banner_mobile_12['url12'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_12['banner_mobile_script_12']) {
      echo $banner_mobile_12['banner_mobile_script_12'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"13":
  // Get the 'banner_mobile_13' field from the 'option' object
$banner_mobile_13 = get_field('banner_mobile_13', 'option');

// Check if the banner field exists
if ($banner_mobile_13) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_13['start_date13']);
  $end_date = strtotime($banner_mobile_13['end_date13']);
  $campaign_name = $banner_mobile_13['campaign_name13'];
  $delivering = $banner_mobile_13['delivering13'];
  $CategoryTarget = $banner_mobile_13['category13'];
  $PostIDTarget = $banner_mobile_13['postid13'];
  $OrderNum = $banner_mobile_13['campaign_order_id13'];
  $Image = $banner_mobile_13['image13'];
  $Url = $banner_mobile_13['url13'];


  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_13['banner_mobile_script_13']) {
      echo $banner_mobile_13['banner_mobile_script_13'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"14":
  // Get the 'banner_mobile_14' field from the 'option' object
$banner_mobile_14 = get_field('banner_mobile_14', 'option');

// Check if the banner field exists
if ($banner_mobile_14) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_14['start_date14']);
  $end_date = strtotime($banner_mobile_14['end_date14']);
  $campaign_name = $banner_mobile_14['campaign_name14'];
  $delivering = $banner_mobile_14['delivering14'];
  $CategoryTarget = $banner_mobile_14['category14'];
  $PostIDTarget = $banner_mobile_14['postid14'];
  $OrderNum = $banner_mobile_14['campaign_order_id14'];
  $Image = $banner_mobile_14['image14'];
  $Url = $banner_mobile_14['url14'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_14['banner_mobile_script_14']) {
      echo $banner_mobile_14['banner_mobile_script_14'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"15":
  // Get the 'banner_mobile_15' field from the 'option' object
$banner_mobile_15 = get_field('banner_mobile_15', 'option');

// Check if the banner field exists
if ($banner_mobile_15) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_15['start_date15']);
  $end_date = strtotime($banner_mobile_15['end_date15']);
  $campaign_name = $banner_mobile_15['campaign_name15'];
  $delivering = $banner_mobile_15['delivering15'];
  $CategoryTarget = $banner_mobile_15['category15'];
  $PostIDTarget = $banner_mobile_15['postid15'];
  $OrderNum = $banner_mobile_15['campaign_order_id15'];
  $Image = $banner_mobile_15['image15'];
  $Url = $banner_mobile_15['url15'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_15['banner_mobile_script_15']) {
      echo $banner_mobile_15['banner_mobile_script_15'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"16":
  // Get the 'banner_mobile_16' field from the 'option' object
$banner_mobile_16 = get_field('banner_mobile_16', 'option');

// Check if the banner field exists
if ($banner_mobile_16) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_16['start_date16']);
  $end_date = strtotime($banner_mobile_16['end_date16']);
  $campaign_name = $banner_mobile_16['campaign_name16'];
  $delivering = $banner_mobile_16['delivering16'];
  $CategoryTarget = $banner_mobile_16['category16'];
  $PostIDTarget = $banner_mobile_16['postid16'];
  $OrderNum = $banner_mobile_16['campaign_order_id16'];
  $Image = $banner_mobile_16['image16'];
  $Url = $banner_mobile_16['url16'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_16['banner_mobile_script_16']) {
      echo $banner_mobile_16['banner_mobile_script_16'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"17":
  // Get the 'banner_mobile_17' field from the 'option' object
$banner_mobile_17 = get_field('banner_mobile_17', 'option');

// Check if the banner field exists
if ($banner_mobile_17) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_17['start_date17']);
  $end_date = strtotime($banner_mobile_17['end_date17']);
  $campaign_name = $banner_mobile_17['campaign_name17'];
  $delivering = $banner_mobile_17['delivering17'];
  $CategoryTarget = $banner_mobile_17['category17'];
  $PostIDTarget = $banner_mobile_17['postid17'];
  $OrderNum = $banner_mobile_17['campaign_order_id17'];
  $Image = $banner_mobile_17['image17'];
  $Url = $banner_mobile_17['url17'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_17['banner_mobile_script_17']) {
      echo $banner_mobile_17['banner_mobile_script_17'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"18":
  // Get the 'banner_mobile_18' field from the 'option' object
$banner_mobile_18 = get_field('banner_mobile_18', 'option');

// Check if the banner field exists
if ($banner_mobile_18) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_18['start_date18']);
  $end_date = strtotime($banner_mobile_18['end_date18']);
  $campaign_name = $banner_mobile_18['campaign_name18'];
  $delivering = $banner_mobile_18['delivering18'];
  $CategoryTarget = $banner_mobile_18['category18'];
  $PostIDTarget = $banner_mobile_18['postid18'];
  $OrderNum = $banner_mobile_18['campaign_order_id18'];
  $Image = $banner_mobile_18['image18'];
  $Url = $banner_mobile_18['url18'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_18['banner_mobile_script_18']) {
      echo $banner_mobile_18['banner_mobile_script_18'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"19":
  // Get the 'banner_mobile_19' field from the 'option' object
$banner_mobile_19 = get_field('banner_mobile_19', 'option');

// Check if the banner field exists
if ($banner_mobile_19) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_19['start_date19']);
  $end_date = strtotime($banner_mobile_19['end_date19']);
  $campaign_name = $banner_mobile_19['campaign_name19'];
  $delivering = $banner_mobile_19['delivering19'];
  $CategoryTarget = $banner_mobile_19['category19'];
  $PostIDTarget = $banner_mobile_19['postid19'];
  $OrderNum = $banner_mobile_19['campaign_order_id19'];
  $Image = $banner_mobile_19['image19'];
  $Url = $banner_mobile_19['url19'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_19['banner_mobile_script_19']) {
      echo $banner_mobile_19['banner_mobile_script_19'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"20":
  // Get the 'banner_mobile_20' field from the 'option' object
$banner_mobile_20 = get_field('banner_mobile_20', 'option');

// Check if the banner field exists
if ($banner_mobile_20) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mobile_20['start_date20']);
  $end_date = strtotime($banner_mobile_20['end_date20']);
  $campaign_name = $banner_mobile_20['campaign_name20'];
  $delivering = $banner_mobile_20['delivering20'];
  $CategoryTarget = $banner_mobile_20['category20'];
  $PostIDTarget = $banner_mobile_20['postid20'];
  $OrderNum = $banner_mobile_20['campaign_order_id20'];
  $Image = $banner_mobile_20['image20'];
  $Url = $banner_mobile_20['url20'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mobile_20['banner_mobile_script_20']) {
      echo $banner_mobile_20['banner_mobile_script_20'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
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
</div>

<div class="commerce_hp_mobile">
<div class="commerce_ldr">
<div class="py-2">
<?php
if ($adinformation) {
    $adinformation = get_field('adinformation', 'option');
}
?>
<div class="d-flex justify-content-center p-2 text-dark" style="width:350px; margin: 0 auto; background-color: #dee2e6; position: relative;">Advertisement   <a class="text-decoration-none text-dark ms-2 me-2" href="<?php the_field( 'adinformation','option')?>" target='_blank'>
    &#9432;
  </a>
</div>

<div class="d-flex align-items-center justify-content-center" style="height:70px; width:350px; margin: 0 auto; background-color: #dee2e6; position: relative;">

<?php

$LowerLimit = 1;
$UpperLimit = 10;

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

// Get the 'banner_mobile_1' field from the 'option' object
$banner_mbt_1 = get_field('banner_mobile_1', 'option');

// Check if the banner field exists
if ($banner_mbt_1) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_1['start_date']);
  $end_date = strtotime($banner_mbt_1['end_date']);
  $campaign_name = $banner_mbt_1['campaign_name'];
  $delivering = $banner_mbt_1['delivering'];
  $CategoryTarget = $banner_mbt_1['category'];
  $PostIDTarget = $banner_mbt_1['postid'];
  $OrderNum = $banner_mbt_1['campaign_order_id'];
  $Image = $banner_mbt_1['image'];
  $Url = $banner_mbt_1['url'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_1['banner_mbt_script_1']) {
      echo $banner_mbt_1['banner_mbt_script_1'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';



  }
}


break;
case "2":
 // Get the 'banner_mobile_2' field from the 'option' object
$banner_mbt_2 = get_field('banner_mobile_2', 'option');

// Check if the banner field exists
if ($banner_mbt_2) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_2['start_date2']);
  $end_date = strtotime($banner_mbt_2['end_date2']);
  $campaign_name = $banner_mbt_2['campaign_name2'];
  $delivering = $banner_mbt_2['delivering2'];
  $CategoryTarget = $banner_mbt_2['category2'];
  $PostIDTarget = $banner_mbt_2['postid2'];
  $OrderNum = $banner_mbt_2['campaign_order_id2'];
  $Image = $banner_mbt_2['image2'];
  $Url = $banner_mbt_2['url2'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_2['banner_mbt_script_2']) {
      echo $banner_mbt_2['banner_mbt_script_2'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "3":
   // Get the 'banner_mobile_3' field from the 'option' object
$banner_mbt_3 = get_field('banner_mobile_3', 'option');

// Check if the banner field exists
if ($banner_mbt_3) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_3['start_date3']);
  $end_date = strtotime($banner_mbt_3['end_date3']);
  $campaign_name = $banner_mbt_3['campaign_name3'];
  $delivering = $banner_mbt_3['delivering3'];
  $CategoryTarget = $banner_mbt_3['category3'];
  $PostIDTarget = $banner_mbt_3['postid3'];
  $OrderNum = $banner_mbt_3['campaign_order_id3'];
  $Image = $banner_mbt_3['image3'];
  $Url = $banner_mbt_3['url3'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_3['banner_mbt_script_3']) {
      echo $banner_mbt_3['banner_mbt_script_3'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "4":
   // Get the 'banner_mobile_4' field from the 'option' object
$banner_mbt_4 = get_field('banner_mobile_4', 'option');

// Check if the banner field exists
if ($banner_mbt_4) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_4['start_date4']);
  $end_date = strtotime($banner_mbt_4['end_date4']);
  $campaign_name = $banner_mbt_4['campaign_name4'];
  $delivering = $banner_mbt_4['delivering4'];
  $CategoryTarget = $banner_mbt_4['category4'];
  $PostIDTarget = $banner_mbt_4['postid4'];
  $OrderNum = $banner_mbt_4['campaign_order_id4'];
  $Image = $banner_mbt_4['image4'];
  $Url = $banner_mbt_4['url4'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_4['banner_mbt_script_4']) {
      echo $banner_mbt_4['banner_mbt_script_4'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "5":
  // Get the 'banner_mobile_5' field from the 'option' object
$banner_mbt_5 = get_field('banner_mobile_5', 'option');

// Check if the banner field exists
if ($banner_mbt_5) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_5['start_date5']);
  $end_date = strtotime($banner_mbt_5['end_date5']);
  $campaign_name = $banner_mbt_5['campaign_name5'];
  $delivering = $banner_mbt_5['delivering5'];
  $CategoryTarget = $banner_mbt_5['category5'];
  $PostIDTarget = $banner_mbt_5['postid5'];
  $OrderNum = $banner_mbt_5['campaign_order_id5'];
  $Image = $banner_mbt_5['image5'];
  $Url = $banner_mbt_5['url5'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_5['banner_mbt_script_5']) {
      echo $banner_mbt_5['banner_mbt_script_5'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "6":
  // Get the 'banner_mobile_6' field from the 'option' object
$banner_mbt_6 = get_field('banner_mobile_6', 'option');

// Check if the banner field exists
if ($banner_mbt_6) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_6['start_date6']);
  $end_date = strtotime($banner_mbt_6['end_date6']);
  $campaign_name = $banner_mbt_6['campaign_name6'];
  $delivering = $banner_mbt_6['delivering6'];
  $CategoryTarget = $banner_mbt_6['category6'];
  $PostIDTarget = $banner_mbt_6['postid6'];
  $OrderNum = $banner_mbt_6['campaign_order_id6'];
  $Image = $banner_mbt_6['image6'];
  $Url = $banner_mbt_6['url6'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_6['banner_mbt_script_6']) {
      echo $banner_mbt_6['banner_mbt_script_6'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "7":
  // Get the 'banner_mobile_7' field from the 'option' object
$banner_mbt_7 = get_field('banner_mobile_7', 'option');

// Check if the banner field exists
if ($banner_mbt_7) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_7['start_date7']);
  $end_date = strtotime($banner_mbt_7['end_date7']);
  $campaign_name = $banner_mbt_7['campaign_name7'];
  $delivering = $banner_mbt_7['delivering7'];
  $CategoryTarget = $banner_mbt_7['category7'];
  $PostIDTarget = $banner_mbt_7['postid7'];
  $OrderNum = $banner_mbt_7['campaign_order_id7'];
  $Image = $banner_mbt_7['image7'];
  $Url = $banner_mbt_7['url7'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_7['banner_mbt_script_7']) {
      echo $banner_mbt_7['banner_mbt_script_7'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "8":
  // Get the 'banner_mobile_8' field from the 'option' object
$banner_mbt_8 = get_field('banner_mobile_8', 'option');

// Check if the banner field exists
if ($banner_mbt_8) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_8['start_date8']);
  $end_date = strtotime($banner_mbt_8['end_date8']);
  $campaign_name = $banner_mbt_8['campaign_name8'];
  $delivering = $banner_mbt_8['delivering8'];
  $CategoryTarget = $banner_mbt_8['category8'];
  $PostIDTarget = $banner_mbt_8['postid8'];
  $OrderNum = $banner_mbt_8['campaign_order_id8'];
  $Image = $banner_mbt_8['image8'];
  $Url = $banner_mbt_8['url8'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_8['banner_mbt_script_8']) {
      echo $banner_mbt_8['banner_mbt_script_8'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "9":
   // Get the 'banner_mobile_9' field from the 'option' object
$banner_mbt_9 = get_field('banner_mobile_9', 'option');

// Check if the banner field exists
if ($banner_mbt_9) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_9['start_date9']);
  $end_date = strtotime($banner_mbt_9['end_date9']);
  $campaign_name = $banner_mbt_9['campaign_name9'];
  $delivering = $banner_mbt_9['delivering9'];
  $CategoryTarget = $banner_mbt_9['category9'];
  $PostIDTarget = $banner_mbt_9['postid9'];
  $OrderNum = $banner_mbt_9['campaign_order_id9'];
  $Image = $banner_mbt_9['image9'];
  $Url = $banner_mbt_9['url9'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_9['banner_mbt_script_9']) {
      echo $banner_mbt_9['banner_mbt_script_9'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "10":
   // Get the 'banner_mobile_10' field from the 'option' object
$banner_mbt_10 = get_field('banner_mobile_10', 'option');

// Check if the banner field exists
if ($banner_mbt_10) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_10['start_date10']);
  $end_date = strtotime($banner_mbt_10['end_date10']);
  $campaign_name = $banner_mbt_10['campaign_name10'];
  $delivering = $banner_mbt_10['delivering10'];
  $CategoryTarget = $banner_mbt_10['category10'];
  $PostIDTarget = $banner_mbt_10['postid10'];
  $OrderNum = $banner_mbt_10['campaign_order_id10'];
  $Image = $banner_mbt_10['image10'];
  $Url = $banner_mbt_10['url10'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_10['banner_mbt_script_10']) {
      echo $banner_mbt_10['banner_mbt_script_10'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"11":
   // Get the 'banner_mobile_11' field from the 'option' object
$banner_mbt_11 = get_field('banner_mobile_11', 'option');

// Check if the banner field exists
if ($banner_mbt_11) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_11['start_date11']);
  $end_date = strtotime($banner_mbt_11['end_date11']);
  $campaign_name = $banner_mbt_11['campaign_name11'];
  $delivering = $banner_mbt_11['delivering11'];
  $CategoryTarget = $banner_mbt_11['category11'];
  $PostIDTarget = $banner_mbt_11['postid11'];
  $OrderNum = $banner_mbt_11['campaign_order_id11'];
  $Image = $banner_mbt_11['image11'];
  $Url = $banner_mbt_11['url11'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_11['banner_mbt_script_11']) {
      echo $banner_mbt_11['banner_mbt_script_11'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"12":
  // Get the 'banner_mobile_12' field from the 'option' object
$banner_mbt_12 = get_field('banner_mobile_12', 'option');

// Check if the banner field exists
if ($banner_mbt_12) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_12['start_date12']);
  $end_date = strtotime($banner_mbt_12['end_date12']);
  $campaign_name = $banner_mbt_12['campaign_name12'];
  $delivering = $banner_mbt_12['delivering12'];
  $CategoryTarget = $banner_mbt_12['category12'];
  $PostIDTarget = $banner_mbt_12['postid12'];
  $OrderNum = $banner_mbt_12['campaign_order_id12'];
  $Image = $banner_mbt_12['image12'];
  $Url = $banner_mbt_12['url12'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_12['banner_mbt_script_12']) {
      echo $banner_mbt_12['banner_mbt_script_12'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"13":
  // Get the 'banner_mobile_13' field from the 'option' object
$banner_mbt_13 = get_field('banner_mobile_13', 'option');

// Check if the banner field exists
if ($banner_mbt_13) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_13['start_date13']);
  $end_date = strtotime($banner_mbt_13['end_date13']);
  $campaign_name = $banner_mbt_13['campaign_name13'];
  $delivering = $banner_mbt_13['delivering13'];
  $CategoryTarget = $banner_mbt_13['category13'];
  $PostIDTarget = $banner_mbt_13['postid13'];
  $OrderNum = $banner_mbt_13['campaign_order_id13'];
  $Image = $banner_mbt_13['image13'];
  $Url = $banner_mbt_13['url13'];


  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_13['banner_mbt_script_13']) {
      echo $banner_mbt_13['banner_mbt_script_13'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"14":
  // Get the 'banner_mobile_14' field from the 'option' object
$banner_mbt_14 = get_field('banner_mobile_14', 'option');

// Check if the banner field exists
if ($banner_mbt_14) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_14['start_date14']);
  $end_date = strtotime($banner_mbt_14['end_date14']);
  $campaign_name = $banner_mbt_14['campaign_name14'];
  $delivering = $banner_mbt_14['delivering14'];
  $CategoryTarget = $banner_mbt_14['category14'];
  $PostIDTarget = $banner_mbt_14['postid14'];
  $OrderNum = $banner_mbt_14['campaign_order_id14'];
  $Image = $banner_mbt_14['image14'];
  $Url = $banner_mbt_14['url14'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_14['banner_mbt_script_14']) {
      echo $banner_mbt_14['banner_mbt_script_14'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"15":
  // Get the 'banner_mobile_15' field from the 'option' object
$banner_mbt_15 = get_field('banner_mobile_15', 'option');

// Check if the banner field exists
if ($banner_mbt_15) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_15['start_date15']);
  $end_date = strtotime($banner_mbt_15['end_date15']);
  $campaign_name = $banner_mbt_15['campaign_name15'];
  $delivering = $banner_mbt_15['delivering15'];
  $CategoryTarget = $banner_mbt_15['category15'];
  $PostIDTarget = $banner_mbt_15['postid15'];
  $OrderNum = $banner_mbt_15['campaign_order_id15'];
  $Image = $banner_mbt_15['image15'];
  $Url = $banner_mbt_15['url15'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_15['banner_mbt_script_15']) {
      echo $banner_mbt_15['banner_mbt_script_15'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"16":
  // Get the 'banner_mobile_16' field from the 'option' object
$banner_mbt_16 = get_field('banner_mobile_16', 'option');

// Check if the banner field exists
if ($banner_mbt_16) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_16['start_date16']);
  $end_date = strtotime($banner_mbt_16['end_date16']);
  $campaign_name = $banner_mbt_16['campaign_name16'];
  $delivering = $banner_mbt_16['delivering16'];
  $CategoryTarget = $banner_mbt_16['category16'];
  $PostIDTarget = $banner_mbt_16['postid16'];
  $OrderNum = $banner_mbt_16['campaign_order_id16'];
  $Image = $banner_mbt_16['image16'];
  $Url = $banner_mbt_16['url16'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_16['banner_mbt_script_16']) {
      echo $banner_mbt_16['banner_mbt_script_16'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"17":
  // Get the 'banner_mobile_17' field from the 'option' object
$banner_mbt_17 = get_field('banner_mobile_17', 'option');

// Check if the banner field exists
if ($banner_mbt_17) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_17['start_date17']);
  $end_date = strtotime($banner_mbt_17['end_date17']);
  $campaign_name = $banner_mbt_17['campaign_name17'];
  $delivering = $banner_mbt_17['delivering17'];
  $CategoryTarget = $banner_mbt_17['category17'];
  $PostIDTarget = $banner_mbt_17['postid17'];
  $OrderNum = $banner_mbt_17['campaign_order_id17'];
  $Image = $banner_mbt_17['image17'];
  $Url = $banner_mbt_17['url17'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_17['banner_mbt_script_17']) {
      echo $banner_mbt_17['banner_mbt_script_17'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"18":
  // Get the 'banner_mobile_18' field from the 'option' object
$banner_mbt_18 = get_field('banner_mobile_18', 'option');

// Check if the banner field exists
if ($banner_mbt_18) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_18['start_date18']);
  $end_date = strtotime($banner_mbt_18['end_date18']);
  $campaign_name = $banner_mbt_18['campaign_name18'];
  $delivering = $banner_mbt_18['delivering18'];
  $CategoryTarget = $banner_mbt_18['category18'];
  $PostIDTarget = $banner_mbt_18['postid18'];
  $OrderNum = $banner_mbt_18['campaign_order_id18'];
  $Image = $banner_mbt_18['image18'];
  $Url = $banner_mbt_18['url18'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_18['banner_mbt_script_18']) {
      echo $banner_mbt_18['banner_mbt_script_18'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"19":
  // Get the 'banner_mobile_19' field from the 'option' object
$banner_mbt_19 = get_field('banner_mobile_19', 'option');

// Check if the banner field exists
if ($banner_mbt_19) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_19['start_date19']);
  $end_date = strtotime($banner_mbt_19['end_date19']);
  $campaign_name = $banner_mbt_19['campaign_name19'];
  $delivering = $banner_mbt_19['delivering19'];
  $CategoryTarget = $banner_mbt_19['category19'];
  $PostIDTarget = $banner_mbt_19['postid19'];
  $OrderNum = $banner_mbt_19['campaign_order_id19'];
  $Image = $banner_mbt_19['image19'];
  $Url = $banner_mbt_19['url19'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_19['banner_mbt_script_19']) {
      echo $banner_mbt_19['banner_mbt_script_19'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"20":
  // Get the 'banner_mobile_20' field from the 'option' object
$banner_mbt_20 = get_field('banner_mobile_20', 'option');

// Check if the banner field exists
if ($banner_mbt_20) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_mbt_20['start_date20']);
  $end_date = strtotime($banner_mbt_20['end_date20']);
  $campaign_name = $banner_mbt_20['campaign_name20'];
  $delivering = $banner_mbt_20['delivering20'];
  $CategoryTarget = $banner_mbt_20['category20'];
  $PostIDTarget = $banner_mbt_20['postid20'];
  $OrderNum = $banner_mbt_20['campaign_order_id20'];
  $Image = $banner_mbt_20['image20'];
  $Url = $banner_mbt_20['url20'];

  // Get the desktop header backup image and URL from the 'option' object
  $mobile_subs_ad_image = get_field('mobile_image', 'option');
  $mobile_subs_ad_url = get_field('mobile_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_mbt_20['banner_mbt_script_20']) {
      echo $banner_mbt_20['banner_mbt_script_20'];
    } else {
      // Otherwise, display the banner image
      echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name .'"></a>';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $mobile_subs_ad_url . '" target="_blank"><img src="' . $mobile_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
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
</div>