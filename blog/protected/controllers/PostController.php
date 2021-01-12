<?php

class PostController extends Controller
{
    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $posts=Post::model()->findAll();
        $this->render('index', array(
            'posts'=>$posts
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
	public function actionCreate()
	{
        $model=new Post;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Post']))
        {
            $model->attributes=$_POST['Post'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $post=$this->findModel($id);

        $this->render('view',array(
            'model'=>$post,
        ));
    }

    /**
     * Displays a particular model.
     * @throws CHttpException
     */

    private function findModel($id)
    {
        $model=Post::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}