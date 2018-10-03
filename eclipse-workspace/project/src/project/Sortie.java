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
import javax.swing.JCheckBox;
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

public class Sortie {

	static JFrame frame;
	public static 	JPanel panel ;

	public static JTextField textField_ID_bs;
	public static JComboBox<Object> comboBox_Sortie;
	public static JComboBox<Object> comboBox_Article;
	public static JComboBox<Object> comboBox_RECHERCHE;
	public static JComboBox<Object> comboBox_Catégorie;
	public static JComboBox<Object>  comboBox_Prix ;

	

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
	private static JTable table_lbs;
	private static JScrollPane scrollPane;
	private static JTextField texefild_quantité;

	private static JButton btn_Enregester;
	private static JButton btn_Annuler;
	private static JTable table_bs;
	private static JTextField textField_RECHERCHE;
	private static JButton btn_annuler_Rech_Date;
	private static JButton btn_Suprimer ,btn_Ajout_prodoui;
	private static JLabel lblAu;
	private static JPanel panel_2;
	private static JTextField textField_Prix_Toutal;

	private static 	JCheckBox chckbxNewCheckBox;


	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Sortie window = new Sortie();
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
	public Sortie() {
		initialize();
		JTabbedPane tabbedPane=null;
		panel_Sortie(tabbedPane);
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


	public static  void panel_Sortie(JTabbedPane tabbedPane) {




		frame = new JFrame();
		frame.setResizable(false);
		frame.setBounds(100, 100, 833, 662);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);

		//String s = "<table border="+3+" width="+300+" height="+75+"><tr><td width="+50+"%>Ed</td><td width="+50+"%>Tom</td></tr></table>";


		//last_BDE();

		panel = new JPanel();
		panel.setBackground(new Color(0, 153, 153));
		panel.setBounds(0, 0, 944, 684); 
		//		frame.getContentPane().add(panel);
		tabbedPane.addTab("Sorite", null, panel, null);






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
		datepicker.setBounds(414, 78, 257, 23);
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
		JLabel lblNewLabel = new JLabel("N\u00B0 de bon ");
		lblNewLabel.setBounds(209, 53, 156, 17);
		lblNewLabel.setFont(new Font("Arial Black", Font.BOLD, 15));
		lblNewLabel.setForeground(Color.YELLOW);
		panel.add(lblNewLabel);

		textField_ID_bs = new JTextField();
		textField_ID_bs.setEditable(false);
		textField_ID_bs.setForeground(new Color(0, 0, 0));
		textField_ID_bs.setBounds(414, 52, 257, 21);
		textField_ID_bs.setFont(new Font("Tahoma", Font.BOLD, 12));
		textField_ID_bs.setBackground(SystemColor.info);
		textField_ID_bs.setText(last_BDE(0).toString());
		panel.add(textField_ID_bs);
		textField_ID_bs.setColumns(10);

		JLabel lblNewLabel_1 = new JLabel("Date de Sortie");
		lblNewLabel_1.setBounds(209, 77, 156, 23);
		lblNewLabel_1.setFont(new Font("Arial Black", Font.BOLD, 15));
		lblNewLabel_1.setForeground(Color.YELLOW);
		panel.add(lblNewLabel_1);


		get_Date_Withe_Switch(model, datepicker);						
		panel.add( datepicker);
		datepicker.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker.getJFormattedTextField()}));

		JLabel lblNewLabel_2 = new JLabel("Service");
		lblNewLabel_2.setBounds(209, 113, 156, 17);
		lblNewLabel_2.setFont(new Font("Arial Black", Font.BOLD, 15));
		lblNewLabel_2.setForeground(Color.YELLOW);
		panel.add(lblNewLabel_2);

		JButton btn_New_servise = new JButton("");
		btn_New_servise.setBounds(676, 107, 27, 23);
		btn_New_servise.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
		btn_New_servise.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {


				new Service().setVisible(true);

				comboBox_Sortie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Service().toArray()));

			}
		});


		comboBox_Sortie = new JComboBox<Object>();
		comboBox_Sortie.setBounds(414, 111, 257, 21);
		comboBox_Sortie.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseExited(MouseEvent arg0) {


				if (true) {
					//	comboBox_Fornisseur.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxFournisser().toArray()));
				}
			}
		});

		comboBox_Sortie.setFont(new Font("Tahoma", Font.BOLD, 12));

		comboBox_Sortie.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				if (true) {


					comboBox_Article.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxToutArticl().toArray()));
				}
			}
		});
		comboBox_Sortie.setBackground(SystemColor.info);

		comboBox_Sortie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Service().toArray()));
		panel.add(comboBox_Sortie);

		btn_New_servise.setFont(new Font("Tahoma", Font.BOLD, 13));
		panel.add(btn_New_servise);






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



		table_lbs=new JTable();
		Refrech_Jtable_Entrée();
		table_lbs.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent arg0) {
				getdat_To_JtaxtFilde();

			}
			@Override
			public void mouseReleased(MouseEvent arg0) {
				getdat_To_JtaxtFilde();

			}
		});
		table_lbs.addKeyListener(new KeyAdapter() {

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
		scrollPane.setBounds(365, 418, 572, 223);
		scrollPane.setViewportView(table_lbs);
		panel.add(scrollPane);
		//System.out.println(read_db.getRowOFTabl("article"));

		btn_Enregester = new JButton("Enregester");
		btn_Enregester.setBounds(394, 146, 129, 30);
		btn_Enregester.setIcon(new ImageIcon("C:\\Users\\AK12\\Downloads\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\save.png"));
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

					JOptionPane.showMessageDialog(null, "Vous avez ajouter un nouveau bon de Sortie ");

					System.out.println(today);

				} catch (Exception e) {
					// TODO Auto-generated catch block
					JOptionPane.showMessageDialog(null, e.getMessage());
				}


				Ajout.Insert_New_Sortie(today, comboBox_Sortie.getSelectedItem().toString().trim());

				// pour Aficher suivante identifiante de bon d' entreé 

				textField_ID_bs.setText(last_BDE(0).toString()); 
				btn_Enregester.setEnabled(false);
				btn_Annuler.setEnabled(false);
				comboBox_Sortie.setEnabled(false);
				//datepicker.setButtonFocusable(false);

				Refrech_Jtable_be();
				Refrech_Jtable_Entrée();

			}
		});
		panel.add(btn_Enregester);

		JButton btn_Nouveau = new JButton("Nouveau");
		btn_Nouveau.setBounds(239, 145, 117, 30);
		btn_Nouveau.setFont(new Font("Tahoma", Font.BOLD, 12));
		btn_Nouveau.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
		btn_Nouveau.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {



				btn_Enregester.setEnabled(true);
				btn_Annuler.setEnabled(true);
				comboBox_Sortie.setEnabled(true);
				//datepicker.setButtonFocusable(true);


				textField_ID_bs.setText(last_BDE(1).toString()); 
				Refrech_Jtable_Entrée();


			}
		});
		panel.add(btn_Nouveau);

		btn_Annuler = new JButton("Annuler");
		btn_Annuler.setBounds(550, 146, 122, 30);
		btn_Annuler.setEnabled(false);
		btn_Annuler.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				btn_Enregester.setEnabled(false);
				btn_Annuler.setEnabled(false);
				comboBox_Sortie.setEditable(false);
				textField_ID_bs.setText(last_BDE(0).toString()); 

				Refrech_Jtable_Entrée();
				Refrech_Jtable_be();

			}
		});
		btn_Annuler.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\059AE10.png"));
		btn_Annuler.setFont(new Font("Tahoma", Font.BOLD, 12));
		panel.add(btn_Annuler);

		JScrollPane scrollPane_1 = new JScrollPane();
		scrollPane_1.setBounds(10, 419, 345, 222);
		panel.add(scrollPane_1);

		table_bs = new JTable();
		table_bs.setColumnSelectionAllowed(true);
		table_bs.setBorder(new LineBorder(Color.BLACK, 1, true));
		table_bs.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent arg0) {

				getdat_To_JtaxtFilde_bs();
				//Refrech_Jtable_Entrée();


			}
		});
		table_bs.addKeyListener(new KeyAdapter() {
			@Override
			public void keyReleased(KeyEvent arg0) {


				getdat_To_JtaxtFilde_bs();
				//Refrech_Jtable_Entrée();


			}
			@Override
			public void keyPressed(KeyEvent arg0) {

				getdat_To_JtaxtFilde_bs();
				//Refrech_Jtable_Entrée();


			}
		});
		scrollPane_1.setViewportView(table_bs);
		Refrech_Jtable_be();

		JToolBar toolBar = new JToolBar();
		toolBar.setBounds(0, 0, 944, 37);
		toolBar.setBackground(Color.BLACK);
		panel.add(toolBar);

		JLabel lblEntree = new JLabel("                                                                   SORTIE");
		lblEntree.setFont(new Font("Tahoma", Font.BOLD, 21));
		lblEntree.setForeground(Color.ORANGE);
		toolBar.add(lblEntree);

		JTabbedPane tabbedPane_1 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_1.setForeground(new Color(0, 0, 0));
		tabbedPane_1.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_1.setEnabled(false);
		tabbedPane_1.setBackground(Color.BLACK);
		tabbedPane_1.setBounds(20, 214, 324, 101);
		panel.add(tabbedPane_1);

		JPanel panel_1 = new JPanel();
		panel_1.setBackground(new Color(0, 204, 204));
		tabbedPane_1.addTab("Filtre", null, panel_1, null);
		panel_1.setLayout(null);
		//SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
		datepicker1 =new JDatePickerImpl(datepanel1,null);
		datepicker1.setBounds(47, 41, 233, 23);
		panel_1.add(datepicker1);
		datepicker1.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker1.getJFormattedTextField()}));


		datepicker1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				datepicker1.toString();
				get_Date_Withe_Switch(model1, datepicker1);

				//             String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();

				ResultSet rs=null;
				try(   	Connection conn=conndb1.connection();
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_bs`, `date_bs`, `nom_service` FROM `bs` AS bs ,`service` AS S"
								+ " WHERE  bs.`ID_service` = S.`ID_service`  AND `date_bs` BETWEEN "
								+ " '"+datepicker0.getJFormattedTextField().getText()+"' AND '"+datepicker1.getJFormattedTextField().getText()+"'");

						) { 

					//	stt.setString(1,textField_RECHERCHE.getText());
					rs = stt.executeQuery();

					table_bs.setModel(DbUtils.resultSetToTableModel(rs));

				}
				catch (Exception e1) {
					// TODO: handle exception
					System.err.println(e1.getMessage());
				}

			}

		});


		//SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
		datepicker0 =new JDatePickerImpl(datepanel0,null);
		datepicker0.setBounds(47, 11, 233, 23);
		panel_1.add(datepicker0);
		datepicker0.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				datepicker0.toString();
				get_Date_Withe_Switch(model0, datepicker0);

				//	    		String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();

				ResultSet rs=null;
				try(   	Connection conn=conndb1.connection();
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_bs`, `date_bs`, `nom_service` FROM `bs` "
								+ "` AS be ,`service` AS S"
								+ " WHERE  bs.`ID_service` = S.`ID_service`  AND `date_bs` BETWEEN "
								+ " '"+datepicker0.getJFormattedTextField().getText()+"' AND '"+datepicker1.getJFormattedTextField().getText()+"'");

						) { 

					//	stt.setString(1,textField_RECHERCHE.getText());
					rs = stt.executeQuery();

					table_bs.setModel(DbUtils.resultSetToTableModel(rs));

				}
				catch (Exception e1) {
					// TODO: handle exception
					System.err.println(e1.getMessage());
				}

			}
		});
		datepicker0.setFocusTraversalPolicy(new FocusTraversalOnArray(new Component[]{datepicker0.getJFormattedTextField()}));

		btn_annuler_Rech_Date = new JButton("");
		btn_annuler_Rech_Date.setBounds(291, 27, 33, 30);
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
		lblAu.setBounds(10, 41, 39, 23);
		panel_1.add(lblAu);
		lblAu.setForeground(Color.YELLOW);
		lblAu.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 15));

		JLabel lblNewLabel_3 = new JLabel("du :");
		lblNewLabel_3.setBounds(10, 11, 39, 23);
		panel_1.add(lblNewLabel_3);
		lblNewLabel_3.setForeground(Color.YELLOW);
		lblNewLabel_3.setFont(new Font("Tahoma", Font.BOLD | Font.ITALIC, 15));

		JLabel lblNewLabel_4 = new JLabel("");
		lblNewLabel_4.setBounds(0, 0, 334, 75);
		panel_1.add(lblNewLabel_4);
		lblNewLabel_4.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\39062744-Client-et-des-ressources-humaines-RH-notion-cible-beau-bokeh-en-arri-re-plan-Man-attente-client-cibl-Banque-d'images.jpg"));

		JTabbedPane tabbedPane_2 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_2.setBackground(Color.BLACK);
		tabbedPane_2.setForeground(new Color(0, 0, 0));
		tabbedPane_2.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_2.setEnabled(false);
		tabbedPane_2.setBounds(19, 316, 322, 94);
		panel.add(tabbedPane_2);

		panel_2 = new JPanel();
		panel_2.setBackground(new Color(0, 204, 204));
		tabbedPane_2.addTab("Recherche", null, panel_2, null);
		panel_2.setLayout(null);

		textField_RECHERCHE = new JTextField();
		textField_RECHERCHE.setBounds(7, 37, 300, 21);
		panel_2.add(textField_RECHERCHE);
		textField_RECHERCHE.addKeyListener(new KeyAdapter() {


			@Override
			public void keyReleased(KeyEvent arg0) {


				String selectedSarch =(String) comboBox_RECHERCHE.getSelectedItem();

				ResultSet rs=null;
				try(   	Connection conn=conndb1.connection();
						PreparedStatement stt=conn.prepareStatement("SELECT `ID_bs`, `date_bs`, `nom_service` FROM `bs` AS bs ,`service` AS S "
								+ "WHERE  bs.`ID_service` = S.`ID_service` AND "+selectedSarch+" LIKE  ? ");

						) { 

					stt.setString(1,"%"+textField_RECHERCHE.getText()+"%");
					rs = stt.executeQuery();

					table_bs.setModel(DbUtils.resultSetToTableModel(rs));

				}
				catch (Exception e1) {
					// TODO: handle exception
					System.err.println(e1.getMessage());
				}











			}
		});
		textField_RECHERCHE.setColumns(10);

		comboBox_RECHERCHE = new JComboBox<Object>();
		comboBox_RECHERCHE.setBounds(7, 10, 300, 20);
		panel_2.add(comboBox_RECHERCHE);
		comboBox_RECHERCHE.setModel(new DefaultComboBoxModel<Object>(new String[] {"ID_bs", "nom_service"}));

		JLabel label = new JLabel("");
		label.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\39062744-Client-et-des-ressources-humaines-RH-notion-cible-beau-bokeh-en-arri-re-plan-Man-attente-client-cibl-Banque-d'images.jpg"));
		label.setBounds(0, 0, 317, 89);
		panel_2.add(label);

		JTabbedPane tabbedPane_3 = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane_3.setBackground(Color.BLACK);
		tabbedPane_3.setFont(new Font("Dialog", Font.BOLD, 14));
		tabbedPane_3.setEnabled(false);
		tabbedPane_3.setBounds(365, 211, 572, 196);
		panel.add(tabbedPane_3);

		JPanel panel_3 = new JPanel();
		panel_3.setBackground(new Color(0, 204, 204));
		tabbedPane_3.addTab("Article", null, panel_3, null);
		panel_3.setLayout(null);



		JLabel lblNewLabel_7 = new JLabel("Article :");
		lblNewLabel_7.setHorizontalAlignment(SwingConstants.LEFT);
		lblNewLabel_7.setBounds(276, 11, 253, 16);
		panel_3.add(lblNewLabel_7);
		lblNewLabel_7.setForeground(Color.YELLOW);
		lblNewLabel_7.setFont(new Font("Tahoma", Font.BOLD, 15));


		// comboBox = new JComboBox<Object>(combo_boxtable.combxArticl().toArray());

		comboBox_Article = new JComboBox<Object>();
		comboBox_Article.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				comboBox_Prix.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Prix_Sortie().toArray()));

			}
		});
		comboBox_Article.setBounds(274, 32, 255, 22);
		panel_3.add(comboBox_Article);
		comboBox_Article.setFont(new Font("Tahoma", Font.BOLD, 13));
		comboBox_Article.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxToutArticl().toArray()));



		texefild_quantité = new JTextField();
		texefild_quantité.setBounds(274, 91, 255, 22);
		panel_3.add(texefild_quantité);
		texefild_quantité.setFont(new Font("Tahoma", Font.BOLD, 13));
		texefild_quantité.setColumns(10);

		JLabel lblNewLabel_8 = new JLabel("Quantit\u00E9  :");
		lblNewLabel_8.setHorizontalAlignment(SwingConstants.LEFT);
		lblNewLabel_8.setBounds(276, 70, 253, 16);
		panel_3.add(lblNewLabel_8);
		lblNewLabel_8.setForeground(Color.YELLOW);
		lblNewLabel_8.setFont(new Font("Tahoma", Font.BOLD, 15));

		 btn_Ajout_prodoui = new JButton("Ajouter");
		 btn_Ajout_prodoui.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
		 btn_Ajout_prodoui.setEnabled(false);
		btn_Ajout_prodoui.setBounds(310, 124, 135, 30);
		panel_3.add(btn_Ajout_prodoui);
		btn_Ajout_prodoui.setFont(new Font("Verdana", Font.BOLD, 13));
		
				 btn_Suprimer = new JButton("Suprimer");
				 btn_Suprimer.setEnabled(false);
				btn_Suprimer.setBounds(84, 123, 124, 30);
				panel_3.add(btn_Suprimer);
				btn_Suprimer.addActionListener(new ActionListener() {
					public void actionPerformed(ActionEvent arg0) {




						try {
							getdat_To_JtaxtFilde();

							int confermation = JOptionPane.showConfirmDialog(null, "vous les vous Supprimer ? ", "Supprimer ", JOptionPane.YES_NO_OPTION);

							if (confermation==0) {
								try (Connection conn = conndb1.connection();
										//							PreparedStatement stt = conn.prepareStatement("DELETE FROM `categoure` WHERE `ID_categoure`=?");
										PreparedStatement stt = conn.prepareStatement("DELETE FROM `line_bs` WHERE `ID_line_bs`=? ");

										) {

									int row = table_lbs.getSelectedRow();
									String id_bs =table_lbs.getModel().getValueAt(row,0).toString();
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
		
				JLabel lblCatgorie = new JLabel("Cat\u00E9gorie :");
				lblCatgorie.setBounds(10, 11, 227, 21);
				panel_3.add(lblCatgorie);
				lblCatgorie.setForeground(Color.YELLOW);
				lblCatgorie.setFont(new Font("Tahoma", Font.BOLD, 15));
		
				comboBox_Catégorie = new JComboBox<Object>();
				comboBox_Catégorie.setBounds(11, 33, 226, 20);
				panel_3.add(comboBox_Catégorie);
				comboBox_Catégorie.addActionListener(new ActionListener() {
					public void actionPerformed(ActionEvent arg0) {
						if (true) {


							Sortie.comboBox_Article.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combxArticl_Sortie(0).toArray()));

						}
					}
				});
				
						comboBox_Catégorie.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Categoure().toArray()));
		
		 comboBox_Prix = new JComboBox<Object>();
		comboBox_Prix.setBounds(13, 93, 224, 20);
		comboBox_Prix.setModel(new javax.swing.DefaultComboBoxModel<Object>(combo_boxtable.combx_Prix_Sortie().toArray()));
		panel_3.add(comboBox_Prix);
		
		JLabel lblPrix = new JLabel("Prix :");
		lblPrix.setForeground(Color.YELLOW);
		lblPrix.setFont(new Font("Tahoma", Font.BOLD, 15));
		lblPrix.setBounds(13, 71, 224, 20);
		panel_3.add(lblPrix);

		JLabel lblNewLabel_5 = new JLabel("");
		lblNewLabel_5.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\39062744-Client-et-des-ressources-humaines-RH-notion-cible-beau-bokeh-en-arri-re-plan-Man-attente-client-cibl-Banque-d'images.jpg"));
		lblNewLabel_5.setBounds(0, 0, 567, 185);
		panel_3.add(lblNewLabel_5);
		btn_Ajout_prodoui.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				//Refrech_Jtable_Entrée();

				try {

					Double c = new Double(texefild_quantité.getText());
					Ajout.insert_Linge_Bone_Sortie(textField_ID_bs.getText(), comboBox_Article.getSelectedItem().toString().trim(), c);


					JOptionPane.showMessageDialog(null, "Vous aves Ajout un nouven prodoui !", "Ajout_prodoui", 1);			
				//	Refrech_Jtable_Entrée();


				} catch (NumberFormatException e) {
					// TODO Auto-generated catch block
					System.out.println(e.getMessage());

					JOptionPane.showMessageDialog(null,e.getMessage(), "Err Ajout_prodoui", 0);			

				}
				System.out.println(comboBox_Article.getSelectedItem().toString().trim());

				Refrech_Jtable_Entrée();

			}

		});
		
		JLabel lblLePrixDe = new JLabel("Totaux des prix :");
		lblLePrixDe.setForeground(Color.YELLOW);
		lblLePrixDe.setHorizontalAlignment(SwingConstants.CENTER);
		lblLePrixDe.setFont(new Font("Tahoma", Font.BOLD, 14));
		lblLePrixDe.setBounds(503, 652, 170, 30);
		panel.add(lblLePrixDe);
		
		textField_Prix_Toutal = new JTextField();
		textField_Prix_Toutal.setHorizontalAlignment(SwingConstants.CENTER);
		textField_Prix_Toutal.setEditable(false);
		textField_Prix_Toutal.setFont(new Font("Tahoma", Font.BOLD, 13));
		textField_Prix_Toutal.setColumns(10);
		textField_Prix_Toutal.setBackground(SystemColor.info);
		textField_Prix_Toutal.setBounds(677, 652, 257, 27);
		panel.add(textField_Prix_Toutal);
		
		 chckbxNewCheckBox = new JCheckBox("Le bon de sortie");
		 chckbxNewCheckBox.setSelected(true);
		chckbxNewCheckBox.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				

				if (chckbxNewCheckBox.isSelected()) {
					btn_Suprimer.setEnabled(false);
					btn_Ajout_prodoui.setEnabled(false);
					table_bs.setEnabled(true);
					
				
					
				} else {
					textField_ID_bs.setText(table_bs.getModel().getValueAt(table_bs.getRowCount()-1,0).toString());
					datepicker.getJFormattedTextField().setText(table_bs.getModel().getValueAt(table_bs.getRowCount()-1,1).toString());
		    	

					comboBox_Sortie.setSelectedItem(table_bs.getModel().getValueAt(table_bs.getRowCount()-1,2).toString());
					btn_Suprimer.setEnabled(true);
					btn_Ajout_prodoui.setEnabled(true);
					table_bs.setEnabled(false);
				}
			
				
			}
		});
		chckbxNewCheckBox.setFont(new Font("Tahoma", Font.BOLD, 11));
		chckbxNewCheckBox.setBounds(12, 647, 124, 23);
		panel.add(chckbxNewCheckBox);
		
		JButton btnNewButton = new JButton("Impression");
		btnNewButton.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\table.png"));
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				String msg="BON DE SORTEE \n  date: "+datepicker.getJFormattedTextField().getText() +"\t\t\t"
						+ " Service de :"+comboBox_Sortie.getSelectedItem().toString()+"";
				Catégorie.imprission(table_lbs, msg);

			}
		});
		btnNewButton.setBounds(790, 191, 129, 30);
		panel.add(btnNewButton);
		
				JLabel lblNewLabel_6 = new JLabel("");
				lblNewLabel_6.setBackground(Color.DARK_GRAY);
				lblNewLabel_6.setBounds(-4, 0, 944, 682);
				lblNewLabel_6.setFont(new Font("Arial Black", Font.BOLD, 13));
				lblNewLabel_6.setForeground(new Color(0, 0, 0));
				panel.add(lblNewLabel_6);
				lblNewLabel_6.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\Ilyes\\39062744-Client-et-des-ressources-humaines-RH-notion-cible-beau-bokeh-en-arri-re-plan-Man-attente-client-cibl-Banque-d'images.jpg"));



	}

	public static  String  last_BDE(int i) {
		String s=null;

		try ( Connection conn= conndb1.connection();
				PreparedStatement stat=conn.prepareStatement("SELECT `ID_bs`, `date_bs`, `ID_service` FROM `bs`");
				ResultSet 	C=  stat.executeQuery();
				){

			C.last();
			C.getRow();	
			try {
				Integer i0=new Integer(C.getInt("ID_bs")+i);
				s=(i0).toString().trim();
				return s;

			} catch (Exception e) {

				// TODO Auto-generated catch block
				JOptionPane.showMessageDialog(null, e.getMessage());
				System.out.println(" Method_in_Sortie_last_BDE : "+e.getMessage());

			}


		} catch (SQLException e) {
			JOptionPane.showMessageDialog(null, e.getMessage());	
		}

		return s;

	}


	public static void Refrech_Jtable_Entrée() {
		try(   	Connection conn=conndb1.connection();

				PreparedStatement stt=conn.prepareStatement(" SELECT  `ID_line_bs` AS Num,bs.`ID_bs` AS `Code de bon sortie`,"
						+ "a.`ID_article` AS 'Code article' ,"
						+ " `date_bs`"
						+ " AS 'Date', `nom_article` AS 'Article',`nom_service` AS 'Service', `Quantite`"
						+ " , ls.`prix` , "
						+ "(ls.`prix` * ls.`Quantite`) AS 'Prix total' "
						+ " FROM `article`AS a,`categoure`AS c,`bs`AS bs,"
						+ " `line_bs`AS ls, `service`AS s "
						+ " WHERE a.`ID_categoure` = c.`ID_categoure` AND"
						+ " a.`ID_article` = ls.`ID_article` AND"
						+ " ls.`ID_bs`= bs.`ID_bs` AND "
						+ " bs.`ID_service` = s.`ID_service` AND "
						+ "  bs.`ID_bs`='"+textField_ID_bs.getText()+"'  ");

				ResultSet rs = stt.executeQuery();


				) { 


			table_lbs.setModel(DbUtils.resultSetToTableModel(rs));

			Double Q=0.0;
			rs.beforeFirst();
			while (rs.next()) {
				Q=rs.getDouble("Prix total")+Q;
				}
			textField_Prix_Toutal.setText(Q+" DA");

		}

		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}
	}

	public static void Refrech_Jtable_be() {
		try(   	Connection conn=conndb1.connection();
				PreparedStatement stt=conn.prepareStatement("SELECT bs.`ID_bs` AS `Code de bon sortie` , bs.`date_bs` AS `Date`, bs.`ID_service` AS `Code de Service`"
						+ " ,s.`nom_service` AS `Service` "
						+ "FROM `bs` AS bs,`service` AS s "
						+ "WHERE   bs.`ID_service`=s.`ID_service`");

				ResultSet rs = stt.executeQuery();


				) { 


			table_bs.setModel(DbUtils.resultSetToTableModel(rs));



				
				

		}
		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}


		Refrech_Jtable_Entrée();
	}




	public static void getdat_To_JtaxtFilde_bs() {
		int row = table_bs.getSelectedRow();
		String id_bs =table_bs.getModel().getValueAt(row,0).toString();
		try(   	Connection conn=conndb1.connection();
				PreparedStatement stt=conn.prepareStatement("SELECT  bs.`ID_bs`, bs.`date_bs`, bs.`ID_service`,s.`nom_service`"
						+ " FROM `bs` AS bs,`service` AS s "
						+ "WHERE  bs.`ID_bs`='"+id_bs+"' AND  bs.`ID_service`=s.`ID_service`");

				ResultSet rs = stt.executeQuery();
				) { 

			while (rs.next()) {
				textField_ID_bs.setText(rs.getString(1));

				datepicker.getJFormattedTextField().setText(rs.getString(2));
				comboBox_Sortie.setSelectedItem(rs.getString(4));

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
		int row = table_lbs.getSelectedRow();
		String id_line_bs =table_lbs.getModel().getValueAt(row,0).toString();
		try(   	Connection conn=conndb1.connection();
				/*PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_be`,`ID_be`, `date_be`, `nom_article`,`nom_fournisser`, `Quantite_line_be`, `prix` "
						+ " FROM `line_be` AS lbe , `article` AS ar,`be` AS be , `fournisser` AS FR "
						+ " WHERE lbe.`ID_be`='"+textField_ID_be.getText()+"' AND  lbe.`ID_article` =  ar.`ID_article` AND FR.`ID_fournisser` = be.`ID_fourniseur` AND `ID_line_be`='"+id_line_be+"' ");
				 */

				PreparedStatement stt=conn.prepareStatement(" SELECT `ID_line_bs`,bs.`ID_bs`, `date_bs`, `nom_article`,"
						+ "`nom_service`, `Quantite` "
						+ " FROM `line_bs` AS lbs , `article` AS ar,`bs` AS bs , `service` AS S "
						+ " WHERE lbs.`ID_bs` =bs.`ID_bs`  AND  lbs.`ID_article` =  ar.`ID_article` AND "
						+ " S.`ID_service` = bs.`ID_service` AND `ID_line_bs`='"+id_line_bs+"' ");

				ResultSet rs = stt.executeQuery();
				) { 



			while (rs.next()) {
				comboBox_Article.setSelectedItem(rs.getString(4));
				texefild_quantité.setText(rs.getString(6).toString());

			}

		}
		catch (Exception e) {
			// TODO: handle exception
			System.err.println(e.getMessage());
		}
	}
	public static void getdat_To_JtaxtFilde_be() {
		int row = table_bs.getSelectedRow();
		String id_be =table_bs.getModel().getValueAt(row,0).toString();
		try(   	Connection conn=conndb1.connection();
				PreparedStatement stt=conn.prepareStatement(" SELECT `ID_be` Code, `date_be`,`nom_fournisser` FROM `be` AS be, `fournisser` AS FR    "
						+ "WHERE   `ID_be`='"+id_be+"' AND FR.`ID_fournisser` = be.`ID_fourniseur` ");
				
				ResultSet rs = stt.executeQuery();
				) { 
			
			while (rs.next()) {
				textField_ID_bs.setText(rs.getString(1));
				
					datepicker.getJFormattedTextField().setText(rs.getString(2));
				comboBox_Sortie.setSelectedItem(rs.getString(3));
				
			}
//table.setModel(DbUtils.resultSetToTableModel(rs));
			Refrech_Jtable_Entrée();
			
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
