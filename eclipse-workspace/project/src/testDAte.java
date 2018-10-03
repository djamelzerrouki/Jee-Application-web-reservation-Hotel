import java.awt.EventQueue;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Date;
import java.util.Properties;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;

import org.jdatepicker.impl.JDatePanelImpl;
import org.jdatepicker.impl.JDatePickerImpl;
import org.jdatepicker.impl.UtilDateModel;


public class testDAte {

	private JFrame frame;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					testDAte window = new testDAte();
					window.frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
		
		
		Date date = Calendar.getInstance().getTime();
		
		DateFormat formate =new SimpleDateFormat("yyyy-MM-dd");
		String today =formate.format(date);
		System.out.println("today : "+today);

	}

	/**
	 * Create the application.
	 */
	public testDAte() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		ImageIcon ic =new ImageIcon("aaa.jpeg");

		frame = new JFrame();
		frame.setBounds(100, 100, 450, 300);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		JLabel lbl =new JLabel(ic);
		try {
			UtilDateModel  model =new UtilDateModel(Calendar.getInstance().getTime());
			JDatePanelImpl datepanel1 = new JDatePanelImpl(model, new Properties());
			frame.getContentPane().setLayout(null);
			//SimpleDateFormat S=new SimpleDateFormat("dd.MM.yyyy");
			JDatePickerImpl  datepicker =new JDatePickerImpl(datepanel1,null);
			datepicker.setBounds(0, 0, 231, 23);
			frame.getContentPane().add( datepicker);
			lbl.setBounds(0, 24, 231, 230);

			frame.add(lbl);	
			//frame.pack();


		} catch (Exception e1) {
			// TODO Auto-generated catch block
			System.out.println(e1.getMessage());
			
		}
	}
}
