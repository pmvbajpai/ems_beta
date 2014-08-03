<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $userData; // Holds an activeRecord with current user. NULL if guest

	/* public function beforeAction($action) {
		$this->allowUser($this->userData['RoleId'], Yii::app()->controller->id, Yii::app()->controller->action->id);
		return true;
	} */
	
	public function init() {
		//Yii::app()->params['constants']['roles']
		if (!Yii::app()->user->isGuest) {
			$this->userData = Roles::model()->findByPk(Yii::app()->user->id);
		}
	}
	
	public function allowUser($roleId, $controller, $method) {

		// Allowed Controllers By Default
		$allowed_methods = Yii::app()->params['constants']['allowed_methods'];
		if($controller=='site' && in_array($method, $allowed_methods)) {
			return true;
		}

		if (!$roleId) { // If Guest is Roaming
			throw new CHttpException(403, 'You have no permission to view this content');
		} else { // If User is Logged in - Check Access
			$resources = Resources::model()->findByAttributes(array('Controller'=>$controller, 'Method'=>$method));
			if($resources!=NULL) { // If Resources are Present
				$roleresources = RolesResources::model()->findByAttributes(array('ResourceId'=>$resources->ResourceId, 'RoleId'=>$roleId));
				if($roleresources && $roleresources->RolesResourcesId>0) { // If Resources are Assigned
					return $roleresources->RolesResourcesId;
				} else { // If Resources Not Assigned
					throw new CHttpException(403, 'You have no permission to view this content');
				}
			} else { // If Resources Not Present
				throw new CHttpException(403, 'You have no permission to view this content');
			}
		}
	}

}