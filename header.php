<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <style>.loaded { opacity: 1 }</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head();?>
</head>


<body <?php body_class( ) ?> >
  <div class="wrapper">
    <?php get_template_part('template-parts/header')?>
    <main class="page">
      <div data-observ></div>