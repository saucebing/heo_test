<?php
class MessageModel extends Model
{
	protected $_validate = array(
			array('content','1,255','String Length must be less than 255',0,'length'),
				);
}
?>
