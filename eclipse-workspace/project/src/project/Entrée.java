package project;

import java.awt.Color;
import java.awt.Component;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.SystemColor;
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
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;
import java.util.Properties;

import javax.swing.DefaultComboBoxModel;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JComboBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JTabbedPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.JToolBar;
import javax.swing.SwingConstants;
import javax.swing.border.LineBorder;

import net.proteanit.sql.DbUtils;

import org.eclipse.wb.swing.FocusTraversalOnArray;
import org.jdatepicker.impl.JDatePanelImpl;
import org.jdatepicker.impl.JDatePickerImpl;
import org.jdatepicker.impl.UtilDateModel;

import fonction.Ajout;
import fonction.combo_boxtable;
import fonction.conndb1;
import javax.swing.JCheckBox;

public class Entrée {

	static JFrame frame;
	public static 	JPanel panel ;

	public static JTextField textField_ID_be;
	
	public static JComboBox<Object> comboBox_Fornisseur;
	public static JComboBox<Object> comboBox_Article;
	public static JComboBox<Object> comboBox_RECHERCHE;
	
	public static 	JDatePickerImpl  datepicker;
	public static 	JDatePickerImpl  datepicker1;
	public static 	JDatePickerImpl  datepicker0;
	
	public static 	UtilDateModel  model;
	public static 	UtilDateModel  model0;
	public static 	UtilDateModel  model1;
	
	public static 	JDatePanelImpl datepanel;
	public static 	JDatePanelImpl datepanel0;
	public static 	JDatePanelImpl datepanel1;

	static Date b;
	static String today;
	private static JTable table;
	private static JScrollPane scrollPane;
	private static JTextField texefild_quantité;
	private static JTextField textfild_prix;
	
	private static JCheckBox chckbxBonDentre;

	private static JButton btn_Enregester;
	private static JButton btn_Annuler;
	private static JTable table_be;
	private static JButton btn_Ajout_prodoui;
	private static  JButton btn_Suprimer;
	private static JTextField textField_RECHERCHE;
	private static JButton btn_annuler_Rech_Date;
	private static JLabel lblAu;
	private static JPanel panel_2;
	private static JTextField textField_Catégorie;
	private static JTextField textField_Prix_Toutal;


	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
				
					Entrée.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});


		//combo_boxtable.tableaffich1();
	}
	/**
	 * Create the application.
	 * @wbp.parser.entryPoint
	 */
	public Entrée() {
		initialize();
		JTabbedPane tabbedPane=null;
		panel_Entrée(tabbedPane);
	}
	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 833, 662);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);

		//Refrech_Jtable_be();

		//last_BDE();

		}	
	
	
	public static  void panel_Entrée(JTabbedPane tabbedPane) {




		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 833, 662);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);

		//String s = "<table border="+3+" width="+300+" height="+75+"><tr><td width="+50+"%>Ed</td><td width="+50+"%>Tom</td></tr></table>";


		//last_BDE();

		panel = new JPanel();
		panel.setBackground(Color.DARK_GRAY);
		panel.setBounds(0, 0, 944, 756); 
		//		frame.getContentPane().add(panel);
		tabbedPane.addTab("Entrée", null, panel, null);

		
		
		
		
		
		try {

		model =new UtilDateModel(Calendar.getInstance().getTime());

		Properties p=new Properties();

		datepanel = new JDatePanelImpl(model, p);
		frame.getContentPane().setLayout(null);
		  panel.setLayout(null);
		
	} catch (Exception e1) {
		// TODO Auto-generated catch block
		JOptionPane.showMessageDialog(null, e1.getMessage());
		System.out.println("model of Time "+e1.getMessage());
	}
		
		
		
		
		datepicker =new JDatePickerImpl(datepanel, null);
		datepicker.setButtonFocusable(false);
		datepicker.setBounds(402, 71, 257, 23);
		datepicker.setToolTipText("");
		datepicker.setShowYearButtons(true);
		datepicker.getJFormattedTextField().setFont(new Font("Tahoma", Font.BOLD, 12));
		datepicker.getJFormattedTextField().setBackground(SystemColor.info);
		datepicker.setBackground(new Color(255, 255, 225));
		
					datepicker.addActionListener(new ActionListener() {
						public void actionPerformed(ActionEvent arg0) {
		
							datepicker.toString();
							get_Date_Withe_Switch(model, datepicker);
							
							

							
						}
					});
								JLabel lblNewLabel = new JLabel("Code ");
								lblNewLabel.setBounds(247, 46, 145, 17);
								lblNewLabel.setFont(new Font("Arial Rounded MT Bold", Font.BOLD, 15));
								lblNewLabel.setForeground(Color.YELLOW);
								panel.add(lblNewLabel);
										
												textField_ID_be = new JTextField();
												textField_ID_be.setEditable(false);
												textField_ID_be.setBounds(402, 45, 257, 21);
												textField_ID_be.setFont(new Font("Tahoma", Font.BOLD, 12));
												textField_ID_be.setBackground(SystemColor.info);
												textField_ID_be.setText(last_BDE(0).toString());
												panel.add(textField_ID_be);
												textField_ID_be.setColumns(10);
								
										JLabel lblNewLabel_1 = new JLabel("Date d' entr\u00E9e");
										lblNewLabel_1.setBounds(247, 70, 145, 23);
										lblNewLabel_1.setFont(new Font("Arial Rounded MT Bold", Font.BOLD, 15));
										lblNewLabel_1.setForeground(Color.YELLOW);
										panel.add(lblNewLabel_1);
					
					
										get_Date_Withe_Switch(model, datepicker);						
										panel.add( datepicker);
								datepicker.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker.getJFormattedTextField()}));

