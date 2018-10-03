package project;




import java.awt.Color;
import java.awt.Font;
import java.awt.Toolkit;
import java.util.Date;

import javax.swing.JDialog;
import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JTabbedPane;
import javax.swing.border.BevelBorder;

import org.jdatepicker.impl.JDatePanelImpl;
import org.jdatepicker.impl.UtilDateModel;

public class New_fournisseur extends JDialog {

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	protected static 	New_fournisseur dialog;

	
	
	JFrame frame;
	public static 	UtilDateModel  model;
	public static 	JDatePanelImpl datepanel;
	static Date b;
	static String today;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		try {
			 dialog = new New_fournisseur();
			dialog.setDefaultCloseOperation(JDialog.DISPOSE_ON_CLOSE);
			dialog.setVisible(true);
		} catch (Exception e) {
			e.printStackTrace();
		}
	}

	/**
	 * Create the frame.
	 */
	public New_fournisseur() {
		setFont(new Font("Dialog", Font.PLAIN, 14));
		setIconImage(Toolkit.getDefaultToolkit().getImage("C:\\Users\\AK12\\Downloads\\gg2.jpg"));
		setTitle("Nouveau_Fournisseur");
	
	
		initialize();
}


	private void initialize() {
		setBounds(100, 100, 942, 692);
		//getContentPane().setLayout(null);
	
		JTabbedPane tabbedPane = new JTabbedPane(JTabbedPane.TOP);
		tabbedPane.setTabLayoutPolicy(JTabbedPane.SCROLL_TAB_LAYOUT);
		tabbedPane.setBounds(100, 100, 833, 630);
		tabbedPane.setBorder(new BevelBorder(BevelBorder.LOWERED, Color.PINK, null, null, null));
		
		getContentPane().add(tabbedPane);
	  fornesser.panel_Fornessuer(tabbedPane);
		
		
	
		
	}
}
/*
 
 
 
 
 
 
 */
 
 
 







	 