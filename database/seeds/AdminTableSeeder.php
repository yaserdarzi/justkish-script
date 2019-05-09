<?php

use App\User;
use App\UsersWalletCredit;
use Hashids\Hashids;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => env('CDN_AUTH_URL') . "/api/v1/auth/otp/sms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"mobile\"\r\n\r\n09111160804\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Postman-Token: 5860049f-7bc0-4b90-a98f-69264d581c5e",
                "X-Debug: 1",
                "app: G-market",
                "cache-control: no-cache",
                "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                "typeApp: justkish",
                "typeAppChild: justkish"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => env('CDN_AUTH_URL') . "/api/v1/auth/otp/verify",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "mobile=09111160804&code=" . json_decode($response)->data->code . "&refLink=test&name=yaser%20darzi%20&undefined=",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Postman-Token: 3d4c88f0-8b28-45a9-a198-d491062d6d3c",
                "agent: web",
                "app: G-market",
                "cache-control: no-cache",
                "typeApp: justkish",
                "typeAppChild: justkish"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        DB::table('admin')->insert([
            'type_app_id' => json_decode($response)->data->user_apps->id,
            'user_id' => json_decode($response)->data->id
        ]);
    }
}
