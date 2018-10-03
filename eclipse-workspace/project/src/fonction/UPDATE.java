package fonction;

import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.JOptionPane;

public class UPDATE {
	
	static int B;

	public static void UPDATE_Categore(String  a,String  b, String  c) {
		
		try ( Connection conn= conndb1.connection();
				PreparedStatement prst=conn.prepareStatement("UPDATE `categoure` SET `ID_categoure`=?,`nome_categoure`=?,`designation_categorie`=? "
						                                   + "WHERE `ID_categoure`= ? ");
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);

				){
			//reqet pour trove id de categore
			
			
			
			String sql1="SELECT `ID_categoure` as A  "
					+ "FROM `categoure`"
					+ " WHERE `nome_categoure`='"+b+"';";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			while (C.next()) {
				
				B=C.getInt("A");
				
			}
			
			// reqet pour Ajoute  un artecle de ID_categori 
//UPDATE `categoure` SET `ID_categoure`=[value-1],`nome_categoure`=[value-2],`designation_categorie`=[value-3] WHERE 1
		//	String sql="UPDATE `article` SET `nom_article`='"+b+"',`ID_categoure`='"+B+"',`dessignation`='"+d+"',`Referance`='"+e+"' WHERE `ID_article`='"+a+"'";		
			prst.setString(1,a);
			prst.setString(2, b);
			prst.setString(3, c);
			prst.setString(4,a);
			
			
			prst.executeUpdate();
			JOptionPane.showMessageDialog(null, "OPIRATION VALEDI ! \n    la modifecation de Categore ","UPDATE_Categore",JOptionPane.CANCEL_OPTION);

		} 
		catch (SQLException e1) {
			System.out.println(e1.getMessage());
			JOptionPane.showMessageDialog(null, e1.toString());
			
		}
	}
	public static void UPDATE_Service(String  a,String  b, String  c) {
		
		try ( Connection conn= conndb1.connection();
				PreparedStatement prst=conn.prepareStatement("UPDATE `service` SET `ID_service`=?,`nom_service`=?,`commentaire`=? "
						+ "WHERE `ID_service`= ? ");
				//UPDATE `service` SET `ID_service`=[value-1],`nome_service`=[value-2],`commentaire`=[value-3] WHERE 1
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				
				){
			//reqet pour trove id de service
			
			
			
			String sql1="SELECT `ID_service` as A  "
					+ "FROM `service`"
					+ " WHERE `nom_service`='"+b+"';";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			while (C.next()) {
				
				B=C.getInt("A");
				
			}
			
			// reqet pour Ajoute  un artecle de ID_categori 
//UPDATE `categoure` SET `ID_categoure`=[value-1],`nome_categoure`=[value-2],`designation_categorie`=[value-3] WHERE 1
			//	String sql="UPDATE `article` SET `nom_article`='"+b+"',`ID_categoure`='"+B+"',`dessignation`='"+d+"',`Referance`='"+e+"' WHERE `ID_article`='"+a+"'";		
			prst.setString(1,a);
			prst.setString(2, b);
			prst.setString(3, c);
			prst.setString(4,a);
			
			
			prst.executeUpdate();
			JOptionPane.showMessageDialog(null, "OPIRATION VALEDI ! \n    la modifecation de SERVICE ","UPDATE_Service",JOptionPane.CANCEL_OPTION);
			
		} 
		catch (SQLException e1) {
			System.out.println(e1.getMessage());
			JOptionPane.showMessageDialog(null, e1.toString());
			
		}
	}
	public static void UPDATE_Athentification(String  id_usr,String  passwrd) {
		
		try ( Connection conn= conndb1.connection();
				PreparedStatement prst=conn.prepareStatement("UPDATE `athentification` SET `mot de passe`=? "
						+ "WHERE `id_usr`= ? ");
				
				){
			
			
			prst.setString(1,passwrd);
			prst.setString(2,id_usr);
		
			
			prst.executeUpdate();
			JOptionPane.showMessageDialog(null, "OPIRATION VALEDI ! \n    la modifecation de mot de passe  ","mot de passe",JOptionPane.CANCEL_OPTION);
			
		} 
		catch (SQLException e1) {
			System.out.println(e1.getMessage());
			JOptionPane.showMessageDialog(null, e1.toString());
			
		}
	}
	public static void UPDATE_Article(int  a,String  b, String  c,String  d,String  e) {
		
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				){
			//reqet pour trove id de categore

			String sql1="SELECT `ID_categoure` as A  "
					+ "FROM `categoure`"
					+ " WHERE `nome_categoure`='"+c+"';";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			while (C.next()) {
				
				 B=C.getInt("A");
				 
                         }
			
				// reqet pour Ajoute  un artecle de ID_categori 
			
	String sql="UPDATE `article` SET `nom_article`='"+b+"',`ID_categoure`='"+B+"',`dessignation`='"+d+"',`Referance`='"+e+"' WHERE `ID_article`='"+a+"'";		

stat.executeUpdate(sql);
		} 
		catch (SQLException e1) {
	System.out.println(e1.getMessage());
	JOptionPane.showMessageDialog(null, e1.toString());

		}
	}
	public static void UPDATE_fornessur1(int a1,String  a, String  b,String  c, Integer  d,String  f,String  g,String  h,URL k) {
		
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				){
			//reqet pour trove id de categore
			
			String sql1="SELECT `ID_categoure` as A  "
					+ "FROM `categoure`"
					+ " WHERE `nome_categoure`='"+a+"';";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			while (C.next()) {
				
				B=C.getInt("A");
				
			}
			
			// reqet pour UPDATE un fornessur  de ID_categori 
			
			String sql="UPDATE `fournisser` SET `ID_fournisser`='"+a1+"',"
					+ "`ID_categoure`='"+B+"',"
					+ "`nom_fournisser`='"+b+"',"
					+ "`prenome_fournisser`='"+c+"',"
					+ "`adresse_fournisser`='"+d+"',"
					+ "`email`='"+f+"',"
					+ "`cod_postal`='"+g+"',"
					+ "`sit_web`='"+h+"'"
					+ " WHERE `ID_fournisser` ='"+a1+"'";
			
			stat.executeUpdate(sql);
		} 
		catch (SQLException e1) {
			System.out.println(e1.getMessage());
			JOptionPane.showMessageDialog(null, e1.toString());
			
		}
	}

public static void UPDATE_fornessur(int a1,String  a, String  b,String  c, Integer  d,String  f,String  g,String  h,String k) {
	
	try ( Connection conn= conndb1.connection();
			Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			
			PreparedStatement stat1=conn.prepareStatement("UPDATE `fournisser` SET `ID_fournisser`='"+a1+"',"
					+ "`ID_categoure`=?,"
					+ "`nom_fournisser`=?,"
					+ "`prenome_fournisser`=?,"
					+ "`tlphon`=?,"
					+ "`adresse_fournisser`=?,"
					+ "`email`=?,"
					+ "`cod_postal`=?,"
					+ "`sit_web`= ?"
					+ " WHERE `ID_fournisser` ='"+a1+"'");
			
			
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
		stat1.setString(4, d.toString());
		stat1.setString(5, f);
		stat1.setString(6, g);
		stat1.setString(7, h);
		stat1.setString(8, k);
	
		stat1.executeUpdate();
		
	} 
	catch (Exception e) {
		// TODO: handle exception		
		System.out.println(e.getMessage());

		JOptionPane.showMessageDialog(null, e.toString());

	}
}
}
