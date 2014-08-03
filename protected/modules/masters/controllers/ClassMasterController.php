<?php

class ClassMasterController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Classsectionassociation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classsectionassociation']))
		{
			
			$model->attributes=$_POST['Classsectionassociation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ClassSectionAssociationId));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->layout = false;
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classsectionassociation']))
		{
			$model->attributes=$_POST['Classsectionassociation'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ClassSectionAssociationId));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$classSection = new Classsectionassociation;
		$examMaster   = new Exammaster; 
		$classSubject = new Classsubjectassociation;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Classsectionassociation']['SectionId']))
		{
			
			
			
			$sectionIds = $_POST['Classsectionassociation']['SectionId'];
			
             if(count($sectionIds)>0)
             {
	             foreach($sectionIds as $sectionId)
	             {
	             	$classSection = new Classsectionassociation;
	             	$classSection->ClassId = $_POST['Classsectionassociation']['ClassId'];
	            	$classSection->SectionId = $sectionId;
	            	$classSection->InsituteId = $_POST['Classsectionassociation']['InstituteId'] ;
	            	$classSection->AcademicSessionId = $_POST['Classsectionassociation']['AcademicSessionId'];
	            	$classSection->Status = $_POST['Classsectionassociation']['Status'];
	                $classSection->save();
	             }
	           
	             
	            /*  */
             }
             
             if(isset($_POST['Exammaster']['ExamId']))
             {
             	$examIds = $_POST['Exammaster']['ExamId'];
             	if(count($examIds) > 0)
             	{
             		foreach($examIds as $examId)
             		{
             			$classExam = new Classexamassociation;
             			/* echo '<pre>';
             			print_r($classExam); */
             			$classExam->ClassId = $_POST['Classsectionassociation']['ClassId'];
             			$classExam->ExamId = $examId;
             			$classExam->InstituteId = $_POST['Classsectionassociation']['InstituteId'] ;
             			$classExam->AcademicSessionId = $_POST['Classsectionassociation']['AcademicSessionId'];
             			$classExam->Status = $_POST['Classsectionassociation']['Status'];
             			$classExam->save();
             		}
             		//die();
             	}
             	if(isset($_POST['Classsubjectassociation']['SubjectId']))
             	{
             		
             		$subjectData = $_POST['Classsubjectassociation']['SubjectId'];
             		$isOtional = $_POST['Classsubjectassociation']['IsOptional'];
             		$data = array();
             		foreach($subjectData as $value)
             		{
             			if(!empty($value))
             			{
             				$data[] = $value;
             			}
             		}
             		$subjectIds = $data;
             		if(count($subjectIds) > 0)
             		{
             			
             			foreach($subjectIds as $key => $subjectId)
             			{
             				/* echo '<pre>';
             				print_r();  */
             				$classSubject = new Classsubjectassociation();
             				
             				$classSubject->ClassId = $_POST['Classsectionassociation']['ClassId'];
             				$classSubject->SubjectId = $subjectId;
             				$classSubject->IsOptional = $isOtional[$key]  ;
             				$classSubject->InstituteId = $_POST['Classsectionassociation']['InstituteId'] ;
             				$classSubject->AcademiSessionId = $_POST['Classsectionassociation']['AcademicSessionId'];
             				$classSubject->save();
             			}
             			//die();
             		}
             				
             	}
             	
             }
             else 
             {
             	$this->redirect(array('index'));
             	
             }	

                                      
		}
		

		
		$classSection->unsetAttributes();  // clear any default values
		if(isset($_GET['Classsectionassociation']))
		{
			$classSection->attributes=$_GET['Classsectionassociation'];
			
		}
		

		$this->render('index',array(
			'model'=>$classSection,
			'examMaster'=>$examMaster,
			'classSubject'=>$classSubject,
		));
	}
	
	/**
	 * Manages all models.
	 */
	
	public function getSubjectList($classSubject)
	{
		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Classsectionassociation('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Classsectionassociation']))
			$model->attributes=$_GET['Classsectionassociation'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Classsectionassociation the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Classsectionassociation::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Classsectionassociation $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='classsectionassociation-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
