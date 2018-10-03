package project;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.SwingConstants;

import fonction.conndb1;

import java.awt.Window.Type;
import java.awt.Toolkit;

public class Mdf_Sécurité extends JDialog {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private JPasswordField passwordField;
	private JLabel lblMotDePasse;
	private JButton btnModifi;
	private JButton btn_confermi;
	private static Mdf_Sécurité dialog ;
	private static String b,a =null; ;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		try {
			Mdf_Sécurité dialog = new Mdf_Sécurité();
			dialog.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
			dialog.setVisible(true);
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	/**
	 * Create the dialog.
	 */
	public Mdf_Sécurité() {
		setIconImage(Toolkit.getDefaultToolkit().getImage("C:\\Nouveau dossier\\project\\image\\Ilyes\\6792.jpg"));
		setTitle("Configuration de   mot de passe ");
		setResizable(false);
		setBounds(100, 100, 602, 701);
		getContentPane().setLayout(null);
		{
			JPanel panel = new JPanel();
			panel.setBackground(new Color(173, 216, 230));
			panel.setForeground(Color.CYAN);
			panel.setBounds(0, 0, 600, 672);
			getContentPane().add(panel);
			panel.setLayout(null);
			
			JLabel label = new JLabel("");
			label.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\unnamed.png"));
			label.setBounds(192, 78, 226, 244);
			panel.add(label);
			
			JLabel lblNewLabel = new JLabel("Utilisateur");
			lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
			lblNewLabel.setForeground(Color.DARK_GRAY);
			lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 21));
			lblNewLabel.setBounds(192, 51, 224, 28);
			panel.add(lblNewLabel);
			
			JLabel lblNewLabel_1 = new JLabel();
			lblNewLabel_1.setText(Athentefication.usr);
			lblNewLabel_1.setHorizontalAlignment(SwingConstants.CENTER);
			lblNewLabel_1.setForeground(new Color(0, 0, 0));
			lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 17));
			lblNewLabel_1.setBounds(192, 330, 226, 28);
			panel.add(lblNewLabel_1);
			
			 lblMotDePasse = new JLabel("Confirmer le mot de passe :");
			lblMotDePasse.setHorizontalAlignment(SwingConstants.CENTER);
			lblMotDePasse.setFont(new Font("Tahoma", Font.BOLD, 15));
			lblMotDePasse.setBounds(185, 369, 231, 22);
			panel.add(lblMotDePasse);
			
			passwordField = new JPasswordField();
			passwordField.setBounds(166, 402, 272, 28);
			panel.add(passwordField);
			
			 btnModifi = new JButton("Suivant");
			 btnModifi.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie.png"));
			 btnModifi.setFont(new Font("Arial Black", Font.BOLD, 11));
			btnModifi.addActionListener(new ActionListener() {
				@SuppressWarnings("deprecation")
				public void actionPerformed(ActionEvent arg0) {

					System.out.println(" Athentefication.id_usr : "+Athentefication.id_usr);

					if (passwordField.getText().length()!=0) {



						try(    	Connection conn=conndb1.connection();
								PreparedStatement prstt=conn.prepareStatement("SELECT `mot de passe` FROM `athentification`  "
										+ "WHERE `id_usr`= ?  ");
							//	PreparedStatement Uprst=conn.prepareStatement("UPDATE `athentification` SET ,`mot de passe`= ? WHERE `id_usr`= ? ");

								) {

							prstt.setString(1, Athentefication.id_usr);
							ResultSet rs=prstt.executeQuery();


							

							while (rs.next()) {
								a=rs.getString(1);
								//b=rs.getString(2);
							}


							if (passwordField.getText().trim().equals(a)) {

								passwordField.setText(null);

								lblMotDePasse.setText("Choisir votre mot de passe :");
								btn_confermi.setText("Confirmer");

								btnModifi.setVisible(false);
								btn_confermi.setVisible(true);
								btn_confermi.setText("Confirmer");
							} 


							else { 
								passwordField.setText(null);
								JOptionPane.showMessageDialog(null, "Mot de passe incorrect.", "ERROR_MESSAGE ", JOptionPane.ERROR_MESSAGE);

							}	
						}


						catch (SQLException e) {
							// TODO: handle exception

							JOptionPane.showMessageDialog(null, e.getMessage());

						}
					} else {
						JOptionPane.showMessageDialog(null, "Ajoute un mot de passe !");
					}


					//UPDATE.UPDATE_Athentification(Athentefication.id_usr, passwordField.getText().trim());

				}
			});
			btnModifi.setBounds(311, 441, 131, 31);
			panel.add(btnModifi);
			
			JButton btnNewButton = new JButton("Annuller");
			btnNewButton.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie (2).png"));
			btnNewButton.setFont(new Font("Arial Black", Font.BOLD, 11));
			btnNewButton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {


					new Mdf_Sécurité().setVisible(false);

					passwordField.setText(null);
					btn_confermi.setVisible(false);
					btnModifi.setVisible(true);
					lblMotDePasse.setText("Confirmer le mot de passe :");

				}
			});
			btnNewButton.setBounds(166, 441, 136, 31);
			panel.add(btnNewButton);
			
			 btn_confermi = new JButton("Confirmer");
			 btn_confermi.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie.png"));
			 btn_confermi.addActionListener(new ActionListener() {
			 	public void actionPerformed(ActionEvent arg0) {
			 		




					if (passwordField.getText().trim().length()!=0) {


						try(    	Connection conn=conndb1.connection();
						
								PreparedStatement Uprst=conn.prepareStatement("UPDATE `athentification` SET `mot de passe`= ?  WHERE `athentification`.`id_usr` = " +Athentefication.id_usr );

								) {

									Uprst.setString(1, passwordField.getText().trim());
								
								
									
									int confermation = JOptionPane.showConfirmDialog(null, " Vous les vous modifier \n "
											+ " le mot de passe de : "+Athentefication.usr+"  ? ", "Mot de passe ", JOptionPane.YES_NO_OPTION);


									 if (confermation==0) {
											

											Uprst.executeUpdate();	
											
											JOptionPane.showMessageDialog(null, "Opérations valider ! ");
											
											setVisible(false);
										}
								} 	
							
						


						catch (SQLException e) {
							// TODO: handle exception

							
							JOptionPane.showMessageDialog(null, e.getMessage());

						}
						passwordField.setText(null);
}else {

						JOptionPane.showMessageDialog(null, "Ajoute un mot de passe !");

					}


					//UPDATE.UPDATE_Athentification(Athentefication.id_usr, passwordField.getText().trim());

				
			 		
			 	}
			 });
			btn_confermi.setBounds(309, 441, 131, 31);
			btn_confermi.setVisible(false);
			panel.add(btn_confermi);
		}
	}
}
