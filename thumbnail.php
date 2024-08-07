<?
#################################################################
## PHP Pro Bid v6.07															##
##-------------------------------------------------------------##
## Copyright ©2007 PHP Pro Software LTD. All rights reserved.	##
##-------------------------------------------------------------##
#################################################################

session_start();

include_once('includes/global.php');
include_once('includes/class_image.php');

$image = new image();

(string) $pic = null;

$pic = eregi_replace(' ','%20',$_GET['pic']);

$thumbnail_width = abs(intval($_GET['w']));

$is_square = ($_GET['sq']=='Y')? true : false;
$is_border = ($_GET['b']=='Y') ? true : false;

$pic_no_spaces = eregi_replace('%20','',$pic);

$pic_cached = eregi_replace($image->image_basedir,'',$pic_no_spaces);

$allowed_extension = $image->allowed_extension($pic);

/* check to see if file already exists in cache, and output it with no processing if it does */
$cached_filename = $image->set_cache_filename($pic_cached, $thumbnail_width, $is_square, $is_border);

if (is_file($cached_filename) && $allowed_extension) /* display cached filename */
{	
	$photo = file_get_contents($cached_filename);
	
	ob_start();
	header("Content-type: image/jpeg");
	print($photo);
	ob_end_flush();
}
else /* create new thumbnail, and add it into the cache directory as well */
{

	$allowed_widths = array(50, 80, 100, 150, 250, 300, 500, $layout['hpfeat_width'], $layout['catfeat_width']);
	//$allowed_widths = sort($allowed_widths, SORT_NUMERIC);

	if (!in_array($thumbnail_width, $allowed_widths))
	{
		$difference = 0;
		$new_width = $thumbnail_width;
		foreach ($allowed_widths as $value)
		{
			$diff = abs($thumbnail_width - $value);

			if ($diff < $difference || $difference == 0)
			{
				$difference = $diff;
				$new_width = $value;
			}
		}

		$thumbnail_width = $new_width;
	}

	(array) $info = null;
	
	$info = getimagesize($pic);
	list($im_width, $im_height, $im_type, $im_attr) = $info;

	$is_pic = $db->count_rows('auction_media', "WHERE media_url='" . $db->rem_special_chars($pic) . "'");

	if ($session->value('adminarea') == 'Active')
	{
		$is_pic = 1;
	}
	else if (!$is_pic)
	{
		$is_pic = $db->count_rows('payment_options', "WHERE logo_url='" . $db->rem_special_chars($pic) . "'"); // check if payment logo
	
		if (!$is_pic)
		{
			$is_pic = ($setts['site_logo_path'] == $db->rem_special_chars($pic)) ? 1 : 0; // site logo
			
			if (!$is_pic)
			{
				$is_pic = $db->count_rows('users', "WHERE shop_logo_path='" . $db->rem_special_chars($pic) . "'"); // check if store logo	
				
				if (!$is_pic)
				{
					$is_pic = $db->count_rows('adverts', "WHERE advert_img_path='" . $db->rem_special_chars($pic) . "'"); // check if advert thumb
				}
			}
		}
	}
	$is_pic = ((eregi('images/', $pic) || eregi('noimg.gif', $pic)) && !eregi('http', $pic)) ? 1 : $is_pic;

	if (!$is_pic || empty($info) || $im_type>3) $pic = 'images/broken.gif';
	
	if (isset($pic) && $thumbnail_width>0 && $allowed_extension)
	{
		header('Content-type: image/jpeg');

		$cache_output = $image->set_cache_filename($pic_cached, $thumbnail_width, $is_square, $is_border);
		$image->generate_thumb($pic, $thumbnail_width, $is_square, $is_border, $cache_output);
		header('Location: ' . $cache_output);			
	}	
	else if (!isset($pic))
	{
		echo "<strong>ERROR:</strong> No image submitted";
	}
	else if ($thumbnail_width<=0)
	{
		echo "<strong>ERROR:</strong> Invalid resizing option";
	}
	else if (!$allowed_extension)
	{
		echo "<strong>ERROR:</strong> Prohibited file extension";
	}
}
?>