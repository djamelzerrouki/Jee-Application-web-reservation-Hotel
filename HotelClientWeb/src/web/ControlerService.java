package web;
import java.io.IOException;
import java.io.PrintWriter;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.List;

import javax.ejb.EJB;
import javax.jws.WebParam;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.myproject.Chambre;
import com.myproject.Client;
import com.myproject.Commentaire;
import com.myproject.Hotel;
import com.myproject.Reservation;
import com.metier.hotelRemote;
@WebServlet(name="cs",urlPatterns= {"*.do"})
public class ControlerService extends HttpServlet{

	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private static String h_code;
	private static String c_code;
	private static String nmber;
	private static Date date1=new Date();
	private static Date  date2 =new Date();

	private static String type;
	private static String action;
	private static Chambre chambre;
	private static String nomLogin  ;
	private static String emailLogin;

	@EJB
	private hotelRemote metier;
	@Override
	protected void doGet(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		// TODO Auto-generated method stub

		String path =req.getServletPath();
		if (path.equals("/controleur.do")) {

			Reservation reserv  =new Reservation();
			reserv.setDateA(date1);
			reserv.setDateA(date2); 
			req.setAttribute("reserv", reserv);

			List<Hotel> ListHotels=metier.listHotel();
			req.setAttribute("Listhotel", ListHotels);

			List<Commentaire> listCommentaires=metier.listCommentaire();
			req.setAttribute("listCommentaires", listCommentaires);

			action=req.getParameter("action");

			if (action!=null) {
				if (action.equals("etoilaction")) {
					nmber=req.getParameter("nmber");
					List<Hotel> ListHotels1=metier.getHotelByEtiols(nmber);
					req.setAttribute("Listhotel", ListHotels1);
				}



				if (action.equals("voir")) {
					h_code=req.getParameter("h_code");
					List<Chambre> ListChambres=metier.getChambreByHotelAndEtat(new Long(h_code), true);  
					req.setAttribute("listChambres", ListChambres);
				}

			}			 
			req.getRequestDispatcher("VueHotel.jsp").forward(req, resp);

		}else 	if (path.equals("/Resarvation.do")) {


			action=req.getParameter("action");

			if (action!=null) {

				if (action.equals("Reservation")) {

					//	c_code=req.getParameter("c_code");
					//	chambre=metier.getChambreById(new Long(c_code));
					//req.getRequestDispatcher("Client.jsp").forward(req, resp);

					req.getRequestDispatcher("AffecherResarvation.jsp").forward(req, resp);

				}if (action.equals("LoginClient")) {

					c_code=req.getParameter("c_code");
					chambre=metier.getChambreById(new Long(c_code));
					req.getRequestDispatcher("Client.jsp").forward(req, resp);

					// 	req.getRequestDispatcher("AffecherResarvation.jsp").forward(req, resp);

				}
			}			 

		}
		else if (path.equals("/ConsulterReservation.do")) {



			String operation=req.getParameter("operation");

			if (operation!=null) {

				if (operation.equals("supprimer")) {

					String R_code=req.getParameter("r_code");
					metier.delitReservation(new Long(R_code));
					//req.getRequestDispatcher("CosulteResarvation.jsp").forward(req, resp);
					//doGet(req, resp);
					//	resp.sendRedirect("/ConsulterReservation.do");

				} else if (operation.equals("modifie")) {

					String R_code=req.getParameter("r_code");
					metier.updetReservation(new Long(R_code) ,new Date(), new Date());


				}
			}

			req.getRequestDispatcher("CosulteResarvation.jsp").forward(req, resp);

		}

	}
	@Override
	protected void doPost(HttpServletRequest req, HttpServletResponse resp) throws ServletException, IOException {
		resp.setContentType("text/html");

		String path=req.getServletPath();
		if (path.equals("/controleur.do")) {
			Reservation reserv  =new Reservation();
			reserv.setDateA(date1);
			reserv.setDateA(date2);
			action=req.getParameter("action");

			type=req.getParameter("type");

			String h_code=req.getParameter("h_code");
			if (action!=null) {
				if (action.equals("Rechercher")){
					String   dateA=req.getParameter("dateA");
					String   dateD=req.getParameter("dateD");
					type=req.getParameter("type");
					SimpleDateFormat formatter = new SimpleDateFormat("yyyy-mm-dd");

					String paye=req.getParameter("paye");
					if (paye!=null) {



						try { 
							System.out.println(dateA);
							date1 = formatter.parse(dateA.trim());
							System.out.println(date1);
							System.out.println(formatter.format(date1));
							date2 = formatter.parse(dateD.trim());
							System.out.println(date2);
							System.out.println(formatter.format(date2));

						} catch (ParseException e) {
							e.printStackTrace();
						}
						// String paye=req.getParameter("paye");
						List<Hotel> Listhotel=metier.getHotelByPaye(paye);
						req.setAttribute("Listhotel", Listhotel);

					} 
					req.getRequestDispatcher("VueHotel.jsp").forward(req, resp);	
				} 

				if (action.equals("Reserver")) {

					if (c_code!=null) {


						String email =req.getParameter("email");
						String tlephon = req.getParameter("tlephon");
						String nom = req.getParameter("nom");
						String prenom = req.getParameter("prenom");
						String description=req.getParameter("Description");

						List<Client> clients=metier.getClientLogin(nom, email);

						if (clients.size()==0) {
							Client client=new Client();
							client.setNom(nom);
							client.setPrenom(prenom);
							client.setEmail(email);
							client.setTlephon(tlephon);
							client.setDescription(description);
							client=	metier.addClient(client);



							Reservation reservation=new Reservation();
							reservation.setC_code(new Long(ControlerService.c_code));

							metier.updetChambre(new Long(ControlerService.c_code),false);

							reservation.setH_hotel(chambre.getH_hotel());
							reservation.setDateA(ControlerService.date1);
							reservation.setDateD( ControlerService.date2);
							reservation.setDateN(new Date());
							reservation.setCodeclient(client.getCodeclient());


							reservation=metier.addReservation(reservation);
							//doGet(req, resp);
							reservation.getR_code();
							req.setAttribute("reservation", reservation);
							req.setAttribute("client", client);
							req.getRequestDispatcher("ConfResarvation.jsp").forward(req, resp);
					 


					}else {
						PrintWriter printWriter=resp.getWriter();	
						printWriter.println("<h2>Ce client déjà existe !</h2>");
					} 

				}	
else {
						PrintWriter printWriter=resp.getWriter();	
						printWriter.println("<h2>sélectionnez votre chambre pour la réservation s'il vous plaît !</h2>");
					}


				} 
				if (action.equals("LoginReserver")) {

					if (c_code!=null) {
						String nom =req.getParameter("nom");
						String email  =req.getParameter("email");
						List<Client> listClient=metier.getClientLogin(nom ,  email );
						if (listClient.size()>0) {
							Client client=listClient.get(0);
							Long codeclient=client.getCodeclient();
							Reservation reservation=new Reservation();
							reservation.setC_code(new Long(ControlerService.c_code));

							metier.updetChambre(new Long(ControlerService.c_code),false);

							reservation.setH_hotel(chambre.getH_hotel());
							reservation.setDateA(ControlerService.date1);
							reservation.setDateD( ControlerService.date2);
							reservation.setDateN(new Date());
							reservation.setCodeclient(codeclient);

							reservation=metier.addReservation(reservation);

							reservation.getR_code();
							req.setAttribute("reservation", reservation);
							req.setAttribute("client", client);
							req.getRequestDispatcher("ConfResarvation.jsp").forward(req, resp);
						}else {
							PrintWriter printWriter=resp.getWriter();	
							printWriter.println("<h2>Ce client n'existe pas !</h2>");
						} 

					}	
 else {
							PrintWriter printWriter=resp.getWriter();	
							printWriter.println("<h2>sélectionnez votre chambre pour la réservation s'il vous plaît !</h2>");
						}
				 


				} 
				if (action.equals("Comment")) {


					String email =req.getParameter("email");
					String name = req.getParameter("name");
					String url = req.getParameter("url");
					String comment=req.getParameter("comment");
					Date date=new Date();
					Commentaire commentaire=new Commentaire();
					commentaire.setNom(name);
					commentaire.setEmail(email);
					commentaire.setDate(date);
					commentaire.setComment(comment);
					metier.addCommentaire(commentaire);
					doGet(req, resp);	
					//	req.getRequestDispatcher("VueHotel.jsp").forward(req, resp);
				}
				else if (action.equals("Reservation")) {

					c_code=req.getParameter("c_code");
					chambre=metier.getChambreById(new Long(c_code));
					//req.getRequestDispatcher("Client.jsp").forward(req, resp);

					req.getRequestDispatcher("AffecherResarvation.jsp").forward(req, resp);

				}
			}


		}
		else if (path.equals("/ConsulterReservation.do")) {
			nomLogin =req.getParameter("nom");
			emailLogin =req.getParameter("email");
			List<Client> listClient=metier.getClientLogin(nomLogin,  emailLogin);
			if (listClient.size()>0) {
				Client client=listClient.get(0);
				client.getCodeclient();

				List<Reservation> listreservations=metier.getReservationByIdClient(client.getCodeclient());
				req.setAttribute("listreservations", listreservations);

				req.getRequestDispatcher("CosulteResarvation.jsp").forward(req, resp);
			}else {
				PrintWriter printWriter=resp.getWriter();	
				printWriter.println("<h2>Ce client n'existe pas,<br> aucun  réservation!</h2>");
			} 


			//
			//			String operation=req.getParameter("operation");
			//			if (operation!=null) {
			//
			//				/*	if (operation.equals("supprimer")) {
			//		String R_code=req.getParameter("r_code");
			//		metier.delitReservation(new Long(R_code));
			//	 	resp.sendRedirect("/ConsulterReservation.do");
			//	}*/
			//
			//
			//			}


		}
	}

}
