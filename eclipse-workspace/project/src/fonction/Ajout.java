package fonction;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.JOptionPane;

import project.Entrée;
import project.Sortie;

public class Ajout {
	
	static int B;
	static int A;


	public static void insertArticle(String  a, String  b,String  c,String  d) {
	
		try ( Connection conn= conndb1.connection();
				//Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				PreparedStatement stat1=conn.prepareStatement("INSERT INTO `article`( `nom_article`, `ID_categoure`, `dessignation`, `Referance`)"
						                                    + "VALUES  (?,?,?,?)")
				){
			//reqet pour trove id de categore

			String sql1="SELECT `ID_categoure` as A  "
					+ "FROM `categoure`"
					+ " WHERE `nome_categoure`='"+b+"';";
			
			ResultSet	C=  stat1.executeQuery(sql1);
			
			while (C.next()) {
				
				 B=C.getInt("A");
				 
}
				// reqet pour Ajoute  un LINGE BONE D' ENTRE'E
			
			stat1.setString(1, a);
			stat1.setInt(2, B);
			stat1.setString(3, c);
			stat1.setString(4, d);
			
	//String sql="INSERT INTO `article`( `nom_article`, `ID_categoure`, `dessignation`, `Referance`)VALUES  ('"+a+"','"+B+"','"+c+"','"+d+"');";		

//stat.executeUpdate(sql);
stat1.executeUpdate();
		} 
		catch (SQLException e) {
	System.out.println(e.getMessage());
	JOptionPane.showMessageDialog(null, e.toString());

		}
	}
	private static int G;

	public static void insert_Linge_Bone_Entrée(String  string,String a,Double  c,Double  d) {

try ( Connection conn= conndb1.connection();
		Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);

		PreparedStatement pr =conn.prepareStatement("INSERT INTO `line_be`(`ID_be`, `ID_article`, `Quantite_line_be`, `prix`) VALUES  (?,?,?,?)");

		PreparedStatement pr1 =conn.prepareStatement("SELECT `ID_article` FROM `article` "
				+ "WHERE `nom_article` = ?");
		 CallableStatement calStt =conn.prepareCall("{CALL idArticle(?)}")	;
		 
		//ResultSet C2 =stat.executeQuery()
		)
		{
	String nom_article=	Entrée.comboBox_Article.getSelectedItem().toString();

	//reqet pour trove id de categore
	calStt.setString(1,nom_article);
	//pr1.setString(1, nom_article);
	//ResultSet	C1=  pr1.executeQuery();
	ResultSet	C1=  calStt.executeQuery();

	Integer I = new Integer(Entrée.textField_ID_be.getText().toString().trim());

	String sql1="SELECT `ID_be` FROM `be` WHERE `ID_be`= '"+I+"'; ";

	ResultSet	C=  stat.executeQuery(sql1);

	try {
		while (C1.next()) {
			
			//string=C.getString("ID_be");
			G=Integer.parseInt(C1.getString("ID_article"));
			System.out.println(G);
		}
		while (C.next()) {

			string=C.getString("ID_be");
			
			//G=Integer.parseInt(C2.getString("ID_article"));
//System.out.println(G);
		}
	} catch (Exception e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	pr.setString(1, string);
	pr.setInt(2,G);
	pr.setDouble(3, c);
	pr.setDouble(4, d);

	
	// reqet pour Ajoute  un artecle de ID_categori 

	//String sql="INSERT INTO `line_be`(`ID_article`, `Quantite_line_be`, `prix`) VALUES  ('"+a+"','"+B+"','"+c+"','"+d+"');";		

	pr.executeUpdate();
} 
		catch (SQLException e) {
			System.out.println(e.getMessage());
			JOptionPane.showMessageDialog(null, e.toString());
			
		} 
	}
	
	public static void insert_Linge_Bone_Sortie(String  string,String a,Double  c) {
		String nom_article=	Sortie.comboBox_Article.getSelectedItem().toString();
		
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				
				PreparedStatement pr =conn.prepareStatement("INSERT INTO `line_bs`(`ID_bs`, `ID_article`, `Quantite`,`prix`) VALUES  (?,?,?,?)");
				
				/*PreparedStatement pr1 =conn.prepareStatement("SELECT `ID_article` FROM `article` "
						+ "WHERE `nom_article` = ?");*/
				CallableStatement calStt =conn.prepareCall("{CALL idArticle(?)}");
				)
				{
			
			calStt.setString(1,nom_article);
			ResultSet	C1=  calStt.executeQuery();
			
			Integer I = new Integer(Entrée.textField_ID_be.getText().toString().trim());
			
			String sql1="SELECT `ID_bs` FROM `bs` WHERE `ID_bs`= '"+I+"'; ";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			try {
				while (C1.next()) {
					
					G=Integer.parseInt(C1.getString("ID_article"));
					System.out.println(G);
				}
				while (C.next()) {
					
					string=C.getString("ID_bs");

				}
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			pr.setString(1, string);
			pr.setInt(2,G);
			pr.setDouble(3, c);
			pr.setString(4, Sortie.comboBox_Prix.getSelectedItem().toString().trim());
	
			
			
			pr.executeUpdate();
				} 
		catch (SQLException e) {
			System.out.println(e.getMessage());
			JOptionPane.showMessageDialog(null, e.getMessage());
			
		} 
	}
	
	

