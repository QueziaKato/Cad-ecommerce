# Projeto de  Cadastro Ecommerce 

## Descrição
O projeto desenvolvido em sala de aula é uma aplicação de carrinho de compras para um e-commerce. Este sistema permite aos usuários adicionar produtos ao carrinho, visualizar o conteúdo do carrinho e gerenciar suas compras de maneira eficiente. A aplicação simula o funcionamento básico de um sistema de e-commerce, oferecendo uma interface simples e intuitiva para que os usuários possam experimentar a dinâmica de adicionar produtos e visualizar o total de suas compras. 🛒

## Métodos PHP Utilizados

1. **`include_once("controller/conexao.php")`**
   - **Função:** `include_once()`
   - **Descrição:** Inclui e avalia o arquivo especificado durante a execução do script. A diferença de `include_once()` para `include()` é que o primeiro garante que o arquivo será incluído apenas uma vez, evitando múltiplas inclusões que podem causar erros.

2. **`mysqli_query($mysqli, $resultado_categoria)`**
   - **Função:** `mysqli_query()`
   - **Descrição:** Executa uma consulta no banco de dados MySQL. Recebe a conexão (`$mysqli`) e a consulta SQL (`$resultado_categoria`), e retorna um resultado que pode ser manipulado com outras funções `mysqli`.

3. **`mysqli_fetch_assoc($resultcategoria)`**
   - **Função:** `mysqli_fetch_assoc()`
   - **Descrição:** Obtém uma linha de resultado de uma consulta como uma matriz associativa. Usado para iterar sobre os resultados da consulta.

4. **`echo`**
   - **Função:** `echo`
   - **Descrição:** Imprime uma ou mais strings. Utilizado para gerar HTML dinâmico com base nos dados recuperados do banco de dados.

5. **`require_once`**('controller/produtos-resumo.php')
- **Função:** `require_once`()
- **Descrição**: Inclui e avalia o arquivo especificado apenas uma vez durante a execução do script. Se o arquivo já foi incluído antes, ele não será incluído novamente. Isso é útil para evitar múltiplas inclusões de um mesmo arquivo, o que pode causar erros, especialmente ao definir funções, classes ou instâncias de objetos.

6. **`$_POST`**
- **Função:** `$_POST`
- **Descrição**: Superglobal que coleta dados enviados via método POST em um formulário HTML. Aqui, é usado para obter valores de campos do formulário.

### Explicação do Código

- O arquivo PHP inclui um script de conexão com o banco de dados (`conexao.php`) usando `include_once()`.
- O HTML define a estrutura da página, incluindo um formulário para cadastrar um novo produto.
- O formulário inclui campos para nome, descrição, estoque, preço, categoria e marca do produto.
- O PHP embutido no HTML é usado para preencher as opções das listas suspensas (categorias e marcas) com dados do banco de dados.
  - **`mysqli_query()`** executa consultas SQL.
  - **`mysqli_fetch_assoc()`** recupera dados de consulta de uma maneira que pode ser usada para gerar opções de seleção (`<option>`).
 - **`require_once`**('controller/produtos-resumo.php'):
Esta linha está dentro de uma tag PHP <?php ... ?>, o que indica que é código PHP.
A função require_once é usada para incluir o conteúdo do arquivo produtos-resumo.php, que está localizado na pasta controller.
O arquivo incluído pode conter código PHP que gera o resumo do pedido, interage com o banco de dados, ou realiza outras operações necessárias para exibir as informações de resumo de pedido na página.
A utilização de require_once garante que o arquivo produtos-resumo.php será incluído apenas uma vez, mesmo que a linha de inclusão seja chamada múltiplas vezes ao longo do script.

