package project;

import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.event.MouseMotionAdapter;
import java.awt.event.TextEvent;
import java.awt.event.TextListener;
import java.io.IOException;
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
import fonction.read_db;

import javax.swing.JTable;
import javax.swing.JScrollPane;

import net.proteanit.sql.DbUtils;
import java.awt.SystemColor;


public class Articl {

	private JFrame frame;
	private static boolean Nouv=false;
	private static Integer a=1;
	ResultSet rs;
	private static JButton btn_Sauvgarder;

	private	static  JTextField textField_Dessignation_Article;
	private static JTextField textField_Referance_Article;
 	private static JTextField textField_Nom_Article;
 	private	static JTextField textField_Id_Article;
 	public static JComboBox<Object> comboBox_famille;
 	private	static JButton btnNext;
 	private	static JButton btnLast;
 	private	static JButton btn_Modifer;
 	private	static JButton  btnFerst;
 	private	static JButton  btnPrecident;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Articl window = new Articl();
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
	public Articl() {
		initialize();
		//act
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 450, 300);
		
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		JTabbedPane tabbedPane = null;
		panel_Article(tabbedPane);

	}
	
	







		static  JLabel lblNewLabel_1;
		private static JButton btn_Annuler;
		private static JTable table;
		private static JScrollPane scrollPane;
	@SuppressWarnings("deprecation")
	public static  void panel_Article(JTabbedPane tabbedPane) {
		
			
			JPanel panel = new JPanel();
			panel.setBackground(SystemColor.info);
			tabbedPane.addTab("Article", null, panel, null);
			
			JToolBar toolBar = new JToolBar();
			toolBar.setBounds(0, 0, 942, 37);
			toolBar.setToolTipText("");
			toolBar.setRollover(true);
			toolBar.setBackground(Color.BLACK);
			
			JLabel lblFamille = new JLabel();
			lblFamille.setBackground(new Color(255, 255, 255));
			lblFamille.setBounds(24, 213, 121, 27);
			lblFamille.setForeground(new Color(0, 0, 0));
			lblFamille.setText("Famille        :");
			lblFamille.setFont(new Font("Bookman Old Style", Font.BOLD, 17));
			
			JLabel lblDessignation = new JLabel();
			lblDessignation.setBackground(new Color(255, 255, 255));
			lblDessignation.setBounds(24, 251, 121, 27);
			lblDessignation.setForeground(new Color(0, 0, 0));
			lblDessignation.setText("Qualit\u00E9        :");
			lblDessignation.setFont(new Font("Bookman Old Style", Font.BOLD, 17));
			
			JLabel lblArticle = new JLabel();
			lblArticle.setBackground(new Color(255, 255, 255));
			lblArticle.setBounds(24, 172, 121, 30);
			lblArticle.setForeground(new Color(0, 0, 0));
			lblArticle.setText("Article         :");
			lblArticle.setFont(new Font("Bookman Old Style", Font.BOLD, 17));
			
			JLabel lblReferanse = new JLabel();
			lblReferanse.setBackground(new Color(255, 255, 255));
			lblReferanse.setBounds(24, 289, 121, 27);
			lblReferanse.setForeground(new Color(0, 0, 0));
			lblReferanse.setText("R\u00E9ferance    :");
			lblReferanse.setFont(new Font("Bookman Old Style", Font.BOLD, 17));
			 comboBox_famille = new JComboBox<Object>();
			 comboBox_famille.setEnabled(false);
			 comboBox_famille.addKeyListener(new KeyAdapter() {
			 	@Override
			 	public void keyPressed(KeyEvent arg0) {
			 		btn_Sauvgarder.setEnabled(true);
					btn_Annuler .setEnabled(true);
					btn_Modifer.setEnabled(false);
			 	}
			 });
			 comboBox_famille.addMouseListener(new MouseAdapter() {
			 	@Override
			 	public void mouseClicked(MouseEvent arg0) {
			 		btn_Sauvgarder.setEnabled(true);
					btn_Annuler .setEnabled(true);
					btn_Modifer.setEnabled(false);
			 	}
			 });
			 comboBox_famille.setBounds(155, 210, 380, 27);
			comboBox_famille.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
				}
			});
			comboBox_famille.setFont(new Font("Tahoma", Font.BOLD, 14));
			comboBox_famille.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));

			textField_Dessignation_Article = new JTextField();
			textField_Dessignation_Article.setEditable(false);
			textField_Dessignation_Article.setBounds(155, 250, 380, 29);
			textField_Dessignation_Article.addKeyListener(new KeyAdapter() {
				@Override
				public void keyReleased(KeyEvent arg0) {
					btn_Sauvgarder.setEnabled(true);
					btn_Annuler .setEnabled(true);
					btn_Modifer.setEnabled(false);
					
				}
			});
			textField_Dessignation_Article.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_Referance_Article = new JTextField();
			textField_Referance_Article.setEditable(false);
			textField_Referance_Article.setBounds(155, 288, 380, 29);
			textField_Referance_Article.addKeyListener(new KeyAdapter() {
				@Override
				public void keyPressed(KeyEvent arg0) {
					btn_Sauvgarder.setEnabled(true);
					btn_Annuler .setEnabled(true);
					btn_Modifer.setEnabled(false);
				}
			});
			textField_Referance_Article.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			textField_Nom_Article = new JTextField();
			textField_Nom_Article.setEditable(false);
			textField_Nom_Article.addMouseMotionListener(new MouseMotionAdapter() {
				@Override
				public void mouseDragged(MouseEvent arg0) {
					System.err.println("addMouseMotionListener_mouseEntered_MouseEvent");

				}
				@Override
				public void mouseMoved(MouseEvent arg0) {
					System.err.println("mouseMoved_mouseEntered_MouseEvent");

				}
			});
			textField_Nom_Article.addMouseListener(new MouseAdapter() {
				@Override
				public void mouseEntered(MouseEvent arg0) {
					
				TextListener e = new TextListener() {
					
					@Override
					public void textValueChanged(TextEvent arg0) {
						// TODO Auto-generated method stub
						
					}
				};
				System.err.println(e.toString());
					System.err.println("mouseEntered_MouseEvent");
					
				}
				@Override
				public void mouseClicked(MouseEvent arg0) {
					System.err.println("mouseClicked_MouseEvent");
}
			});
			textField_Nom_Article.setBounds(155, 170, 380, 29);
			textField_Nom_Article.addKeyListener(new KeyAdapter() {
				@Override
				public void keyPressed(KeyEvent arg0) {   
					btn_Sauvgarder.setEnabled(true);
					btn_Annuler .setEnabled(true);
					btn_Modifer.setEnabled(false);

				}
			});
			textField_Nom_Article.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
				btn_Modifer.setEnabled(false);
					
					}
			});
			textField_Nom_Article.setFont(new Font("Tahoma", Font.BOLD, 14));
			
			JButton btn_Supprimer = new JButton();
			btn_Supprimer.setBounds(652, 229, 174, 29);
			btn_Supprimer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_delete.png"));
			btn_Supprimer.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					
					delet.SUPPR_Articl(textField_Id_Article.getText());	
				}
			});
			btn_Supprimer.setText("Supprimer");
			btn_Supprimer.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			
			JLabel lblNewLabel = new JLabel("ID_Article    :");
			lblNewLabel.setBackground(new Color(255, 255, 255));
			lblNewLabel.setBounds(24, 123, 121, 29);
			lblNewLabel.setForeground(new Color(0, 0, 0));
			lblNewLabel.setFont(new Font("Bookman Old Style", Font.BOLD, 17));
			lblNewLabel.setToolTipText("");
			
			 btn_Sauvgarder = new JButton();
			 btn_Sauvgarder.setBounds(652, 269, 174, 29);
			 btn_Sauvgarder.setEnabled(false);
			btn_Sauvgarder.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
			
			
			
			
			btn_Sauvgarder.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) { 
					
					
					if (Nouv==false && btn_Modifer.isEnabled()==false) {
						
						try {
							int a =Integer.parseInt(textField_Id_Article.getText().toString());
	//int b =Integer.parseInt(textField_2.getText());
	UPDATE.UPDATE_Article(a,textField_Nom_Article.getText() ,comboBox_famille.getSelectedItem().toString(), textField_Dessignation_Article.getText(), textField_Referance_Article.getText());
	JOptionPane.showMessageDialog(null, "OPIRATION VALEDE !! \n l' article a  modifer ","Message ",JOptionPane.DEFAULT_OPTION);

						} catch (Exception e1) {
							// TODO Auto-generated catch block
							JOptionPane.showMessageDialog(null, e1.getMessage(),"Message of  NumberFormatException",2);
						}
					}
					
					//""""""""""""""""""""""""""""""""##########################        // TODO add your handling code here:
			        
					else{
			
					
			        try {
			        	
						Ajout.insertArticle(textField_Nom_Article.getText().trim(), comboBox_famille.getSelectedItem().toString().trim(), textField_Dessignation_Article.getText().trim(), textField_Referance_Article.getText().trim());
						JOptionPane.showMessageDialog(null, "OPIRATION VALIDI !!");
			        	
					}
					catch (Exception e1) {
						// TODO Auto-generated catch block
						JOptionPane.showMessageDialog(null, e1.toString());

					}
			      

			    	
			    	
					}
			    	
			    btn_Modifer.setEnabled(true);	
			    btn_Annuler.setEnabled(false);
			    btn_Sauvgarder.setEnabled(false);
				Nouv=false;
				Refrechejtable_aricle();
				}
			});
			btn_Sauvgarder.setText("Enregistrer");
			btn_Sauvgarder.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			 btnNext = new JButton("Suivant");
			 btnNext.setBounds(387, 56, 121, 31);
			btnNext.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnNext.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie.png"));
			btnNext.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent e) {
					
		
					next_Article();
					}
				
				
				public int next_Articl() {
					int b = 0;
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){


C.last();
b=C.getRow();

						return b;


					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);

					}
					System.out.println(b);
					return b;

				}
				public void next_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){

						if (C.absolute(a)&& (a>0)) {
							
							String s=(C.getString("ID_article")).toString();
							textField_Id_Article.setText(s);
							textField_Nom_Article.setText(C.getString(2));
							int cat=  Integer.parseInt(C.getString("ID_categoure"));
							//System.out.println(cat);
							comboBox_famille.setSelectedIndex(cat-1);
							textField_Dessignation_Article.setText(C.getString(4));
							textField_Referance_Article.setText(C.getString(5));
						} 
					if (a<next_Articl()) {
						btnFerst.setEnabled(true);
						btnPrecident.setEnabled(true);
						a++;

						}else{
							
							btnFerst.setEnabled(true);
							btnPrecident.setEnabled(true);
							btnLast.setEnabled(false);
							btnNext.setEnabled(false);
						}

					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);

					}
				}
			});
			
			 btnPrecident = new JButton("pr\u00E9c\u00E9dent");
			 btnPrecident.setBounds(250, 56, 131, 31);
			btnPrecident.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnPrecident.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie (2).png"));
			btnPrecident.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					
					
					next_Article();
					
				}
			/*	public void next_Arti() {
					


						if (rs.absolute(a)) {
							String s=(C.getString("ID_article")).toString();
							textField_2.setText(s);
							textField_3.setText(C.getString(2));
							comboBox.setSelectedItem("ID_article");
							textField.setText(C.getString(4));
							textField_1.setText(C.getString(5));
							
						}
						
					}*/
				public void next_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){


						if (C.absolute(a)) {
							String s=(C.getString("ID_article")).toString();
							textField_Id_Article.setText(s);
							textField_Nom_Article.setText(C.getString(2));
							int cat=  Integer.parseInt(C.getString("ID_categoure"));
							//System.out.println(cat);
							comboBox_famille.setSelectedIndex(cat-1);
							textField_Dessignation_Article.setText(C.getString(4));
							textField_Referance_Article.setText(C.getString(5));
							
						}
						
						if(a>1){
						
							btnLast.setEnabled(true);
							btnNext.setEnabled(true);
							a--;
						}else{
							
							btnLast.setEnabled(true);
							btnNext.setEnabled(true);
							btnFerst.setEnabled(false);
							btnPrecident.setEnabled(false);
							
						}

					} catch (SQLException e) {
						JOptionPane.showMessageDialog(null, e);
					}
		
				
				}});
			
			 btnLast = new JButton("Dernier");
			 btnLast.setBounds(518, 56, 121, 31);
			btnLast.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnLast.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\2rightarrow_m.png"));
			
			/*
			 * 
			 *       Button de last_Article
			 * 
			 * */
			btnLast.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					btnFerst.setEnabled(true);
					btnPrecident.setEnabled(true);
					btnNext.setEnabled(false);
					btnLast.setEnabled(false);
					last_Article();
				
				}
				
				public void last_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){
		
	
		

		C.last();
		a=C.getRow();	
		String s=(C.getString("ID_article")).toString();
		textField_Id_Article.setText(s);
		textField_Nom_Article.setText(C.getString(2));
		int cat=  Integer.parseInt(C.getString("ID_categoure"));
		//System.out.println(cat);
		comboBox_famille.setSelectedIndex(cat-1);
		textField_Dessignation_Article.setText(C.getString(4));
		textField_Referance_Article.setText(C.getString(5));
		

				

					
						} catch (SQLException e) {
												JOptionPane.showMessageDialog(null, e);
					
						}
		
				
				}});
			
			 btnFerst = new JButton("Premier");
			 btnFerst.setBounds(119, 56, 121, 31);
			btnFerst.setFont(new Font("High Tower Text", Font.BOLD, 14));
			btnFerst.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\2rightarrow_m - Copie.png"));
			btnFerst.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					btnNext.setEnabled(true);
					btnLast.setEnabled(true);
					btnFerst.setEnabled(false);
					btnPrecident.setEnabled(false);
					next_Article();
					
				}
				
				public void next_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){

		
         
		C.first();
		a=1;	
		String s=(C.getString("ID_article")).toString();
		textField_Id_Article.setText(s);
		textField_Nom_Article.setText(C.getString(2));
		int cat=  Integer.parseInt(C.getString("ID_categoure"));
		//System.out.println(cat);
		comboBox_famille.setSelectedIndex(cat-1);
		//textField_3.setText( C.getString("ID_categoure"));
		textField_Dessignation_Article.setText(C.getString(4));
		textField_Referance_Article.setText(C.getString(5));
		
	
				

					
						} catch (SQLException e) {
												JOptionPane.showMessageDialog(null, e);
					
						}
				}});
			
			textField_Id_Article = new JTextField();
			textField_Id_Article.setEditable(false);
			textField_Id_Article.setBounds(155, 123, 160, 28);
			textField_Id_Article.setForeground(Color.BLACK);
			textField_Id_Article.setFont(new Font("Tahoma", Font.BOLD, 14));
			textField_Id_Article.setColumns(10);
			
			 btn_Modifer = new JButton("Modifer");
			 btn_Modifer.setBackground(Color.WHITE);
			 btn_Modifer.setBounds(652, 186, 174, 29);
			 btn_Modifer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_edit.png"));
			btn_Modifer.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			btn_Modifer.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
			
					try {
						read_db.read_Artecle(textField_Nom_Article.getText().toString().trim(), comboBox_famille.getSelectedItem().toString().trim(), textField_Dessignation_Article.getText().toString().trim(), textField_Referance_Article.getText().toString().trim());
					} catch (IOException e) {
						// TODO Auto-generated catch block
						
						JOptionPane.showMessageDialog(null, e.toString());
					}
					
					
					btn_Sauvgarder.setEnabled(true);
					btn_Annuler.setEnabled(true);
					btn_Modifer.setEnabled(false);
				}
			});
			
			JButton btn_Nouveau = new JButton("Nouveau");
			btn_Nouveau.setBounds(652, 138, 174, 29);
			btn_Nouveau.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
			btn_Nouveau.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			btn_Nouveau.setForeground(Color.BLACK);
			btn_Nouveau.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					Nouv=true;
					btn_Modifer.setEnabled(true);
					btn_Sauvgarder.setEnabled(true);
					btn_Annuler.setEnabled(true);
					
					
					textField_Nom_Article.setEditable(true);
					comboBox_famille.setEnabled(true);
					textField_Dessignation_Article.setEditable(true);
					textField_Referance_Article.setEditable(true);
					New_Article();
					
				
				}
				public void New_Article() {
					try ( Connection conn= conndb1.connection();
							Statement stat=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
							ResultSet 	C=  stat.executeQuery("SELECT `ID_article`, `nom_article`, `ID_categoure`, `dessignation`, `Referance` FROM `article` ");
							){

		

						C.last();
						//a=C.getRow()+1;
						a=C.getInt("ID_article")+1;
						String s=a.toString();
						textField_Id_Article.setText(s);
						textField_Nom_Article.setText("");
						comboBox_famille.setSelectedItem("");
						textField_Dessignation_Article.setText("");
						textField_Referance_Article.setText("");
		
	
				

					
						} catch (SQLException e) {
												JOptionPane.showMessageDialog(null, e);
					
						}
				}
			});
			panel.setLayout(null);
			
			JLabel lblArticl = new JLabel("                                                            ARTICLE");
			lblArticl.setForeground(Color.ORANGE);
			lblArticl.setFont(new Font("Tahoma", Font.BOLD, 21));
			toolBar.add(lblArticl);
			panel.add(toolBar);
			panel.add(lblNewLabel);
			panel.add(lblFamille);
			panel.add(lblDessignation);
			panel.add(lblArticle);
			panel.add(lblReferanse);
			panel.add(textField_Nom_Article);
			panel.add(comboBox_famille);
			panel.add(textField_Dessignation_Article);
			panel.add(textField_Referance_Article);
			panel.add(textField_Id_Article);
		//	panel.add(btnFerst);
			//panel.add(btnNext);
			// panel.add(btnPrecident);
		//	panel.add(btnLast);
			panel.add(btn_Nouveau);
			panel.add(btn_Modifer);
			panel.add(btn_Supprimer);
			panel.add(btn_Sauvgarder);
			
			btn_Annuler = new JButton("Annuler");
			btn_Annuler.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					btn_Sauvgarder.setEnabled(false);
					btn_Modifer.setEnabled(true);
					btn_Annuler.setEnabled(false);
					Nouv=false;
					Refrechejtable_aricle();
				}
			});
			btn_Annuler.setEnabled(false);
			btn_Annuler.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			btn_Annuler.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
			btn_Annuler.setBounds(652, 312, 174, 29);
			panel.add(btn_Annuler);
			
			JButton btnNewButton = new JButton("");
			btnNewButton.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					new Catégorie().setVisible(true);
				}
			});
			btnNewButton.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
			btnNewButton.setBounds(545, 210, 33, 26);
			panel.add(btnNewButton);
			
			scrollPane = new JScrollPane();
			scrollPane.setBounds(24, 364, 762, 241);
			panel.add(scrollPane);
			
			table = new JTable();
			table.addMouseListener(new MouseAdapter() {
				@Override
				public void mouseClicked(MouseEvent arg0) {
					get_data_inTexteField();

				}
			});
			table.addKeyListener(new KeyAdapter() {
				@Override
				public void keyPressed(KeyEvent arg0) {
					get_data_inTexteField();
				}
				@Override
				public void keyReleased(KeyEvent arg0) {
					get_data_inTexteField();

				}
			});
			scrollPane.setViewportView(table);
			
			JButton btnNewButton_1 = new JButton("Impression");
			btnNewButton_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\table.png"));
			btnNewButton_1.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					Catégorie.imprission(table, "La liste d' article");
				}
			});
			btnNewButton_1.setBounds(138, 327, 128, 29);
			panel.add(btnNewButton_1);
			lblNewLabel_1 = new JLabel("");
			lblNewLabel_1.setBounds(0, 36, 970, 675);
			lblNewLabel_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\want38496-1AqTAy1461999771.jpg"));
			lblNewLabel_1.setFont(new Font("Segoe UI Emoji", Font.BOLD, 12));
			lblNewLabel_1.setToolTipText("");
			panel.add(lblNewLabel_1);
			Refrechejtable_aricle();
	}	
	private static void Refrechejtable_aricle(){
		
	try (Connection conn=conndb1.connection();
			PreparedStatement prst= conn.prepareStatement("SELECT `ID_article`, `nom_article`,`nome_categoure` AS Catégorie , `dessignation`, `Referance`"
					+ " FROM `article` AS  a ,`categoure` AS c WHERE a.`ID_categoure`=c.`ID_categoure` "
					+ " ORDER BY a.`ID_article` ASC "
					);
			
			ResultSet rs = prst.executeQuery(); 
			){
			
		table.setModel(DbUtils.resultSetToTableModel(rs));
		
		
	} catch (Exception e) {
		// TODO: handle exception
		
		JOptionPane.showMessageDialog(null, e.getMessage());
	}	
	}
	
	  public static void get_data_inTexteField(){
		  

			int row = Articl.table.getSelectedRow();
	 		String id_categorie =Articl.table.getModel().getValueAt(row,0).toString();
			 try(   	Connection conn=conndb1.connection();
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_article`, `nom_article`,`nome_categoure` , `dessignation`, `Referance`"
								+ " FROM `article` AS  a ,`categoure` AS c "
								+ "WHERE a.`ID_categoure`  =c.`ID_categoure` AND "
								+ " a.`ID_article` ='"+id_categorie+"'"
										);
						//SELECT * FROM `article` ORDER BY `article`.`ID_article` ASC 
					 ResultSet rs = stt.executeQuery();
						) { 
				 
			while (rs.next()) {
				
				textField_Id_Article.setText(rs.getString(1));
				textField_Nom_Article.setText(rs.getString(2));
				comboBox_famille.setSelectedItem(rs.getString(3).toString());
				textField_Dessignation_Article.setText(rs.getString(4));
				textField_Referance_Article.setText(rs.getString(5));
				
			}
		

			 }
			 catch (Exception e) {
				// TODO: handle exception
				 System.err.println(e.getMessage());
			}
		
		  //	  textField_Id_Article.setText(table.getModel().getValueAt(arg0, arg1));
      	
				textField_Nom_Article.setEditable(true);
				comboBox_famille.setEnabled(true);
				textField_Dessignation_Article.setEditable(true);
				textField_Referance_Article.setEditable(true);
      }
}
