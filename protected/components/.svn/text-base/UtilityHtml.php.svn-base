<?php
class utilityhtml{
	
public static function getImagetitle($status) {
	if ($status == 1 || strtolower($status) == 'yes') {
		return 'Active';
	} else {
		return 'Inactive';
	}
}

public static function getStatusImage($status) {
	if ($status == 1 || strtolower($status) == 'yes') {
		return Yii::app()->request->baseUrl . '/images/checked.png';
	} else {
		return Yii::app()->request->baseUrl . '/images/unchecked.png';
	}
}
}
