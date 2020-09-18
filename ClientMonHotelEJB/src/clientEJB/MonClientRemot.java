package clientEJB;

import java.util.List;
import java.util.Properties;
import java.util.Random;

import javax.naming.Context;
import javax.naming.InitialContext;
import javax.naming.NamingException;

import com.monmetier.MonhotelRemot;
import com.monprojct.Chambre;
public class MonClientRemot {

	static MonhotelRemot monhotelRemot;
	static Context context;

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		try {
			
			Properties jndiProperties = new Properties();
			jndiProperties.put(Context.URL_PKG_PREFIXES, "org.ejb.client.naming");
			jndiProperties.put(Context.INITIAL_CONTEXT_FACTORY, "org.jboss.naming.remote.client.InitialContextFactory");
			jndiProperties.put(Context.PROVIDER_URL, "http-remoting://localhost:8080");
			jndiProperties.put("jboss.naming.client.connect.options.org.xnio.Options.SASL_POLICY_NOPLAINTEXT", false);
			jndiProperties.put("jboss.naming.client.ejb.context", true);

			context = new InitialContext(jndiProperties);
			System.out.println("GOOD Configiration");

			monhotelRemot=(MonhotelRemot) context.lookup("MonHotelEAR/monhotelEjb/MH!com.monmetier.MonhotelRemot");
			System.out.println("connected ...");




			for (int i = 0; i <= 50; i++) {
				Random key1=new Random();
				Random key2=new Random();

				Chambre chambre=new Chambre();
				chambre.setEtat(true);
				int number=key2.nextInt(20)+1;

				switch (key1.nextInt(4)) {
				case 0:
					chambre.setNumbreLit(1L);
					chambre.setType("Simple Standard");
					chambre.setImag(""+8+"");
					chambre.setPrix(number*111.0);


					break;
				case 1: 	 
					chambre.setNumbreLit(1L);
					chambre.setType("Chambre individuelle");
					chambre.setImag(""+9+"");
					chambre.setPrix(number*222.0);


					break;
				case 2:

					chambre.setNumbreLit(5L);
					chambre.setType("Suite chambre");
					chambre.setImag(""+10+"");
					chambre.setPrix(number*444.0);


					break;	
				case 3:

					chambre.setNumbreLit(2L);
					chambre.setType("Chambre double");
					chambre.setImag(""+11+"");
					chambre.setPrix(number*333.0);

					break;	

				default:
					break;
				}


				monhotelRemot.addChambre(chambre);

			}


			List<Chambre> ListChambres=monhotelRemot.getChambreByEtatAndType(true, "Simple Standard"); 
			for (Chambre chambre : ListChambres) {
				System.out.println("Code"+chambre.getC_code()+"    Prix"+chambre.getPrix());	
			}

		} catch (NamingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
