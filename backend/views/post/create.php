<h1>Hello ^_^</h1>
<div class="form-group">
    <form action="<?=\Yii::$app->getUrlManager()->createUrl('post/create')?>" method="post">
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
        <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
        <input class="btn btn-default" type="submit" name="done" value="Done">
    </form>
</div>