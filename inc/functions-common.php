<?php
function send_to_amocrm($name, $phone, $status, $id)
{
    $data = [
        'name' => 'Заявка: ' . $name,
        'status_id' => $status,
        'custom_fields_values' => [
            [
                'field_id' => $id,
                'values' => [
                    [
                        'value' => $phone,
                    ],
                ],
            ],
        ],
    ];
    $url = 'https://medvedievan17.amocrm.ru/api/v4/leads';
    $access_token = 'Mka0RuA2H0cyGp0eMdUqeqqKMXA92HXsHhURqIJQBXMdaxVI0VVbmrLZR4q6G9Vf';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $access_token,
        'Content-Type: application/json',
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));


    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
}