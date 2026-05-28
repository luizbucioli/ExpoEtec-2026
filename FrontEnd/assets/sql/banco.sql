-- =============================================
-- EXPOETEC - Estrutura do Banco de Dados
-- =============================================

CREATE DATABASE IF NOT EXISTS expoetec CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE expoetec;

-- Tabela de usuários
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) UNIQUE NOT NULL,
  sala VARCHAR(100) NOT NULL
  criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de pontuações
CREATE TABLE IF NOT EXISTS pontuacoes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT NOT NULL,
  jogo VARCHAR(50) NOT NULL,
  pontos INT NOT NULL,
  jogado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
