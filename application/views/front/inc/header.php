<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Explore the cosmos with our Star Map App! Discover constellations, planets, and galaxies in stunning detail. Perfect for astronomy enthusiasts and students alike. Download now and embark on a celestial journey!" />
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/owl.theme.default.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/all.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/aos.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/main.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/responsive.css">

  <link href="<?php echo base_url('uploads/settings/') . $this->favicon; ?>" rel="shortcut icon">

  <?php if (!empty($this->seo)): ?>
    <?php if (!empty($this->seo->seo_meta_description)): ?>
      <meta name="description" content="<?php echo $this->seo->seo_meta_description; ?>">
    <?php endif; ?>
    <?php if (!empty($this->seo->seo_meta_title)): ?>
      <meta name="title" content="<?php echo $this->seo->seo_meta_title; ?>">
    <?php endif; ?>
    <?php if (!empty($this->seo->seo_meta_keyword)): ?>
      <meta name="keywords" content="<?php echo $this->seo->seo_meta_keyword; ?>">
    <?php endif; ?>
    <?php if (!empty($this->seo->seo_meta_index)): ?>
      <meta name="robots" content="<?php echo $this->seo->seo_meta_index; ?>">
    <?php endif; ?>
    <?php if (empty($this->seo->seo_meta_index)): ?>
      <meta name="robots" content="noindex, nofollow">
    <?php endif; ?>
    <?php if (!empty($this->seo->seo_meta_canonical)): ?>
      <link rel="canonical" href="<?php echo $this->seo->seo_meta_canonical ?>"/>
    <?php endif; ?>
    <?php if (!empty($this->seo->seo_page_title)): ?>
      <title><?php echo $this->seo->seo_page_title ?></title>
    <?php endif; ?>

    <?php if (!empty($this->seo->seo_head_script)): ?>
      <?php echo $this->seo->seo_head_script ?>
    <?php endif; ?>

  <?php else: ?>
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $this->site_title ?></title>
  <?php endif; ?>

</head>
<body>
<!-- HEADER_HTML_START_FROM_HERE -->

<header class="header-main-wrapper">
  <div class="toggle_btn d-none"><i class="fa-solid fa-bars"></i></div>
  <div class="container">
    <div class="header_row">
      <div class="left_col">
        <nav class="nav_bar">
          <ul class="list-unstyled">
            <li>
              <a href="<?php echo base_url('editor'); ?>" class="nav_item">Create Star Map</a>
            </li>
            <li>
              <a href="<?php echo base_url('about'); ?>" class="nav_item">About Us</a>
            </li>
            <li>
              <a href="<?php echo base_url('contact'); ?>" class="nav_item">Contact</a>
            </li>
          </ul>
          <p class="cls_btn d-none"><i class="fa-solid fa-xmark"></i></p>
        </nav>
      </div>
      <a href="<?php echo base_url(''); ?>" class="logo_box">
        <img src="<?php echo base_url('assets/front/'); ?>images/logo.png" alt="img">
      </a><!--
                <div class="right_col">
                    <div class="lang_group">
                        <i class="fa-solid fa-globe"></i>
                        <select>
                            <option>English</option>
                            <option>Spanish</option>
                        </select>
                    </div>
                </div> -->
    </div>
  </div>
</header>


