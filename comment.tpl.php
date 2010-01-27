<!-- Kommentar Anfang -->
<div class="comment<?php if (isset($comment->status) && $comment->status == COMMENT_NOT_PUBLISHED) print ' comment-unpublished'; ?>">
    <?php if ($picture) { print $picture; } ?>
		<h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div class="content">
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="submitted"><?php print $comment->name ?></div>
    <!-- <div class="links"><?php print $links; ?></div> -->
</div>
<!-- Kommentar Ende -->