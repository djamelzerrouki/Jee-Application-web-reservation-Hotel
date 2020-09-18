package clientEJB;
/*


  remote.connection.default.username=djamel
remote.connection.default.password=djamel


	final Hashtable jndiProperties = new Hashtable();
    jndiProperties.put(Context.URL_PKG_PREFIXES, "org.jboss.ejb.client.naming");
   // final Context context = new InitialContext(jndiProperties);
    // The app name is the application name of the deployed EJB

    final Context context = new InitialContext();

 //	jndiProperties.put(Context.URL_PKG_PREFIXES,"org.jboss.ejb.client.naming");

//final Context context = new InitialContext(jndiProperties);
    final String appName = "etudiantEjb/ET!com.metier.etudiantRemote";
 	final String moduleName = "etudiantEjb";

	// THIS IS THE NAME OF THE JAR WITH YOUR EJBs. Write its name here, without the .jar.
final String distinctName = "localhost:8080";

//	    AS7 allows deployments to have an distinct name. If you don't use this feature, let this field empty.
	//final String beanName = etudiantRemote.class.getSimpleName();
final String beanName = "ET";

	//EJB CLASS WITH THE IMPLEMENTATION (simple name)
final String viewClassName = etudiantRemote.class.getName();
//final String viewClassName = "com.metier.etudiantRemote";

	// FULLY QUALIFIED NAME OF THE REMOTE CLASS (interface).
//etudiantEjb/ET!com.metier.etudiantRemote
System.out.println("test1");

 */


import java.util.ArrayList;
import java.util.List;
import java.util.Properties;
import java.util.Random;

import javax.naming.Context;
import javax.naming.InitialContext;

import com.myproject.Chambre;
import com.myproject.Hotel;
import com.myproject.Reservation;
import com.metier.hotelRemote;


