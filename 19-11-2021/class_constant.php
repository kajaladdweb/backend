<?php
class Goodbye {
  const msg = "Thank you for visiting !";
  public function byebye() {
    echo self::msg;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>