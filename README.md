# Projeto de  Cadastro Ecommerce 🛒

## Descrição

Este projeto é uma aplicação de cadastro que utiliza PHP para gerenciar registros de usuários. Abaixo estão os métodos utilizados, exemplos de uso, e documentação adicional.

## Métodos PHP Utilizados

### 1. Conectar ao Banco de Dados

**Método:** `connectToDatabase()`

```php
/**
 * Conecta ao banco de dados MySQL.
 *
 * @return PDO
 */
function connectToDatabase() {
    $host = 'localhost';
    $dbname = 'nome_do_banco';
    $username = 'usuario';
    $password = 'senha';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Conexão falhou: ' . $e->getMessage();
    }
}
