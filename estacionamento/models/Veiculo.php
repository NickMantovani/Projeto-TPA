<?php
class Veiculo {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->prepare("SELECT * FROM veiculos");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function adicionar($modelo, $placa) {
        $stmt = $this->pdo->prepare("INSERT INTO veiculos (modelo, placa) VALUES (?, ?)");
        return $stmt->execute([$modelo, $placa]);
    }

    public function editar($id, $modelo, $placa) {
        $stmt = $this->pdo->prepare("UPDATE veiculos SET modelo = ?, placa = ? WHERE id = ?");
        return $stmt->execute([$modelo, $placa, $id]);
    }

    public function buscarPorId($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM veiculos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deletar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM veiculos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>
