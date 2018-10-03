package project;

import java.awt.Color;
import java.awt.Component;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.io.IOException;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Calendar;
import java.util.HashMap;
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
import javax.swing.UIManager;
import javax.swing.border.TitledBorder;

import net.proteanit.sql.DbUtils;

import org.apache.xmlbeans.impl.xb.xsdschema.Public;
import org.eclipse.wb.swing.FocusTraversalOnArray;
import org.jdatepicker.impl.JDatePanelImpl;
import org.jdatepicker.impl.JDatePickerImpl;
import org.jdatepicker.impl.UtilDateModel;
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartFrame;
import org.jfree.chart.ChartPanel;
import org.jfree.chart.JFreeChart;
import org.jfree.chart.axis.NumberAxis;
import org.jfree.chart.axis.ValueAxis;
import org.jfree.chart.plot.CategoryPlot;
import org.jfree.chart.plot.PlotOrientation;
import org.jfree.chart.plot.XYPlot;
import org.jfree.chart.renderer.xy.XYSplineRenderer;
import org.jfree.data.category.DefaultCategoryDataset;
import org.jfree.data.general.DefaultPieDataset;
import org.jfree.data.xy.XYSeries;
import org.jfree.data.xy.XYSeriesCollection;

import pluse.statistique;
import fonction.Export;
import fonction.combo_boxtable;
import fonction.conndb1;

import javax.swing.JCheckBox;
import javax.swing.border.BevelBorder;
import javax.swing.JToolBar;
import javax.swing.SwingConstants;

import jxl.write.WriteException;



public class Journal {

	 private static JFrame frame;
	public static   JTable table_Journal;
	private static JTextField textField_Référence;
	private static JTextField textField_Designation;
	private static JButton btn_annuler_Rech_Date;
	private static JComboBox<Object> comboBox_Type;
	public static JComboBox<Object> comboBox_Service;
	public static JComboBox<Object> comboBox_Fournisseur;
	public static JComboBox<Object> comboBox_Catégorie;
	private static JComboBox<Object> comboBox_Article;
	private static 		  JCheckBox chckbxPe;
	
	
	
	
	
	
	public static 	JDatePickerImpl  datepicker1;
	public static 	JDatePickerImpl  datepicker0;
	public static 	UtilDateModel  model0;
	public static 	UtilDateModel  model1;

