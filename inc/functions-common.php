<?php
add_action('wpcf7_mail_sent', 'my_estet_send_to_amocrm');

function my_estet_send_to_amocrm($contact_form) {
    $subdomain = 'infoestetkarnizru';
    $access_token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjlmMDIzNDdiYTAxYzhiYWEzMzY0YTMxODUyYzFhOGFmMzlmZWRmMWM0NTlmMTdmNWY4Yzc5ZGQ5MjAzOTQ3YmJiMDExM2RhN2E1MGFlYzI5In0.eyJhdWQiOiIwYmZiM2FjNS1hYTNlLTQzODEtYjM0ZC1lYTc5OGJkMDc5NDAiLCJqdGkiOiI5ZjAyMzQ3YmEwMWM4YmFhMzM2NGEzMTg1MmMxYThhZjM5ZmVkZjFjNDU5ZjE3ZjVmOGM3OWRkOTIwMzk0N2JiYjAxMTNkYTdhNTBhZWMyOSIsImlhdCI6MTczMzgxODc5MywibmJmIjoxNzMzODE4NzkzLCJleHAiOjE4OTE1NTUyMDAsInN1YiI6IjExNzk2MTAyIiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMyMDc2MTYyLCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOjIsInNjb3BlcyI6WyJjcm0iLCJmaWxlcyIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiLCJwdXNoX25vdGlmaWNhdGlvbnMiXSwiaGFzaF91dWlkIjoiNmY1OTliNTMtNjM1MS00YWNiLWJmNDItYjI1NWMyOTg1YjAxIiwiYXBpX2RvbWFpbiI6ImFwaS1iLmFtb2NybS5ydSJ9.bSvKR0VNi6SDnCYP16gcO1HCrZOIx6hVb9qVBd_AEAb8i_8_jmXRzlI1i_zjxb3TGtfSE-3HlBuvyydezGZowexxLFs1OY7xU-bzil9gYmrf1mmsZZ5R8tJeaKAA2mScj4wQbA0jPwpAuM4X7PrIxfKnaSkp9pV1GJuH9LdmEXczdpTr_E0ELHYMFanpzr1u-EBELUZTSuxxjWTRXRIP09TKa2NUP1auoHa_gQQJFM-baqsvcKZBQyggtaMjT46XoPwKt3zLH08lCVvdvcWAC28R6CGYLa0ULs8tg2MaohnJIg9vUmmo6I-s1DiFcW5O3GDpYNjjxpLa4onoSNMOsA';
    $submission = WPCF7_Submission::get_instance();
    if ($submission) {
        $form_data = $submission->get_posted_data();
        error_log('Данные из формы: ' . print_r($form_data, true));
        $name = isset($form_data['user-name']) ? $form_data['user-name'] : '';
        $phone = isset($form_data['user-phone']) ? $form_data['user-phone'] : '';

        if (empty($name) || empty($phone)) {
            error_log('Ошибка: Поля "Имя" или "Телефон" не заполнены.');
            return;
        }

        $data = [
            [
                'name' => 'Заявка от: ' . $name,
                'custom_fields_values' => [
                    [
                        'field_id' => 945411,
                        'values' => [['value' => $phone]],
                    ],
                ],
            ],
        ];


      //  $url = "https://infoestetkarnizru.amocrm.ru/api/v4/leads/custom_fields";

        $url = "https://{$subdomain}.amocrm.ru/api/v4/leads";

        $response = wp_remote_post($url, [
            'headers' => [
                'Authorization' => "Bearer {$access_token}",
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode($data),
        ]);

        $http_code = wp_remote_retrieve_response_code($response);
        $response_body = wp_remote_retrieve_body($response);

        error_log('HTTP код ответа: ' . $http_code);
        error_log('Ответ amoCRM: ' . $response_body);

        if (is_wp_error($response)) {
            error_log('Ошибка отправки данных в amoCRM: ' . $response->get_error_message());
        }
    }
}