public class ClientRemot {
	static   hotelRemote hotelRemote ;
	static Context context;
	public static ArrayList<Hotel> Listhotels;
	public static ArrayList<Chambre> ListChambre;
	public static ArrayList<Reservation> ListRsarvation;
	public static void main(String[] args) {

		try {

			Properties jndiProperties = new Properties();
			jndiProperties.put(Context.URL_PKG_PREFIXES, "org.ejb.client.naming");
			jndiProperties.put(Context.INITIAL_CONTEXT_FACTORY, "org.jboss.naming.remote.client.InitialContextFactory");
			jndiProperties.put(Context.PROVIDER_URL, "http-remoting://localhost:8080");
			//http://192.168.1.104:8080/HotelClientWeb/controleur.do
			jndiProperties.put("jboss.naming.client.connect.options.org.xnio.Options.SASL_POLICY_NOPLAINTEXT", false);
			jndiProperties.put("jboss.naming.client.ejb.context", true);
			context = new InitialContext(jndiProperties);

			System.out.println("GOOD Configiration");
			hotelRemote = (hotelRemote) context.lookup("HotelEAR/hotelEJB/HT!com.metier.hotelRemote");
			System.out.println("connected ...");

			//etudiantRemote etudiantRemote =  (etudiantRemote) context.lookup("ejb:"+appName +"/" + moduleName +"/"+ distinctName+"/" + beanName + "!" + viewClassName);
  

			
			
			for (int i = 1; i <= 20; i++) {

				Hotel h=new Hotel();
				Random key1=new Random();
				Random key2=new Random();

				h.setH_Nom("Hotel"+i);
				h.setCodePostal("14000");
				h.setEtat(true);


				h.setH_imag("mages/demo/"+i+".jpg");

				switch (key1.nextInt(5)) {
				case 0:
					h.setH_Adress("Dar LBayda N°:"+i);
					h.setPaye("Maroc");
					h.setH_tlphon("+24"+(i*123456));

					break;
				case 1:
					h.setH_Adress("Paris N°:"+i);
					h.setPaye("France");
					h.setH_tlphon("+33"+(i*123456));

					break;
				case 2:
					h.setH_Adress("tiaret N°:"+i);
					h.setPaye("Algérie");
					h.setH_tlphon("+323"+(i*123456));

					break;	
				case 3:
					h.setH_Adress("Milone N°:"+i);
					h.setPaye("Italie");
					h.setH_tlphon("+70"+(i*123456));

					break;	
				case 4:
					h.setH_Adress("New York N°:"+i);
					h.setPaye("America");
					h.setH_tlphon("+11"+(i*123456));

					break;
				default:
					break;
				}
				switch (key2.nextInt(4)) {
				case 0:
					h.setEtoil("**");
					break;
				case 1:
					h.setEtoil("***");

					break;

				case 2:
					h.setEtoil("****");

					break;

				case 3:
					h.setEtoil("*****");

					break;	
				default:
					break;
				}

				// e.setCode(1L);

				hotelRemote.addHotel(h);
				System.out.println("Data inserted ["+h.getH_code()+","+h.getH_Nom() +","+h.getEtoil()+"] ");
			} 
			System.out.println("Doon!"); 

			/*
  Algérie 
Maroc
France
Italie
America

			 * */

			/*

Listhotels=(ArrayList<Hotel>)  hotelRemote.listHotel();

for (Hotel etud : Listhotels) {
	System.out.println("["+h.getH_code()+","+h.getH_Nom() +","+h.getEtoil()+"] ");}
Listhotels=(ArrayList<Hotel>)  hotelRemote.listHotel();
			 */
			System.out.println("#############################");
			Listhotels=(ArrayList<Hotel>)  hotelRemote.getHotelByPaye("Algérie");

			for (Hotel etud : Listhotels) {
				System.out.println("["+etud.getH_code()+","+etud.getH_Nom() +","+etud.getEtoil()+"] ");}
			System.out.println("#############################");

			Listhotels=(ArrayList<Hotel>)  hotelRemote.getHotelByEtiols("****");


			for (Hotel etud : Listhotels) {
				System.out.println("["+etud.getH_code()+","+etud.getH_Nom() +","+etud.getEtoil()+"] ");}
			Listhotels=(ArrayList<Hotel>)  hotelRemote.listHotel();

			System.out.println("°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°");

			for (Hotel etud : Listhotels) {
				System.out.println("["+etud.getH_code()+","+etud.getH_Nom() +","+etud.getEtoil()+","+etud.getH_imag()+"] ");}

			for (int i = 0; i <= 50; i++) {
				Random key1=new Random();
				Random key2=new Random();

				Chambre chambre=new Chambre();
				chambre.setEtat(true);
				int number=key2.nextInt(20)+1;
				chambre.setH_hotel((long) number);

				switch (key1.nextInt(4)) {
				case 0:
					chambre.setNumber_Lit(1L);
					chambre.setType("Simple Standard");
					chambre.setC_imag(""+8+"");
					chambre.setPrix(number*111);


					break;
				case 1: 	 
				chambre.setNumber_Lit(1L);
				chambre.setType("Chambre individuelle");
				chambre.setC_imag(""+9+"");
				chambre.setPrix(number*222);

				 
				break;
				case 2:

 					chambre.setNumber_Lit(5L);
					chambre.setType("Suite chambre");
					chambre.setC_imag(""+10+"");
					chambre.setPrix(number*444);

					 
					break;	
				case 3:

 					chambre.setNumber_Lit(2L);
					chambre.setType("Chambre double");
					chambre.setC_imag(""+11+"");
					chambre.setPrix(number*333);

					break;	

				default:
					break;
				}


				hotelRemote.addChambre(chambre);

			}


			/*

  Type de chambre
Simple Standard
Suite chambre
Chambre individuelle
Chambre double

			 * */
			//ListChambre=(ArrayList<Chambre>)  hotelRemote.getChambreByHotel(1L);
			ListChambre=(ArrayList<Chambre>)  hotelRemote.getChambreByHotelAndEtat(1L, true);


			for (Chambre chamb : ListChambre) {
				System.out.println("["+chamb.getC_code()+","+chamb.getH_hotel() +","+chamb.isEtat() +","+chamb.getPrix()+" DA] ");}

			
/*	  //ListRsarvation=(ArrayList<Reservation>)  hotelRemote.getReservationLogin("djamel", "jimmi@gmail.com");


			for (Reservation resrv : ListRsarvation) {
			//	System.out.println("["+resrv.getNom()+","+resrv.getEmail() +","+resrv.getPrenom()+","+resrv.getTlephon()+" ] ");
				}*/
 
			
			/*
			  
			hotelRemote.delitReservation(3l);
System.out.println("don !");


			   */
		
		} catch (Exception e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
		
		
	}	




}
