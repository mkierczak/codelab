<?php
class AlectoV1_rain extends Handler {
    private $successor;
 
    public function setSuccessor($nextService) {
        $this->successor=$nextService;
    }
 
    public function handleRequest($request) {
        if ($request->getService() == "AlectoV1 Rain Sensor") {
            echo "It's rainin' again!";
        }
        else if ($this->successor != NULL) {
            $this->successor->handleRequest($request);
        }
    }
}
?>
