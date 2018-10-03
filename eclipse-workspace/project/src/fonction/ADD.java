package fonction;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class ADD {
	

// INSERT INTO `categoure` 
	public static void insert(String  a, String  b) {
	
		try ( Connection conn= conndb1.connection();
				Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
				){
			String sql="INSERT INTO `categoure`(`ID_categoure`, `nome_categoure`)  VALUES ('"+a+"','"+b+"')";
			stat.executeUpdate(sql);
			
		} catch (SQLException e) {
			// TODO: handle exception
	
		e.getMessage();
		}
	}
	
	
}
