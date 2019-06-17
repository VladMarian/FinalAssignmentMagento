<?php
class Examen_DiscountBanner_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function calcDiscount($initialPrice, $finalPrice)
    {
        $diff = $initialPrice - $finalPrice;
        $discount = $diff / $initialPrice * 100;
        return ($initialPrice <= $finalPrice ? '+' : '-') . round($discount) . '%';
    }
}