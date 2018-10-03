package project;

import java.awt.EventQueue;

import javax.swing.JFrame;

import java.awt.GridLayout;

import javax.swing.JPanel;

import java.awt.BorderLayout;

import javax.swing.BoxLayout;

import java.awt.GridBagLayout;
import java.awt.FlowLayout;
import java.awt.Window;

import javax.swing.JOptionPane;
import javax.swing.JPopupMenu;
import javax.swing.JTextField;
import javax.swing.JLabel;

import java.awt.Color;
import java.awt.SystemColor;

import javax.swing.ImageIcon;

import java.awt.Font;

import javax.swing.JPasswordField;

import java.awt.Rectangle;

import javax.swing.JButton;

import fonction.conndb1;

import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import javax.swing.DropMode;

import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;

import javax.swing.JEditorPane;

import java.awt.Toolkit;
import java.awt.Window.Type;

public class Athentefication {

	JFrame frmAthentefication;
	public  static JTextField textField_usr;
	private static JLabel lblNewLabel_3  ;
	public static String usr  ;
	public static String id_usr  ;
	private JPasswordField passwordField;
	public static JLabel lblNewLabel_image2;
	public static  JLabel lblNewLabel_2;

	/**
	 * Launch the application.
	 * @throws InterruptedException 
	 */
	public static void main(String[] args) throws InterruptedException {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Athentefication window = new Athentefication();
					window.frmAthentefication.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
		change_imag();}

	/**
	 * Create the application.
	 * @throws InterruptedException 
	 */
	public Athentefication() throws InterruptedException {
		initialize();
		
	}

