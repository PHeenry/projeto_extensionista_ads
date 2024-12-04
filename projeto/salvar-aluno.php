<?php
switch (@$_REQUEST['acao']) {
    case 'salvar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];


        $sql = "INSERT INTO alunos (nome, sobrenome, email) VALUES ('{$nome}', '{$sobrenome}', '{$email}')";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Salvo com sucesso!');</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {
            print "<script>alert('Não foi possivel salvar!');</script>";
            print "<script>location.href='?page=lista';</script>";
        }
        break;

    case 'editar':
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];

        $sql = "UPDATE alunos SET nome='{$nome}', sobrenome='{$sobrenome}', email='{$email}'
        WHERE
        id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {
            print "<script>alert('Não foi possivel editar!');</script>";
            print "<script>location.href='?page=lista';</script>";
        }
        break;
    case 'exluir':

        $sql = "DELETE FROM alunos WHERE id=" . $_REQUEST["id"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=lista';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir!');</script>";
            print "<script>location.href='?page=lista';</script>";
        }

        break;
}
