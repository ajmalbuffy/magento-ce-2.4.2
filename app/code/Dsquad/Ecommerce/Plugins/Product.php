<?php
namespace Dsquad\Ecommerce\Plugins;

class Product
{
    public function aftergetName(\Magento\Catalog\Model\Product $product, $name)
{
    $price = $product->getData('price');
    if ($price < 60){
        $name .= "Cheap";
    } else{
        $name .= "Costly";
    }
    return $name;
}
}
