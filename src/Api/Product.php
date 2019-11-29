<?php

namespace ProtoneMedia\LaravelPaddle\Api;

class Product
{
    /**
     * https://developer.paddle.com/api-reference/product-api/pay-links/createpaylink
     */
    public function generatePayLink(array $data = [])
    {
        return new GeneratePayLinkRequest('product/generate_pay_link', $data);
    }
}
