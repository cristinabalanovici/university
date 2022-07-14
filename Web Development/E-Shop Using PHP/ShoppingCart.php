<?php
require_once "DBController.php";
class ShoppingCart extends DBController{
   function getAllProduct(){
      $query = "SELECT * FROM product";
      $productResult = $this->getDBResult($query);
      return $productResult;
   }

   function getMemberCartItem($id_member){
      $query = "SELECT product.*, cart.id as cart_id, cart.quantity FROM product, cart WHERE product.id = cart.product_id AND cart.id_member = ?";
      $params = array(array("param_type" => "i","param_value" => $id_member));
      $cartResult = $this->getDBResult($query, $params);
      return $cartResult;
   }

   function getProductByCode($product_code){
      $query = "SELECT * FROM product WHERE code=?";
      $params = array(array("param_type" => "s","param_value" => $product_code));
      $productResult = $this->getDBResult($query, $params);
      return $productResult;
   }

   function getCartItemByProduct($product_id, $id_member){
      $query = "SELECT * FROM cart WHERE product_id = ? AND id_member = ?";
      $params = array(array("param_type" => "i","param_value" => $product_id), array("param_type" => "i","param_value" => $id_member));
      $cartResult = $this->getDBResult($query, $params);
      return $cartResult;
   }

   function addToCart($product_id, $quantity, $id_member){
      $query = "INSERT INTO cart (product_id,quantity,id_member) VALUES (?, ?, ?)";
      $params = array(array("param_type" => "i","param_value" => $product_id),array("param_type" => "i","param_value" => $quantity),array("param_type" => "i","param_value" => $id_member));
      $this->updateDB($query, $params);
   }

   function updateCartQuantity($quantity, $cart_id){
      $query = "UPDATE cart SET quantity = ? WHERE id= ?";
      $params = array(array("param_type" => "i","param_value" => $quantity),array("param_type" => "i","param_value" => $cart_id));
      $this->updateDB($query, $params);
   }

   function deleteCartItem($cart_id){
      $query = "DELETE FROM cart WHERE product_id = ?";
      $params = array(array("param_type" => "i","param_value" => $cart_id));
      $this->updateDB($query, $params);
   }

   function emptyCart($id_member){
      $query = "DELETE FROM cart WHERE id_member = ?";
      $params = array(array("param_type" => "i","param_value" => $id_member));
      $this->updateDB($query, $params);
   }
}