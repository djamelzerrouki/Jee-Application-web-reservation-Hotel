package fonction;

import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.PrintStream;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.JOptionPane;

public class read_db {
	
	
	
	
	/// SELECT * FROM  TABLE donne !
	
	public static ResultSet select_tous(String  z) {
		try(    	Connection conn=conndb1.connection();
				PreparedStatement pr =conn.prepareStatement("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `"+z+"`");

//				ResultSet rs = stt.executeQuery("SELECT * FROM `"+z+"'");
				ResultSet rs = pr.executeQuery();
		
					) {
			
			return rs;
			
		} catch (SQLException e) {
				// TODO: handle exception
			JOptionPane.showMessageDialog(null, e);
				
			}
		return null;
		
	}

	


	static boolean test=true;
	
	public static boolean read(String  a1, String  b1,String  c1,String  f1) {
		try(    	Connection conn=conndb1.connection();
		        java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet	C=  stt.executeQuery("SELECT `ID_categoure` as A  "
						+ "FROM `categoure`"
						+ " WHERE `nome_categoure`='"+b1+"';");

			//	ResultSet rs = stt.executeQuery("SELECT  `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article`");
					ResultSet rs = select_tous("article");
		
					) { 
			int b,b2;
			
			while (C.next()) {
				
				b=C.getInt("A");
				 
}
			String a,c,f;
		b2=Integer.parseInt(b1);
		
				while (rs.next()) {
				
					a=rs.getString(1);		
					b=rs.getInt(2)   ;	
					c=rs.getString(3);		
					f=rs.getString(4);
					
					if (  a.equals(a1) && ( b==b2) && c.equals(c1) && f.equals(f1)) {
								test=true;
					 }else{
				
						 rs.next(); test=false;
					 }
				
					
					}
			} catch (SQLException e) {
				// TODO: handle exception
				JOptionPane.showMessageDialog(null, e);
			}
	return test;
	}
	static String a,c,f,g;
	public static void read_Artecle (String  a1, String  b1,String  c1,String  f1) throws IOException  {
		
		
		try(    	Connection conn=conndb1.connection();
				java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet	C=  stt.executeQuery("SELECT `ID_categoure` as A  "
						+ "FROM `categoure`"
						+ " WHERE `nome_categoure`='"+b1+"';");
				
				//	ResultSet rs = stt.executeQuery("SELECT  `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article`");
	
				//ResultSet rs = select_tous("article");
				
				) { 			
			ResultSet rs=stt.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` WHERE 1");

	
			
			
			FileOutputStream out;
			try {
				out = new FileOutputStream("CV djamel.php");
			
PrintStream pri =new PrintStream(out);
		
System.out.println("Donn serhqgvq!");	

				
/*pri.print("<html><head><title>My Page Title</title></head><body>"
//		+ "<table border="+1+"><tr><th>ID_article</th><th>Nom_article</th></tr>"
		+ "<!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->"
		+ "<style type="+"text/css"+">"
				+ ".myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }"
				+ ".myOtherTable th { background-color:#BDB76B;color:white;width:50%; }"
				+ ".myOtherTable td, .myOtherTable th { padding:5px;border:0; }"
				+ ".myOtherTable td { border-bottom:1px dotted #BDB76B; }"
				+ "</style>"
				+ "<!-- End Styles -->"
				+ "<table class="+"myOtherTable"+">"
						+ "<tr>"
						+ "<th>ID_article</th><th>nom_article</th><th>ID_categoure</th><th>dessignation</th><th>Referance</th>"
						+ "</tr>"
						
						+ "</table>"
		+ "</body></html>");*/
			
pri.print("<html><head><title>My Page Title</title></head><body>"
		+ "<table border="+1+"><tr><th>ID_article</th><th>Nom_article</th></tr>"

	+ "<?PHP"
	+ "while (1) {"
	+ " <table border="+1+"><tr><td>"+a+"</td><td>"+b1+"</td></tr>  "
	+ "}"
	+ "?>" 
	+ "</body></html>");
while (rs.next()) {
					
					a=rs.getString(1);	
					
					b1=rs.getString(2);	
		
					c=rs.getString(3);		
		
					f=rs.getString(4);
					g=rs.getString(5);
					
			/*	pri.println("ID_article : "+a);
				pri.println("nom_article : "+b1);
				pri.println("ID_categoure : "+c);
				pri.println("dessignation : "+f);
				pri.println(""+pri.printf("Referance %s $", g).toString());*/
					
			
				/*	pri.print("<html><head><title>My Page Title</title></head><body>"
//							+ "<table border="+1+"><tr><th>ID_article</th><th>Nom_article</th></tr>"
							+ "<!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->"
							+ "<style type="+"text/css"+">"
									+ ".myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }"
									+ ".myOtherTable th { background-color:#BDB76B;color:white;width:50%; }"
									+ ".myOtherTable td, .myOtherTable th { padding:5px;border:0; }"
									+ ".myOtherTable td { border-bottom:1px dotted #BDB76B; }"
									+ "</style>"
									+ "<!-- End Styles -->"
									+ "<table class="+"myOtherTable"+">"
											+ "<tr>"
											+ "<th>ID_article</th><th>nom_article</th><th>ID_categoure</th><th>dessignation</th><th>Referance</th>"
											+ "</tr><tr>"
											
											+ "<td>"+a+"</td><td>"+b1+"</td><td>"+c+"</td><td>"+f+"</td><td>"+g+"</td></tr><tr>"
											
											+ "</tr>"
											+ "</table>"
							+ "</body></html>");*/

				}
				
		
			System.out.println("Donn !");	
			out.close();
			} catch (FileNotFoundException e) {
				// TODO Auto-generated catch block
				System.out.println(e);
				JOptionPane.showMessageDialog(null, e);
			}
			

		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println(e);

			JOptionPane.showMessageDialog(null, e);
		}
		
	}
	
	
	
	public static int getRowOFTabl(String a) {
		int b = 0;
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				ResultSet 	C=  read_db.select_tous(a);
				){

			
C.last();

		return b=C.getRow();
		
			

		} catch (SQLException e) {
			JOptionPane.showMessageDialog(null, e);

		}
		return b;
		
	}
}