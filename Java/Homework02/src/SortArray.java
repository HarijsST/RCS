import java.util.Scanner;
import java.util.Random;

public class SortArray {

	public static void main(String[] args) {
		System.out.print("Ievadi skaitli no 20 - 40: ");
		Scanner scanner = new Scanner(System.in);
		int number = scanner.nextInt();
		
		if(number >= 20 && number <= 40) {
			System.out.println("Tu ievadiji: " + number);
			Random rnd = new Random();
			int[] input = new int[number];
						
			for(int i = 0; i < input.length; i++){
				int v = rnd.nextInt(90);
				int z = v + 10;
				input[i] = z;				
			}
			for(int i = 0; i <input.length; i++) {
				System.out.print(input[i] + "," + " ");				
			}
			bubbleSort(input);  
            
            System.out.println();  
            for(int i=0; i < input.length; i++){  
                    System.out.print(input[i] + "," + " ");  
            }  
		}
		else {
			System.out.println("Ievade ir nepareiza");
		}
		
		
		scanner.close();
	}
	 static void bubbleSort(int[] arr) {  
	        int n = arr.length;  
	        int temp = 0;  
	         for(int i=0; i < n; i++){  
	                 for(int j=1; j < (n-i); j++){  
	                          if(arr[j-1] > arr[j]){    
	                                 temp = arr[j-1];  
	                                 arr[j-1] = arr[j];  
	                                 arr[j] = temp;  
	                         }  
	                          
	                 }  
	         }  
}}
