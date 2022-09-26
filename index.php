<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <?php

    if (isset($_GET['p'])) {
      if ($_GET['p'] === 'admin') {
        ?>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous" defer></script>
        <?php
        if (isset($_GET['add-project'])) {
          ?>
            <script src="js/create-project.js" defer></script>
          <?php
        }
      }

    } else {
      ?>
          <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/imask"></script>
    <script src="js/phone_mask.js" defer></script>
    <script src="js/header-border.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
    <script src="js/landing-slider.js" defer></script>
      <?php
    }
    ?>
    <title>
    <?php

      if (isset($_GET['p'])) {
        if ($_GET['p'] === 'projects') {
          echo 'Проекты';
        }
        if ($_GET['p'] === 'project') {
          echo 'Проект';
        }

        if ($_GET['p'] === 'about') {
          echo 'О нас';
        }

        if ($_GET['p'] === 'admin') {
          echo 'Админ-панель';
        }
      } else {
        echo 'Главная';
      }


    ?>
    </title>
</head>
<?php

if (isset($_GET['p'])) {
  if ($_GET['p'] === 'projects') {
    require 'pages/projects.php';
  }

  if ($_GET['p'] === 'project') {
    require 'pages/project.php';
  }

  if ($_GET['p'] === 'about') {
    require 'pages/about_us.php';
  }

  if ($_GET['p'] === 'admin') {
    if (isset($_GET['orders'])) {
      require 'pages/admin_main.php';
    } elseif (isset($_GET['projects'])) {
      require 'pages/admin_projects.php';
    } elseif (isset($_GET['add-project'])) {
      require 'pages/admin_add_project.php';
    } elseif (isset($_GET['add-category'])) {
      require 'pages/admin_add_category.php';
    } else {
      require 'pages/admin_main.php';
    }

  }
} else {
  require 'pages/landing.php';
}


?>