<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree\Gateway;
class BraintreeController extends Controller
{
    public function token(Request $request)
    {
        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);
        
        $clientToken = $gateway->clientToken()->generate();

        //da adattare a vue
        
        $clientToken = $gateway->clientToken()->generate();
        return response()->json($clientToken);
    
    }

    //bisogna fare un'altra funzione che registri il nonce del client
    public function store() {
    // if ($request->input('nonce') != null) {
    //     $nonceFromTheClient = $request->input('nonce');

    //     $gateway->transaction()->sale([
    //         'amount' => '10.00',
    //         'paymentMethodNonce' => $nonceFromTheClient,
    //         // 'paymentMethodNonce' => 'test-invalid-nonce' //per fare fallire la transazione
    //         'options' => [
    //             'submitForSettlement' => True
    //         ]
    //     ]); 
    // }
}
}

