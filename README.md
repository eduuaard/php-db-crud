# PHP Crud

## Sobre o projeto
```
Esse é um sistema CRUD básico, com layout de dashboard feito em PHP puro juntamente com Bootstrap.
```
## Para rodar
```
Rode com php -S localhost:8000 ou com Laragon, xampp...
```

### Estrutura do banco de dados
```

tabela: users
id      int not null auto_increment primary key
name    varchar(100) not null
email   varchar(100) not null

tabela: setores
id      int not null auto_increment primary key
name    varchar(50) not null

tabela: user_setores
setor_id   int
user_id    int


```

