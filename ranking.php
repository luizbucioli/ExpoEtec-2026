<?php
session_start();
require_once '../includes/db.php';
require_once '../includes/auth.php';
requireLogin();

// Busca ranking geral (melhor pontuação por usuário por jogo)
$stmt = $pdo->query("
    SELECT u.nome, p.jogo, MAX(p.pontos) as melhor_pontuacao, COUNT(p.id) as partidas
    FROM pontuacoes p
    JOIN usuarios u ON u.id = p.usuario_id
    GROUP BY u.id, p.jogo
    ORDER BY melhor_pontuacao DESC
    LIMIT 20
");
$ranking = $stmt->fetchAll();

// Ranking separado por jogo
$stmtMem = $pdo->query("
    SELECT u.nome, MAX(p.pontos) as melhor_pontuacao
    FROM pontuacoes p
    JOIN usuarios u ON u.id = p.usuario_id
    WHERE p.jogo = 'memoria'
    GROUP BY u.id
    ORDER BY melhor_pontuacao DESC
    LIMIT 10
");
$rankingMemoria = $stmtMem->fetchAll();

$stmtJok = $pdo->query("
    SELECT u.nome, MAX(p.pontos) as melhor_pontuacao
    FROM pontuacoes p
    JOIN usuarios u ON u.id = p.usuario_id
    WHERE p.jogo = 'jokenpo'
    GROUP BY u.id
    ORDER BY melhor_pontuacao DESC
    LIMIT 10
");
$rankingJokenpo = $stmtJok->fetchAll();

$pageTitle = 'Ranking — EXPOETEC';
require_once '../includes/header.php';
?>

<main class="max-w-5xl mx-auto px-4 py-12">
  <h1 class="text-3xl font-bold text-center text-yellow-400 mb-10">🏆 Ranking dos Jogadores</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

    <!-- Ranking Memória -->
    <div class="bg-gray-900 rounded-2xl p-6 border border-gray-800">
      <h2 class="text-xl font-bold text-indigo-400 mb-4">🧠 Jogo da Memória</h2>
      <?php if (empty($rankingMemoria)): ?>
        <p class="text-gray-500 text-sm">Nenhuma partida registrada ainda.</p>
      <?php else: ?>
        <ol class="space-y-3">
          <?php foreach ($rankingMemoria as $i => $row): ?>
            <?php
              $medalha = match($i) { 0 => '🥇', 1 => '🥈', 2 => '🥉', default => ($i + 1) . 'º' };
            ?>
            <li class="flex items-center justify-between bg-gray-800 rounded-lg px-4 py-3">
              <div class="flex items-center gap-3">
                <span class="text-lg"><?= $medalha ?></span>
                <span class="text-white font-medium"><?= htmlspecialchars($row['nome']) ?></span>
              </div>
              <span class="text-indigo-400 font-bold"><?= $row['melhor_pontuacao'] ?> pts</span>
            </li>
          <?php endforeach; ?>
        </ol>
      <?php endif; ?>
    </div>

    <!-- Ranking Jokenpo -->
    <div class="bg-gray-900 rounded-2xl p-6 border border-gray-800">
      <h2 class="text-xl font-bold text-purple-400 mb-4">✂️ Jokenpo</h2>
      <?php if (empty($rankingJokenpo)): ?>
        <p class="text-gray-500 text-sm">Nenhuma partida registrada ainda.</p>
      <?php else: ?>
        <ol class="space-y-3">
          <?php foreach ($rankingJokenpo as $i => $row): ?>
            <?php
              $medalha = match($i) { 0 => '🥇', 1 => '🥈', 2 => '🥉', default => ($i + 1) . 'º' };
            ?>
            <li class="flex items-center justify-between bg-gray-800 rounded-lg px-4 py-3">
              <div class="flex items-center gap-3">
                <span class="text-lg"><?= $medalha ?></span>
                <span class="text-white font-medium"><?= htmlspecialchars($row['nome']) ?></span>
              </div>
              <span class="text-purple-400 font-bold"><?= $row['melhor_pontuacao'] ?> pts</span>
            </li>
          <?php endforeach; ?>
        </ol>
      <?php endif; ?>
    </div>

  </div>

  <div class="text-center mt-10">
    <a href="../index.php" class="text-indigo-400 hover:underline text-sm">← Voltar ao menu</a>
  </div>
</main>

<?php require_once '../includes/footer.php'; ?>
