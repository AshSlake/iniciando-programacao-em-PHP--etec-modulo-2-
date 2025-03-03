<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GET e POST</title>
  </head>
  <body>
    <!-- criando o formulario -->
    <form id="form1" name="form1" method="post" action="vc_no_comando_acao.php">
      <br />
      <label for="nomeCompleto">Nome Completo:</label>
      <input name="nomeCompleto" type="text" id="nome" placeholder="digite o nome completo"/>
      <br />
      <label for="idade">Idade:</label>
      <input name="idade" type="number" id="idade" placeholder="digite a sua idade" />
      <br />
      <label for="profissao">Profissão:</label>
      <input name="profissao" type="text" id="profissao" placeholder="qual é a sua profissão" />
      <br />
      <!-- min 0 para evitar valores negativos, step 0.01 para valores decimais e 
       required para obrigar preenchimento do campo. -->
      <label for="salario">Salario:</label>
      <input name="salario" type="number" id="salario" placeholder="digitar seu salario" min="0" step="0.01" required/> 
      <br />
      <!-- botão de envio do formulário -->
      <input name="enviar" type="submit" id="enviar" value="enviar" />
    </form>
  </body>
</html>
