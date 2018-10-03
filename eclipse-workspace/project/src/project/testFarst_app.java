
package project;

import java.awt.Color;
import java.awt.EventQueue;
import java.awt.Font;
import java.awt.Panel;
import java.awt.Toolkit;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.InputEvent;
import java.awt.event.KeyEvent;

import javax.swing.GroupLayout;
import javax.swing.GroupLayout.Alignment;
import javax.swing.ImageIcon;
import javax.swing.JComboBox;
import javax.swing.JDialog;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JMenuItem;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JScrollPane;
import javax.swing.JSeparator;
import javax.swing.JTabbedPane;
import javax.swing.JTable;
import javax.swing.JTextField;
import javax.swing.JToolBar;
import javax.swing.KeyStroke;
import javax.swing.LayoutStyle.ComponentPlacement;
import javax.swing.border.BevelBorder;

import java.awt.GridLayout;

import javax.swing.JTextPane;
import javax.swing.JMenu;

public class testFarst_app {
	static int a ;
	static Boolean  b;
	JFrame frame;





	//##############################################################################

	//########################## les peremetre de Stock  ###########################

	//##############################################################################



	private static JTextField textField_11;
	private static JTextField textField_12;
	private static JTextField textField_13;
	private static JTextField textField_14;
	private static JTextField textField_15;
	private static JTextField textField_16;
	private static JTextField textField_17;
	private static JTextField textField_18;
	private static JTextField textField_19;
	private static JTextField textField_20;
	private static JTextField textField_21;
	private static JTable table;





	//##############################################################################
	//##############################################################################
	//##############################################################################



	private javax.swing.JMenu jMenu1;
	private javax.swing.JMenu jMenu2;
	private javax.swing.JMenu jMenu3;
	private javax.swing.JMenuBar jMenuBar1;
	private javax.swing.JMenuItem jMenuItem2;
	private javax.swing.JMenuItem jMenuItem3;
	private javax.swing.JMenuItem jMenuItem5;
	private javax.swing.JPopupMenu.Separator jSeparator2;
	private JMenuItem mntmNewMenuItem;
	private JMenuItem mntmNewMenuItem_1;
	private JMenuItem mntmNewMenuItem_2;
	private JMenuItem mntmNewMenuItem_3;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					testFarst_app window = new testFarst_app();
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
	public testFarst_app() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setResizable(false);
		frame.setIconImage(Toolkit.getDefaultToolkit().getImage("C:\\Nouveau dossier\\project\\image\\mm.jpg"));
		frame.setBounds(100, 100, 957, 771);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(new GridLayout(0, 1, 0, 0));
		//	pan.setLayout(new GridLayout(1, 0, 0, 0));

		// pack();


		JTabbedPane tabbedPane = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane.setBackground(Color.WHITE);
		frame.getContentPane().add(tabbedPane);
		tabbedPane.setTabLayoutPolicy(JTabbedPane.SCROLL_TAB_LAYOUT);
		tabbedPane.setBorder(new BevelBorder(BevelBorder.LOWERED, Color.PINK, null, null, null));


		//############################################  Article "############################################"

		Articl.panel_Article(tabbedPane);

		//############################################  FOURNISSER "############################################"

		fornesser.panel_Fornessuer(tabbedPane);	

		//############################################  Stock      "############################################"


		//	stock(tabbedPane);

		//############################################  Entrée "############################################"

		Entrée.panel_Entrée(tabbedPane);
		//############################################  Sortie "############################################"

		Sortie.panel_Sortie(tabbedPane);
		//############################################  Journal "############################################"

		Journal.panel_Journal(tabbedPane);



