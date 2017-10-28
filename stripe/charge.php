<?php
    require_once('./stripe-lib/init.php');

    // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey("sk_live_I3Sui1jVCWQGgRBWD057xX1r");

    // Token is created using Stripe.js or Checkout!
    // Get the payment token ID submitted by the form:
    $token = $_POST['stripeToken'];
    $email = $_POST['stripeEmail'];

    // Charge the user's card:
    $charge = \Stripe\Charge::create(array(
        "amount" => 1990,
        "currency" => "eur",
        "description" => "Box icicartegrise.fr",
        "receipt_email" => $email,
        "source" => $token,
    ));
?>