public static void insertfournsser(String  a, String  b,String  c, Integer  d,String  f,String  g,String  h,String k) {
	
	try ( Connection conn= conndb1.connection();
			Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			
			PreparedStatement stat1=conn.prepareStatement("INSERT INTO `fournisser`"
					+ "(`ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web`)"
				+ "VALUES  (?,?,?,?,?,?,?,?)");
			
			
			){
	
		String sql1="SELECT `ID_categoure` as A  "
				+ "FROM `categoure`"
				+ " WHERE `nome_categoure`='"+a+"';";
		
		ResultSet	C=  stat.executeQuery(sql1);
		
		while (C.next()) {
			
			 B=C.getInt("A");
			 
}
		stat1.setInt(1, B);
		stat1.setString(2, b);
		stat1.setString(3, c);
		stat1.setInt(4, d);
		stat1.setString(5, f);
		stat1.setString(6, g);
		stat1.setString(7, h);
		stat1.setString(8, k);
	//	String sql2="INSERT INTO `fournisser`(`ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web`)"
			//	+ "VALUES  ('"+B+"','"+b+"','"+c+"','"+d+"','"+f+"','"+g+"','"+h+"','"+k+"')";		
	
		stat1.executeUpdate();
		
	} 
	catch (Exception e) {
		// TODO: handle exception		
		System.out.println(e.getMessage());

		JOptionPane.showMessageDialog(null, e.toString());

	}
}

public static void Insert_New_Entrée( String  b,String  c) {
	
	try ( Connection conn= conndb1.connection();
			Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			){
		//reqet pour trove id de categore

		String sql1="SELECT `ID_fournisser` FROM `fournisser` WHERE `nom_fournisser`='"+c+"';";
		
		ResultSet	C=  stat.executeQuery(sql1);
		
		while (C.next()) {
			
			 A=C.getInt("ID_fournisser");
			 
}
			// reqet pour Ajoute  un artecle de ID_categori 
		
String sql="INSERT INTO `be`(`date_be`, `ID_fourniseur`) VALUES('"+b+"','"+A+"');";		

stat.executeUpdate(sql);
	} 
	catch (SQLException e) {
System.out.println(e.getMessage());
JOptionPane.showMessageDialog(null, e.getMessage());

	}
}


public static void Insert_New_Sortie ( String  b,String  c) {
	
	try ( Connection conn= conndb1.connection();
			Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			){
		//reqet pour trove id de categore
		
		String sql1="SELECT `ID_service` FROM `service` WHERE `nom_service`='"+c+"';";
		
		ResultSet	C=  stat.executeQuery(sql1);
		
		while (C.next()) {
			
			A=C.getInt("ID_service");
			
		}
		// reqet pour Ajoute  un artecle de ID_categori 
		
		String sql="INSERT INTO `bs`(`date_bs`, `ID_service`) VALUES('"+b+"','"+A+"');";		
		
		stat.executeUpdate(sql);
	} 
	catch (SQLException e) {
		System.out.println(e.getMessage());
		JOptionPane.showMessageDialog(null, e.getMessage());
		
	}
}

}
