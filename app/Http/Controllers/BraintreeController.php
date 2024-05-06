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
    public function store(Request $request) {
    if ($request->input('nonce') != null) {
        $nonceFromTheClient = $request->input('nonce');

        $gateway = new \Braintree\Gateway([
            'environment' => env('BRAINTREE_ENVIRONMENT'),
            'merchantId' => env('BRAINTREE_MERCHANT_ID'),
            'publicKey' => env('BRAINTREE_PUBLIC_KEY'),
            'privateKey' => env('BRAINTREE_PRIVATE_KEY')
        ]);

        try{
            $result = $gateway->transaction()->sale([
                'amount' => '10.00',
                'paymentMethodNonce' => $nonceFromTheClient,
                // 'paymentMethodNonce' => 'test-invalid-nonce', //per fare fallire la transazione
                'options' => [
                    'submitForSettlement' => True
                ]
            ]); 

            if ($result->success) {
                return response()->json(['message' => 'Pagamento avvenuto con successo']);
            } else {
                return response()->json(['error' => 'Pagamento fallito: ' . $result->message ], 400);
            }
        } catch (\Exception $e){
            return response()->json(['error' => 'Pagamento fallito: ' . $e->getMessage()], 500);
        }
    }  else {
        return response()->json(['error' => 'Nonce not provided'], 400);
    }
}
}

