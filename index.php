<?php get_header(); ?>
  <main>
    <section class="blog-intro">
      <p>初めまして。 ブログを見に来てくださり、ありがとうございます。Ai と申します。</p>
      <h2>Welcome to</h2>
      <h1 class="blog-title">My Blog !</h1>
      <p>
        ウェブデザイン・ワードプレスのサイト作成、記事の執筆など、サイト制作のお手伝いをしています。動物、自然、毎日の街・空・景色の中のきれいを見つけるのが大好きな人間です。
      </p>
    </section>
<?php if (have_posts() ): ?>
<section class="blog-contents">
<?php: while ( have_posts() ): the_post(); ?>
      <a href="#" class="blog-content">
        <h3 class="blog-content__tag"><a href="#">Blog1</a></h3>
        <h3 class="blog-content__title"><?php the_title(); ?></h3>
        <h3 class="blog-content__date"><?php the_time('Y/n/j'); ?></h3>
        <div class="blog-content__img">
<?php if(has_post_thumbnail()) {
the_post_thumbnail('large');
} else {
echo '<img src="<?php echo get_template_directory_uri() ?> img/noimg.png" alt="">';
}
?>
</div>
<div class="blog-article">
<p><?php the_excerpt(); ?></p>
</div>
<a href="#">もっと読む&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
</div>
</a>
<?php endwhile; ?>      
</section>
<?php endif; ?>
</main>

<?php get_footer(); ?>

