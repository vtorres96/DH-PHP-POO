<?php

$nomeCliente = $_POST['input-cliente'];
$numeroCartao = $_POST['input-cartao'];
$validadeCartao = $_POST['input-validade'];
$cvvCartao = $_POST['input-cvv'];
$totalCompra = $_POST['input-total'];

require 'classes/Produto.php';
require 'classes/ItemCarrinho.php';
require 'classes/Carrinho.php';

//gambiarra
$carrinho = unserialize(urldecode($_POST['input-carrinho']));
$listaItensPagarme = [];
foreach($carrinho->listarItens() as $item) {
    $itemPagarme = [
        'id' => '1',
        'title' => $item->getProduto()->getNome(),
        'unit_price' => $item->getProduto()->getValor(),
        'quantity' => $item->getQuantidade(),
        'tangible' => true
    ];

    $listaItensPagarme[] = $itemPagarme;
}

require 'vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_AMITNPshwWy76UTLprge53a8oCNhAv');

$totalTransacaoEmCentavos = (int)$carrinho->total() * 100;

$dadosTransacao = [
    'amount' => $totalTransacaoEmCentavos,
    'payment_method' => 'credit_card',
    'card_holder_name' => $nomeCliente,
    'card_cvv' => $cvvCartao,
    'card_number' => $numeroCartao,
    'card_expiration_date' => $validadeCartao,
    'customer' => [
        'name' => $nomeCliente,
        'type' => 'individual',
        'country' => 'br',
        'documents' => [
          [
            'type' => 'cpf',
            'number' => '00000000000'
          ]
        ],
        'phone_numbers' => [ '+551199999999' ],
        'email' => 'cliente@email.com'
    ],
    'billing' => [
        'name' => 'Nome do pagador',
        'address' => [
          'country' => 'br',
          'street' => 'Avenida Brigadeiro Faria Lima',
          'street_number' => '1811',
          'state' => 'sp',
          'city' => 'Sao Paulo',
          'neighborhood' => 'Jardim Paulistano',
          'zipcode' => '01451001'
        ]
    ],
    'shipping' => [
        'name' => 'Nome de quem receberá o produto',
        'fee' => 1020,
        'delivery_date' => '2018-09-22',
        'expedited' => false,
        'address' => [
          'country' => 'br',
          'street' => 'Avenida Brigadeiro Faria Lima',
          'street_number' => '1811',
          'state' => 'sp',
          'city' => 'Sao Paulo',
          'neighborhood' => 'Jardim Paulistano',
          'zipcode' => '01451001'
        ]
    ],
    'items' => $listaItensPagarme,
];



$transacao = $pagarme->transactions()->create($dadosTransacao);

if($transacao->status == 'paid') {
    echo 'Obrigado, o seu pedido é '. $transacao->id;
} else {
    echo 'Houve um erro na sua compra. Tente novamente mais tarde';
}
