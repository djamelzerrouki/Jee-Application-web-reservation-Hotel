package project;
import java.awt.BorderLayout;
import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.MessageFormat;
import java.util.Set;
import java.util.TreeMap;
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
import javax.swing.JToolBar;

import jxl.write.WriteException;
import jxl.write.biff.RowsExceededException;
import net.proteanit.sql.DbUtils;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import pluse.Music;
import fonction.Export;
import fonction.UPDATE;
import fonction.combo_boxtable;
import fonction.conndb1;


public class Catégorie extends JDialog {

//	private static JFrame frame;
	private JTextField textField_nom_categori;
	private JTextField textField_Désignation;
	
	private static boolean Nouv=false;

	private static  ResultSet rs_Refrech ;
	
	protected static 	JDialog dialog0;
 
	private static JButton btn_Sauvgarder;
	private static JButton btn_Nouveau;
	private static JButton dernier;
	private static JButton btn_Modifier;
	private static JButton btn_Supprimer;
	private static JButton btn_Annuler;
	
	private static JButton Premier;
	private JTable table;
	private JComboBox<Object> comboBoxSrche;
	private JScrollPane scrollPane;
	private JTextField textField_ID_categori;
	private JTextField textFieldSerche;
	
	
	private XSSFWorkbook wb;
	private XSSFSheet ws;
	private JToolBar toolBar;
	
	

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					 dialog0 = new Catégorie();
						dialog0.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
						dialog0.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
		Music.music01();
		}

	/**
	 * Create the application.
	 */
	public Catégorie() {
		initialize();
		// Refrech_Jtable();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		setResizable(false);
		setBounds(100, 100, 787, 651);
		setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
		getContentPane().setLayout(new BorderLayout(0, 0));
		
		JPanel panel = new JPanel();
		panel.setBackground(Color.WHITE);
		getContentPane().add(panel);
		panel.setLayout(null);
		 
		 JLabel lblNewLabel_3 = new JLabel("Code");
		 lblNewLabel_3.setForeground(Color.ORANGE);
		 lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD, 14));
		 lblNewLabel_3.setBounds(72, 63, 96, 20);
		 panel.add(lblNewLabel_3);
		 
		 scrollPane = new JScrollPane();
		 scrollPane.setBounds(24, 302, 589, 219);
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
		 btn_Supprimer.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		getdat_To_JtaxtFilde();
		 		
