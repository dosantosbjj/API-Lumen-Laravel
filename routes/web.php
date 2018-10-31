<?php

$router->get('/', 'PokemonController@index'); //pagina inicial

$router->get('/pokemon', 'PokemonController@all'); //mostra todos pokemons

$router->get('/pokemon/{id}', 'PokemonController@show'); //mostra pokemon de $id

$router->get('/jogador','JogadorController@all'); //mostra todos jogadores

$router->get('/jogador/{id}','JogadorController@show'); //mostra jogador de $id.

$router->get('/item','ItemController@all'); //mostra todos jogadores

$router->get('/item/{id}','ItemController@show'); //mostra jogador de $id.


