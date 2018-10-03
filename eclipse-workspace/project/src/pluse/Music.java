package pluse;

import sun.audio.*;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.*;

import org.apache.poi.util.SystemOutLogger;

public class Music implements ActionListener{
	
	

	public static void main(String[] args)  {
		System.out.println("12");
	music01();
		try {
		//	Runtime.getRuntime().exec("C:\\Program Files\\Windows Media Player\\wmplayer.exe  C:\\Nouveau dossier\\project\\Docement\\1108.wav"  );
		} catch (Exception e) {
			// TODO Auto-generated catch block
System.out.println(e.getMessage());		}

		System.out.println("34");

	
	}	
	public static void music01(){
		
		
		AudioPlayer MGP=AudioPlayer.player;
		AudioStream BGM;
		AudioData MD;
		ContinuousAudioDataStream loop=null;
		try{
		
			BGM =new AudioStream(new FileInputStream("C:\\Nouveau dossier\\project\\Docement\\1108.wav"));
		MD =BGM.getData();
		loop=new ContinuousAudioDataStream(MD);
		
		
		}
		catch(IOException e){
			
			
			System.out.println(e.getMessage());
		}
	
		MGP.start(loop);
		}
/*
	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		music01();
	}*/
	@Override
	public void actionPerformed(ActionEvent arg0) {
		// TODO Auto-generated method stub
		
	}
	
}