JLabel lblNewLabel_2 = new JLabel("Fournisseur");
lblNewLabel_2.setBounds(247, 106, 145, 17);
lblNewLabel_2.setFont(new Font("Arial Rounded MT Bold", Font.BOLD, 15));
lblNewLabel_2.setForeground(Color.YELLOW);
panel.add(lblNewLabel_2);

JButton button = new JButton("");
button.setBounds(664, 100, 27, 23);
button.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
button.addActionListener(new ActionListener() {
public void actionPerformed(ActionEvent arg0) {


	new New_fournisseur().setVisible(true);
		
	comboBox_Fornisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));

}
});

	
			comboBox_Fornisseur = new JComboBox<Object>();
			comboBox_Fornisseur.setBounds(402, 104, 257, 21);
			
			comboBox_Fornisseur.setFont(new Font("Tahoma", Font.BOLD, 12));

			comboBox_Fornisseur.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {

					if (true) {


						comboBox_Article.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxArticl().toArray()));
						//textField_Catégorie.setText(comboBox_Fornisseur.getSelectedItem().toString().trim());
						textField_Catégorie.setText(combo_boxtable.combxFournisser_nom_Catégorie("Entrée").toString());

					}

				}
			});
			
	comboBox_Fornisseur.setBackground(SystemColor.info);
	
	comboBox_Fornisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));
	panel.add(comboBox_Fornisseur);

	button.setFont(new Font("Tahoma", Font.BOLD, 13));
panel.add(button);
		
		
		
		
		
		
		try {
			  model1 =new UtilDateModel(Calendar.getInstance().getTime());
			 datepanel1 = new JDatePanelImpl(model1, new Properties());
			frame.getContentPane().setLayout(null);
			  panel.setLayout(null);
			
			//frame.pack();


		} catch (Exception e1) {
			// TODO Auto-generated catch block
			System.out.println(e1.getMessage());
			
		}

		
		try {
		  model0 =new UtilDateModel(Calendar.getInstance().getTime());
		 datepanel0 = new JDatePanelImpl(model0, new Properties());
			frame.getContentPane().setLayout(null);
			  panel.setLayout(null);

			//frame.pack();


		} catch (Exception e1) {
			// TODO Auto-generated catch block
			System.out.println(e1.getMessage());
			
		}
		Refrech_Jtable_Entrée();
		
		
		
				table=new JTable();
				Refrech_Jtable_Entrée();
				table.addMouseListener(new MouseAdapter() {
					@Override
					public void mouseClicked(MouseEvent arg0) {
						getdat_To_JtaxtFilde();
	
					}
					@Override
					public void mouseReleased(MouseEvent arg0) {
						getdat_To_JtaxtFilde();

					}
				});
				table.addKeyListener(new KeyAdapter() {
				
					@Override
					public void keyPressed(KeyEvent arg0) {
						getdat_To_JtaxtFilde();

					}
					@Override
					public void keyReleased(KeyEvent arg0) {
						getdat_To_JtaxtFilde();

					}
				});
				
						scrollPane = new JScrollPane();
						scrollPane.setBounds(350, 415, 579, 229);
						scrollPane.setViewportView(table);
						panel.add(scrollPane);
		//System.out.println(read_db.getRowOFTabl("article"));

		 btn_Enregester = new JButton("Enregester");
		 btn_Enregester.setBounds(428, 180, 124, 30);
		 btn_Enregester.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
		 btn_Enregester.setEnabled(false);
		btn_Enregester.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_Enregester.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				try {
					GregorianCalendar c = new GregorianCalendar(model.getYear(), model.getMonth(), model.getDay());
					Date date = c.getTime();

					DateFormat formate =new SimpleDateFormat("yyyy-MM-dd");
					today =formate.format(date);
					//String str_Date = ((""+model.getYear()+"-"+model.getMonth()+"-"+model.getDay()+""));


					//b = new Date(model.getYear(),model.getMonth(),model.getDay());

					JOptionPane.showMessageDialog(null, "Vous avez ajouter un nouveau bon d' entrée ");

					System.out.println(today);

				} catch (Exception e) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, e.getMessage());
				}


				Ajout.Insert_New_Entrée(today, comboBox_Fornisseur.getSelectedItem().toString().trim());

				// pour Aficher suivante identifiante de bon d' entreé 

				textField_ID_be.setText(last_BDE(0).toString()); 
				btn_Enregester.setEnabled(false);
                btn_Annuler.setEnabled(false);
				comboBox_Fornisseur.setEnabled(false);
				btn_Ajout_prodoui.setEnabled(true);
				
				btn_Suprimer.setEnabled(true);
				//datepicker.setButtonFocusable(false);
  
				Refrech_Jtable_be();
				Refrech_Jtable_Entrée();

				}
		});
		panel.add(btn_Enregester);
		
		JButton btn_Nouveau = new JButton("Nouveau");
		btn_Nouveau.setBounds(251, 181, 124, 30);
		btn_Nouveau.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_Nouveau.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
		btn_Nouveau.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				
				
			btn_Enregester.setEnabled(true);
			btn_Annuler.setEnabled(true);
			comboBox_Fornisseur.setEnabled(true);
			//datepicker.setButtonFocusable(true);


		    textField_ID_be.setText(last_BDE(1).toString()); 
