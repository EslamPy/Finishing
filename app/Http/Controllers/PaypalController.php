<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment()
    {
        $data = [];
        $data['items'] = [
            [
                'name' => 'subscribe to channel',
                'price' => 1888,
                'desc' => 'Description',
                'qty' => 2,
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = 2688;

        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $data['total']
                    ]
                ]
            ],
            "application_context" => [
                "cancel_url" => $data['cancel_url'],
                "return_url" => $data['return_url']
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $link) {
                if ($link['rel'] === 'approve') {
                    return redirect()->away($link['href']);
                }
            }

            return redirect()
                ->route('payment.cancel')
                ->with('error', 'Something went wrong.');
        } else {
            return redirect()
                ->route('payment.cancel')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function cancel()
    {
        return response()->json('Payment Cancelled', 402);
    }

    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            // Logic for handling successful payment
            return view('payment_success'); // Ensure you have this view
        }

        return redirect()->route('payment.cancel');
    }
}
    