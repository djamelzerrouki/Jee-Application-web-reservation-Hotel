package project;

import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.net.URL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JTabbedPane;
import javax.swing.JTextField;
import javax.swing.JToolBar;

import fonction.Ajout;
import fonction.UPDATE;
import fonction.combo_boxtable;
import fonction.conndb1;
import fonction.delet;

import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import javax.swing.DefaultComboBoxModel;


public class fornesser {

	private JFrame frame;
	private static Integer a=0;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					fornesser window = new fornesser();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public fornesser() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 450, 300);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		JTabbedPane tabbedPane = null;
		panel_Fornessuer(tabbedPane);
	}
	private static boolean Nouv;
	
	
	private static JButton btnNext;
	private static JButton btnLast;
	private static 	JButton btnEnregestre;
	private static 	JButton btn_Modifer;
	private static 	JButton btn_New;
	private static 	JButton btn_Annuler;


		static  JLabel lblNewLabel_1;
		private static JTextField textField_address;
		private static JTextField textField_Nom_fournisser;
		private static JTextField textField_Prenom_fournisser;
		private static JTextField textField_sit_web;
		private static JTextField textField_Email;
		private static JTextField textField_tlphon;
		private static JTextField textField_cod_postal;
		public static	JComboBox<Object> comboBox;
		private static JTextField textField_IDfournisser;
		private static JButton btnNewButton;
		
	public static  JPanel panel_Fornessuer(JTabbedPane tabbedPane) {
			
			JPanel panel = new JPanel();
			panel.setBackground(Color.DARK_GRAY);
			tabbedPane.addTab("Fournisseur", null, panel, null);
			
			JToolBar toolBar = new JToolBar();
			toolBar.setBounds(0, 0, 942, 36);
			toolBar.setForeground(new Color(255, 255, 255));
			toolBar.setToolTipText("");
			toolBar.setRollover(true);
			toolBar.setBackground(Color.BLACK);
			
			JButton btnSupprimer = new JButton();
			btnSupprimer.setBounds(687, 338, 146, 36);
			btnSupprimer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_delete.png"));
			btnSupprimer.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					delet.SUPPR_fournisser(textField_IDfournisser.getText());
					Entrée.comboBox_Fornisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));
}
			});
			btnSupprimer.setText("Supprimer");
			btnSupprimer.setFont(new Font("Arial Black", Font.BOLD, 11));
			lblNewLabel_1 = new JLabel("");
			lblNewLabel_1.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
				}
			});
			lblNewLabel_1.setBounds(2, 36, 942, 692);
			lblNewLabel_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\4-avantages-fournisseur-unique-communications-unifieees.jpg"));
			lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 13));
			lblNewLabel_1.setToolTipText("");
			
			 btnEnregestre = new JButton();
			 btnEnregestre.setEnabled(false);
			btnEnregestre.setBounds(687, 385, 146, 36);
			btnEnregestre.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
			
			
			
			
			btnEnregestre.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {                                         
			        // TODO add your handling code here:
			        
					/*
			        
			        save
			       
			        
			        */ 
			//""""""""""""""""""""""""""""""""##########################        // TODO add your handling code here:
if (btn_Modifer.isEnabled()==false && Nouv==false ) {
	
	

		try {	
			
			int a =Integer.parseInt(textField_IDfournisser.getText().toString());
			Integer d=new Integer(textField_tlphon.getText());

		
			UPDATE.UPDATE_fornessur(a, comboBox.getSelectedItem().toString(),textField_Nom_fournisser.getText(),
					textField_Prenom_fournisser.getText(),d,textField_address.getText(),textField_Email.getText(),textField_cod_postal.getText().toString().trim(),textField_sit_web.getText().toString());					
			
			JOptionPane.showMessageDialog(null, "OPIRATION VALIDI...\n   la modifecation de fornessur!!");

		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
	
		
		
		}
}

else {
				try {
					System.out.println(comboBox.getSelectedItem().toString());
					Integer d = new Integer(textField_tlphon.getText());
				/*	
				   URL h;
					h = new URL(textField_sit_web.getText().toString());

					System.out.println(h);
					
					*/

					try {
						Ajout.insertfournsser(comboBox.getSelectedItem()
								.toString(), textField_Nom_fournisser.getText(), textField_Prenom_fournisser
								.getText(), d, textField_address.getText(), textField_Email
								.getText(), textField_cod_postal.getText(), textField_sit_web
								.getText().toString());
					} catch (Exception e) {

						// TODO Auto-generated catch block

						System.err.println(e.getMessage());
						JOptionPane.showMessageDialog(null, e.getMessage(),
								"Message of Exception", 2);

					}

					JOptionPane.showMessageDialog(null, "OPIRATION VALIDI !!",
							"", 1);

				} catch (Exception e1) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, e1.getMessage(),
							"Message of Exception", 2);

					System.err.println(e1.toString());

				}
				try (Connection conn = conndb1.connection();
						Statement stat = conn.createStatement(
								ResultSet.TYPE_SCROLL_INSENSITIVE,
								ResultSet.CONCUR_READ_ONLY);) {
					System.out.println("Connected !!");

				} catch (SQLException e) {
					// TODO: handle exception
					System.out.println(e.getMessage());
					e.getMessage();
				}
			}
