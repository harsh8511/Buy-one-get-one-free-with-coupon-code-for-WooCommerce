/* Add in function.php
replace 
- your_coupon_code with your coupon code
- 123 with your free product ID
*/

add_action('woocommerce_applied_coupon', 'add_free_product');

function add_free_product($coupon_code) {
    // Check if the applied coupon code matches your desired code
    if ($coupon_code === 'your_coupon_code') {
        // Get the free product ID
        $free_product_id = 123; // Replace with the actual free product ID

        // Check if the free product is not already in the cart
        if (!WC()->cart->find_product_in_cart($free_product_id)) {
            // Add the free product to the cart
            WC()->cart->add_to_cart($free_product_id);
        }
    }
}
