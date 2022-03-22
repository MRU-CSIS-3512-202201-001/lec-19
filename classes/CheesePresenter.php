<?php
class CheesePresenter
{

    private $cheese;

    public function __construct($cheese)
    {

        $this->cheese = $cheese;
    }

    public function details()
    {
        $result = "<div class='single-cheese'>";
        $result .= "<span>" . $this->cheese->name . "</span>";
        $result .= "<span>" . $this->cheese->classification . "</span>";
        $result .= "<span>" . $this->cheese->code . "</span>";
        $result .= "</div>";
        return $result;
    }
}
