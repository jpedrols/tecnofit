# Rank de usuários por movimento (API)
![CI-Status](https://github.com/LuanMaik/tecnofit-test/actions/workflows/docker-image.yml/badge.svg)
![Docker](https://img.shields.io/badge/docker-%230db7ed.svg?style=flat&logo=docker&logoColor=white)&nbsp;
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=flat&logo=php&logoColor=white)&nbsp;
![MySQL](https://img.shields.io/badge/mysql-%2300f.svg?style=flat&logo=mysql&logoColor=white)&nbsp;

- PHP 8.1
- MySQL 5.6
- PHPUnit
- Docker / Docker Compose
- Livewire
---

## Como executar a aplicação

Precisamos de início ter o
[Docker](https://www.docker.com/get-started) e
[Docker Compose](https://docs.docker.com/compose/install/)
instalado no computador.

No terminal, execute os comandos:
- `docker-compose up -d` para subir a api e o banco de dados.
- `docker-compose exec api composer install` para instalar as dependências da aplicação.
- `docker exec tecnofit_api_1 php artisan migrate` para abastecer o banco.
- `docker exec tecnofit_api_1 php artisan db:seed` para popular com o Seeder.
---

## Consumir a API

A Aplicação estará disponível no endereço `http://localhost:8080`. 

Serão solicitados usuário e senha, pois fiz um painel simples para possivelmente agregar no projeto. Utilizei o Livewire para aplicar meus conhecimentos de reatividade. Assim como react e o VUE, o Livewire também aplica reatividade nas páginas fazendo ações sem load no DOM. Será possível visualizar isso no login.

- usuario: admin
- senha: admin

Todas as respostas utilizam o formato json: `Content-Type: application/json` 


### ROTAS:
### Rank de Usuários por Movimento: `[GET] http://localhost/api/rank_por_movimento/{id}`


**Descrição:** Obtém o rank de usuários em um determinado movimento. 

Exemplo resposta:

```json
{"user_name":"Jose","value":190,"date":"2021-01-04 00:00:00"},{"user_name":"Joao","value":180,"date":"2021-01-01 00:00:00"},{"user_name":"Paulo","value":170,"date":"2021-01-01 00:00:00"}
```

---

## Como executar os testes

De modo a facilitar e garantir que haja as dependências necessárias, é indicado que os testes sejam executados via docker.

No terminal, execute o comando `docker exec tecnofit_api_1 php artisan test`

---

# CONSIDERAÇÕES

## Arquitetura do projeto:
Eu optei por utilizar o framework Laravel, pois em meus projetos sempre utilizo. 

A criação da API foi simples utilizando os próprios recursos do Framework.

## Resolução do problema:
Utilizei as ligações necessárias entre as tabelas para apresentar o resultado, calculando o rank na prórpia view. Estou ciente de que no MYSQL 8 foi implementado a função RANK, porém optei por fazer nesse formato para talvez conseguir mostrar um pouco mais da minha lógica. Mas caso necessário consigo adaptar o código para o mesmo.