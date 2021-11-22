<?php

interface logger
{
    public function log(string $msg);
}

class app
{
    private $logger;

    public function getlogger():logger
    {
        return $this->logger;
    }

    public function setlogger(logger $logger){
    $this->logger=$logger;
    }
}

$app=new app;
$app->setlogger(new class implements logger{
    public function log(string $msg)
    {
        print($msg);
    }
});

$app->getlogger()->log("my first msg");
?>