Refrech_Jtable_Entrée();

		    
			}
		});
		panel.add(btn_Nouveau);
		
		 btn_Annuler = new JButton("Annuler");
		 btn_Annuler.setBounds(605, 182, 124, 30);
		btn_Annuler.setEnabled(false);
		btn_Annuler.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				btn_Enregester.setEnabled(false);
				btn_Annuler.setEnabled(false);
				comboBox_Fornisseur.setEditable(false);
			    textField_ID_be.setText(last_BDE(0).toString()); 

				Refrech_Jtable_Entrée();
				Refrech_Jtable_be();
				
			}
		});
		btn_Annuler.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
		btn_Annuler.setFont(new Font("Tahoma", Font.BOLD, 12));
		panel.add(btn_Annuler);
		
		JScrollPane scrollPane_1 = new JScrollPane();
		scrollPane_1.setBounds(19, 415, 321, 229);
		panel.add(scrollPane_1);
		
		table_be = new JTable();
		table_be.setColumnSelectionAllowed(true);
		table_be.setBorder(new LineBorder(Color.BLACK, 1, true));
		table_be.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent arg0) {
				
				getdat_To_JtaxtFilde_be();
				//Refrech_Jtable_Entrée();


			}
		});
		table_be.addKeyListener(new KeyAdapter() {
			@Override
			public void keyReleased(KeyEvent arg0) {
				
				
				getdat_To_JtaxtFilde_be();
				//Refrech_Jtable_Entrée();

				
			}
			@Override
			public void keyPressed(KeyEvent arg0) {

				getdat_To_JtaxtFilde_be();
				//Refrech_Jtable_Entrée();


			}
		});
		scrollPane_1.setViewportView(table_be);
		Refrech_Jtable_be();
		
		JToolBar toolBar = new JToolBar();
		toolBar.setBounds(0, 0, 944, 37);
		toolBar.setBackground(Color.BLACK);
		panel.add(toolBar);
		
		JLabel lblEntree = new JLabel("                                                            ENTREE");
		lblEntree.setFont(new Font("Tahoma", Font.BOLD, 21));
		lblEntree.setForeground(Color.ORANGE);
		toolBar.add(lblEntree);
		
		JTabbedPane tabbedPane_1 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_1.setForeground(new Color(0, 0, 0));
		tabbedPane_1.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_1.setEnabled(false);
		tabbedPane_1.setBackground(Color.BLACK);
		tabbedPane_1.setBounds(19, 205, 320, 96);
		panel.add(tabbedPane_1);
		
		JPanel panel_1 = new JPanel();
		panel_1.setBackground(Color.DARK_GRAY);
		tabbedPane_1.addTab("Filtre", null, panel_1, null);
		  panel_1.setLayout(null);
		//SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
		  datepicker1 =new JDatePickerImpl(datepanel1,null);
		  datepicker1.setBounds(47, 37, 217, 23);
		  panel_1.add(datepicker1);
		  datepicker1.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker1.getJFormattedTextField()}));
		  
		  
		  datepicker1.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {

					datepicker1.toString();
					get_Date_Withe_Switch(model1, datepicker1);
					
//             String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();
			 		
				 	ResultSet rs=null;
				 		try(   	Connection conn=conndb1.connection();
				 				PreparedStatement stt=conn.prepareStatement("SELECT `ID_be`, `date_be`, `nom_fournisser` FROM `be` AS be ,`fournisser` AS fr"
				 						+ " WHERE  be.`ID_fourniseur` = fr.`ID_fournisser`  AND `date_be` BETWEEN "
				 						+ " '"+datepicker0.getJFormattedTextField().getText()+"' AND '"+datepicker1.getJFormattedTextField().getText()+"'");
				 			
				 				) { 

				 		//	stt.setString(1,textField_RECHERCHE.getText());
			 				 rs = stt.executeQuery();

				 			table_be.setModel(DbUtils.resultSetToTableModel(rs));

				 		}
						 catch (Exception e1) {
							// TODO: handle exception
							 System.err.println(e1.getMessage());
						}

				}
				
			});
		  
		  
		  //SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
		    datepicker0 =new JDatePickerImpl(datepanel0,null);
		    datepicker0.setBounds(47, 6, 217, 23);
		    panel_1.add(datepicker0);
		    datepicker0.addActionListener(new ActionListener() {
		    	public void actionPerformed(ActionEvent arg0) {
								
		    		datepicker0.toString();
		    		get_Date_Withe_Switch(model0, datepicker0);
		    		
	//	    		String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();
		     		
		    	 	ResultSet rs=null;
		    	 		try(   	Connection conn=conndb1.connection();
		    	 				PreparedStatement stt=conn.prepareStatement("SELECT `ID_be`, `date_be`, `nom_fournisser` FROM `be` AS be ,`fournisser` AS fr"
				 						+ " WHERE  be.`ID_fourniseur` = fr.`ID_fournisser`  AND `date_be` BETWEEN "
				 						+ " '"+datepicker0.getJFormattedTextField().getText()+"' AND '"+datepicker1.getJFormattedTextField().getText()+"'");
		    	 			
		    	 				) { 

		    	 		//	stt.setString(1,textField_RECHERCHE.getText());
		     				 rs = stt.executeQuery();

		    	 			table_be.setModel(DbUtils.resultSetToTableModel(rs));

		    	 		}
		    			 catch (Exception e1) {
		    				// TODO: handle exception
		    				 System.err.println(e1.getMessage());
		    			}

		    	}
		    });
		    datepicker0.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker0.getJFormattedTextField()}));
		    
		    btn_annuler_Rech_Date = new JButton("");
		    btn_annuler_Rech_Date.setBounds(277, 20, 33, 30);
		    panel_1.add(btn_annuler_Rech_Date);
		    btn_annuler_Rech_Date.addActionListener(new ActionListener() {
		    	public void actionPerformed(ActionEvent arg0) {
		    		datepicker1.getJFormattedTextField().setText("");
		    		datepicker0.getJFormattedTextField().setText("");
		    		Refrech_Jtable_be();

		    	}
		    });
		    btn_annuler_Rech_Date.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
		    
		    lblAu = new JLabel("au :");
		    lblAu.setBounds(10, 37, 39, 23);
		    panel_1.add(lblAu);
		    lblAu.setForeground(Color.YELLOW);
		    lblAu.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 15));
		    
		    JLabel lblNewLabel_3 = new JLabel("du :");
		    lblNewLabel_3.setBounds(10, 6, 39, 23);
		    panel_1.add(lblNewLabel_3);
		    lblNewLabel_3.setForeground(Color.YELLOW);
		    lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 15));
		    
		    JLabel lblNewLabel_4 = new JLabel("");
		    lblNewLabel_4.setBounds(0, 0, 319, 104);
		    panel_1.add(lblNewLabel_4);
		    lblNewLabel_4.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\9d53f96dfd561e67e5adf0b64bad537a.jpg"));
		
		JTabbedPane tabbedPane_2 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_2.setBackground(Color.BLACK);
		tabbedPane_2.setForeground(new Color(0, 0, 0));
		tabbedPane_2.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_2.setEnabled(false);
		tabbedPane_2.setBounds(19, 310, 321, 96);
		panel.add(tabbedPane_2);
		
		panel_2 = new JPanel();
		tabbedPane_2.addTab("Recherche", null, panel_2, null);
		panel_2.setLayout(null);
		
		textField_RECHERCHE = new JTextField();
		textField_RECHERCHE.setBounds(26, 35, 259, 21);
		panel_2.add(textField_RECHERCHE);
		textField_RECHERCHE.addKeyListener(new KeyAdapter() {
			
			
			@Override
			public void keyReleased(KeyEvent arg0) {
				
		 		
		 		String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();
		 		
		 	ResultSet rs=null;
		 		try(   	Connection conn=conndb1.connection();
		 				PreparedStatement stt=conn.prepareStatement("SELECT `ID_be`, `date_be`, fr.`nom_fournisser` FROM `be` AS be ,`fournisser` AS fr "
		 						+ "WHERE  be.`ID_fourniseur` = fr.`ID_fournisser` AND "+selectedSarch+" LIKE ? ");
		 			
		 				) { 

		 			stt.setString(1,"%"+textField_RECHERCHE.getText()+"%");
	 				 rs = stt.executeQuery();

		 			table_be.setModel(DbUtils.resultSetToTableModel(rs));

		 		}
				 catch (Exception e1) {
					// TODO: handle exception
					 System.err.println(e1.getMessage());
				}
				 	
	 		

		 		
		 	
				
			
				
				
				
				
			}
		});
		textField_RECHERCHE.setColumns(10);
		
		 comboBox_RECHERCHE = new JComboBox<Object>();
		 comboBox_RECHERCHE.setBounds(26, 7, 259, 20);
		 panel_2.add(comboBox_RECHERCHE);
		 comboBox_RECHERCHE.setModel(new DefaultComboBoxModel<Object>(new String[] {"ID_be", "nom_fournisser"}));
		 
		 JLabel label = new JLabel("");
		 label.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\9d53f96dfd561e67e5adf0b64bad537a.jpg"));
		 label.setBounds(0, 0, 312, 109);
		 panel_2.add(label);
		
		JTabbedPane tabbedPane_3 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_3.setBackground(Color.BLACK);
		tabbedPane_3.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_3.setEnabled(false);
		tabbedPane_3.setBounds(350, 229, 578, 175);
		panel.add(tabbedPane_3);
		
		JPanel panel_3 = new JPanel();
		tabbedPane_3.addTab("Article", null, panel_3, null);
		panel_3.setLayout(null);
		
		
		
		JLabel lblNewLabel_7 = new JLabel("Artice :");
		lblNewLabel_7.setBounds(10, 11, 217, 16);
		panel_3.add(lblNewLabel_7);
		lblNewLabel_7.setForeground(Color.YELLOW);
		lblNewLabel_7.setFont(new Font("Tahoma", Font.BOLD, 13));
		
		
		// comboBox = new JComboBox<Object>(combo_boxtable.combxArticl().toArray());
		
		comboBox_Article = new JComboBox<Object>();
		comboBox_Article.setBounds(95, 8, 286, 22);
		panel_3.add(comboBox_Article);
		comboBox_Article.setFont(new Font("Tahoma", Font.BOLD, 13));
		
							
									texefild_quantité = new JTextField();
									texefild_quantité.setBounds(10, 68, 144, 22);
									panel_3.add(texefild_quantité);
									texefild_quantité.setFont(new Font("Tahoma", Font.BOLD, 13));
									texefild_quantité.setColumns(10);
									
											JLabel lblNewLabel_8 = new JLabel("Quantit\u00E9 :");
											lblNewLabel_8.setBounds(10, 41, 144, 16);
											panel_3.add(lblNewLabel_8);
											lblNewLabel_8.setForeground(Color.YELLOW);
											lblNewLabel_8.setFont(new Font("Tahoma", Font.BOLD, 13));
											
													JLabel lblNewLabel_9 = new JLabel("Prix :");
													lblNewLabel_9.setBounds(232, 41, 166, 16);
													panel_3.add(lblNewLabel_9);
													lblNewLabel_9.setForeground(Color.YELLOW);
													lblNewLabel_9.setFont(new Font("Tahoma", Font.BOLD, 13));
													
															textfild_prix = new JTextField();
															textfild_prix.setBounds(232, 68, 157, 22);
															panel_3.add(textfild_prix);
															textfild_prix.setFont(new Font("Tahoma", Font.BOLD, 13));
															textfild_prix.setColumns(10);
															
																	 btn_Ajout_prodoui = new JButton("Ajouter");
																	 btn_Ajout_prodoui.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
																	 btn_Ajout_prodoui.setBounds(408, 101, 114, 33);
																	 panel_3.add(btn_Ajout_prodoui);
																	 btn_Ajout_prodoui.setEnabled(false);
																	 btn_Ajout_prodoui.setFont(new Font("Verdana", Font.BOLD, 13));
																	 
																	  btn_Suprimer = new JButton("Suprimer");
																	 btn_Suprimer.setEnabled(false);
																	 btn_Suprimer.setBounds(264, 103, 124, 30);
																	 panel_3.add(btn_Suprimer);
																	 btn_Suprimer.addActionListener(new ActionListener() {
																	 	public void actionPerformed(ActionEvent arg0) {

																	  		
																	  		
																	 		
																	 		 try {
																	 		 		getdat_To_JtaxtFilde();

																	 			 int confermation = JOptionPane.showConfirmDialog(null, "vous les vous Supprimer ? ", "Supprimer ", JOptionPane.YES_NO_OPTION);

																	 			if (confermation==0) {
																	 				try (Connection conn = conndb1.connection();
//							PreparedStatement stt = conn.prepareStatement("DELETE FROM `categoure` WHERE `ID_categoure`=?");
																	 						PreparedStatement stt = conn.prepareStatement("DELETE FROM `line_be` WHERE `ID_line_be`=? ");

																	 				) {

																	 					int row = table.getSelectedRow();
																	 					String id_bs =table.getModel().getValueAt(row,0).toString();
																	 					stt.setString(1, id_bs);

																	 					 stt.execute();

																	 				} catch (Exception e) {
																	 					// TODO: handle exception
																	 					System.err.println(e.getMessage());
																	 					//JOptionPane.showMessageDialog(null, "selectionner le service que vous voulez \n    supprimer dans le tableau ");
																	 				}
																	 				Refrech_Jtable_be();
																	 			}
																	 		} catch (Exception e) {
																	 			// TODO Auto-generated catch block
																	 			JOptionPane.showMessageDialog(null, "selectionner l' article  que vous voulez \n    supprimer dans le tableau ");
																	 		}
																	 	

																	 	//	 Refrech_Jtable();
																	  	
																	 	}
																	 });
																	 btn_Suprimer.setFont(new Font("Tahoma", Font.BOLD, 12));
																	 btn_Suprimer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_delete.png"));
																	 
																	 JLabel lblNewLabel_5 = new JLabel("New label");
																	 lblNewLabel_5.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\9d53f96dfd561e67e5adf0b64bad537a.jpg"));
																	 lblNewLabel_5.setBounds(0, 0, 573, 251);
																	 panel_3.add(lblNewLabel_5);
																	 btn_Ajout_prodoui.addActionListener(new ActionListener() {
																	 	public void actionPerformed(ActionEvent arg0) {

																	 		Refrech_Jtable_Entrée();

																	 		try {
																	 			
																	 			Double c = new Double(texefild_quantité.getText());
																	 			Double d = new Double(textfild_prix.getText());
																	 			Ajout.insert_Linge_Bone_Entrée(textField_ID_be.getText(), comboBox_Article.getSelectedItem().toString().trim(), c, d);
																	 			JOptionPane.showMessageDialog(null, "Vous aves Ajout un nouven prodoui !", "Ajout_prodoui", 1);			
																	 			Refrech_Jtable_Entrée();


																	 		} catch (Exception e) {
																	 			// TODO Auto-generated catch block
																	 			JOptionPane.showMessageDialog(null,e.getMessage(), "Err Ajout_prodoui", 0);			

																	 			//JOptionPane.showMessageDialog(null, e.getMessage());			
																	 		}
																	 		System.out.println(comboBox_Article.getSelectedItem().toString().trim());

																	 		Refrech_Jtable_Entrée();
																	 		
																	 	}
																	 
																	 });
		
		JLabel lblNewLabel_10 = new JLabel("Cat\u00E9gorie");
		lblNewLabel_10.setFont(new Font("Arial Rounded MT Bold", Font.BOLD, 15));
		lblNewLabel_10.setForeground(Color.YELLOW);
		lblNewLabel_10.setBounds(247, 139, 145, 21);
		panel.add(lblNewLabel_10);
		
		textField_Catégorie = new JTextField();
		textField_Catégorie.setEditable(false);
		textField_Catégorie.setFont(new Font("Tahoma", Font.BOLD, 13));
		textField_Catégorie.setColumns(10);
		textField_Catégorie.setBounds(402, 138, 257, 22);
		
		panel.add(textField_Catégorie);
		
		JLabel lblPrixToutal = new JLabel("Totaux des prix :");
		lblPrixToutal.setHorizontalAlignment(SwingConstants.CENTER);
		lblPrixToutal.setForeground(Color.YELLOW);
		lblPrixToutal.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblPrixToutal.setBounds(498, 655, 168, 27);
		panel.add(lblPrixToutal);
		
		textField_Prix_Toutal = new JTextField();
		textField_Prix_Toutal.setHorizontalAlignment(SwingConstants.CENTER);
		textField_Prix_Toutal.setEditable(false);
		textField_Prix_Toutal.setFont(new Font("Tahoma", Font.BOLD, 13));
		textField_Prix_Toutal.setColumns(10);
		textField_Prix_Toutal.setBounds(667, 652, 219, 30);
		panel.add(textField_Prix_Toutal);
		
		 chckbxBonDentre = new JCheckBox("bon d'entr\u00E9e");
		chckbxBonDentre.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				if (chckbxBonDentre.isSelected()) {
					btn_Suprimer.setEnabled(false);
					btn_Ajout_prodoui.setEnabled(false);
					table_be.setEnabled(true);
				
					
				} else {
					textField_ID_be.setText(table_be.getModel().getValueAt(table_be.getRowCount()-1,0).toString());
					datepicker.getJFormattedTextField().setText(table_be.getModel().getValueAt(table_be.getRowCount()-1,1).toString());
		    	

					comboBox_Fornisseur.setSelectedItem(table_be.getModel().getValueAt(table_be.getRowCount()-1,2).toString());
					btn_Suprimer.setEnabled(true);
					btn_Ajout_prodoui.setEnabled(true);
					table_be.setEnabled(false);
				}
			}
		});
		chckbxBonDentre.setSelected(true);
		chckbxBonDentre.setBounds(20, 658, 97, 23);
		panel.add(chckbxBonDentre);

		JLabel lblNewLabel_6 = new JLabel("");
		lblNewLabel_6.setBackground(Color.DARK_GRAY);
		lblNewLabel_6.setBounds(0, 11, 954, 745);
		lblNewLabel_6.setFont(new Font("Arial Black", Font.BOLD, 13));
		lblNewLabel_6.setForeground(new Color(0, 0, 0));
    	panel.add(lblNewLabel_6);
		lblNewLabel_6.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\9d53f96dfd561e67e5adf0b64bad537a.jpg"));



	}
	
	public static  Integer  last_BDE(int i) {
	
		try ( Connection conn= conndb1.connection();
				PreparedStatement stat=conn.prepareStatement("SELECT `ID_be`, `date_be`, `ID_fourniseur` FROM `be`");
				ResultSet 	C=  stat.executeQuery();
				){

			C.last();
			C.getRow();	
			try {
				Integer i0=new Integer(C.getInt("ID_be")+i);
				
				return i0;

			} catch (Exception e) {

				// TODO Auto-generated catch block
				JOptionPane.showMessageDialog(null, e.getMessage());
				System.out.println(" Method_in_Entrée_last_BDE : "+e.getMessage());

			}


		} catch (SQLException e) {
			JOptionPane.showMessageDialog(null, e.getMessage());	
		}

		return 10;

	}


	public static void Refrech_Jtable_Entrée() {
		try(   	Connection conn=conndb1.connection();
				/*
				 PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_be`, `date_be`, `nom_article`,`nom_fournisser`, `Quantite_line_be`, `prix` "
						+ " FROM `line_be` AS lbe , `article` AS ar,`be` AS be , `fournisser` AS FR "
						+ " WHERE lbe.`ID_be`= be.`ID_be` AND  lbe.`ID_article` =  ar.`ID_article` AND FR.`ID_fournisser` = be.`ID_fourniseur` ");
						*/
				PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_be` Code ,be.`ID_be` AS 'Num de bon', `date_be` AS 'Date', `nom_article` AS 'Article' ,"
						+ " `nom_fournisser` AS Fournisser, `Quantite_line_be` AS Quantite, `prix` ,"
						+ " (lbe.`prix` * `Quantite_line_be`) AS Prix_total "
						+ " FROM `line_be` AS lbe , `article` AS ar,`be` AS be , `fournisser` AS FR "
						+ " WHERE lbe.`ID_be` =be.`ID_be` AND be.`ID_be`='"+textField_ID_be.getText()+"' AND  lbe.`ID_article` =  ar.`ID_article` AND FR.`ID_fournisser` = be.`ID_fourniseur`  ");

				ResultSet rs = stt.executeQuery();


				) { 


			table.setModel(DbUtils.resultSetToTableModel(rs));
			Double Q=0.0;
			rs.beforeFirst();
			while (rs.next()) {
				Q=rs.getDouble("Prix_total")+Q;
				}
			textField_Prix_Toutal.setText(Q+" DA");
			//System.err.println("Donne !");

		}
		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}
	}
	
	public static void Refrech_Jtable_be() {
		try(   	Connection conn=conndb1.connection();
				PreparedStatement stt=conn.prepareStatement(" SELECT be.`ID_be` AS 'Code ' , `date_be` AS Date ,`nom_fournisser`AS Fourniser FROM `be` AS be, `fournisser` AS FR    "
						+ "WHERE FR.`ID_fournisser` = be.`ID_fourniseur` ");
				
				ResultSet rs = stt.executeQuery();
				
				
				) { 
			
			
			table_be.setModel(DbUtils.resultSetToTableModel(rs));
			
			System.err.println("Donne !");
			
		}
		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}
		
		
		Refrech_Jtable_Entrée();
	}


	

	public static void getdat_To_JtaxtFilde_be() {
		int row = table_be.getSelectedRow();
		String id_be =table_be.getModel().getValueAt(row,0).toString();
		try(   	Connection conn=conndb1.connection();
				PreparedStatement stt=conn.prepareStatement(" SELECT `ID_be` Code, `date_be`,`nom_fournisser` FROM `be` AS be, `fournisser` AS FR    "
						+ "WHERE   `ID_be`='"+id_be+"' AND FR.`ID_fournisser` = be.`ID_fourniseur` ");
				
				ResultSet rs = stt.executeQuery();
				) { 
			
			while (rs.next()) {
				textField_ID_be.setText(rs.getString(1));
				
					datepicker.getJFormattedTextField().setText(rs.getString(2));
				comboBox_Fornisseur.setSelectedItem(rs.getString(3));
				
			}
//table.setModel(DbUtils.resultSetToTableModel(rs));
			Refrech_Jtable_Entrée();
			
		}
		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}
	}
public static void getdat_To_JtaxtFilde() {
	int row = table.getSelectedRow();
		String id_line_be =table.getModel().getValueAt(row,0).toString();
	 try(   	Connection conn=conndb1.connection();
				/*PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_be`,`ID_be`, `date_be`, `nom_article`,`nom_fournisser`, `Quantite_line_be`, `prix` "
						+ " FROM `line_be` AS lbe , `article` AS ar,`be` AS be , `fournisser` AS FR "
						+ " WHERE lbe.`ID_be`='"+textField_ID_be.getText()+"' AND  lbe.`ID_article` =  ar.`ID_article` AND FR.`ID_fournisser` = be.`ID_fourniseur` AND `ID_line_be`='"+id_line_be+"' ");
				*/

				PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_be`,be.`ID_be`, `date_be`, `nom_article`,`nom_fournisser`, `Quantite_line_be`, `prix` "
						+ " FROM `line_be` AS lbe , `article` AS ar,`be` AS be , `fournisser` AS FR "
						+ " WHERE lbe.`ID_be` =be.`ID_be`  AND  lbe.`ID_article` =  ar.`ID_article` AND FR.`ID_fournisser` = be.`ID_fourniseur` AND `ID_line_be`='"+id_line_be+"' ");
			 
			 ResultSet rs = stt.executeQuery();
				) { 
		 
		
	
		while (rs.next()) {
			comboBox_Article.setSelectedItem(rs.getString(4));
			texefild_quantité.setText(rs.getString(6));
			textfild_prix.setText(rs.getString(7));
		}
		
	


	 }
	 catch (Exception e) {
		// TODO: handle exception
		 System.err.println(e.getMessage());
	}
}

/*##############################################################"
 * 
 * get la date linsilictionoha ki nadarko 3la conenderiyi
 * 
 *##############################################################" 
 */
public static void get_Date_Withe_Switch(UtilDateModel ModelSelacted,JDatePickerImpl Datepicker) {
	Integer i=ModelSelacted.getMonth()+1;
	char[] c = i.toString().toCharArray();
	switch (c.length) {
	case 1:
		Datepicker.getJFormattedTextField().setText((""+ModelSelacted.getYear()+"-0"+(ModelSelacted.getMonth()+1)+"-"+ModelSelacted.getDay()+"").trim());

		break;
                                 

	default:
		Datepicker.getJFormattedTextField().setText((""+ModelSelacted.getYear()+"-"+(ModelSelacted.getMonth()+1)+"-"+ModelSelacted.getDay()+"").trim());

		break;
	}
}
}


/*  

	 CREATE PROCEDURE 
get_id_article(a Varchar)
BEGIN
SELECT `ID_article` FROM `article` 
WHERE 
`nom_article` = a ;
END .


 
 SELECT `ID_line_be`, `date_be`, `nom_article`, `Quantite_line_be`, `prix` FROM `line_be` AS lbe , `article` AS ar,`be`AS be WHERE lbe.`ID_be`= be.`ID_be`AND lbe.`ID_article`= ar.`ID_article`

 
 
 *  */
