## Projeto Integrador (PI) UNIVESP - CÉU TRÊS LAGOS

Projeto para exibição dos eventos que estão sendo realizados pelo CÉU 3 LAGOS.

## Requisitos

* PHP 8.2 ou superior
* Composer
* Node.js 22 ou superior

## Baixar o projeto do GIT para a máquina
Copiar a url do projeto no GIT<br>

Abrir o terminal no VSCode e rodar o comando git clone e colar a url

```
git clone https://github.com/RodrigoMiau/pi-ceu-tres-lagos-univesp.git
```

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>

Instalar as dependências do PHP
```
composer install
```

Gerar a chave
```
php artisan key:generate
```

Rodar as migrates do banco subindo as tabelas
```
php artisan migrate
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000
```