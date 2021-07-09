

<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta title="Actual Clean - Lavagem de sofás, Lavagem de tapetes, Lavagem de persianas, Lavagem de cortinas, Lavagem de carpetes, Lavagem de estofados em geral">
    <meta name="description" content="Lavagem de sofás, Lavagem de tapetes, Lavagem de persianas, Lavagem de cortinas, Lavagem de carpetes, Lavagem de estofados em geral">
    <meta name="author" content="Fernanda Galindo">
    <link rel="icon" href="img/favicon.ico">

    <title>Actual Clean - Lavagem de sofás, Lavagem de tapetes, Lavagem de persianas, Lavagem de cortinas, Lavagem de carpetes, Lavagem de estofados em geral</title>

    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Estilos customizados para este template -->
    <link href="carousel.css" rel="stylesheet">
  </head>

  <body>

   <header style="height: 50px;">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
       <div style="position:absolute; top:0px; left:0px;"><img src="img/logo_actualclean.png" style="margin: 15px; padding-left: 5px;"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><font color="#0077bb ">...............................................</font></li>
            <li class="nav-item">
              <a class="nav-link" href="index.html">HOME</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="index.html#aempresa">A EMPRESA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#clientes">CLIENTES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#dicas">DICAS</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="index.html#servicos" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVIÇOS</a>
            <div class="dropdown-menu" aria-labelledby="dropdown03">
              <a class="dropdown-item" href="index.html#lavagemdeestofados">Lavagem de Estofados</a>
              <a class="dropdown-item" href="index.html#lavagemdecortinasepersianas">Lavagem de Cortinas e Persianas</a>
              <a class="dropdown-item" href="index.html#lavagemdecarpetesetapetes">Lavagem de Carpetes e Tapetes</a>
               <a class="dropdown-item" href="index.html#lavagemdeimpermeabilizacaoeconservacao">Impermeabilização e Conservação</a>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#contato">CONTATO</a>
            </li>
          </ul>
        </div>
         <div style="padding-right: 20px; float:right; color: #fff;">Tel: (11) 4172-8674</div>
      </nav>
    </header>

    <main role="main">

      <div class="container">
         <hr class="featurette-divider">

         <?php
         $errorMSG = "";

         // NAME
         if (empty($_POST["name"])) {
             $errorMSG = "Por favor informe seu nome";
         } else {
             $name = $_POST["name"];
         }

         // EMAIL
         if (empty($_POST["email"])) {
             $errorMSG .= "Por favor informe seu e-mail";
         } else {
             $email = $_POST["email"];
         }

         // MSG SUBJECT
         if (empty($_POST["msg_subject"])) {
             $errorMSG .= "Por favor, informe o assunto";
         } else {
             $msg_subject = $_POST["msg_subject"];
         }


         // MESSAGE
         if (empty($_POST["message"])) {
             $errorMSG .= "Por favor digite sua mensagem";
         } else {
             $message = $_POST["message"];
         }


         $EmailTo = "contato@actualclean.com.br
         ";
         $Subject = "Mensagem de Contato pelo Site";

         // prepare email body text
         $Body = "";
         $Body .= "Nome: ";
         $Body .= $name;
         $Body .= "\n";
         $Body .= "Email: ";
         $Body .= $email;
         $Body .= "\n";
         $Body .= "Assunto: ";
         $Body .= $msg_subject;
         $Body .= "\n";
         $Body .= "Menssagem: ";
         $Body .= $message;
         $Body .= "\n";

         // send email
         $success = mail($EmailTo, $Subject, $Body, "From:".$email);

         // redirect to success page
         if ($success){
            echo "<center>Mensagem enviada com sucesso. Entraremos em contato o mais breve possível!<br><br><br><br></center>";
         }else{
            echo 'erro'.$success->ErrorInfo;
         }

         ?>
       </div>
             
       <br>
<footer id="t3-footer" style="background:#cccccc; padding-left:20px; padding-top:10px; height:150px;">
	<div style="float:left; width:68%;">
&nbsp;&nbsp;ACTUAL CLEAN Ltda ME &copy; Todos os direitos reservados<br>
						<!--Rua Baquirivú 507 - Jabaquara - cep. 04404-030 São Paulo SP<br>-->
						&nbsp;&nbsp;Tel: (11) <b>4172-8674</b> / 95270-1251 / <b>95270-1251</b> <img src="img/icone_whatsapp.gif">&nbsp;&nbsp;-&nbsp;&nbsp;e-mail: <a href="mailto:contato@actualclean.com.br" class="link">contato@actualclean.com.br</a><br>
  	</div>
  	<div style="float:right; width:30%; text-align: right;">
    
    Atendimento Online    
           
            
    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
    <div id="SkypeButton_Call_Actual Clean_1" class="skypebutton">
    <script type="text/javascript">
    Skype.ui({
      "name": "call",
      "element": "SkypeButton_Call_Actual Clean_1",
      "participants": ["Actual Clean"],
      "imageSize": 32    });
    </script>
    </div>
    
	    </div>
</footer>
<!-- //FOOTER -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script-->
  </body>
</html>
