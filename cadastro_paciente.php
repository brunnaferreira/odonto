
<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro Paciente</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>      
    <script type="text/javascript" href="js/jquery.js"></script>  
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <meta charset="utf-8"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/mask_paciente.js"></script>
  </head>

  <body>
    <!--CABEÇALHO-->
    <nav>
      <div class="nav-wrapper light-blue">
        <!--a href="#" class="brand-logo right">HOME</a-->
          <ul id="nav-mobile" class="left">
          <li><a href="index.php">Home</a></li>
          <!--li><a href="cadastro_medico.php">Cadastro Médico</a></li>
          <li><a href="paciente.php">Cadastro Paciente</a></li-->       
        </ul>
      </div>
    </nav>

    <!--CLASS/FORM-->
    <div class="row">
      <form class="col s11" action="backend/addPatient.php" method="post"> 
    
      <!--TITULO-->
        <h3>Cadastro Paciente</h3>

      <!--NOME-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome_paciente" id="nome_paciente" type="text" class="validate">
          <label for="nome_paciente">Nome</label>
        </div>

        <!--SOBRENOME-->
        <div class="input-field col s5">  
          <input name="sobrenome_paciente" id="sobrenome_paciente" type="text" class="validate">
          <label for="sobrenome_paciente">Sobrenome</label>
        </div>
       
        <!--DATA DE NASCIMENTO-->   
        <div class="input-field col s5">
          <i class="material-icons prefix">today</i>
          <input name="date_paciente" id="date_paciente" type="text" class="datepicker" >
          <label for="date_paciente">Data de Nascimento</label>
        </div> 

         <!--ENDEREÇO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="endereco_paciente" id="endereco_paciente" type="text" class="validate">
          <label for="endereco_paciente">Endereço</label>
        </div>

         <!--BAIRRO-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="bairro_paciente" id="bairro_paciente" type="text" class="validate">
          <label for="bairro_paciente">Bairro</label>
        </div>

         <!--CIDADE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">store</i>
          <input name="cidade_paciente" id="cidade_paciente" type="text" class="validate">
          <label for="cidade_paciente">Cidade</label>
        </div>

         <!--CEP-->
        <div class="input-field col s5">
          <i class="material-icons prefix">my_location</i>
          <input name="cep_paciente" id="cep_paciente" type="text" class="validate">
          <label for="cep_paciente">CEP</label>
        </div>

         <!--HOSPITAL
        <div class="input-field col s5">
          <i class="material-icons prefix">business</i>
          <input name="hospital_paciente" id="hospital_paciente" type="text" class="validate">
          <label for="hospital_paciente">Hospital</label>
        </div>
