# Desafio I - Orientação a objetos

## Instalando o projeto
O projeto utiliza a arquitetura MVC.
A princípio tentei fazer o projeto em ASP.NET MVC mas ao iniciar os estudos, mesmo entendendo que é bem parecido com Laravel 6.0 ví que não teria prazo suficiente, por isso decidi trocar com algo que mesmo não conhecendo tão profundamente, tenho conhecimento maior que em C# e conseguiria realizar os testes sem muitos problemas.

Foi utilizado 
* PHP 7.2 Orientado a Objetos.
* Laravel 6.0
* Apache 2
* Eloquent ORM
> O banco de dados não importa muito, postgres, mysql, **SQL Server** etc. O Laravel utiliza um sistema de migrations que eu escrevo o código e ele converte para o BD que estiver setado utilizando um pacote interno.

### Para instalar o projeto
> Se estiver em ambiente **Windows** baixe o applicativo **Laragon** Ele irá cuidar do Apache, PHP e Extensões necessárias além do BD. Após instalar ele apenas precisará instalar o Composer para poder ter acesso ao gerenciador de dependências do PHP.

> Se estiver em Ambiente macOS, pode usar o **Homestead** ou o **Valet**.

> Se seu ambiente for Linux, precisará instalar tudo na mão ou subir um container **Docker** configurado com os requisitos.

> Após instalar o projeto basta configurar o arquivo **.env** no root da pasta do projeto.

* > DB_HOST=127.0.0.1
* > DB_PORT=porta_do_banco
* > DB_DATABASE=nome_do_banco
* > DB_USERNAME=root
* > DB_PASSWORD=

> Então rodar os seguintes comandos:
* > composer install **Instala as depedências**
* > php artisan migrate:fresh **Zera o BD e o reescreve.**

> após abrir o projeto no virtualhost criado para ele. **Obs: Apontar para a pasta public/.**
## O que foi feito
Me baseando no que foi pedido:
* **Contexto**
>Sistema básico para cruds de uma aplicação para clínica estética.

* **organização lógica** 
> Aqui o mérito é do Laravel e sua organização fantástica, seguindo o MVC, defini as models que se correlacionam com as migrations, as controllers para fazer as operações e conversar com as models, e as views para o usuário poder navegar.
* **modelagem dos dados**
> Aqui eu defini as seguintes models. **Procedure**, **Client**, **Schedule**. E elas conectam as respectivas tabelas, se relacionando. Posso cadastrar separadamente Procedimentos e Clientes, e Posso fazer um agendamento com uma tabela intermediária ManyToMany para colocar os id's de cada entidade e o horário do agendamento. Fiz um update onde podemos atualizar o agendamento também. Infelizmente não consegui tempo suficiente para estudar uma forma de retornar uma mensagem de sucesso ou de falha, a pagina atualiza e eu removo o botão, talvez poderia fazer um css, mudar uma cor ou algo assim, mas o tempo estava curto. :/

* **domínio da linguagem**
> Aqui basicamente eu usei documentação. E padrões "Right Way". Não tenho domínio completo com PHP, meu maior domínio é com C.
* **facilidade de manutenção**.
> Aqui o mérito também vem do Laravel. Mexemos em 3, 4 arquivos e qualquer alteração está pronta.

## Fluxo feliz da aplicação.

* Entrar no domínio.
* Cadastrar um usuário em Registre-se.
* Fazer login.
* Você irá cair na página de dashboard onde propositalmente tem uma piadinha hehe
* Efetuar os cadastros, as operações CRUD estão todas feitas.
* Criar agendamentos.
* ~~Me aprovar~~.

# Desafio II - Banco de dados

## Como foi feito?
Estudei as queries básicas para poder executar.
Instalei o **SQL Server** e utilizei o **SGBD HeidSQL** para escrever as queries e entender o que acontecia.

## Detalhes

* Primeiro abrir o arquivo company para criar o database, juntos das tabelas e da **alter table**.

> **OBS:** Excluir o drop para rodar o banco a primeira vez, caso der erro utilizar o drop novamente.

* Segundo abrir o arquivo inserts e rodar primeiro departamento, depois utilizar **select * from departamento** para utilizar os id's incrementados no insert de funcionario, e repetir o mesmo processo usando **select * from funcionario** para atribuir a tabela dependente.

* Tendo feito todos os inserts apenas chamar os selects selecionando um de cada vez e **voalá ;)**

# Desafio III - Lógica de programação

## Como foi feito?
Foi relativamente simples. As lógicas são tranquilas, exceto pelo 3 exercício que eu não sabia quase nada das funções de C# para fazer o split, para comparar. C# é fortemente tipado então tive vários erros que eu não teria com uma linguagem fracamente tipada que aceita tudo.

> Como compilador usei o site https://dotnetfiddle.net