int confermation = JOptionPane.showConfirmDialog(null, "vous les vous Supprimer ? ", "Supprimer ", JOptionPane.YES_NO_OPTION);
			
				 if (confermation==0) {
					try (Connection conn = conndb1.connection();
							PreparedStatement stt = conn.prepareStatement("DELETE FROM `categoure` WHERE `ID_categoure`=?");

					) {

						stt.setString(1, textField_ID_categori.getText());

						 stt.execute();

					} catch (Exception e) {
						// TODO: handle exception
						System.err.println(e.getMessage());
					}
				}
			

				 Refrech_Jtable();
		 	}
		 });
		 btn_Supprimer.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_delete.png"));
		 btn_Supprimer.setBounds(623, 357, 136, 28);
		 panel.add(btn_Supprimer);
		 
		  btn_Modifier = new JButton("Modifier");
		 btn_Modifier.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_edit.png"));
		 btn_Modifier.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		btn_Annuler.setEnabled(true);
		 		btn_Sauvgarder.setEnabled(true);
		 		btn_Modifier.setEnabled(false);
		 	}
		 });
		 btn_Modifier.setBounds(623, 397, 136, 28);
		 panel.add(btn_Modifier);
		
		
		 btn_Sauvgarder = new JButton("Sauvgarder");
		 btn_Sauvgarder.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
		btn_Sauvgarder.setEnabled(false);
		
		btn_Sauvgarder.setBounds(623, 436, 136, 28);
		panel.add(btn_Sauvgarder);
		/*###########################################################""*/
		
		
	
		
		
		/*###########################################################""*/
		 Premier = new JButton("Export");
		Premier.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\export.png"));
		Premier.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				try {
					Export.WriteToExcel(table, "Categorie");
				} catch (WriteException | IOException e) {
					// TODO Auto-generated catch block
					
					JOptionPane.showMessageDialog(null, e.getMessage());
				}
				
				
		/*		
			try {
				table.setColumnSelectionInterval(3, 1);
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}			
				//Refrech_Jtable();
			}*/
				}
		});
		Premier.setBounds(24, 262, 121, 34);
		panel.add(Premier);
		
		 dernier = new JButton("Impression");
		 
		 
		 dernier.addActionListener(new ActionListener() {

			 
			 public void actionPerformed(ActionEvent arg0) {
		 					//	footer = new MessageFormat("page{0.number,integer}");
		 	
				 imprission(table," La liste de catégorie :");
		 		
		 		
		 		
		 	}
		 });
		dernier.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\table.png"));
		dernier.setBounds(155, 262, 130, 34);
		panel.add(dernier);
		
		 btn_Nouveau = new JButton("Nouveau ");
		btn_Nouveau.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
	
		btn_Nouveau.setBounds(623, 321, 136, 28);
		panel.add(btn_Nouveau);
		

		
		JLabel lblNewLabel = new JLabel("Categorie");
		lblNewLabel.setForeground(Color.ORANGE);
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel.setBounds(72, 107, 96, 20);
		panel.add(lblNewLabel);
		
		textField_nom_categori = new JTextField();
		textField_nom_categori.addKeyListener(new KeyAdapter() {
			@Override
			public void keyPressed(KeyEvent arg0) {
				btn_Modifier.setEnabled(false);
				btn_Sauvgarder.setEnabled(true);
				btn_Annuler.setEnabled(true);
				
				
			}
		});
		textField_nom_categori.setBounds(177, 107, 435, 20);
		panel.add(textField_nom_categori);
		textField_nom_categori.setColumns(10);
		
		JLabel lblNewLabel_Désignation = new JLabel("D\u00E9signation ");
		lblNewLabel_Désignation.setForeground(Color.ORANGE);
		lblNewLabel_Désignation.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblNewLabel_Désignation.setBounds(72, 153, 96, 20);
		panel.add(lblNewLabel_Désignation);
		
		textField_Désignation = new JTextField();
		textField_Désignation.addKeyListener(new KeyAdapter() {
			@Override
			public void keyPressed(KeyEvent arg0) {
				btn_Modifier.setEnabled(false);
				btn_Sauvgarder.setEnabled(true);
				btn_Annuler.setEnabled(true);
			}
		});
		textField_Désignation.setBounds(178, 153, 435, 20);
		panel.add(textField_Désignation);
		textField_Désignation.setColumns(10);
		
		textField_ID_categori = new JTextField();
		textField_ID_categori.setEnabled(false);
		textField_ID_categori.setBounds(178, 63, 194, 20);
		panel.add(textField_ID_categori);
		textField_ID_categori.setColumns(10);
		
		 comboBoxSrche = new JComboBox<Object>();
		comboBoxSrche.setModel(new DefaultComboBoxModel<Object>(new String[] {"ID_categoure", "nom_categoure", "designation_categorie"}));
		comboBoxSrche.setBounds(450, 206, 210, 30);
		panel.add(comboBoxSrche);
		
		textFieldSerche = new JTextField();
		textFieldSerche.addKeyListener(new KeyAdapter() {
			@Override
			public void keyReleased(KeyEvent e) {
				
				

		 		
		 		String selectedSarch =(String) comboBoxSrche.getSelectedItem();
		 		
		 	ResultSet rs=null;
		 		try(   	Connection conn=conndb1.connection();
		 				//PreparedStatement stt=conn.prepareStatement("SELECT * FROM `categoure` WHERE "+selectedSarch+" LIKE ? ");
		 				//PreparedStatement stt=conn.prepareStatement("SELECT * FROM `categoure` WHERE "+selectedSarch+" LIKE ? ");
		 			
		 				) { 
		 			PreparedStatement stt = null;
		 			String val=null;
		 			switch (selectedSarch) {
		 		
		 			case "ID_categoure":
		 		
			 		

		 				break;
		 			case "nom_categoure": 
		 				selectedSarch="nome_categoure";
		 			break;
		 			case "designation_categorie":
		 				break;

		 			}
		 			 stt=conn.prepareStatement("SELECT * FROM `categoure` WHERE "+selectedSarch+" LIKE ? ");
		 		
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
		textFieldSerche.setBounds(448, 246, 212, 28);
		panel.add(textFieldSerche);
		textFieldSerche.setColumns(10);
		
		 btn_Annuler = new JButton("Annuler");
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
		btn_Annuler.setBounds(623, 475, 136, 28);
		panel.add(btn_Annuler);
		
		JLabel lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\images (4).jpg"));
		lblNewLabel_1.setBounds(368, 192, 103, 100);
		panel.add(lblNewLabel_1);
		
		toolBar = new JToolBar();
		toolBar.setBackground(Color.BLACK);
		toolBar.setBounds(0, 0, 781, 34);
		panel.add(toolBar);
		
		JLabel lblNewLabel_4 = new JLabel("                                            Cat\u00E9gorie");
		lblNewLabel_4.setFont(new Font("Tahoma", Font.BOLD, 24));
		lblNewLabel_4.setForeground(Color.ORANGE);
		toolBar.add(lblNewLabel_4);
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setFont(new Font("Dialog", Font.BOLD, 13));
		lblNewLabel_2.setBounds(0, 36, 781, 588);
		lblNewLabel_2.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\4975929-immobilier-pr-sentation-professionnelle-entreprise-arri-re-plan-Banque-d'images.jpg"));
		panel.add(lblNewLabel_2);
	
		btn_Sauvgarder.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				if (Nouv==false && btn_Modifier.isEnabled()==false) {
				UPDATE.UPDATE_Categore(textField_ID_categori.getText().trim(), textField_nom_categori.getText(), textField_Désignation.getText());
					
					
				
			}
				else{
				add_categorie();
				}
				
				btn_Modifier.setEnabled(true);
				btn_Sauvgarder.setEnabled(false);
				btn_Annuler.setEnabled(false);
				Nouv=false;
				
				Articl.comboBox_famille.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));
                fornesser.comboBox.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));
