<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
  <header>
    <h1 class="logo">
      <a href="<?php the_permalink(); ?>">Wordpress & webdesign</a>
    </h1>
    <nav>
      <ul>
        <li><a href="<?php the_permalink(); ?>">Home</a></li>
        <li><a href="<?php the_permalink(); ?>">About</a></li>
        <li><a href="<?php the_permalink(); ?>">contact</a></li>
        <li><a href="<?php the_permalink(); ?>">blog</a></li>
      </ul>
    </nav>
  </header>