<?php
/* @var $this PostController */
/* @var $posts */
?>

<h1>Posts</h1>

<div class="content">
    <?php foreach ($posts as $post){ ?>
        <div class="item" style="outline: 1px solid #000;">
            <div class="item_title">
                <?php echo $post->title?>
            </div>
            <div class="item_content">
                <?php echo $post->content?>
            </div>
            <div class="item_created_time">
                <?php echo $post->created_at?>
            </div>
            <div class="item_created_time">
                <?php echo $post->created_at?>
            </div>
            <div class="item_actions">
                <?php echo CHtml::link('Show',array('post/view',
                    'id'=> $post->id )); ?>
            </div>
        </div>
    <?php } ?>
</div>




