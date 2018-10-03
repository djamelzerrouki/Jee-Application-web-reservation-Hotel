package pluse;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.JRadioButton;
import javax.swing.JRadioButtonMenuItem;

import java.awt.Font;

import javax.swing.JPanel;
import javax.swing.border.TitledBorder;
import javax.swing.UIManager;

import java.awt.Color;

import javax.swing.border.BevelBorder;

import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.BorderLayout;

import javax.swing.JButton;

import org.apache.commons.codec.digest.Md5Crypt;
import org.jfree.chart.ChartFactory;
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

import project.Journal;
import sun.security.provider.MD5;
import sun.security.rsa.RSASignature.MD2withRSA;

import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;

public class statistique {

	public JFrame frame;
	private 	JRadioButton l;
	private 	JRadioButton p;
	private 	JRadioButton b;
	private JPanel linea;
	private JPanel Barras;
	private JPanel Pastel;
	private JButton btnNewButton;
	private JTable table;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		
		MD2withRSA m=new MD2withRSA();
		
		System.out.println(m.toString());
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					statistique window = new statistique();
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
	public statistique() {
		initialize();
	}

	/**
	 * Initialize the contents of the frame.
	 */
	private void initialize() {
		frame = new JFrame();
		frame.setBounds(100, 100, 705, 718);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.getContentPane().setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBorder(new TitledBorder(UIManager.getBorder("TitledBorder.border"), "Type de graphe", TitledBorder.LEADING, TitledBorder.TOP, null, new Color(0, 0, 0)));
		panel.setBounds(22, 26, 238, 71);
		frame.getContentPane().add(panel);
		panel.setLayout(null);
		
		 l = new JRadioButton("Linea");
		l.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				linea.setVisible(true);
				Barras.setVisible(false);
				Pastel.setVisible(false);
				linea.setLayout(null);
				l.setSelected(true);
				p.setSelected(false);
				b.setSelected(false);
				
			}
		});
		l.setBounds(6, 29, 72, 23);
		panel.add(l);
		l.setFont(new Font("Tahoma", Font.BOLD, 14));
		
		 b = new JRadioButton("Barras");
		 b.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
				Barras.setVisible(true);
				linea.setVisible(false);
				Pastel.setVisible(false);
				Barras.setLayout(null);
				b.setSelected(true);
				p.setSelected(false);
				l.setSelected(false);
				
		 	}
		 });
		b.setBounds(80, 29, 70, 23);
		panel.add(b);
		b.setFont(new Font("Tahoma", Font.BOLD, 14));
		
		 p = new JRadioButton("Pastel");
		 p.addActionListener(new ActionListener() {
		 	public void actionPerformed(ActionEvent arg0) {
		 		
		 		Pastel.setVisible(true);
				Barras.setVisible(false);
				linea.setVisible(false);
		 		Pastel.setLayout(null);
				p.setSelected(true);
				b.setSelected(false);
				l.setSelected(false);
		 	}
		 });
		p.setBounds(157, 29, 70, 23);
		panel.add(p);
		p.setFont(new Font("Tahoma", Font.BOLD, 14));
		
		JPanel panel_1 = new JPanel();
		panel_1.setBorder(new BevelBorder(BevelBorder.RAISED, Color.BLACK, Color.BLACK, Color.DARK_GRAY, Color.LIGHT_GRAY));
		panel_1.setBounds(22, 122, 642, 533);
		frame.getContentPane().add(panel_1);
		panel_1.setLayout(null);
		
		Barras = new JPanel();
		Barras.setBackground(Color.PINK);
		Barras.setBounds(10, 11, 622, 511);
		panel_1.add(Barras);
		
		linea = new JPanel();
		linea.setBackground(Color.ORANGE);
		linea.setBounds(10, 11, 622, 511);
		panel_1.add(linea);
		
		Pastel = new JPanel();
		Pastel.setBounds(10, 11, 622, 511);
		panel_1.add(Pastel);
		Pastel.setBackground(Color.CYAN);
		
		btnNewButton = new JButton("New button");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
				
				ChartPanel panel;
				JFreeChart chart=null;
				
				
				if (l.isSelected()) {
					//GRAFICO DE LIENAS
	
					int val=1;
					XYSplineRenderer renderer=new XYSplineRenderer();
					XYSeriesCollection dataset =new XYSeriesCollection();
					ValueAxis x=new NumberAxis();
					ValueAxis y=new NumberAxis();
					XYSeries series =new XYSeries("");
				
					linea.removeAll();
					
				try {
					
					for (int i = 0; i < table.getModel().getRowCount()-1; i++) {
						
						series.add(Float.parseFloat(String.valueOf(table.getValueAt(i, 0))),
								Float.parseFloat(String.valueOf(table.getValueAt(i, 1))));
					
						
						
					}
				} catch (NumberFormatException e) {
					// TODO Auto-generated catch block
val=0;				}
					
					if (val==1) {
						dataset.addSeries(series);
						
						x.setLabel("Eje X");
						y.setLabel("Eje Y");
						XYPlot plot;
						plot=new XYPlot(dataset, x, y, renderer);
						chart=new JFreeChart(plot);
						chart.setTitle("  LIENAS  ");
						
					} else {
JOptionPane.showMessageDialog(null, "la table et vide");
					}
				} else {if (b.isSelected()) {
					//GRAFICO DE BARRAS

					DefaultCategoryDataset data =new DefaultCategoryDataset();
				//	String prod1="Sopas";
					String prod2="Soda";
					String prod1="prix";

					String dia1="Dia 1";
					String dia2="Dia 2";
					String dia3="Dia 3";
					String dia4="Dia 4";
					
					/*data.addValue(18, prod1, dia1);
					data.addValue(15, prod1, dia2);
					data.addValue(14, prod1, dia3);
					data.addValue(10, prod1, dia4);*/
			
					data.addValue(18, prod2, dia1);
					data.addValue(15, prod2, dia2);
					data.addValue(14, prod2, dia3);
					data.addValue(10, prod2, dia4);
					
					for (int i = 0; i < Journal.table_Journal.getModel().getRowCount()-1; i++) {
						
						data.addValue(Float.parseFloat(String.valueOf(Journal.table_Journal.getValueAt(i,9))), prod1, Journal.table_Journal.getValueAt(i, 1
								).toString());

						data.addValue(Float.parseFloat(String.valueOf(Journal.table_Journal.getValueAt(i,9))), "Article", Journal.table_Journal.getValueAt(i, 2
								).toString());
		
					}

					chart= ChartFactory.createLineChart3D("Présentation Graphique de journal", " La date", "Prix", data,
							PlotOrientation.VERTICAL,true,true,true);
				
					CategoryPlot plot=(CategoryPlot) chart.getPlot();
					plot.setDomainGridlinesVisible(true);
							
							

					/*chart= ChartFactory.createStackedBarChart3D("Garaph de Barras ", "Dia", "Cantidad", data,
							PlotOrientation.VERTICAL,true,true,true);
				
					CategoryPlot plot=(CategoryPlot) chart.getPlot();
					plot.setDomainGridlinesVisible(true);*/
							
							
				} else {
					//GRAFICO DE PASTEL

					DefaultPieDataset data =new DefaultPieDataset();

					data.setValue("aaaa",20);
					data.setValue("bbbb",20);
					data.setValue("cccc",20);
					data.setValue("dddd",20);
					data.setValue("eeee",20);
					chart = ChartFactory.createPieChart3D("Garaph de PieChart ", data, true	, true, true);
					
					
					
					
				}

				}
			
			panel=new ChartPanel(chart);
			panel.setBounds(0, 0, 622, 511);
			if (l.isSelected()) {
				
				linea.add(panel);
				linea.repaint();
			} else {if (b.isSelected()) {
				Barras.add(panel);
				Barras.repaint();
			} else {
				Pastel.add(panel);
				Pastel.repaint();
			}

			}
			
			
			
			}
		});
		btnNewButton.setBounds(485, 42, 89, 23);
		frame.getContentPane().add(btnNewButton);
		
		table = new JTable();
		table.setModel(new DefaultTableModel(
			new Object[][] {
				{null, null},
				{null, null},
				{null, null},
				{null, null},
			},
			new String[] {
				"X", "Y"
			}
		));
		table.setBounds(287, 11, 140, 100);
		frame.getContentPane().add(table);
	}
}
