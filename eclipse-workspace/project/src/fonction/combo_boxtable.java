package fonction;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Vector;

import javax.swing.JOptionPane;
import javax.swing.table.TableModel;

import project.Entrée;
import project.Journal;
import project.Sortie;

public class combo_boxtable {



	private static String sql;


	/*
	 ################################################### ##################################################
	 #
	 #    Rempli_Jtable_categorie de categorie
	 #
	 ################################################### ##################################################
	 */
	public static Vector<Vector<Object>> Rempli_Jtable_categorie(){
		
		Vector<Vector<Object>> vector= new Vector<Vector<Object>>();
		
		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				
				
				ResultSet rs = stt.executeQuery("SELECT `ID_categoure`, `nome_categoure`, `designation_categorie` FROM `categoure`");
				
				) { 
			
			String a,b,c;
		
			
			
			int i=0;
			
			
			while (rs.next() ) {
				
				Vector<Object> vector1 = new Vector<Object>();
				
			
				a = rs.getString("ID_categoure");
				b=rs.getString("nome_categoure");
				c = rs.getString("designation_categorie");
				
				vector1.add(a.toString());
				vector1.add(b.toString());
				vector1.add(c.toString());
			
				vector.add(vector1);
			
				System.out.println(i++);
				
				
			}
			
			
		} catch (SQLException e) {
			// TODO: handle exception
			
			System.out.println("Err of mthed Rempli_table: "+e.getMessage());
			JOptionPane.showMessageDialog(	null, "Err of mthed Rempli_table: "+e.getMessage());
			
		}
		
		
		return vector;	
		
	}
	
	

	/*##############################################################################################
	  #
	  # combx_Categoure la methode qui remplire le combobox pare le non de Categoure
	  #
	  ##############################################################################################   
	 */
	
	public static  ArrayList<String> combx_Prix_Sortie(){ 
		
		
		ArrayList<String> R=new ArrayList<String>();
		
		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet rs = stt.executeQuery("SELECT `prix` FROM `line_be` AS lbe,`article` AS A "
						+ "WHERE lbe.`ID_article`=A.`ID_article` AND A.`nom_article`='"+Sortie.comboBox_Article.getSelectedItem().toString().trim()+"'");
				
				) { 
			
			String b;
		//	R.add("");
			
			while (rs.next()) {
				
				b=rs.getString(1);	
				
				R.add(b);
				
			}
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println(e.getMessage());
		}
		return R;
		
	}
	/*##############################################################################################
	  #
	  # combx_Categoure la methode qui remplire le combobox pare le non de Categoure
	  #
	  ##############################################################################################   
	 */

	public static  ArrayList<String> combx_Categoure(){ 


		ArrayList<String> R=new ArrayList<String>();

		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet rs = stt.executeQuery("SELECT `ID_categoure`, `nome_categoure` FROM `categoure` ");

				) { 

			String b;
			R.add("");

			while (rs.next()) {

				b=rs.getString(2);	

				R.add(b);

			}
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println(e.getMessage());
		}
		return R;

	}

	/*##############################################################################################
	  #
	  # combx_Service la methode qui remplire le combobox pare le non de Service
	  #
	  ##############################################################################################   
	 */

	
	public static  ArrayList<String> combx_Service(){ 
		
		
		ArrayList<String> R=new ArrayList<String>();
		
		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet rs = stt.executeQuery("SELECT `ID_service`, `nom_service`, `commentaire` FROM `service` WHERE `ID_service`");
				
				) { 
			
			String b;
			
			while (rs.next()) {
				
				b=rs.getString(2);	
				
				R.add(b);
				
			}
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println(e.getMessage());
		}
		return R;
		
	}

	private static int G;
	public static TableModel v;
	
	/*####################################################################################################
	  #
	  # combxArticl c la methode qui remplire le combobox pare le non de article parapoure lea categorie
	  #
	  ####################################################################################################   
	 */
	public static  ArrayList<String> combxArticl_Sortie( int a ){ 
		
		ArrayList<String> R=new ArrayList<String>();
	
		String s=null;
		
		switch (a) {
		case 0:
			s=Sortie.comboBox_Catégorie.getSelectedItem().toString().trim();
			break;

		
		default:
			s=Journal.comboBox_Catégorie.getSelectedItem().toString().trim();

			break;
		}
		
		
		
		
		try(    Connection conn=conndb1.connection();
				
				PreparedStatement prst=conn.prepareStatement("SELECT  a.`nom_article` "
						+ " FROM `article` AS a ,  `categoure` AS c "
						+ " WHERE a.`ID_categoure`=c.`ID_categoure`AND c.`nome_categoure`='"+ s +"'");
	
				
				
				
				
				
				ResultSet rs=prst.executeQuery()) {
			R.add("");
			while (rs.next()) {
String b;
				b=rs.getString(1);	


				R.add(b);

			}
			
			 // Sortie.comboBox_Article.setModel(new DefaultComboBoxModel<Object>(new String[] {"", R.toArray().toString()}));

			
		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println("ERR A combxArticl c la methode qui remplire le combobox pare le non de article : "+e.getMessage());
			JOptionPane.showMessageDialog(	null, e.getMessage());
			
		}
		return R;
		
	}

	/*##############################################################################################
	  #
	  # combxArticl c la methode qui remplire le combobox pare le non de article 
	  #
	  ##############################################################################################   
	 */
	public static  ArrayList<String> combxArticl(){ 



		ArrayList<String> R=new ArrayList<String>();

		try(    Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				
				) { 

			/***************************************************************
			    sql = le nom_fournisser Selection  donne la parté Entrée
			 ****************************************************************/

			try {
				sql = "SELECT `ID_categoure` AS A FROM `fournisser` WHERE `nom_fournisser`='"+Entrée.comboBox_Fornisseur.getSelectedItem().toString().trim()+"';";
				ResultSet	C=  stt.executeQuery(sql);

				while (C.next()) {

					G=C.getInt("A");

				}
			} catch (Exception e) {
				// TODO Auto-generated catch block
				System.out.println("Err Of CombxArticl "+e.getMessage());
				JOptionPane.showMessageDialog(	null, "hhh lol"+e.getMessage());
			}

		
			String b;
			ResultSet rs = stt.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` "
					+ "FROM `article`"
					+ " WHERE `ID_categoure`='"+G+"';");
			while (rs.next()) {

				b=rs.getString(2);	


				R.add(b);

			}
		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println("ERR A combxArticl c la methode qui remplire le combobox pare le non de article : "+e.getMessage());
			JOptionPane.showMessageDialog(	null, e.getMessage());

		}
		return R;

	}
	/*##############################################################################################
	  #
	  # combxArticl c la methode qui remplire le combobox pare le non de article 
	  #
	  ##############################################################################################   
	 */
	public static  ArrayList<String> combxToutArticl(){ 
		
		
		
		ArrayList<String> R=new ArrayList<String>();
		
		try(    Connection conn=conndb1.connection();
			PreparedStatement  prst=conn.prepareStatement("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article`");
				
				) { 
		
			
			
			String b;
			ResultSet rs = prst.executeQuery();
			while (rs.next()) {
				
				b=rs.getString(2);	
				
				
				R.add(b);
				
			}
		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println("ERR A combxArticl c la methode qui remplire le combobox pare le non de article : "+e.getMessage());
			JOptionPane.showMessageDialog(	null, e.getMessage());
			
		}
		return R;
		
	}


	/*##############################################################################################
	  #
	  # combxFournisser c la methode qui remplire le combobox pare le non de Fournisser
	  #
	  ##############################################################################################   
	 */
	public static  ArrayList<String> combxFournisser(){ 



		ArrayList<String> R=new ArrayList<String>();

		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet rs = stt.executeQuery("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser`");

				) { 

			String b;
R.add("");
			while (rs.next()) {

				b=rs.getString(3);	 

				R.add(b);

			}
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println("combxFournisser :"+e.getMessage());
		}
		return R;

	}
	
	
	
	
	
	public static  	ArrayList<String> combxFournisser_nom_Catégorie(String a){ 
		
		
		ArrayList<String> R=new ArrayList<String>();
		
		
		
String s=null;
		
		switch (a) {
		case "Entrée":
			s=Entrée.comboBox_Fornisseur.getSelectedItem().toString().trim();
			break;

		
		default:
			s=Journal.comboBox_Fournisseur.getSelectedItem().toString().trim();

			break;
		}
		try(    	Connection conn=conndb1.connection();
				PreparedStatement 	prst=conn.prepareStatement("SELECT `ID_fournisser`,f.`ID_categoure` ,`nome_categoure` "
						+ " FROM `fournisser`AS f,`categoure` AS c"
						+ " WHERE f.`ID_categoure`=c.`ID_categoure` AND f.`nom_fournisser`='"+ s +"'");			
				ResultSet rs = prst.executeQuery();
				) { 
		
			
			
			
			
			while (rs.next()) {
			
				
				R.add(rs.getString(3));	 
				
			
				
			}
			
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println("combxFournisser :"+e.getMessage());
		}
		return R;
		
	}
	public static  ArrayList<String> combxEnployer(){ 
		
		
		
		ArrayList<String> R=new ArrayList<String>();
		
		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet rs = stt.executeQuery("SELECT `ID_employer`, `ID_service`, `nom_employer`, `prenom_employer`, `adress_employer`, `grade` FROM `employer`");
				
				) { 
			
			String b;
			
			while (rs.next()) {
				
				b=rs.getString(3);	
				
				R.add(b);
				
			}
		} catch (SQLException e) {
			// TODO: handle exception
			JOptionPane.showMessageDialog(	null, e.getMessage());
			System.out.println("combxFournisser :"+e.getMessage());
		}
		return R;
		
	}
	/*    public static  String [][] tableaffich1(){ 



    	try(    	Connection conn=conndb1.connection();
    			java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
    			ResultSet rs = stt.executeQuery("SELECT `ID_categoure`, `nome_categoure` FROM `categoure` ");

    			) { 

    		String a,b;
    	//	int i = 0,j =0;
    		int k =0;
    		while (rs.next()) {

    k++;


		    			a=rs.getString(1);	
		    			b=rs.getString(2);
					 String tab[]={a,b};
				    	String [][] mat = {tab} ;

		for (int i = 0; i < tab.length; i++) {
					for (int j = 0; j < tab.length; j++) {
						mat[i][j]=tab[j];	

					}
				} 



    		}
    	} catch (SQLException e) {
    		// TODO: handle exception

    		System.out.println(e.getMessage());
    	}

    	return mat;

    }*/


}
