<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Cd.php";
  date_default_timezone_set('America/Los_Angeles');


  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

  $app->get("/", function() use ($app){
    return $app['twig']->render('home.html.twig');
  });
  $app->post("/new_cd", function() use ($app){
    $new_cd = new Cd($_POST["artist"], $_POST["price"], $_POST["image"]);
    // $new_cd->save();
    return $app['twig']->render('new_cd.html.twig', array("new_cd" => $new_cd));
  });
 return $app;

 ?>
