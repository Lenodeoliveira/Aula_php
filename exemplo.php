<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo</title>
       

         <H1><strong>Calculadora php:</strong></H1>  
      
    </head>
  <body>
   
 <form method="post" action="">
           
            <!--input que receberá o primeiro valor a ser calculado --> 

            <input type="text" name="v1" placeholder="Valor 1" />

            <!-- Select com o tipo de operação (Somar, Diminuir, Multiplicar ou Dividir -->
            <select name="operacao">
                <option value="soma">+</option>
                <option value="subtrai">-</option>
                <option value="multiplica">*</option>
                <option value="divide">/</option>
            </select>

            <!-- Input que receberá o segundo valor a ser calculado -->
            <input type="text" name="v2" placeholder="Valor 2" />

            <!-- Input que enviará os valores para a função de cálculo -->
            <input type="submit" name="doCalc" value="Calcular" /><br><br><br>


        </form>

  </body>
 </html>


<?php
        # classe :: Calculadora
        class Calculadora {

            # Função "Calcular" para executar o cálculo dos valores (v1 e v2)
            public function Calcular() {

                # Se for setado algum valor ào submit (doCalc), executa a operação
                if (isset($_POST['doCalc'])) {
                     
                                       
                    # Se a operação for soma (value = soma), então...
                    if ($_POST['operacao'] == "soma") {

                        # Armazena a soma de [v1 + v2] na variável $resultado
                        $resultado = $_POST['v1'] + $_POST['v2'];

                        # Exibe a variável $resultado com os valores já somados
                        return $resultado;

                        # Ou então, se a operação não for (value = soma), e sim (value = subtrai) então...
                    } elseif ($_POST['operacao'] == "subtrai") {
                        $resultado = $_POST['v1'] - $_POST['v2'];
                        
                        # exibe o resutado
                        return $resultado;
                    
                    } elseif ($_POST['operacao'] == 'multiplica') {
                        
                        $resultado = $_POST['v1'] * $_POST['v2'];
                        
                        #exibe o resultado
                        return $resultado;
                    
                    } elseif ($_POST['operacao'] == 'divide') {
                        
                        $resultado = $_POST['v1'] / $_POST['v2'];
                        
                        #exibe o resultado
                        return $resultado;
                    
                    }
                }
            }

        }
              
              

        # Instancia a classe CALCULADORA()
        $calcular = new Calculadora();
        

        
        # Executa a função
        echo $calcular->Calcular();
        #FIM   
 
        ?>