<?php 
	$nomeBanda = $_POST["nomeBanda"];
  $linkImg = $_POST["linkImagem"];
  $nomeIntg1 = $_POST["nomeIntegrante1"];
  $dataNasc1 = $_POST["dNascIntegrante1"];
  $instrumento1 = $_POST["instrumento1"];
  $nomeIntg2 = $_POST["nomeIntegrante2"];
  $dataNasc2 = $_POST["dNascIntegrante2"];
  $instrumento2 = $_POST["instrumento2"];
  $nomeIntg3 = $_POST["nomeIntegrante3"];
  $dataNasc3 = $_POST["dNascIntegrante3"];
  $instrumento3 = $_POST["instrumento3"];
  $biografia = $_POST["biografia"];
  $corFundo = $_POST["corFundo"];
  $corTexto = $_POST["corTexto"];
  
  $cores["Azul"] = 'blue';
  $cores["Amarelo"] = 'yellow';
  $cores["Branco"] = 'white';
  $cores["Preto"] = 'black';
  $cores["Verde"] = 'green';
  $cores["Vermelho"] = 'red';
?>
<!doctype html>
 <html lang="pt-br">
  <head>
    <meta charset = "utf-8">
    <title> <?= $nomeBanda ?></title>
  </head>
  <body bgcolor = <?= '"'. $cores["$corFundo"]. '"' ?> text =<?= '"' . $cores["$corTexto"]. '"' ?> >
    <h1 align = 'center'> <?= $nomeBanda ?></h1>
    <center>
    <img src= <?= '"'. $linkImg . '"'?> title = <?= '"' . $nomeBanda . '"' ?> alt = <?= '"' . $nomeBanda . '"' ?> >
    </center>
    <hr>
    <h1> Biografia </h1>
    <p>
      <?= $biografia ?>
    </p>
    <hr>
    <h1> Integrantes </h1>
      <table border = '1' align = 'center'>
        <thead>
          <tr>
            <th> Nome  </th>
            <th> Data de nascimento  </th>
            <th> Instrumento  </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td> <?= $nomeIntg1 ?> </td>
            <td> <?= $dataNasc1 ?> </td>
            <td> <?= $instrumento1 ?> </td>
          </tr>
          <tr>
            <td> <?= $nomeIntg2 ?> </td>
            <td> <?= $dataNasc2 ?> </td>
            <td> <?= $instrumento2 ?> </td>
          </tr>
          <tr>
            <td> <?= $nomeIntg3 ?> </td>
            <td> <?= $dataNasc3 ?> </td>
            <td> <?= $instrumento3 ?> </td>
          </tr>
    
        </tbody>
      </table>
  </body>
</html>  
