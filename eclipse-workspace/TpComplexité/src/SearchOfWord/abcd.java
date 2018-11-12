package SearchOfWord;


import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.util.ArrayList;
import java.util.HashSet;
import java.util.Scanner;
import java.util.regex.Pattern;

import edu.smu.tspell.wordnet.Synset;
import edu.smu.tspell.wordnet.WordNetDatabase;


public class abcd {
	public static String msg="";
	public static ArrayList<String> arrayList2;



	public static ArrayList<String> dictinnaire(String wordForm) throws Exception {
		//String wordForm = "day";
		//  Get the synsets containing the word form=capicity
		ArrayList<String> al = new ArrayList<String>();
		File f=new File("WordNet\\2.1\\dict");
		//    System.setProperty("wordnet.database.dir", f.toString());
		System.setProperty("wordnet.database.dir", "C:\\Program Files (x86)\\WordNet\\2.1\\dict");
		//setting path for the WordNet Directory

		WordNetDatabase database = WordNetDatabase.getFileInstance();
		Synset[] synsets = database.getSynsets(wordForm);
		//  Display the word forms and definitions for synsets retrieved

		if (synsets.length > 0){

			HashSet hs = new HashSet();
			for (int i = 0; i < synsets.length; i++){
				String[] wordForms = synsets[i].getWordForms();
				for (int j = 0; j < wordForms.length; j++)
				{
					al.add(wordForms[j]);
				}


				//removing duplicates
				hs.addAll(al);
				al.clear();
				al.addAll(hs);

			}

		}
		else
		{
			//le mot qui  rechercher n'existe pas dans le fichier
			Main.label2.setText("Aucun synsets n'existe qui contient la forme de mot:' " + wordForm + " '.");
		}
		return al;
	}

	public  static  ArrayList<String> Search2(String mot) throws Exception {
		ArrayList<String> arrayList=new ArrayList<String>();
		ArrayList<String> list=null;
		list=new ArrayList<String>();
		Scanner s =null;
		s=new Scanner(new BufferedReader(new FileReader("exampl.txt")));
		boolean test=false;
		int i=0;
		String s1= null;
		if (dictinnaire(mot).size()>0){
			list=dictinnaire(mot);

			while (s.hasNext() ) {
				s1=s.next();

				for (int i1 = 0; i1 < list.size(); i1++) {

					if (Pattern.matches(list.get(i1), s1)&&((list.get(i1)).length()>=1)) {
						arrayList.add(s1);

						test=true;	

						Main.label2.setText("");

					}}
			}
			i++;}else {
				test=false;	
			}


		if (test==false) {
			Main.label2.setText("Aucun synsets n'existe qui contient la forme de mot:' " + mot + " '.");

		}
		s.close();
		return arrayList ;
	}
	
	public  static  ArrayList<String> Search(String mot) throws FileNotFoundException {
		ArrayList<String> arrayList=new ArrayList<String>();
		Scanner s =null;
		s=new Scanner(new BufferedReader(new FileReader("exampl.txt")));
		boolean test=false;


		int i=0;
		String s1= null;

		while (s.hasNext()) {
			s1=s.next();
			if (Pattern.matches(mot, s1)||Pattern.matches(mot, s1.toString().toUpperCase())||Pattern.matches(mot, s1.toString().toLowerCase())) {

				arrayList.add(s1 +" -> in position: "+i);

				test=true;

				System.out.println(s1 +" -> in position: "+i);
			}  
			i++;
		}
		if (test==false) {
			Main.label2.setText(abcd.msg.toString().trim());
		}
		s.close();
		return arrayList ;
	}

	
	public  static  ArrayList<String> Search3(String mot) throws FileNotFoundException {
		ArrayList<String> arrayList=new ArrayList<String>();
		arrayList2=new ArrayList<String>();
		Scanner s =null;
		int k=1;
		while (k<=5) {
			s=new Scanner(new BufferedReader(new FileReader("file"+k+".txt")));

			boolean test=false;


			int i=0;
			String s1= null;
			while (s.hasNext()) {
				s1=s.next();
				if (minDistance(mot,s1)<=2) {

					System.out.println(s1 +"file"+k+".txt -> in position: "+i);
					System.out.println("5");
					arrayList.add(s1 +" existe in file"+k+".txt -> in position: "+i);
					test=true;
				}  
				i++;
			}
			if (test==false) {
				Main.label2.setText(abcd.msg.toString().trim());
			}	 
			s.close();		


			k++;}

		return arrayList ;
	}
	
	
	
	public  static  ArrayList<String> Search1(String mot) throws FileNotFoundException {

		final long startTime = System.currentTimeMillis();
		ArrayList<String> arrayList=new ArrayList<String>();
		arrayList2=new ArrayList<String>();
		Scanner s =null;
		int k=1;
		while (k<=5) {
			s=new Scanner(new BufferedReader(new FileReader("file"+k+".txt")));

			boolean test=false;


			int i=0;
			String s1= null;
			System.out.println("1");
			while (s.hasNext()) {
				System.out.println("2");
				s1=s.next();
				System.out.println("3");
				if (minDistance(mot,s1)<=2) {
					System.out.println("4");
					System.out.println(s1 +"file"+k+".txt -> in position: "+i);
					System.out.println("5");
					test=true;
				}  
				i++;
			}
			if (test==false) {
				Main.label2.setText(abcd.msg.toString().trim());
			}	 
			s.close();		
			final long endTime = System.currentTimeMillis();
			
			int time = (int) (endTime - startTime);
			
			arrayList.add(time+"/"+i);
			
			k++;}

		return arrayList ;
	}

	public  static  ArrayList<String> Search01(String mot) throws FileNotFoundException, InterruptedException {

		final long startTime = System.currentTimeMillis();
		ArrayList<String> arrayList=new ArrayList<String>();
		arrayList2=new ArrayList<String>();
		Scanner s =null;
		int k=1;
		while (k<=5) {
			s=new Scanner(new BufferedReader(new FileReader("file1.txt")));

			boolean test=false;


			
			String s1= null;
			while (s.hasNext()) {
				s1=s.next();
			
				if (minDistance(mot,s1)<=k) {
					
				
					System.out.println(s1 +"file1.txt -> length: "+k);
				
					test=true;
				}  
			
			}
			if (test==false) {
				Main.label2.setText(abcd.msg.toString().trim());
			}	 
			s.close();		
			final long endTime = System.currentTimeMillis();
			
			int time = (int) (endTime - startTime);
			
			arrayList.add(time+"/"+k);
			Thread.sleep(100);
			k++;}

		return arrayList ;
	}
	public static int minDistance(String word1, String word2) {
		int len1 = word1.length();
		int len2 = word2.length();

		int[][] dp = new int[len1 + 1][len2 + 1];

		for (int i = 0; i <= len1; i++) {
			dp[i][0] = i;
		}

		for (int j = 0; j <= len2; j++) {
			dp[0][j] = j;
		}

		for (int i = 0; i < len1; i++) {
			char c1 = word1.charAt(i);
			for (int j = 0; j < len2; j++) {
				char c2 = word2.charAt(j);

				if (c1 == c2) {
					dp[i + 1][j + 1] = dp[i][j];
				} else {
					int replace = dp[i][j] + 1;
					int insert = dp[i][j + 1] + 1;
					int delete = dp[i + 1][j] + 1;

					int min = replace > insert ? insert : replace;
					min = delete > min ? min : delete;
					dp[i + 1][j + 1] = min;
				}
			}
		}     
		return dp[len1][len2];
	}


}
