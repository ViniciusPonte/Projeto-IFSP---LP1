<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'Template/Header.php';
        ?>
    </head>
    <body>

            
            <?php
                include 'Template/Titulo_buscador.php';
                include 'Template/Login.php';
                include 'Template/Carrinho_Restrito.php';
            ?>
            
        
        <div class="pagina-registro row col-md-8" style="border-radius:40px;">
            <div class="row w-100">
                <form class="col s12" method="post" action="IncluirPessoa.php">
                    <fieldset><legend>Dados Pessoais</legend><br/>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Seu nome completo aqui" id="nome-completo" name="nome" maxlength="50" type="text" class="validate" style="width:100%;" required/>
                                <label for="nome-completo">Nome Completo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <input type="date" id="data-nasc" name="data-nasc" class="validate" style="width:85%;" required/>
                              <label for="data-nasc">Data de Nascimento</label>
                            </div>
                            <div class="radio-sexo input-field col s12">
                                <p>
                                  <label>
                                    <input class="with-gap" name="sexo" value="M" type="radio"  />
                                    <span>M</span>
                                  </label>
                                  <label>
                                    <input class="with-gap" name="sexo" value="F" type="radio"  />
                                    <span>F</span>
                                  </label>
                                </p>
                            </div>
                            <div class="input-field col s12">
                              <input type="email" id="email" name="email" class="validate" style="width:480px;" required/>
                              <label for="email">E-Mail</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                              <input type="tel" placeholder="(xx)xxxxx-xxxx" name="cel" id="celular" class="validate" style="width:250px;" required/>
                              <label for="celular">Celular</label>
                            </div>
                            <div class="input-field col s12">
                              <input type="text" id="rg" placeholder="xxxxxxxx-x" name="rg" maxlength="9" class="validate" style="width:250px;" required/>
                              <label for="rg">RG</label>
                            </div>
                            <div class="input-field col s12">
                              <input type="text" id="cpf" placeholder="xxxxxxxxx-xx" name="cpf" maxlength="11" class="validate" style="width:250px;" required/>
                              <label for="cpf">CPF</label>
                            </div>
                        </div> <br/><br/> 
                    </fieldset>
                    <fieldset><legend>Endereço</legend><br/>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Seu endereço completo aqui" id="end-completo" name="rua" maxlength="80" type="text" class="validate" style="width:100%;" required/>
                                <label for="end-completo">Endereço Completo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Número" id="num" name="numero" maxlength="5" type="text" class="validate" style="width:100%;" required/>
                                <label for="num">Número</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Bairro" id="bairro" name="bairro" maxlength="20" type="text" class="validate" style="width:100%;" required/>
                                <label for="bairro">Bairro</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="Cidade" id="cidade" name="cidade" maxlength="30" type="text" class="validate" style="width:100%;" required/>
                                <label for="cidade">Cidade</label>
                            </div>
                            <div class="input-field col s12">
                                <input placeholder="CEP" id="cep" name="cep" maxlength="8" type="text" class="validate" style="width:100%;" required/>
                                <label for="cep">CEP</label>
                            </div>
                            <div class="input-field col s12">
                                <select class="mdb-select md-form" id="estado" name="estado">
                                    <option value="" disabled selected>Escolha o Estado</option>
                                    <option value="AC">Acre </option>
                                    <option value="AL">Alagoas </option>
                                    <option value="AP">Amapá </option>
                                    <option value="AM">Amazonas </option>
                                    <option value="BA">Bahia </option>
                                    <option value="CE">Ceará </option>
                                    <option value="DF">Distrito Federal - DF </option>
                                    <option value="ES">Espírito Santo </option>
                                    <option value="GO">Goiás </option>
                                    <option value="MA">Maranhão </option>
                                    <option value="MT">Mato Grosso </option>
                                    <option value="MS">Mato Grosso do Sul </option>
                                    <option value="MG">Minas Gerais </option>
                                    <option value="PA">Pará </option>
                                    <option value="PB">Paraíba </option>
                                    <option value="PR">Paraná </option>
                                    <option value="PE">Pernambuco </option>
                                    <option value="PI">Piauí </option>
                                    <option value="RJ">Rio de Janeiro </option>
                                    <option value="RN">Rio Grande do Norte </option>
                                    <option value="RS">Rio Grande do Sul </option>
                                    <option value="RO">Rondônia </option>
                                    <option value="RR">Roraima </option>
                                    <option value="SC">Santa Catarina </option>
                                    <option value="SP">São Paulo </option>
                                    <option value="SE">Sergipe </option>
                                    <option value="TO">Tocantins </option>
                                </select>
                                <label for="estado">UF</label>
                            </div>
                        </div><br/><br/>
                    </fieldset>
                    <fieldset><legend>Informações de Login</legend><br/>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Nome de usuário" id="login" name="login" maxlength="20" type="text" class="validate" style="width:50%;" required/>
                                <label for="login">Nome de Usuário</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Senha" id="senha" name="senha" maxlength="20" type="password" class="validate" style="width:50%;" required/>
                                <label for="senha">Senha</label>
                            </div>
                        </div>
                    </fieldset>
                    
                   <button class="btn-registro btn blue blue" type="submit" name="action"><p class="botaoRegistro">Inscrever<i class="submit-clean material-icons right">send</i></p></button>
                   <button class="btn-registro btn blue blue" type="reset" name="action"><p class="botaoRegistro">Limpar<i class="submit-clean material-icons right">keyboard_return</i></p></button>
                </form>
            </div>
        </div>
        <?php
            include 'Template/Footer.php';
            include 'Template/Script.php';
        ?>
        
    </body>
</html>