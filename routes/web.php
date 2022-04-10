<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*php
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => 'zjhjnxqv4hwdhqh6',
    'publicKey' => 'kg8hqpzvt5wh5rcb',
    'privateKey' => '1e4f59e549ba58844857b148cc7c6c28'
]);


Auth::routes();
Route::get('welcome', function (){
    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => 'zjhjnxqv4hwdhqh6',
        'publicKey' => 'kg8hqpzvt5wh5rcb',
        'privateKey' => '1e4f59e549ba58844857b148cc7c6c28'
    ]);
    return view('welcome', compact('gateway'));
});

Route::get('/chekout', function (Request $request){
    $amount = $request->amount;
    $nonce = $request->payment_method_nonce;
    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => 'zjhjnxqv4hwdhqh6',
        'publicKey' => 'kg8hqpzvt5wh5rcb',
        'privateKey' => '1e4f59e549ba58844857b148cc7c6c28'
    ]);
   /* $result = $gateway->transaction()->sale([
        'amount' => $amount,
        'paymentMethodNonce' => $nonce,
        'options' => [
            'submitForSettlement' => true
        ]
    ]);*/
    $result1 = $gateway->customer()->create([
        'firstName' => 'Mike',
        'lastName' => 'Jones',
        'company' => 'Jones Co.',
        'paymentMethodNonce' => $nonce
    ]);
    /*if ($result1->success) {
        echo($result1->customer->id);
        echo($result1->customer->paymentMethods[0]->token);
    } else {
        foreach($result1->errors->deepAll() AS $error) {
            echo($error->code . ": " . $error->message . "\n");
        }
    }*/
    $result = $gateway->subscription()->create([
        'paymentMethodToken' => $result1->customer->paymentMethods[0]->token,
        'planId' => '9sgr',
    ]);

    /*if ($result->success || !is_null($result->transaction)) {
        $transaction = $result->transaction;
        $id = $transaction->id;

        $payment_details = new \App\Payment_details();
        $payment_details->sender_id = 1;
        $payment_details->receiver_id = 1;
        $payment_details->service_id = 1;
        $payment_details->amount = $amount;
        $payment_details->transaction_id = $id;
        $payment_details->type = 'Service';
        $payment_details->payment_status = 1;
        $payment_details->save();

            return redirect()->route('transaction', ['id' => $id]);
//            header("Location: " . URL::to('/'). "transaction.php?id=" . $transaction->id);
    }*/
    if($result->success){
        echo "success";
    } else {
         $errorString = "";

         foreach($result->errors->deepAll() as $error) {
             $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
         }

         echo $errorString;

    }
});
Route::get('/refund', function (){
    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => 'zjhjnxqv4hwdhqh6',
        'publicKey' => 'kg8hqpzvt5wh5rcb',
        'privateKey' => '1e4f59e549ba58844857b148cc7c6c28'
    ]);
    $result = $gateway->transaction()->refund('995g69t0');
    echo $result->success;
});

Route::get('transaction/{id}', function ($id){
    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => 'zjhjnxqv4hwdhqh6',
        'publicKey' => 'kg8hqpzvt5wh5rcb',
        'privateKey' => '1e4f59e549ba58844857b148cc7c6c28'
    ]);
    $transaction = $gateway->transaction()->find($id);

    $transactionSuccessStatuses = [
        Braintree\Transaction::AUTHORIZED,
        Braintree\Transaction::AUTHORIZING,
        Braintree\Transaction::SETTLED,
        Braintree\Transaction::SETTLING,
        Braintree\Transaction::SETTLEMENT_CONFIRMED,
        Braintree\Transaction::SETTLEMENT_PENDING,
        Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
    ];

    if (in_array($transaction->status, $transactionSuccessStatuses)) {
        $header = "Sweet Success!";
        $icon = "success";
        $message = "Your test transaction has been successfully processed. See the Braintree API response and try again.";
    } else {
        $header = "Transaction Failed";
        $icon = "fail";
        $message = "Your test transaction has a status of " . $transaction->status . ". See the Braintree API response and try again.";
    }
    return view('final', compact('transaction', 'transactionSuccessStatuses', 'message'));
})->name('transaction');
Route::get('/bookNow', 'HtmlController@bookNow');
Route::post('/complain/submit', 'HtmlController@complainsubmit')->name('complain-submit');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/search', 'HomeController@search')->name('search');

Route::get("/","HtmlController@index")->name('home.index');
Route::get("/about","HtmlController@about")->name('about');
Route::get("property-grid","HtmlController@property")->name('property-grid');
Route::get("/blog-grid","HtmlController@blog")->name('blog-grid');
Route::get("property-single/{id}","HtmlController@proper")->name('property-single');
Route::get("blog-single","HtmlController@bg");
Route::get("agents-grid","HtmlController@agent")->name('agents-grid');
Route::get("allproject","HtmlController@allproject")->name('allproject');
Route::get("agent-single","HtmlController@single");
Route::get("contact","HtmlController@contact");
Route::get("emergency","HtmlController@emergency");
Route::get("complain","HtmlController@complain");
Route::get("customercare","HtmlController@customercare");
Route::get("ruleandregulation","HtmlController@ruleandregulation");
Route::get("sellpage2","HtmlController@sellpage2");
Route::get("sellpage3","HtmlController@sellpage3");
Route::get("property_grid_rent","HtmlController@property_grid_rent")->name('property_grid_rent');



