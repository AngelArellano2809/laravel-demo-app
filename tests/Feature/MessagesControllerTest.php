<?php

test('example', function () {
    $response = $this->get('/message');
    $response->assertSee('Listado de Mensajes');

    $response->assertStatus(200);
});

test('muestra-formulario-crear-mensaje', function () {
    $response = $this->get('/message/create');
    $response->assertSee('Crear Mensaje')
        ->assertSeeHtml('user_name=¨nombre');

    $response->assertStatus(200);
});

test('crear-mensaje', function () {
    $response = $this->post('/message', [
        'user_name' => 'Luis',
        'user_mail' => 'algoQmail.com',
        'user_message' => 'holasss',
    ]);

    $response->assertStatus(302);
    $response->assertRedirect('/messages');
});
