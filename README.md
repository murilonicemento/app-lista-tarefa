# App Lista de Tarefas em PHP e MySQL

Este é um aplicativo simples de lista de tarefas desenvolvido em PHP e utilizando um banco de dados MySQL para armazenar as tarefas. Ele permite que os usuários criem, visualizem, atualizem e excluam tarefas em uma interface amigável.

## Pré-requisitos

Certifique-se de ter os seguintes requisitos instalados no seu ambiente de desenvolvimento:

- PHP (versão 7 ou superior)
- MySQL
- Um servidor web (por exemplo, Apache)
- Um navegador web moderno

## Configuração do Banco de Dados

1. Crie um banco de dados MySQL chamado `lista_tarefas`.

2. Dentro do banco de dados `lista_tarefas`, crie uma tabela chamada `tarefas` com os seguintes campos:
   - `id` (chave primária)
   - `descricao` (texto)
   - `concluida` (booleano)

3. Configure as credenciais do banco de dados no arquivo `config.php`:

```php
<?php
$host = "localhost"; // Endereço do servidor MySQL
$usuario = "seu_usuario"; // Seu nome de usuário do MySQL
$senha = "sua_senha"; // Sua senha do MySQL
$banco = "lista_tarefas"; // Nome do banco de dados
?>
```
## Instalação

1. Clone este repositório no seu ambiente de desenvolvimento:
```bash
git clone https://github.com/murilonicemento/app-lista-tarefa
```

2. Configure seu servidor web para servir o diretório do aplicativo.

## Uso

3. Acesse o aplicativo no seu navegador:
```bash
http://localhost/app-lista-tarefas/
```
4. Você verá a interface principal do aplicativo, onde poderá adicionar, editar, marcar como concluída e excluir tarefas.

## Contribuição
Se você deseja contribuir para este projeto, sinta-se à vontade para abrir um pull request. Toda contribuição é bem-vinda!

## Licença
Este projeto está licenciado sob a [LICENSE MIT](LICENSE).