-->
         <!--PLANO DE SAÚDE-->
        <div class="input-field col s5">
          <i class="material-icons prefix">payment</i>
          <input name="plano_de_saude" id="plano_de_saude" type="text" class="validate">
          <label for="plano_de_saude">Plano de Saúde do Paciente</label>
        </div>

         <!--NOME DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">perm_identity</i>
          <input name="nome_responsavel" id="nome_responsavel" type="text" class="validate">
          <label for="nome_responsavel">Nome do Responsável</label>
        </div>

         <!--TELEFONE DO RESPONSÁVEL-->
        <div class="input-field col s5">
          <i class="material-icons prefix">phone</i>
          <input name="telefone_responsavel" id="telefone_responsavel" type="text" class="validate">
          <label for="telefone_responsavel">Telefone do Responsável</label>
        </div>

         <!--UF-->
        <div class="input-field col s5" >
            <i class="material-icons prefix">location_on</i>
            <select class="icons" name="paciente_uf" id="paciente_uf">
              <option value="" disabled selected>UF</option>
              <option value="AC" data-icon="images/acre.jpg" class="left circle">Acre - AC</option>
              <option value="AP" data-icon="images/amapa.jpg" class="left circle">Amapá - AP</option>
              <option value="AM" data-icon="images/amazonas.jpg" class="left circle">Amazonas - AM</option>
              <option value="PA" data-icon="images/para.jpg" class="left circle">Pará - PA</option>
              <option value="TO" data-icon="images/rondonia.jpg" class="left circle">Rondônia - RO</option>
              <option value="RR" data-icon="images/roraima.jpg" class="left circle">Roraima - RR</option>
              <option value="TO" data-icon="images/tocantins.jpg" class="left circle">Tocantins - TO</option>
              <option value="AL" data-icon="images/alagoas.jpg" class="left circle">Alagoas - AL</option>
              <option value="BA" data-icon="images/bahia.jpg" class="left circle">Bahia - BA</option>
              <option value="CE" data-icon="images/ceara.jpg" class="left circle">Ceará - CE</option>
              <option value="MA" data-icon="images/maranhao.jpg" class="left circle">Maranhão - MA</option>
              <option value="PB" data-icon="images/paraiba.jpg" class="left circle">Paraíba - PB</option>
              <option value="PE" data-icon="images/pernambuco.jpg" class="left circle">Pernambuco - PE</option>
              <option value="PI" data-icon="images/piaui.jpg" class="left circle">Piauí - PI</option>
              <option value="RN" data-icon="images/riograndedonorte.jpg" class="left circle">Rio Grande do Norte - RN</option>
              <option value="SE" data-icon="images/sergipe.jpg" class="left circle">Sergipe - SE</option>
              <option value="GO" data-icon="images/goias.jpg" class="left circle">Goiás - GO</option>
              <option value="MT" data-icon="images/matogrosso.jpg" class="left circle">Mato Grosso - MT</option>
              <option value="MS" data-icon="images/matogrossodosul.jpg" class="left circle">Mato Grosso Sul - MS</option>
              <option value="DF" data-icon="images/distritofederal.jpg" class="left circle">Distrito Federal - DF</option>
              <option value="ES" data-icon="images/espiritosanto.jpg" class="left circle">Espírito Santo - ES</option>
              <option value="MG" data-icon="images/minasgerais.jpg" class="left circle">Minas Gerais - MG</option>
              <option value="RJ" data-icon="images/riodejaneiro.jpg" class="left circle">Rio Janeiro - RJ</option>
              <option value="SP" data-icon="images/saopaulo.jpg" class="left circle">São Paulo - SP</option>
              <option value="PR" data-icon="images/parana.jpg" class="left circle">Paraná - PR</option>
              <option value="SC" data-icon="images/santacatarina.jpg" class="left circle">Santa Catarina - SC</option>
              <option value="RS" data-icon="images/riograndedosul.jpg" class="left circle">Rio Grande do Sul - RS</option>
            </select>
          </div>

        <!--GENERO-->
        <div class="input-field col s5">
          <select class="icons" id="genero_paciente" name="genero_paciente">
            <option value="" disabled selected>Genero do Paciente</option>
            <option value="1">Masculino</option>
            <option value="2">Feminino</option>
          </select>
        </div>

        <!--CLINICA-->
        <div class="input-field col s5">
          <p>
            <input type="checkbox" id="clinica" name="clinica" />
            <label for="clinica">Paciente da Clinica</label>
          </p>
        </div>

         
        <!--PRONTUÁRIO
        <div class="input-field col s10">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="prontuario" id="prontuario" class="materialize-textarea"></textarea>
          <label for="prontuario">Prontuário</label>
        </div>
-->
        <!--CHECK-->
          <div class="input-field col s9">
            <button class="btn waves-effect waves-light light-blue" type="submit" name="action">Confirmar Cadastro
              <i class="material-icons right">send</i>
            </button>
          </div>

      </form>
    </div>
    
    <!--SCRIPSTs-->
    <script>
      $('.datepicker').pickadate({
      selectYears:100
      });
      $(document).ready(function() {
      $('select').material_select();           
      });

    </script>
  </body>
</html>
