package fonction;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import pluse.d;

public class select {

	

	

	
	public static ResultSet select_tous(String  a) throws SQLException {
		ResultSet rs = null;

		try(    	Connection conn=conndb1.connection();
		        java.sql.Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
		
					) {
			
			 rs = stt.executeQuery("SELECT * FROM `"+a+"'");

			return rs;

			
		} catch (SQLException e) {
				// TODO: handle exception
				e.getMessage();
			}
		finally{
			
		if (rs != null) {
			rs.close();
		}
			
			
		}
		return rs;
	}
	public static d select_Article() throws SQLException{

		
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				){
			//reqet pour trove id de categore

			String sql1="SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article`";
			
			ResultSet	C=  stat.executeQuery(sql1);
			
			while (C.next()) {
				
				 int B = C.getInt("A");
				 
	}
				
			

		}
		return null;

		
		
	}
	
}
