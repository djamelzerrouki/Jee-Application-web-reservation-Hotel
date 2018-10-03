package project;
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.HeadlessException;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Vector;

import javax.swing.DefaultComboBoxModel;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JDialog;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTable;
import javax.swing.JTextField;

import net.proteanit.sql.DbUtils;
import fonction.UPDATE;
import fonction.combo_boxtable;
import fonction.conndb1;

import javax.swing.JToolBar;

import java.awt.SystemColor;

import javax.swing.JTabbedPane;

import java.awt.Dialog.ModalityType;


public class Service extends JDialog {

//	private static JFrame frame;
	private JTextField textField_nom_service;
	private JTextField textField_commentaire;
	
	private static boolean Nouv=false;

	private static  ResultSet rs_Refrech ;
	
	protected static 	JDialog dialog0;
 
	private static JButton btn_Sauvgarder;
	private static JButton btn_Nouveau;
	private static JButton btn_Modifier;
	private static JButton btn_Supprimer;
	private static JButton btn_Annuler;
	private JTable table;
	private JComboBox<Object> comboBoxSrche;
	private JScrollPane scrollPane;
	private JTextField textField_ID_Service;
	private JTextField textFieldSerche;
	private JTabbedPane tabbedPane;
	private JLabel lblNewLabel_4;
	

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					 dialog0 = new Service();
						dialog0.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
						dialog0.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the application.
	 */
	public Service() {
		setResizable(false);
		setTitle("SERVICE ");
		initialize();
		// Refrech_Jtable();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		setBounds(100, 100, 787, 616);
		setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
		getContentPane().setLayout(new BorderLayout(0, 0));
		
		JPanel panel = new JPanel();
		panel.setBackground(Color.WHITE);
		getContentPane().add(panel);
		panel.setLayout(null);
		 
		 JLabel lblNewLabel_3 = new JLabel("ID_Service");
		 lblNewLabel_3.setForeground(Color.BLACK);
		 lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD, 14));
		 lblNewLabel_3.setBounds(60, 110, 108, 25);
		 panel.add(lblNewLabel_3);
		 
		 scrollPane = new JScrollPane();
		 scrollPane.setBounds(60, 255, 527, 266);
		 panel.add(scrollPane);
		 Vector<String> v = new Vector<String>();
		 v.add("ID_categorie");
		 v.add("Nom de categorie");
		 v.add("Designation categorie");
		
		// table = new JTable(combo_boxtable.Rempli_Jtable_categorie(), v);
		 table = new JTable();
		 table.setSurrendersFocusOnKeystroke(true);
		 table.addKeyListener(new KeyAdapter() {
		 	@Override
		 	public void keyReleased(KeyEvent e) {
		 		getdat_To_JtaxtFilde();

		 	}
		 	@Override
		 	public void keyPressed(KeyEvent arg0) {
		 		getdat_To_JtaxtFilde();

		 	}
		 });
		
		 table.addMouseListener(new MouseAdapter() {
		 	@Override
		 	public void mouseClicked(MouseEvent arg0) {
		 		
		 		
		 		
		 		getdat_To_JtaxtFilde();
				 	
		 		
		 		
		 	}

	
		 });
		 Refrech_Jtable();
		 
		 scrollPane.setViewportView(table);
		 
		 btn_Supprimer = new JButton("Supprimer");
		 btn_Supprimer.setFont(new Font("Tahoma", Font.BOLD, 12));
		 btn_Supprimer.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		
		 		try {
					getdat_To_JtaxtFilde();
					
int confermation = JOptionPane.showConfirmDialog(null, "vous les vous Supprimer ? ", "Supprimer ", JOptionPane.YES_NO_OPTION);

					 if (confermation==0) {
						try (Connection conn = conndb1.connection();
								PreparedStatement stt = conn.prepareStatement("DELETE FROM `service` WHERE `ID_service`=?");

						) {

							stt.setString(1, textField_ID_Service.getText());

							 stt.execute();

						} catch (Exception e) {
							// TODO: handle exception
							System.err.println(e.getMessage());
						}
					}


					 Refrech_Jtable();
				} catch (Exception e) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, "selectionner le service que vous voulez \n    supprimer dans le tableau ");

				}
				 
		 	}
		 });
		 btn_Supprimer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_delete.png"));
		 btn_Supprimer.setBounds(612, 315, 132, 34);
		 panel.add(btn_Supprimer);
		 
		  btn_Modifier = new JButton("Modifier");
		  btn_Modifier.setFont(new Font("Tahoma", Font.BOLD, 12));
		 btn_Modifier.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_edit.png"));
		 btn_Modifier.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		btn_Annuler.setEnabled(true);
		 		btn_Sauvgarder.setEnabled(true);
		 		btn_Modifier.setEnabled(false);
		 	}
		 });
		 btn_Modifier.setBounds(612, 372, 132, 34);
		 panel.add(btn_Modifier);
		
		
		 btn_Sauvgarder = new JButton("Sauvgarder");
		 btn_Sauvgarder.setFont(new Font("Tahoma", Font.BOLD, 12));
		 btn_Sauvgarder.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
		btn_Sauvgarder.setEnabled(false);
		
		btn_Sauvgarder.setBounds(612, 430, 132, 34);
		panel.add(btn_Sauvgarder);
		
		 btn_Nouveau = new JButton("Nouveau ");
		 btn_Nouveau.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_Nouveau.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
	
		btn_Nouveau.setBounds(612, 255, 132, 34);
		panel.add(btn_Nouveau);
		

		
		JLabel lblNewLabel = new JLabel("Nom service");
		lblNewLabel.setForeground(Color.BLACK);
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel.setBounds(60, 159, 108, 27);
		panel.add(lblNewLabel);
		
		textField_nom_service = new JTextField();
		textField_nom_service.setFont(new Font("Tahoma", Font.PLAIN, 14));
		textField_nom_service.addKeyListener(new KeyAdapter() {
			@Override
			public void keyPressed(KeyEvent arg0) {
				btn_Modifier.setEnabled(false);
				btn_Sauvgarder.setEnabled(true);
				btn_Annuler.setEnabled(true);
				
				
			}
		});
		textField_nom_service.setBounds(178, 159, 409, 27);
		panel.add(textField_nom_service);
		textField_nom_service.setColumns(10);
		
		JLabel lblNewLabel_Désignation = new JLabel("Commentaire");
		lblNewLabel_Désignation.setForeground(Color.BLACK);
		lblNewLabel_Désignation.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel_Désignation.setBounds(60, 205, 108, 27);
		panel.add(lblNewLabel_Désignation);
		
		textField_commentaire = new JTextField();
		textField_commentaire.setFont(new Font("Tahoma", Font.PLAIN, 14));
		textField_commentaire.addKeyListener(new KeyAdapter() {
			@Override
			public void keyPressed(KeyEvent arg0) {
				btn_Modifier.setEnabled(false);
				btn_Sauvgarder.setEnabled(true);
				btn_Annuler.setEnabled(true);
			}
		});
		textField_commentaire.setBounds(178, 205, 409, 27);
		panel.add(textField_commentaire);
		textField_commentaire.setColumns(10);
		
		textField_ID_Service = new JTextField();
		textField_ID_Service.setEditable(false);
		textField_ID_Service.setForeground(Color.BLACK);
		textField_ID_Service.setFont(new Font("Elephant", Font.BOLD, 16));
		textField_ID_Service.setBounds(178, 110, 238, 25);
		panel.add(textField_ID_Service);
		textField_ID_Service.setColumns(10);
		
		 btn_Annuler = new JButton("Annuler");
		 btn_Annuler.setFont(new Font("Tahoma", Font.BOLD, 12));
		 btn_Annuler.setEnabled(false);
		btn_Annuler.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				btn_Modifier.setEnabled(true);
				btn_Sauvgarder.setEnabled(false);
				btn_Annuler.setEnabled(false);
				Nouv=false;
				
				
				Refrech_Jtable();
			
			}
		});
		btn_Annuler.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
		btn_Annuler.setBounds(612, 487, 132, 34);
		panel.add(btn_Annuler);
		
		tabbedPane = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane.setForeground(Color.BLACK);
		tabbedPane.setFont(new Font("Arial Black", Font.BOLD, 12));
		tabbedPane.setEnabled(false);
		tabbedPane.setBackground(Color.DARK_GRAY);
		tabbedPane.setBounds(471, 45, 273, 103);
		panel.add(tabbedPane);
		
		JPanel panel_1 = new JPanel();
		tabbedPane.addTab("Recherche", null, panel_1, null);
		panel_1.setLayout(null);
		
		 comboBoxSrche = new JComboBox<Object>();
		 comboBoxSrche.setBounds(10, 11, 248, 20);
		 panel_1.add(comboBoxSrche);
		 comboBoxSrche.setModel(new DefaultComboBoxModel(new String[] {"ID_service", "nom_service"}));
		 
		 textFieldSerche = new JTextField();
		 textFieldSerche.setBounds(10, 40, 248, 20);
		 panel_1.add(textFieldSerche);
		 textFieldSerche.addKeyListener(new KeyAdapter() {
		 	@Override
		 	public void keyReleased(KeyEvent e) {
		 		
		 		

		  		
		  		String selectedSarch =(String) comboBoxSrche.getSelectedItem();
		  		
		  	ResultSet rs=null;
		  		try(   	Connection conn=conndb1.connection();
		  				//PreparedStatement stt=conn.prepareStatement("SELECT * FROM `service` WHERE "+selectedSarch+"= ? ");
		  				PreparedStatement stt=conn.prepareStatement("SELECT * FROM `service` WHERE "+selectedSarch+" LIKE ? ");
		  			
		  				) { 

		  			stt.setString(1,"%"+textFieldSerche.getText()+"%");
	 				 rs = stt.executeQuery();

		  			table.setModel(DbUtils.resultSetToTableModel(rs));

		  		}
		 		 catch (Exception e1) {
		 			// TODO: handle exception
		 			 System.err.println(e1.getMessage());
		 		}
		 		 	
	 		

		  		
		  	
		 		
		 	}
		 });
		 textFieldSerche.setColumns(10);
		
		lblNewLabel_4 = new JLabel("");
		lblNewLabel_4.setBounds(0, 0, 268, 86);
		panel_1.add(lblNewLabel_4);
		lblNewLabel_4.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\service-assistance.jpg"));
		
		JToolBar toolBar = new JToolBar();
		toolBar.setBackground(SystemColor.desktop);
		toolBar.setBounds(0, 0, 781, 34);
		panel.add(toolBar);
		
		JLabel lblNewLabel_1 = new JLabel("                                                        SERVICE");
		lblNewLabel_1.setForeground(Color.ORANGE);
		lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 21));
		toolBar.add(lblNewLabel_1);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setFont(new Font("Tahoma", Font.PLAIN, 14));
		lblNewLabel_2.setBounds(0, 0, 781, 622);
		lblNewLabel_2.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\service-assistance.jpg"));
		panel.add(lblNewLabel_2);
	
		btn_Sauvgarder.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				if (Nouv==false && btn_Modifier.isEnabled()==false) {
				UPDATE.UPDATE_Service(textField_ID_Service.getText().trim(), textField_nom_service.getText(), textField_commentaire.getText());
					
					
					
			}
				else{
				add_categorie();
				}
				
				btn_Modifier.setEnabled(true);
				btn_Sauvgarder.setEnabled(false);
				btn_Annuler.setEnabled(false);
				Nouv=false;
				Sortie.comboBox_Sortie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Service().toArray()));
