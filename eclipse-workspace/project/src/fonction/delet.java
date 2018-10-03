package fonction;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.swing.JOptionPane;

public class delet {
	public static void SUPPR_Articl(String a) {
 int i =JOptionPane.showConfirmDialog(null, "Attention, confirmez l'effacement car le stock n' est pas remis à jour !", " CONFARMATION DE SUPPR_Articl", JOptionPane.YES_NO_OPTION);
		
		if (i!=1) {
		try ( Connection conn= conndb1.connection();
				PreparedStatement stat = conn.prepareStatement("DELETE FROM `article` WHERE `ID_article`=  ?");
				){
			
			stat.setString(1, a);

		
			stat.executeUpdate();
			
			
		} 
		catch (Exception e) {
			// TODO: handle exception		
			System.out.println(e.getMessage());

			JOptionPane.showMessageDialog(null, e.toString());

		}
		}
	}
	public static void SUPPR_fournisser(String a) {
		int i =JOptionPane.showConfirmDialog(null, "Attention, confirmez l'effacement car le stock n' est pas remis à jour !", " CONFARMATION DE SUPPR_fournisser", JOptionPane.YES_NO_OPTION);
		
		if (i!=1) {
			try (Connection conn = conndb1.connection();
					PreparedStatement stat = conn.prepareStatement("DELETE FROM `fournisser` WHERE `ID_fournisser`= ?");
					) {

				stat.setString(1, a);
		
				stat.executeUpdate();

			} catch (Exception e) {
				// TODO: handle exception		
				System.out.println(e.getMessage());

				JOptionPane.showMessageDialog(null, e.toString());

			}
		}
	}
}
