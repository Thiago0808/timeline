<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="" method="post" class=" mt-5 border border-dark p-5">
            <h1 class="mb-3">Calculadora PHP</h1>
            <?php
            $n1=filter_input(INPUT_POST, 'n1', FILTER_SANITIZE_NUMBER_FLOAT);
            $n2=filter_input(INPUT_POST, 'n2', FILTER_SANITIZE_NUMBER_FLOAT);
            $op=filter_input(INPUT_POST, 'operador', FILTER_SANITIZE_SPECIAL_CHARS);
            ?>
            <!-- Primeiro Número -->
            <div class="mb-3">
                <label class="form-label" for="n1">Número 1</label>
                <input value="<?=$n1?>"type="number" name="n1" id="n1" class="form-control" required >
            </div>
            <!-- Segundo Número -->
            <div class="mb-3">
                <label class="form-label" for="n2">Número 2</label>
                <input value="<?=$n2?>" type="number" name="n2" id="n2" class="form-control" required>
            </div>
            <!-- Calculadora -->
            <div class="mb-3">
                <label class="form-label" for="operador">Operação</label>
                <select name="operador" id="operador" class="form-select">
                    <option value="somar" <?= ($op == 'somar') ? 'selected' : '' ?>>Somar</option>
                    <option value="subtrair" <?= ($op == 'subtrair') ? 'selected' : '' ?>>Subtrair</option>
                    <option value="multiplicar" <?= ($op == 'multiplicar') ? 'selected' : '' ?>>Multiplicar</option>
                    <option value="dividir" <?= ($op == 'dividir') ? 'selected' : '' ?>>Dividir</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="submit" value="Calcular" class="btn btn-dark btn-lg">
            </div>
        </form>
            <!-- Resultado -->
            <div >
                <?php
                    try {
                        $n1=filter_input(INPUT_POST, 'n1', FILTER_SANITIZE_NUMBER_FLOAT);
                        $n2=filter_input(INPUT_POST, 'n2', FILTER_SANITIZE_NUMBER_FLOAT);
                        $op=filter_input(INPUT_POST, 'operador', FILTER_SANITIZE_SPECIAL_CHARS);

                        if ($n2==0 and $op=='dividir'){
                            echo '<div class="alert alert-danger">';
                            echo 'Não é permitido divisão por 0';
                            echo '</div>';
                        }
                        else{
                            if(!is_null($n1)){
                                $resultado=0;
                                switch($op){
                                    case 'somar':
                                        $resultado="$n1+$n2=".$n1+$n2;
                                        break;
                                    case 'subtrair':
                                        $resultado="$n1-$n2=".$n1-$n2;
                                        break;
                                    case 'multiplicar':
                                        $resultado="$n1*$n2=".$n1*$n2;
                                        break;
                                    case 'dividir':
                                        $resultado="$n1/$n2=".$n1/$n2;
                                        break;
                                    default:
                                    $resultado='Operação não permitida';

                                }   
                                echo '<div class="alert alert-success">';
                                echo $resultado;
                                echo '</div>';


                            }
                        }

                    } catch (\Throwable $th) {
                        echo '<div class="alert alert-danger">';
                        echo 'Ops, tivemos um problema! Tente novamente.';
                        echo '</div>';
                        file_put_contents('erros.txt', $th->getMessage()."/n", FILE_APPEND);
                    }
                    //Desafio de Código
                    //Faça os ultimos números diigitados aparecerem nos seus respectivos campos após o cálculo
                ?>
            </div>
     

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>