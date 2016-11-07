<?php 

	function validate_email($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
		{
			return false;
		}else
		{
			return true;
		}
	}

	function required_field($field){
		if(trim($field) == '')
		{
			return false;
		}else
		{
			return true;
		}
	}

	function url_valid($url)
	{
		if(filter_var($url, FILTER_VALIDATE_URL) === FALSE)
		{
			return false;
		}else
		{
			return true;
		}
	}

 ?>