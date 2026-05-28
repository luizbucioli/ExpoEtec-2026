<?php
include 'includes/header.php';
?>

<div class="flex items-center justify-center min-h-screen">
  <div class="w-85 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-xl shadow-black/50">
    <div class="bg-red-900 px-6 py-8 text-center">
      <p class="text-xs tracking-widest text-red-300 uppercase mb-1.5">Bem-vindo à</p>
      <h1 class="font-serif text-4xl font-medium text-white tracking-wide">EXPOETEC</h1>
      <div class="w-10 h-0.5 bg-red-500 mx-auto mt-4 rounded-full"></div>
    </div>
    <div class="p-6 flex flex-col gap-3">
      <p class="text-xs text-neutral-400 text-center uppercase tracking-widest mb-1">Escolha um jogo</p>
      <a href="/pages/jogo_memoria/memoria.php"
        class="flex items-center gap-3 p-4 bg-neutral-100 dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl hover:border-red-400 transition-colors group">
        <div class="w-9 h-9 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
          <img src="/assets/images/jogodamemoria.png" alt="jogo da memória" class="w-8 h-8">
        </div>
        <div>
          <p class="font-medium text-neutral-800 dark:text-neutral-100">Jogo da Memória</p>
          <p class="text-xs text-neutral-500">Teste sua memória</p>
        </div>
      </a>
      <a href="/pages/jokenpo/jokenpo.php"
        class="flex items-center gap-3 p-4 bg-neutral-100 dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl hover:border-red-400 transition-colors group">
        <div class="w-9 h-9 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
          <img src="/assets/images/jokenpo.png" alt="jokenpo" class="w-8 h-8">
        </div>
        <div>
          <p class="font-medium text-neutral-800 dark:text-neutral-100">Jokenpo</p>
          <p class="text-xs text-neutral-500">Pedra, papel ou tesoura</p>
        </div>
      </a>
      <a href="/pages/batalha_naval/naval.php"
        class="flex items-center gap-3 p-4 bg-neutral-100 dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl hover:border-red-400 transition-colors group">
        <div class="w-9 h-9 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
          <img src="/assets/images/batalha-naval.png" alt="batalha naval" class="w-9 h-9">
        </div>
        <div>
          <p class="font-medium text-neutral-800 dark:text-neutral-100">Batalha Naval</p>
          <p class="text-xs text-neutral-500">Teste sua estrategia</p>
        </div>
      </a>
      <a href="/pages/jogo_forca/forca.php"
        class="flex items-center gap-3 p-4 bg-neutral-100 dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700 rounded-xl hover:border-red-400 transition-colors group">
        <div class="w-9 h-9 bg-red-50 rounded-lg flex items-center justify-center shrink-0">
          <img src="/assets/images/jogo-da-forca.png" alt="jogo da forca" class="w-6 h-6">
        </div>
        <div>
          <p class="font-medium text-neutral-800 dark:text-neutral-100">Jogo da Forca</p>
          <p class="text-xs text-neutral-500">Adivinhe a palavra</p>
        </div>
      </a>
    </div>
    <p class="text-center text-xs text-neutral-400 pb-4">ExpoeTec · 2026</p>
  </div>
</div>

<?php
include 'includes/footer.php';
?>