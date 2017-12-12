<?php

//$this->resource('unidades', 'UnidadeController');

Route::resource('unidades', 'UnidadeController', [
    'only' => [
        'index',
    ]]);

Route::resource('manifestacao', 'ManifestacaoController', [
    'only' => [
        'store',
    ]]);