Journal.comboBox_Service.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Service().toArray()));
			Refrech_Jtable();
			
			}
			public void add_categorie (){
				try( Connection conn= conndb1.connection();
						 
					 
						 Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
						
						) {
					 if (!textField_nom_service.getText().trim().equals("") ){ 
						 if (textField_commentaire.getText().trim()!="") {
					 
						stt.executeUpdate("INSERT INTO"
								+ " `service`( `nom_service`, `commentaire`)"
								+ " VALUES ('" + textField_nom_service.getText() + "','"
								+ textField_commentaire.getText() + "')");
						//INSERT INTO `service`(`ID_service`, `nom_service`, `commentaire`) VALUES ([value-1],[value-2],[value-3])
						JOptionPane.showMessageDialog(null,"Vous avez ajouter un nouvelle service ! ");
						 }else {
							 JOptionPane.showMessageDialog(null, " ajouter un service ", "", 3);
						}
						 }
						 
					 else {
						 JOptionPane.showMessageDialog(null, " ajouter un commentaire ", "", 3);
					 }	 
				} catch (Exception e) {
					// TODO Auto-generated catch block
					 JOptionPane.showMessageDialog(null, e.getMessage());

				}
				
				
				
			}
		});
		
	btn_Nouveau.addActionListener(new ActionListener() {
			
			
			public void actionPerformed(ActionEvent arg0)  {
				
				Nouv=true;
				btn_Sauvgarder.setEnabled(true);
				btn_Annuler.setEnabled(true);
				btn_Modifier.setEnabled(true);
				
				try(   	Connection conn=conndb1.connection();
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_service`, `nom_service`, `commentaire` FROM `service` ");
						
						
ResultSet rs=stt.executeQuery();
						){
				rs.last();
					Integer newcategoure =rs.getInt("ID_service")+1;
					textField_ID_Service.setText(newcategoure.toString());
					textField_nom_service.setText("");
					textField_commentaire.setText("");
						}
				 catch (SQLException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
					JOptionPane.showMessageDialog(null, e.getMessage());
				}
		
			}
		});
		}

	public void Refrech_Jtable() {
		try(   	Connection conn=conndb1.connection();
					PreparedStatement stt=conn.prepareStatement("SELECT `ID_service`, `nom_service`, `commentaire` FROM `service` WHERE 1");
					
					

					) { 
			 
			  rs_Refrech = stt.executeQuery();

		table.setModel(DbUtils.resultSetToTableModel(rs_Refrech));
	
		 System.err.println("JTable Refrech   !");

		 }
		 catch (Exception e) {
			// TODO: handle exception
			 System.err.println(e.getMessage());
				e.printStackTrace();

			 JOptionPane.showMessageDialog(null, e.getMessage());
		}

	}
	
	
	
	public void getdat_To_JtaxtFilde() {
		int row = table.getSelectedRow();
 		String id_SERVICE =table.getModel().getValueAt(row,0).toString();
		 try(   	Connection conn=conndb1.connection();
					PreparedStatement stt=conn.prepareStatement("SELECT `ID_service`, `nom_service`, `commentaire` FROM `service` "
							+ "WHERE `ID_service`= '"+id_SERVICE+"'");
					
				 ResultSet rs = stt.executeQuery();
					) { 
			 
		while (rs.next()) {
			textField_ID_Service.setText(rs.getString(1));
			textField_nom_service.setText(rs.getString(2));
			textField_commentaire.setText(rs.getString(3));
			
		}
	//	table.setModel(DbUtils.resultSetToTableModel(rs));
	

		 }
		 catch (Exception e) {
			// TODO: handle exception
			 System.err.println(e.getMessage());
		}
	}
}
