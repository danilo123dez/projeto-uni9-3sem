# Projeto Uninove 3° Semestre

### O Projeto está usando só uma tabela, para cria-la use o comando abaixo.
```
CREATE TABLE cliente (
    id int primary key auto_increment,
    usuario varchar(20) NOT NULL,
    email varchar(50) NOT NULL UNIQUE,
    senha varchar(255) NOT NULL
);

```

## Rodar o projeto com docker

Para rodar o projeto com docker, ele funciona apenas no ubuntu, pois está usando um bash script para ser criado. Após o projeto clonado, na raiz dele, rode o comando:

```
docker-compose up --build
```

Ele irá montar o container do projeto e o container de mysql.

Após o container do projeto criado e iniciado na primeira vez, é necessário fazer a configuração de nginx.

dentro do container, entre no container e edite o arquivo:

/etc/nginx/snippets/base-vhosts.conf

e troque a linha:

```
try_files $uri $uri/ /index.php?$query_string;
```

por está:

```
try_files $uri $uri/ /index.php?url=$uri&$args;
```
