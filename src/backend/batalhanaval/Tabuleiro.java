package backend.batalhanaval;

import java.util.Random;

public class Tabuleiro {
    
    Random random = new Random();
    
    int[][] tabuleiro = new int[5][5];
    

    public void mostrar() {
        
        for(int linha = 0; linha < 5; linha++){
            for(int coluna = 0; coluna < 5; coluna++){
                System.out.print(tabuleiro[linha][coluna] + " ");
            }
            
            System.out.println();
        }
    }
}