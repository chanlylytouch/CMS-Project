<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<div class="container text-dark">
<div class="row">
<div class="col-5">
<h3 class="text-primary">Comments</h3>
    <?php
        $args = array(
            'walker' => null,
            'max_depth' => '',
            'style' => 'ul',
            'callback' => null,
            'endcallback' => null,
            'type' => 'all',
            'page' => '',
            'per_page' => '',
            'avatar_size' => '50',
            'reverse_top_level' => '2px',
            'reverse_children' => '3px',
            'format' => current_theme_supports('html5', 'comment-list'),
            'short_ping' => false,
            'echo' => false,
        );
    ?>
<?php echo wp_list_comments($args, $comments); ?>
</div>
<div class="col-2"></div>

<?php $form_args = array(
    'label_submit' => 'Sent comment',
    'title_reply' => 'Write a reply',
    'comment_notes_after' => '',
    'comment_field' => '<p>
    <label for="comment">' . _x('Comment', 'noun') . '</label><br />
    <textarea class="form-control" name="comment" cols="50" rows="5" aria-required="true">
    </textarea></p>',
);
comment_form($form_args);
?>
<div class="col-5">

</div>
</div>
</div>