	/**
	 * Initialize the contents of the frame.
	 * @throws InterruptedException 
	 */
	private void initialize() throws InterruptedException {
		frmAthentefication = new JFrame();
		frmAthentefication.setTitle("Athentefication");
		frmAthentefication.setResizable(false);
		frmAthentefication.setIconImage(Toolkit.getDefaultToolkit().getImage("C:\\Nouveau dossier\\project\\image\\Ilyes\\77c2487fbd9d86fd5a6dd57541569809.jpg"));
		frmAthentefication.setBounds(100, 100, 918, 577);
		frmAthentefication.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frmAthentefication.getContentPane().setLayout(new GridLayout(1, 0, 0, 0));
		
		JPanel panel = new JPanel();
		frmAthentefication.getContentPane().add(panel);
		panel.setLayout(null);
		  
		  JLabel lblNewLabel = new JLabel("Utilisateur");
		  lblNewLabel.setBounds(594, 186, 89, 21);
		  panel.add(lblNewLabel);
		  lblNewLabel.setForeground(SystemColor.window);
		  lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 17));
		  
		  textField_usr = new JTextField();
		  textField_usr.setBounds(602, 229, 189, 24);
		  panel.add(textField_usr);
		  textField_usr.setColumns(10);
		  
		  JLabel lblNewLabel_1 = new JLabel("Mot de passe");
		  lblNewLabel_1.setBounds(594, 266, 113, 21);
		  panel.add(lblNewLabel_1);
		  lblNewLabel_1.setForeground(SystemColor.window);
		  lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 17));
		  
		  passwordField = new JPasswordField();
		  passwordField.setBounds(602, 297, 189, 26);
		  panel.add(passwordField);
		  lblNewLabel_2 = new JLabel("");
		  lblNewLabel_2.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\ajax_clock_small.gif"));
		  lblNewLabel_2.setVisible(false);
	        lblNewLabel_2.setBounds(424, 303, 21, 36);
	        panel.add(lblNewLabel_2);
		  JButton btnNewButton = new JButton("Continuer");
		  btnNewButton.setBounds(646, 352, 100, 23);
		  panel.add(btnNewButton);
		  btnNewButton.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {
		  		if (textField_usr.getText().trim().length()!=0) {
		  			if (passwordField.getText().length()!=0) {
		  				
		  						

		  		try(    	Connection conn=conndb1.connection();
		  		       PreparedStatement prstt=conn.prepareStatement("SELECT `id_usr`, `Nom d'utilisateur`, `mot de passe` FROM `athentification` ");
		  		ResultSet rs=prstt.executeQuery();
		  				) {
		  			String a=null,b=null;
		  			boolean bol =false;


		  			while (rs.next()&& bol!=true) {
		  			
		  				id_usr=	rs.getString(1);
		  				a=	rs.getString(2);
		  				b=rs.getString(3);


		  				if (textField_usr.getText().trim().equals(a)) {
 		  				//	lblNewLabel_image2.setIcon(new ImageIcon("E:\\Djamel\\inforatique\\3 ém_anées\\EMD2\\Nouveau dossier\\Ilyes\\6792.jpg"));
	  					

		  					if (passwordField.getText().trim().equals(b)) {
		  						lblNewLabel_2.setVisible(true);
								bol=true;
  /*Thread t1=new Thread( new Runnable() {
								
								@Override
								public void run() {

						
							
							
							
							
										
								}	});
	Thread.sleep(3500);
						*/	
																	
						usr=textField_usr.getText().trim();


						new testFarst_app().frame.setVisible(true);
				        

						frmAthentefication.setVisible(false);
		  			
		  					}
		  					else { 
		  						bol=true;
		  					JOptionPane.showMessageDialog(null, "Mot de passe incorrect.", "ERROR_MESSAGE ", JOptionPane.ERROR_MESSAGE);
		  					passwordField.setText(null);
		  					}	
		  				} 
		  				else {	
		  					
		  					if (rs.isLast()==true) {

		  				JOptionPane.showMessageDialog(null, "Le Nom d'utilisateur incorrect.", "ERROR_MESSAGE ", JOptionPane.ERROR_MESSAGE);
		  				textField_usr.setText(null);
	  					passwordField.setText(null);
 }
		  				}
		  			}	
		  		}
		  		catch (Exception e) {
		  				// TODO: handle exception
		  				JOptionPane.showMessageDialog(null, e.getMessage());
		  			}
		  			} else {
		  				JOptionPane.showMessageDialog(null, "Ajoute un mot de passe !");
		  			}
		  		} else {
		  			JOptionPane.showMessageDialog(null, "Ajoute un Nom d' utilisateur !");

		  		}
		  	}
		  	
		  });
		  btnNewButton.setForeground(Color.WHITE);
		  btnNewButton.setFont(new Font("Tahoma", Font.BOLD, 12));
		  btnNewButton.setBackground(Color.GRAY);
		        
		       
		     
		     
		        lblNewLabel_image2 = new JLabel("");
		        lblNewLabel_image2.setBounds(0, 0, 912, 550);
		        panel.add(lblNewLabel_image2);
		        lblNewLabel_image2.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\authentification.jpg"));
		    
		     lblNewLabel_3 = new JLabel("");
		     lblNewLabel_3.setIcon(new ImageIcon("E:\\Djamel\\inforatique\\3 \u00E9m_an\u00E9es\\EMD2\\Nouveau dossier\\Ilyes\\6792.jpg"));
		     lblNewLabel_3.setBounds(0, 0, 912, 550);
		     panel.add(lblNewLabel_3);
		 passwordField.addKeyListener(new KeyAdapter() {
		 	@Override
		 	public void keyReleased(KeyEvent arg0) {
		 
		 		passwordField.toString();
		 		lblNewLabel_3.setVisible(true);

		 		if ((passwordField.getText().toString()).length()<4) {
		 			lblNewLabel_3.setText("Le mot de passe doit comporter au moins 4 caractéres.");
		 		} else {
		 			lblNewLabel_3.setText("Appuyez sur Continuer une fois L'opération terminée");

		 		}
		 		
		 	}
		 });
	}
	 public static void change_imag() throws InterruptedException {
	/*	  Thread t1=new Thread( new Runnable() {
				
				@Override
				public void run() {

		
			
			
			
			
						
				}	});
		  while (true) {
			
		
		  
			Thread.sleep(3500);

			
			
			  lblNewLabel_2.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\WritingSME-700x301.jpg"));
			  
			  
				Thread.sleep(3500);

			
			  
			  lblNewLabel_2.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\valoriser.jpg"));

		  }*/
	  }
}
