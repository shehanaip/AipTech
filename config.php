<?php
    require_once __DIR__ . "/vendor/autoload.php";

    $stripe_sec_key = "sk_test_51OGFopGcTqco7fbYFOfUo9aFOcIAgvsqlvRpXMIqCzWd0aN4u9w7ImKUzyzQaPyRkwCvtazgliZ10QK8kEqEH7AT00LgzLmMKv";
    \Stripe\Stripe::setApiKey($stripe_sec_key);
    $checkout_session=\Stripe\Checkout\Session::create([
        "mode" =>"payment",
        "success_url" => "https://localhost/success.php",
        "line_items" =>[
          [
            "quantity" =>1,
            "price_data" =>[
                "currency" =>"USD",
                "unit_amount" =>2000,
                "product_data" =>[
                    "name" =>"aip_software",
                ]
            ],
          ]
        ]
    ]);
    http_response_code(303);
    header("location:". $checkout_session->url);
?>
 //"publishableKey" => "pk_test_51OGFopGcTqco7fbYktA5elqpCtvTxpVJMnnuPja5jkEo6XovkPFj0xxVkOypeSD9zgbKSvnnXNkG36r9HC80rZBd00nb3R92B6"
   