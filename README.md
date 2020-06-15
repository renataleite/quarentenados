# quarentenados
Backend do site Quarentenados

URL: http://www.quarentenados.com/admin

Autora: Renata Guedes

Esse projeto tem por finalidade cadastar, editar e remover itens do site quarentenados.

Primeiro é necessário logar para poder cadastar, editar e remover itens.

O login e senha são:

- Login: quarentenados 
- Senha: @covid

## O projeto foi criado utilizando a arquitetura MVC. 

Na pasta model foram criadas duas classes, Item e ItemType. Elas represetam as entidades do banco de dados. 

Na classe Item tem como propriedades: id, title, description, image, link, inta_user e type_id. E tem como métodos: insert, update, getAll, get, delete, getByType e upload.

Na classe TypeItem tem como propriedades: id e name. E tem como métodos: insert, update, getAll, get, delete.

Na pasta tools foi criado o ficheiro connection e check_login. 

O connection faz a ligação com a base de dados, utilizando as funções connect e execute. 

O check_login verifica se o usuário está logado, caso não esteja redireciona para a página login.

Na pasta view foi criado os arquivos de visualização (HTML).

Os controllers forão criados na raiz do projeto, os quais são: list, login, logout e save_item.

Na pasta resources foram criadas as pastas css e imgs com os arquivos correspondentes. 

A pasta uploads foi criada para armazenar as imagens que serão enviadas pelo administrador.

Por fim, na pasta docs foi criado o Diagrama de Caso de Uso. 

![caso de uso](https://github.com/renataleite/quarentenados/blob/master/docs/diagrama_caso_uso.png)