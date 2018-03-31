<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CallbackController extends Controller
{
    //

    /*
     * Return the user identifier for a user_token received by OneAll.
     * The goal is to check if there is an existing user account for a user_token received by OneAll.
     */
    function get_user_id_for_user_token($user_token)
    {
        // Example Query: SELECT user_id FROM user_token_link WHERE user_token = <user_token>
        // Return the user_id or null if none found.
        return DB::table('users')
            ->where('user_token', 'like', $user_token)->value('id');
    }

    /*
     * Return the user_token for a given user identifier.
     * The goal is to check if the given user identifier has already been linked to a OneAll user_token.
     */
    function get_user_token_for_user_id($user_id)
    {
        // Example Query: SELECT user_token FROM user_token_link WHERE user_id = <user_id>
        // Return the user_token or null if none found.
        return DB::table('users')
            ->where('id', '=', $user_id)->value('user_token');
    }

    /*
     * Link a user_token to an existing user identifier.
     * The goal is to store a user_token for a given user_id so that we can recognize the user_token later on.
     */
    function link_user_token_to_user_id($user_token, $user_id)
    {
        // Example: INSERT INTO user_token_link SET user_token = <user_token>, user_id = <user_id>
        // Return true
        DB::table('users')
            ->where('id', '=', $user_id)
            ->update(['user_token' => $user_token]);
        return true;
    }

    public function handleCallback()
    {
        // Check if we have received a connection_token
        if (isset($_POST['connection_token'])) {
            // Get connection_token
            $token = $_POST['connection_token'];

            // Your Site Settings
            $site_sub_domain = 'bhtv-999';
            $site_public_key = 'bb6a3912-bdd4-43e6-b355-bd2ef86bec0a';
            $site_private_key = 'f527b7b0-a4b1-4d20-b52f-b952e1153564';

            // API Access domain
            $site_domain = $site_sub_domain . '.api.oneall.com';

            // Connection Endpoint
            // http://docs.oneall.com/api/resources/connections/read-connection-details/
            $resource_uri = 'https://' . $site_domain . '/connections/' . $token . '.json';

            // Setup connection
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $resource_uri);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_USERPWD, $site_public_key . ":" . $site_private_key);
            curl_setopt($curl, CURLOPT_TIMEOUT, 15);
            curl_setopt($curl, CURLOPT_VERBOSE, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($curl, CURLOPT_FAILONERROR, 0);

            // Send request
            $result_json = curl_exec($curl);

            // Error
            if ($result_json === false) {
                //You may want to implement your custom error handling here
                $message = 'Curl error: ' . curl_error($curl) . '<br />';
                $message .= 'Curl info: ' . curl_getinfo($curl)['url'] . '<br />';
                curl_close($curl);
                return view('layouts/notification')->with(['message' => $message]);
            } // Success
            else {
                // Close connection
                curl_close($curl);

                // Decode
                $json = json_decode($result_json, true);

                // Extract data
                $data = $json['response']['result']['data'];

                // Check for service
                switch ($data['plugin']['key']) {
                    // Social Login
                    case 'social_login':

                        // Operation successful
                        if ($data['plugin']['data']['status'] == 'success') {

                            // The user_token uniquely identifies the user
                            // that has connected with his social network account
                            $user_token = $data['user']['user_token'];

                            // 1) Check if you have a userID for this token in your database
                            $user_id = $this->get_user_id_for_user_token($user_token);

                            // 1a) If the userID is empty then this is the first time that this user
                            // has connected with a social network account on your website
                            if ($user_id === null) {
                                // 1a1) Create a new user account and store it in your database
                                // Optionally display a form to collect  more data about the user.

                                $user_resource_uri = 'https://' . $site_domain . '/users/' . $user_token . '.json';

                                // Setup connection
                                $curl = curl_init();
                                curl_setopt($curl, CURLOPT_URL, $user_resource_uri);
                                curl_setopt($curl, CURLOPT_HEADER, 0);
                                curl_setopt($curl, CURLOPT_USERPWD, $site_public_key . ":" . $site_private_key);
                                curl_setopt($curl, CURLOPT_TIMEOUT, 15);
                                curl_setopt($curl, CURLOPT_VERBOSE, 0);
                                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
                                curl_setopt($curl, CURLOPT_FAILONERROR, 0);

                                // Send request
                                $user_result_json = curl_exec($curl);

                                // Error
                                if ($user_result_json === false) {
                                    //You may want to implement your custom error handling here
                                    $message = 'Curl error: ' . curl_error($curl) . '<br />';
                                    $message .= 'Curl info: ' . curl_getinfo($curl)['url'] . '<br />';
                                    curl_close($curl);
                                    return view('layouts/notification')->with(['message' => $message]);
                                } // Success
                                else {
                                    // Close connection
                                    curl_close($curl);

                                    // Decode
                                    $user_json = json_decode($user_result_json, true);

                                    // Extract data
                                    $user_data = $json['response']['result']['data'];

                                    if ($user_json['response']['request']['status']['flag'] == 'success') {
                                        return view('/auth/register', ['name' => $user_data['user']['identity']['displayName'],
                                            'email' => $user_data['user']['identity']['emails'][0]['value'],
                                            'user_token' => $user_token]);
                                    }
                                }
                            } else {
                                Auth::guard()->login(User::query()->find($user_id));
                                return view('/home');
                            }
                        }
                        break;
                    default:
                        abort(404);
                        break;
                }
            }
        } else return abort(404);
    }
}
