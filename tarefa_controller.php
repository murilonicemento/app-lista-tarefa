<?php
require("./tarefa.model.php");
require("./tarefa.service.php");
require("./conexao.php");

$acao = isset($_GET["acao"]) ? $_GET["acao"] : $acao;

if ($acao == "inserir") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefa->__set("tarefa", $_POST["tarefa"]);
  $tarefaService->inserir();

  header("Location: nova_tarefa.php?inclusao=1");
} else if ($acao == "recuperar") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefas = $tarefaService->recuperar();
} else if ($acao == "atualizar") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefa->__set("id", $_POST["id"]);
  $tarefa->__set("tarefa", $_POST["tarefa"]);

  if ($tarefaService->atualizar()) {
    if (isset($_GET["pag"]) && $_GET["pag"] == "index") {
      header("Location: index.php");
    } else {
      header("Location: todas_tarefas.php");
    }
  }
} else if ($acao == "remover") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefa->__set("id", $_GET["id"]);
  $tarefaService->remover();

  if (isset($_GET["pag"]) && $_GET["pag"] == "index") {
    header("Location: index.php");
  } else {
    header("Location: todas_tarefas.php");
  }
} else if ($acao == "marcarRealizada") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefa->__set("id", $_GET["id"]);
  $tarefa->__set("id_status", 2);
  $tarefaService->marcarRealizada();

  if (isset($_GET["pag"]) && $_GET["pag"] == "index") {
    header("Location: index.php");
  } else {
    header("Location: todas_tarefas.php");
  }
} else if ($acao == "recuperarTarefasPendentes") {
  $tarefa = new Tarefa();
  $conexao = new Conexao();
  $tarefaService = new TarefaService($conexao, $tarefa);

  $tarefa->__set("id_status", 1);
  $tarefas = $tarefaService->recuperarTarefasPendentes();
}
