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
            #FIM   
 
        ?>