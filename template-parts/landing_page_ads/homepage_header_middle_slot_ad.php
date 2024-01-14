<div class="commerce_hp_desktop">
<div class="commerce_ldr">
<div class="py-2">  
<div class="d-flex justify-content-center p-2 text-dark" style="width:980px; margin: 0 auto; background-color: #dee2e6;">Advertisment</div>
<div class="d-flex align-items-center justify-content-center" style="height:270px; width:980px; margin: 0 auto; background-color: #dee2e6;">

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
    // Do something with $post_id
  endwhile;
endif;

//$advert = 1;

switch ($advert) {
case "1":

// Get the 'banner_desktop_middle_1' field from the 'option' object
$banner_dm_1 = get_field('banner_desktop_middle_1', 'option');

// Check if the banner field exists
if ($banner_dm_1) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_1['start_date']);
  $end_date = strtotime($banner_dm_1['end_date']);
  $campaign_name = $banner_dm_1['campaign_name'];
  $delivering = $banner_dm_1['delivering'];
  $CategoryTarget = $banner_dm_1['category'];
  $PostIDTarget = $banner_dm_1['postid'];
  $OrderNum = $banner_dm_1['campaign_order_id'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_1['banner_dm_script_1']) {
      echo $banner_dm_1['banner_dm_script_1'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';



  }
}


break;
case "2":
 // Get the 'banner_desktop_middle_2' field from the 'option' object
$banner_dm_2 = get_field('banner_desktop_middle_2', 'option');

