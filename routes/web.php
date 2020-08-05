<?php

//======================================================================================================================
Route::group(['namespace' => 'Home'], function () {
    //Rota de Home Externo
    Route::get('/', 'HomeController@Show')->name('Home.Principal.Show');
});


//======================================================================================================================
//Rotas de autentificação geradas automáticamente
Auth::routes();


//======================================================================================================================
Route::group(['namespace' => 'Painel'], function (){

    //Painel de Controle
    Route::get('/Painel', 'PainelController@Show')->name('Painel.Principal.Show');

    //Usuários Rota Index-----------------------------------------------------------------------------------------------
    Route::get('/Painel/Usuarios', 'Usuarios\UsuariosController@index')->name('Painel.Usuarios.index');
    Route::get('/Painel/Usuarios/create', 'Usuarios\UsuariosController@create')->name('Painel.Usuarios.create');
    Route::get('/Painel/Usuarios/store', 'Usuarios\UsuariosController@store')->name('Painel.Usuarios.store');

});

//======================================================================================================================
Route::group(['namespace' => 'Conteudo'], function (){

    Route::group(['namespace' => 'Landing_Page'], function (){
        Route::get('/Landing_Page', 'Landing_PageController@index')->name('Conteudo.Landing_Page.index');
        Route::get('/Landing_Page/Create', 'Landing_PageController@create')->name('Conteudo.Landing_Page.create');
        Route::post('/Landing_Page/Store', 'Landing_PageController@store')->name('Conteudo.Landing_Page.store');
        Route::get('/Landing_Page/Edit/{id}', 'Landing_PageController@edit')->name('Conteudo.Landing_Page.edit');
        Route::put('/Landing_Page/Update/{id}', 'Landing_PageController@update')->name('Conteudo.Landing_Page.update');
        Route::delete('/Landing_Page/Destroy/{id}', 'Landing_PageController@destroy')->name('Conteudo.Landing_Page.destroy');
    });

});

Route::group(['namespace' => 'Cadastro'], function (){

    Route::group(['namespace' => 'Personagem'], function (){
        Route::get('/Personagem', 'PersonagemController@index')->name('Cadastro.Personagem.index');
        Route::get('/Personagem/Create', 'PersonagemController@create')->name('Cadastro.Personagem.create');
        Route::post('/Personagem/Store', 'PersonagemController@store')->name('Cadastro.Personagem.store');
        Route::get('/Personagem/Edit/{id}', 'PersonagemController@edit')->name('Cadastro.Personagem.edit');
        Route::put('/Personagem/Update/{id}', 'PersonagemController@update')->name('Cadastro.Personagem.update');
        Route::delete('/Personagem/Destroy/{id}', 'PersonagemController@destroy')->name('Cadastro.Personagem.destroy');
    });

});