Sortie.comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));
Journal.comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>( combo_boxtable.combx_Categoure().toArray()));

			Refrech_Jtable();
			
			}
			public void add_categorie (){
				try( Connection conn= conndb1.connection();
						 
					 
						 Statement stt=conn.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
						
						) {
					 if (!textField_nom_categori.getText().trim().equals("") ){ 
						 if (textField_Désignation.getText().trim()!="") {
					 
						stt.executeUpdate("INSERT INTO"
								+ " `categoure`( `nome_categoure`, `designation_categorie`)"
								+ " VALUES ('" + textField_nom_categori.getText() + "','"
								+ textField_Désignation.getText() + "')");
						JOptionPane.showMessageDialog(null,"Vous avez ajouter une nouvelle categorie ! ");
						 }else {
							 JOptionPane.showMessageDialog(null, " ajoute une categorie ", "", 3);
						}
						 }
						 
					 else {
						 JOptionPane.showMessageDialog(null, " ajoute une designation ", "", 3);
					 }	 
				} catch (Exception e) {
					// TODO Auto-generated catch block
					// JOptionPane.showMessageDialog(null, e.getMessage());

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
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_categoure`, `nome_categoure`, `designation_categorie` FROM `categoure`");
						
						
ResultSet rs=stt.executeQuery();
						){
				rs.last();
					Integer newcategoure =rs.getInt("ID_categoure")+1;
					textField_ID_categori.setText(newcategoure.toString());
					textField_nom_categori.setText("");
					textField_Désignation.setText("");
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
					PreparedStatement stt=conn.prepareStatement("SELECT `ID_categoure` AS Code , `nome_categoure` AS Catégorie, `designation_categorie` AS Designation FROM `categoure`");
					
					

					) { 
			 
			  rs_Refrech = stt.executeQuery();

		table.setModel(DbUtils.resultSetToTableModel(rs_Refrech));
	
		 System.err.println("JTable Refrech   !");

		 }
		 catch (Exception e) {
			// TODO: handle exception
		

			 JOptionPane.showMessageDialog(null, e.getMessage());
		}

	}
	
	
	
	public void getdat_To_JtaxtFilde() {
		int row = table.getSelectedRow();
 		String id_categorie =table.getModel().getValueAt(row,0).toString();
		 try(   	Connection conn=conndb1.connection();
					PreparedStatement stt=conn.prepareStatement("SELECT `ID_categoure` AS Code, `nome_categoure` AS Catégorie, `designation_categorie`  As Designation FROM `categoure`  "
							+ "WHERE `ID_categoure`= '"+id_categorie+"'");
					
				 ResultSet rs = stt.executeQuery();
					) { 
			 
		while (rs.next()) {
			textField_ID_categori.setText(rs.getString(1));
			textField_nom_categori.setText(rs.getString(2));
			textField_Désignation.setText(rs.getString(3));
			
		}
	//table.setModel(DbUtils.resultSetToTableModel(rs));
	

		 }
		 catch (Exception e) {
			// TODO: handle exception
			 System.err.println(e.getMessage());
		}
	}
	
	
	
	private String getdataVal(int x,int y){
		return table.getModel().getValueAt(x, y).toString();

	}
	
	

	/**
	 * @param tab
	 * @throws IOException
	 * @throws RowsExceededException
	 * @throws WriteException
	 */
	/**
	 * @param tab
	 * @throws IOException
	 * @throws RowsExceededException
	 * @throws WriteException
	 */
	private void WriteToExcel( JTable tab) throws IOException, RowsExceededException, WriteException{
	System.out.println(table.getModel().getRowCount());
			try {
				
				wb = new XSSFWorkbook();
			
				//c.toXSSFColor((org.apache.poi.ss.usermodel.Color) Color.ORANGE);
				ws = wb.createSheet();
				//XSSFColor c=new XSSFColor(Color.blue);
			} catch (org.apache.poi.hdgf.exceptions.HDGFException e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
				System.out.println(e1.getMessage());
			}
			
			
			//LODE DATA 
			
			TreeMap<String, Object[]> data = new TreeMap<String, Object[]>();

			
		//data.put("0", new Object[]{""," la liste de categore "});

		data.put("0", new Object[]{tab.getModel().getColumnName(0),tab.getModel().getColumnName(1),tab.getModel().getColumnName(2)});
			

			int i=0;	
		//	int i0=1;	

			while (i<tab.getModel().getRowCount()) {
				
			
					data.put(""+i+1+"", new Object[]{getdataVal(i, 0),getdataVal(i, 1),getdataVal(i, 2)});
					i++;
					
}
			MessageFormat ms=new MessageFormat("la seniateure ",getLocale()) ;
			
			
			data.put(""+(i+1)+"", new Object[]{"","","","","",ms});

	
			FileOutputStream fes = null;
					Set<String> ids=data.keySet();
					XSSFRow row;
					
					int rowid=0;
					for (String key : ids) {
						row=ws.createRow(rowid++);
					
						
						
                        Object[] valoes=data.get(key);
						int cellid=0;

						for (Object o : valoes) {
							Cell cell =row.createCell(cellid++);
							cell.setCellValue(o.toString())		;
						}
				
						
				try {
					
					 fes=new FileOutputStream(new File("E:/file_excel.xlsx"));
					 

				wb.write(fes);
				
	
				fes.close();
				
			
				} catch (Exception e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				} 
				
			}		
				
					Runtime.getRuntime().exec("C:\\Program Files\\Microsoft Office\\Office12\\EXCEL.exe  E:/file_excel.xlsx  ");
					
	}				
					

	public  static void imprission(JTable table,String Sheader ){
		//System.out.println(1==2);
 		
			MessageFormat header = null;
		MessageFormat footer = null;
		try {

			header = new MessageFormat(Sheader);
			footer = new MessageFormat("page");
					//footer = new MessageFormat("page{0.number,integer}");


			//table.print(JTable.PrintMode.FIT_WIDTH, header, footer);	
    
			table.print(JTable.PrintMode.FIT_WIDTH, header, footer);	
			
		}
		catch (java.awt.print.PrinterException e) {
			// TODO: handle exception
			
			System.err.format("Err d' imremation", e.getMessage());
		//	System.out.println(e.getMessage());

			
 	}}
}



