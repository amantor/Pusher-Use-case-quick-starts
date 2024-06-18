<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'eu',
  );

  $pusher = new Pusher\Pusher(
    'd83e572836da65bfe8fb',
    '2550f69160ce88f010e5',
    '1770061',
    $options
  );



for ($i = 0; $i <= 5; $i++) {
    $valores = [
        rand(30, 40),
        rand(25, 35),
        rand(18, 21),
        rand(17, 20)
    ];

    $pusher->trigger('valor', 'nuevo', array(
        'values' => $valores,
    ));

    sleep(1);
}
?>