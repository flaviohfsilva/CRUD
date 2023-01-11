<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $sql = "INSERT INTO usuarios (nome, 
        data_nasc, email, senha) VALUES
        ('{$nome}', '{$data_nasc}', '{$email}', 
        '{$senha}')";
        
        $res = $conn-> query($sql);

        if($res==true){
            print "<script>alert('Cadastro com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar!);</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;
    
    case 'editar':
        $nome = $_POST["nome"];
        $data_nasc = $_POST["data_nasc"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]);

        $sql = "UPDATE usuarios SET nome='{$nome}',
                    data_nasc='{$data_nasc}',
                    email='{$email}', 
                    senha='{$senha}'  
                WHERE id=".$_REQUEST["id"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível Editar!);</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        
        $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

        $res = $conn-> query($sql);
        
        if($res==true){
            print "<script>alert('Ecluído com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }else{
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;    
}