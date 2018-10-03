package fonction;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class conndb1 {
	private static String name="jiji";
	private static String passw="123";
	private static String con="jdbc:mysql://localhost/d";
	Connection conn=null;
	public static Connection connection() throws SQLException{

		return DriverManager.getConnection(con,name,passw);
	}

}
