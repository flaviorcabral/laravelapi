<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class APIController extends Controller
{
    protected $client;

    public function  __construct()
    {
        $this->client = new Client();
    }

    public function getClientesAPI()
    {
        $result = $this->client->get('http://localhost:8181/clientes');
        $resultado = json_decode($result->getBody()->getContents());

        foreach($resultado as $result){
            echo "<p>". $result->nome ." - <b>" . $result->cnpj . "</b></p>";
        }
    }

    public function getClienteAPI($id)
    {
        $result = $this->client->get('http://localhost:8181/clientes/' . $id);
        $resultado = json_decode($result->getBody()->getContents());

        echo "<p>". $resultado->nome ." - <b>" . $resultado->cnpj . "</b></p>";
    }

    public function cadastraClienteAPI()
    {
        $result = $this->client->post('http://localhost:8181/clientes', [
            'form_params' => [
                'nome' => 'TESTE',
                'cnpj' => 111111111,
            ]
        ]);

        echo $result->getBody();

    }
    public function alteraClienteAPI()
    {
        $result = $this->client->put('http://localhost:8181/clientes', [
            'form_params' => [
                'nome' => 'Flavio Rodrigo',
                'cnpj' => 111111111,
                'id' => 44
            ]
        ]);

        echo $result->getBody();
    }

    public function removeClienteAPI($id)
    {
        $result = $this->client->delete('http://localhost:8181/clientes/' . $id);

        echo $result->getBody();
    }

}
