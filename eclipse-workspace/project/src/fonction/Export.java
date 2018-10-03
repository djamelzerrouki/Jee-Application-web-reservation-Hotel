package fonction;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Set;
import java.util.TreeMap;

import javax.swing.JTable;

import jxl.write.WriteException;
import jxl.write.biff.RowsExceededException;

import org.apache.poi.ss.usermodel.Cell;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;



public class Export {
	private static XSSFWorkbook wb;
	private static XSSFSheet ws;
	static JTable  tab0;
	private static String getdataVal(int x,int y){
		return tab0.getModel().getValueAt(x, y).toString();

	}
	public static  void WriteToExcel0(ArrayList<Object> arrayList,String nom_file) throws IOException, RowsExceededException, WriteException{
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
		data.put("0", new Object[]{"","",""});


		int i=0;	
		//	int i0=1;	

		while (arrayList.isEmpty()) {


			data.put(""+i+1+"", new Object[]{arrayList.get(0),arrayList.get(1),arrayList.get(2)});
			i++;

		}

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
				fes=new FileOutputStream(new File("E:/"+nom_file+".xlsx"));
				wb.write(fes);
				fes.close();
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} 
		}		
		Runtime.getRuntime().exec("C:\\Program Files\\Microsoft Office\\Office12\\EXCEL.exe  E:/"+nom_file+".xlsx"  );
	}
	
	
	@SuppressWarnings("unused")
	public static  void WriteToExcel( JTable tab,String nom_file) throws IOException, RowsExceededException, WriteException{
		tab0=tab;
		System.out.println(tab.getModel().getRowCount());
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

				fes=new FileOutputStream(new File("E:/"+nom_file+".xlsx"));


				wb.write(fes);


				fes.close();


			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} 

		}		

		Runtime.getRuntime().exec("C:\\Program Files\\Microsoft Office\\Office12\\EXCEL.exe  E:/"+nom_file+".xlsx"  );


	}
	@SuppressWarnings("unused")
	public static  void WriteToExcelJournal( JTable tab,String nom_file) throws IOException, RowsExceededException, WriteException{
		tab0=tab;
		System.out.println(tab.getModel().getRowCount());
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
		
		data.put("0", new Object[]{
				tab.getModel().getColumnName(0),tab.getModel().getColumnName(1),tab.getModel().getColumnName(2),
				tab.getModel().getColumnName(3),tab.getModel().getColumnName(4),tab.getModel().getColumnName(5),
				tab.getModel().getColumnName(6),tab.getModel().getColumnName(7),tab.getModel().getColumnName(8),tab.getModel().getColumnName(9)
				});
		
		
		int i=0;	
		//	int i0=1;	
		
		while (i<tab.getModel().getRowCount()) {
			
			
			data.put(""+i+1+"", new Object[]{getdataVal(i, 0),getdataVal(i, 1),getdataVal(i, 2),getdataVal(i, 3),getdataVal(i, 4),getdataVal(i, 5),getdataVal(i, 6),getdataVal(i, 7),getdataVal(i, 8),getdataVal(i, 9)});
			i++;
			
		}
		
		
		
		
		
		
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
				
				fes=new FileOutputStream(new File("E:/"+nom_file+".xlsx"));
				
				
				wb.write(fes);
				
				
				fes.close();
				
				
			} catch (Exception e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			} 
			
		}		
		
		Runtime.getRuntime().exec("C:\\Program Files\\Microsoft Office\\Office12\\EXCEL.exe  E:/"+nom_file+".xlsx"  );
		
		
	}

}
