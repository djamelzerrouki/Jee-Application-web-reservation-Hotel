package fonction;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;

import javax.swing.JOptionPane;

public class inputclass {

	public static void main(String[] args) throws FileNotFoundException  {
		// TODO Auto-generated method stub

int i=0;
try ( FileInputStream in =new FileInputStream("CV djamel.html");
		FileOutputStream out =new FileOutputStream("java seurs.txt");
) {
	
	while ((i=in.read())!=-1) {
		
		out.write((byte)i);

	}
	JOptionPane.showMessageDialog(null, " New file # java seurs.docx # ");

} catch (IOException e1) {
	// TODO Auto-generated catch block
	JOptionPane.showMessageDialog(null, e1.getMessage());
}

	} 
	}
