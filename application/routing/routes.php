<?php

Router::get('/home',              'home.index'     );

Router::get('/article',           'article.index'  );
Router::get('/article/create',    'article.create' );
Router::post('/article',          'article.store'  );
Router::get('/article/{id}',      'article.show'   );
Router::get('/article/{id}/edit', 'article.edit'   );
Router::put('/article/{id}',      'article.update' );
Router::delete('/article/{id}',   'article.destroy');