		/*
		JPanel panel_2 = new JPanel();
		tabbedPane.addTab("Stock", null, panel_2, null);

				JPanel panel_3 = new JPanel();
				panel_3.setBounds(0, 26, 932, 97);
				panel_3.setBackground(new Color(153, 153, 0));

						JLabel label_14 = new JLabel();
						label_14.setText("jLabel1");

								textField_11 = new JTextField();

										JLabel label_15 = new JLabel();
										label_15.setText("jLabel4");	
										textField_12 = new JTextField();

												JLabel label_16 = new JLabel();
												label_16.setText("jLabel2");

														textField_13 = new JTextField();

																JLabel label_17 = new JLabel();
																label_17.setText("jLabel8");




																		textField_14 = new JTextField();

																				JLabel label_18 = new JLabel();
																				label_18.setText("jLabel3");

																						JComboBox<Object> comboBox_2 = new JComboBox<Object>();

																								JLabel label_19 = new JLabel();
																								label_19.setText("jLabel7");

																										textField_15 = new JTextField();

																												JLabel label_20 = new JLabel();
																												label_20.setText("jLabel5");

																														JLabel label_21 = new JLabel();
																														label_21.setText("jLabel6");

																																textField_16 = new JTextField();

																																		textField_17 = new JTextField();



																																				GroupLayout gl_panel_3 = new GroupLayout(panel_3);
																																				gl_panel_3.setHorizontalGroup(
																																						gl_panel_3.createParallelGroup(Alignment.LEADING)
																																						.addGroup(gl_panel_3.createSequentialGroup()
																																								.addContainerGap()
																																								.addGroup(gl_panel_3.createParallelGroup(Alignment.LEADING)
																																										.addGroup(gl_panel_3.createSequentialGroup()
																																												.addGroup(gl_panel_3.createParallelGroup(Alignment.LEADING)
																																														.addGroup(gl_panel_3.createSequentialGroup()
																																																.addComponent(label_14)
																																																.addGap(18)
																																																.addComponent(textField_11, 818, 818, 818))
																																																.addGroup(gl_panel_3.createSequentialGroup()
																																																		.addGroup(gl_panel_3.createParallelGroup(Alignment.LEADING)
																																																				.addGroup(gl_panel_3.createSequentialGroup()
																																																						.addComponent(label_16)
																																																						.addGap(18)
																																																						.addComponent(textField_13, GroupLayout.PREFERRED_SIZE, 226, GroupLayout.PREFERRED_SIZE))
																																																						.addGroup(gl_panel_3.createSequentialGroup()
																																																								.addComponent(label_18)
																																																								.addGap(18)
																																																								.addComponent(comboBox_2, GroupLayout.PREFERRED_SIZE, 161, GroupLayout.PREFERRED_SIZE)
																																																								.addGap(95)
																																																								.addComponent(label_19)
																																																								.addGap(18)
																																																								.addComponent(textField_15, GroupLayout.PREFERRED_SIZE, 129, GroupLayout.PREFERRED_SIZE)))
																																																								.addPreferredGap(ComponentPlacement.RELATED, 252, Short.MAX_VALUE)
																																																								.addGroup(gl_panel_3.createParallelGroup(Alignment.LEADING)
																																																										.addComponent(label_20)
																																																										.addComponent(label_21))
																																																										.addGap(31)
																																																										.addGroup(gl_panel_3.createParallelGroup(Alignment.LEADING, false)
																																																												.addComponent(textField_16)
																																																												.addComponent(textField_17, GroupLayout.DEFAULT_SIZE, 127, Short.MAX_VALUE))))
																																																												.addContainerGap())
																																																												.addGroup(gl_panel_3.createSequentialGroup()
																																																														.addGroup(gl_panel_3.createSequentialGroup()
																																																																.addComponent(label_15)
																																																																.addGap(18)
																																																																.addComponent(textField_12))
																																																																.addGap(32)
																																																																.addComponent(label_17)
																																																																.addGap(18)
																																																																.addComponent(textField_14)
																																																																.addGap(454))))
																																						);
																																				gl_panel_3.setVerticalGroup(
																																						gl_panel_3.createParallelGroup(Alignment.LEADING)
																																						.addGroup(gl_panel_3.createSequentialGroup()
																																								.addContainerGap(GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
																																								.addGroup(gl_panel_3.createParallelGroup(Alignment.BASELINE)
																																										.addComponent(label_14)
																																										.addComponent(textField_11, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																										.addPreferredGap(ComponentPlacement.UNRELATED)
																																										.addGroup(gl_panel_3.createParallelGroup(Alignment.BASELINE)
																																												.addComponent(label_16)
																																												.addComponent(textField_13, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																												.addComponent(textField_16, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																												.addComponent(label_20))
																																												.addPreferredGap(ComponentPlacement.UNRELATED)
																																												.addGroup(gl_panel_3.createParallelGroup(Alignment.BASELINE)
																																														.addComponent(label_18)
																																														.addComponent(comboBox_2, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																														.addComponent(textField_17, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																														.addComponent(label_21)
																																														.addComponent(textField_15, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																														.addComponent(label_19))
																																														.addPreferredGap(ComponentPlacement.RELATED)
																																														.addGroup(gl_panel_3.createParallelGroup(Alignment.BASELINE)
																																																.addComponent(label_15)
																																																.addComponent(textField_12, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																																.addComponent(label_17)
																																																.addComponent(textField_14, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																																.addGap(6))
																																						);
																																				panel_3.setLayout(gl_panel_3);

																																						JPanel panel_4 = new JPanel();
																																						panel_4.setBounds(0, 410, 932, 97);
																																						panel_4.setBackground(Color.BLACK);

																																								JPanel panel_5 = new JPanel();

																																										JLabel label_22 = new JLabel();
																																										label_22.setText("jLabel12");

																																												textField_18 = new JTextField();

																																														JLabel label_23 = new JLabel();
																																														label_23.setText("jLabel10");

																																																JLabel label_24 = new JLabel();
																																																label_24.setText("jLabel11");

																																																		JComboBox<Object> comboBox_3 = new JComboBox<Object>();
																																																		GroupLayout gl_panel_5 = new GroupLayout(panel_5);
																																																		gl_panel_5.setHorizontalGroup(
																																																				gl_panel_5.createParallelGroup(Alignment.LEADING)
																																																				.addGap(0, 297, Short.MAX_VALUE)
																																																				.addGroup(gl_panel_5.createSequentialGroup()
																																																						.addContainerGap()
																																																						.addGroup(gl_panel_5.createParallelGroup(Alignment.LEADING)
																																																								.addGroup(gl_panel_5.createSequentialGroup()
																																																										.addComponent(label_22)
																																																										.addPreferredGap(ComponentPlacement.RELATED, 70, Short.MAX_VALUE)
																																																										.addComponent(textField_18, GroupLayout.PREFERRED_SIZE, 167, GroupLayout.PREFERRED_SIZE))
																																																										.addGroup(gl_panel_5.createSequentialGroup()
																																																												.addComponent(label_23)
																																																												.addGap(0, 237, Short.MAX_VALUE))
																																																												.addGroup(gl_panel_5.createSequentialGroup()
																																																														.addComponent(label_24)
																																																														.addPreferredGap(ComponentPlacement.RELATED, 70, Short.MAX_VALUE)
																																																														.addComponent(comboBox_3, GroupLayout.PREFERRED_SIZE, 167, GroupLayout.PREFERRED_SIZE)))
																																																														.addContainerGap())
																																																				);
																																																		gl_panel_5.setVerticalGroup(
																																																				gl_panel_5.createParallelGroup(Alignment.LEADING)
																																																				.addGap(0, 94, Short.MAX_VALUE)
																																																				.addGroup(gl_panel_5.createSequentialGroup()
																																																						.addGap(7)
																																																						.addComponent(label_23)
																																																						.addPreferredGap(ComponentPlacement.UNRELATED)
																																																						.addGroup(gl_panel_5.createParallelGroup(Alignment.BASELINE)
																																																								.addComponent(label_24)
																																																								.addComponent(comboBox_3, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																																								.addPreferredGap(ComponentPlacement.RELATED, 11, Short.MAX_VALUE)
																																																								.addGroup(gl_panel_5.createParallelGroup(Alignment.BASELINE)
																																																										.addComponent(label_22)
																																																										.addComponent(textField_18, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																																										.addContainerGap())
																																																				);
																																																		panel_5.setLayout(gl_panel_5);

																																																				JPanel panel_6 = new JPanel();

																																																						JLabel label_25 = new JLabel();
																																																						label_25.setText("jLabel14");

																																																								JComboBox<Object> comboBox_4 = new JComboBox<Object>();

																																																										JLabel label_26 = new JLabel();
																																																										label_26.setText("jLabel13");

																																																												JLabel label_27 = new JLabel();
																																																												label_27.setText("jLabel15");

																																																														textField_19 = new JTextField();
																																																														GroupLayout gl_panel_6 = new GroupLayout(panel_6);
																																																														gl_panel_6.setHorizontalGroup(
																																																																gl_panel_6.createParallelGroup(Alignment.LEADING)
																																																																.addGap(0, 282, Short.MAX_VALUE)
																																																																.addGroup(gl_panel_6.createSequentialGroup()
																																																																		.addContainerGap()
																																																																		.addGroup(gl_panel_6.createParallelGroup(Alignment.LEADING)
																																																																				.addGroup(gl_panel_6.createSequentialGroup()
																																																																						.addComponent(label_25)
																																																																						.addPreferredGap(ComponentPlacement.RELATED, 49, Short.MAX_VALUE)
																																																																						.addComponent(comboBox_4, GroupLayout.PREFERRED_SIZE, 173, GroupLayout.PREFERRED_SIZE))
																																																																						.addGroup(gl_panel_6.createSequentialGroup()
																																																																								.addComponent(label_26)
																																																																								.addGap(0, 222, Short.MAX_VALUE))
																																																																								.addGroup(gl_panel_6.createSequentialGroup()
																																																																										.addComponent(label_27)
																																																																										.addPreferredGap(ComponentPlacement.RELATED, 49, Short.MAX_VALUE)
																																																																										.addComponent(textField_19, GroupLayout.PREFERRED_SIZE, 173, GroupLayout.PREFERRED_SIZE)))
																																																																										.addContainerGap())
																																																																);
																																																														gl_panel_6.setVerticalGroup(
																																																																gl_panel_6.createParallelGroup(Alignment.LEADING)
																																																																.addGap(0, 94, Short.MAX_VALUE)
																																																																.addGroup(gl_panel_6.createSequentialGroup()
																																																																		.addGap(7)
																																																																		.addComponent(label_26)
																																																																		.addPreferredGap(ComponentPlacement.UNRELATED)
																																																																		.addGroup(gl_panel_6.createParallelGroup(Alignment.BASELINE)
																																																																				.addComponent(label_25)
																																																																				.addComponent(comboBox_4, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																																																				.addPreferredGap(ComponentPlacement.UNRELATED)
																																																																				.addGroup(gl_panel_6.createParallelGroup(Alignment.BASELINE)
																																																																						.addComponent(label_27)
																																																																						.addComponent(textField_19, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE))
																																																																						.addContainerGap(GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
																																																																);
																																																														panel_6.setLayout(gl_panel_6);

																																																																JPanel panel_7 = new JPanel();

																																																																		JLabel label_28 = new JLabel();
																																																																		label_28.setText("jLabel16");

																																																																				textField_20 = new JTextField();

																																																																						JLabel label_29 = new JLabel();
																																																																						label_29.setText("jLabel17");

																																																																								textField_21 = new JTextField();
																																																																								GroupLayout gl_panel_7 = new GroupLayout(panel_7);
																																																																								gl_panel_7.setHorizontalGroup(
																																																																										gl_panel_7.createParallelGroup(Alignment.LEADING)
																																																																										.addGap(0, 239, Short.MAX_VALUE)
																																																																										.addGroup(gl_panel_7.createSequentialGroup()
																																																																												.addGap(18)
																																																																												.addGroup(gl_panel_7.createParallelGroup(Alignment.LEADING)
																																																																														.addComponent(label_28)
																																																																														.addComponent(textField_20, GroupLayout.PREFERRED_SIZE, 85, GroupLayout.PREFERRED_SIZE))
																																																																														.addPreferredGap(ComponentPlacement.RELATED, 42, Short.MAX_VALUE)
																																																																														.addGroup(gl_panel_7.createParallelGroup(Alignment.LEADING)
																																																																																.addComponent(label_29)
																																																																																.addComponent(textField_21, GroupLayout.PREFERRED_SIZE, 84, GroupLayout.PREFERRED_SIZE))
																																																																																.addContainerGap())
																																																																										);
																																																																								gl_panel_7.setVerticalGroup(
																																																																										gl_panel_7.createParallelGroup(Alignment.LEADING)
																																																																										.addGap(0, 94, Short.MAX_VALUE)
																																																																										.addGroup(gl_panel_7.createSequentialGroup()
																																																																												.addContainerGap()
																																																																												.addGroup(gl_panel_7.createParallelGroup(Alignment.BASELINE)
																																																																														.addComponent(label_28)
																																																																														.addComponent(label_29))
																																																																														.addPreferredGap(ComponentPlacement.UNRELATED)
																																																																														.addGroup(gl_panel_7.createParallelGroup(Alignment.BASELINE)
																																																																																.addComponent(textField_20, GroupLayout.PREFERRED_SIZE, 30, GroupLayout.PREFERRED_SIZE)
																																																																																.addComponent(textField_21, GroupLayout.PREFERRED_SIZE, 30, GroupLayout.PREFERRED_SIZE))
																																																																																.addContainerGap(28, Short.MAX_VALUE))
																																																																										);
																																																																								panel_7.setLayout(gl_panel_7);
																																																																								GroupLayout gl_panel_4 = new GroupLayout(panel_4);
																																																																								gl_panel_4.setHorizontalGroup(
																																																																										gl_panel_4.createParallelGroup(Alignment.LEADING)
																																																																										.addGap(0, 890, Short.MAX_VALUE)
																																																																										.addGroup(gl_panel_4.createSequentialGroup()
																																																																												.addGap(26)
																																																																												.addComponent(panel_5, GroupLayout.DEFAULT_SIZE, 297, Short.MAX_VALUE)
																																																																												.addGap(18)
																																																																												.addComponent(panel_6, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																																																												.addPreferredGap(ComponentPlacement.UNRELATED)
																																																																												.addComponent(panel_7, GroupLayout.PREFERRED_SIZE, GroupLayout.DEFAULT_SIZE, GroupLayout.PREFERRED_SIZE)
																																																																												.addGap(18))
																																																																										);
																																																																								gl_panel_4.setVerticalGroup(
																																																																										gl_panel_4.createParallelGroup(Alignment.LEADING)
																																																																										.addGap(0, 116, Short.MAX_VALUE)
																																																																										.addGroup(gl_panel_4.createSequentialGroup()
																																																																												.addContainerGap()
																																																																												.addGroup(gl_panel_4.createParallelGroup(Alignment.LEADING)
																																																																														.addComponent(panel_6, Alignment.TRAILING, GroupLayout.DEFAULT_SIZE, GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
																																																																														.addComponent(panel_5, GroupLayout.DEFAULT_SIZE, 94, Short.MAX_VALUE)
																																																																														.addComponent(panel_7, Alignment.TRAILING, GroupLayout.DEFAULT_SIZE, 94, Short.MAX_VALUE))
																																																																														.addContainerGap())
																																																																										);
																																																																								panel_4.setLayout(gl_panel_4);
																																																																								panel_2.setLayout(null);

																																																																										JToolBar toolBar = new JToolBar();
																																																																										toolBar.setBounds(0, 0, 932, 26);
																																																																										toolBar.setBackground(new Color(153, 255, 204));
																																																																										panel_2.add(toolBar);

																																																																												JLabel label = new JLabel();
																																																																												label.setText("                                                                        stock");
																																																																												label.setFont(new Font("Algerian", Font.PLAIN, 18));
																																																																												toolBar.add(label);
																																																																												panel_2.add(panel_3);

																																																																														JScrollPane scrollPane = new JScrollPane();
																																																																														scrollPane.setBounds(0, 124, 932, 97);
																																																																														panel_2.add(scrollPane);

																																																																														JLabel label_1 = new JLabel("");
																																																																														label_1.setBounds(0, 221, 932, 97);
																																																																														panel_2.add(label_1);

																																																																														JLabel label_2 = new JLabel("");
																																																																														label_2.setBounds(0, 318, 932, 97);
																																																																														panel_2.add(label_2);
																																																																														panel_2.add(panel_4);

																																																																																JScrollPane scrollPane_1 = new JScrollPane();
																																																																																scrollPane_1.setBounds(0, 508, 932, 171);
																																																																																panel_2.add(scrollPane_1);

																																																																																		table = new JTable( );

																																																																																				table.setModel(new javax.swing.table.DefaultTableModel(
																																																																																						new Object [][] {

																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},
																																																																																								{null, null, null, null},

																																																																																						}, new String [] {"A", "B", "C", "D" }));
																																																																																				scrollPane_1.setViewportView(table);


		 */
		//frame.getContentPane().setLayout(null);

