	

function cwmp_add_content_watermark( $content )
{
	
	// in case we want to add to earlier versions
	if (  is_feed() )
	{
		return $content . 
		"Created by Falkon Productions, copyright  " . 
		date("Y") . 
		" all rights reserved.";
	}
	
	return $content;
}

add_filter("the_content","cwmp_add_content_watermark");
