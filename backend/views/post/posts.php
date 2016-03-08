<table class="table table-striped">
    <?php $i = 0 ?>
    <tr>
        <td>#</td>
        <td>Post</td>
        <td>isCheck</td>
    </tr>
    <tr>
        <?php foreach($arr as $val) { ?>
            <td><?=$val['id']?></td>
            <td><?=$val['info']?></td>
            <td><?php if($val['isCheck']){ ?>
                <input type="checkbox" checked="checked" name="chk" class="chbox" value="<?=$val['id']?>">
                <?php } else { ?>
                <input type="checkbox" name="chk" class="chbox" value="<?=$val['id']?>">
                <?php } ?>
            </td>
            </tr>
        <?php } ?>
</table>
<script>
    new_url = "<?=\Yii::$app->getUrlManager()->createUrl('post/save')?>";
</script>