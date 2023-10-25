Para realizar uma migration (atualizar tabelas no banco de dados):

    - Temos uma série de arquivos nomeados por data de criação na pasta migrations do projeto (a data de   
    criação é colocada no nome do arquivo para sabermos quando a tabela foi atualizada);

    - Após termos nosso arquivo de migrations criado com as atualizações, acessamos nosso projeto via doker 
    tilizando o comando docker-compose exec app bash, e podemos executar os comando de migrate, sendo os 
    mais utilizados:

    *php artisan migrate
    *php artisan migrate:fresh

    - O primeiro comando realiza uma migration caso seja a primeira vez que esta sendo executado, ou quando 
    tem uma nova migration a ser feita

    - O segundo comando executa migrations novamente, apagando todas as tabelas feitas, e recriando tudo 
    novamente

Para criar uma model (basicamente a estrutura do nosso banco de dados)

    - Para criar uma model, podemos fazer isso acessando nosso projeto no docker com o comando docker- 
    compose exec app bash, e utilizando os comandos à seguir:

    *php artisan make:model NomeDoModel
    *php artisan make:model NomeDoModel -m
    *php artisan make:model NomeDoModel -m -c

    - O primeiro comando somente cria a nossa model

    - O segundo comando cria a nossa model juntamente com um arquivo de migrations para realizar 
    atualizações

    - O terceiro comando cria a nossa model com o arquivo de migrations, e o arquivo de controllers