	public static 	JDatePanelImpl datepanel0;
	public static 	JDatePanelImpl datepanel1;
	private static JLabel label_1;
	private static JToolBar toolBar;
	private static JLabel lblJournal;
	private static JTextField textField_Prix_Totale;
	private static JLabel label_2;


	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Journal window = new Journal();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});


		//combo_boxtable.tableaffich1();
	}
	/**
	 * Create the application.
	 */
	public Journal() {

		JTabbedPane tabbedPane=null;
		panel_Journal(tabbedPane);
	}
	/**
	 * Initialize the contents of the frame.
	 */
	
	
	
	public static  void panel_Journal(JTabbedPane tabbedPane) {

		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 833, 662);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		//frame.getContentPane().setLayout(null);

		//String s = "<table border="+3+" width="+300+" height="+75+"><tr><td width="+50+"%>Ed</td><td width="+50+"%>Tom</td></tr></table>";

	
		//last_BDE();
		JPanel panel = new JPanel();
		panel.setBackground(Color.WHITE);
		tabbedPane.addTab("Journal", null, panel, null);
		panel.setBackground(Color.WHITE);
		panel.setBounds(0, 0, 944, 700); 
		//		frame.getContentPane().add(panel);

		
		//frame.getContentPane().add(panel);
		  panel.setLayout(null);
		  
		  JScrollPane scrollPane_1 = new JScrollPane();
		  scrollPane_1.setBounds(10, 236, 924, 442);
		  panel.add(scrollPane_1);
		  
		  
		  
		   table_Journal =new JTable();
		   table_Journal.setCellSelectionEnabled(true);
		   table_Journal.setColumnSelectionAllowed(true);
		  scrollPane_1.setViewportView(table_Journal);
		  
		  JPanel panel_1 = new JPanel();
		  panel_1.setBackground(Color.WHITE);
		  panel_1.setBorder(new TitledBorder(UIManager.getBorder("TitledBorder.border"), "Filter", TitledBorder.LEADING, TitledBorder.TOP, null, new Color(0, 0, 0)));
		  panel_1.setBounds(10, 43, 924, 149);
		  panel.add(panel_1);
		  panel_1.setLayout(null);
		  
		  JLabel lblNewLabel = new JLabel("Type");
		  lblNewLabel.setForeground(Color.BLACK);
		  lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblNewLabel.setBounds(10, 23, 128, 22);
		  panel_1.add(lblNewLabel);
		  
		  JLabel lblRfrance = new JLabel("R\u00E9f\u00E9rence");
		  lblRfrance.setForeground(Color.BLACK);
		  lblRfrance.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblRfrance.setBounds(203, 24, 128, 22);
		  panel_1.add(lblRfrance);
		  
		  JLabel lblDistenation = new JLabel("Qualit\u00E9        ");
		  lblDistenation.setForeground(Color.BLACK);
		  lblDistenation.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblDistenation.setBounds(402, 23, 128, 22);
		  panel_1.add(lblDistenation);
		  
		  JLabel lblCategorie = new JLabel("Cat\u00E9gorie");
		  lblCategorie.setForeground(Color.BLACK);
		  lblCategorie.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblCategorie.setBounds(577, 83, 128, 22);
		  panel_1.add(lblCategorie);
		  
		  JLabel lblService = new JLabel("Service");
		  lblService.setForeground(Color.YELLOW);
		  lblService.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblService.setBounds(10, 76, 128, 22);
		  panel_1.add(lblService);
		  
		  JLabel lblFournissur = new JLabel("Fournisseur");
		  lblFournissur.setForeground(new Color(0, 0, 204));
		  lblFournissur.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblFournissur.setBounds(203, 76, 128, 22);
		  panel_1.add(lblFournissur);
		  
		  
		  
		  

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
		  
		  
		  
		  
		  datepicker1 =new JDatePickerImpl(datepanel1,null);
		  datepicker1.setBorder(new BevelBorder(BevelBorder.LOWERED, Color.DARK_GRAY, Color.BLACK, Color.GRAY, Color.LIGHT_GRAY));
		  datepicker1.setShowYearButtons(true);
			datepicker1.setBounds(734, 96, 131, 30);
			panel_1.add(datepicker1);
			datepicker1.setVisible(false);
			datepicker1.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker1.getJFormattedTextField()}));


			datepicker1.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {

					datepicker1.toString();
					get_Date_Withe_Switch(model1, datepicker1);

					//             String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();

					Jtabl_Journal();


				}

			});


			//SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
			datepicker0 =new JDatePickerImpl(datepanel0,null);
			datepicker0.setBorder(new BevelBorder(BevelBorder.LOWERED, Color.DARK_GRAY, Color.BLACK, Color.GRAY, Color.LIGHT_GRAY));
			datepicker0.setShowYearButtons(true);
			datepicker0.setBounds(734, 57, 131, 30);
			panel_1.add(datepicker0);
			datepicker0.setVisible(false);

			datepicker0.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {

					datepicker0.toString();
					get_Date_Withe_Switch(model0, datepicker0);

					//	    		String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();
					Jtabl_Journal();


				}
			});
			datepicker0.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker0.getJFormattedTextField()}));

			btn_annuler_Rech_Date = new JButton("");
			btn_annuler_Rech_Date.setBounds(875, 75, 33, 30);
			panel_1.add(btn_annuler_Rech_Date);
			btn_annuler_Rech_Date.addActionListener(new ActionListener() {
				public void actionPerformed(ActionEvent arg0) {
					datepicker1.getJFormattedTextField().setText("");
					datepicker0.getJFormattedTextField().setText("");
			Jtabl_Journal();

				}
			});
			btn_annuler_Rech_Date.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));

		   comboBox_Type = new JComboBox<Object>();
		   comboBox_Type.addActionListener(new ActionListener() {
		   	public void actionPerformed(ActionEvent arg0) {
		   	if (comboBox_Type.getSelectedItem().toString().equals("Entrée")) {
		   		
		   		comboBox_Service.setEditable(false);
		   		comboBox_Service.setEnabled(false);
		   		comboBox_Service.setSelectedItem("");

		   		comboBox_Fournisseur.setEditable(true);
		   		comboBox_Fournisseur.setEnabled(true);
			  comboBox_Fournisseur.setModel(new DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));

			} else  {
				
				
		   		comboBox_Fournisseur.setEditable(false);
		   		comboBox_Fournisseur.setEnabled(false);
		   		comboBox_Fournisseur.setSelectedItem("");
		   		
		   		comboBox_Service.setEditable(true);
		   		comboBox_Service.setEnabled(true);
			}
		   	
		   	}
		   });
		  comboBox_Type.setModel(new DefaultComboBoxModel<Object>(new String[] {"Entr\u00E9e", "Sortie"}));
		  comboBox_Type.setBounds(10, 48, 147, 22);
		  panel_1.add(comboBox_Type);
		  
		  textField_Référence = new JTextField();
		  textField_Référence.addKeyListener(new KeyAdapter() {
		  	@Override
		  	public void keyReleased(KeyEvent arg0) {
		  		Jtabl_Journal();
		  	}
		  });
		  textField_Référence.setColumns(10);
		  textField_Référence.setBounds(203, 50, 147, 20);
		  panel_1.add(textField_Référence);
		  
		  textField_Designation = new JTextField();
		  textField_Designation.addKeyListener(new KeyAdapter() {
		  	@Override
		  	public void keyReleased(KeyEvent arg0) {
		  		Jtabl_Journal();
		  	}
		  });
		  textField_Designation.setColumns(10);
		  textField_Designation.setBounds(402, 49, 147, 20);
		  panel_1.add(textField_Designation);
		  
		   comboBox_Service = new JComboBox<Object>();
		   comboBox_Service.setEnabled(false);
		   comboBox_Service.addActionListener(new ActionListener() {
		   	public void actionPerformed(ActionEvent arg0) {
		   		Jtabl_Journal();
		   	}
		   });
		  comboBox_Service.setBounds(10, 104, 147, 22);
		  comboBox_Service.setModel(new DefaultComboBoxModel<Object>(new String[] {"", "parsonnel", "technique", "LSP", "securit\u00E9", "aaa", "sfd"}));

		  panel_1.add(comboBox_Service);
		  
		   comboBox_Fournisseur = new JComboBox<Object>();
		   comboBox_Fournisseur.addActionListener(new ActionListener() {
		   	public void actionPerformed(ActionEvent arg0) {
		   		if (comboBox_Fournisseur.getSelectedItem().toString().trim().equals("")) {
		   			
					Journal.comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Categoure().toArray()));

				   		}else{
				   			
							Journal.comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser_nom_Catégorie("").toArray()));

				   		}
				   		Jtabl_Journal();
		   		
		   	}
		   });
		  comboBox_Fournisseur.setBounds(203, 104, 147, 22);
		  comboBox_Fournisseur.setModel(new DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));

		  panel_1.add(comboBox_Fournisseur);
		  
		   comboBox_Catégorie = new JComboBox<Object>();
		   comboBox_Catégorie.addActionListener(new ActionListener() {
		   	public void actionPerformed(ActionEvent arg0) {
				
		   		
		   		if (true) {
		   			
					Journal.comboBox_Article.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxArticl_Sortie(1).toArray()));
				
		   		}
		   		Jtabl_Journal();

		   	}
		   });
		  comboBox_Catégorie.setBounds(577, 104, 147, 22);
		  
	comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Categoure().toArray()));

		  
		  panel_1.add(comboBox_Catégorie);
		  
		  JLabel lblArticle = new JLabel("Article");
		  lblArticle.setForeground(Color.BLACK);
		  lblArticle.setFont(new Font("Tahoma", Font.BOLD, 14));
		  lblArticle.setBounds(402, 76, 128, 22);
		  panel_1.add(lblArticle);
		  
		  comboBox_Article = new JComboBox<Object>();
		  comboBox_Article.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {

						Jtabl_Journal();

						  	}
		  });
		  comboBox_Article.setBounds(402, 104, 147, 22);
		  comboBox_Article.setModel(new DefaultComboBoxModel<Object>(new String[] {"", "pc", "PRODUIT ENTRETIEN", "tv", "javel", "ecren", "extenteur", "ppapier", "isis", "caf\u00E9tiere", "Enduleur", "stilo", "bureau", "graveuse", "PINESE", "isis", "papier", "regestre", "Grissile", "javile2", "chargeur", "chaise", "envlop"}));

		  panel_1.add(comboBox_Article);
		  
		   chckbxPe = new JCheckBox("P\u00E9riode");
		  chckbxPe.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {
		  		
		  		if (chckbxPe.isSelected()) {
					datepicker0.setVisible(true);
					datepicker1.setVisible(true);
				} else {
					datepicker0.setVisible(false);
					datepicker1.setVisible(false);
				}
		  	}
		  });
		  chckbxPe.setBounds(734, 25, 131, 23);
		  panel_1.add(chckbxPe);
		  
		  JLabel label = new JLabel("");
		  label.setForeground(new Color(0, 0, 204));
		  label.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\Download-Free-Baby-Blue-Background.jpg"));
		  label.setBounds(5, 15, 728, 130);
		  panel_1.add(label);
		  
		  label_1 = new JLabel("");
		  label_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\t\u00E9l\u00E9chargement (1).jpg"));
		  label_1.setBounds(689, 15, 225, 124);
		  panel_1.add(label_1);
		  
		  toolBar = new JToolBar();
		  toolBar.setBackground(Color.BLACK);
		  toolBar.setBounds(0, 0, 944, 32);
		  panel.add(toolBar);
		  
		  lblJournal = new JLabel("                                                                JOURNAL");
		  lblJournal.setFont(new Font("Tahoma", Font.BOLD, 21));
		  lblJournal.setForeground(Color.ORANGE);
		  toolBar.add(lblJournal);
		  
		  JLabel lblNewLabel_1 = new JLabel("Totaux des prix :");
		  lblNewLabel_1.setForeground(Color.BLACK);
		  lblNewLabel_1.setFont(new Font("Tahoma", Font.BOLD, 12));
		  lblNewLabel_1.setBounds(587, 202, 127, 22);
		  panel.add(lblNewLabel_1);
		  
		  textField_Prix_Totale = new JTextField();
		  textField_Prix_Totale.setHorizontalAlignment(SwingConstants.CENTER);
		  textField_Prix_Totale.setEditable(false);
		  textField_Prix_Totale.setFont(new Font("Tahoma", Font.BOLD, 12));
		  textField_Prix_Totale.setForeground(Color.BLACK);
		  textField_Prix_Totale.setColumns(10);
		  textField_Prix_Totale.setBounds(724, 200, 214, 22);
		  panel.add(textField_Prix_Totale);
		  
		  JButton btnNewButton = new JButton("Graphe");
		  btnNewButton.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\resize.png"));
		  btnNewButton.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {
		  		
		  		
		  	/*	statistique window = new statistique();
				window.frame.setVisible(true);*/
				
	            //  Music.music01();
		
		  		
		  	
		  		
		  		
/*	DefaultPieDataset p=new DefaultPieDataset();
for (int i = 0; i < table_Journal.getModel().getRowCount()-1; i++) {

	p.setValue( table_Journal.getModel().getValueAt(i,6).toString(), new Double(table_Journal.getModel().getValueAt(i,9).toString()));

}
	
			JFreeChart	 chart =ChartFactory.createPieChart("PIE chareet", p, true, true,true);
			
	  org.jfree.chart.plot.PiePlot p3d;
	try {
		p3d = ( org.jfree.chart.plot.PiePlot) chart.getPlot();
		
		//p3d.setForegroundAlpha(TOP_ALIGNMENT);
		ChartFrame fram=new ChartFrame("Pil Chart", chart);		
		fram.setSize(450, 500);
		fram.setVisible(true);
		
	} catch (Exception e) {
		// TODO Auto-generated catch block
	JOptionPane.showMessageDialog(null, e.getMessage());}
	  
			
			/*JFileChooser chooser= new JFileChooser();
					chooser.showOpenDialog(Précedent);
				String s;
	     			s=chooser.getSelectedFile().toString();
				//	textField.setText(s);*/
				
	
		  		
		  		
		  		
		  		
		  		
				
				ChartFrame fram;		

				JFreeChart chart=null;
				
				
		
					//GRAFICO DE LIENAS
/*	
					int val=1;
					XYSplineRenderer renderer=new XYSplineRenderer();
					XYSeriesCollection dataset =new XYSeriesCollection();
					XYSeriesCollection dataset0 =new XYSeriesCollection();
					ValueAxis x=new NumberAxis();
					ValueAxis y=new NumberAxis();
					XYSeries series =new XYSeries("bbbbbbbbb");
					XYSeries series0 =new XYSeries("aaaaaa");
				
					//linea.removeAll();
					
				try {
					
					for (int i = 0; i < table_Journal.getModel().getRowCount()-1; i++) {
						
						series.add(Float.parseFloat(String.valueOf(table_Journal.getValueAt(i,8))),
								Float.parseFloat(String.valueOf(table_Journal.getValueAt(i, 8))));
						series0.add(Float.parseFloat(String.valueOf(table_Journal.getValueAt(i,7))),
								Float.parseFloat(String.valueOf(table_Journal.getValueAt(i, 8))));
					
						
						
					}
				} catch (NumberFormatException e) {
					// TODO Auto-generated catch block
val=0;				}
					
					if (val==1) {
						dataset.addSeries(series);
						dataset.addSeries(series0);
						
						x.setLabel("Eje X");
						y.setLabel("Eje Y");
						XYPlot plot;
						plot=new XYPlot(dataset, x, y, renderer);
						chart=new JFreeChart(plot);
						chart.setTitle("  LIENAS  ");
						
					} else {
JOptionPane.showMessageDialog(null, "la table et vide");
					}*/
				

				//GRAFICO DE BARRAS

				DefaultCategoryDataset data =new DefaultCategoryDataset();
				String prod1="Date";
				String prod2="Article";
				String prod3="Catégorie";
/*
				String dia1="Dia 1";
				String dia2="Dia 2";
				String dia3="Dia 3";
				String dia4="Dia 4";*/
				for (int i = 0; i < table_Journal.getModel().getRowCount()-1; i++) {
					
					data.addValue(Float.parseFloat(String.valueOf(table_Journal.getValueAt(i,9))), prod1, table_Journal.getValueAt(i, 1
							).toString());
	
				}
	for (int i = 0; i < table_Journal.getModel().getRowCount()-1; i++) {
					
					data.addValue(Float.parseFloat(String.valueOf(table_Journal.getValueAt(i,9))), prod2, table_Journal.getValueAt(i, 2
							).toString());
	
				}
	for (int i = 0; i < table_Journal.getModel().getRowCount()-1; i++) {
		
		data.addValue(Float.parseFloat(String.valueOf(table_Journal.getValueAt(i,9))), prod3, table_Journal.getValueAt(i, 6
				).toString());

	}
				
				/*
				data.addValue(18, prod1, dia1);
				data.addValue(15, prod1, dia2);
				data.addValue(14, prod1, dia3);
				data.addValue(10, prod1, dia4);

				data.addValue(18, prod2, dia1);
				data.addValue(15, prod2, dia2);
				data.addValue(14, prod2, dia3);
				data.addValue(10, prod2, dia4); 
				                             */
				
				
				
				chart= ChartFactory.createAreaChart("Présentation Graphique de journal", " ", "Prix", data,
						PlotOrientation.VERTICAL,true,true,true);
			
				CategoryPlot plot=(CategoryPlot) chart.getPlot();
				plot.setDomainGridlinesVisible(true);
						
						
			
					fram=new ChartFrame("lianrs Chart", chart);
					fram.setSize(450, 500);
					fram.setVisible(true);
	
		  	}
		  });
		  btnNewButton.setBounds(168, 194, 121, 31);
		  panel.add(btnNewButton);
		  
		  JButton btnExport = new JButton("Exporter");
		  btnExport.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {
		  		
		  		try {
					Export.WriteToExcelJournal(table_Journal, "table_Journal");
				} catch (WriteException | IOException e) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, e.getMessage());
				}  
		  		}
		  });
		  btnExport.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\export.png"));
		  btnExport.setBounds(20, 195, 127, 30);
		  panel.add(btnExport);
		  
		  JButton btnNewButton_1 = new JButton("Impression");
		  btnNewButton_1.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\table.png"));
		  btnNewButton_1.addActionListener(new ActionListener() {
		  	public void actionPerformed(ActionEvent arg0) {
		  	Catégorie.imprission(table_Journal,  " JOURNAL ");
		  	}
		  });
		  btnNewButton_1.setBounds(312, 194, 127, 31);
		  panel.add(btnNewButton_1);
		  
		  label_2 = new JLabel("New label");
		  label_2.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\Download-Free-Baby-Blue-Background.jpg"));
		  label_2.setBounds(0, 31, 944, 694);
		  panel.add(label_2);
		 
			Jtabl_Journal();
	}
	
	public static void Jtabl_Journal(){ 
		
		
		if (comboBox_Type.getSelectedItem().toString().trim().equals("Entrée")) {
			Jtabl_Journal_Entrée();	

		} else {
			
		
			
			Jtabl_Journal_Sortie();	
		}
		
	}
	
	public static void Jtabl_Journal_Sortie(){ 
		
		

		String date=null;
		if (chckbxPe.isSelected()) {
			date="`date_bs` BETWEEN '"+datepicker0.getJFormattedTextField().getText()+"' AND  '"+datepicker1.getJFormattedTextField().getText()+"'";
		} else {
			date="`date_bs` LIKE '%' ";
		}
		
		
		try(    Connection conn=conndb1.connection();
				PreparedStatement prst=conn.prepareStatement("SELECT a.`ID_article` AS Num , bs.`date_bs` AS Date, a.`nom_article` AS Articl, a.`dessignation`  AS Qualité , "
						+ " a.`Referance` AS Référence , c.`nome_categoure` AS Catégorie , "
						+ "   s.`nom_service` AS  Service , ls.`Quantite`,"
						+ "  ls.`prix` ,"
						+ "(ls.`prix` * ls.`Quantite`) AS Prix_total "
						+ " FROM `article`AS a,`categoure`AS c,`bs`AS bs,`be`AS be,"
						+ " `line_bs`AS ls,`line_be`AS le, `service`AS s "
						+ " WHERE a.`ID_categoure` = c.`ID_categoure` AND"
						+ " a.`ID_article` = ls.`ID_article` AND"
						+ " a.`ID_article` = le.`ID_article` AND"
						+ " ls.`ID_bs`= bs.`ID_bs` AND "
						+ " le.`ID_be`= be.`ID_be` AND "
						+ " bs.`ID_service` = s.`ID_service` AND "
			+ " c.`nome_categoure` LIKE '"+comboBox_Catégorie.getSelectedItem().toString().trim()+"%' AND "
				+ " `nom_article` LIKE '"+comboBox_Article.getSelectedItem().toString().trim()+"%' AND "
			+ " `nom_service` LIKE '%"+comboBox_Service.getSelectedItem().toString().trim()+"%' AND "
				+ " `dessignation` LIKE '%"+textField_Designation.getText().toString().trim() +"%' AND "
				+ " `Referance` LIKE '%"+textField_Référence.getText().toString().trim()+"%' AND "
				+ date);

				ResultSet rs=prst.executeQuery();
						) {
	
			table_Journal.setModel(DbUtils.resultSetToTableModel(rs));

		Double Q=0.0;
		rs.beforeFirst();
		while (rs.next()) {
			Q=rs.getDouble("Prix_total")+Q;
			}
		textField_Prix_Totale.setText(Q+" DA");
			
			
		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println("ERR A combxArticl c la methode qui remplire le combobox pare le non de article : "+e.getMessage());
			JOptionPane.showMessageDialog(	null, e.getMessage());
			
		}
	
	}
	public static void Jtabl_Journal_Entrée(){ 
		
		
		String date=null;
		if (chckbxPe.isSelected()) {
			date="`date_be` BETWEEN '"+datepicker0.getJFormattedTextField().getText()+"' AND  '"+datepicker1.getJFormattedTextField().getText()+"'";
		} else {
			date="`date_be` LIKE '%' ";
		}
		
		
		
		try(    Connection conn=conndb1.connection();
				PreparedStatement prst=conn.prepareStatement("SELECT a.`ID_article` AS Num , `date_be` AS Date , `nom_article` AS Articl, `dessignation`  AS Qualité , "
						+ "`Referance` AS Référence, `nome_categoure` AS Catégorie , "
						+ "`nom_fournisser` AS Fournissuer , `Quantite_line_be` AS Quantite ,`prix`   , "
						+ "(`prix` * `Quantite_line_be`) AS Prix_total  "
						+ " FROM `article`AS a,`categoure`AS c,`be`AS be,`fournisser`AS f,"
						+ "`line_be`AS le "
						+ " WHERE a.`ID_categoure`=c.`ID_categoure` AND"
						+ " f.`ID_categoure`=c.`ID_categoure` AND "		
						+ " a.`ID_article` = le.`ID_article` AND"
						+ " be.`ID_fourniseur`=f.`ID_fournisser` AND "
						+ " le.`ID_be`= be.`ID_be` AND "
						+ " c.`nome_categoure` LIKE '"+comboBox_Catégorie.getSelectedItem().toString().trim()+"%'  AND "
						+ " `nom_article` LIKE '"+comboBox_Article.getSelectedItem().toString().trim()+"%' AND "
						+ " `nom_fournisser` LIKE '"+comboBox_Fournisseur.getSelectedItem().toString().trim()+"%' AND "
						+ " `dessignation` LIKE '%"+textField_Designation.getText().toString().trim() +"%' AND "
						+ " `Referance` LIKE '%"+textField_Référence.getText().toString().trim()+"%' AND "
						+date
						);

				
				ResultSet rs=prst.executeQuery()) {
			
			
			table_Journal.setModel(DbUtils.resultSetToTableModel(rs));
			
			
			Double Q=0.0;
			rs.beforeFirst();
			while (rs.next()) {
				Q=rs.getDouble("Prix_total")+Q;
				}
			textField_Prix_Totale.setText(Q+" DA");
				
		} catch (SQLException e) {
			// TODO: handle exception
			System.out.println("ERR A combxArticl c la methode qui remplire le combobox pare le non de article : "+e.getMessage());
			JOptionPane.showMessageDialog(	null, e.getMessage());
			
		}
		
	}
	
	
	
	
	
	
	
	
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




