<?php

namespace Blog\Classes;

# Cada método dp controlador é uma página ou funcionalidade so sistema
# Se for uma página, carrega uma view (pasta pages)

class Controlador{

    # Página Inicial
    function inicial(){
        #definr a página
        $page = "inicial";

        $premium = Texto::listaPremium();
        $normal = Texto::listaNormal();


        # Incorporar o Template
        require 'template/template1.php';
    }


    #Página de Cadastro do Usuário
    function novoUsuario(){
        if (filter_input(INPUT_POST, 'nome')){
            $u = new Usuario();
            $u ->nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $u ->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $u ->senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ADD_SLASHES);
            if ($u->salvar()){
                header('Location:?=login');
                exit;
            };
            // Criar MSG de Erro
            // TODO



        };
        $page = "novoUsuario";
        require 'template/template1.php';
    }
    # Salvar o usuário no BD
    // TODO


    #Página de Login
    function login(){
        if (filter_input(INPUT_POST, 'email')){
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ADD_SLASHES);
            #verificar se existe
            $u = new Usuario();
            if ($u->buscarPorEmail($email)){
                #Verificar a senha
                if (password_verify($senha, $u->senha)){
                    $_SESSION['id'] = $u->id;
                    header('Location:?p=novoTexto');
                    exit;
                }

            }
            else{
                #user não existe; TODO msg
            }


        }

        $page = 'login';
        require 'template/template1.php';
    }

    function novoTexto(){
        if (filter_input(INPUT_POST, 'texto')){
            $t = new Texto();
            $t -> titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
            $t -> texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);
            $t -> premium = filter_input(INPUT_POST, 'premium', FILTER_SANITIZE_SPECIAL_CHARS);

            if  ( (strlen($t->texto) > 50)  && (filter_input(INPUT_POST, 'mais') != "mais") ){
                header('Location: index.php?p=novoTexto&msg='.urlencode('Limite de Caracteres Ultrapassado! Pague os R$20.00 para comentar tanto!'));
                exit;
            };

            if (filter_input(INPUT_POST, 'valor_pago')){
                $t -> valor_pago = filter_input(INPUT_POST, 'valor_pago', FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $t -> usuario_id = $_SESSION['id'];
            if ($t->salvar()){
                header('Location:index.php');
                exit;
            };
        }

        $page = 'novoTexto';
        require 'template/template1.php';
    }
}