<?php

foreach ($users as $user) {
  echo '<h2>'. $user->getEmail() .'</h2>';
}