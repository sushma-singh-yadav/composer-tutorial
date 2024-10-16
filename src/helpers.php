<?php
class Spinach extends Vegetable {
    public $cooked = "false";

    public function __construct()
    {
        parent::__construct("true", "green");
    }

    public function cook()
    {
        $this->cooked = "true";
    }

    public function isCooked()
    {
        return $this->cooked;
    }
}
?>