		jMenuBar1 = new javax.swing.JMenuBar();
		jMenu1 = new javax.swing.JMenu();
		jMenu3 = new javax.swing.JMenu();
		jMenu3.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_add.png"));
		jMenuItem2 = new javax.swing.JMenuItem();
		jMenuItem2.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_S, InputEvent.CTRL_MASK | InputEvent.SHIFT_MASK));
		jMenuItem2.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				new Service().setVisible(true);

			}
		});


		jMenuItem3 = new javax.swing.JMenuItem();
		jMenuItem3.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {

				new Catégorie().setVisible(true);
			}	


		});
		jMenuItem3.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_G, InputEvent.CTRL_MASK | InputEvent.SHIFT_MASK));
		jSeparator2 = new javax.swing.JPopupMenu.Separator();
		jMenuItem5 = new javax.swing.JMenuItem();


		jMenu1.setText("File");

		jMenu3.setText("Nouveau");

		jMenuItem2.setText("Service");
		jMenu3.add(jMenuItem2);

		JSeparator separator_2 = new JSeparator();
		jMenu3.add(separator_2);

		jMenuItem3.setText("Categore");
		jMenu3.add(jMenuItem3);

		jMenu1.add(jMenu3);
		jMenu1.add(jSeparator2);

		jMenuItem5.setText("Exit");
		jMenuItem5.addActionListener(new java.awt.event.ActionListener() {
			public void actionPerformed(java.awt.event.ActionEvent evt) {
				frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
				frame.setVisible(false);
			}
		});
		// jTextField2.
		jMenu1.add(jMenuItem5);

		jMenuBar1.add(jMenu1);

		frame.setJMenuBar(jMenuBar1);
		jMenu2 = new javax.swing.JMenu();

		jMenu2.setText("Edit");
		jMenuBar1.add(jMenu2);

		mntmNewMenuItem = new JMenuItem("Retour",'Z');
		mntmNewMenuItem.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_Z, InputEvent.CTRL_MASK));
		mntmNewMenuItem.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie (2).png"));
		jMenu2.add(mntmNewMenuItem);

		JMenuItem mntmNewMenuItem_5 = new JMenuItem("Retour_Inverce",'Y');
		mntmNewMenuItem_5.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_Y, InputEvent.CTRL_MASK));
		mntmNewMenuItem_5.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\downarrow1 - Copie.png"));
		jMenu2.add(mntmNewMenuItem_5);

		JSeparator separator_1 = new JSeparator();
		jMenu2.add(separator_1);

		mntmNewMenuItem_1 = new JMenuItem("Couper",'X');
		mntmNewMenuItem_1.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_X, InputEvent.CTRL_MASK));
		jMenu2.add(mntmNewMenuItem_1);

		mntmNewMenuItem_2 = new JMenuItem("Copier",'C');
		mntmNewMenuItem_2.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_C, InputEvent.CTRL_MASK));
		jMenu2.add(mntmNewMenuItem_2);

		mntmNewMenuItem_3 = new JMenuItem("Coller",'V');
		mntmNewMenuItem_3.setAccelerator(KeyStroke.getKeyStroke(KeyEvent.VK_V, InputEvent.CTRL_MASK));
		jMenu2.add(mntmNewMenuItem_3);

		JMenu mnNewMenu = new JMenu("S\u00E9curit\u00E9");
		jMenuBar1.add(mnNewMenu);
		mnNewMenu.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\FieldKey_small.png"));

		JMenuItem mntmScurit = new JMenuItem("Modife mot de passe");
		mntmScurit.setIcon(new ImageIcon("C:\\Nouveau dossier\\project\\image\\localhost _ 127.0.0.1 _ d _ phpMyAdmin 4.5.1_files\\page_edit.png"));
		mnNewMenu.add(mntmScurit);
		mntmScurit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {



				new Mdf_Sécurité().setVisible(true);


				//	new Athentefication().frame.setVisible(true);    
			}
		});
	}
	
}
