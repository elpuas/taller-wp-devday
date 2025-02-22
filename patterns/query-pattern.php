<?php
/**
 * Title: Test Pattern
 * Slug: wpdevday/test-pattern
 * Block Types: core/group
 * Categories: text
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":13,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-small-posts","name":"Small image and title"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true} /-->

<!-- wp:post-excerpt {"textAlign":"center","excerptLength":21} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->