btn_Modifer.setEnabled(true);
btn_Annuler.setEnabled(false);
btnEnregestre.setEnabled(false);
Nouv=false;


Entrée.comboBox_Fornisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));
  Journal.comboBox_Fournisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));
				}
			});
			btnEnregestre.setText("Enregistrer");
			btnEnregestre.setFont(new Font("Arial Black", Font.BOLD, 11));
			
			 btnNext = new JButton("Suivant");
			 btnNext.setBounds(382, 565, 117, 31);
			btnNext.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnNext.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie.png"));
			btnNext.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
					
		
					next_fournisser();
					editebelTRUE();

					}
				public int INT_next_fournisser() {
					int b = 0;
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser` ");
							){

while (C.next()) {
	b++;
}


						return b;


					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);

					}
					System.out.println(b);
					return b;

				}
				public void next_fournisser() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser` ");
							){

						if (C.absolute(a)&& (a>0)) {
							String s=(C.getString("ID_fournisser")).toString();
							textField_IDfournisser.setText(s);
							int cat=  Integer.parseInt(C.getString("ID_categoure"));
							comboBox.setSelectedIndex(cat);
							textField_Nom_fournisser.setText(C.getString(3));
							textField_Prenom_fournisser.setText(C.getString(4));
							textField_tlphon.setText(C.getString(5));
							textField_address.setText(C.getString(6));
							textField_Email.setText(C.getString(7));
							textField_cod_postal.setText(C.getString(8));
							textField_sit_web.setText(C.getString(9));
						} 
					if (a<INT_next_fournisser()) {
							a++;

						}

					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);

					}
				}
			});
			
			JButton btnPrecident = new JButton("pr\u00E9c\u00E9dent");
			btnPrecident.setBounds(246, 565, 126, 31);
			btnPrecident.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnPrecident.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie (2).png"));
			btnPrecident.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					
					next_fournisser();
					editebelTRUE();

					
				}
				
				public void next_fournisser() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser` ");
							){


						if (C.absolute(a)) {
							String s=(C.getString("ID_fournisser")).toString();
							textField_IDfournisser.setText(s);
							int cat=  Integer.parseInt(C.getString("ID_categoure"));
							comboBox.setSelectedIndex(cat);
							textField_Nom_fournisser.setText(C.getString(3));
							textField_Prenom_fournisser.setText(C.getString(4));
							textField_tlphon.setText(C.getString(5));
							textField_address.setText(C.getString(6));
							textField_Email.setText(C.getString(7));
							textField_cod_postal.setText(C.getString(8));
							textField_sit_web.setText(C.getString(9));
							
						}
						
						if(a>1){
							a--;
						}

					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);

					}
		
				
				}});
			
			 btnLast = new JButton("Dernier");
			 btnLast.setBounds(511, 565, 119, 31);
			btnLast.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnLast.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\2rightarrow_m.png"));
			btnLast.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					
					next_Article();
					btnNext.enable(false);
					btnLast.enable(false);
					editebelTRUE();

				}
				
				public void next_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery(
									 "SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` "
									+ "FROM `fournisser` ");
							){
		
	
		

		C.last();
		a=C.getRow();	
		String s=(C.getString("ID_fournisser")).toString();
		textField_IDfournisser.setText(s);
		int cat=  Integer.parseInt(C.getString("ID_categoure"));
		comboBox.setSelectedIndex(cat);
		textField_Nom_fournisser.setText(C.getString(3));
		textField_Prenom_fournisser.setText(C.getString(4));
		textField_tlphon.setText(C.getString(5));
		textField_address.setText(C.getString(6));
		textField_Email.setText(C.getString(7));
		textField_cod_postal.setText(C.getString(8));
		textField_sit_web.setText(C.getString(9));

		

		/*
		 textField;
		textField_1;
		textField_2;
		textField_3;
		textField_4;
		textField_5;
		textField_6;
		*/

					
						} catch (SQLException e) {
												JOptionPane.showMessageDialog(null, e);
					
						}
		
				
				}});
			
			JButton btnFerst = new JButton("Premier");
			btnFerst.setBounds(115, 565, 119, 31);
			btnFerst.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnFerst.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\2rightarrow_m - Copie.png"));
			btnFerst.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					next_fournisser();
					editebelTRUE();

				}
				
				public void next_fournisser() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser` ");
							){

		
         
		C.first();
		a=1;	
		String s=(C.getString("ID_fournisser")).toString();
		textField_IDfournisser.setText(s);
		int cat=  Integer.parseInt(C.getString("ID_categoure"));
		comboBox.setSelectedIndex(cat);
		textField_Nom_fournisser.setText(C.getString(3));
		textField_Prenom_fournisser.setText(C.getString(4));
		textField_tlphon.setText(C.getString(5));
		textField_address.setText(C.getString(6));
		textField_Email.setText(C.getString(7));
		textField_cod_postal.setText(C.getString(8));
		textField_sit_web.setText(C.getString(9));
		
	
				

					
						} catch (SQLException e) {
												JOptionPane.showMessageDialog(null, e);
					
						}
				}});
			
			 btn_Modifer = new JButton("Modifier");
			btn_Modifer.setBounds(687, 291, 146, 36);
			btn_Modifer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_edit.png"));
			btn_Modifer.setFont(new Font("Arial Black", Font.BOLD, 11));
			btn_Modifer.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
				
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
					btn_Modifer.setEnabled(false);

				}
				});
			
			JLabel label = new JLabel();
			label.setBounds(125, 467, 113, 17);
			label.setForeground(Color.ORANGE);
			label.setText("Code postal");
			label.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel label_1 = new JLabel();
			label_1.setBounds(125, 517, 113, 17);
			label_1.setForeground(Color.ORANGE);
			label_1.setText("Sit web");
			label_1.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel label_2 = new JLabel();
			label_2.setBounds(125, 172, 113, 17);
			label_2.setForeground(Color.ORANGE);
			label_2.setText("Famille");
			label_2.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel lblPrnom = new JLabel();
			lblPrnom.setBounds(125, 264, 113, 17);
			lblPrnom.setForeground(Color.ORANGE);
			lblPrnom.setText("Pr\u00E9nom");
			lblPrnom.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel lblNumrotlphone = new JLabel();
			lblNumrotlphone.setBounds(125, 315, 113, 17);
			lblNumrotlphone.setForeground(Color.ORANGE);
			lblNumrotlphone.setText("T\u00E9l\u00E9phone ");
			lblNumrotlphone.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel label_5 = new JLabel();
			label_5.setBounds(125, 362, 113, 17);
			label_5.setForeground(Color.ORANGE);
			label_5.setText("Adresse");
			label_5.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel label_6 = new JLabel();
			label_6.setBounds(125, 413, 113, 17);
			label_6.setForeground(Color.ORANGE);
			label_6.setText("\tEmail");
			label_6.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JLabel label_7 = new JLabel();
			label_7.setBounds(125, 213, 33, 17);
			label_7.setForeground(Color.ORANGE);
			label_7.setText("Nom");
			label_7.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_address = new JTextField();
			textField_address.setEditable(false);
			textField_address.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_address.setBounds(256, 359, 362, 23);
			textField_address.setBackground(new Color(255, 250, 250));
			textField_address.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_Nom_fournisser = new JTextField();
			textField_Nom_fournisser.setEditable(false);
			textField_Nom_fournisser.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_Nom_fournisser.setBounds(256, 210, 362, 23);
			textField_Nom_fournisser.setBackground(new Color(240, 230, 140));
			textField_Nom_fournisser.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_Prenom_fournisser = new JTextField();
			textField_Prenom_fournisser.setEditable(false);
			textField_Prenom_fournisser.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
					
				}
			});
			textField_Prenom_fournisser.setBounds(256, 261, 362, 23);
			textField_Prenom_fournisser.setBackground(new Color(255, 250, 250));
			textField_Prenom_fournisser.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_sit_web = new JTextField();
			textField_sit_web.setEditable(false);
			textField_sit_web.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_sit_web.setBounds(256, 514, 362, 23);
			textField_sit_web.setBackground(new Color(240, 230, 140));
			textField_sit_web.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_Email = new JTextField();
			textField_Email.setEditable(false);
			textField_Email.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_Email.setBounds(256, 410, 362, 23);
			textField_Email.setBackground(new Color(240, 230, 140));
			textField_Email.setFont(new Font("Tahoma", Font.BOLD, 14));
			
		 comboBox = new JComboBox<Object>();
		 comboBox.setEnabled(false);
		 comboBox.setBounds(256, 169, 362, 23);
		 comboBox.setBackground(new Color(255, 250, 250));
		 comboBox.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
			//comboBox.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));

		 		btn_Modifer.setEnabled(true);
		 	}
		 });
			comboBox.setFont(new Font("Tahoma", Font.BOLD, 14));
			comboBox.setModel(new DefaultComboBoxModel(new String[] {"", "Mat\u00E9riel De Bureau", "Mat\u00E9riel Informatique", "Divers  ", "Fournitre de  De Bureau", "consommable informatique", "carburant", "produit entretien"}));

			textField_tlphon = new JTextField();
			textField_tlphon.setEditable(false);
			textField_tlphon.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true
							);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_tlphon.setBounds(256, 312, 138, 23);
			textField_tlphon.setBackground(new Color(240, 230, 140));
			textField_tlphon.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_cod_postal = new JTextField();
			textField_cod_postal.setEditable(false);
			textField_cod_postal.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Modifer.setEnabled(false);
					btnEnregestre.setEnabled(true);
					btn_Annuler.setEnabled(true);
				}
			});
			textField_cod_postal.setBounds(256, 464, 80, 23);
			textField_cod_postal.setBackground(new Color(255, 250, 250));
			textField_cod_postal.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_IDfournisser = new JTextField();
			textField_IDfournisser.setEditable(false);
			textField_IDfournisser.setBounds(256, 130, 159, 28);
			textField_IDfournisser.setForeground(new Color(0, 0, 0));
			textField_IDfournisser.setBackground(new Color(255, 255, 204));
			textField_IDfournisser.setFont(new Font("Tahoma", Font.BOLD, 17));
			textField_IDfournisser.setColumns(10);
			
			JLabel lblNewLabel = new JLabel("Code  ");
			lblNewLabel.setBounds(125, 130, 80, 17);
			lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 14));
			lblNewLabel.setForeground(Color.ORANGE);
			
			JLabel lblArticl = new JLabel("                                                   FOURNISSEUR");
			lblArticl.setForeground(Color.ORANGE);
			lblArticl.setFont(new Font("Tahoma", Font.BOLD, 21));
			toolBar.add(lblArticl);
			panel.setLayout(null);
			panel.setLayout(null);
			panel.add(toolBar);
			panel.add(lblNewLabel);
			panel.add(textField_IDfournisser);
			panel.add(label_2);
			panel.add(comboBox);
			panel.add(label_7);
			panel.add(textField_Nom_fournisser);
			panel.add(lblPrnom);
			panel.add(textField_Prenom_fournisser);
			panel.add(lblNumrotlphone);
			panel.add(textField_tlphon);
			panel.add(label_5);
			panel.add(textField_address);
			panel.add(label_6);
			panel.add(textField_Email);
			panel.add(label);
			panel.add(textField_cod_postal);
			panel.add(label_1);
			panel.add(textField_sit_web);
			panel.add(btnFerst);
			panel.add(btnPrecident);
			panel.add(btnNext);
			panel.add(btnLast);
			panel.add(btn_Modifer);
			panel.add(btnSupprimer);
			panel.add(btnEnregestre);
			
			 btn_New = new JButton("Nouveau");
			 btn_New.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
			 btn_New.setFont(new Font("Arial Black", Font.BOLD, 11));
			btn_New.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					
					Nouv =true; 
					btnEnregestre.setEnabled(true);
					btn_Modifer.setEnabled(false);
					btn_Annuler.setEnabled(true);
					
					New_Fournisseur();
					
				editebelTRUE();
			
				}
			
				public void New_Fournisseur() {
					try ( Connection conn= conndb1.connection();
							PreparedStatement stat=conn.prepareStatement("SELECT `ID_fournisser`, `ID_categoure`, `nom_fournisser`, `prenome_fournisser`, `tlphon`, `adresse_fournisser`, `email`, `cod_postal`, `sit_web` FROM `fournisser` ");
							ResultSet 	C=  stat.executeQuery();
							){

		

						C.last();
						//a=C.getRow();
						a=C.getInt("ID_fournisser")+1;
						String s=a.toString();
						textField_IDfournisser.setText(s);
						textField_Nom_fournisser.setText("");
						textField_Prenom_fournisser.setText("");
						comboBox.setSelectedItem("");
						textField_tlphon.setText("");
						textField_address.setText("");
						textField_cod_postal.setText("");
						textField_Email.setText("");
						textField_sit_web.setText("");
		
	
				

					
						} catch (SQLException e) {
				JOptionPane.showMessageDialog(null, e);	
						}
				}
			});
			btn_New.setBounds(687, 245, 146, 36);
			panel.add(btn_New);
			
			 btn_Annuler = new JButton("Annuler");
			 btn_Annuler.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
			 btn_Annuler.setFont(new Font("Arial Black", Font.BOLD, 11));
			 btn_Annuler.setEnabled(false);
			btn_Annuler.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					btnEnregestre.setEnabled(false);
					btn_Modifer.setEnabled(true);
					btn_Annuler.setEnabled(false);
					Nouv=false;
					
					
					
					textField_Nom_fournisser.setEditable(false);
					textField_Prenom_fournisser.setEditable(false);
					textField_address.setEditable(false);
					textField_cod_postal.setEditable(false);
					textField_Email.setEditable(false);
					textField_sit_web.setEditable(false);
					textField_tlphon.setEditable(false);
				comboBox.setEnabled(false);
				}
			});
			btn_Annuler.setBounds(687, 432, 146, 36);
			panel.add(btn_Annuler);
			
			btnNewButton = new JButton("");
			btnNewButton.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
			btnNewButton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					new Catégorie().setVisible(true);
				}
			});
			btnNewButton.setBounds(639, 169, 33, 26);
			panel.add(btnNewButton);
			panel.add(lblNewLabel_1);
			return panel;
	}	
	public static void editebelTRUE() {
		textField_Nom_fournisser.setEditable(true);
		textField_Prenom_fournisser.setEditable(true);
		textField_address.setEditable(true);
		textField_cod_postal.setEditable(true);
		textField_Email.setEditable(true);
		textField_sit_web.setEditable(true);
		textField_tlphon.setEditable(true);
		comboBox.setEnabled(true);
	}
}