// Check if the banner field exists
if ($banner_dm_2) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_2['start_date2']);
  $end_date = strtotime($banner_dm_2['end_date2']);
  $campaign_name = $banner_dm_2['campaign_name2'];
  $delivering = $banner_dm_2['delivering2'];
  $CategoryTarget = $banner_dm_2['category2'];
  $PostIDTarget = $banner_dm_2['postid2'];
  $OrderNum = $banner_dm_2['campaign_order_id2'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_2['banner_dm_script_2']) {
      echo $banner_dm_2['banner_dm_script_2'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "3":
   // Get the 'banner_desktop_middle_3' field from the 'option' object
$banner_dm_3 = get_field('banner_desktop_middle_3', 'option');

// Check if the banner field exists
if ($banner_dm_3) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_3['start_date3']);
  $end_date = strtotime($banner_dm_3['end_date3']);
  $campaign_name = $banner_dm_3['campaign_name3'];
  $delivering = $banner_dm_3['delivering3'];
  $CategoryTarget = $banner_dm_3['category3'];
  $PostIDTarget = $banner_dm_3['postid3'];
  $OrderNum = $banner_dm_3['campaign_order_id3'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_3['banner_dm_script_3']) {
      echo $banner_dm_3['banner_dm_script_3'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "4":
   // Get the 'banner_desktop_middle_4' field from the 'option' object
$banner_dm_4 = get_field('banner_desktop_middle_4', 'option');

// Check if the banner field exists
if ($banner_dm_4) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_4['start_date4']);
  $end_date = strtotime($banner_dm_4['end_date4']);
  $campaign_name = $banner_dm_4['campaign_name4'];
  $delivering = $banner_dm_4['delivering4'];
  $CategoryTarget = $banner_dm_4['category4'];
  $PostIDTarget = $banner_dm_4['postid4'];
  $OrderNum = $banner_dm_4['campaign_order_id4'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_4['banner_dm_script_4']) {
      echo $banner_dm_4['banner_dm_script_4'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "5":
  // Get the 'banner_desktop_middle_5' field from the 'option' object
$banner_dm_5 = get_field('banner_desktop_middle_5', 'option');

// Check if the banner field exists
if ($banner_dm_5) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_5['start_date5']);
  $end_date = strtotime($banner_dm_5['end_date5']);
  $campaign_name = $banner_dm_5['campaign_name5'];
  $delivering = $banner_dm_5['delivering5'];
  $CategoryTarget = $banner_dm_5['category5'];
  $PostIDTarget = $banner_dm_5['postid5'];
  $OrderNum = $banner_dm_5['campaign_order_id5'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_5['banner_dm_script_5']) {
      echo $banner_dm_5['banner_dm_script_5'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "6":
  // Get the 'banner_desktop_middle_6' field from the 'option' object
$banner_dm_6 = get_field('banner_desktop_middle_6', 'option');

// Check if the banner field exists
if ($banner_dm_6) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_6['start_date6']);
  $end_date = strtotime($banner_dm_6['end_date6']);
  $campaign_name = $banner_dm_6['campaign_name6'];
  $delivering = $banner_dm_6['delivering6'];
  $CategoryTarget = $banner_dm_6['category6'];
  $PostIDTarget = $banner_dm_6['postid6'];
  $OrderNum = $banner_dm_6['campaign_order_id6'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_6['banner_dm_script_6']) {
      echo $banner_dm_6['banner_dm_script_6'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "7":
  // Get the 'banner_desktop_middle_7' field from the 'option' object
$banner_dm_7 = get_field('banner_desktop_middle_7', 'option');

// Check if the banner field exists
if ($banner_dm_7) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_7['start_date7']);
  $end_date = strtotime($banner_dm_7['end_date7']);
  $campaign_name = $banner_dm_7['campaign_name7'];
  $delivering = $banner_dm_7['delivering7'];
  $CategoryTarget = $banner_dm_7['category7'];
  $PostIDTarget = $banner_dm_7['postid7'];
  $OrderNum = $banner_dm_7['campaign_order_id7'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_7['banner_dm_script_7']) {
      echo $banner_dm_7['banner_dm_script_7'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "8":
  // Get the 'banner_desktop_middle_8' field from the 'option' object
$banner_dm_8 = get_field('banner_desktop_middle_8', 'option');

// Check if the banner field exists
if ($banner_dm_8) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_8['start_date8']);
  $end_date = strtotime($banner_dm_8['end_date8']);
  $campaign_name = $banner_dm_8['campaign_name8'];
  $delivering = $banner_dm_8['delivering8'];
  $CategoryTarget = $banner_dm_8['category8'];
  $PostIDTarget = $banner_dm_8['postid8'];
  $OrderNum = $banner_dm_8['campaign_order_id8'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_8['banner_dm_script_8']) {
      echo $banner_dm_8['banner_dm_script_8'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "9":
   // Get the 'banner_desktop_middle_9' field from the 'option' object
$banner_dm_9 = get_field('banner_desktop_middle_9', 'option');

// Check if the banner field exists
if ($banner_dm_9) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_9['start_date9']);
  $end_date = strtotime($banner_dm_9['end_date9']);
  $campaign_name = $banner_dm_9['campaign_name9'];
  $delivering = $banner_dm_9['delivering9'];
  $CategoryTarget = $banner_dm_9['category9'];
  $PostIDTarget = $banner_dm_9['postid9'];
  $OrderNum = $banner_dm_9['campaign_order_id9'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_9['banner_dm_script_9']) {
      echo $banner_dm_9['banner_dm_script_9'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case "10":
   // Get the 'banner_desktop_middle_10' field from the 'option' object
$banner_dm_10 = get_field('banner_desktop_middle_10', 'option');

// Check if the banner field exists
if ($banner_dm_10) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_10['start_date10']);
  $end_date = strtotime($banner_dm_10['end_date10']);
  $campaign_name = $banner_dm_10['campaign_name10'];
  $delivering = $banner_dm_10['delivering10'];
  $CategoryTarget = $banner_dm_10['category10'];
  $PostIDTarget = $banner_dm_10['postid10'];
  $OrderNum = $banner_dm_10['campaign_order_id10'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_10['banner_dm_script_10']) {
      echo $banner_dm_10['banner_dm_script_10'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"11":
   // Get the 'banner_desktop_middle_11' field from the 'option' object
$banner_dm_11 = get_field('banner_desktop_middle_11', 'option');

// Check if the banner field exists
if ($banner_dm_11) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_11['start_date11']);
  $end_date = strtotime($banner_dm_11['end_date11']);
  $campaign_name = $banner_dm_11['campaign_name11'];
  $delivering = $banner_dm_11['delivering11'];
  $CategoryTarget = $banner_dm_11['category11'];
  $PostIDTarget = $banner_dm_11['postid11'];
  $OrderNum = $banner_dm_11['campaign_order_id11'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_11['banner_dm_script_11']) {
      echo $banner_dm_11['banner_dm_script_11'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"12":
  // Get the 'banner_desktop_middle_12' field from the 'option' object
$banner_dm_12 = get_field('banner_desktop_middle_12', 'option');

// Check if the banner field exists
if ($banner_dm_12) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_12['start_date12']);
  $end_date = strtotime($banner_dm_12['end_date12']);
  $campaign_name = $banner_dm_12['campaign_name12'];
  $delivering = $banner_dm_12['delivering12'];
  $CategoryTarget = $banner_dm_12['category12'];
  $PostIDTarget = $banner_dm_12['postid12'];
  $OrderNum = $banner_dm_12['campaign_order_id12'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_12['banner_dm_script_12']) {
      echo $banner_dm_12['banner_dm_script_12'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"13":
  // Get the 'banner_desktop_middle_13' field from the 'option' object
$banner_dm_13 = get_field('banner_desktop_middle_13', 'option');

// Check if the banner field exists
if ($banner_dm_13) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_13['start_date13']);
  $end_date = strtotime($banner_dm_13['end_date13']);
  $campaign_name = $banner_dm_13['campaign_name13'];
  $delivering = $banner_dm_13['delivering13'];
  $CategoryTarget = $banner_dm_13['category13'];
  $PostIDTarget = $banner_dm_13['postid13'];
  $OrderNum = $banner_dm_13['campaign_order_id13'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_13['banner_dm_script_13']) {
      echo $banner_dm_13['banner_dm_script_13'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"14":
  // Get the 'banner_desktop_middle_14' field from the 'option' object
$banner_dm_14 = get_field('banner_desktop_middle_14', 'option');

// Check if the banner field exists
if ($banner_dm_14) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_14['start_date14']);
  $end_date = strtotime($banner_dm_14['end_date14']);
  $campaign_name = $banner_dm_14['campaign_name14'];
  $delivering = $banner_dm_14['delivering14'];
  $CategoryTarget = $banner_dm_14['category14'];
  $PostIDTarget = $banner_dm_14['postid14'];
  $OrderNum = $banner_dm_14['campaign_order_id14'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_14['banner_dm_script_14']) {
      echo $banner_dm_14['banner_dm_script_14'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"15":
  // Get the 'banner_desktop_middle_15' field from the 'option' object
$banner_dm_15 = get_field('banner_desktop_middle_15', 'option');

// Check if the banner field exists
if ($banner_dm_15) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_15['start_date15']);
  $end_date = strtotime($banner_dm_15['end_date15']);
  $campaign_name = $banner_dm_15['campaign_name15'];
  $delivering = $banner_dm_15['delivering15'];
  $CategoryTarget = $banner_dm_15['category15'];
  $PostIDTarget = $banner_dm_15['postid15'];
  $OrderNum = $banner_dm_15['campaign_order_id15'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_15['banner_dm_script_15']) {
      echo $banner_dm_15['banner_dm_script_15'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"16":
  // Get the 'banner_desktop_middle_16' field from the 'option' object
$banner_dm_16 = get_field('banner_desktop_middle_16', 'option');

// Check if the banner field exists
if ($banner_dm_16) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_16['start_date16']);
  $end_date = strtotime($banner_dm_16['end_date16']);
  $campaign_name = $banner_dm_16['campaign_name16'];
  $delivering = $banner_dm_16['delivering16'];
  $CategoryTarget = $banner_dm_16['category16'];
  $PostIDTarget = $banner_dm_16['postid16'];
  $OrderNum = $banner_dm_16['campaign_order_id16'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_16['banner_dm_script_16']) {
      echo $banner_dm_16['banner_dm_script_16'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"17":
  // Get the 'banner_desktop_middle_17' field from the 'option' object
$banner_dm_17 = get_field('banner_desktop_middle_17', 'option');

// Check if the banner field exists
if ($banner_dm_17) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_17['start_date17']);
  $end_date = strtotime($banner_dm_17['end_date17']);
  $campaign_name = $banner_dm_17['campaign_name17'];
  $delivering = $banner_dm_17['delivering17'];
  $CategoryTarget = $banner_dm_17['category17'];
  $PostIDTarget = $banner_dm_17['postid17'];
  $OrderNum = $banner_dm_17['campaign_order_id17'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_17['banner_dm_script_17']) {
      echo $banner_dm_17['banner_dm_script_17'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"18":
  // Get the 'banner_desktop_middle_18' field from the 'option' object
$banner_dm_18 = get_field('banner_desktop_middle_18', 'option');

// Check if the banner field exists
if ($banner_dm_18) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_18['start_date18']);
  $end_date = strtotime($banner_dm_18['end_date18']);
  $campaign_name = $banner_dm_18['campaign_name18'];
  $delivering = $banner_dm_18['delivering18'];
  $CategoryTarget = $banner_dm_18['category18'];
  $PostIDTarget = $banner_dm_18['postid18'];
  $OrderNum = $banner_dm_18['campaign_order_id18'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_18['banner_dm_script_18']) {
      echo $banner_dm_18['banner_dm_script_18'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"19":
  // Get the 'banner_desktop_middle_19' field from the 'option' object
$banner_dm_19 = get_field('banner_desktop_middle_19', 'option');

// Check if the banner field exists
if ($banner_dm_19) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_19['start_date19']);
  $end_date = strtotime($banner_dm_19['end_date19']);
  $campaign_name = $banner_dm_19['campaign_name19'];
  $delivering = $banner_dm_19['delivering19'];
  $CategoryTarget = $banner_dm_19['category19'];
  $PostIDTarget = $banner_dm_19['postid19'];
  $OrderNum = $banner_dm_19['campaign_order_id19'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_19['banner_dm_script_19']) {
      echo $banner_dm_19['banner_dm_script_19'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
  }
}
break;
case"20":
  // Get the 'banner_desktop_middle_20' field from the 'option' object
$banner_dm_20 = get_field('banner_desktop_middle_20', 'option');

// Check if the banner field exists
if ($banner_dm_20) {

  // Extract the start and end dates, campaign name, delivering status, category target, post ID target, and order number from the banner field
  $start_date = strtotime($banner_dm_20['start_date20']);
  $end_date = strtotime($banner_dm_20['end_date20']);
  $campaign_name = $banner_dm_20['campaign_name20'];
  $delivering = $banner_dm_20['delivering20'];
  $CategoryTarget = $banner_dm_20['category20'];
  $PostIDTarget = $banner_dm_20['postid20'];
  $OrderNum = $banner_dm_20['campaign_order_id20'];

  // Get the desktop header backup image and URL from the 'option' object
  $desktop_subs_ad_image = get_field('desktop_image', 'option');
  $desktop_subs_ad_url = get_field('desktop_url', 'option');

  // Get the current date and time
  $current_date = time();

  // Check if the banner is being delivered, the current date is between the start and end dates, and if the category or post ID matches the target
   if ($delivering == 'yes' && $current_date >= $start_date && $current_date <= $end_date) {

    // If the banner has a script, display it
    if ($banner_dm_20['banner_dm_script_20']) {
      echo $banner_dm_20['banner_dm_script_20'];
    } else {
      // Otherwise, display the banner image
      echo 'Banner image';
    }

    // Display additional information about the banner
    echo "<!-- Advert details: " . $campaign_name ." | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";

  } else {
    // If the banner is not being delivered or the current date is not within the start and end dates, display the desktop header backup image
    echo '<a href="' . $desktop_subs_ad_url . '" target="_blank"><img src="' . $desktop_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
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
<div class="d-flex justify-content-center p-2 text-dark" style="width:350px; margin: 0 auto; background-color: #dee2e6;">Advertisment</div>
<div class="d-flex align-items-center justify-content-center" style="height:70px; width:350px; margin: 0 auto; background-color: #dee2e6;">



</div>
</div>
</div>
</div>
</div>